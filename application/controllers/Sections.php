<?php

class Sections extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("sections_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }
    
    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "View All Sections";
        $this->data['sections'] = $this->sections_model->getSections();

        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('sections/viewsections', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addsectionform() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('sections/addsectionform');
        $this->load->view('admintheme/footer');
    }

    public function addsectionajax() {
        $this->records = array(
            'sectionname' => $this->input->post('sectionname', true),
            'sectiondescription' => $this->input->post('sectiondescription', true),
            'isActive' => 1
        );
        
        $this->results = $this->common_model->insertRecords($this->common_model->_sections, $this->records);

        if ($this->results) {
            $this->status['status'] = 1;
            $this->status['msg'] = $this->records['sectionname'];
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "";
        }

        echo jsonEncode($this->status);
    }
	
	public function editsectionform() {
        $this->data['user'] = $this->ion_auth->user()->row();
		$this->id = $this->uri->segment(2);
        $this->where = array('sectionid' => $this->id);
        //var_dump($this->where);
		$this->data['sections'] = $this->common_model->getRecords($this->common_model->_sections, $this->where, 's');
        //var_dump($this->data['sections']);
		$this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('sections/editsectionform', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	    public function editsectionajax() {
			$this->id = $this->input->post('sectionid', true);
			$this->where = array('sectionid' => $this->id);
			//var_dump($this->where);
			//exit;
            $this->records = array(
                'sectionname' => $this->input->post('sectionname', true),
                'sectiondescription' => $this->input->post('sectiondescription', true),
                'isActive' => 1
            );

			$this->results = $this->common_model->updateRecords($this->common_model->_sections, $this->records, $this->where);
            if ($this->results == 1) {
                $this->status['status'] = 1;
                $this->status['msg'] = $this->records['sectionname'];
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the file, please try again.";
            }
            echo jsonEncode($this->status);
        
    }

	public function deletesectionajax() {
        $this->id = $this->uri->segment(2);
        
        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('sectionid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_sections, $this->where);
            //var_dump($this->isDelete);exit;
           if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Section is deleted.";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "An error occur, try again later.";
            }
        } else {
            /* Return msg error */
            $this->status['status'] = 0;
            $this->status['msg'] = "An error occur, try again later.";
        }

        /* ajax response */
        echo jsonEncode($this->status);
    }
    
}