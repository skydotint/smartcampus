<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Othersresults_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
    public function getOthersresults() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_othersresults);
        $rows = $query->result_array();
        return $rows;
    }

}