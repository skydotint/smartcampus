<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mediauploads_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
    public function getMediauploads() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_mediauploads);
        $rows = $query->result_array();
        return $rows;
    }

}