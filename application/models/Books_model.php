<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Books_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
    public function getBooks() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_books);
        $rows = $query->result_array();
        return $rows;
    }

}