<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Notices extends CI_Controller {

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
        $this->load->model("notices_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Notices";
        $this->data['notices'] = $this->notices_model->getNotices();
      
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('notices/viewnotices', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addnoticeform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('notices/addnoticeform');
        $this->load->view('admintheme/footer');
    }
	
	    public function addnoticeajax() {
        $config['upload_path'] = "uploads/notice/";
		$config['allowed_types'] = "gif|jpg|jpeg|png|pdf|doc|docx|xls|xlsx";
        $config['max_size'] = "5000";
        $config['max_width'] = "1907";
        $config['max_height'] = "1280";
        //$this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('attachment')) {
            //echo $this->upload->display_errors();
			$this->records = array(
                'noticeid' => $this->input->post('noticeid', true),
                'noticetitle' => $this->input->post('noticetitle', true),
                'publishdate' => $this->input->post('publishdate', true),
                'noticedescription' => $this->input->post('noticedescription', true),
                'isActive' => 1
            );
        } else {
            $data = $this->upload->data();
            $this->records = array(
                'noticeid' => $this->input->post('noticeid', true),
                'noticetitle' => $this->input->post('noticetitle', true),
                'publishdate' => $this->input->post('publishdate', true),
                'noticedescription' => $this->input->post('noticedescription', true),
				'attachment' => $data['file_name'],
                'isActive' => 1
            );
		}
            $this->results = $this->common_model->insertRecords($this->common_model->_notices, $this->records);

            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Notice";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        }
   
	
	public function editnoticeform() {
        $this->data['user'] = $this->ion_auth->user()->row();
		$this->id = $this->uri->segment(2);
        $this->where = array('noticeid' => $this->id);
        //var_dump($this->where);
		$this->data['notices'] = $this->common_model->getRecords($this->common_model->_notices, $this->where, 's');
        //var_dump($this->data['notices']);
		$this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('notices/editnoticeform', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	    public function editnoticeajax() {
			$this->id = $this->input->post('noticeid', true);
			$this->where = array('noticeid' => $this->id);
			$config['upload_path'] = "uploads/notice/";
		$config['allowed_types'] = "gif|jpg|jpeg|png|pdf|doc|docx|xls|xlsx";
        $config['max_size'] = "5000";
        $config['max_width'] = "1907";
        $config['max_height'] = "1280";
        //$this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('attachment')) {
            //echo $this->upload->display_errors();
			$this->records = array(
                'noticeid' => $this->input->post('noticeid', true),
                'noticetitle' => $this->input->post('noticetitle', true),
                'publishdate' => $this->input->post('publishdate', true),
                'noticedescription' => $this->input->post('noticedescription', true),
                'isActive' => 1
            );
        } else {
            $data = $this->upload->data();
            $this->records = array(
                'noticeid' => $this->input->post('noticeid', true),
                'noticetitle' => $this->input->post('noticetitle', true),
                'publishdate' => $this->input->post('publishdate', true),
                'noticedescription' => $this->input->post('noticedescription', true),
				'attachment' => $data['file_name'],
                'isActive' => 1
            );
		}

			$this->results = $this->common_model->updateRecords($this->common_model->_notices, $this->records, $this->where);
            if ($this->results == 1) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Notice";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        
    }

	public function deletenoticeajax() {
        $this->id = $this->uri->segment(2);
        
        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('noticeid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_notices, $this->where);
            //var_dump($this->isDelete);exit;
           if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Notice is deleted.";
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
