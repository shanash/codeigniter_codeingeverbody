<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mongo_model');
        $this->load->helper('url');
    }
    public function index(){
        $this->load->view('head');
        $data['list'] = $this->mongo_model->getData();
        $this->load->view('topic_list', $data);
        $this->load->view('main');
        $this->load->view('footer');
    }
    public function get($id){
        $this->load->view('head');
        $data['list'] = $this->mongo_model->getData();
        $this->load->view('topic_list', $data);
        $topic = $this->mongo_model->get($id);
        $this->load->view('get', $topic);
        $this->load->view('footer');
    }
}
?>