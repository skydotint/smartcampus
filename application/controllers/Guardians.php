<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Guardians extends CI_Controller {

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
        $this->load->model("students_model");
        $this->load->model("users_model");
        $this->load->model("guardians_model");
        $this->load->model("classes_model");
        $this->load->model("sections_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));
		$this->load->library("pagination");

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }


    public function index() {
		$start=0;
		$limit=1;
		$this->data['user'] = $this->ion_auth->user()->row();
		$this->id = $this->uri->segment(2);
        $this->where = array('studentid' => $this->id);
		$this->data['students'] = $this->common_model->getRecords($this->common_model->_students, $this->where, 's');
		$this->data['users'] = $this->users_model->getLastuserid();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('guardians/addguardianform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addguardianajax() {
        $config['upload_path'] = "uploads/guardians/";
        $config['allowed_types'] = "gif|jpg|jpeg|png";
        $config['max_size'] = "5000";
        $config['max_width'] = "1907";
        $config['max_height'] = "1280";
        //$this->load->library('upload', $config);
        $this->upload->initialize($config);
       
            if (!$this->upload->do_upload('photo')) {
            //echo $this->upload->display_errors();
			$this->records = array(
                'studentuserid' => $this->input->post('studentuserid', true),
                'userid' => $this->input->post('username', true),
                'fullname' => $this->input->post('fullname', true),
				'sf_name' => $this->input->post('fullname', true),
				'sm_name' => $this->input->post('fullname', true),
                'occupation' => $this->input->post('occupation', true),
                'mobile' => $this->input->post('mobile', true),
                'sf_phone' => $this->input->post('mobile', true),
                'sm_phone' => $this->input->post('mobile', true),
                'gender' => $this->input->post('gender', true),
                'email' => $this->input->post('email', true),
                'permanentaddress' => $this->input->post('permanentaddress', true),
                'presentaddress' => $this->input->post('presentaddress', true),
                'isActive' => 1
            );
			$this->strecords = array(
                'studguardianid' => $this->input->post('username', true)
            );
			 $this->urecords = array(
                'username' => $this->input->post('username', true)
            ); 
			$this->ugrpuprecords = array(
                'user_id' => $this->input->post('id', true),
                'group_id' => 4
            ); 
        } else {
            $data = $this->upload->data();
            $this->records = array(
                'studentuserid' => $this->input->post('studentuserid', true),
                'userid' => $this->input->post('username', true),
                'fullname' => $this->input->post('fullname', true),
				'sf_name' => $this->input->post('fullname', true),
				'sm_name' => $this->input->post('fullname', true),
                'occupation' => $this->input->post('occupation', true),
                'mobile' => $this->input->post('mobile', true),
                'sf_phone' => $this->input->post('mobile', true),
                'sm_phone' => $this->input->post('mobile', true),
                'gender' => $this->input->post('gender', true),
                'email' => $this->input->post('email', true),
                'permanentaddress' => $this->input->post('permanentaddress', true),
                'presentaddress' => $this->input->post('presentaddress', true),
                'photo' => $data['file_name'],
                'isActive' => 1
            );
			$this->strecords = array(
                'studguardianid' => $this->input->post('username', true)
            );
			 $this->urecords = array(
                'username' => $this->input->post('username', true)
            );
			$this->ugrpuprecords = array(
                'user_id' => $this->input->post('id', true),
                'group_id' => 4
            ); 
			 }
			$this->id = $this->input->post('studentuserid', true);
			$this->where = array('studentid' => $this->id);
            $this->results = $this->common_model->insertRecords($this->common_model->_guardians, $this->records);
            $this->results = $this->common_model->insertRecords($this->common_model->_usersTable, $this->urecords);
            $this->results = $this->common_model->insertRecords($this->common_model->_users_groups, $this->ugrpuprecords);
			$this->results = $this->common_model->updateRecords($this->common_model->_students, $this->strecords, $this->where);

            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Guardian";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
      
    }

    public function editguardianform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->id = $this->uri->segment(2);
        $this->where = array('userid' => $this->id);
		$this->data['guardians'] = $this->common_model->getRecords($this->common_model->_guardians, $this->where, 's');
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('guardians/editguardianform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function editguardianajax() {
        $config['upload_path'] = "uploads/guardians/";
		$config['allowed_types'] = "gif|jpg|jpeg|png";
		$config['max_size'] = "5000";
		$config['max_width'] = "1907";
		$config['max_height'] = "1280";
		$this->upload->initialize($config);
        if (!$this->upload->do_upload('photo')) {
            //echo $this->upload->display_errors();
			$this->records = array(
                'fullname' => $this->input->post('fullname', true),
				'sf_name' => $this->input->post('fullname', true),
				'sm_name' => $this->input->post('fullname', true),
                'occupation' => $this->input->post('occupation', true),
                'mobile' => $this->input->post('mobile', true),
                'sf_phone' => $this->input->post('mobile', true),
                'sm_phone' => $this->input->post('mobile', true),
                'gender' => $this->input->post('gender', true),
                'email' => $this->input->post('email', true),
                'permanentaddress' => $this->input->post('permanentaddress', true),
                'presentaddress' => $this->input->post('presentaddress', true),
                'isActive' => 1
            );
        } else {
            $data = $this->upload->data();
            $this->records = array(
                'fullname' => $this->input->post('fullname', true),
				'sf_name' => $this->input->post('fullname', true),
				'sm_name' => $this->input->post('fullname', true),
                'occupation' => $this->input->post('occupation', true),
                'mobile' => $this->input->post('mobile', true),
                'sf_phone' => $this->input->post('mobile', true),
                'sm_phone' => $this->input->post('mobile', true),
                'gender' => $this->input->post('gender', true),
                'email' => $this->input->post('email', true),
                'permanentaddress' => $this->input->post('permanentaddress', true),
                'presentaddress' => $this->input->post('presentaddress', true),
                'photo' => $data['file_name'],
                'isActive' => 1
            );
			 }
			$this->id = $this->input->post('userid', true);
			$this->where = array('userid' => $this->id);
            $this->results = $this->common_model->updateRecords($this->common_model->_guardians, $this->records, $this->where);
            if ($this->results == 1) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Guardian";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
       
    }
}
