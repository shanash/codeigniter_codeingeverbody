<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mongo_model extends CI_Model {
    public function __construct()
    {    	
        parent::__construct();
        $this->load->library('mongo_db');
    }

    public function getData() {
        $params = array('_uuid'=>-1);
        $this->mongo_db->order_by($params);
        $data = $this->mongo_db->get('Players');
        
        return $data;
    }

    public function get($id) {
        $list = $this->getData();
        if ($list.count <= $id) return null;

        return $list[$id];
    }
}