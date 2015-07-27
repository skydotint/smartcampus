<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Academiccouncillors extends CI_Controller {

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
        $this->load->model("academiccouncillors_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View Academic Councillors";
        $this->data['academiccouncillors'] = $this->academiccouncillors_model->getAcademiccouncillors();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('academiccouncillors/viewacademiccouncillors', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addacademiccouncillorform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('academiccouncillors/addacademiccouncillorform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function viewacademiccouncillorprofile() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->id = $this->uri->segment(2);
        $this->where = array('academiccouncillorid' => $this->id);
        //var_dump($this->where);
        $this->data['academiccouncillors'] = $this->common_model->getRecords($this->common_model->_academiccouncillors, $this->where, 's');
        //var_dump($this->data['academiccouncillors']);
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('academiccouncillors/viewacademiccouncillorprofile', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addacademiccouncillorajax() {
        $config['upload_path'] = "uploads/academiccouncillors/";
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
                'fullname' => $this->input->post('fullname', true),
                'sphone' => $this->input->post('sphone', true),
                'year' => $this->input->post('year', true),
                'permanentaddress' => $this->input->post('permanentaddress', true),
                'mailingaddress' => $this->input->post('mailingaddress', true),
				'gender' => $this->input->post('gender', true),
                'email' => $this->input->post('email', true),
                'title' => $this->input->post('title', true),
                'description' => $this->input->post('description', true),
                'photo' => $data['file_name'],
                'isActive' => 1
            );

            $this->results = $this->common_model->insertRecords($this->common_model->_academiccouncillors, $this->records);

            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Academic Councillors";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        }
    }

    public function editacademiccouncillorform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->id = $this->uri->segment(2);
        $this->where = array('academiccouncillorid' => $this->id);
        $this->data['academiccouncillors'] = $this->common_model->getRecords($this->common_model->_academiccouncillors, $this->where, 's');
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('academiccouncillors/editacademiccouncillorform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function editacademiccouncillorajax() {
		$this->id = $this->input->post('academiccouncillorid', true);
        $this->where = array('academiccouncillorid' => $this->id);
        $config['upload_path'] = "uploads/academiccouncillors/";
		$config['allowed_types'] = "gif|jpg|jpeg|png";
		$config['max_size'] = "5000";
		$config['max_width'] = "1907";
		$config['max_height'] = "1280";
		$this->upload->initialize($config);
        if (!$this->upload->do_upload('photo')) {
            //echo $this->upload->display_errors();
			$this->records = array(
                'fullname' => $this->input->post('fullname', true),
                'sphone' => $this->input->post('sphone', true),
                'year' => $this->input->post('year', true),
                'permanentaddress' => $this->input->post('permanentaddress', true),
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
                'fullname' => $this->input->post('fullname', true),
                'sphone' => $this->input->post('sphone', true),
                'year' => $this->input->post('year', true),
                'permanentaddress' => $this->input->post('permanentaddress', true),
                'mailingaddress' => $this->input->post('mailingaddress', true),
				'gender' => $this->input->post('gender', true),
                'email' => $this->input->post('email', true),
				'title' => $this->input->post('title', true),
                'photo' => $data['file_name'],
                'isActive' => 1
            );
			 }
            $this->results = $this->common_model->updateRecords($this->common_model->_academiccouncillors, $this->records, $this->where);
            if ($this->results == 1) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Academic Councillors";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
       
    }

    public function deleteacademiccouncillorajax() {
        $this->id = $this->uri->segment(2);

        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('academiccouncillorid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_academiccouncillors, $this->where);
            //var_dump($this->isDelete);exit;
            if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Academic Councillors is deleted.";
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
