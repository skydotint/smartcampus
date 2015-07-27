<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Basic_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
    public function getGenders() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_genders);
        $rows = $query->result_array();
        return $rows;
    }
    
    public function getEnrollments() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_genders);
        $rows = $query->result_array();
        return $rows;
    }

}
