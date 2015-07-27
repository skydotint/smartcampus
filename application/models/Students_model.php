<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Students_model extends Common_model {

    function __construct() {
        parent::__construct();
    }

    public function getStudents() {
        $query = $this->db->query("SELECT * FROM students LEFT JOIN classes ON students.class=classes.classid LEFT JOIN sections ON students.section=sections.sectionid WHERE enrollmentstatus=1 ORDER BY students.studentid");
        $rows = $query->result_array();
        return $rows;
    }

    public function getAllstudents() {
        $query = $this->db->query("SELECT * FROM students LEFT JOIN classes ON students.class=classes.classid LEFT JOIN sections ON students.section=sections.sectionid");
        $rows = $query->result_array();
        return $rows;
    }

    public function getXstudents() {
        $query = $this->db->query("SELECT * FROM students LEFT JOIN classes ON students.class=classes.classid LEFT JOIN sections ON students.section=sections.sectionid WHERE enrollmentstatus=2");
        $rows = $query->result_array();
        return $rows;
    }

    public function getCount() {
        $row = $this->common_model->recordCount($this->common_model->_students);
        return $row;
    }

    public function getStudentsWithPager($start, $limit) {
        $rows = $this->common_model->getRecordsWithPager($this->common_model->_students, $start, $limit);
        return $rows;
    }
	
	 public function getXStudentsWithPager($where, $start, $limit) {
        $rows = $this->common_model->getRecordsWithPagerwhere($this->common_model->_students, $start, $limit);
        return $rows;
    }
	
	

}
