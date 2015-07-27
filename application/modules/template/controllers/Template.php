<?php

class Template extends MX_Controller {

    function home($data) {
        $this->load->view('home', $data);
    }
	
	function onlineadmission($data) {
        $this->load->view('onlineadmission', $data);
    }
	
	function notice($data) {
        $this->load->view('notice', $data);
    }
	
	function latestnews($data) {
        $this->load->view('latestnews', $data);
    }
	
	function headmastermessage($data) {
        $this->load->view('headmastermessage', $data);
    }
	
	function contact($data) {
        $this->load->view('contact', $data);
    }
	
	function headteacher($data) {
        $this->load->view('headteacher', $data);
    }
	
	function anotherresult($data) {
        $this->load->view('anotherresult', $data);
    }
	
	function talentstudent($data) {
        $this->load->view('talentstudent', $data);
    }
	
	function academiccouncill($data) {
        $this->load->view('academiccouncill', $data);
    }
	
	function syllabus($data) {
        $this->load->view('syllabus', $data);
    }
	
	function page($data) {
        $this->load->view('page', $data);
    }
	
	function gallery($data) {
        $this->load->view('gallery', $data);
    }
	
	function student($data) {
        $this->load->view('student', $data);
    }
	
	function studentinfo($data) {
        $this->load->view('studentinfo', $data);
    }
	
	function xstudent($data) {
        $this->load->view('xstudent', $data);
    }
	
	function teacher($data) {
        $this->load->view('teacher', $data);
    }
	
	function teacherinfo($data) {
        $this->load->view('teacherinfo', $data);
    }
	
	function xteacher($data) {
        $this->load->view('xteacher', $data);
    }
	
	function staff($data) {
        $this->load->view('staff', $data);
    }
	
	function staffinfo($data) {
        $this->load->view('staffinfo', $data);
    }
	
	function xstaff($data) {
        $this->load->view('xstaff', $data);
    }
	
	function download($data) {
        $this->load->view('download', $data);
    }
	
	

}
