<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Academiccouncillors_model extends Common_model {

    function __construct() {
        parent::__construct();
    }

    public function getAcademiccouncillors() {
        $query = $this->db->query("SELECT * FROM academiccouncillors ORDER BY academiccouncillorid DESC");
        $rows = $query->result_array();
        return $rows;
    }

}
