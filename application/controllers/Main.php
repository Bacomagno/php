<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    /**
     * Controlador del inicio (página de login)
     */
    
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('model_system', 'system'); 
    }
    
    public function index() {
        $this->checkLogin();
        $this->redirect();
    }
    
    public function logout(){
        
        if(isset($_SESSION["loggedin"])){
            $this->session->sess_destroy();
        }
        
        header('Location: '. base_url());
    }
    
    public function setLang(){
        if (!$this->session->userdata('loggedin')) {
            $this->logout();
        } else {
            $new = (null !== $this->input->post('lang')) ? $this->input->post('lang') : $this->session->userdata('language');
            $this->session->set_userdata('language', $new);
            $this->lang->load('general', $new);
            echo json_encode($this->lang);
        }
    }
    
    public function updateInfo(){
        if (!$this->session->userdata('loggedin')) {
            $this->logout();
        } else {
            $new = $this->input->post();
            /*$this->session->set_userdata('language', $new);
            $this->lang->load('general', $new);*/
            echo json_encode($new);
        }
    }
    
    public function getWord(){
        $this->loadLang();
        $w = $this->input->post('find');
        $x = $this->lang->line($w);
        if($x !== false) {
            $data['status'] = true;
        }else{
            $data['status'] = false;
        }
        $data['word'] = $this->lang->line($w);
        header('Content-Type: application/json');
        echo json_encode($data);
    }
    
    public function loadLang() {
        $currentLang = $this->session->userdata('language');
        if (!isset($currentLang)) {
            $this->session->set_userdata('language', 'spanish');
        }
        $this->lang->load('general', $this->session->userdata('language'));
    }
    
    public function checkLogin() {
        if (!$this->session->userdata('loggedin')) {
            $this->logout();
        }
    }
    
    public function redirect() {
        $this->loadLang();
        header('Location: '. base_url() . $this->session->userdata('path'));
    }
    
    // Impide que los usuarios cambien de subsistema (de tom a pom, de pom a lmo, etc)
    public function whoAmI($system = 0, $group = 0){
        $this->checkLogin();
        $ses_s = $this->session->userdata('system');
        $ses_g = $this->session->userdata('group');
        if($ses_g != $group || $ses_s != $system){
            header("Location: " . base_url() . $this->session->userdata('path'));
        }
    }
    
}
