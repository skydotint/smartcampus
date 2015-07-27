<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Talentedstudents_model extends Common_model {

    function __construct() {
        parent::__construct();
    }

    public function getTalentedstudents() {
        $query = $this->db->query("SELECT * FROM talentedstudents ORDER BY talentedstudentid DESC");
        $rows = $query->result_array();
        return $rows;
    }

}
