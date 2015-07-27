<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Results extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("results_model");
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

    public function generateresults() {
        error_reporting(0);
        $this->data['title'] = "Add Results";
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
        $this->load->view('results/generateresults', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function generateresultajax() {
        error_reporting(0);
        $class = $this->input->post('class', true);
        $exam = $this->input->post('exam', true);
        $section = $this->input->post('section', true);
        $subjects = $this->input->post('subjects', true);
        $group = $this->input->post('group', true);

        if ($class > 3) {
            $reswhere = array(
                'class' => $class,
                'exam' => $exam,
                'subjects' => $subjects,
                'section' => $section,
                'stdgroup' => $group
            );
            $stwhere = array(
                'class' => $class,
                'section' => $section,
                'stdgroup' => $group
            );
        } else {
            $reswhere = array(
                'class' => $class,
                'exam' => $exam,
                'subjects' => $subjects,
                'section' => $section
            );
            $stwhere = array(
                'class' => $class,
                'section' => $section
            );
        }

        $rescheck = $this->common_model->getAllRecordsWhere($this->common_model->_results, $reswhere);
        $std = $this->common_model->getAllRecordsWhere($this->common_model->_students, $stwhere);
        if ($rescheck) {
            $this->status['status'] = 0;
            $this->status['msg'] = "Result already added for this section/group. Please go to view results to view results.";
        } else {
            if ($std) {
                foreach ($std as $st) {
                    $s[] = array(
                        'resstudentid' => $st->studentid,
                        'class' => $class,
                        'section' => $section,
                        'stdgroup' => $group,
                        'subjects' => $subjects,
                        'exam' => $exam,
                    );
                }
                $res = $this->common_model->insertBatch($this->common_model->_results, $s);
                if ($res) {
                    $this->status['status'] = 1;
                    $this->status['msg'] = "Result inserted successfully";
                }
            } else {
                $this->status['status'] = 0;
                $this->status['msg'] = "There is no student in this group. Please add student in this group.";
            }
        }
        $this->status['status'] = 1;
        echo jsonEncode($this->status);
    }

    public function addresults() {
        error_reporting(0);
        $this->data['title'] = "Add Results";
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
        $this->load->view('results/addresults', $this->data);
        $this->load->view('admintheme/footer');
    }

    public function addresultajax() {
        error_reporting(0);
        $class = $this->input->post('class', true);
        $exam = $this->input->post('exam', true);
        $section = $this->input->post('section', true);
        $subjects = $this->input->post('subjects', true);
        $group = $this->input->post('group', true);

        if ($class > 3) {
            $reswhere = array(
                'class' => $class,
                'exam' => $exam,
                'subjects' => $subjects,
                'section' => $section,
                'stdgroup' => $group
            );
        } else {
            $reswhere = array(
                'class' => $class,
                'exam' => $exam,
                'subjects' => $subjects,
                'section' => $section
            );
        }
        //$realdata = $this->common_model->getAllResults($this->common_model->_results, $reswhere);
        $realdata = $this->results_model->getAllResults($this->common_model->_results, $reswhere);
        if ($realdata) {
            $this->status['status'] = 1;
            $this->status['success'] = $realdata;
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "There is no student in this group. Please add student in this group.";
        }
        echo jsonEncode($this->status);
    }

    public function updateresult() {
        error_reporting(0);
        $class = $this->input->post('class', true);
        $exam = $this->input->post('exam', true);
        $section = $this->input->post('section', true);
        $subjects = $this->input->post('subjects', true);
        $group = $this->input->post('group', true);
        $resstudentid = $this->input->post('resstudentid', true);
        $marks = $this->input->post('marks', true);
        $resstudentid_marks = $this->input->post('resstudentid_marks', true);
        foreach ($resstudentid_marks as $resstudentid_mark) {
            $resmarkssep = explode("_", $resstudentid_mark);
            $resid = $resmarkssep[0];
            $resmarks = $resmarkssep[1];
            if ($resmarks) {
                $s[] = array(
                    'resultid' => $resid,
                    'marks' => $resmarks,
                );
            }
        }

        $res = $this->common_model->updateBatch($this->common_model->_results, $s);
        if ($res) {
            $this->status['status'] = 1;
            $this->status['success'] = $res;
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "There is no student in this group. Please add student in this group.";
        }
        echo jsonEncode($this->status);
    }

}
