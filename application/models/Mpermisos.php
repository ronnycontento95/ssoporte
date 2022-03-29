<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mpermisos extends CI_Model
{

  public function save($data)
  {
    return $this->db->insert("permiso", $data);
  }
  public function getPermisos()
  {
    $this->db->select('p.*, m.NOMBRE_MENU as menu, r.NOMBRE_ROL as rol');
    $this->db->from('permiso p');
    $this->db->join('rol r', 'p.ROL_ID=r.ID_ROL');
    $this->db->join('menu m', 'p.MENU_ID=m.ID_MENU');
    $query = $this->db->get();
    return $query->result();
  }
  public function getMenus()
  {
    // $this->db->order_by('NOMBRE_ROL', 'asc');
    $query = $this->db->get('menu');
    return $query->result();
  }
  public function getPermiso($id)
  {

    $this->db->where('ID_PERMISO', $id);
    $query = $this->db->get('permiso');
    return $query->row();
  }
  public function update($id, $data)
  {
    $this->db->where('ID_PERMISO', $id);
    return $this->db->update('permiso', $data);
  }
  public function delete($id){
    $this->db->where('ID_PERMISO',$id);
    $this->db->delete('permiso');
  }
}
