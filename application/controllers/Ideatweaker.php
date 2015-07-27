<?php

class Ideatweaker extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("teachers_model");
        $this->load->model("guardians_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }
    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "About Idea Tweaker";
        $this->data['sitename'] = "Idea Tweaker";
        $this->data['slogan'] = "your idea, let us tweak";
        $this->data['fuel_slogan'] = "We fuel ideas that grow";
        $this->data['para1'] = "Founded in 2009, Idea Tweaker started as UpWork (formerly oDesk) Agency, Locally registered since 2011, A professional web design and web application development company. Our passion and expertise inspired us to take web application development as a profession.";
        $this->data['para2'] = "We are constantly improving our knowledge and expanding our services to provide our customers with the highest level of professional help for their projects.";
        $this->data['para3'] = "Our passion is to develop ease to use, attractive, modifiable, search engine friendly websites and web applications for you. In addition to this, we know how to promote you and we offer all of this with affordable price.";
        $this->data['site_link'] = "http://www.ideatweaker.com/";
        $this->data['process_link'] = "http://www.ideatweaker.com/our-process/";
        
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('auth/aboutideatweaker', $this->data);
        $this->load->view('admintheme/footer');
    }

}
