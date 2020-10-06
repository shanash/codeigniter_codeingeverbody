<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mongo_model');
        $this->load->helper('url');
    }
    public function index(){
        //$data['list'] = $this->mongo_model->getData();
        $this->_head();
        $this->load->view('main');
        $this->load->view('footer');
    }
    public function menu($id){
        $this->_head();
        $this->load->view('menu_'. $id);
        $this->load->view('footer');
    }
    public function addItem(){
        $this->_head();
        $this->load->view('footer');
    }
    private function _head(){
        $this->load->view('head');
        $this->load->view('list');
    }
}
?>