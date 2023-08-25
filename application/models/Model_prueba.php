<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_prueba extends CI_Model {

    var $table = 'om_countries';
    var $order_column = 'country_name';
    var $table_id = 'country_id';
    var $order = 'ASC';
    
    function __construct() {
        parent::__construct();
    }

    function get_all() {
        $this->db->order_by($this->order_column, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_one($name) {
        $this->db->where($this->order_column, $name);
        return $this->db->get($this->table)->row();
    }

    function insert($data) {
        $this->db->insert('om_cities', $data);
        return $this->db->insert_id();
    }

    function update($id, $data) {
        $this->db->where($this->table_id, $id);
        $this->db->update($this->table, $data);
    }

    function delete($id) {
        $this->db->where($this->order_column, $id);
        $this->db->delete($this->table);
    }
    
    public function get_fk(){
        // Get foreign keys for current table ($this->tname)
        if(isset($this->tname) && !empty($this->tname)){
            $this->db->select('*');
            $this->db->from('INFORMATION_SCHEMA.KEY_COLUMN_USAGE');
            $this->db->where('TABLE_SCHEMA', $this->db->database);
            $this->db->where('TABLE_NAME', $this->tname);
            $this->db->where('POSITION_IN_UNIQUE_CONSTRAINT <>', 'NULL');
            $query = $this->db->get();
            if(!empty($query)){
                $arr = [];
                foreach ($query->result_array() as $q){
                    $fields = '';
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
                    }
                    $sql = "SELECT ". $fields ." FROM " . $q['REFERENCED_TABLE_NAME'];
                    $query = $this->db->query($sql);
                    $arr[$q['REFERENCED_COLUMN_NAME']] = $query->result_array();
                }
                return $arr;
            }else{
                return false;
            }
        }
    }
    
    public function describe(){
        $sql = "DESCRIBE " . $this->table;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
