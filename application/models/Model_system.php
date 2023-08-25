<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Used to become able to use the Model_common Class
require APPPATH . 'models/Model_common.php';

class Model_system extends Model_common {

    function __construct() {
        
        $this->view = 'view_system';
        $this->order_column = 'system_name';
        $this->table_id = 'system_id';
        $this->order = 'asc';
        $this->table = 'om_system';
        parent::__construct();
    }
    
    function get_one($id) {
        $this->db->where($this->table_id, $id);
        return $this->db->get($this->table)->row();
    }

}
