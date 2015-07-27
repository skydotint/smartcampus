<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Departments extends CI_Controller {

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
        $this->load->model("departments_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Departments";
        $this->data['departments'] = $this->departments_model->getDepartments();

        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('departments/viewdepartments', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function adddepartmentform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('departments/adddepartmentform');
        $this->load->view('admintheme/footer');
    }

    public function adddepartmentajax() {

        $this->records = array(
            'departmentname' => $this->input->post('departmentname', true),
            'isActive' => 1
        );

        $this->results = $this->common_model->insertRecords($this->common_model->_departments, $this->records);

        if ($this->results) {
            $this->status['status'] = 1;
            $this->status['msg'] = "Department";
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "Something went wrong when saving the file, please try again.";
        }
        echo jsonEncode($this->status);
    }

    public function editdepartmentform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->id = $this->uri->segment(2);
        $this->where = array('departmentid' => $this->id);
        //var_dump($this->where);
        $this->data['departments'] = $this->common_model->getRecords($this->common_model->_departments, $this->where, 's');
        //var_dump($this->data['departments']);
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('departments/editdepartmentform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function editdepartmentajax() {
        $this->id = $this->input->post('departmentid', true);
        $this->where = array('departmentid' => $this->id);
        $this->records = array(
            'departmentname' => $this->input->post('departmentname', true),
            'isActive' => 1
        );

        $this->results = $this->common_model->updateRecords($this->common_model->_departments, $this->records, $this->where);
        if ($this->results == 1) {
            $this->status['status'] = 1;
            $this->status['msg'] = $this->records['departmentname'];
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "Something went wrong when saving the file, please try again.";
        }
        echo jsonEncode($this->status);
    }

    public function deletedepartmentajax() {
        $this->id = $this->uri->segment(2);

        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('departmentid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_departments, $this->where);
            //var_dump($this->isDelete);exit;
            if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Department is deleted.";
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
