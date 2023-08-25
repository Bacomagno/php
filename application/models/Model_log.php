<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_log extends CI_Model {
    
    private $table = 'log';
    
    //Constructor del modelo
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //Función para insertar datos en tabla
    public function insertDatos($data){
        $this->db->insert($this->table,$data);
    }
    
}
