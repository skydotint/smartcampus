<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Onlineadmission extends MX_Controller {
	
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
		$data['title'] = "ভর্তির আবেদনপত্র";
        $data['settings'] = $this->settings_model->getSettings();
		$data['photos'] = $this->photos_model->getPhotos();
		$data['webpages'] = $this->webpages_model->getParentpages();
		$data['classes'] = $this->classes_model->getClassess();
        $data['sections'] = $this->sections_model->getSections();
        $data['downloads'] = $this->downloads_model->getDownloads();
        $data['notices'] = $this->notices_model->getNotices();
		$data['news'] = $this->news_model->getNewslimit();
		$data['vcount'] = $this->common_model->getRecords($this->common_model->_counter_values, $this->where, 's');

		
        $data['module'] = 'onlineadmission';
        $data['view_settings'] = 'view_settings';
        $data['view_mainmenus'] = 'view_mainmenus';
        $data['view_rightsidebar'] = 'view_rightsidebar';
        
        echo Modules::run('template/onlineadmission', $data);
    }
	
	function addonlineapplication() {
		$config['upload_path'] = "uploads/onlineapplicants/";
        $config['allowed_types'] = "gif|jpg|jpeg|png";
        $config['max_size'] = "5000";
        $config['max_width'] = "1907";
        $config['max_height'] = "1280";
        $this->load->library('upload', $config);
        //$this->upload->initialize($config);
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
				//$x = "Test Success";
                $this->status['status'] = 1;
                $this->status['msg'] = "Applicant";
            } else {
				//$x = "Test Fail";
                $this->status['status'] = 0;
               $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
			//echo jsonEncode(array('success' => $x));
			}
	}
}
