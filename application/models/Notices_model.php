<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Notices_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
    public function getNotices() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_notices);
        $rows = $query->result_array();
        return $rows;
    }
	
	public function getNoticeslimit() {
		$query = $this->db->query("SELECT * FROM " . $this->common_model->_notices . ' ORDER BY noticeid ASC LIMIT 0,6');
        $rows = $query->result_array();
        return $rows;
    }
	
	
}