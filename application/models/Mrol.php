<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mrol extends CI_Model
{
	public function getroles()
	{
		// $this->db->where('ABREVIATURA_ROL !=', 'SA');
		$this->db->where('ABREVIATURA_ROL !=', 'CLI');
		$this->db->order_by('TIPO_ROL', 'asc');
		$query = $this->db->get('rol');
		return $query->result();
	}

	public function getrol($idrol)
	{
		if ($idrol == "0") {
			$this->db->order_by('ID_PERSONA', 'Desc');
			$this->db->where('ID_ROL !=', 1);
			$query = $this->db->get('persona');
			return $query->result();			
		} else {
			$this->db->order_by('ID_PERSONA', 'desc');
			$this->db->where('ID_ROL', $idrol);
			$query = $this->db->get('persona');
			return $query->result();
		}
	}
	public function get_all_rol()
	{
		$this->db->order_by('TIPO_ROL', 'asc');
		$query = $this->db->get('rol');
		return $query->result();
	}

}
