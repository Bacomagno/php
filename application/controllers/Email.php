<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * PHP to create CAPTCHA dynamicaly
 * 
 * For more info, See: https://www.codeigniter.com/user_guide/helpers/captcha_helper.html
 * 
 * JCG
 * 
 */

class Email extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('model_email');
    } 
    
    public function index(){
        redirect(base_url());
    }
    
    public function recovery(){

        $email = isset($_SESSION['email']) ? $this->session->userdata('email') : '';
        
        if(strcmp($email, '') != 0){
            
            // Generates a random 8 chars Password
            $human = substr(md5(mt_rand()), 0, 8);
            
            // Send mail to user
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'correo@dominio.com',
                'smtp_pass' => 'gmail1q2w3e4r',
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'wordwrap' => TRUE
            );

            $this->load->library('email', $config);
            
            $this->email->set_newline("\r\n");
            $subsys = $_SESSION['path'];
            $subsys = explode('/', $subsys);
            $subsys = $subsys[1];
            $this->email->from($subsys . '@system.com', $_SESSION['sysname']);
            $this->email->to($email);
            $this->email->subject($_SESSION['sysname'] . " - Password recovery");
            
            $data = array(
                'user_password' => sha1($human)
            );
            $check = $this->model_email->updateUser($email, $data);
            
            if($check != 0){
                
                $message = "Nuevo password: " . $human . "\n\nIngrese a: " . base_url();
                $this->email->message($message);
                $this->email->send();
                
                unset($_SESSION['email']);
                
                $this->session->set_userdata('alert', true);   
            }   
        }
        redirect(base_url());   
    }
}
