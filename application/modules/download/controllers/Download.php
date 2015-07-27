<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Download extends MX_Controller {
	
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
		if($this->uri->segment(2)) {
			$data['id'] = $this->uri->segment(2);
			$data['title'] = "Download";
			$data['settings'] = $this->settings_model->getSettings();
			$data['photos'] = $this->photos_model->getPhotos();  
			$data['webpages'] = $this->webpages_model->getParentpages();
			$data['classes'] = $this->classes_model->getClassess();
			$data['sections'] = $this->sections_model->getSections();
			$data['downloads'] = $this->downloads_model->getDownloads();
			$data['news'] = $this->news_model->getNewslimit();
			$data['downloads'] = $this->downloads_model->getDownloads();
			$data['vcount'] = $this->common_model->getRecords($this->common_model->_counter_values, $this->where, 's');

			
			$this->id = $this->uri->segment(2);
			$this->where = array('downloadid' => $this->id);
			$data['singledownload'] = $this->common_model->getRecords($this->common_model->_downloads, $this->where, 's');
		
		
			$data['module'] = 'download';
			$data['view_settings'] = 'view_settings';
			$data['view_mainmenus'] = 'view_mainmenus';
			$data['view_rightsidebar'] = 'view_rightsidebar';
			echo Modules::run('template/download', $data);
			
		} else {
			$data['id'] = $this->uri->segment(2);
			$data['title'] = "Download";
			$data['settings'] = $this->settings_model->getSettings();
			$data['photos'] = $this->photos_model->getPhotos();
			$data['webpages'] = $this->webpages_model->getParentpages();
			$data['classes'] = $this->classes_model->getClassess();
			$data['sections'] = $this->sections_model->getSections();
			$data['downloads'] = $this->downloads_model->getDownloads();
			$data['news'] = $this->news_model->getNewslimit();
			$data['notices'] = $this->notices_model->getNotices();
			$data['vcount'] = $this->common_model->getRecords($this->common_model->_counter_values, $this->where, 's');

			
			$data['module'] = 'download';
			$data['view_settings'] = 'view_settings';
			$data['view_mainmenus'] = 'view_mainmenus';
			$data['view_rightsidebar'] = 'view_rightsidebar';
			echo Modules::run('template/download', $data);
		}
    }
	
	
}
