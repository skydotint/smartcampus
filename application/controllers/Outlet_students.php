<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Outlet_Students extends CI_Controller {

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
        $this->load->model("students_model");
        $this->load->model("users_model");
        $this->load->model("guardians_model");
        $this->load->model("classes_model");
        $this->load->model("sections_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));
		$this->load->library("pagination");

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
		$config = array();
        $config["base_url"] = base_url() . "outlet_students/index";
        $config["total_rows"] = $this->students_model->getCount();
        $config["per_page"] = 2;        
        
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->data["students"] = $this->students_model->getStudentsWithPager($config["per_page"], $page);
        $this->data["links"] = $this->pagination->create_links();
        
        $this->data['tbltitle'] = "View Current Students";
        //$this->data['students'] = $this->students_model->getStudents();
        //$this->data['students'] = $this->students_model->getStudents();
        //$this->data['guardianof'] = $this->guardians_model->getGuardian(1);
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('students/viewstudents', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function viewxstudents() {
        $this->data['user'] = $this->ion_auth->user()->row();
		$config = array();
        $config["base_url"] = base_url() . "outlet_students/viewxstudents";
        $config["total_rows"] = $this->students_model->getCount();
        $config["per_page"] = 2;        
        
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$where = array('enrollmentstatus' => 2);
        $this->data["students"] = $this->students_model->getStudentsWithPager($config["per_page"], $page);
		
		//$this->data['students'] = $this->common_model->getRecordsWithPagerwhere($this->common_model->_students, $where, $config["per_page"], $page, 'all');
		
		$this->data["links"] = $this->pagination->create_links();
        $this->data['tbltitle'] = "View X Students";
        /* $this->data['students'] = $this->students_model->getXstudents();
        $this->data['guardianof'] = $this->guardians_model->getGuardian(1); */

        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('students/viewxstudents', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function viewallstudents() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Students";
        $this->data['students'] = $this->students_model->getAllstudents();
        $this->data['guardianof'] = $this->guardians_model->getGuardian(1);

        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('students/viewallstudents', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addstudentform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['classes'] = $this->classes_model->getClassess();
        $this->data['sections'] = $this->sections_model->getSections();
		$this->data['users'] = $this->users_model->getLastuserid();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('students/addstudentform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function viewstudentprofile() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['classes'] = $this->classes_model->getClassess();
        $this->data['sections'] = $this->sections_model->getSections();
        $this->id = $this->uri->segment(2);
        $this->where = array('studentid' => $this->id);
        //var_dump($this->where);
        $this->data['students'] = $this->common_model->getRecords($this->common_model->_students, $this->where, 's');
        //var_dump($this->data['students']);
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('students/viewstudentprofile', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addstudentajax() {
        $config['upload_path'] = "uploads/students/";
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
                'studentid' => $this->input->post('studentid', true),
                'studentuserid' => $this->input->post('studentuserid', true),
                'firstname' => $this->input->post('firstname', true),
                'middlename' => $this->input->post('middlename', true),
                'lastname' => $this->input->post('lastname', true),
                'sphone' => $this->input->post('sphone', true),
                'class' => $this->input->post('class', true),
                'section' => $this->input->post('section', true),
                'classroll' => $this->input->post('classroll', true),
                'shift' => $this->input->post('shift', true),
                'department' => $this->input->post('department', true),
                'year' => $this->input->post('year', true),
                'village' => $this->input->post('village', true),
                'postoffice' => $this->input->post('postoffice', true),
                'upazila' => $this->input->post('upazila', true),
                'district' => $this->input->post('district', true),
                'permanentaddress' => $this->input->post('permanentaddress', true),
				'stdgroup' => $this->input->post('stdgroup', true),
                'mailingaddress' => $this->input->post('mailingaddress', true),
				'gender' => $this->input->post('gender', true),
                'birthdate' => $this->input->post('birthdate', true),
                'email' => $this->input->post('email', true),
                'joindate' => $this->input->post('joindate', true),
                'photo' => $data['file_name'],
                'enrollmentstatus' => $this->input->post('enrollmentstatus', true),
                'isActive' => 1
            );

            $this->results = $this->common_model->insertRecords($this->common_model->_students, $this->records);

            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Student";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        }
    }

    public function editstudentform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['classes'] = $this->classes_model->getClassess();
        $this->data['sections'] = $this->sections_model->getSections();
        $this->id = $this->uri->segment(2);
        $this->where = array('studentid' => $this->id);
		$join = $this->db->join('classes', 'students.class = classes.classid');
		$join = $this->db->join('sections', 'students.section = sections.sectionid');
		$this->data['students'] = $this->common_model->getRecordsjoinwhere($this->common_model->_students, $join, $this->where, 's');
        //var_dump($this->where);
        //$this->data['students'] = $this->common_model->getRecords($this->common_model->_students, $this->where, 's');
        //var_dump($this->data['students']);
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('students/editstudentform', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function editstudentajax() {
		$this->id = $this->input->post('studentid', true);
        $this->where = array('studentid' => $this->id);
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
                'sphone' => $this->input->post('sphone', true),
                'class' => $this->input->post('class', true),
                'section' => $this->input->post('section', true),
                'classroll' => $this->input->post('classroll', true),
                'shift' => $this->input->post('shift', true),
                'department' => $this->input->post('department', true),
                'year' => $this->input->post('year', true),
                'village' => $this->input->post('village', true),
                'postoffice' => $this->input->post('postoffice', true),
                'upazila' => $this->input->post('upazila', true),
                'district' => $this->input->post('district', true),
                'permanentaddress' => $this->input->post('permanentaddress', true),
				'stdgroup' => $this->input->post('stdgroup', true),
                'mailingaddress' => $this->input->post('mailingaddress', true),
				'gender' => $this->input->post('gender', true),
                'birthdate' => $this->input->post('birthdate', true),
                'email' => $this->input->post('email', true),
                'joindate' => $this->input->post('joindate', true),
                'enrollmentstatus' => $this->input->post('enrollmentstatus', true),
                'isActive' => 1
            );
        } else {
            $data = $this->upload->data();
            $this->records = array(
                'firstname' => $this->input->post('firstname', true),
                'middlename' => $this->input->post('middlename', true),
                'lastname' => $this->input->post('lastname', true),
                'sphone' => $this->input->post('sphone', true),
                'class' => $this->input->post('class', true),
                'section' => $this->input->post('section', true),
                'classroll' => $this->input->post('classroll', true),
                'shift' => $this->input->post('shift', true),
                'department' => $this->input->post('department', true),
                'year' => $this->input->post('year', true),
                'village' => $this->input->post('village', true),
                'postoffice' => $this->input->post('postoffice', true),
                'upazila' => $this->input->post('upazila', true),
                'district' => $this->input->post('district', true),
                'permanentaddress' => $this->input->post('permanentaddress', true),
				'stdgroup' => $this->input->post('stdgroup', true),
                'mailingaddress' => $this->input->post('mailingaddress', true),
				'gender' => $this->input->post('gender', true),
                'birthdate' => $this->input->post('birthdate', true),
                'email' => $this->input->post('email', true),
                'joindate' => $this->input->post('joindate', true),
                'photo' => $data['file_name'],
                'enrollmentstatus' => $this->input->post('enrollmentstatus', true),
                'isActive' => 1
            );
			 }
            $this->results = $this->common_model->updateRecords($this->common_model->_students, $this->records, $this->where);
            if ($this->results == 1) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Student";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
       
    }

    public function deletestudentajax() {
        $this->id = $this->uri->segment(2);

        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('studentid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_students, $this->where);
            //var_dump($this->isDelete);exit;
            if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Student is deleted.";
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
