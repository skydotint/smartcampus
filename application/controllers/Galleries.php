<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Galleries extends CI_Controller {

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
        $this->load->model("galleries_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Galleries";
        $this->data['galleries'] = $this->galleries_model->getGalleries();
      
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('galleries/viewgalleries', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addgalleryform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('galleries/addgalleryform');
        $this->load->view('admintheme/footer');
    }

    public function addgalleryajax() {
           
            $this->records = array(
                'galleryid' => $this->input->post('galleryid', true),
                'galleryname' => $this->input->post('galleryname', true),
                'isActive' => 1
            );

            $this->results = $this->common_model->insertRecords($this->common_model->_galleries, $this->records);

            if ($this->results) {
                $this->status['status'] = 1;
               // $this->status['msg'] = "Gallery successfully Added";
				$this->status['msg'] = $this->records['galleryname'];
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        
    }
	
	public function editgalleryform() {
        $this->data['user'] = $this->ion_auth->user()->row();
		$this->id = $this->uri->segment(2);
        $this->where = array('galleryid' => $this->id);
        //var_dump($this->where);
		$this->data['galleries'] = $this->common_model->getRecords($this->common_model->_galleries, $this->where, 's');
        //var_dump($this->data['galleries']);
		$this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('galleries/editgalleryform', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	    public function editgalleryajax() {
			$this->id = $this->input->post('galleryid', true);
			$this->where = array('galleryid' => $this->id);
			//var_dump($this->where);
			//exit;
            $this->records = array(
                'galleryname' => $this->input->post('galleryname', true),
                'isActive' => 1
            );

			$this->results = $this->common_model->updateRecords($this->common_model->_galleries, $this->records, $this->where);
            if ($this->results == 1) {
                $this->status['status'] = 1;
                $this->status['msg'] = $this->records['galleryname'];
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        
    }

	public function deletegalleryajax() {
        $this->id = $this->uri->segment(2);
        
        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('galleryid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_galleries, $this->where);
            //var_dump($this->isDelete);exit;
           if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Gallery is deleted.";
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
