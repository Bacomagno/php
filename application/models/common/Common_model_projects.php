<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Used to become able to use the Model_common Class
require APPPATH . 'models/Model_common.php';

class Common_model_projects extends Model_common {

    function __construct() {
        parent::__construct();
    }

    function insert_details($project = '', $phase = '', $process = ''){
        if (!empty($project) && !empty($process)) {
            
            $subsys = $_SESSION['path'];
            $subsys = explode('/', $subsys);
            $subsys = $subsys[1];
            $sql = "INSERT INTO om_" . $subsys ."_project_detail (project_id, user_id, task_name, task_ordinal, task_next, task_form, status_id, project_detail_creation, project_detail_deadline) SELECT " . $project . " AS project_id,user_id,task_name,task_ordinal,task_next,task_form,1 AS status_id,CURRENT_DATE as project_detail_creation, DATE_ADD((SELECT project_creation_date FROM om_" . $subsys . "_projects WHERE project_id = " . $project . "), INTERVAL deadline_type_value DAY) AS project_detail_deadline FROM `om_tasks` WHERE process_id = " . $process . " AND phase_id = " . $phase . " ORDER BY task_ordinal ASC LIMIT 1";
            
            // All
            //$sql = "INSERT INTO om_" . $subsys ."_project_detail (project_id, user_id, task_name, task_ordinal, task_next, task_form, status_id, project_detail_creation) SELECT " . $project . " AS project_id,user_id,task_name,task_ordinal,task_next,task_form,(SELECT status_id FROM om_status WHERE system_id = 1 AND status_name LIKE 'INACTIVO') AS status_id,CURRENT_DATE AS project_detail_creation FROM om_tasks,om_phases,om_processes WHERE om_tasks.phase_id = om_phases.phase_id AND om_tasks.process_id = om_processes.process_id AND om_tasks.phase_id = " . $phase . " AND om_tasks.process_id = " . $process . " ORDER BY om_tasks.phase_id,om_tasks.task_ordinal ASC";
            // One
            
            $binds = array($process);
            $query = $this->db->query($sql);
            return $query;
        }
    }
    
    function update_process_sequence($data = '', $id = ''){
        $this->db->set($data);
        $this->db->where('process_id', $id);
        $this->db->update('om_processes');
    }
    
    function update_system_sequence($data = '', $id = ''){
        $this->db->set($data);
        $this->db->where('system_id', $id);
        $this->db->update('om_system');
    }
    
    function get_all() {
        $this->db->where('system_name', $this->session->userdata('sysname'));
        $this->db->order_by($this->order_column, $this->order);
        return $this->db->get($this->view)->result();
    }
    
    // Custom function for this controller
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
                    // Get the information related only with the current system id
                    if(strcmp($q['REFERENCED_TABLE_NAME'], 'om_processes') == 0 || strcmp($q['REFERENCED_TABLE_NAME'], 'om_system') == 0){
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
    
    function activate_first_task($project_id){
        if (isset($project_id) && !empty($project_id)) {
            
            // Get active status id
            $sql = "SELECT status_id FROM om_status WHERE system_id = 1 AND status_name LIKE 'ACTIVO'";
            $query = $this->db->query($sql);
            $status = $query->result_array();
            $status = $status[0];
            
            $subsys = $_SESSION['path'];
            $subsys = explode('/', $subsys);
            $subsys = $subsys[1];
            
            // Get project detail id
            $sql = "SELECT project_detail_id FROM om_" . $subsys . "_project_detail WHERE project_id = " . $project_id . " AND task_ordinal = (SELECT MIN(task_ordinal) FROM (SELECT * FROM `om_" . $subsys ."_project_detail` WHERE project_id = " . $project_id . ") as t1)";
            $query = $this->db->query($sql);
            $detail = $query->result_array();
            $detail = $detail[0];
            
            // Update first task
            $sql = "UPDATE om_" . $subsys . "_project_detail SET status_id = " . $status['status_id'] . " WHERE project_detail_id = " . $detail['project_detail_id'];
            $result = $this->db->query($sql);
            
            return $result;       
        }
    }
}
