<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Used to become able to use the Model_common Class
require APPPATH . 'controllers/Main.php';

class Common_panel_admin extends Main {
    
    var $systemid;
    var $groupid;

    function __construct() {
        parent::__construct();
        if(isset($_SESSION["system"])){
            $this->systemid = $_SESSION['system'];
        }else{
            $this->logout();
        }
        if(isset($_SESSION["system"])){
            $this->groupid = $_SESSION['group'];
        }else{
            $this->logout();
        }
            
    } 
    
    public function index() {
        
        $this->checkLogin();
        
        if ($this->session->userdata('loggedin')) {
            // System - Group
            $this->whoAmI($this->systemid, $this->groupid);

            // Load current system folder information
            $data = $_SESSION;
            
            $this->load->view('common/header',$data);
            $this->load->view($this->session->userdata('folder') . '/panel-admin');
            $this->load->view('common/footer'); 
        }else{
            $this->logout();
        }
        
    }
    
    public function getPhaseGraph() {
        
        // Carga el modelo requerido
        $this->load->model("model_common", 'model');
        
        // Get the process ID
        $id = rawurldecode($this->uri->segment(4));
        
        $data['info'] = json_encode($this->model->get_phases_tasks($id));
        
        $this->load->view('common/common_graph',$data);
    }
    
    public function editor($param1 = "", $param2 = "", $param3 = "") {
        
        $data = array(
            "action" => $param1,
            "current" => $param2,
            "index" => $param3,
        );
        
        //$this->load->view('common/header', array('system_name' => $_SESSION["sysname"]));
        $this->load->view($this->session->userdata('folder') . '/forms/editor/' . $param2, $data);
        //$this->load->view('common/footer');
        
    }
    
    /*
     * Load the given resouce page
     * 
     * Eg: [base_url()]index.php/[folder]/panel_admin/resource/[resource_name]
     * 
     */
    
    public function get($param = "error") {
        
        $this->checkLogin();
        
        // System - Group
        $this->whoAmI($this->systemid, $this->groupid);
        
        if(strcmp(trim($param), "home") == 0){
            
            // Carga el modelo requerido
            $this->load->model("model_common", 'model');

            // Obtiene los datos para los indicadores
            $data['productos'] = $this->model->get_productos();
            $data['estado_proyectos'] = $this->model->get_estado_proyectos();
            $data['proyectos_anual'] = $this->model->get_proyectos_anual();
            
            $this->load->view($this->session->userdata('folder') . '/' . $param, $data);            
        }else{
            
            $this->load->view($this->session->userdata('folder') . '/' . $param);            
        }
        
    }    
    
    public function add() {
        
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
    
    public function add_lock() {
        
        $this->checkLogin();
        $this->loadLang();
        
        // Set the table we want to use
        $current_table = "locks";
                
        // Carga el modelo requerido
        $this->load->model("model_common", 'model');
        $this->model->construct("om_" . $current_table);
        
        if (null !== $this->input->post() && !empty($this->input->post())) {
            
            $post = $this->input->post();
            
            $id = $this->model->insert($post);
            
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
    
    public function del_lock() {
        
        $this->checkLogin();
        $this->loadLang();
        
        // Set the table we want to use
        $current_table = "locks";
                
        // Carga el modelo requerido
        $this->load->model("model_common", 'model');
        $this->model->construct("om_" . $current_table);
        
        if (null !== $this->input->post() && !empty($this->input->post())) {
            
            $post = $this->input->post();
            
            $id = $this->model->delete($post["id_lock"]);
            
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
    
    public function edit() {
        
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
            
            // Carga la descripción de la tabla actual de trabajo
            $desc = $this->model->describe_table("om_" . $current_table);
            
            $id = "";
            
            // Busca el nombre de la clave primaria para obtener el id del contenido
            // del post
            foreach ($desc as $row) {
                if($row["Key"] === "PRI"){
                    
                    // Asigna el id
                    $id = $post[$row["Field"]];
                    
                    // Quita el campo id del post
                    unset($post[$row["Field"]]);
                    break;
                }
            }
            
            //------------------ Actualiza la base de datos ------------------//
            
            // establece la información de log
            $post["log_accion"] = "edit";
            $post["log_usuario"] = $_SESSION["username"];
            
            // Establece la zona horaria para America/Bogota
            date_default_timezone_set('America/Bogota');
            $post["log_timestamp"] = date("Y-m-d h:m:s");
            
            $result = $this->model->update($id, $post);
            
            if($result){
            
                // Si el usario escogió almenos una imagen o un archivo procede 
                // a guardarlo y a actualizar el campo correspondiente en la tabla actual
                if (!empty($_FILES)) {
                    foreach ($_FILES as $key => $value) {
                        if (isset($_FILES[$key])) {
                            if ($_FILES[$key]['error'] == 0) {
                                if ($this->subirArchivo($id, $key)) {
                                    
                                    // establece la información de log
                                    $post["log_accion"] = "edit";
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
                
                $result = array(
                    'index' => $id,
                    'status' => true
                );
                echo json_encode($result);
                
            }else{
                $result = array(
                    'index' => null,
                    'status' => false
                );
                echo json_encode($result);
            }
            
        } else {
            
            $result = array(
                'index' => null,
                'status' => false
            );
            echo json_encode($result);
            
        }
        
    }
    
    /*
     * 1. Obtener el consecutivo del proceso seleccionado
     * 2. Actualizar el numero de consecutivo y el año
     * 3. retornar el consecutivo actual a la vista
     * 
     * Los consecutivos se actualizan y no son reutilizables.
     * 
     */
    
    public function getConsecutivo() {
        
        $this->checkLogin();
        $this->loadLang();
        
        // Carga el modelo requerido
        $this->load->model("model_common", 'model');
        $this->model->construct("om_system");
        
        if (null !== $this->input->post() && !empty($this->input->post())) {
            
            $post = $this->input->post();
            
            $row = $this->model->get_one_consecutivo($post["system"]);
            
            // Si hubo resultados obtiene el valor y actualiza en la tabla
            if(!empty($row)){
                
                $row = intval($row[0]["system_sequence"]);
                
                // Actualiza el consecutivo en el proceso correspondiente
                if($this->model->update($id = $post["system"], array('system_sequence' => ($row + 1)))){
                    $result = array(
                        'index' => $row,
                        'status' => true
                    );
                    echo json_encode($result);
                }else{
                    $result = array(
                        'index' => null,
                        'status' => false
                    );
                    echo json_encode($result);
                }
                
            }else{
                
                $result = array(
                    'index' => null,
                    'status' => false
                );
                echo json_encode($result);
                
            }
            
        } else {
            
            $result = array(
                'index' => null,
                'status' => false
            );
            echo json_encode($result);
            
        }
        
    }
    
    /*
     * Delete especial, no borra directamente de la base de datos, solo establece
     * el registro en la columna "borrado" de 0 a 1
     * 
     */
    public function delete() {
        
        $this->checkLogin();
        $this->loadLang();
        
        if (null !== $this->input->post() && !empty($this->input->post())) {
            
            
            
            // Get the current table name from the parameter
            $current_table = $_POST["resource"];

            // Carga el modelo requerido
            $this->load->model("model_common", 'model');
            $this->model->construct("om_" . $current_table);
            
            $post = array(
                "borrado" => 1
            );
            
            // Carga la descripción de la tabla actual de trabajo
            $desc = $this->model->describe_table("om_" . $current_table);
            
            $id = $_POST["item"];
            
            
            // Actualiza la base de datos
            
            // establece la información de log
            $post["log_accion"] = "delete";
            $post["log_usuario"] = $_SESSION["username"];
            
            // Establece la zona horaria para America/Bogota
            date_default_timezone_set('America/Bogota');
            $post["log_timestamp"] = date("Y-m-d h:m:s");
            
            $result = $this->model->update($id, $post);
            
            if($result){

                $result = array(
                    'index' => $id,
                    'status' => true
                );
                echo json_encode($result);
                
            }else{
                $result = array(
                    'index' => null,
                    'status' => false
                );
                echo json_encode($result);
            }
            
        } else {
            
            $result = array(
                'index' => null,
                'status' => false
            );
            echo json_encode($result);
            
        }
        
    }
    
    public function copy() {
        
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
    
    function subirArchivo($id,$nom_archivo){
        
        $this->checkLogin();
        
        //-------------------------------------------------------------------------------------------//
        //                                                                                           //
        //                      Inicio del código subir archivo                                      //
        //                                                                                           //
        //-------------------------------------------------------------------------------------------//
        //Establece la información del archivo a cargar
        
        $config['upload_path'] = "documents/" . $this->session->userdata('folder') . "/";
        $config['file_name'] = $id . "_" . $nom_archivo;
        $config['allowed_types'] = "gif|jpg|png|jpeg|svg|doc|docx|pdf|xls|xlsx|XLSX|txt";
        $config['overwrite'] = TRUE;
        
        //Carga la libreria para subida de archivos
        $this->load->library('upload', $config);
        
        //Si ocurre un error subiendo el archivo
        if (!$this->upload->do_upload($nom_archivo)) {
            
            //Si hay errores con el archivo devuelve el nombre del error
            $error = array('error' => $this->upload->display_errors());
            
            print_r($error);
            
            return false;    
        } else {
            
            //Si no hay errores con el archivo
            $file =$this->upload->data();
            
            // Stores the file name globally in this class to update the project
            $this->filename = $file["file_name"];
            
            return true;
            
        }

        //-------------------------------------------------------------------------------------------//
        //                                                                                           //
        //                      Fin del código subir archivo                                         //
        //                                                                                           //
        //-------------------------------------------------------------------------------------------//
        
    }
    
    public function getForm() {
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
    
    public function sendMail() {
        
        $info = $this->input->post();
        
        if(!empty($info)){
            /*
             * Envía correo al agente
             */

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
            $this->email->from($info['from'], $_SESSION['sysname']);
            $this->email->to($info['to']);
            $this->email->cc($info['cc']);
            $this->email->subject($info['subject']);
            $message = $info['html'];
            $this->email->message($message);
            $this->email->send();
            
            echo json_encode(true);
            
        }else{
            echo json_encode(false);
            
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
