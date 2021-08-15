<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Modelo extends CI_Model {




public function sendComent($data)
{
 

    $this->correo   = $data['correo']; 
    $this->nombre  = $data['nombre'];
    $this->celular   = $data['celular']; 
    $this->distrito   = $data['distrito']; 
    $this->direccion  = $data['direccion'];
    $this->comentario   = $data['comentario']; 
    
    $this->db->insert('usuarios', $this);
}



}