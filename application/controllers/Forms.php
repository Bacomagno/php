<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $id = $this->input->post('form');
        if (!empty($id)) {
            $path = $this->session->userdata('path');
            $path = explode('/', $path);
            $path = $path[1];
            $this->load->view($path . '/forms/' . $id);
        } else {
            echo "Form not found.";
        }
    }
    
}