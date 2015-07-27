<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Webpages extends CI_Controller {

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
        $this->load->model("webpages_model");
        $this->load->library(array('ion_auth', 'form_validation'));
        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Pages";
        $this->data['pages'] = $this->webpages_model->getPages();

        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('webpages/viewpages', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addwebpageform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['parentpages'] = $this->webpages_model->getParentpages();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('webpages/addnewpage', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addwebpageajax() {
        $this->records = array(
            'pagetitle' => $this->input->post('pagetitle', true),
            'pageroute' => $this->input->post('pageroute', true),
            'description' => $this->input->post('pagedescription', true),
            'pubDate' => date('Y-d-m'),
            'isActive' => 1
        );

        $this->results = $this->common_model->insertRecords($this->common_model->_webpages, $this->records);

        if ($this->results) {
            $this->status['status'] = 1;
            $this->status['msg'] = "New Page ";
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "";
        }

        echo jsonEncode($this->status);
    }

    public function editpageform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->id = $this->uri->segment(2);
        $this->where = array('pageid' => $this->id);
        //var_dump($this->where);
        $this->data['webpages'] = $this->common_model->getRecords($this->common_model->_webpages, $this->where, 's');
        //var_dump($this->data['webpages']);
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('webpages/editpageform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function editwebpageajax() {
        $this->id = $this->input->post('pageid', true);
        
        $this->where = array('pageid' => $this->id);

        
       /* $this->records = array(
            'pagetitle' => $this->input->post('pagetitle', true),
            'pageroute' => $this->input->post('pageroute', true),
            'description' => $this->input->post('pagedescription', true),
            'pubDate' => date('Y-d-m'),
            'isActive' => 1
        );*/
        
        
        $this->records = array(
            'pagetitle' => $this->input->post('pagetitle', true),
            'pageroute' => $this->input->post('pageroute', true),
            'description' => $this->input->post('hiddendesc', true),
            'pubDate' => date('Y-d-m'),
            'isActive' => 1
        );
        $this->input->post('hiddendesc', true);
        //echo $this->input->post('hiddendesc', true);

        $this->results = $this->common_model->updateRecords($this->common_model->_webpages, $this->records, $this->where);
        if ($this->results) {
            $this->status['status'] = 1;
            $this->status['msg'] = $this->input->post('pagetitle', true);
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "Something went wrong when saving the file, please try again.";
        }
        echo jsonEncode($this->status);
    }

    public function deletewebpageajax() {
        $this->id = $this->uri->segment(2);

        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('pageid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_webpages, $this->where);
            //var_dump($this->isDelete);exit;
            if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Webpage is deleted.";
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
