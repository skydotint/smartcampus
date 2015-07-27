<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Departments_model extends Common_model {

    function __construct() {
        parent::__construct();
    }

    public function getDepartments() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_departments);
        $rows = $query->result_array();
        return $rows;
    }
}
