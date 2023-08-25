<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Used to become able to use the Model_common Class
require APPPATH . 'models/Model_common.php';

class Common_model_agent_contacts extends Model_common {

    function __construct() {
        
        
        parent::__construct();
    }
    
    function get_by_agent($cid) {
        $this->db->where('agent_id', $cid);
        $this->db->order_by($this->order_column, $this->order);
        return $this->db->get($this->view)->result();
    }
    
}
