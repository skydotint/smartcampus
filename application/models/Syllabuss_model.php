<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Syllabuss_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
    public function getSyllabuss() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_syllabuss);
        $rows = $query->result_array();
        return $rows;
    }

}