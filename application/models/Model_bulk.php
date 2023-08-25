<?php

// Este script se ejecutará sin límite de tiempo.
set_time_limit(0);

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_bulk extends CI_Model {

    var $table;
    
    function __construct() {
        $this->load->database();
        parent::__construct();
    }
    
    function construct($t){
        $this->table = $t;
    }

    public function get_all() {
        
       $sql = "SELECT * FROM " . $this->table . " ORDER BY `id` LIMIT 1000";
        
        // Rrealiza la consulta y retorna el resultado        
        $query = $this->db->query($sql);
        return $query->result_array();
        
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
    
    public function db_tables() {
        $sql = "SHOW TABLES";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function get_clientes() {
        
       $sql = "SELECT * FROM om_clients";
        
        // Rrealiza la consulta y retorna el resultado        
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }
    
    public function get_paises() {
        
       $sql = "SELECT * FROM om_countries";
        
        // Rrealiza la consulta y retorna el resultado        
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }
    
    function update($id, $data) {
        
        $campos = $this->describe_table($this->table);
        
        $pk = '';
        
        foreach ($campos as $c){
            if($c["Key"] === "PRI"){
                $pk = $c["Field"];
            }
        }
        
        $this->db->set($data);
        $this->db->where($pk, $id);
        //return $query->result_array();
        
        return $this->db->update($this->table);
        
        //return $this->db->get_compiled_update($this->table);
        
    }
    
    function agrega_solicitantes() {
        
        $actuales = $this->get_solicitantes();
        $nuevos = $this->get_solicitantes_nuevos();
        
        //print_r($actuales);
        //print_r($nuevos);
        
        foreach ($nuevos as $n) {
            
            if(!empty(trim(preg_replace("/\s+/", " ", $n["SOLICITANT"])))){
            
                $existe = false;

                foreach ($actuales as $a) {

                    // Remplaza los caracteres especiales en ambos string
                    $actual = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities($a["registrant_name"]));
                    $nuevo = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities($n["SOLICITANT"]));

                    // Quita cualquier signo que no sea alfanumérico incluyendo los espacios
                    $actual = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $actual));
                    $nuevo = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $nuevo));
                    
                    if(trim($actual) === trim($nuevo)){
                        
                        $existe = true;
                        break;

                    }
                    
                }

                if(!$existe){

                    $data = array(

                        "registrant_name" => $n["SOLICITANT"]

                    );
                    
                    $this->db->insert("om_tom_registrants", $data);
                    echo $this->db->insert_id();    
                    echo " OK<br/>";

                }else{
                    echo "<span style='color: orangered'>" . $n["SOLICITANT"] . " Ya existe </span><br/>";
                }

            }

        }
        
    }
    
    function agrega_clases($marca, $clase, $cobertura) {
        
        /*
         * CAMPOS:
         * 
         * marca
         * clase 01-45
         * cobertura
         */
        
        $actuales = $this->get_clases();
        
        $existe = false;
        
        $data = array();
        
        foreach ($actuales as $a) {
            
            if(trim($a["class_name"]) === trim($clase)){
                $existe = true;
                $data["marca"] = $marca;
                $data["clase"] = $a["class_id"];
                $data["cobertura"] = $cobertura;
                break;
            }
            
        }
        
        // Si existe la clase en el listado de clases simplemente la agrega 
        // relacionada con la marca.
        // Si no existe procede a crear la clase y luego a agregarla 
        // relacionada con la marca.
        if($existe){
            
            $this->db->insert("om_tom_trademark_classes", $data);
            return $this->db->insert_id();
            
        }else{
            
            // Crea la nueva clase
            $data["class_name"] = $clase;
            $data["class_description"] = "Importada desde SAM";
            $this->db->insert("om_tom_classes", $data);
            $nueva_clase = $this->db->insert_id();
            
            // Agrega la nueva clase a la marca relacionada.
            $data = array();
            $data["marca"] = $marca;
            $data["clase"] = $nueva_clase;
            $data["cobertura"] = $cobertura;
            
            $this->db->insert("om_tom_trademark_classes", $data);
            return $this->db->insert_id();
            
        }
        
    }
    
    public function get_clases() {
        
        $sql = "SELECT * FROM om_tom_classes"; 
        // Rrealiza la consulta y retorna el resultado        
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }
    
    public function get_solicitantes() {
        
        $sql = "SELECT * FROM om_tom_registrants"; 
        // Rrealiza la consulta y retorna el resultado        
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }
    
    public function get_solicitantes_nuevos() {
        
        $sql = "SELECT DISTINCT SOLICITANT FROM `om_tom_vanilla_sam` ORDER BY SOLICITANT ASC"; 
        // Rrealiza la consulta y retorna el resultado        
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }
    
    public function get_tipo_marca() {
        
        $sql = "SELECT * FROM om_tom_type"; 
        // Rrealiza la consulta y retorna el resultado        
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }
    
    public function get_tipo_solicitud() {
        
        $sql = "SELECT * FROM om_tom_processes"; 
        // Rrealiza la consulta y retorna el resultado        
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }
    
    public function get_estado_marca() {
        
        $sql = "SELECT * FROM om_tom_status"; 
        // Rrealiza la consulta y retorna el resultado        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function insert_marca($data, $actuaciones) {
        
        // Obtiene consecutivos y sus respectivos ids
        $actuales = $this->get_consecutivos_marca();
        
        $id_marca;
        
        // Busca si existe en los consecutivos actuales
        // almacena el id actual si ya existe
        $existe = false;
        
        foreach($actuales as $ac){
            if(trim($ac["consecutivo"]) === trim($data["consecutivo"])){
                $existe = true;
                $id_marca = $ac["id_marca"];
                break;
            }
        }
        
        // Si no existe inserta la marca y agrega las actuaciones enviadas en 
        // el parametro
        if(!$existe){
            
            // Agrega marca
            $this->db->insert("om_tom_trademarks", $data);
            $id_marca = $this->db->insert_id();
            
            // Agrega actuaciones en caso de no estar vacios todos los campos
            if(!empty(trim($actuaciones["fecha_accion"])) || !empty(trim($actuaciones["accion"])) || !empty(trim($actuaciones["fecha_pendiente"])) || !empty(trim($actuaciones["pendiente"]))){
                $actuaciones["marca"] = $id_marca;
                
                $this->db->insert("om_tom_actuaciones", $actuaciones);
            }
            
            // Retorna si se deben agregar las clases
            return array("status" => true, "id_marca" => $id_marca);
            
        }else{
            
            // Si la marca ya existe agrega solamente las actuaciones dadas en 
            // caso de no estar reeditas y solo si no estan vacíos todos los 
            // campos de la actuacion.
            
            if(!empty(trim($actuaciones["fecha_accion"])) || !empty(trim($actuaciones["accion"])) || !empty(trim($actuaciones["fecha_pendiente"])) || !empty(trim($actuaciones["pendiente"]))){
                
                $actuaciones_actuales = $this->get_actuaciones_marca($id_marca);
                
                $actuacion_existe = false;
                
                foreach ($actuaciones_actuales as $aa) {
                    
                    //echo $aa["accion"] . " | " . $actuaciones["accion"] . "<br/>" . $aa["fecha_accion"] . " | " . $actuaciones["fecha_accion"] . "<br/>" . $aa["pendiente"] . " | " . $actuaciones["pendiente"] . "<br/>" . $aa["fecha_pendiente"] . " | " . $actuaciones["fecha_pendiente"];
                    
                    if($aa["accion"] === $actuaciones["accion"] && $aa["fecha_accion"] === $actuaciones["fecha_accion"] && $aa["pendiente"] === $actuaciones["pendiente"] && $aa["fecha_pendiente"] === $actuaciones["fecha_pendiente"]){
                
                        $actuacion_existe = true;
                        break;
                    }
                    
                }
                
                if(!$actuacion_existe){
                    $actuaciones["marca"] = $id_marca;
                    $this->db->insert("om_tom_actuaciones", $actuaciones);
                }
                
            }
            
            // Retorna si no se deben agregar las clases
            return array("status" => false, "id_marca" => $id_marca);
        }
        
        
        
    }
    
    public function get_consecutivos_marca() {
        
        $sql = "SELECT DISTINCT consecutivo, id_marca FROM `om_tom_trademarks` ORDER BY consecutivo ASC"; 
        // Rrealiza la consulta y retorna el resultado        
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }
    
    public function get_actuaciones_marca($marca) {
        
        $sql = "SELECT * FROM om_tom_actuaciones WHERE marca = " . $marca . " ORDER BY id_actuacion ASC"; 
        // Rrealiza la consulta y retorna el resultado        
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }
}