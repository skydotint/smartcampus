<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Homepage extends MX_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("webpages_model");
	}
    function index() {
		error_reporting(0);
        $data['title'] = "পাকুটিয়া পাবলিক স্কুল এন্ড কলেজ";
        $data['settings'] = $this->settings_model->getSettings();
        $data['slides'] = $this->slides_model->getSlides();
		$data['photos'] = $this->photos_model->getPhotos();
		$data['news'] = $this->news_model->getNewslimit();
		$data['downloads'] = $this->downloads_model->getDownloadslimit();
		$data['notices'] = $this->notices_model->getNoticeslimit();
		$data['webpages'] = $this->webpages_model->getParentpages();
		$data['vcount'] = $this->common_model->getRecords($this->common_model->_counter_values, $this->where, 's');

		
        $data['module'] = 'homepage';
        $data['view_settings'] = 'view_settings';
        $data['view_slides'] = 'view_slides';
        $data['view_mainmenus'] = 'view_mainmenus';
        
        echo Modules::run('template/home', $data);
    }
}
