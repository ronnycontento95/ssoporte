<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mservicio extends CI_Model
{
	public function save($data)
	{
		$this->db->insert("servicio", $data);
	}

	public function recuperarId()
	{
		return $this->db->insert_id();
	}

	public function getAllservicio() //la palabra desc?
	{
		$this->db->order_by('ID_SERVICIO', 'Desc');
		$query = $this->db->get('servicio');
		return $query->result();
	}

	public function getAll($id)
	{
		$this->db->where("ID_SERVICIO", $id);
		$resultado = $this->db->get("servicio");
		return $resultado->row();
	}

	public function update($data, $id)
	{
		$this->db->where("ID_SERVICIO", $id);
		return $this->db->update("servicio", $data);
	}

	public function active()
	{
		$id = $this->input->post('active');
		$field = array(
			'ESTADO_SER' => true,
		);
		$this->db->where('ID_SERVICIO', $id);
		$this->db->update('servicio', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function desactiveservicio()
	{
		$id = $this->input->post('delete');
		$field = array(
			'ESTADO_SER' => false,
		);
		$this->db->where('ID_SERVICIO', $id);
		$this->db->update('servicio', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
