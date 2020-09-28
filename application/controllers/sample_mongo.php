<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sample_mongo extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('/mongo_model');
        $this->load->helper('url');
        log_message('debug', 'topic 초기화');
    }

    public function index()
    {
        $data['list'] = $this->mongo_model->getData();
        $this->load->view('/mongo_view'.$data);
    }
}