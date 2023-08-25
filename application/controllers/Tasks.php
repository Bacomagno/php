<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Used to become able to use the Model_common Class
require APPPATH . 'controllers/common/Common_panel_admin.php';

class Tasks extends Common_panel_admin {
    
    function __construct() {
        parent::__construct();
    }
    
    // Insertar la pimera tarea
    public function insertFirstTask() {
        
        $post = $this->input->post();
        
        if(!empty($post)){
        
            // Carga el modelo requerido
            $this->load->model("model_common", 'model');

            $this->model->construct("om_" . $this->session->userdata('folder') . "_project_detail");
            
            // Inserta la información del post
            echo $id = $this->model->insert($post);
            
        }else{
            print_r($post);
        }
        
    }
    
    // Funcion para guardar el contenido del formulario dado.
    public function saveTaskForm() {
        
        if(!empty($_POST)){
        
            $info = $this->input->post();

            // Carga el modelo requerido
            $this->load->model("model_common", 'model');

            $this->model->construct("om_" . $info["table"]);

            $id = $info["id"];
            
            unset($info["id"]);
            unset($info["table"]);

            echo json_encode($this->model->update($id,$info));
            
        }
        
    }
    
    // Función para cargar el formulario de la tarea dada
    public function getTaskForm() {
        // Used in the current window's title
        $data['system_name'] = $this->session->userdata('sysname');
        $data['user'] = $this->session->userdata('user');
        // Get the system folder to get into its forms
        $path = $this->session->userdata('folder');
        $form = rawurldecode($this->uri->segment(4));
        $detail = rawurldecode($this->uri->segment(5));
        
        // find if form file exists
        $filename = APPPATH . 'views/' . $path . '/forms/' . $form . '.php';
        
        // Load form if exists, otherwise loads generic form
        if(file_exists($filename)){
            $this->load->view('common/header_tasks', $data);
            $this->load->view($path . '/forms/' . $form, $data);
            $this->load->view('common/footer_tasks');
        }else{
            $this->load->view('common/header_tasks', $data);
            $this->load->view('common/forms/generic.php', $data);
            $this->load->view('common/footer_tasks');
        }
        
        
    }
    
    public function finishCurrentTask() {
        
        if(!empty($_POST)){
        
            $info = $this->input->post();
            
            // Carga el modelo requerido
            $this->load->model("model_common", 'model');
            $this->model->construct("om_" . $_SESSION["folder"] . "_project_detail");
            
            $id = $info["id"];
            unset($info["id"]);
            
            header('Content-Type: application/json');
            echo json_encode(array("status" => $this->model->update($id,$info)));

            
        }
        
    }


    /*function get_next_task(){
        // Receive the parameters from url
        $process = rawurldecode($this->uri->segment(4));;
        $phase = rawurldecode($this->uri->segment(5));;
        $ordinal = rawurldecode($this->uri->segment(6));;
        $res = $this->model->get_next_task($process, $phase, $ordinal);
        
        header('Content-Type: application/json');
        echo json_encode($res[0]);
        
    }*/
    
}