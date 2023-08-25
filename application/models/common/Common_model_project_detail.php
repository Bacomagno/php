<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Used to become able to use the Model_common Class
require APPPATH . 'models/Model_common.php';

class Common_model_project_detail extends Model_common {

    function __construct() {
        $subsys = $_SESSION['path'];
        $subsys = explode('/', $subsys);
        $subsys = $subsys[1];
        $this->view = 'view_' . $subsys . '_project_detail';
        $this->order_column = 'task_name';
        $this->table_id = 'project_detail_id';
        $this->order = 'asc';
        $this->table = 'om_' . $subsys . '_project_detail';
        parent::__construct();
    }
    
}
