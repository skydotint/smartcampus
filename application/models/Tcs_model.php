<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tcs_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
	
	public function getTcs() {
        $query = $this->db->query("SELECT * FROM tcs LEFT JOIN students ON tcs.studentuserid=students.studentuserid LEFT JOIN classes ON students.class=classes.classid WHERE tcname=1 AND tcs.isActive=0");
        $rows = $query->result_array();
        return $rows;
    }
	
	public function getTestimonials() {
        $query = $this->db->query("SELECT * FROM tcs LEFT JOIN students ON tcs.studentuserid=students.studentuserid LEFT JOIN classes ON students.class=classes.classid WHERE tcname=2 AND tcs.isActive=0");
        $rows = $query->result_array();
        return $rows;
    }
	
	public function getProttoyans() {
        $query = $this->db->query("SELECT * FROM tcs LEFT JOIN students ON tcs.studentuserid=students.studentuserid LEFT JOIN classes ON students.class=classes.classid WHERE tcname=3 AND tcs.isActive=0");
        $rows = $query->result_array();
        return $rows;
    }
	
	public function getTotlists() {
        $query = $this->db->query("SELECT * FROM tcs LEFT JOIN students ON tcs.studentuserid=students.studentuserid LEFT JOIN classes ON students.class=classes.classid WHERE tcname=4 AND tcs.isActive=0");
        $rows = $query->result_array();
        return $rows;
    }
	
	public function getPrevious() {
        $query = $this->db->query("SELECT * FROM tcs LEFT JOIN students ON tcs.studentuserid=students.studentuserid LEFT JOIN classes ON students.class=classes.classid WHERE tcs.isActive=1");
        $rows = $query->result_array();
        return $rows;
    }

}