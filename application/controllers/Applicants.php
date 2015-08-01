<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Applicants extends CI_Controller {

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
        $this->load->model("applicants_model");
        $this->load->model("guardians_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Applicants";
        $this->data['applicants'] = $this->applicants_model->getApplicants();
      
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('applicants/viewapplicants', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addapplicantform() {
        $this->data['user'] = $this->ion_auth->user()->row();
		$this->data['classes'] = $this->classes_model->getClassess();
        $this->data['sections'] = $this->sections_model->getSections();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('applicants/addapplicantform');
        $this->load->view('admintheme/footer');
    }

    public function addapplicantajax() {
        $config['upload_path'] = "uploads/onlineapplicants/";
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
			'namebangla' => $this->input->post('namebangla', true),
			'nameenglish' => $this->input->post('nameenglish', true),
			'fathernamebangla' => $this->input->post('fathernamebangla', true),
			'fathernameenglish' => $this->input->post('fathernameenglish', true),
			'mothernamebangla' => $this->input->post('mothernamebangla', true),
			'mothernameenglish' => $this->input->post('mothernameenglish', true),
			'birthdate' => $this->input->post('birthdate', true),
			'mobileno' => $this->input->post('mobileno', true),
			'permanentaddress' => $this->input->post('permanentaddress', true),
			'presentaddress' => $this->input->post('presentaddress', true),
			'othersgurdian' => $this->input->post('othersgurdian', true),
			'relation' => $this->input->post('relation', true),
			'othersgurdianpermanentaddress' => $this->input->post('othersgurdianpermanentaddress', true),
			'othersgurdianpresentaddress' => $this->input->post('othersgurdianpresentaddress', true),
			'gurdianmobileno' => $this->input->post('gurdianmobileno', true),
			'nationality' => $this->input->post('nationality', true),
			'gender' => $this->input->post('gender', true),
			'religion' => $this->input->post('religion', true),
			'stdgroup' => $this->input->post('stdgroup', true),
			'class' => $this->input->post('class', true),
			'section' => $this->input->post('section', true),
			'photo' => $data['file_name'],
			'isActive' => 1
			);

            $this->results = $this->common_model->insertRecords($this->common_model->_applicants, $this->records);

            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Applicant";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        }
    }
	
	public function editapplicantform() {
        $this->data['user'] = $this->ion_auth->user()->row();
		$this->data['classes'] = $this->classes_model->getClassess();
        $this->data['sections'] = $this->sections_model->getSections();
		$this->id = $this->uri->segment(2);
        $this->where = array('applicantid' => $this->id);
        //var_dump($this->where);
		$this->data['applicants'] = $this->common_model->getRecords($this->common_model->_applicants, $this->where, 's');
        //var_dump($this->data['applicants']);
		$this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('applicants/editapplicantform', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	public function editapplicantajax() {
		$this->id = $this->input->post('applicantid', true);
		$this->where = array('applicantid' => $this->id);
		$config['upload_path'] = "uploads/onlineapplicants/";
		$config['allowed_types'] = "gif|jpg|jpeg|png";
		$config['max_size'] = "5000";
		$config['max_width'] = "1907";
		$config['max_height'] = "1280";
		//$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('photo')) {
			//echo $this->upload->display_errors();
			$this->records = array(
			'namebangla' => $this->input->post('namebangla', true),
			'nameenglish' => $this->input->post('nameenglish', true),
			'fathernamebangla' => $this->input->post('fathernamebangla', true),
			'fathernameenglish' => $this->input->post('fathernameenglish', true),
			'mothernamebangla' => $this->input->post('mothernamebangla', true),
			'mothernameenglish' => $this->input->post('mothernameenglish', true),
			'birthdate' => $this->input->post('birthdate', true),
			'mobileno' => $this->input->post('mobileno', true),
			'permanentaddress' => $this->input->post('permanentaddress', true),
			'presentaddress' => $this->input->post('presentaddress', true),
			'othersgurdian' => $this->input->post('othersgurdian', true),
			'relation' => $this->input->post('relation', true),
			'othersgurdianpermanentaddress' => $this->input->post('othersgurdianpermanentaddress', true),
			'othersgurdianpresentaddress' => $this->input->post('othersgurdianpresentaddress', true),
			'gurdianmobileno' => $this->input->post('gurdianmobileno', true),
			'nationality' => $this->input->post('nationality', true),
			'gender' => $this->input->post('gender', true),
			'religion' => $this->input->post('religion', true),
			'stdgroup' => $this->input->post('stdgroup', true),
			'class' => $this->input->post('class', true),
			'section' => $this->input->post('section', true),
			'isActive' => 1
			);
		} else {
		$data = $this->upload->data();
		//var_dump($this->where);
		//exit;
		 $this->records = array(
			'namebangla' => $this->input->post('namebangla', true),
			'nameenglish' => $this->input->post('nameenglish', true),
			'fathernamebangla' => $this->input->post('fathernamebangla', true),
			'fathernameenglish' => $this->input->post('fathernameenglish', true),
			'mothernamebangla' => $this->input->post('mothernamebangla', true),
			'mothernameenglish' => $this->input->post('mothernameenglish', true),
			'birthdate' => $this->input->post('birthdate', true),
			'mobileno' => $this->input->post('mobileno', true),
			'permanentaddress' => $this->input->post('permanentaddress', true),
			'presentaddress' => $this->input->post('presentaddress', true),
			'othersgurdian' => $this->input->post('othersgurdian', true),
			'relation' => $this->input->post('relation', true),
			'othersgurdianpermanentaddress' => $this->input->post('othersgurdianpermanentaddress', true),
			'othersgurdianpresentaddress' => $this->input->post('othersgurdianpresentaddress', true),
			'gurdianmobileno' => $this->input->post('gurdianmobileno', true),
			'nationality' => $this->input->post('nationality', true),
			'gender' => $this->input->post('gender', true),
			'religion' => $this->input->post('religion', true),
			'stdgroup' => $this->input->post('stdgroup', true),
			'class' => $this->input->post('class', true),
			'section' => $this->input->post('section', true),
			'photo' => $data['file_name'],
			'isActive' => 1
			);

		$this->results = $this->common_model->updateRecords($this->common_model->_applicants, $this->records, $this->where);
		if ($this->results == 1) {
			$this->status['status'] = 1;
			$this->status['msg'] = "Applicant";
		} else {
			$this->status['status'] = 0;
			$this->status['msg'] = "Something went wrong when saving the file, please try again.";
		}
		echo jsonEncode($this->status);
		}
}
	
	public function deleteapplicantajax() {
        $this->id = $this->uri->segment(2);
        
        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('applicantid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_applicants, $this->where);
            //var_dump($this->isDelete);exit;
           if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Applicant is deleted.";
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
