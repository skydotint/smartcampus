<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profiles extends CI_Controller {

    private $records = array();
    private $results = array();
    private $_session = array();
    private $status = array("status" => 0, "msg" => NULL);
    private $where = array();
    private $id;
    private $pagetitle;
    private $isUpdate = 0;
    private $isDelete = 0;
    private $isInsert = 0;

    function __construct() {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("applicants_model");
        $this->load->model("guardians_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "User Profiles";
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('profiles/viewprofile');
        $this->load->view('admintheme/footer');
    }
	
	public function editprofileform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('profiles/editprofileform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function editprofileajax() {
        $this->id = $this->input->post('id', true);
        $this->where = array('id' => $this->id);
        $this->records = array(
            'password' => $this->input->post('password', true)
        );

        $this->results = $this->common_model->updateRecords($this->common_model->_usersTable, $this->records, $this->where);
        if ($this->results == 1) {
            $this->status['status'] = 1;
            $this->status['msg'] = "Password";
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "Something went wrong when saving the file, please try again.";
        }
        echo jsonEncode($this->status);
    }

}
