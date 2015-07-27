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
$config = array();
        $config['useragent']           = "CodeIgniter";
        $config['mailpath']            = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol']            = "smtp";
        $config['smtp_host']           = "localhost";
        $config['smtp_port']           = "25";
        $config['mailtype'] = 'html';
        $config['charset']  = 'utf-8';
        $config['newline']  = "\r\n";
        $config['wordwrap'] = TRUE;

        $fullname = $this->input->post('fullname', true);
        $mobileno = $this->input->post('mobileno', true);
        $email = $this->input->post('email', true);
        $subject = $this->input->post('subject', true);
        $message = $this->input->post('message', true);

        $msg = "Contact Number:" . $mobileno . "\n" . "Message:" . $message;
        $receiverEmail = "dev.saddam@gmail.com";

        $this->load->library('email');
		$this->email->initialize($config);
        $this->email->from($email, $fullname);
        $this->email->to($receiver);
        
        if ($subject) {
            $subject = $this->email->subject($subject);
        } else {
            $subject = $this->email->subject('Contact Form');
        }
  
        $this->email->message($msg);
        $send = $this->email->send();


	$to = $receiverEmail;
	if($subject){
		$subject = $subject;
	}else{
		$subject = "Contact Form";
	}
	$message = $msg;
	$from = $email;
	$headers = "From:" . $from;
	$send = @mail($to,$subject,$message,$headers);

/*$to = "dev.saddam@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "dev.saddam@gmail.com";
$headers = "From:" . $from;
$send = @mail($to,$subject,$message,$headers);*/
        if ($send) {
            $this->status['status'] = 1;
            $this->status['msg'] = "Thank you for contact with us.";
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "Something went wrong sending contact information.";
        }
        echo jsonEncode($this->status);
    }

}
