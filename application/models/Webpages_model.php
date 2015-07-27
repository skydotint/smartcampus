<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Webpages_model extends Common_model {

    
    
    public function getPages() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_webpages);
        $rows = $query->result_array();
        return $rows;
    }
	
	public function getParentpages() {
        $query = $this->db->query("SELECT * FROM webpages WHERE parentid=0");
        $rows = $query->result_array();
        return $rows;
    }
	public function getChildpages($id) {
        $query = $this->db->query("SELECT * FROM webpages WHERE parentid=".$id);
        $rows = $query->result_array();
        return $rows;
    }

}