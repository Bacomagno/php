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

class Captcha extends CI_Controller {

    /* TTL for the stored images */
    private $seconds = 60;
    
    function __construct() {
        
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('captcha');
        $this->load->library('session');
        $this->load->model('model_captcha');
        
    } 
    
    public function index(){
        redirect(base_url());
    }
    
    public function createCaptcha($width = 200, $height = 50, $length = 5, $font_size = 25){

        $vals = array(
            'img_path'      => './captcha/',
            'img_url'       => base_url() . 'captcha/',
            'font_path'     => './assets/fonts/Skranji-Bold.ttf',
            'img_width'     => $width,
            'img_height'    => $height,
            'expiration'    => $this->seconds,
            'word_length'   => $length,
            'font_size'     => $font_size
        );

        $cap = create_captcha($vals);
        
        $data = array(
            'captcha_time' => $cap['time'],
            'ip_address' => $this->input->ip_address(),
            'word' => $cap['word']
        );

        /* Save Captcha in DB*/
        $this->model_captcha->insertCaptcha($data, $this->seconds);
        
        echo $cap['image'];
        
    }
    
    public function validateCaptcha(){
        if(isset($_POST['captcha'])){
            $row = $this->model_captcha->getCaptcha($this->input->post('captcha'), $this->input->ip_address(), $this->seconds);
            if($row->count != 0){
                $this->session->set_userdata('email', $this->input->post('email'));
                redirect(base_url('index.php/email/recovery'));
            }else{
                $this->session->set_userdata('error', true);
            }
        }else{
            $this->session->set_userdata('error', true);
        }
        redirect(base_url());
    }
    
}
