<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Staffs_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
    public function getStaffs() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_staffs);
        $rows = $query->result_array();
        return $rows;
    }
	
	 public function getXstaffs() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_staffs);
        $rows = $query->result_array();
        return $rows;
    }
	
	public function getCount() {
        $row = $this->common_model->recordCount($this->common_model->_staffs);
        return $row;
    }

    public function getStaffsWithPager($start, $limit) {
        $rows = $this->common_model->getRecordsWithPager($this->common_model->_staffs, $start, $limit);
        return $rows;
    }

}