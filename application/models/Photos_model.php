<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Photos_model extends Common_model {

    function __construct() {
        parent::__construct();
    }
    
    public function getAllPhotos() {
        $query = $this->db->query("SELECT * FROM photos ORDER BY photoid DESC");
        $rows = $query->result_array();
        return $rows;
    }
	
	public function getPhotos() {
        $query = $this->db->query("SELECT * FROM photos ORDER BY photoid DESC Limit 0,3");
        $rows = $query->result_array();
        return $rows;
    }
	
	public function getCount() {
        $row = $this->common_model->recordCount($this->common_model->_photos);
        return $row;
    }
	
	public function getPhotosWithPager($start, $limit) {
        $rows = $this->common_model->getRecordsWithPager($this->common_model->_photos, $start, $limit);
        return $rows;
    }

}