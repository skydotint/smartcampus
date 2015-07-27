<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Settings_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
    public function getSettings() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_settings);
        $rows = $query->result_array();
        return $rows;
    }

}