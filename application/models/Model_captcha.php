<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_captcha extends CI_Model {
    
    //Constructor del modelo
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //Función para seleccionar un captcha
    public function getCaptcha($post,$ip,$seconds) {
        
        $expiration = time() - $seconds; // One minute
        
        // Then see if the captcha exists; BINARY used to compare case sensitiveness
        $sql = 'SELECT COUNT(*) AS count FROM om_captcha WHERE word = BINARY ? AND ip_address = ? AND captcha_time > ?';
        
        $binds = array($post,$ip,$expiration);
        
        $query = $this->db->query($sql, $binds);
        
        return $query->row();
    }
    
    //Función para insertar un captcha
    public function insertCaptcha($data, $seconds){
        
        $this->cleanExpiredCaptcha($seconds);
        
        $query = $this->db->insert_string('om_captcha', $data);
        $this->db->query($query);
        
    }
    
    
    //Funcion para limpiar los captchas que han expirado
    public function cleanExpiredCaptcha($seconds){
        
        // First, delete old captchas
        $expiration = time() - $seconds; // Two hour limit
        $this->db->where('captcha_time < ', $expiration)
                ->delete('om_captcha');
    }
    
}
