<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('model_login'); 
    } 
    
    public function index() {
        $this->loadLang();
        
        // Go to the module if the user is currently logged in
        $in = $this->session->userdata('loggedin');
        if($in){
            header("Location: " . base_url() . $this->session->userdata('path'));
        }
        $this->load->view('common/login');
    }           
    
    public function checklogin() {
        $username = $this->input->post('user_username');
        $password = sha1($this->input->post('user_password'));
        $resultado = $this->model_login->getByUsernamePassword($username,$password);
        
        if(!empty($resultado)){
            $group = '';
            // Grupos:
            // 1 Administradores
            // 2 Paralegales
            // 3 Abogados
            // 4 Usuarios (Solo ver)
            // 5 Asistentes
            // 6 Estudiantes
            // 7 Coordinadores
            // 8 Inactivo
            // 9 Clientes
            switch ($resultado[0]["user_group_id"]) {
                case '1':
                    $group = "panel_admin";
                    break;
                case '2':
                    $group = "panel_paralegal";
                    break;                
                case '3':
                    $group = "panel_attorney";
                    break;
                case '4':
                    $group = "panel_user";
                    break;
                case '5':
                    $group = "panel_assistant";
                    break;
                case '6':
                    $group = "panel_student";
                    break;
                case '7':
                    $group = "panel_coordinators";
                    break;
                default:
                    $this->logout();
                    break;
            }
            
            // Set the current system name
            $sysname = $resultado[0]['system_name'];
            
            // Set the current system folder
            $system = $resultado[0]['system_folder'];
            
            $sess_data = array(
                'loggedin' => true,
                'user' => $resultado[0]['user_id'],
                'username' => $username,
                'name' => $resultado[0]['user_name'],
                'group' => (int)$resultado[0]["user_group"],
                'groupname' => $group,
                'system' => (int)$resultado[0]["system_id"],
                'sysname' => $sysname,
                'email' => $resultado[0]["user_email"],
                'ui' => $resultado[0]["user_id"],
                'path' => "index.php/" . $system . "/" . $group . "/",
                'system_short_name' => $resultado[0]['system_abbreviation'],
                'folder' => $system
            );        
            $this->session->set_userdata($sess_data);
            header("Location: " . base_url() . $this->session->userdata('path'));
        }else{
            $this->session->set_userdata('error', true);            
            redirect(base_url()."index.php");
        }    
    }
    
    public function logout(){
        $this->session->sess_destroy();
        header('Location: '. base_url());
    }
    
    public function loadLang() {
        $currentLang = $this->session->userdata('language');
        if (!isset($currentLang)) {
            $this->session->set_userdata('language', 'spanish');
        }
        $this->lang->load('general', $this->session->userdata('language'));
    }
    
    public function loadLangUri(){
        $l = rawurldecode($this->uri->segment(3));
        $new = (null !== $l) ? $l : 'spanish';
        $this->session->set_userdata('language', $new);
        $this->lang->load('general', $new);        
        $this->index();
    }

}
