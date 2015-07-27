<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gallery extends MX_Controller {
	
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
      
			$config = array();
			$config["base_url"] = base_url() . "gallery";
			$config["total_rows"] = $this->photos_model->getCount();
			$config["per_page"] = 2;
			$config["uri_segment"] = 2;

			$this->pagination->initialize($config);
			$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
			$data["photospage"] = $this->photos_model->getPhotosWithPager($config["per_page"], $page);
			$data["links"] = $this->pagination->create_links();
			
			$data['title'] = "ফটো গ্যালারী";
			$data['settings'] = $this->settings_model->getSettings();
			$data['photos'] = $this->photos_model->getPhotos();
			$data['allphotos'] = $this->photos_model->getAllPhotos();
			$data['webpages'] = $this->webpages_model->getParentpages();
			$data['classes'] = $this->classes_model->getClassess();
			$data['sections'] = $this->sections_model->getSections();
			$data['downloads'] = $this->downloads_model->getDownloads();
			$data['notices'] = $this->notices_model->getNotices();
			$data['news'] = $this->news_model->getNewslimit();
			$data['academiccouncills'] = $this->academiccouncillors_model->getAcademiccouncillors();
			$data['vcount'] = $this->common_model->getRecords($this->common_model->_counter_values, $this->where, 's');

			
			$data['module'] = 'gallery';
			$data['view_settings'] = 'view_settings';
			$data['view_mainmenus'] = 'view_mainmenus';
			$data['view_rightsidebar'] = 'view_rightsidebar';
			echo Modules::run('template/gallery', $data);
		
    }
	
	
}
