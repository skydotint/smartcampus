<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Guardians_model extends Common_model {

    function __construct() {
        parent::__construct();
    }

    public function getGuardians() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_guardians);
        $rows = $query->result_array();
        return $rows;
    }

    public function getGuardian($studentuserid) {
        $where = " studentuserid = " . $studentuserid;
        $all = "all";
        $row = $this->common_model->getRecords($this->common_model->_guardianof, $where, $all);
        return $row;
    }

}
