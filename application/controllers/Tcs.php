<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tcs extends CI_Controller {

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
        $this->load->model("tcs_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Transfer Certificates";
        $this->data['tcs'] = $this->tcs_model->getTcs();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('tcs/viewtcs', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	public function viewtestimonials() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Testimonials";
        $this->data['tcs'] = $this->tcs_model->getTestimonials();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('tcs/viewtcs', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	public function viewprottoyans() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Prottoyans";
        $this->data['tcs'] = $this->tcs_model->getProttoyans();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('tcs/viewtcs', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	public function viewtotlists() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Totlist";
        $this->data['tcs'] = $this->tcs_model->getTotlists();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('tcs/viewtcs', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	public function viewprevious() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Tcs";
        $this->data['tcs'] = $this->tcs_model->getPrevious();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('tcs/viewtcs', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addtcform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('tcs/addtcform');
        $this->load->view('admintheme/footer');
    }

    public function addtcajax() {

        $this->records = array(
            'tcname' => $this->input->post('tcname', true),
            'studentuserid' => $this->input->post('studentuserid', true),
            'isActive' => 0
        );

        $this->results = $this->common_model->insertRecords($this->common_model->_tcs, $this->records);

        if ($this->results) {
            $this->status['status'] = 1;
            $this->status['msg'] = "Request";
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "Something went wrong when saving the file, please try again.";
        }
        echo jsonEncode($this->status);
    }

    public function edittcform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->id = $this->uri->segment(2);
        $this->where = array('tcid' => $this->id);
        //var_dump($this->where);
        $this->data['tcs'] = $this->common_model->getRecords($this->common_model->_tcs, $this->where, 's');
        //var_dump($this->data['tcs']);
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('tcs/edittcform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function edittcajax() {
        $this->id = $this->input->post('tcid', true);
        $this->where = array('tcid' => $this->id);
        //var_dump($this->where);
        //exit;
        $this->records = array(
            'tcname' => $this->input->post('tcname', true),
            'studentuserid' => $this->input->post('studentuserid', true),
            'isActive' => $this->input->post('isActive', true)
        );

        $this->results = $this->common_model->updateRecords($this->common_model->_tcs, $this->records, $this->where);
        if ($this->results == 1) {
            $this->status['status'] = 1;
            $this->status['msg'] = "Request";
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "Something went wrong when saving the file, please try again.";
        }
        echo jsonEncode($this->status);
    }

    public function deletetcajax() {
        $this->id = $this->uri->segment(2);

        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('tcid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_tcs, $this->where);
            //var_dump($this->isDelete);exit;
            if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Request is deleted.";
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
