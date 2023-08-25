<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_email extends CI_Model {
    
    private $table = 'om_users';
    
    //Constructor del modelo
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function updateUser($email, $data){
        
        $this->db->set($data);
        $this->db->where('user_email',$email);
        $this->db->update($this->table,$data);
        
        return $this->db->affected_rows();
        
    }



    /*
     * Función para seleccionar un usuario por nombre y contraseña.
     * Este tipo de consulta "escapa" la información ingresada - Para evitar ataques XSS
     */

    
    
    public function getByUsernamePassword($u, $p) {

        $sql = "SELECT user_id,user_name,user_email,user_password,user_username,user_type_name AS user_type,user_type_id FROM om_users NATURAL JOIN om_user_type WHERE user_username = ? AND user_password = ?";
        $query = $this->db->query($sql, array($u, $p));
        return $query->result_array();
    }
    
    //Función para ver todos los om_users
    public function allUsers() {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
    
    //Función para insertar usuario en tabla stud
    public function insertUser($data){
        $this->db->insert($this->table,$data);
        return $this->db->insert_id();
    }
    
    //Función para insertar tipo de usuario
    public function insertUsertype($data){
        $this->db->insert('om_user_type',$data);
        return $this->db->insert_id();
    }
    
    //Función para actualizar tipo de usuario
    public function updateUsertype($id,$data){
        $this->db->set($data);
        $this->db->where('user_type_id',$id);
        $this->db->update('om_user_type',$data);
    }
    
    //Funcion para borrar usuario
    public function deleteUser($id){
        $data = array(
            'id' => $id            
        );
        $this->db->delete($this->table,$data);
    }
    
    //Funcion para borrar tipo de usuario
    public function deleteUsertype($id){
        $data = array(
            'user_type_id' => $id            
        );
        $this->db->delete('om_user_type',$data);
        
    }
    
}
