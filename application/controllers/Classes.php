<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Classes extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("classes_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Classes";
        $this->data['classes'] = $this->classes_model->getClassess();

        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('classes/viewclasses', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addclassform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('classes/addclassform');
        $this->load->view('admintheme/footer');
    }

    public function addclassajax() {
        $this->records = array(
            'classname' => $this->input->post('classname', true),
            'isActive' => 1
        );

        $this->results = $this->common_model->insertRecords($this->common_model->_classes, $this->records);

        if ($this->results) {
            $this->status['status'] = 1;
            $this->status['msg'] = $this->records['classname'];
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "";
        }

        echo jsonEncode($this->status);
    }

    public function editclassform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->id = $this->uri->segment(2);
        $this->where = array('classid' => $this->id);
        //var_dump($this->where);
        $this->data['classes'] = $this->common_model->getRecords($this->common_model->_classes, $this->where, 's');
        //var_dump($this->data['classs']);
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('classes/editclassform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function editclassajax() {
        $this->id = $this->input->post('classid', true);
        $this->where = array('classid' => $this->id);
        //var_dump($this->where);
        //exit;
        $this->records = array(
            'classname' => $this->input->post('classname', true),
            'isActive' => 1
        );

        $this->results = $this->common_model->updateRecords($this->common_model->_classes, $this->records, $this->where);
        if ($this->results == 1) {
            $this->status['status'] = 1;
            $this->status['msg'] = $this->records['classname'];
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "Something went wrong when saving the file, please try again.";
        }
        echo jsonEncode($this->status);
    }

    public function deleteclassajax() {
        $this->id = $this->uri->segment(2);

        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('classid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_classes, $this->where);
            //var_dump($this->isDelete);exit;
            if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Class is deleted.";
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

    public function addroutine() {

        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['classes'] = $this->classes_model->getClasses();
        $this->data['sections'] = $this->sections_model->getSections();
        $this->data['genders'] = $this->basic_model->getGenders();

        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('classes/addroutine', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function viewroutine() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('classes/viewroutine');
        $this->load->view('admintheme/footer');
    }

    public function addroutineajax() {
        
    }

}
