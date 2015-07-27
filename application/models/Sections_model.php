<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sections_model extends Common_model {

    function __construct() {
        parent::__construct();
    }

    public function getSections() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_sections);
        $rows = $query->result_array();
        return $rows;
    }

}
