<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AcademicCalendar extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("common_model");
        
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }
    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Students";

        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('calendars/academic', $this->data);
        $this->load->view('admintheme/footer');
    }
}