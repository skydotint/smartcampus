<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact extends MX_Controller {

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
		$data['title'] = "যোগাযোগ";
        $data['settings'] = $this->settings_model->getSettings();
        $data['photos'] = $this->photos_model->getPhotos();
        $data['webpages'] = $this->webpages_model->getParentpages();
        $data['classes'] = $this->classes_model->getClassess();
        $data['sections'] = $this->sections_model->getSections();
        $data['downloads'] = $this->downloads_model->getDownloads();
        $data['notices'] = $this->notices_model->getNotices();
        $data['news'] = $this->news_model->getNewslimit();
        $data['allnews'] = $this->news_model->getNews();
		$data['vcount'] = $this->common_model->getRecords($this->common_model->_counter_values, $this->where, 's');


        $data['module'] = 'contact';
        $data['view_settings'] = 'view_settings';
        $data['view_mainmenus'] = 'view_mainmenus';
        $data['view_rightsidebar'] = 'view_rightsidebar';
        echo Modules::run('template/contact', $data);
    }

    function contactajax() {
        error_reporting(0);

		$data['settings'] = $this->settings_model->getSettings();
		$ad = $data['settings'][0];
		$instituteemail = $ad['instituteemail'];
        $fullname = $this->input->post('fullname', true);
        $mobileno = $this->input->post('mobileno', true);
        $email = $this->input->post('email', true);
        $subject = $this->input->post('subject', true);
        $message = $this->input->post('message', true);

        $msg = "Name:" . $fullname . "\n"."Contact Number:" . $mobileno . "\n" . "Message:" . $message;
        //$receiverEmail = "dev.saddam@gmail.com";
		
		
		//$to = "dev.saddam@gmail.com";
		$to = $instituteemail;
		//$subject = "Test mail";
		if($subject){
			$subject = $subject;
		}else{
			$subject = "Contact Form";
		}
		//$message = "Hello! This is a simple email message.";
		$message = $msg;
		//$from = "dev.saddam25@gmail.com";
		$from = $email;
		$headers = "From:" . $from;
		$send = @mail($to,$subject,$message,$headers);

        if ($send) {
            $this->status['status'] = 1;
            $this->status['msg'] = "আমাদের সাথে যোগাযোগ করার জন্য আপনাকে ধন্যবাদ";
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "Something went wrong sending contact information.";
        }
        echo jsonEncode($this->status);
    }

}
