<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_common extends CI_Model {

    var $table_id;
    var $table;
    
    function __construct() {
        parent::__construct();
    }
    
    function construct($t){
        try{
        
            // Assing the current table name
            $this->table = $t;
            
            // Get the current table id
            $described = $this->describe_table($this->table);
            foreach ($described as $row) {
                if($row["Key"] === "PRI"){
                    $this->table_id = $row["Field"];
                    break;
                }

            }
        }
        catch(Exception $e) {
            header('Error Mode_common');
            echo 'Error: ' . $e->getMessage();
            log_message('Error', 'Error common' . $e->getMessage());
        }
    }
    
    public function get_one_consecutivo($id = 0) {
        try{

            // Find the primary key and allowed fields
            $self = $this->describe_table($this->table);
            
            $pk = '';
            $fields = array();
            
            foreach ($self as $s) {

                if(strcmp($s["Key"], "PRI") == 0){
                    $pk = $s["Field"];
                }

                if(strpos($s["Field"], "password") === false){
                    array_push($fields, $s["Field"]);
                }

            }

            if(strcmp($pk, "") >= 0){
                $this->db->select(join(", ", $fields));
                $this->db->where($pk, $id);
                $this->db->where($this->table . ".borrado", 0);
                if($this->table === "om_users"){
                    $this->db->where("om_users.system_id", $_SESSION["system"]);
                }
                return $this->db->get($this->table)->result_array();
            }else{
                return array();
            }
        }
        catch(Exception $e) {
            header('Error Mode_common');
            echo 'Error: ' . $e->getMessage();
            log_message('Error', 'Error common' . $e->getMessage());
        }
        
    }
    
    function insert($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    
    function update($id, $data) {
        try{
        
            // Actualiza
            $this->db->set($data);
            $this->db->where($this->table_id, $id);
            $this->db->update($this->table);
            
            // Determina si se actualizó o no.
            $result = $this->db->conn_id->info;
            $result = explode(" ", $result);
            
            if(intval($result[2]) === 0){
                return false;
            }else{
                return true;
            }
        }
        catch(Exception $e) {
            header('Error Mode_common');
            echo 'Error: ' . $e->getMessage();
            log_message('Error', 'Error common' . $e->getMessage());
        }
    }

    function delete($id) {
        $this->db->where($this->table_id, $id);
        $this->db->delete($this->table);
        return $id;
    }
    
    public function describe_table($t = '') {
        
        if(!empty($t)){
            $sql = "DESCRIBE " . $t;
            $query = $this->db->query($sql);
            return $query->result_array();
        }else{
            return array();
        }
        
    }
    
    function get_tasks_set($phase = 0) {
        
        // Filtra el conjunto de tareas basado en la fase
        if(intval($phase) != 0){
        
            $folder = $this->session->userdata("folder");
            
            // SELECT * FROM `om_tom_tasks` WHERE phase_id = 27 ORDER BY task_ordinal ASC
            $this->db->select('*');
            $this->db->from('om_' . $folder . '_tasks');
            $this->db->where('om_' . $folder . '_tasks.phase_id = ' . $phase);
            $this->db->order_by('om_' . $folder . '_tasks.task_ordinal', 'ASC');
            return $this->db->get()->result();
        
        }else{
            return array();
        }
        
    }
    
    function get_phases_tasks($id = 0){
        if($id != 0){
            $folder = $this->session->userdata("folder");            
            $this->db->select('task_id,phase_name,task_name,task_ordinal,task_next,user_name');
            $this->db->from('om_' . $folder . '_phases,om_' . $folder . '_tasks,om_users');
            $this->db->where('om_' . $folder . '_phases.phase_id = om_' . $folder . '_tasks.phase_id');
            $this->db->where('om_' . $folder . '_tasks.user_id = om_users.user_id');
            $this->db->where('om_' . $folder . '_tasks.phase_id', $id);
            $this->db->where('om_' . $folder . '_tasks.borrado = 0');
            $this->db->order_by('phase_ordinal,task_ordinal', 'ASC');
            return $this->db->get()->result();
        }else{
            echo "Error: No process given";
        }
    }
    
    function update_log($id = "", $log_accion = "", $log_usuario = "", $log_timestamp = ""){
        
        if(!empty($id) && !empty($log_accion) && !empty($log_usuario) && !empty($log_timestamp)){
            
            $data = array(
                "log_accion" => $log_accion,
                "log_usuario" => $log_usuario,
                "log_timestamp" => $log_timestamp
            );
            
            return $this->update($id, $data);
        }else{
            return false;
        }
        
    }
    
    // Obtener el listado de productos general
    function get_productos($param = "") {

        $sql = "SELECT om_productos_lista_colciencias.nombre_tipo_producto, om_productos_lista_colciencias.categoria, om_productos_lista_colciencias.peso, om_productos.proyecto 
                FROM om_productos,om_productos_lista_colciencias 
                WHERE om_productos.producto_colciencias = om_productos_lista_colciencias.id_producto_lista_colciencias 
                AND om_productos.borrado <> 1 ORDER BY categoria ASC";        
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }
    
    // Obtener el estado de los proyectos (El tamaño del array es la cantidad de proyectos)
    function get_estado_proyectos($param = "") {

        $sql = "SELECT om_estado_proyecto.nombre_estado FROM om_proyectos, om_estado_proyecto WHERE om_proyectos.estado = om_estado_proyecto.id_estado AND om_proyectos.borrado <> 1";        
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }
    
    // Obtener el estado de los proyectos (El tamaño del array es la cantidad de proyectos)
    function get_proyectos_anual($param = "") {

        $sql = "SELECT om_proyectos.fecha_inicio,om_proyectos.fecha_final FROM om_proyectos WHERE om_proyectos.borrado <> 1 ORDER BY om_proyectos.fecha_inicio ASC";        
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }
    
    
    /*function describe_transactions(){
        $subsys = $_SESSION['path'];
        $subsys = explode('/', $subsys);
        $subsys = $subsys[1];
        $sql = "DESCRIBE om_" . $subsys . "_transactions";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function get_form_info($id, $form) {
        $this->db->select($form);
        $subsys = $_SESSION['folder'];
        $this->db->from('om_' . $subsys . '_transactions');
        $this->db->where('id_marca', $id);
        return $this->db->get()->row();
    }
    
    function get_next_task($process = 0, $phase = 0, $ordinal = 0){
        if($process != 0 && $phase != 0 && $ordinal != 0){
            $this->db->select('*');
            $this->db->from('om_tom_tasks');
            $this->db->where('phase_id', $phase);
            $this->db->where('task_ordinal', $ordinal);
            return $this->db->get()->result_array();
        }else{
            echo "Error: No criteria given";
        }
    }*/
    
}
