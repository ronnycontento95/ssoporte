<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cservicio extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mservicio");
		$this->load->model("Mcuenta");
		$this->load->model("Mrol");
		$this->load->model("Morden");
		$this->load->model("Madmin");
		$this->permisos = $this->backend_lib->control();

	}

	function index()
	{
		$data = array(
			'allservicios' => $this->Mservicio->getAllservicio(),
		);
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/aside');
		$this->load->view('backend/servicio/listServicio', $data);
		$this->load->view('backend/layouts/footer');
	}

	function getroles($idrol)
	{
		$allrol = $this->Mrol->getrol($idrol);
		echo json_encode($allrol);
	}

	function add()
	{
		$ultimo_fact = $this->Morden->get_codigo();
		$data = array(
			'alltecnicos' => $this->Madmin->getAllTenicos(),

		);
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/aside');
		$this->load->view('backend/servicio/Sadd', $data);
		$this->load->view('backend/layouts/footer');
	}
	public function insert()
	{
		$tipo = $this->input->post("txttipo");
		$descripcion = $this->input->post("txtdescripcion");
		$costo = $this->input->post("txtcosto");

		$this->form_validation->set_rules("txttipo", "Tipo", "required|is_unique[servicio.TIPO_SERVICIO]");
		$this->form_validation->set_rules("txtdescripcion", "Descripción", "required");
		$this->form_validation->set_rules("txtcosto", "Costo", "required");
		/* var_dump($data); */

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'TIPO_SERVICIO' => $tipo,
				'DESCRIPCION' => $descripcion,
				'COSTO' => $costo,
				'ESTADO_SER' => true,
			);
			try {
				$this->db->trans_begin();
				$this->Mservicio->save($data);
				$this->db->trans_commit();
				redirect(base_url() . "Servicio/Cservicio");
			} catch (PDOException $ex) {
				$this->db->trans_rollback();
			}
		} else {
			$ultimo_fact = $this->Morden->get_codigo();
			$data = array(
				'alltecnicos' => $this->Madmin->getAllTenicos(),

			);
			$this->load->view('backend/layouts/header');
			$this->load->view('backend/layouts/aside');
			$this->load->view('backend/servicio/Sadd', $data);
			$this->load->view('backend/layouts/footer');
		}
	}
	public function update()
	{
		$id = $this->input->post("txtid");
		$tipo = $this->input->post("txttipo");
		$descripcion = $this->input->post("txtdescripcion");
		$costo = $this->input->post("txtcosto");


		$data = array(
			'TIPO_SERVICIO' => $tipo,
			'DESCRIPCION' => $descripcion,
			'COSTO' => $costo,
			'ESTADO_SER' => true,
		);

		$this->Mservicio->update($data, $id);
		redirect(base_url() . "Servicio/Cservicio");
	}
	function edit($id)
	{
		$data = array(
			'allservicio' => $this->Mservicio->getAll($id),
		);
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/aside');
		$this->load->view('backend/servicio/edit', $data);
		$this->load->view('backend/layouts/footer');
	}
	public function desactiveservicio()
	{
		$result = $this->Mservicio->desactiveservicio();
		if ($result) {
			$response['status'] = 'success';
			$response['message'] = 'Servicio desactivado correctamente...';
		}
		echo json_encode($response);
	}
	public function activeservicio()
	{
		$result = $this->Mservicio->active();
		if ($result) {
			$response['status'] = 'success';
			$response['message'] = 'Servicio activado correctamente...';
		}
		echo json_encode($response);
	}
}
