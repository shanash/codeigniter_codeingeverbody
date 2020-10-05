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
        //$data['list'] = $this->mongo_model->getData();
        $this->load->view('list');
        $this->load->view('main');
        $this->load->view('footer');
    }
    public function menu($id){
        $this->load->view('head');
        //$data['list'] = $this->mongo_model->getData();
        $this->load->view('list');
        $this->load->view('menu_'. $id);
        $this->load->view('footer');
    }
}
?>