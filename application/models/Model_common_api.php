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
            $selectArchivo = array("
            om_proyectos.id_proyecto, 
            om_proyectos.nombre_proyecto, 
            om_proyectos.codigo_institucional_proyecto, 
            om_proyectos.acto_administrativo, 
            om_proyectos.linea_facultad, 
            om_proyectos.presupuesto_asignado, 
            om_proyectos.propuesta_proyecto, 
            om_proyectos.producto_esperado, 
            om_proyectos.fecha_inicio, 
            om_proyectos.fecha_final, 
            IFNULL(om_avances.archivo_proyecto, '') AS archivo_proyecto, 
            om_proyectos.presupuesto_ejecutado, 
            om_proyectos.borrado, 
            om_proyectos.log_accion, 
            om_proyectos.log_usuario, 
            om_proyectos.log_timestamp, 
            om_users.user_name AS docente_lider, 
            om_lineas_institucionales_lista.nombre_linea_institucional AS linea_investigacion_institucional, 
            om_grupos_colciencias_lista.nombre_grupo AS grupo_colciencias, 
            om_facultades_lista.name_facultad_lista AS facultad, 
            om_lineas_por_programa.nombre_linea_por_programa AS linea_programa, 
            om_programa_academico_lista.nombre_programa_academico AS programa_academico, 
            om_estado_proyecto.nombre_estado AS estado 
            ");
            $innerJoinArchivoProyect = array("
            INNER JOIN om_users ON om_proyectos.docente_lider = om_users.user_id
            INNER JOIN om_lineas_institucionales_lista ON om_proyectos.linea_investigacion_institucional = om_lineas_institucionales_lista.id_linea_institucional_lista
            INNER JOIN om_grupos_colciencias_lista ON om_proyectos.grupo_colciencias = om_grupos_colciencias_lista.id_grupo_colciencias
            INNER JOIN om_facultades_lista ON om_proyectos.facultad = om_facultades_lista.facultad_lista_id
            INNER JOIN om_lineas_por_programa ON om_proyectos.linea_programa = om_lineas_por_programa.id_lineas_por_programa
            INNER JOIN om_programa_academico_lista ON om_proyectos.programa_academico = om_programa_academico_lista.id_programa_academico
            INNER JOIN om_estado_proyecto ON om_proyectos.estado = om_estado_proyecto.id_estado 
            ");
            $joinArchProyFin = (" JOIN "  . " om_avances ");
            $leftJoinArchivoFinal = array( " JOIN " . "(" . " SELECT " . " id_proyecto, MAX(log_timestamp) AS ultima_fecha " . " FROM " . "om_avances" . " GROUP BY " . " id_proyecto ) " . " AS ultimos_avances ON om_proyectos.id_proyecto = ultimos_avances.id_proyecto");
            $leftJoinTimestamp = array( " LEFT JOIN " . "om_avances ON om_proyectos.id_proyecto = om_avances.id_proyecto" . " AND " . "ultimos_avances.ultima_fecha = om_avances.log_timestamp" . " AND " . "om_avances.tipo_documento = 3" );

            $archProyFin = array(
                "om_proyectos.docente_lider = om_users.user_id" .
                " AND " . "om_proyectos.linea_investigacion_institucional = om_lineas_institucionales_lista.id_linea_institucional_lista" .
                " AND " . "om_proyectos.grupo_colciencias = om_grupos_colciencias_lista.id_grupo_colciencias" .
                " AND " . "om_proyectos.facultad = om_facultades_lista.facultad_lista_id" .
                " AND " . "om_proyectos.linea_programa = om_lineas_por_programa.id_lineas_por_programa" .
                " AND " . "om_proyectos.programa_academico = om_programa_academico_lista.id_programa_academico" .
                " AND " . "om_proyectos.id_proyecto = om_avances.id_proyecto" .
                // " AND " . "om_avances.tipo_documento = 3" .
                " AND " . "om_proyectos.estado = om_estado_proyecto.id_estado"
                );
            
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
                                // log_message("debug", "referenced_73" . $f["REFERENCED_TABLE_NAME"] );
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

                    // Obtiene la columna que está relacionada con la tabla foranea
                    // para mostrar solo los resultados que tienen que ver con el 
                    // componente principal que se esté editando
                    $fks = $this->get_fks();
                    $column = "";
                    foreach ($fks as $f) {
                        if($f["REFERENCED_TABLE_NAME"] === "om_" . $extra_table){
                            log_message("debug", "referenced_111" . $f["REFERENCED_TABLE_NAME"] );
                            $column = $f["COLUMN_NAME"];
                            break;
                        }
                    }
                    log_message("debug", "mcwhere_116 " . $column);
                    log_message("debug", "mcwhere_116_extraid " . $extra_id);
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
                    // Obtiene la columna que está relacionada con la tabla foranea
                    // para mostrar solo los resultados que tienen que ver con el 
                    // componente principal que se esté editando
                    $fks = $this->get_fks();
                    $column = "";

                    foreach ($fks as $f) {
                        if($f["REFERENCED_TABLE_NAME"] === "om_" . $extra_table){
                            log_message("debug", "referenced_146" . $f["REFERENCED_TABLE_NAME"] );
                            $column = $f["COLUMN_NAME"];
                            break;
                        }
                    }
                    log_message("debug", "mcwhere_148" . $column);
                    log_message("debug", "mcwhere_149" . $this->table);
                    $sql = "SELECT " . join(", ", $fields) . " FROM " . join(", ", $from). " WHERE " . join(" AND ", $where) . " AND " . $this->table . "." . $column . " = " . $extra_id . " AND " . $this->table . ".borrado = 0";
                    
                    if($this->table === "om_users"){
                        $sql = $sql . " AND om_users.system_id = '" . $_SESSION["system"] . "'";                        
                    }
                }else{
                    //echo "Almenos uno es x con where";
                    log_message("debug", "mcwhere_156_where" . join(" AND ", $where));
                    log_message("debug", "mcwhere_159" . $this->table);
                    if($this->table === "om_proyectos"){
                        $sql = "SELECT " . join(", ", $selectArchivo) . " FROM " . $this->table . join(" ", $innerJoinArchivoProyect) . join(" AND ", $leftJoinArchivoFinal) . join(" AND ", $leftJoinTimestamp) . " WHERE " . $this->table . ".borrado = 0";
                    }else{
                        $sql = "SELECT " . join(", ", $fields) . " FROM " . join(", ", $from). " WHERE " . join(" AND ", $where) . " AND " . $this->table . ".borrado = 0";
                    }
                    
                    if($this->table === "om_users"){
                        $sql = $sql . " AND om_users.system_id = '" . $_SESSION["system"] . "'";                            
                    }                        
                }
            }
            
            $sql = $sql . " ORDER BY " . $fields[0] . " ASC";
            
            log_message("debug", "modelcommon" . $sql);

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

                // Obtiene la columna que está relacionada con la tabla foranea
                // para mostrar solo los resultados que tienen que ver con el 
                // componente principal que se esté editando
                $fks = $this->get_fks();
                $column = "";
    
                foreach ($fks as $f) {
                    if($f["REFERENCED_TABLE_NAME"] === "om_" . $extra_table){
                        log_message("debug", "referenced_215" . $f["REFERENCED_TABLE_NAME"] );
                        $column = $f["COLUMN_NAME"];
                        break;
                    }
                }
                log_message("debug", "mcwhere_214" . $column);
                // Cuando esta en proyectos y va a editar un proyecto
                $sql = "SELECT " . join(", ", $fields) . " FROM " . join(", ", $from) . " WHERE " . $this->table . "." . $column . " = " . $extra_id . " AND " . $this->table . ".borrado = 0";

                if($this->table === "om_users"){
                    $sql = $sql . " AND om_users.system_id = '" . $_SESSION["system"] . "'";
                }
            }else{
                // echo "Almenos uno es x sin where";
                // Se usa cuando va a cargar toda la lista
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
                        log_message("debug", "referenced_297" . $f["REFERENCED_TABLE_NAME"] );

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
                                log_message("debug", "referenced_317" . $f["REFERENCED_TABLE_NAME"] );
                                // Actualiza el listado de los campos WHERE de la consulta
                                // se utiliza break para que solo se realice una vez
                                // la búsqueda cuando previamente nombre o name 
                                // fueron afirmativos
                                array_push($where, $this->table . "." . $f["COLUMN_NAME"] . " = " . $f["REFERENCED_TABLE_NAME"] . "." . $f["REFERENCED_COLUMN_NAME"]);
                                log_message("debug", "referenced_323" . $f["REFERENCED_TABLE_NAME"] );
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
                log_message("debug", "mcwhere_339" . $param);
                log_message("debug", "mcwhere_342" . $this->table);
                $sql = "SELECT " . join(", ", $fields) . " FROM " . join(", ", $from);
                $sql = $sql . " WHERE " . $this->table . "." . $pk . " = " . $param . " AND " . $this->table . ".borrado = 0";
            }else{
                log_message("debug", "mcwhere_343" . join(" AND ", $where));
                log_message("debug", "mcwhere_347" . $this->table);
                $sql = "SELECT " . join(", ", $fields) . " FROM " . join(", ", $from). " WHERE " . join(" AND ", $where);
                $sql = $sql . " AND "  . $this->table . "." . $pk . " = " . $param . " AND " . $this->table . ".borrado = 0";
                log_message("debug", "mcwhere_406: " . $sql);
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

    // public function describe_table($t = '') {
    //     if (!empty($t)) {
    //         if ($t === 'om_proyectos') {
    //             // Si la tabla es "om_proyectos," ejecutar la consulta personalizada
    //             $sql = "SELECT * FROM om_proyectos JOIN om_avances WHERE om_proyectos.id_proyecto = om_avances.id_proyecto AND om_avances.tipo_documento = 3";
    //             $query = $this->db->query($sql);
    //             $result =  $query->result_array();
    
    //             // Obtener la descripción de la tabla y agregarla al resultado
    //             $table_info = $this->get_table_description($t);
    //             $result['table_description'] = $table_info;
                
    //             return $result;
    //         } else {
    //             // Si no es "om_proyectos," realizar la consulta DESCRIBE normal
    //             $table_info = $this->get_table_description($t);
    //             return $table_info;
    //         }
    //     } else {
    //         return array();
    //     }
    // }
    
    // // Función para obtener la descripción de la tabla
    // private function get_table_description($t) {
    //     $sql = "DESCRIBE " . $t;
    //     $query = $this->db->query($sql);
    //     return $query->result_array();
    // }
    
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
