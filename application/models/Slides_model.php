<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Slides_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
    public function getSlides() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_slides);
        $rows = $query->result_array();
        return $rows;
    }

}