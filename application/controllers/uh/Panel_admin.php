<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Used to become able to use the Model_common Class
require APPPATH . 'controllers/common/Common_panel_admin.php';

class Panel_admin extends Common_panel_admin {

    function __construct() {
        parent::__construct();
    }
        
    public function add() {
        try{

            $this->checkLogin();
            $this->loadLang();
            
            // Get the current table name from the URL
            $current_table = $_SERVER["REQUEST_URI"];
            $current_table = explode("/", $current_table);
            $current_table = $current_table[sizeof($current_table) - 1];

            // Carga el modelo requerido
            $this->load->model("model_common", 'model');
            $this->model->construct("om_" . $current_table);
            
            if (null !== $this->input->post() && !empty($this->input->post())) {

                $post = $this->input->post();

                // Establece el proceso (set de tareas) si se esta creando una marca
                $uri = $_SERVER["REQUEST_URI"];
                $uri = explode("/", $uri);

                if($uri[sizeof($uri) - 1] === "tom_trademarks"){
                    $post["proceso"] = json_encode($this->model->get_tasks_set($post["fase"]));
                }

                // establece la información de log
                $post["log_accion"] = "add";
                $post["log_usuario"] = $_SESSION["username"];

                // Establece la zona horaria para America/Bogota
                date_default_timezone_set('America/Bogota');
                $post["log_timestamp"] = date("Y-m-d h:m:s");

                $id = $this->model->insert($post);

                //Si el usario escogió almenos una imágen
                if (!empty($_FILES)) {
                    foreach ($_FILES as $key => $value) {
                        if (isset($_FILES[$key])) {
                            if ($_FILES[$key]['error'] == 0) {
                                if ($this->subirArchivo($id, $key)) {

                                    // establece la información de log
                                    $post["log_accion"] = "add";
                                    $post["log_usuario"] = $_SESSION["username"];

                                    // Establece la zona horaria para America/Bogota
                                    date_default_timezone_set('America/Bogota');
                                    $post["log_timestamp"] = date("Y-m-d h:m:s");

                                    $this->model->update($id, array($key => $this->filename));
                                }
                            }
                        }
                    }
                }

                /*$uri = $_SERVER["REQUEST_URI"];
                $uri = explode("/", $uri);

                if($uri[sizeof($uri) - 1] === "tom_trademarks"){
                    echo "Es trademarks";
                }*/

                $result = array(
                    'index' => $id,
                    'status' => true
                );
                echo json_encode($result);

            } else {

                $result = array(
                    'index' => null,
                    'status' => false
                );
                echo json_encode($result);
            }
        }
        catch(Exception $e) {
            header('Error Panel Admin');
            echo 'Error: ' . $e->getMessage();
            log_message('Error', 'Error Panel' . $e->getMessage());
        }
    }
    
    public function copy() {
        try{
        
            $this->checkLogin();
            $this->loadLang();
            
            // Get the current table name from the URL
            $current_table = $_SERVER["REQUEST_URI"];
            $current_table = explode("/", $current_table);
            $current_table = $current_table[sizeof($current_table) - 1];

            // Carga el modelo requerido
            $this->load->model("model_common", 'model');
            $this->model->construct("om_" . $current_table);
            
            if (null !== $this->input->post() && !empty($this->input->post())) {

                $post = $this->input->post();

                // Establece el proceso (set de tareas) si se esta creando una marca
                $uri = $_SERVER["REQUEST_URI"];
                $uri = explode("/", $uri);

                if($uri[sizeof($uri) - 1] === "tom_trademarks"){
                    $post["proceso"] = json_encode($this->model->get_tasks_set($post["fase"]));
                }

                // establece la información de log
                $post["log_accion"] = "copy";
                $post["log_usuario"] = $_SESSION["username"];

                // Establece la zona horaria para America/Bogota
                date_default_timezone_set('America/Bogota');
                $post["log_timestamp"] = date("Y-m-d h:m:s");

                $id = $this->model->insert($post);

                //Si el usario escogió almenos una imágen
                if (!empty($_FILES)) {
                    foreach ($_FILES as $key => $value) {
                        if (isset($_FILES[$key])) {
                            if ($_FILES[$key]['error'] == 0) {

                                // establece la información de log
                                $post["log_accion"] = "copy";
                                $post["log_usuario"] = $_SESSION["username"];

                                // Establece la zona horaria para America/Bogota
                                date_default_timezone_set('America/Bogota');
                                $post["log_timestamp"] = date("Y-m-d h:m:s");

                                if ($this->subirArchivo($id, $key)) {
                                    $this->model->update($id, array($key => $this->filename));
                                }
                            }
                        }
                    }
                }

                $result = array(
                    'index' => $id,
                    'status' => true
                );
                echo json_encode($result);

            } else {

                $result = array(
                    'index' => null,
                    'status' => false
                );
                echo json_encode($result);
            }
        }
        catch(Exception $e) {
            header('Error Mode_common');
            echo 'Error: ' . $e->getMessage();
            log_message('Error', 'Error common' . $e->getMessage());
        }
    }
    
    function getCurrent() {
        try{
            if($_SESSION["loggedin"] != 1){
                $this->logout();
            }else{

                $marca = rawurldecode($this->uri->segment(4));
                $proceso = rawurldecode($this->uri->segment(5));

                if(!empty($marca)){

                    // Carga el modelo requerido
                    $this->load->model("model_common_api", 'model');
                    $this->model->construct("om_users");

                    $subsys = $this->session->userdata('folder');

                    $data["project"] = array("id_marca" => $marca);
                    $data["subsys"] = $subsys;
                    $data["sysname"] = $_SESSION["sysname"];

                    $this->load->view("common/header", $data);
                    $this->load->view($subsys . '/forms/projects/' . $proceso, $data);
                    $this->load->view("common/footer");

                }else{
                    echo "Error";
                }
            }
        }
        catch(Exception $e) {
            header('Error Panel Admin');
            echo 'Error: ' . $e->getMessage();
            log_message('Error', 'Error Panel' . $e->getMessage());
        }
    }
    
}