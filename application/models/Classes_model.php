<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Classes_model extends Common_model {

    function __construct() {
        parent::__construct();
    }

    public function getClassess() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_classes);
        $rows = $query->result_array();
        return $rows;
    }

    public function getExams() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_exams);
        $rows = $query->result_array();
        return $rows;
    }

}
