<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Photos extends CI_Controller {

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
        $this->load->model("photos_model");
        $this->load->model("galleries_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Photos";
       // $this->data['photos'] = $this->photos_model->getPhotos();
	    $join = $this->db->join('galleries', 'photos.galleryid = galleries.galleryid');
		$this->data['photos'] = $this->common_model->getAllRecordsJoin($this->common_model->_photos, $join);

        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('galleries/viewphotos', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addphotoform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['galleries'] = $this->galleries_model->getGalleries();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('galleries/addphotoform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addphotoajax() {
        $config['upload_path'] = "uploads/photos/";
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
                'galleryid' => $this->input->post('galleryid', true),
                'title' => $this->input->post('title', true),
                'photo' => $data['file_name'],
                'isActive' => 1
            );

            $this->results = $this->common_model->insertRecords($this->common_model->_photos, $this->records);

            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Photo";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        }
    }
	
	public function editphotoform() {
        $this->data['user'] = $this->ion_auth->user()->row();
		$this->id = $this->uri->segment(2);
        $this->where = array('photoid' => $this->id);
		$join = $this->db->join('galleries', 'photos.galleryid = galleries.galleryid');
        //var_dump($this->where);
		$this->data['photos'] = $this->common_model->getRecordsjoinwhere($this->common_model->_photos, $join, $this->where, 's');
		$this->data['galleries'] = $this->galleries_model->getGalleries();
        //var_dump($this->data['photos']);
		$this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('galleries/editphotoform', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	 public function editphotoajax() {
		$this->id = $this->input->post('photoid', true);
		$this->where = array('photoid' => $this->id);
		$config['upload_path'] = "uploads/photos/";
		$config['allowed_types'] = "gif|jpg|jpeg|png";
		$config['max_size'] = "5000";
		$config['max_width'] = "1907";
		$config['max_height'] = "1280";
		//$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('photo')) {
			//echo $this->upload->display_errors();
			$this->records = array(
			'galleryid' => $this->input->post('galleryid', true),
			'title' => $this->input->post('title', true),
			'isActive' => 1
		);
		} else {
		$data = $this->upload->data();
		$this->records = array(
			'galleryid' => $this->input->post('galleryid', true),
			'title' => $this->input->post('title', true),
			'photo' => $data['file_name'],
			'isActive' => 1
		);
		}

		$this->results = $this->common_model->updateRecords($this->common_model->_photos, $this->records, $this->where);
		if ($this->results == 1) {
			$this->status['status'] = 1;
			$this->status['msg'] = "Photo";
		} else {
			$this->status['status'] = 0;
			$this->status['msg'] = "Something went wrong when saving the file, please try again.";
		}
		echo jsonEncode($this->status);
	
}

	public function deletephotoajax() {
        $this->id = $this->uri->segment(2);
        
        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('photoid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_photos, $this->where);
            //var_dump($this->isDelete);exit;
           if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Photo is deleted.";
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
