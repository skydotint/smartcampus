<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends Common_model {

    function __construct() {
        parent::__construct();
    }

    public function getLastuserid() {
        $query = $this->db->query("SELECT * FROM users ORDER BY id DESC LIMIT 0,1");
        $rows = $query->result_array();
        return $rows;
    }
}
