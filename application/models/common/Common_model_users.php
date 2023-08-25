<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Used to become able to use the Model_common Class
require APPPATH . 'models/Model_common.php';

class Common_model_users extends Model_common {

    function __construct() {
        
        
        parent::__construct();
    }
    
    function get_all() {
        $this->db->where('system_name', $this->session->userdata('sysname'));
        $this->db->order_by($this->order_column, $this->order);
        return $this->db->get($this->view)->result();
    }
    
    public function get_fk(){
        // Get foreign keys for current table ($this->table)
        if(isset($this->table) && !empty($this->table)){
            $this->db->select('*');
            $this->db->from('INFORMATION_SCHEMA.KEY_COLUMN_USAGE');
            $this->db->where('TABLE_SCHEMA', $this->db->database);
            $this->db->where('TABLE_NAME', $this->table);
            $this->db->where('POSITION_IN_UNIQUE_CONSTRAINT <>', 'NULL');
            $query = $this->db->get();
            if(!empty($query)){
                $arr = [];
                foreach ($query->result_array() as $q){
                    $fields = '';
                    $order = '';
                    $doSort = false;
                    $sql = "DESCRIBE " . $q['REFERENCED_TABLE_NAME'];
                    $query = $this->db->query($sql);
                    $res = $query->result_array();
                    // Analizes if the column in current table is a password
                    foreach ($res as $k => $r){
                        if(strpos($r['Field'], 'pass') === false ){
                            if(isset($res[$k+1])){
                                $fields .= $r['Field'] . ',';
                            }else{
                                $fields .= $r['Field'];
                            }
                        }
                        if(!$doSort){
                            if(strpos($r['Field'], 'name') !== false){
                                $order = $order .= " ORDER BY " . $r['Field'] . " ASC";
                                $doSort = true;
                            }
                        }
                    }
                    if(strcmp($q['REFERENCED_TABLE_NAME'], 'om_system') == 0){
                        $sql = "SELECT ". $fields ." FROM " . $q['REFERENCED_TABLE_NAME'] . ' WHERE system_id = ' . $this->session->userdata('system') . $order;
                    }else{
                        $sql = "SELECT ". $fields ." FROM " . $q['REFERENCED_TABLE_NAME'] . $order;
                    }
                    
                    $query = $this->db->query($sql);
                    $arr[$q['REFERENCED_COLUMN_NAME']] = $query->result_array();
                }
                return $arr;
            }else{
                return false;
            }
        }
    }

}
