<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Credits extends CI_Controller {

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
        $this->load->model("accounts_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Credits";
        $this->data['credits'] = $this->accounts_model->getCredits();

        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('credits/viewcredits', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addcreditform() {
        $this->data['user'] = $this->ion_auth->user()->row();
		$this->data['financialdepartments'] = $this->financialdepartments_model->getFinancialdepartments();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('credits/addcreditform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addcreditajax() {

        $this->records = array(
            'financialdepartments' => $this->input->post('financialdepartments', true),
            'description' => $this->input->post('description', true),
            'paymentdate' => $this->input->post('paymentdate', true),
            'updatedate' => date("Y-m-d"),
            'amount' => $this->input->post('amount', true),
            'paymenttype' => $this->input->post('paymenttype', true),
            'isActive' => 1
        );

        $this->results = $this->common_model->insertRecords($this->common_model->_accounts, $this->records);

        if ($this->results) {
            $this->status['status'] = 1;
            $this->status['msg'] = "Credit Amount";
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "Something went wrong when saving the file, please try again.";
        }
        echo jsonEncode($this->status);
    }

    public function editcreditform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->id = $this->uri->segment(2);
        $this->where = array('accountid' => $this->id);
        //var_dump($this->where);
        $this->data['credits'] = $this->common_model->getRecords($this->common_model->_accounts, $this->where, 's');
        //var_dump($this->data['credits']);
		$this->data['financialdepartments'] = $this->financialdepartments_model->getFinancialdepartments();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('credits/editcreditform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function editcreditajax() {
        $this->id = $this->input->post('accountid', true);
        $this->where = array('accountid' => $this->id);
        //var_dump($this->where);
        //exit;
        $this->records = array(
            'financialdepartments' => $this->input->post('financialdepartments', true),
            'description' => $this->input->post('description', true),
            'paymentdate' => $this->input->post('paymentdate', true),
            'updatedate' => date("Y-m-d"),
            'amount' => $this->input->post('amount', true),
            'paymenttype' => $this->input->post('paymenttype', true),
            'isActive' => 1
        );

        $this->results = $this->common_model->updateRecords($this->common_model->_accounts, $this->records, $this->where);
        if ($this->results == 1) {
            $this->status['status'] = 1;
            $this->status['msg'] = "Credit Amount";
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "Something went wrong when saving the file, please try again.";
        }
        echo jsonEncode($this->status);
    }

    public function deletecreditajax() {
        $this->id = $this->uri->segment(2);

        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('accountid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_accounts, $this->where);
            //var_dump($this->isDelete);exit;
            if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Credit Amount is deleted.";
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
