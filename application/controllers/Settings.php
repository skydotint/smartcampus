<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Settings extends CI_Controller {

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
        $this->load->model("common_model");
        $this->load->model("settings_model");

        $this->load->library(array('ion_auth', 'form_validation', 'upload'));
        $this->output->enable_profiler(false);

        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function index() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['settings'] = $this->settings_model->getSettings();
        $this->data['ptitle'] = "System Settings";
        $this->data['tbltitle'] = "View All Students";

        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('settings/editsettings', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function settingsinsinfoajax() {
        //$this->id = $this->input->post('settingsid', true);
        $this->where = array('settingsid' => 1);
        if(($this->input->post('institutename', true)) || ($this->input->post('instituteaddress', true)) || ($this->input->post('institutephone', true)) || ($this->input->post('established', true)) || ($this->input->post('eiinnumber', true)) || ($this->input->post('mpo', true)) || ($this->input->post('instituteemail', true)) ) {
            $this->records = array(
                'institutename' => $this->input->post('institutename', true),
                'slogan' => $this->input->post('slogan', true),
                'instituteaddress' => $this->input->post('instituteaddress', true),
                'institutephone' => $this->input->post('institutephone', true),
                'established' => $this->input->post('established', true),
                'eiinnumber' => $this->input->post('eiinnumber', true),
                'schooltime' => $this->input->post('schooltime', true),
                'importantinfo' => $this->input->post('importantinfo', true),
                'mpo' => $this->input->post('mpo', true),
                'instituteemail' => $this->input->post('instituteemail', true)
            );
            $this->results = $this->common_model->updateRecords($this->common_model->_settings, $this->records, $this->where);
            if($this->results == 1) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Institute Informations";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the settings, please try again.";
            }
            
            echo jsonEncode($this->status);
            
        }
            /*$this->status['status'] = 1;
            $this->status['msg'] = "Settings Successfully Updated";
            echo jsonEncode($this->status);*/
    }
	
	public function savesettingsinsadminajax() {
        //$this->id = $this->input->post('settingsid', true);
        $this->where = array('settingsid' => 1);
        if(($this->input->post('adminname', true)) || ($this->input->post('adminphone', true)) || ($this->input->post('adminemail', true))) {
            $this->records = array(
                'adminname' => $this->input->post('adminname', true),
                'adminphone' => $this->input->post('adminphone', true),
                'adminemail' => $this->input->post('adminemail', true),
            );
            $this->results = $this->common_model->updateRecords($this->common_model->_settings, $this->records, $this->where);
            if($this->results == 1) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Administrator Informations";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the settings, please try again.";
            }
            
            echo jsonEncode($this->status);
            
        }
    }
	
	public function logosettingsajax() {
		$this->id = $this->input->post('settingsid', true);
        $this->where = array('settingsid' => $this->id);

        //var_dump($this->where);

        $config['upload_path'] = "uploads/settings";
        $config['allowed_types'] = "gif|jpg|jpeg|png";
        $config['max_size'] = "5000";
        $config['max_width'] = "1907";
        $config['max_height'] = "1280";
        //$this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('institutelogo')) {
            $datainslogo = $this->upload->data();
            $this->records = array(
                'institutelogo' => $datainslogo['file_name'],
            );
            $this->results = $this->common_model->updateRecords($this->common_model->_settings, $this->records, $this->where);
            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Institute Logo";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the settings, please try again.";
            }
            echo jsonEncode($this->status);
        } else {
            echo $this->upload->display_errors();
        }
}


public function instituteheaderajax() {
		$this->id = $this->input->post('settingsid', true);
        $this->where = array('settingsid' => $this->id);

        //var_dump($this->where);

        $config['upload_path'] = "uploads/settings";
		$config['allowed_types'] = "gif|jpg|jpeg|png";
        $config['max_size'] = "5000";
        $config['max_width'] = "1907";
        $config['max_height'] = "1280";
        //$this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('instituteheader')) {
            $datainsheader = $this->upload->data();
            $this->records = array(
                'instituteheader' => $datainsheader['file_name']
            );
            $this->results = $this->common_model->updateRecords($this->common_model->_settings, $this->records, $this->where);
            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Institute Header";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the settings, please try again.";
            }
            echo jsonEncode($this->status);
        } else {
            echo $this->upload->display_errors();
            
        }
}

public function adminphotoajax() {
		$this->id = $this->input->post('settingsid', true);
        $this->where = array('settingsid' => $this->id);

        //var_dump($this->where);

        $config['upload_path'] = "uploads/settings";
        $config['allowed_types'] = "gif|jpg|jpeg|png";
        $config['max_size'] = "5000";
        $config['max_width'] = "1907";
        $config['max_height'] = "1280";
        //$this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('adminphoto')) {
            $dataadminphoto = $this->upload->data();
            
            $this->records = array(
                'adminphoto' => $dataadminphoto['file_name'],
            );
            $this->results = $this->common_model->updateRecords($this->common_model->_settings, $this->records, $this->where);
            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Administrator Photo";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the settings, please try again.";
            }
            echo jsonEncode($this->status);
        } else {
            echo $this->upload->display_errors();
        }
}

public function headteacherajax() {
		$this->id = $this->input->post('settingsid', true);
        $this->where = array('settingsid' => $this->id);
        $config['upload_path'] = "uploads/settings";
        $config['allowed_types'] = "gif|jpg|jpeg|png";
        $config['max_size'] = "5000";
        $config['max_width'] = "1907";
        $config['max_height'] = "1280";
        $this->upload->initialize($config);
		
		if (!$this->upload->do_upload('headteacherphoto')) {
			$this->records = array(
				'headmessage' => $this->input->post('headmessage', true)
		);
		} else {
		$data = $this->upload->data();
		$this->records = array(
			'headmessage' => $this->input->post('headmessage', true),
            'headteacherphoto' => $data['file_name']
		);
		}
        $this->results = $this->common_model->updateRecords($this->common_model->_settings, $this->records, $this->where);
        if ($this->results == 1) {
			$this->status['status'] = 1;
			$this->status['msg'] = "Head Teacher Message";
		} else {
			$this->status['status'] = 0;
			$this->status['msg'] = "Something went wrong when saving the file, please try again.";
		}
		echo jsonEncode($this->status);	
}

public function widgetsajax() {
        //$this->id = $this->input->post('settingsid', true);
        $this->where = array('settingsid' => 1);
        if(($this->input->post('visitorcounter', true)) || ($this->input->post('importantlinks', true))) {
            $this->records = array(
                'visitorcounter' => $this->input->post('visitorcounter', true),
                'importantlinks' => $this->input->post('importantlinks', true),
                'importantlinksoffsite' => $this->input->post('importantlinksoffsite', true),
                'contactinfo' => $this->input->post('contactinfo', true),
                'googlemap' => $this->input->post('googlemap', true)
            );
            $this->results = $this->common_model->updateRecords($this->common_model->_settings, $this->records, $this->where);
            if($this->results == 1) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Widgets Informations";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the settings, please try again.";
            }
            
            echo jsonEncode($this->status);
            
        }
    }
	
	
    public function settingsajax() {

        $this->id = $this->input->post('settingsid', true);
        $this->where = array('settingsid' => $this->id);

        //var_dump($this->where);

        $config['upload_path'] = "uploads/settings";
        $config['allowed_types'] = "gif|jpg|jpeg|png";
        $config['max_size'] = "5000";
        $config['max_width'] = "1907";
        $config['max_height'] = "1280";
        //$this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('institutelogo')) {
            $datainslogo = $this->upload->data();
            $this->records = array(
                'institutelogo' => $datainslogo['file_name'],
            );
            $this->results = $this->common_model->updateRecords($this->common_model->_settings, $this->records, $this->where);
            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Settings";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the settings, please try again.";
            }
            echo jsonEncode($this->status);
        } else {
            echo $this->upload->display_errors();
        }
        
        
        if ($this->upload->do_upload('instituteheader')) {
            $datainsheader = $this->upload->data();
            $this->records = array(
                'instituteheader' => $datainsheader['file_name'],
            );
            $this->results = $this->common_model->updateRecords($this->common_model->_settings, $this->records, $this->where);
            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Settings Successfully Updated";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the settings, please try again.";
            }
            echo jsonEncode($this->status);
        } else {
            echo $this->upload->display_errors();
            
        }
        
        
        if ($this->upload->do_upload('adminphoto')) {
            $dataadminphoto = $this->upload->data();
            
            $this->records = array(
                'adminphoto' => $dataadminphoto['file_name'],
            );
            $this->results = $this->common_model->updateRecords($this->common_model->_settings, $this->records, $this->where);
            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Settings Successfully Updated";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the settings, please try again.";
            }
            echo jsonEncode($this->status);
        } else {
            echo $this->upload->display_errors();
        }
        
        if($this->input->post('institutename', true) || 
                $this->input->post('adminname', true) || 
                $this->input->post('adminemail', true) || 
                $this->input->post('instituteaddress', true) || 
                $this->input->post('googlemaps', true) || 
                $this->input->post('institutephone', true) || 
                $this->input->post('instituteemail', true) || 
                $this->input->post('visitorcounter', true) ) {

            $this->records = array(
                'institutename' => $this->input->post('institutename', true),
                'adminphone' => $this->input->post('adminname', true),
                'adminemail' => $this->input->post('adminemail', true),
                'instituteaddress' => $this->input->post('instituteaddress', true),
                'googlemaps' => $this->input->post('googlemaps', true),
                'institutephone' => $this->input->post('institutephone', true),
                'instituteemail' => $this->input->post('instituteemail', true),
                'visitorcounter' => $this->input->post('visitorcounter', true)
            );
            $this->results = $this->common_model->updateRecords($this->common_model->_settings, $this->records, $this->where);
            if ($this->results) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Settings Successfully Updated";
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "Something went wrong when saving the settings, please try again.";
            }
            echo jsonEncode($this->status);

        }
        
    }

}
