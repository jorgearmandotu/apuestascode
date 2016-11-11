<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asesoresing extends CI_Controller {

    function __construct(){
        parent::__construct();
      $this->load->helper('myhelper');
      $this->load->helper('form_helper');
      $this->load->model('RecibeDatos_model');
    }
    function index(){
        $data['segmento'] = $this->uri->segment(5);
        $this->load->view('admin/header');
        if(!$data['segmento']){
            $data['asesores'] = $this->RecibeDatos_model->getAsesores(); 
        }else{
             $data['asesores'] = $this->RecibeDatos_model->getAsesor($data['segmento']);
        }
        $this->load->view('admin/result',$data);
        $this->load->view('admin/footer'); 
    }
    function recibirDatos(){
    $data = array('nombre'=>$this->input->post('nombre'),
                  'email'=>$this->input->post('email')
                 ); 
    $this->RecibeDatos_model->crearRegistro($data);
     $this->load->view('admin/header');
        $this->load->view('admin/footer');
  }


}
?>