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
    public function aboutsmartcampus() {
        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['tbltitle'] = "About Smart Campus";
        $this->data['sitename'] = "Idea Tweaker";
        $this->data['slogan'] = "your idea, let us tweak";
        $this->data['fuel_slogan'] = "We fuel ideas that grow";
        $this->data['para1'] = "Founded in 2009, Idea Tweaker started as UpWork (formerly oDesk) Agency, Locally registered since 2011, A professional web design and web application development company. Our passion and expertise inspired us to take web application development as a profession.";
        $this->data['para2'] = "We are constantly improving our knowledge and expanding our services to provide our customers with the highest level of professional help for their projects.";
        $this->data['para3'] = "Our passion is to develop ease to use, attractive, modifiable, search engine friendly websites and web applications for you. In addition to this, we know how to promote you and we offer all of this with affordable price.";
        // About Smart Campus
        $this->data['isitsmart'] = "Is it really Smart? Yeap, absolutely Smart, Powerful, Easy to Use Campus Management Software. Smart is a PHP based campus management and administrative software developed to cater to the needs of the educational sector. This software will help you systematize the running of schools and make it far more efficient in the process. We have made in depth duties into the various systems opted by schools and institutions and have developed this software to ease the stress behind its working. Our product is very cost effective and very easy to use.";
        $this->data['isitsmart1'] = "The answer to all your school’s administrative running. An excellent way to systematically manage schools, colleges and institutions.";
        $this->data['ufi'] = 'User Friendly Interface';
        $this->data['ufi_c'] = "Just about anyone with working knowledge of computers will be able to handle Smart Campus. The whole software is based on simplicity itself. You will be able to master the running and the functions of this program very easily. We have designed this Campus management software while keeping in mind all kinds of users.";
        $this->data['mf'] = 'Mobile Friendly';
        $this->data['mf_c'] = 'Smart Campus has been developed to work really well with mobile phones. This means you can make use of this software without facing any kind of restriction based on location. In addition it is compatible with all the browsers and smart phones. There are not many details that you will have to worry about.';
        $this->data['wbs'] = 'Web Based System';
        $this->data['wbs_c'] = 'You should be able to use this software from anywhere with the help of a browser. They are very smart, powerful and very easy to use. Even though you get to access this school software over internet, you need a proper browser to use it.';
        $this->data['dip'] = 'Developed in PHP';
        $this->data['dip_c'] = 'Smart Campus has been developed using PHP. We have made sure that this software is not just user-friendly, but is efficient and flexible as well.';
        $this->data['lof'] = 'Lots of Features';
        $this->data['lof_c'] = 'Compared to some of the other school administrative software’s available in the market, Smart Campus has a wide range of features. In addition to Smart Campus being open sourced software, we are also providing you with a developer’s license in case you are interested in modifying the coding. So anyone interested in altering or improving the coding is welcome to do so.';
        $this->data['hr'] = 'Highly Reliable';
        $this->data['hr_c'] = 'One of key aspects about Smart Campus that is most appealing is its reliability. Once you have used this software you will realize that all you sensitive information will be stored in a safe secure manner. We follow all the latest security protocols and keep updating them to ensure that the safety of our clients data.';
        $this->data['sab'] = 'Support and Back-up';
        $this->data['sab_c'] = 'We have a bunch of well experienced professionals in place just to help you deal with your issues and they are available to you 24/7. Any doubts or queries you have regarding the working or the functions of this Campus management system software will be easily sorted by our team.';
        
        $this->data['site_link'] = "http://www.ideatweaker.com/";
        $this->data['process_link'] = "http://www.ideatweaker.com/our-process/";
        
        $this->load->view('admintheme/header', $this->data);
        $this->load->view('admintheme/sidebar');
        $this->load->view('auth/aboutsmartcampus', $this->data);
        $this->load->view('admintheme/footer');
    }

}
