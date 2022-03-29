<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Morden extends CI_Model
{
	public function get_codigo()
	{
		$this->db->select_max('ID_OREPARACION', "cod");
		/* $this->db->where("nombre", "FACTURA"); */
		$consulta = $this->db->get("orden_reparacion")->row()->cod;
		return strval($consulta);
	}
	

	public function saveOrden($data)
	{
		return $this->db->insert("orden_reparacion", $data);
	}
	public function saveDetalle($data)
	{
		return $this->db->insert("detalle_orden_reparacion", $data);
	}
	public function recuperarId()
	{
		return $this->db->insert_id();
	}
	public function getNum()
	{
		$this->db->where('ID_TECNICO', $this->session->userdata("id_per"));
		$this->db->where('ESTADO_ORDEN', "1");
		$resultado = $this->db->get('orden_reparacion');
		return $resultado->num_rows();
	}
	public function getNumAten()
	{
		$this->db->where('ID_TECNICO', $this->session->userdata("id_per"));
		$this->db->where('ESTADO_ORDEN', "2");
		$resultado = $this->db->get('orden_reparacion');
		return $resultado->num_rows();
	}
	public function getNumSR()
	{
		$this->db->where('ID_TECNICO', $this->session->userdata("id_per"));
		$this->db->where('ESTADO_ORDEN', "3");
		$resultado = $this->db->get('orden_reparacion');
		return $resultado->num_rows();
	}
	public function getNumHoy($hoy)
	{
		$this->db->where('ID_TECNICO', $this->session->userdata("id_per"));
		$this->db->where('FECHA_SALIDA', $hoy);
		$resultado = $this->db->get('orden_reparacion');
		return $resultado->num_rows();
	}
	public function getPendientes()
	{
		$this->db->select('persona.*,orden_reparacion.*');
		$this->db->where('ID_TECNICO', $this->session->userdata("id_per"));
		$this->db->where('ESTADO_ORDEN', "1");
		$this->db->from('orden_reparacion');
		$this->db->join('persona', 'persona.ID_PERSONA  = orden_reparacion.ID_PERSONA');
		$resultado = $this->db->get();
		return $resultado->result();
	}

	public function getAtendidos()
	{
		$this->db->select('persona.*,orden_reparacion.*');
		$this->db->where('ID_TECNICO', $this->session->userdata("id_per"));
		$this->db->where('ESTADO_ORDEN', "2");
		$this->db->from('orden_reparacion');
		$this->db->join('persona', 'persona.ID_PERSONA  = orden_reparacion.ID_PERSONA');
		$resultado = $this->db->get();
		return $resultado->result();
	}

	public function traerdatos($id)
	{
		$this->db->select('detalle_orden_reparacion.*,orden_reparacion.*,persona.*,servicio.*');
		$this->db->from('orden_reparacion');
		$this->db->join('detalle_orden_reparacion', 'detalle_orden_reparacion.ID_OREPARACION  = orden_reparacion.ID_OREPARACION');
		$this->db->join('servicio', 'servicio.ID_SERVICIO  = detalle_orden_reparacion.ID_SERVICIO');
		$this->db->join('persona', 'persona.ID_PERSONA  = orden_reparacion.ID_PERSONA');
		$this->db->where('orden_reparacion.ID_OREPARACION', $id);
		$resultado = $this->db->get();
		return $resultado->result();
	}

	public function update($id, $data)
	{
		$this->db->where("ID_DETALLE", $id);
		return $this->db->update("detalle_orden_reparacion", $data);
	}
	
	public function getClienteOrden($valor)
	{
		$this->db->select('persona.ID_PERSONA as id_persona, persona.NOMBRES_PER as nombres, persona.APELLIDOS_PER as apellidos, persona.CORREO_PER as correo, persona.CELULAR_PER as celular, persona.DIRECCION_PER as direccion, persona.CEDULA_PER as label');
		$this->db->where('ESTADO_PER', '1');
		$this->db->where('ID_ROL', '3');
		$this->db->like('CEDULA_PER', $valor);
		$resultados = $this->db->get("persona");
		return $resultados->result_array();
	}

	public function getcant($id)
	{
		$this->db->select('detalle_orden_reparacion.*,orden_reparacion.*');
		$this->db->where('orden_reparacion.ID_OREPARACION', $id);
		$this->db->where('detalle_orden_reparacion.ESTADO', null);
		$this->db->from('orden_reparacion');
		$this->db->join('detalle_orden_reparacion', 'detalle_orden_reparacion.ID_OREPARACION  = orden_reparacion.ID_OREPARACION');
		$resultado = $this->db->get();
		return $resultado->num_rows();
	}

	public function updateOrden($id, $data)
	{
		$this->db->where("ID_OREPARACION", $id);
		return $this->db->update("orden_reparacion", $data);
	}

	public function traerinfo($id, $cod)
	{
		$this->db->select('detalle_orden_reparacion.*,orden_reparacion.*,persona.*,servicio.*');
		$this->db->where('orden_reparacion.ID_OREPARACION', $cod);
		$this->db->from('orden_reparacion');
		$this->db->join('detalle_orden_reparacion', 'detalle_orden_reparacion.ID_OREPARACION  = orden_reparacion.ID_OREPARACION');
		$this->db->join('servicio', 'servicio.ID_SERVICIO  = detalle_orden_reparacion.ID_SERVICIO');
		$this->db->where('persona.CEDULA_PER', $id);
		$this->db->join('persona', 'persona.ID_PERSONA  = orden_reparacion.ID_PERSONA');
		$resultado = $this->db->get();
		return $resultado->result();
	}

	public function getAll()
	{
		$this->db->select('persona.*,orden_reparacion.*');
		$this->db->from('orden_reparacion');
		$this->db->join('persona', 'persona.ID_PERSONA  = orden_reparacion.ID_PERSONA');
		$resultado = $this->db->get();
		return $resultado->result();
	}
	
	public function info($id)
	{
		$this->db->where('ID_OREPARACION', $id);
		$query = $this->db->get('orden_reparacion');
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}
	
	public function traerinfotec($id)
	{
		$this->db->where('ID_PERSONA', $id);
		$query = $this->db->get('persona');
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}
}
