<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_common_api extends CI_Model {

    var $table;
    
    function __construct() {
        $this->load->database();
        parent::__construct();
    }
    
    function construct($t){
        $this->table = $t;
    }

    public function get_all($extra_table = "x", $extra_id = "x") {
        try {
        
            // Obtiene los campos de la tabla seleccionada
            $self = $this->describe_table($this->table);
            
            $fields = array();
            $from = array();
            $where = array();
            
            // Agrega la primera tabla para FROM
            array_push($from, $this->table);
            
            // Guarda los campos en los que se buscará luego al realizar la consulta
            foreach ($self as $s) {
                if(strpos($s["Field"], "password") === false){
                    array_push($fields, $s["Field"]);
                }
            }

            // Obtiene las información de los campos que tienen claves foraneas y la
            // información de hacia a dónde apuntan
            $fks = $this->get_fks();

            // Continúa solo si existen claves foraneas procesa cada una de ellas
            if(!empty($fks)){

                foreach($fks as $f){

                    // Evaluea que la columna exista en los campos de la tabla
                    // en caso verdadero agrega la actual tabla referenciada como un
                    // campo FROM para la consulta.
                    if(in_array($f["COLUMN_NAME"], $fields)){

                        array_push($from, $f["REFERENCED_TABLE_NAME"]);

                        // Obtiene los campos de la tabla referenciada por la clave
                        // foranea
                        $rtn = $this->describe_table($f["REFERENCED_TABLE_NAME"]);

                        foreach($rtn as $rt){

                            // Si existe algún campo en la tabla referenciada por la
                            // clave foranea que contenga "nombre" o "name" procede 
                            // a buscar el indice del campo en $fields  para luego 
                            // quitarlo y proceder a agregar un nuevo campo que 
                            // garantice exclusividad (Por ejemplo si existen dos 
                            // campos nombre y nombre, permite diferenciarlos 
                            // anteponiendo la tabla que lo referencia, ej:
                            // usuario.nombre y animal.nombre)
                            if(strpos($rt["Field"], "nombre") !== false || strpos($rt["Field"], "name") !== false){

                                $i = array_search($f["COLUMN_NAME"], $fields);
                                unset($fields[$i]);

                                array_push($fields, $f["REFERENCED_TABLE_NAME"] . "." . $rt["Field"] . " AS " . $f["COLUMN_NAME"]);

                                // Actualiza el listado de los campos WHERE de la consulta
                                // se utiliza break para que solo se realice una vez
                                // la búsqueda cuando previamente nombre o name 
                                // fueron afirmativos
                                array_push($where, $this->table . "." . $f["COLUMN_NAME"] . " = " . $f["REFERENCED_TABLE_NAME"] . "." . $f["REFERENCED_COLUMN_NAME"]);

                                break;
                            }
                        }
                    }
                }

            }

            // Corrige los campos en el array "$fields" para que sea únicos para la
            // tabla actual.
            foreach ($fields as $k => $f) {
                if(strpos($f, ".") !== false || strpos($f, " AS ") !== false){
                    // No hace nada si tiene '.' o 'AS'
                }else{
                    $fields[$k] = $this->table . "." . $f;
                }
            }

            // Ensambla las consultas, teniendo en cuenta si existen campos en el 
            // array de las clausulas para WHERE
            if(empty($where)){

                if($extra_table !== "x" && $extra_id !== "x"){

                    //echo "No son x sin where";

                    // Obtiene la columna que está relacionada con la tabla foranea
                    // para mostrar solo los resultados que tienen que ver con el 
                    // componente principal que se esté editando
                    $fks = $this->get_fks();
                    $column = "";
                    foreach ($fks as $f) {
                        if($f["REFERENCED_TABLE_NAME"] === "om_" . $extra_table){
                            $column = $f["COLUMN_NAME"];
                            break;
                        }
                    }

                    $sql = "SELECT " . join(", ", $fields) . " FROM " . join(", ", $from) . " WHERE " . $this->table . "." . $column . " = " . $extra_id . " AND " . $this->table . ".borrado = 0";

                    if($this->table === "om_users"){
                        $sql = $sql . " AND om_users.system_id = '" . $_SESSION["system"] . "'";
                    }

                }else{

                    //echo "Almenos uno es x sin where";
                    $sql = "SELECT " . join(", ", $fields) . " FROM " . join(", ", $from);

                    if($this->table === "om_users"){
                        $sql = $sql . " WHERE om_users.system_id = '" . $_SESSION["system"] . "'" . " AND " . $this->table . ".borrado = 0";
                    }else{
                        $sql = $sql . " WHERE " . $this->table . ".borrado = 0";
                    }
                }

            }else{

                if($extra_table !== "x" && $extra_id !== "x"){

                    //echo "No son x con where\n";

                    // Obtiene la columna que está relacionada con la tabla foranea
                    // para mostrar solo los resultados que tienen que ver con el 
                    // componente principal que se esté editando
                    $fks = $this->get_fks();
                    $column = "";

                    foreach ($fks as $f) {
                        if($f["REFERENCED_TABLE_NAME"] === "om_" . $extra_table){
                            $column = $f["COLUMN_NAME"];
                            break;
                        }
                    }

                    $sql = "SELECT " . join(", ", $fields) . " FROM " . join(", ", $from). " WHERE " . join(" AND ", $where) . " AND " . $this->table . "." . $column . " = " . $extra_id . " AND " . $this->table . ".borrado = 0";

                    if($this->table === "om_users"){
                        $sql = $sql . " AND om_users.system_id = '" . $_SESSION["system"] . "'";
                    }
                    }else{

                        //echo "Almenos uno es x con where";
                        $sql = "SELECT " . join(", ", $fields) . " FROM " . join(", ", $from). " WHERE " . join(" AND ", $where) . " AND " . $this->table . ".borrado = 0";
                        if($this->table === "om_users"){
                            $sql = $sql . " AND om_users.system_id = '" . $_SESSION["system"] . "'";
                        }
                }
            }

            $sql = $sql . " ORDER BY " . $fields[0] . " ASC";

            // Realiza la consulta y retorna el resultado        
            $query = $this->db->query($sql);
            return $query->result_array();
        }
        catch(Exception $e) {
            header('Error Mode_common');
            echo 'Error: ' . $e->getMessage();
            log_message('Error', 'Error common' . $e->getMessage());
        }
    }
    
    public function get_all_ids($extra_table = "x", $extra_id = "x"){
        try {
            
            // Find the allowed fields
            $self = $this->describe_table($this->table);
            
            $fields = array();
            $from = array();
            
            array_push($from, $this->table);
            
            $is_system = false;
            
            foreach ($self as $s) {
                
                if(strpos($s["Field"], "password") === false){
                    array_push($fields, $s["Field"]);
                }
            }
            
            if($extra_table !== "x" && $extra_id !== "x"){
    
                // echo "No son x sin where";
    
                // Obtiene la columna que está relacionada con la tabla foranea
                // para mostrar solo los resultados que tienen que ver con el 
                // componente principal que se esté editando
                $fks = $this->get_fks();
                $column = "";
    
                foreach ($fks as $f) {
                    if($f["REFERENCED_TABLE_NAME"] === "om_" . $extra_table){
                        $column = $f["COLUMN_NAME"];
                        break;
                    }
                }
    
                $sql = "SELECT " . join(", ", $fields) . " FROM " . join(", ", $from) . " WHERE " . $this->table . "." . $column . " = " . $extra_id . " AND " . $this->table . ".borrado = 0";
                
                if($this->table === "om_users"){
                    $sql = $sql . " AND om_users.system_id = '" . $_SESSION["system"] . "'";
                }
            }else{
    
                // echo "Almenos uno es x sin where";
                $sql = "SELECT " . join(", ", $fields) . " FROM " . join(", ", $from);
                
                if($this->table === "om_users"){
                    $sql = $sql . " WHERE om_users.system_id = '" . $_SESSION["system"] . "'" . " AND " . $this->table . ".borrado = 0";
                }else{
                    $sql = $sql . " WHERE " . $this->table . ".borrado = 0";
                }
            }
            $sql =  $sql . " ORDER BY " . $fields[0] . " ASC";
            
            $query = $this->db->query($sql);
            return $query->result_array();
        }
        catch (Exception $e) {
            // Manejo de la excepción
            header('HTTP/1.1 Mode_Common Internal Server Error');
            echo 'Error: ' . $e->getMessage();            
            // Registrar el mensaje de error en el registro de CodeIgniter
            log_message('error', 'Exception Model_common: ' . $e->getMessage());
        }
    }
    
    public function get_one ($param = 0) {
        try {
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

            // Obtiene los campos de la tabla seleccionada
            $self = $this->describe_table($this->table);
            $fields = array();
            $from = array();
            $where = array();

            // Agrega la primera tabla para FROM
            array_push($from, $this->table);

            // Guarda los campos en los que se buscará luego al realizar la consulta
            foreach ($self as $s) {
                if(strpos($s["Field"], "password") === false){
                    array_push($fields, $s["Field"]);
                }
            }
            // Obtiene las información de los campos que tienen claves foraneas y la
            // información de hacia a dónde apuntan
            $fks = $this->get_fks();

            // Continúa solo si existen claves foraneas procesa cada una de ellas
            if(!empty($fks)){

                foreach($fks as $f){
                    // Evaluea que la columna exista en los campos de la tabla
                    // en caso verdadero agrega la actual tabla referenciada como un
                    // campo FROM para la consulta.
                    if(in_array($f["COLUMN_NAME"], $fields)){
                        array_push($from, $f["REFERENCED_TABLE_NAME"]);

                        // Obtiene los campos de la tabla referenciada por la clave
                        // foranea
                        $rtn = $this->describe_table($f["REFERENCED_TABLE_NAME"]);

                        foreach($rtn as $rt){

                            // Si existe algún campo en la tabla referenciada por la
                            // clave foranea que contenga "nombre" o "name" procede 
                            // a buscar el indice del campo en $fields  para luego 
                            // quitarlo y proceder a agregar un nuevo campo que 
                            // garantice exclusividad (Por ejemplo si existen dos 
                            // campos nombre y nombre, permite diferenciarlos 
                            // anteponiendo la tabla que lo referencia, ej:
                            // usuario.nombre y animal.nombre)
                            if(strpos($rt["Field"], "nombre") !== false || strpos($rt["Field"], "name") !== false){
                                $i = array_search($f["COLUMN_NAME"], $fields);
                                unset($fields[$i]);
                                array_push($fields, $f["REFERENCED_TABLE_NAME"] . "." . $rt["Field"] . " AS " . $f["COLUMN_NAME"]);

                                // Actualiza el listado de los campos WHERE de la consulta
                                // se utiliza break para que solo se realice una vez
                                // la búsqueda cuando previamente nombre o name 
                                // fueron afirmativos
                                array_push($where, $this->table . "." . $f["COLUMN_NAME"] . " = " . $f["REFERENCED_TABLE_NAME"] . "." . $f["REFERENCED_COLUMN_NAME"]);

                                break;
                            }
                        }
                    }
                }
            }
            // Corrige los campos en el array "$fields" para que sea únicos para la
            // tabla actual.
            foreach ($fields as $k => $f) {
                if(strpos($f, ".") !== false || strpos($f, " AS ") !== false){
                    // No hace nada si tiene '.' o 'AS'
                }else{
                    $fields[$k] = $this->table . "." . $f;
                }
            }
            // Ensambla las consultas, teniendo en cuenta si existen campos en el 
            // array de las clausulas para WHERE
            if(empty($where)){
                $sql = "SELECT " . join(", ", $fields) . " FROM " . join(", ", $from);
                $sql = $sql . " WHERE " . $this->table . "." . $pk . " = " . $param . " AND " . $this->table . ".borrado = 0";
            }else{
                $sql = "SELECT " . join(", ", $fields) . " FROM " . join(", ", $from). " WHERE " . join(" AND ", $where);
                $sql = $sql . " AND "  . $this->table . "." . $pk . " = " . $param . " AND " . $this->table . ".borrado = 0";
            }
            if($this->table === "om_users"){
                $sql = $sql . " AND om_users.system_id = '" . $_SESSION["system"] . "'";
            }

            // Realiza la consulta y retorna el resultado
            // echo "Consulta SQL: " . $sql; // Imprime la consulta SQL
            $query = $this->db->query($sql);
            return $query->result_array();
            }
        catch(Exception $e) {
            header('Error Mode_common');
            echo 'Error: ' . $e->getMessage();
            log_message('Error', 'Error common' . $e->getMessage());
        }
    }
    
    public function get_one_ids($param = 0) {
        try {
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
                $this->db->where($pk, $param);
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
    
    public function referenced_by($t = '') { 
        if(!empty($t)){
            $sql = "SELECT table_name FROM information_schema.KEY_COLUMN_USAGE WHERE table_schema = '" . $this->db->database . "' AND referenced_table_name = '" . $t . "'";
            $query = $this->db->query($sql);
            return $query->result_array();
        }else{
            return array();
        }
        var_dump(xdebug_get_code_coverage());
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
    
    public function get_fks(){
        // Get foreign keys for current table ($this->table)
        if(isset($this->table) && !empty($this->table)){
            $this->db->select('COLUMN_NAME, REFERENCED_TABLE_NAME, REFERENCED_COLUMN_NAME');
            $this->db->from('INFORMATION_SCHEMA.KEY_COLUMN_USAGE');
            $this->db->where('TABLE_SCHEMA', $this->db->database);
            $this->db->where('TABLE_NAME', $this->table);
            $this->db->where('POSITION_IN_UNIQUE_CONSTRAINT <>', 'NULL');
            $query = $this->db->get();
            return $query->result_array();
        }
    }

}
