<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Talentedstudents extends CI_Controller {

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
        $this->load->model("talentedstudents_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View Talented Students";
        $this->data['talentedstudents'] = $this->talentedstudents_model->getTalentedstudents();
        $this->data['guardianof'] = $this->guardians_model->getGuardian(1);
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('talentedstudents/viewtalentedstudents', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addtalentedstudentform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('talentedstudents/addtalentedstudentform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function viewtalentedstudentprofile() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->id = $this->uri->segment(2);
        $this->where = array('talentedstudentid' => $this->id);
        //var_dump($this->where);
        $this->data['talentedstudents'] = $this->common_model->getRecords($this->common_model->_talentedstudents, $this->where, 's');
        //var_dump($this->data['talentedstudents']);
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('talentedstudents/viewtalentedstudentprofile', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addtalentedstudentajax() {
        $config['upload_path'] = "uploads/talentedstudents/";
        $config['allowed_types'] = "gif|jpg|jpeg|png";
        $config['max_size'] = "5000";
        $config['max_width'] = "1907";
        $config['max_height'] = "1280";
        //$this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('photo')) {
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();

            $this->records = array(
                'firstname' => $this->input->post('firstname', true),
                'middlename' => $this->input->post('middlename', true),
                'lastname' => $this->input->post('lastname', true),
                'sphone' => $this->input->post('sphone', true),
                'shift' => $this->input->post('shift', true),
                'department' => $this->input->post('department', true),
                'year' => $this->input->post('year', true),
                'permanentaddress' => $this->input->post('permanentaddress', true),
				'stdgroup' => $this->input->post('stdgroup', true),
                'mailingaddress' => $this->input->post('mailingaddress', true),
				'gender' => $this->input->post('gender', true),
                'email' => $this->input->post('email', true),
                'title' => $this->input->post('title', true),
                'description' => $this->input->post('description', true),
                'photo' => $data['file_name'],
                'isActive' => 1
            );

            $this->results = $this->common_model->insertRecords($this->common_model->_talentedstudents, $this->records);

            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Student";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        }
    }

    public function edittalentedstudentform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->id = $this->uri->segment(2);
        $this->where = array('talentedstudentid' => $this->id);
        $this->data['talentedstudents'] = $this->common_model->getRecords($this->common_model->_talentedstudents, $this->where, 's');
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('talentedstudents/edittalentedstudentform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function edittalentedstudentajax() {
		$this->id = $this->input->post('talentedstudentid', true);
        $this->where = array('talentedstudentid' => $this->id);
        $config['upload_path'] = "uploads/teachers/";
		$config['allowed_types'] = "gif|jpg|jpeg|png";
		$config['max_size'] = "5000";
		$config['max_width'] = "1907";
		$config['max_height'] = "1280";
		$this->upload->initialize($config);
        if (!$this->upload->do_upload('photo')) {
            //echo $this->upload->display_errors();
			$this->records = array(
                'firstname' => $this->input->post('firstname', true),
                'middlename' => $this->input->post('middlename', true),
                'lastname' => $this->input->post('lastname', true),
                'sphone' => $this->input->post('sphone', true),
                'shift' => $this->input->post('shift', true),
                'department' => $this->input->post('department', true),
                'year' => $this->input->post('year', true),
                'permanentaddress' => $this->input->post('permanentaddress', true),
				'stdgroup' => $this->input->post('stdgroup', true),
                'mailingaddress' => $this->input->post('mailingaddress', true),
				'gender' => $this->input->post('gender', true),
                'email' => $this->input->post('email', true),
                'title' => $this->input->post('title', true),
                'description' => $this->input->post('description', true),
                'isActive' => 1
            );
        } else {
            $data = $this->upload->data();
            $this->records = array(
                'firstname' => $this->input->post('firstname', true),
                'middlename' => $this->input->post('middlename', true),
                'lastname' => $this->input->post('lastname', true),
                'sphone' => $this->input->post('sphone', true),
                'shift' => $this->input->post('shift', true),
                'department' => $this->input->post('department', true),
                'year' => $this->input->post('year', true),
                'permanentaddress' => $this->input->post('permanentaddress', true),
				'stdgroup' => $this->input->post('stdgroup', true),
                'mailingaddress' => $this->input->post('mailingaddress', true),
				'gender' => $this->input->post('gender', true),
                'email' => $this->input->post('email', true),
                'photo' => $data['file_name'],
                'isActive' => 1
            );
			 }
            $this->results = $this->common_model->updateRecords($this->common_model->_talentedstudents, $this->records, $this->where);
            if ($this->results == 1) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Student";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
       
    }

    public function deletetalentedstudentajax() {
        $this->id = $this->uri->segment(2);

        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('talentedstudentid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_talentedstudents, $this->where);
            //var_dump($this->isDelete);exit;
            if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Student is deleted.";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "An error occur, try again later.";
            }
        } else {
            /* Return msg error */
            $this->status['status'] = 0;
            $this->status['msg'] = "An error occur, try again later.";
        }

        /* ajax response */
        echo jsonEncode($this->status);
    }

    //Create Thumbnail function
    function _createThumbnail($filename) {
        $config['image_library'] = "gd2";
        $config['source_image'] = "uploads/" . $filename;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = "80";
        $config['height'] = "80";
        $this->load->library('image_lib', $config);
        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
        }
    }

}
