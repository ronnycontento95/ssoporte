<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backend_model extends CI_Model 
{
  //ADMINISTRACION DIRECTO CON EL CODIGO, CONTACTO MAS DIRECTO O ADMINISTRACION CON LA PAGINA
  public function getId($link)
  {
    $this->db->like("link", $link);
    $resultado = $this->db->get("menu");
    return $resultado->row();
  }
  
  public function getPermisos($menu, $rol){
    $this->db->where("menu_id",$menu);
    $this->db->where("rol_id",$rol);
    $resultado = $this->db->get("permiso");
    return $resultado->row();
    
  }
}
