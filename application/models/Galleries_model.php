<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Galleries_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
    public function getGalleries() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_galleries);
        $rows = $query->result_array();
        return $rows;
    }

}