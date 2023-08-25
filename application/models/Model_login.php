<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
    private $table = 'om_users';
    
    //Constructor del modelo
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getByUsernamePassword($u, $p) {
        $sql = 'SELECT om_users.user_id,user_name,user_username,user_email,user_group_id,om_system.system_id,system_name,system_abbreviation,system_folder FROM om_users,om_user_type,om_system WHERE om_users.user_type_id = om_user_type.user_type_id AND om_users.system_id = om_system.system_id AND BINARY user_username = ? AND user_password = ?';
        $query = $this->db->query($sql, array($u, $p));
        $result = $query->result_array();
        unset($result[0]['user_password']);
        unset($result[0]['user_type_id']);
        return $result;
    }
    
}
