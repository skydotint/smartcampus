<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Financialdepartments_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
    public function getFinancialdepartments() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_financialdepartments);
        $rows = $query->result_array();
        return $rows;
    }

}