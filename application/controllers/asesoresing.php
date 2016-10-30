<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asesoresing extends CI_Controller {

    function __construct(){
        parent::__construct();
      $this->load->helper('myhelper');
      $this->load->helper('form_helper');
      $this->load->model('recibeDatos_model');
    }
    function result(){
        $data['asesores'] = $this->recibeDatos_model->getAsesores();
        $this->load->view('admin/header');
        $this->load->view('admin/result',$data);
        $this->load->view('admin/footer'); 
    }
    function recibirDatos(){
    $data = array('nombre'=>$this->input->post('nombre'),
                  'email'=>$this->input->post('email')
                 ); 
    $this->recibeDatos_model->crearRegistro($data);
     $this->load->view('admin/header');
        $this->load->view('admin/footer');
  }


}
?>