<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Downloads extends CI_Controller {

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
        $this->load->model("downloads_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Downloads";
        $this->data['downloads'] = $this->downloads_model->getDownloads();
      
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('downloads/viewdownloads', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function adddownloadform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('downloads/adddownloadform');
        $this->load->view('admintheme/footer');
    }
	
	    public function adddownloadajax() {
		$config['upload_path'] = "uploads/downloads/";
		$config['allowed_types'] = "gif|jpg|jpeg|png|pdf|doc|docx|xls|xlsx";
        $config['max_size'] = "5000";
        $config['max_width'] = "1907";
        $config['max_height'] = "1280";
        //$this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('attachment')) {
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();

            $this->records = array(
                'downloadid' => $this->input->post('downloadid', true),
                'downloadtitle' => $this->input->post('downloadtitle', true),
                'downloaddescription' => $this->input->post('downloaddescription', true),
                'attachment' => $data['file_name'],
                'isActive' => 1
            );

            $this->results = $this->common_model->insertRecords($this->common_model->_downloads, $this->records);

            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Download File successfully uploaded";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        }
    }
	
	public function editdownloadform() {
        $this->data['user'] = $this->ion_auth->user()->row();
		$this->id = $this->uri->segment(2);
        $this->where = array('downloadid' => $this->id);
        //var_dump($this->where);
		$this->data['downloads'] = $this->common_model->getRecords($this->common_model->_downloads, $this->where, 's');
        //var_dump($this->data['downloads']);
		$this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('downloads/editdownloadform', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	public function editdownloadajax() {
		$this->id = $this->input->post('downloadid', true);
		$this->where = array('downloadid' => $this->id);
		$config['upload_path'] = "uploads/downloads/";
		$config['allowed_types'] = "gif|jpg|jpeg|png|pdf|doc|docx|xls|xlsx";
        $config['max_size'] = "5000";
        $config['max_width'] = "1907";
        $config['max_height'] = "1280";
        //$this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('attachment')) {
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();

            $this->records = array(
                'downloadid' => $this->input->post('downloadid', true),
                'downloadtitle' => $this->input->post('downloadtitle', true),
                'downloaddescription' => $this->input->post('downloaddescription', true),
                'attachment' => $data['file_name'],
                'isActive' => 1
            );

            $this->results = $this->common_model->updateRecords($this->common_model->_downloads, $this->records, $this->where);

            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Download File";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        }
    }

	public function deletedownloadajax() {
        $this->id = $this->uri->segment(2);
        
        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('downloadid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_downloads, $this->where);
            //var_dump($this->isDelete);exit;
           if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Download File is deleted.";
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
        $config['source_image'] = "uploads/downloads/" . $filename;
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
