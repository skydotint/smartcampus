<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Books extends CI_Controller {

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
        $this->load->model("books_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Books";
        $this->data['books'] = $this->books_model->getBooks();
      
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('books/viewbooks', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addbookform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('books/addbookform');
        $this->load->view('admintheme/footer');
    }

    public function addbookajax() {
        $config['upload_path'] = "uploads/books/";
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
                'bookid' => $this->input->post('bookid', true),
                'bookname' => $this->input->post('bookname', true),
                'author' => $this->input->post('author', true),
                'photo' => $data['file_name'],
                'isActive' => 1
            );

            $this->results = $this->common_model->insertRecords($this->common_model->_books, $this->records);

            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Book Successfully Added";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        }
    }
	
	public function editbookform() {
        $this->data['user'] = $this->ion_auth->user()->row();
		$this->id = $this->uri->segment(2);
        $this->where = array('bookid' => $this->id);
        //var_dump($this->where);
		$this->data['books'] = $this->common_model->getRecords($this->common_model->_books, $this->where, 's');
        //var_dump($this->data['books']);
		$this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('books/editbookform', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	    public function editbookajax() {
			$config['upload_path'] = "uploads/books/";
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
			
			$this->id = $this->input->post('bookid', true);
			$this->where = array('bookid' => $this->id);
			//var_dump($this->where);
			//exit;
            $this->records = array(
                'bookname' => $this->input->post('bookname', true),
                'author' => $this->input->post('author', true),
				'photo' => $data['file_name'],
                'isActive' => 1
            );

			$this->results = $this->common_model->updateRecords($this->common_model->_books, $this->records, $this->where);
            if ($this->results == 1) {
                $this->status['status'] = 1;
                $this->status['msg'] = $this->records['bookname'];
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
			}
    }
	
	public function deletebookajax() {
        $this->id = $this->uri->segment(2);
        
        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('bookid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_books, $this->where);
            //var_dump($this->isDelete);exit;
           if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Book is deleted.";
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
