<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();
      $this->load->helper('myhelper');
      $this->load->helper('form_helper');
      $this->load->model('RecibeDatos_model');
    }
    public function index()  {
      $this->load->library('menu',array('inicio','contacto','productos'));
      $dataMenu['mimenu'] = $this->menu->constructMenu();
        $this->load->view('admin/header');
        $this->load->view('admin/bienvenidos',$dataMenu);
        $this->load->view('admin/footer');
        
    }
  
}

?>