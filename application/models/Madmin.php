<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Madmin extends CI_Model
{

	public function activeAdmin()
	{
		$id = $this->input->post('active');
		$field = array(
			'ESTADO_PER' => true,
		);
		$this->db->where('ID_PERSONA', $id);
		$this->db->update('persona', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function desactivAdmin()
	{
		$id = $this->input->post('delete');
		$field = array(
			'ESTADO_PER' => false,
		);
		$this->db->where('ID_PERSONA', $id);
		$this->db->update('persona', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}


	public function updateadmin($id, $field)
	{
		$this->db->where('id_persona', $id);
		$this->db->update('persona', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}


	public function save($data)
	{
		$this->db->insert("persona", $data);
	}

	public function savemarca($data)
	{
		$this->db->insert("marcas", $data);
	}
	public function savemenu($data)
	{
		$this->db->insert("menu", $data);
	}


	public function recuperarId()
	{
		return $this->db->insert_id();
	}

	public function getAlladmin()
	{
		$this->db->select('persona.*,rol.*');
		$this->db->from('persona');
		$this->db->join('rol', 'rol.ID_ROL=persona.ID_ROL');
		$this->db->order_by('persona.ID_PERSONA', 'Desc');
		// $this->db->where('persona.ID_ROL !=', 1);
		$this->db->where('persona.ID_ROL !=', 3);
		$query = $this->db->get();
		return $query->result();
	}

	public function getCli()
	{
		$this->db->order_by('ID_PERSONA', 'Desc');
		$this->db->where('ID_ROL', 3);
		$query = $this->db->get('persona');
		return $query->result();
	}

	public function getAll($id)
	{
		$this->db->where("ID_PERSONA", $id);
		$resultado = $this->db->get("persona");
		return $resultado->row();
	}

	/* public function getOneTec($id)
	{
		$this->db->where("ID_PERSONA", $id);
		$resultado = $this->db->get("persona");
		return $resultado->row();
	} */

	public function update($data, $id)
	{
		$this->db->where("ID_PERSONA", $id);
		return $this->db->update("persona", $data);
	}

	public function getAllTenicos()
	{
		$this->db->order_by('ID_PERSONA', 'Desc');
		$this->db->where('ID_ROL =', 4);
		$query = $this->db->get('persona');
		return $query->result();
	}

	public function getmarcas()
	{
		$this->db->order_by('id_mar', 'Desc');
		$query = $this->db->get('marcas');
		return $query->result();
	}
	public function getpermisos()
	{

		$this->db->select('menu.*, rol.*, permiso.*');
		$this->db->from('permiso');
		$this->db->join('menu', 'menu.id_menu=permiso.menu_id');
		$this->db->join('rol', 'rol.id_rol=permiso.rol_id');

		$query = $this->db->get();
		return $query->result();
	}

	public function getmenu()
	{

		$this->db->order_by('id_menu', 'Desc');
		$query = $this->db->get('menu');
		return $query->result();
	}
}
