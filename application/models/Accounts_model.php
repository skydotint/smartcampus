<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Accounts_model extends CI_model {

    function __construct() {
        parent::__construct();
        $this->load->model('common_model');
    }
    
    public function getAccounts() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_accounts);
        $rows = $query->result_array();
        return $rows;
    }
	
	public function getCredits() {
		$accounts = $this->common_model->_accounts;
        $query = $this->db->query("SELECT * FROM $accounts WHERE `isActive`=1");
        $rows = $query->result_array();
        return $rows;
    }
	
	public function getDebits() {
		$accounts = $this->common_model->_accounts;
        $query = $this->db->query("SELECT * FROM $accounts WHERE `isActive`=2");
        $rows = $query->result_array();
        return $rows;
    }
}