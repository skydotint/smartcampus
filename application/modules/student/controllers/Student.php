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

        $malewhere = array('gender' => 'Male');
        $felalewhere = array('gender' => 'Female');
        $data['total'] = bn2enNumber($this->common_model->getNumRows($this->common_model->_students, $where));
        $data['male'] = bn2enNumber($this->common_model->getNumRows($this->common_model->_students, $malewhere));
        $data['female'] = bn2enNumber($this->common_model->getNumRows($this->common_model->_students, $felalewhere));
        $allStudents = $this->common_model->getAllRecordsWhere($this->common_model->_students, $where);
        $malestudents = $this->common_model->getAllRecordsWhere($this->common_model->_students, $malewhere);


        $config = array();
        $config["base_url"] = base_url() . "student";
        // $config["total_rows"] = $this->students_model->getCount();
        $config["total_rows"] = $this->common_model->getNumRows($this->common_model->_students, $malewhere);
        $config["per_page"] = 5;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        //$where = array('class' => $class, 'section' => $section);



        $data["students"] = $this->common_model->getAllRecordsWhereWithPager($this->common_model->_students, $config["per_page"], $page, $malewhere);


        //$data["students"] = $this->students_model->getStudentsWithPager($config["per_page"], $page);
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
        $total = bn2enNumber($this->common_model->getNumRows($this->common_model->_students, $where));
        $male = bn2enNumber($this->common_model->getNumRows($this->common_model->_students, $malewhere));
        $female = bn2enNumber($this->common_model->getNumRows($this->common_model->_students, $felalewhere));
        $allStudents = $this->common_model->getAllRecordsWhere($this->common_model->_students, $where);
        $malestudents = $this->common_model->getAllRecordsWhere($this->common_model->_students, $malewhere);

        //print_r($malestudents);
        foreach ($malestudents as $malestudent) {
           /* $singleData .= "<li id='" . $malestudent->studentid . "'>
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
                                        <a href='" . base_url() . "studentinfo/" . $malestudent->studentid . "'>View Details</a>
                                    </div>
                                </div>
                            </li>";*/


            $singleData .= "<li>
            <div class='studentChange'>
                <a href='http://localhost/smartcampus/studentinfo/4'>
                    <img src='" . base_url() . "uploads/students/" . $malestudent->photo . " '>
                    <span>
                            নাম: $malestudent->firstname<br>
                            রোলঃ: $malestudent->classroll<br>
                            শ্রেণী: $malestudent->gender
                    </span>
                    </a>
            </div>
        </li>";
        }

        //$studentPara = "<div class='col-lg-12 countresult'><p style='color:#003a6a; text-align: right; float: right; width:100%;'><b>মোট:  " . $total .  ",  ছাত্র:  " . $male .  ",  ছাত্রী:  " . $female .  "</b><br /></p>";
        $studentCounter = "<b>মোট:  " . $total . ",  ছাত্র:  " . $male . ",  ছাত্রী:  " . $female . "</b>";
        if ($singleData) {
            $this->status['status'] = 1;
            $this->status['msg'] = $singleData;
            $this->status['stdcount'] = $studentCounter;
        } else {
            $this->status['status'] = 0;

            $this->status['msg'] = "No Student Found.";
        }
        echo jsonEncode($this->status);
    }

}
