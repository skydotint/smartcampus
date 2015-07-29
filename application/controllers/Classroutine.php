<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Classroutine extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("classes_model");
        $this->load->model("teachers_model");
        $this->load->model("sections_model");
        $this->load->model("subjects_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));
        //error_reporting(0);
        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function addroutine() {
        $this->data['title'] = "Add Routine";
        $this->data['classes'] = $this->classes_model->getClassess();
        $this->data['sections'] = $this->sections_model->getSections();
        $this->data['teachers'] = $this->teachers_model->getTeachers();
        $this->data['subjects'] = $this->subjects_model->getSubjects();
        $this->data['studygroups'] = $this->subjects_model->getStudyGroups(); 
        $this->data['days'] = $this->subjects_model->getDays();
        $this->data['periods'] = $this->subjects_model->getPeriods();
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('classes/addroutine', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function editroutine() {
        error_reporting(0);
        $this->id = $this->uri->segment(2);
        $this->where = array('classroutineid' => $this->id);
        $this->data['title'] = "Edit Routine";
        $this->data['classes'] = $this->classes_model->getClasses();
        $this->data['sections'] = $this->sections_model->getSections();
        $this->data['teachers'] = $this->teachers_model->getTeachers();
        $this->data['subjects'] = $this->subjects_model->getSubjects();
        $this->data['studygroups'] = $this->subjects_model->getStudyGroups();
        $this->data['days'] = $this->subjects_model->getDays();
        $this->data['periods'] = $this->subjects_model->getPeriods();
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['rotine'] = $this->common_model->getRecords($this->common_model->_classroutine, $this->where, s);
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('classes/editroutine', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function viewroutine() {
        $this->data['classes'] = $this->classes_model->getClassess();
        $this->data['user'] = $this->ion_auth->user()->row();
        //$this->data['r'] = $this->subjects_model->getRoutines();
        $this->data['title'] = "View Routine";
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('classes/viewroutine', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	public function viewclassroutine() {
		error_reporting(0);
        $this->data['classes'] = $this->classes_model->getClassess();
        $this->data['user'] = $this->ion_auth->user()->row();
		$this->id = $this->data['user']->id;
        $this->where = array('studentuserid' => $this->id);
        $this->data['students'] = $this->common_model->getRecords($this->common_model->_students, $this->where, 's');
		//print_r($this->data['user']);
		//print_r($this->data['students']);
		//print_r($this->data['user']->id);
		//print_r($this->data['students']['class']);
		/*
        $id = $this->data['students']['class'];
        $where = array('class' => $id);
		$this->data['routines'] = $this->common_model->getAllRecordsWhere($this->common_model->_classroutine, $join, $where, all); */
        $this->classid = $this->data['students']['class'];
		$where = array('class' => $this->classid);
        $join = $this->db->join('classdays', 'classroutine.days = classdays.dayid');
        $join = $this->db->join('classperiod', 'classroutine.period = classperiod.classperiodid');
        $join = $this->db->join('sections', 'classroutine.section = sections.sectionid');
        $join = $this->db->join('study_groups', 'classroutine.stdgroup = study_groups.studygroupsid');
        $join = $this->db->join('teachers', 'classroutine.teachers = teachers.teacherid');
        $join = $this->db->join('subjects', 'classroutine.subjects = subjects.subjectid');
        $this->data['routines'] = $this->subjects_model->viewRoutine($this->subjects_model->_classroutine, $join, $where, all);
        //$success = $this->students_model->allRoutines();
        //echo json_encode(array('success' => $success));
		$this->data['title'] = "View Routine";
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('classes/viewclassroutine', $this->data);
        $this->load->view('admintheme/footer');
    }
	
	public function classroutines() {
		error_reporting(0);
        $this->data['classes'] = $this->classes_model->getClassess();
        $this->data['user'] = $this->ion_auth->user()->row();
		$this->id = $this->data['user']->id;
        $this->where = array('studguardianid' => $this->id);
        $this->data['students'] = $this->common_model->getRecords($this->common_model->_students, $this->where, 's');
        $this->classid = $this->data['students']['class'];
		$where = array('class' => $this->classid);
        $join = $this->db->join('classdays', 'classroutine.days = classdays.dayid');
        $join = $this->db->join('classperiod', 'classroutine.period = classperiod.classperiodid');
        $join = $this->db->join('sections', 'classroutine.section = sections.sectionid');
        $join = $this->db->join('study_groups', 'classroutine.stdgroup = study_groups.studygroupsid');
        $join = $this->db->join('teachers', 'classroutine.teachers = teachers.teacherid');
        $join = $this->db->join('subjects', 'classroutine.subjects = subjects.subjectid');
        $this->data['routines'] = $this->subjects_model->viewRoutine($this->subjects_model->_classroutine, $join, $where, all);
		$this->data['title'] = "View Routine";
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('classes/viewclassroutine', $this->data);
        $this->load->view('admintheme/footer');
    }
	

    public function routineajax() {
        error_reporting(0);
        $this->records = array(
            'period' => $this->input->post('period', true),
            'class' => $this->input->post('class', true),
            'section' => $this->input->post('section', true),
            'stdgroup' => $this->input->post('group', true),
            'days' => $this->input->post('days', true),
            'teachers' => $this->input->post('teachers', true),
            'subjects' => $this->input->post('subjects', true),
            'classtime' => $this->input->post('classtime', true),
            'isActive' => 1
        );
        $this->results = $this->common_model->insertRecords($this->common_model->_classroutine, $this->records);
        if ($this->results) {
            $this->status['status'] = 1;
            $this->status['msg'] = "Routine inserted successfully";
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "Something went wrong when new routine inserted.";
        }
        echo jsonEncode($this->status);
    }

    public function editroutineajax() {
        error_reporting(0);
        $this->records = array(
            'period' => $this->input->post('period', true),
            'class' => $this->input->post('class', true),
            'section' => $this->input->post('section', true),
            'stdgroup' => $this->input->post('group', true),
            'days' => $this->input->post('days', true),
            'teachers' => $this->input->post('teachers', true),
            'subjects' => $this->input->post('subjects', true),
            'classtime' => $this->input->post('classtime', true),
            'isActive' => 1
        );
        $this->id = $this->input->post('classroutineid', true);
        $this->where = array('classroutineid' => $this->id);
        $this->results = $this->common_model->updateRecords($this->common_model->_classroutine, $this->records, $this->where);
        //$this->results = $this->common_model->insertRecords($this->common_model->_classroutine, $this->records);
        if ($this->results) {
            $this->status['status'] = 1;
            $this->status['msg'] = "Routine inserted successfully";
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "Something went wrong when new routine inserted.";
        }
        echo jsonEncode($this->status);
    }

    public function getroutineajax() {
        error_reporting(0);
        $this->classid = $this->input->post('classid', true);
        $where = array('class' => $this->classid);
        $join = $this->db->join('classdays', 'classroutine.days = classdays.dayid');
        $join = $this->db->join('classperiod', 'classroutine.period = classperiod.classperiodid');
        $join = $this->db->join('sections', 'classroutine.section = sections.sectionid');
        $join = $this->db->join('study_groups', 'classroutine.stdgroup = study_groups.studygroupsid');
        $join = $this->db->join('teachers', 'classroutine.teachers = teachers.teacherid');
        $join = $this->db->join('subjects', 'classroutine.subjects = subjects.subjectid');
        //$this->data['photos'] = $this->common_model->getAllRecordsJoin($this->common_model->_photos, $join);

        $success = $this->subjects_model->allRoutines($this->subjects_model->_classroutine, $join, $where, all);
        //$success = $this->students_model->allRoutines();
        echo json_encode(array('success' => $success));
    }

    public function deleteroutine() {
        $this->id = $this->uri->segment(2);

        //var_dump($this->id);
        if ($this->id) {
            $this->where = array('classroutineid' => $this->id);
            $this->isDelete = $this->common_model->deleteRecords($this->common_model->_classroutine, $this->where);
            //var_dump($this->isDelete);exit;
            if ($this->isDelete) {
                $this->status['status'] = 1;
                $this->status['msg'] = "Subject is deleted.";
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
