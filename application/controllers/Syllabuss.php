<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Syllabuss extends CI_Controller {

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
        $this->load->model("syllabuss_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Syllabuss";
        $this->data['syllabuss'] = $this->syllabuss_model->getSyllabuss();
      
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('syllabuss/viewsyllabuss', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addsyllabusform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('syllabuss/addsyllabusform');
        $this->load->view('admintheme/footer');
    }
	
	    public function addsyllabusajax() {
        $config['upload_path'] = "uploads/syllabus/";
		$config['allowed_types'] = "gif|jpg|jpeg|png|pdf|doc|docx|xls|xlsx";
        $config['max_size'] = "5000";
        $config['max_width'] = "1907";
        $config['max_height'] = "1280";
        //$this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('attachment')) {
            //echo $this->upload->display_errors();
			$this->records = array(
                'syllabusid' => $this->input->post('syllabusid', true),
                'syllabustitle' => $this->input->post('syllabustitle', true),
                'publishdate' => $this->input->post('publishdate', true),
                'syllabusdescription' => $this->input->post('syllabusdescription', true),
                'isActive' => 1
            );
        } else {
            $data = $this->upload->data();
            $this->records = array(
                'syllabusid' => $this->input->post('syllabusid', true),
                'syllabustitle' => $this->input->post('syllabustitle', true),
                'publishdate' => $this->input->post('publishdate', true),
                'syllabusdescription' => $this->input->post('syllabusdescription', true),
				'attachment' => $data['file_name'],
                'isActive' => 1
            );
		}
            $this->results = $this->common_model->insertRecords($this->common_model->_syllabuss, $this->records);

            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Syllabus";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        }
   
	
	public function editsyllabusform() {
        $this->data['user'] = $this->ion_auth->user()->row();
		$this->id = $this->uri->segment(2);
        $this->where = array('syllabusid' => $this->id);
        //var_dump($this->where);
		$this->data['syllabuss'] = $this->common_model->getRecords($this->common_model->_syllabuss, $this->where, 's');
        //var_dump($this->data['syllabuss']);
		$this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('syllabuss/editsyllabusform', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	    public function editsyllabusajax() {
			$this->id = $this->input->post('syllabusid', true);
			$this->where = array('syllabusid' => $this->id);
			$config['upload_path'] = "uploads/syllabus/";
		$config['allowed_types'] = "gif|jpg|jpeg|png|pdf|doc|docx|xls|xlsx";
        $config['max_size'] = "5000";
        $config['max_width'] = "1907";
        $config['max_height'] = "1280";
        //$this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('attachment')) {
            //echo $this->upload->display_errors();
			$this->records = array(
                'syllabusid' => $this->input->post('syllabusid', true),
                'syllabustitle' => $this->input->post('syllabustitle', true),
                'publishdate' => $this->input->post('publishdate', true),
                'syllabusdescription' => $this->input->post('syllabusdescription', true),
                'isActive' => 1
            );
        } else {
            $data = $this->upload->data();
            $this->records = array(
                'syllabusid' => $this->input->post('syllabusid', true),
                'syllabustitle' => $this->input->post('syllabustitle', true),
                'publishdate' => $this->input->post('publishdate', true),
                'syllabusdescription' => $this->input->post('syllabusdescription', true),
				'attachment' => $data['file_name'],
                'isActive' => 1
            );
		}

			$this->results = $this->common_model->updateRecords($this->common_model->_syllabuss, $this->records, $this->where);
            if ($this->results == 1) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Syllabus";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        
    }

	public function deletesyllabusajax() {
        $this->id = $this->uri->segment(2);
        
        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('syllabusid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_syllabuss, $this->where);
            //var_dump($this->isDelete);exit;
           if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Syllabus is deleted.";
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
