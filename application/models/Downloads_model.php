<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Downloads_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
    public function getDownloads() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_downloads);
        $rows = $query->result_array();
        return $rows;
    }

	public function getDownloadslimit() {
		$query = $this->db->query("SELECT * FROM " . $this->common_model->_downloads . ' ORDER BY downloadid ASC LIMIT 0,7');
        $rows = $query->result_array();
        return $rows;
    }
}