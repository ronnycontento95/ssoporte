<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mcuenta extends CI_Model
{


  public function save($dataCueta)
  {
    return $this->db->insert("cuenta", $dataCueta);
  }

  public function login($username, $password)
  {
    $this->db->select('cuenta.*,persona.*,rol.*');
    $this->db->from('cuenta');
    $this->db->join('persona', 'persona.ID_PERSONA=cuenta.ID_PERSONA');
    $this->db->join('rol', 'rol.ID_ROL=persona.ID_ROL');
    /* $this->db->where('cuenta.estado_cuenta', true); */ /* AUMENTAR EN BASE DE DATOS  TABLA CUENTA EL ATRIBUTO ESTADO CUENTA */
    $this->db->where('cuenta.USUARIO', $username);
    $this->db->where('cuenta.CONTRASEÑA', $password);
    $query = $this->db->get();
    if ($query->num_rows() == 1) {
      return $query->row();
    } else {
      return false;
    }
  }

  public function update($data, $id)
  {
    $this->db->where("ID_PERSONA", $id);
    return $this->db->update("cuenta", $data);
  }

  public function getCuenta($email)
  {
    $this->db->where("USUARIO", $email);
    $resultado = $this->db->get("cuenta");
    return $resultado->row();
  }

  public function update_pswd($clave, $id)
  {
    $this->db->set('CONTRASEÑA', $clave);
    $this->db->where('ID_CUENTA', $id);
    $this->db->update('cuenta');
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }
  
}
