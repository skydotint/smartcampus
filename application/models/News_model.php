<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class News_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
    public function getNews() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_news);
        $rows = $query->result_array();
        return $rows;
    }
	
	public function getNewslimit() {
		$query = $this->db->query("SELECT * FROM " . $this->common_model->_news . ' ORDER BY newsid ASC LIMIT 0,6');
        $rows = $query->result_array();
        return $rows;
    }

}