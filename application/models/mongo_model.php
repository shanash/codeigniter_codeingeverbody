<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic_model extends CI_Model {
    function __construct()
    {    	
        parent::__construct();
        $this->load->library('mongo_db');
    }

    function getData() {
        $params = array('_id'=>-1);
        $this->mongo_db->order_by($params);
        $data = $this->mongo_db->get('COL_28690');
        
        return $data
    }
}