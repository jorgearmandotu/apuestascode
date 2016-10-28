<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();
      $this->load->helper('myhelper');
      $this->load->helper('form_helper');
      $this->load->model('recibeDatos_model');
    }
    public function index()  {
      $this->load->library('menu',array('inicio','contacto','productos'));
      $data['mimenu'] = $this->menu->constructMenu();
        $this->load->view('admin/header');
        $this->load->view('admin/bienvenidos',$data);
        $this->load->view('admin/footer');
        
    }
  function recibirDatos(){
    $data = array('nombre'=>$this->input->post('nombre'),
                  'email'=>$this->input->post('email')
                 ); 
    $this->recibeDatos_model->crearRegistro($data);
     $this->load->view('admin/header');
        $this->load->view('admin/bienvenidos',$data);
        $this->load->view('admin/footer');
  }
}

?>