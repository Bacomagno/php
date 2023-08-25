<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Controller {

    var $current;
    var $singular;
    
    function __construct() {
        if(!isset($this->current) && !isset($this->singular)){
            die;
        }
        parent::__construct();
        $this->load->helper('form');
        $path = $this->session->userdata('path');
        $path = explode('/', $path);
        $this->load->model($path[1] . '/model_' . $this->current, 'model');
    }

    public function index() {
        $this->checkLogin();
        $this->loadLang();
        $this->load->view('common/common_list');
    }
    
    /*public function editor() {
        echo "hola";
        $this->load->view('common/header', array('system_name' => $_SESSION["sysname"]));
        $this->load->view("common/forms/form_generator");
        $this->load->view('common/footer');
        
    }*/
    
    public function getGraph() {
        // Get the process ID
        $id = rawurldecode($this->uri->segment(4));
        $data['info'] = json_encode($this->model->get_process_tasks($id));
        $this->load->view('common/common_graph',$data);
    }
    
    public function getPhaseGraph() {
        // Get the process ID
        $id = rawurldecode($this->uri->segment(4));
        $data['info'] = json_encode($this->model->get_phases_tasks($id));
        $this->load->view('common/common_graph',$data);
    }
    
    public function add() {
        $this->checkLogin();
        $this->loadLang();
        if (null !== $this->input->post()) {
            $post = $this->input->post();
            $data = array();
            $valid = true;
            //unset($post[$this->singular . '_id']);
            // Value of zero (0) is consired empty, so next step wraps it inside double quotes ("")
            foreach ($post as $key => $value){
                if(!empty(trim('"'. $value . '"'))){
                    $data[$key] = trim($value);
                }else{
                    $valid = false;
                }
            }
            if($valid){
                $id = $this->model->insert($data);
                if(isset($id) && $id !== null){
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
            } else {
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
    
    public function edit() {
        $this->checkLogin();
        $this->loadLang();
        if (null !== $this->input->post()) {
            $post = $this->input->post();
            
            // Check if id is set to edit
            if(isset($post[$this->singular . '_id'])){
                $data = array();
                $valid = true;
                $id = $post[$this->singular . '_id'];
                unset($post[$this->singular . '_id']);
                // Value of zero (0) is consired empty, so next step wraps it inside double quotes ("")
                foreach ($post as $key => $value) {
                    if (!empty(trim('"' . $value . '"'))) {
                        $data[$key] = trim($value);
                    } else {
                        $valid = false;
                    }
                }
                if ($valid) {
                    $this->model->update($id, $data);
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
            }else{
                // If the id is not set threat data as a new (COPY!)
                $data = array();
                $valid = true;
                unset($post[$this->singular . '_id']);
                // Value of zero (0) is consired empty, so next step wraps it inside double quotes ("")
                foreach ($post as $key => $value) {
                    if (!empty(trim('"' . $value . '"'))) {
                        $data[$key] = trim($value);
                    } else {
                        $valid = false;
                    }
                }
                if ($valid) {
                    $id = $this->model->insert($data);
                    if (isset($id) && $id !== null) {
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
                } else {
                    $result = array(
                        'index' => null,
                        'status' => false
                    );
                    echo json_encode($result);
                }
            }
            
        } else {
            $result = array(
                'index' => null,
                'status' => false
            );
            echo json_encode($result);
        }
    }
    
    public function delete() {
        $this->checkLogin();
        $this->loadLang();
        if (null !== $this->input->post()) {
            $post = $this->input->post();
            $valid = true;
            $id = $post[$this->singular . '_id'];
            if ($valid) {
                $this->model->delete($id);
                $result = array(
                    'index' => null,
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
        } else {
            $result = array(
                'index' => null,
                'status' => false
            );
            echo json_encode($result);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        header('Location: ' . base_url());
    }

    public function loadLang() {
        $currentLang = $this->session->userdata('language');
        if (!isset($currentLang)) {
            $this->session->set_userdata('language', 'spanish');
        }
        $this->lang->load('general', $this->session->userdata('language'));
        $this->config->config['language'] = $this->session->userdata('language');
    }

    public function checkLogin() {
        if (!$this->session->userdata('loggedin')) {
            $this->logout();
        }
    }
    
    public function getJson() {
        $this->checkLogin();
        $this->loadLang();
        $data['rows'] = $this->model->get_all();
        $data['rows_fks'] = $this->model->get_fk();
        $data['columns'] = array();        
        if(isset($data['rows'][0])){
            foreach ($data['rows'][0] as $key => $value){
                array_push($data['columns'], array('name' => $key, 'title' => '<span class="' . $key . '">' . $this->lang->line($key) . '<span>'));
            }
        }
        // If no column names were created create them from the desciption of the table
        if (empty($data['columns'])) {
            $var = $this->model->describe_view();
            foreach ($var as $v) {
                array_push($data['columns'], array('name' => $v['Field'], 'title' => '<span class="' . $v['Field'] . '">' . $this->lang->line($v['Field']) . '<span>'));
            }
        }
        header('Content-Type: application/json');
        echo json_encode($data);
    }
    
    public function getForm() {
        // Used in the title of current window
        $data['system_name'] = $this->session->userdata('sysname');
        // Get the system folder to get into its forms
        $path = explode('/', $this->session->userdata('path'));
        $form = rawurldecode($this->uri->segment(4));
        $detail = rawurldecode($this->uri->segment(5));
        
        //$this->load->view('common/header', $data);
        $this->load->view('common/header_tasks', $data);
        
        $data = array(
            'project_detail_id' => $detail,
            'form' => $form
        );
        
        // find if form file exists
        $filename = APPPATH . 'views/' . $path[1] . '/forms/' . $form . '.php';
        
        // Load form if exists, otherwise loads generic form
        if(file_exists($filename)){
            $this->load->view($path[1] . '/forms/' . $form, $data);
        }else{
            $this->load->view('common/forms/generic.php', $data);
        }
        
        $this->load->view('common/footer_tasks');
    }
    
    public function getFormInfo() {
        
        $info = $this->input->post();
        
        $id = $info['project_id'];
        $form = $info['form'];
        
        // Fix column name
        $form = str_replace('-', 'x', $form);
        
        // Find if the column exists in transactions table
        $table = $this->model->describe_transactions();
        
        $flag = false;
        
        // Check each column
        foreach ($table as $t) {
            if(strcmp($t['Field'], $form) == 0){
                $flag = true;
            }
        }
        
        // If the column does not exist
        if(!$flag){
            // Adds the column to the table
            $this->model->add_column($form);
        }
        
        // Query info
        $res = $this->model->get_form_info($id, $form);
        
        // To do if no items where found
        if (empty($res)) {
            // Create new
            $data = array(
                'project_id' => $id,
                $form => ''
            );
            
            $this->model->insert_form_info($data);

            // Query again
            $res = $this->model->get_form_info($id, $form);
            
        }

        $res = json_encode($res);
        $res = json_decode($res, true);

        echo $res[$form];
    }
    
    public function getOne() {
        
        $id = rawurldecode($this->uri->segment(4));
        if(!isset($id) || empty($id)) {
            $id = $this->input->post('id');
        }
        
        if(!isset($id) || empty($id)){
            //$id = rawurldecode($this->uri->segment(4));
            $data['info'] = $this->model->get_one($id);
            $this->load->view('common/header');
            $this->load->view('common/forms/' . $id, $data);
            $this->load->view('common/footer');
        } else {
            
            if (isset($id) && !empty($id)) {
                
                $data = array(
                    'content' => $this->model->get_one($id),
                    'status' => true
                );
                
                if($data['content'] != NULL){
                    header('Content-Type: application/json');
                    echo json_encode($data);
                } else {
                    $data = array(
                        'content' => '',
                        'status' => false
                    );
                    header('Content-Type: application/json');
                    echo json_encode($data);
                }
            } else {
                
                $data = array(
                    'content' => '',
                    'status' => false
                );
                header('Content-Type: application/json');
                echo json_encode($data);
            }
        }
    }
    
    public function getTransaction() {
        $post = $this->input->post();
        if(!empty($post)){
            $res["status"] = true;
            $res["info"] = $this->model->get_one_transaction($post["id"]);
            header('Content-Type: application/json');
            echo json_encode($res);
        }else{
            header('Content-Type: application/json');
            $res["status"] = false;
            $res["info"] = "";
            echo json_encode($res);
            
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
                'smtp_pass' => '1q2w3e4r',
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
}