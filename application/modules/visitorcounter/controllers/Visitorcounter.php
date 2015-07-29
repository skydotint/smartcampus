<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Visitorcounter extends MX_Controller {

    private $records = array();
    private $results = array();
    private $_session = array();
    private $status = array("status" => 0, "msg" => NULL);
    private $where = array();
    private $id;
    private $pagetitle;
    private $isUpdate = 0;
    private $isDelete = 0;
    private $isInsert = 0;

    function __construct() {
        parent::__construct();
        $this->load->model("webpages_model");
        $this->load->model("common_model");
    }

    function counterajax() {
        error_reporting(0);
        $counter_expire = 600;
        $counter_ignore_agents = array('bot', 'bot1', 'bot3');
        $counter_ignore_ips = array('127.0.0.2', '127.0.0.3');
        $counter_agent = $_SERVER['HTTP_USER_AGENT'];
        $counter_ip = $_SERVER['REMOTE_ADDR'];
        $counter_time = time();
        //$now = NOW();
        $now = date("Y-m-d H:i:s", NOW());
        //echo $now;
        $counter_connected = true;
        if ($counter_connected == true) {
            $ignore = 0;
            $firstcount = $this->common_model->recordCount($this->common_model->_counter_values);
            if ($firstcount == 0) {
                $this->records = array(
                    'id' => 1,
                    'day_id' => date("z"),
                    'day_value' => 1,
                    'yesterday_id' => (date("z") - 1),
                    'yesterday_value' => 0,
                    'week_id' => date("W"),
                    'week_value' => 1,
                    'month_id' => date("n"),
                    'month_value' => 1,
                    'year_id' => date("Y"),
                    'year_value' => 1,
                    'all_value' => 1,
                    'record_date' => $now,
                    'record_value' => 1
                );

                $this->results = $this->common_model->insertRecords($this->common_model->_counter_values, $this->records);
                $ignore = 1;
            } 
            
            //echo NOW();
            $row = $this->common_model->getRecords($this->common_model->_counter_values, $this->where, 's');
            $day_id = $row['day_id'];
            $day_value = $row['day_value'];
            $yesterday_id = $row['yesterday_id'];
            $yesterday_value = $row['yesterday_value'];
            $week_id = $row['week_id'];
            $week_value = $row['week_value'];
            $month_id = $row['month_id'];
            $month_value = $row['month_value'];
            $year_id = $row['year_id'];
            $year_value = $row['year_value'];
            $all_value = $row['all_value'];
            $record_date = $row['record_date'];
            $record_value = $row['record_value'];
            //echo $record_value;
           // echo "asd";
            //print_r($counter_ignore_agents);
            //echo $ignore;
            
            
            $length = sizeof($counter_ignore_agents);
            for ($i = 0; $i < $length; $i++) {
                if (substr_count($counter_agent, strtolower($counter_ignore_agents[$i]))) {
                    $ignore = 1;
                    break;
                }
            }
            
            
            
            //print_r($ignore);
            
            $length = sizeof($counter_ignore_ips);
            for ($i = 0; $i < $length; $i++) {
                if ($counter_ip == $counter_ignore_ips[$i]) {
                    $ignore = 1;
                    break;
                }
            }
            
            
            //echo $ignore;

            /*if($ignore == 0) {
                $sql = "DELETE FROM counter_ips WHERE unix_timestamp(NOW())-unix_timestamp(visit) >= $counter_expire";
                echo $sql;
                $this->db->query($sql);
            }*/

            if($ignore == 0) {
                //echo $ignore;
                $this->where = array('ip' => $counter_ip);
                $this->records = array('visit' => $now);
                $this->results = $this->common_model->updateRecords($this->common_model->_counter_ips, $this->records, $this->where);
                $afftectedRows = $this->db->affected_rows();
                //print_r($afftectedRows);
                //echo $afftectedRows;
                if ($afftectedRows > 0) {
                    $ignore = 1;
                } else {
                    $this->records = array(
                        'ip' => $counter_ip,
                        'visit' => $now,
                    );
                    $this->results = $this->common_model->insertRecords($this->common_model->_counter_ips, $this->records);
                }
            }
            
            //echo $ignore;

            if ($ignore == 0) {
                if ($day_id == (date("z") - 1)) {
                    $yesterday_value = $day_value;
                } else {
                    if ($yesterday_id != (date("z") - 1)) {
                        $yesterday_value = 0;
                    }
                }
                $yesterday_id = (date("z") - 1);
                if ($day_id == date("z")) {
                    $day_value++;
                } else {
                    $day_value = 1;
                    $day_id = date("z");
                }
                if ($week_id == date("W")) {
                    $week_value++;
                } else {
                    $week_value = 1;
                    $week_id = date("W");
                }
                if ($month_id == date("n")) {
                    $month_value++;
                } else {
                    $month_value = 1;
                    $month_id = date("n");
                }
                if ($year_id == date("Y")) {
                    $year_value++;
                } else {
                    $year_value = 1;
                    $year_id = date("Y");
                }
                $all_value++;
                if ($day_value > $record_value) {
                    $record_value = $day_value;
                    $record_date = date("Y-m-d H:i:s");
                }


                $this->where = array('id' => 1);
                $this->records = array(
                    'day_id' => $day_id,
                    'day_value' => $day_value,
                    'yesterday_id' => $yesterday_id,
                    'yesterday_value' => $yesterday_value,
                    'week_id' => $week_id,
                    'week_value' => $week_value,
                    'month_id' => $month_id,
                    'month_value' => $month_value,
                    'year_id' => $year_id,
                    'year_value' => $year_value,
                    'all_value' => $all_value,
                    'record_date' => $record_date,
                    'record_value' => $record_value
                );
                $this->results = $this->common_model->updateRecords($this->common_model->_counter_values, $this->records, $this->where);
            }
        }
    }

    /*function bn2enNumber($number) {
        $search_array = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
        $replace_array = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
        $en_number = str_replace($replace_array, $search_array, $number);
        return $en_number;
    }

    function countershow() {
        error_reporting(0);
        $row = $this->common_model->getRecords($this->common_model->_counter_values, $this->where, 's');
        $day_id = $row['day_id'];
        $day_value = $row['day_value'];
        $yesterday_id = $row['yesterday_id'];
        $yesterday_value = $row['yesterday_value'];
        $week_id = $row['week_id'];
        $week_value = $row['week_value'];
        $month_id = $row['month_id'];
        $month_value = $row['month_value'];
        $year_id = $row['year_id'];
        $year_value = $row['year_value'];
        $all_value = $row['all_value'];
        $record_date = $row['record_date'];
        $record_value = $row['record_value'];
        $data = "<p>  
                » $day_value আজ<br>
                » $yesterday_value গতকাল<br>
                » $week_value সপ্তাহ<br>
                » $month_value মাস<br>
                » $year_value বছর<br>
                » $all_value মোট   </p>";
        
        return bn2enNumber($data);
    }*/

}
