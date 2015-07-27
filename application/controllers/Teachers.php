<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Teachers extends CI_Controller {

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
        $this->load->model("teachers_model");
        $this->load->model("users_model");
        $this->load->model("guardians_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View Current Teachers";
        $this->data['teachers'] = $this->teachers_model->getTeachers();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('teachers/viewteachers', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	public function viewxteachers() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View X Students";
        $this->data['teachers'] = $this->teachers_model->getXteachers();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('teachers/viewxteachers', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	public function viewxheadteachers() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View X Head Students";
        $this->data['teachers'] = $this->teachers_model->getXheadteachers();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('teachers/viewxheadteachers', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function viewallteachers() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Students";
        $this->data['teachers'] = $this->teachers_model->getAllteachers();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('teachers/viewallteachers', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addteacherform() {
        $this->data['user'] = $this->ion_auth->user()->row();
		 $this->data['users'] = $this->users_model->getLastuserid();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('teachers/addteacherform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addteacherajax() {
        $config['upload_path'] = "uploads/teachers/";
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
                'teacherid' => $this->input->post('teacherid', true),
                'teacheruserid' => $this->input->post('teacheruserid', true),
                'firstname' => $this->input->post('firstname', true),
                'middlename' => $this->input->post('middlename', true),
                'lastname' => $this->input->post('lastname', true),
                'fathername' => $this->input->post('fathername', true),
                'mothername' => $this->input->post('mothername', true),
                'designation' => $this->input->post('designation', true),
                'nationalid' => $this->input->post('nationalid', true),
                'permanentaddress' => $this->input->post('permanentaddress', true),
                'religion' => $this->input->post('religion', true),
                'mpoid' => $this->input->post('mpoid', true),
                'tphone' => $this->input->post('tphone', true),
                'mailingaddress' => $this->input->post('mailingaddress', true),
                'gender' => $this->input->post('gender', true),
                'birthdate' => $this->input->post('birthdate', true),
                'email' => $this->input->post('email', true),
                'joindate' => $this->input->post('joindate', true),
                'dateattended' => $this->input->post('dateattended', true),
                'jscsubjectteacher' => $this->input->post('jscsubjectteacher', true),
                'jscteachingdate' => $this->input->post('jscteachingdate', true),
                'sscsubjectteacher' => $this->input->post('sscsubjectteacher', true),
                'sscteachingdate' => $this->input->post('sscteachingdate', true),
                'hscsubjectteacher' => $this->input->post('hscsubjectteacher', true),
                'hscteachingdate' => $this->input->post('hscteachingdate', true),
                'jscwanttobe' => $this->input->post('jscwanttobe', true),
                'sscwanttobe' => $this->input->post('sscwanttobe', true),
                'hscwanttobe' => $this->input->post('hscwanttobe', true),
                'jscrelative' => $this->input->post('jscrelative', true),
                'sscrelative' => $this->input->post('sscrelative', true),
                'hscrelative' => $this->input->post('hscrelative', true),
                'sscboard' => $this->input->post('sscboard', true),
                'sscgroup' => $this->input->post('sscgroup', true),
                'sscresult' => $this->input->post('sscresult', true),
                'sscyear' => $this->input->post('sscyear', true),
                'hscboard' => $this->input->post('hscboard', true),
                'hscgroup' => $this->input->post('hscgroup', true),
                'hscresult' => $this->input->post('hscresult', true),
                'hscyear' => $this->input->post('hscyear', true),
                'graduationinstitute' => $this->input->post('graduationinstitute', true),
                'graduationsubject' => $this->input->post('graduationsubject', true),
                'graduationresult' => $this->input->post('graduationresult', true),
                'graduationyear' => $this->input->post('graduationyear', true),
                'mastersinstitute' => $this->input->post('mastersinstitute', true),
                'masterssubject' => $this->input->post('masterssubject', true),
                'mastersresult' => $this->input->post('mastersresult', true),
                'mastersyear' => $this->input->post('mastersyear', true),
                'bedresult' => $this->input->post('bedresult', true),
                'bedyear' => $this->input->post('bedyear', true),
                'medresult' => $this->input->post('medresult', true),
                'medyear' => $this->input->post('medyear', true),
                'Othersexam' => $this->input->post('Othersexam', true),
                'Othersexamresult' => $this->input->post('Othersexamresult', true),
                'Othersexamyear' => $this->input->post('Othersexamyear', true),
                'jscexhe' => $this->input->post('jscexhe', true),
                'jscexsubcode' => $this->input->post('jscexsubcode', true),
                'sscexhe' => $this->input->post('sscexhe', true),
                'sscexsubcode' => $this->input->post('sscexsubcode', true),
                'hscexhe' => $this->input->post('hscexhe', true),
                'hscexsubcode' => $this->input->post('hscexsubcode', true),
				'photo' => $data['file_name'],
                'enrollmentstatus' => $this->input->post('enrollmentstatus', true),
                'isActive' => 1
            );

            $this->results = $this->common_model->insertRecords($this->common_model->_teachers, $this->records);

            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Teacher";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        }
    }
	
	public function editteacherform() {
        $this->data['user'] = $this->ion_auth->user()->row();
		$this->id = $this->uri->segment(2);
        $this->where = array('teacherid' => $this->id);
        //var_dump($this->where);
		$this->data['teachers'] = $this->common_model->getRecords($this->common_model->_teachers, $this->where, 's');
        //var_dump($this->data['teachers']);
		$this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('teachers/editteacherform', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	public function editteacherajax() {
		
		$this->id = $this->input->post('teacherid', true);
		$this->where = array('teacherid' => $this->id);
		$config['upload_path'] = "uploads/teachers/";
		$config['allowed_types'] = "gif|jpg|jpeg|png";
		$config['max_size'] = "5000";
		$config['max_width'] = "1907";
		$config['max_height'] = "1280";
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('photo')) {
			//echo $this->upload->display_errors();
			$this->records = array(
			'firstname' => $this->input->post('firstname', true),
                'middlename' => $this->input->post('middlename', true),
                'lastname' => $this->input->post('lastname', true),
                'fathername' => $this->input->post('fathername', true),
                'mothername' => $this->input->post('mothername', true),
                'designation' => $this->input->post('designation', true),
                'nationalid' => $this->input->post('nationalid', true),
                'permanentaddress' => $this->input->post('permanentaddress', true),
                'religion' => $this->input->post('religion', true),
                'mpoid' => $this->input->post('mpoid', true),
                'tphone' => $this->input->post('tphone', true),
                'mailingaddress' => $this->input->post('mailingaddress', true),
                'gender' => $this->input->post('gender', true),
                'birthdate' => $this->input->post('birthdate', true),
                'email' => $this->input->post('email', true),
                'joindate' => $this->input->post('joindate', true),
                'dateattended' => $this->input->post('dateattended', true),
                'jscsubjectteacher' => $this->input->post('jscsubjectteacher', true),
                'jscteachingdate' => $this->input->post('jscteachingdate', true),
                'sscsubjectteacher' => $this->input->post('sscsubjectteacher', true),
                'sscteachingdate' => $this->input->post('sscteachingdate', true),
                'hscsubjectteacher' => $this->input->post('hscsubjectteacher', true),
                'hscteachingdate' => $this->input->post('hscteachingdate', true),
                'jscwanttobe' => $this->input->post('jscwanttobe', true),
                'sscwanttobe' => $this->input->post('sscwanttobe', true),
                'hscwanttobe' => $this->input->post('hscwanttobe', true),
                'jscrelative' => $this->input->post('jscrelative', true),
                'sscrelative' => $this->input->post('sscrelative', true),
                'hscrelative' => $this->input->post('hscrelative', true),
                'sscboard' => $this->input->post('sscboard', true),
                'sscgroup' => $this->input->post('sscgroup', true),
                'sscresult' => $this->input->post('sscresult', true),
                'sscyear' => $this->input->post('sscyear', true),
                'hscboard' => $this->input->post('hscboard', true),
                'hscgroup' => $this->input->post('hscgroup', true),
                'hscresult' => $this->input->post('hscresult', true),
                'hscyear' => $this->input->post('hscyear', true),
                'graduationinstitute' => $this->input->post('graduationinstitute', true),
                'graduationsubject' => $this->input->post('graduationsubject', true),
                'graduationresult' => $this->input->post('graduationresult', true),
                'graduationyear' => $this->input->post('graduationyear', true),
                'mastersinstitute' => $this->input->post('mastersinstitute', true),
                'masterssubject' => $this->input->post('masterssubject', true),
                'mastersresult' => $this->input->post('mastersresult', true),
                'mastersyear' => $this->input->post('mastersyear', true),
                'bedresult' => $this->input->post('bedresult', true),
                'bedyear' => $this->input->post('bedyear', true),
                'medresult' => $this->input->post('medresult', true),
                'medyear' => $this->input->post('medyear', true),
                'Othersexam' => $this->input->post('Othersexam', true),
                'Othersexamresult' => $this->input->post('Othersexamresult', true),
                'Othersexamyear' => $this->input->post('Othersexamyear', true),
                'jscexhe' => $this->input->post('jscexhe', true),
                'jscexsubcode' => $this->input->post('jscexsubcode', true),
                'sscexhe' => $this->input->post('sscexhe', true),
                'sscexsubcode' => $this->input->post('sscexsubcode', true),
                'hscexhe' => $this->input->post('hscexhe', true),
                'hscexsubcode' => $this->input->post('hscexsubcode', true),
                'enrollmentstatus' => $this->input->post('enrollmentstatus', true),
                'isActive' => 1
		);
		} else {
		$data = $this->upload->data();
		$this->records = array(
			'firstname' => $this->input->post('firstname', true),
                'middlename' => $this->input->post('middlename', true),
                'lastname' => $this->input->post('lastname', true),
                'fathername' => $this->input->post('fathername', true),
                'mothername' => $this->input->post('mothername', true),
                'designation' => $this->input->post('designation', true),
                'nationalid' => $this->input->post('nationalid', true),
                'permanentaddress' => $this->input->post('permanentaddress', true),
                'religion' => $this->input->post('religion', true),
                'mpoid' => $this->input->post('mpoid', true),
                'tphone' => $this->input->post('tphone', true),
                'mailingaddress' => $this->input->post('mailingaddress', true),
                'gender' => $this->input->post('gender', true),
                'birthdate' => $this->input->post('birthdate', true),
                'email' => $this->input->post('email', true),
                'joindate' => $this->input->post('joindate', true),
                'jscsubjectteacher' => $this->input->post('jscsubjectteacher', true),
                'jscteachingdate' => $this->input->post('jscteachingdate', true),
                'sscsubjectteacher' => $this->input->post('sscsubjectteacher', true),
                'sscteachingdate' => $this->input->post('sscteachingdate', true),
                'hscsubjectteacher' => $this->input->post('hscsubjectteacher', true),
                'hscteachingdate' => $this->input->post('hscteachingdate', true),
                'jscwanttobe' => $this->input->post('jscwanttobe', true),
                'sscwanttobe' => $this->input->post('sscwanttobe', true),
                'hscwanttobe' => $this->input->post('hscwanttobe', true),
                'jscrelative' => $this->input->post('jscrelative', true),
                'sscrelative' => $this->input->post('sscrelative', true),
                'hscrelative' => $this->input->post('hscrelative', true),
                'sscboard' => $this->input->post('sscboard', true),
                'sscgroup' => $this->input->post('sscgroup', true),
                'sscresult' => $this->input->post('sscresult', true),
                'sscyear' => $this->input->post('sscyear', true),
                'hscboard' => $this->input->post('hscboard', true),
                'hscgroup' => $this->input->post('hscgroup', true),
                'hscresult' => $this->input->post('hscresult', true),
                'hscyear' => $this->input->post('hscyear', true),
                'graduationinstitute' => $this->input->post('graduationinstitute', true),
                'graduationsubject' => $this->input->post('graduationsubject', true),
                'graduationresult' => $this->input->post('graduationresult', true),
                'graduationyear' => $this->input->post('graduationyear', true),
                'mastersinstitute' => $this->input->post('mastersinstitute', true),
                'masterssubject' => $this->input->post('masterssubject', true),
                'mastersresult' => $this->input->post('mastersresult', true),
                'mastersyear' => $this->input->post('mastersyear', true),
                'bedresult' => $this->input->post('bedresult', true),
                'bedyear' => $this->input->post('bedyear', true),
                'medresult' => $this->input->post('medresult', true),
                'medyear' => $this->input->post('medyear', true),
                'Othersexam' => $this->input->post('Othersexam', true),
                'Othersexamresult' => $this->input->post('Othersexamresult', true),
                'Othersexamyear' => $this->input->post('Othersexamyear', true),
                'jscexhe' => $this->input->post('jscexhe', true),
                'jscexsubcode' => $this->input->post('jscexsubcode', true),
                'sscexhe' => $this->input->post('sscexhe', true),
                'sscexsubcode' => $this->input->post('sscexsubcode', true),
                'hscexhe' => $this->input->post('hscexhe', true),
                'hscexsubcode' => $this->input->post('hscexsubcode', true),
				'photo' => $data['file_name'],
                'enrollmentstatus' => $this->input->post('enrollmentstatus', true),
                'isActive' => 1
		);
		}
		$this->results = $this->common_model->updateRecords($this->common_model->_teachers, $this->records, $this->where);
		if ($this->results == 1) {
			$this->status['status'] = 1;
			$this->status['msg'] = "Teacher";
		} else {
			$this->status['status'] = 0;
			$this->status['msg'] = "Something went wrong when saving the file, please try again.";
		}
		echo jsonEncode($this->status);
		//echo jsonEncode(array('photo' =>$photo));
		
}
	
	public function deleteteacherajax() {
        $this->id = $this->uri->segment(2);
        
        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('teacherid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_teachers, $this->where);
            //var_dump($this->isDelete);exit;
           if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Teacher is deleted.";
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
