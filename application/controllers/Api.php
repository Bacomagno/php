<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Resources API v1
 * 
 * By: JCG
 * 
 */

class Api extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->library('session');
    }
    
    
    /*
     * Calls the main view when index function is called
     */
    
    public function index() {
        $this->load->view('main_api');
    }
    
    /*
     * The actual API v1 behavior
     * 
     * Currently only the GET request is working to obtain one or all elements 
     * for the given resource
     * 
     */
    
    public function v1() {
        
        /*
         * Must to be logged in to use the api
         */
        
        $this->checkLogin();
        
        /*
         * Receives the resource and a parameter if it is set
         */
        
        $r = rawurldecode($this->uri->segment(3));
        $p = rawurldecode($this->uri->segment(4));
        $e = rawurldecode($this->uri->segment(5));
        $i = rawurldecode($this->uri->segment(6));
        
        $resource = (!empty($r)) ? $r : "x";
        $param = (!empty($p)) ? $p : "x";
        $extra = (!empty($e)) ? $e : "x";
        $id = (!empty($i)) ? $i : "x";
        
        /*
         * If the resource where not specified
         */
        
        if(strcmp($resource, "x") >= 0){            
            
            header('HTTP/1.1 400 Bad Request');
            
        }else{
            
            $method = $_SERVER["REQUEST_METHOD"];

            $this->load->model("model_common_api", "model");
            
            $this->model->construct("om_" . $resource);
            
            $tables = $this->model->db_tables();
            
            $table_exists = false;
            
            foreach($tables as $t){
                
                if(trim($t[key($t)]) === trim("om_" . $resource)){
                    $table_exists = true;
                    break;
                }
            }
            
            if($table_exists){
                
                switch ($method) {

                    case "GET":

                        if($param != 0){

                            $rows       = $this->model->get_one($param);
                            $total      = count($rows);
                            $clean      = $this->model->get_one_ids($param);

                        }else{

                            $rows       = $this->model->get_all($extra, $id);
                            $total      = count($rows);
                            $clean      = $this->model->get_all_ids($extra, $id);
                            
                        }
                        
                        $data = array(
                            "columns"   => $this->model->describe_table("om_" . $resource),
                            "referenced"=> $this->model->referenced_by("om_" . $resource),
                            "rows_fks"       => $this->model->get_fks(),
                            "total"     => $total,
                            "rows"      => $rows,
                            "clean"     => $clean
                        );
                        
                        header("Content-Type: application/json");
                        echo (json_encode($data));
                        break;

                    default:
                        header('HTTP/1.1 405 Method not allowed');
                        header('Allow: GET');
                        break;
                }
                
            }else{
                
                header('HTTP/1.1 400 Bad Request');
                
            }
        }
    } 
    
    public function checkLogin() {
        if (!$this->session->userdata('loggedin')) {
            $this->logout();
        }
    }
    
    public function logout() {
        $this->session->sess_destroy();
        header('Location: ' . base_url());
    }
    
} 
