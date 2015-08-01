<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Student extends MX_Controller {

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
        $this->load->model("webpages_model");
        $this->load->model("common_model");
    }

    function index() {
        error_reporting(0);
        $config = array();
        $config["base_url"] = base_url() . "student";
        $config["total_rows"] = $this->students_model->getCount();
        $config["per_page"] = 2;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["students"] = $this->students_model->getStudentsWithPager($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
		$data['title'] = "ছাত্র ছাত্রীদের তালিকা";

        $this->data['classes'] = $this->classes_model->getClassess();
        $this->data['sections'] = $this->sections_model->getSections();

        //$data['id'] = $this->uri->segment(2);
        $data['settings'] = $this->settings_model->getSettings();
        $data['photos'] = $this->photos_model->getPhotos();
        $data['webpages'] = $this->webpages_model->getParentpages();
        $data['classes'] = $this->classes_model->getClassess();
        $data['sections'] = $this->sections_model->getSections();
        $data['downloads'] = $this->downloads_model->getDownloads();
        $data['news'] = $this->news_model->getNewslimit();
        $data['notices'] = $this->notices_model->getNotices();
        //$data['students'] = $this->students_model->getAllstudents();
        $data['vcount'] = $this->common_model->getRecords($this->common_model->_counter_values, $this->where, 's');

        $data['module'] = 'student';
        $data['view_settings'] = 'view_settings';
        $data['view_mainmenus'] = 'view_mainmenus';
        $data['view_rightsidebar'] = 'view_rightsidebar';
        echo Modules::run('template/student', $data);
        //}
    }

    function studentinfo() {
        $data['id'] = $this->uri->segment(2);
		$data['title'] = "ছাত্র ছাত্রীদের তালিকা";
        $data['settings'] = $this->settings_model->getSettings();
        $data['photos'] = $this->photos_model->getPhotos();
        $data['webpages'] = $this->webpages_model->getParentpages();
        $data['classes'] = $this->classes_model->getClassess();
        $data['sections'] = $this->sections_model->getSections();
        $data['downloads'] = $this->downloads_model->getDownloads();
        $data['news'] = $this->news_model->getNewslimit();
        $data['notices'] = $this->notices_model->getNotices();
        $data['students'] = $this->students_model->getAllstudents();
        $data['vcount'] = $this->common_model->getRecords($this->common_model->_counter_values, $this->where, 's');


        $this->id = $this->uri->segment(2);
        $this->where = array('studentid' => $this->id);
        $data['singlestudent'] = $this->common_model->getRecords($this->common_model->_students, $this->where, 's');

        $data['module'] = 'student';
        $data['view_settings'] = 'view_settings';
        $data['view_mainmenus'] = 'view_mainmenus';
        $data['view_rightsidebar'] = 'view_rightsidebar';
        echo Modules::run('template/studentinfo', $data);
    }

    function searchstudentajax() {
        error_reporting(0);
        $class = $this->input->post('class', true);
        $section = $this->input->post('section', true);
        //echo $section;
        $where = array('class' => $class, 'section' => $section);
        $malewhere = array('class' => $class, 'section' => $section, 'gender' => 'Male');
        $felalewhere = array('class' => $class, 'section' => $section, 'gender' => 'Female');
        $allStudents = $this->common_model->getAllRecordsWhere($this->common_model->_students, $where);
        $malestudents = $this->common_model->getAllRecordsWhere($this->common_model->_students, $malewhere);
        $total = $this->common_model->getNumRows($this->common_model->_students, $where);
        $male = $this->common_model->getNumRows($this->common_model->_students, $malewhere);
        $female = $this->common_model->getNumRows($this->common_model->_students, $felalewhere);
        //print_r($data['malestudents']);
        foreach ($malestudents as $malestudent) {
            //echo $rows->middlename;
            $singleData .= "<li>
                                <div class='stdnInfo'>
                                    <div class='stdnInfoLeft'>
                                        <span class='imageWrap'>
                                            <img src='" . base_url() . "uploads/students/" . $malestudent->photo . " '>
                                        </span>
                                    </div>
                                    <div class='stdnInfoRight'>
                                        <p class='name'>Name: $malestudent->firstname</p>
                                        <p class='roll'>Roll: $malestudent->classroll</p>
                                        <p class='roll'>Gender: $malestudent->gender</p>
                                    </div>
                                    <div class='viewDetails'>
                                        <a href='" . base_url() . "studentinfo/".$malestudent->studentid."'>View Details</a>
                                    </div>
                                </div>
                            </li>";
        }
        
        $studentPara = "<p>Toatal:".$total.", Male:".$male.", Female:".$female."</p>";
        if ($singleData) {
            $this->status['status'] = 1;
            $this->status['msg'] = $singleData;
            $this->status['stdcount'] = $studentPara;
        } else {
            $this->status['status'] = 0;
            
            $this->status['msg'] = "No Student Found.";
        }
        echo jsonEncode($this->status);
    }

}
