<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Teachers_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
    public function getTeachers() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_teachers . ' WHERE enrollmentstatus=1');
        $rows = $query->result_array();
        return $rows;
    }
	
	public function getAllteachers() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_teachers);
        $rows = $query->result_array();
        return $rows;
    }
	
	public function getXteachers() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_teachers . ' WHERE enrollmentstatus=2');
        $rows = $query->result_array();
        return $rows;
    }
	
	public function getXheadteachers() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_teachers . ' WHERE enrollmentstatus=3');
        $rows = $query->result_array();
        return $rows;
    }
	
	public function getCount() {
        $row = $this->common_model->recordCount($this->common_model->_teachers);
        return $row;
    }

    public function getTeachersWithPager($start, $limit) {
        $rows = $this->common_model->getRecordsWithPager($this->common_model->_teachers, $start, $limit);
        return $rows;
    }
	

}