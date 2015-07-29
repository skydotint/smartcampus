<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Attendance extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("results_model");
        $this->load->model("classes_model");
        $this->load->model("teachers_model");
        $this->load->model("sections_model");
        $this->load->model("subjects_model");
        $this->load->model("attendance_model");
        $this->load->library(array('ion_auth', 'form_validation', 'upload'));
        //error_reporting(0);
        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
    }

    public function attendance() {
        error_reporting(0);
        $this->data['title'] = "Add Attendence Notify";
        $this->data['classes'] = $this->classes_model->getClassess();
        $this->data['sections'] = $this->sections_model->getSections();
        $this->data['teachers'] = $this->teachers_model->getTeachers();
        $this->data['subjects'] = $this->subjects_model->getSubjects();
        $this->data['studygroups'] = $this->subjects_model->getStudyGroups();
        $this->data['days'] = $this->subjects_model->getDays();
        $this->data['periods'] = $this->subjects_model->getPeriods();
        $this->data['exams'] = $this->classes_model->getExams();
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('attendance/attendance', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function attendanceajax() {
        error_reporting(0);
        $class = $this->input->post('class', true);
        $section = $this->input->post('section', true);
        $group = $this->input->post('group', true);
        $join = $this->db->join('guardians', 'guardians.guardianid = students.studguardianid');
        if ($class > 3) {
            $reswhere = array(
                'class' => $class,
                'section' => $section,
                'stdgroup' => $group
            );
        } else {
            $reswhere = array(
                'class' => $class,
                'section' => $section
            );
        }
        $realdata = $this->attendance_model->getStudentsForAbsence($this->common_model->_students, $join, $reswhere, all);
        //$realdata = $this->attendance_model->getStudentsForAbsence($this->common_model->_students, $reswhere);
        if ($realdata) {
            $this->status['status'] = 1;
            $this->status['success'] = $realdata;
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "There is no student in this group. Please add student in this group.";
        }
        echo jsonEncode($this->status);
    }

    public function sendnotification() {
        error_reporting(0);
        $absencenotify = $this->input->post('absencenotify', true);
        $message = $this->input->post('message', true);
        foreach ($absencenotify as $absencenot) {
            $absencesep = explode("_", $absencenot);
            $stdid = $absencesep[0];
            $contact = $absencesep[1];
            if ($absencesep) {
                $s[] = array('studentabid' => $stdid, 'absencedate' => now());
                sendSms($message, $contact);
            }
        }
        $res = $this->common_model->insertBatch($this->common_model->_absence, $s);
        if ($res) {
            $this->status['status'] = 1;
            $this->status['msg'] = "Absence Notifyer Worked Fine";
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "There is no student in this group. Please add student in this group.";
        }
        echo jsonEncode($this->status);
    }

}
