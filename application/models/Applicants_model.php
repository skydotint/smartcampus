<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Applicants_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
    public function getApplicants() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_applicants);
        $rows = $query->result_array();
        return $rows;
    }

}