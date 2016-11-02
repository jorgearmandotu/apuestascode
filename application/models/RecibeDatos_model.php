<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecibeDatos_model extends CI_model {
  function __construct(){
    parent::__construct();
    $this->load->database();
  }
  function crearRegistro($data) {
    $this->db->insert('asesores', array('cc'=>$data['nombre'], 'nombre'=>$data['email'],
                     'apellido'=>'user','email'=>$data['email'], 'telefono'=>'123',
                                       'administrador'=>'1', 'usuario'=>'addd',
                                       'contrasena'=>'asd', 'punto'=>'valle',
                                       'saldo'=>'0'));
  }
  function getAsesores(){
    $query = $this->db->get('asesores');
    if($query->num_rows() > 0)  return $query;
    else return false;
  }
}

?>