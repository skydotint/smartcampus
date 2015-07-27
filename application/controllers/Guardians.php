<?php

class Guardians extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("guardians_model");
        $this->load->library(array('ion_auth', 'form_validation'));
        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

}
