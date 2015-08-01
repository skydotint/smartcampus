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
        $realdata = $this->results_model->getAllMarks($this->common_model->_results, $reswhere);
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
        $objectivemarks = $this->input->post('objectivemarks', true);
        $writtenmarks = $this->input->post('writtenmarks', true);
        $practicalmarks = $this->input->post('practicalmarks', true);
        $resstudentid_hiddenobjectivemarks = $this->input->post('resstudentid_hiddenobjectivemarks', true);
        $resstudentid_hiddenwrittenmarks = $this->input->post('resstudentid_hiddenwrittenmarks', true);
        $resstudentid_hiddenpracticalmarks = $this->input->post('resstudentid_hiddenpracticalmarks', true);
        foreach ($resstudentid_hiddenobjectivemarks as $resstudentid_hiddenobjectivemark) {
            $objectivemarksep = explode("_", $resstudentid_hiddenobjectivemark);
            $resid = $objectivemarksep[0];
            $resmarks = $objectivemarksep[1];
            if ($resmarks) {
                $objectivemarksn[] = array(
                    'resultid' => $resid,
                    'objectivemarks' => $resmarks,
                );
            }
        }
        
        //print_r($objectivemarksn);
        
        foreach ($resstudentid_hiddenwrittenmarks as $resstudentid_hiddenwrittenmark) {
            $writtenmarksep = explode("_", $resstudentid_hiddenwrittenmark);
            $resid = $writtenmarksep[0];
            $resmarksnn = $writtenmarksep[1];
            if ($resmarksnn) {
                $writtenmarksn[] = array(
                    'resultid' => $resid,
                    'writtenmarks' => $resmarksnn,
                );
            }
        }
        
        foreach ($resstudentid_hiddenpracticalmarks as $resstudentid_hiddenpracticalmark) {
            $practicalmarksep = explode("_", $resstudentid_hiddenpracticalmark);
            $resid = $practicalmarksep[0];
            $resmarksn = $practicalmarksep[1];
            if ($resmarksn) {
                $practicalmarksn[] = array(
                    'resultid' => $resid,
                    'practicalmarks' => $resmarksn,
                );
            }
        }
        
        $objectivemarksup = $this->common_model->updateBatch($this->common_model->_results, $objectivemarksn);
        $writtenmarksup = $this->common_model->updateBatch($this->common_model->_results, $writtenmarksn);
        $practicalmarksup = $this->common_model->updateBatch($this->common_model->_results, $practicalmarksn);
        if ($objectivemarksup or $writtenmarksup or $practicalmarksup) {
            $this->status['status'] = 1;
            $this->status['msg'] = "Result";
        } else {
            $this->status['status'] = 0;
            $this->status['msg'] = "There is no student in this group. Please add student in this group.";
        }
        echo jsonEncode($this->status);
    }
    
    public function resultchangeajax() {
        $marks = $this->input->post('marks', true);
        $resultid = $this->input->post('resultid', true);
        $resulttype = $this->input->post('resulttype', true);
        $marksdata = array( $resulttype => $marks);
        $this->where = array('resultid' => $resultid);
        $updatemarks = $this->common_model->updateRecords($this->common_model->_results, $marksdata, $this->where);
        if($updatemarks){
            $this->status['status'] = 1;
            $this->status['msg'] = "Result";
            echo jsonEncode($this->status);
        }
    }
    
    public function viewresults() {
        error_reporting(0);
        $this->data['title'] = "View Results";
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
        $this->load->view('results/viewresults', $this->data);
        $this->load->view('admintheme/footer');
    }
    
    public function viewresultajax() {
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


}
