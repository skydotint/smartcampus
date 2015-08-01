<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mediauploads extends CI_Controller {

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
        $this->load->model("mediauploads_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Mediauploads";
        $this->data['mediauploads'] = $this->mediauploads_model->getMediauploads();
      
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('mediauploads/viewmediauploads', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addmediauploadform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('mediauploads/addmediauploadform');
        $this->load->view('admintheme/footer');
    }

    public function addmediauploadajax() {
        $config['upload_path'] = "uploads/mediauploads/";
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
                'mediauploadid' => $this->input->post('mediauploadid', true),
                'mediauploadname' => $this->input->post('mediauploadname', true),
                'photo' => $data['file_name'],
                'isActive' => 1
            );

            $this->results = $this->common_model->insertRecords($this->common_model->_mediauploads, $this->records);

            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Mediaupload";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        }
    }
	
	public function editmediauploadform() {
        $this->data['user'] = $this->ion_auth->user()->row();
		$this->id = $this->uri->segment(2);
        $this->where = array('mediauploadid' => $this->id);
        //var_dump($this->where);
		$this->data['mediauploads'] = $this->common_model->getRecords($this->common_model->_mediauploads, $this->where, 's');
        //var_dump($this->data['mediauploads']);
		$this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('mediauploads/editmediauploadform', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	    public function editmediauploadajax() {
			$config['upload_path'] = "uploads/mediauploads/";
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
			
			$this->id = $this->input->post('mediauploadid', true);
			$this->where = array('mediauploadid' => $this->id);
			//var_dump($this->where);
			//exit;
            $this->records = array(
                'mediauploadname' => $this->input->post('mediauploadname', true),
				'photo' => $data['file_name'],
                'isActive' => 1
            );

			$this->results = $this->common_model->updateRecords($this->common_model->_mediauploads, $this->records, $this->where);
            if ($this->results == 1) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Media Upload";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
			}
    }
	
	public function deletemediauploadajax() {
        $this->id = $this->uri->segment(2);
        
        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('mediauploadid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_mediauploads, $this->where);
            //var_dump($this->isDelete);exit;
           if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Mediaupload is deleted.";
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


}
