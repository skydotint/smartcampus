<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Holidays_model extends Common_model {

    function __construct() {
        parent::__construct();
    }

    public function getHolidays() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_holidays);
        $rows = $query->result_array();
        return $rows;
    }

}
