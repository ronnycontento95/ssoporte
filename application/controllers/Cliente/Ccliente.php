<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ccliente extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Madmin");
		$this->load->model("Mcuenta");
		$this->load->model("Mrol");
		$this->permisos = $this->backend_lib->control();
		
	}

	function index()
	{
		$data = array(
			'alladmins' => $this->Madmin->getCli(),
		);
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/aside');
		$this->load->view('backend/clientes/listcliente', $data);
		$this->load->view('backend/layouts/footer');
	}

	function getroles($idrol)
	{
		$allrol = $this->Mrol->getrol($idrol);
		echo json_encode($allrol);
	}

	function add()
	{
		$data = array(
			'allrols' => $this->Mrol->getroles(),
		);
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/aside');
		$this->load->view('backend/clientes/Cadd', $data);
		$this->load->view('backend/layouts/footer');
	}

	function edit($id)
	{
		$data = array(
			'alladmin' => $this->Madmin->getAll($id),
		);
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/aside');
		$this->load->view('backend/admin/edit', $data);
		$this->load->view('backend/layouts/footer');
	}

	public function insert()
	{
		$nombres = $this->input->post("txtnombre");
		$apellidos = $this->input->post("txtapellidos");
		$cedula = $this->input->post("txtcedula");
		$direccion = $this->input->post("txtdireccion");
		$email = $this->input->post("email");
		$celular = $this->input->post("txtcelular");
		/* var_dump($data); */

		$this->form_validation->set_rules("txtnombre", "Nombre", "required");
		$this->form_validation->set_rules("txtapellidos", "Apellidos", "required");
		$this->form_validation->set_rules("txtcedula", "Cédula", "required");
		$this->form_validation->set_rules("txtdireccion", "Dirección", "required");
		$this->form_validation->set_rules("email", "Email", "required");
		$this->form_validation->set_rules("txtcelular", "Celular", "required");
		
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'CEDULA_PER' => $cedula,
				'APELLIDOS_PER' => $apellidos,
				'NOMBRES_PER' => $nombres,
				'CORREO_PER' => $email,
				'CELULAR_PER' => $celular,
				'DIRECCION_PER' => $direccion,
				'ESTADO_PER' => true,
				'ID_ROL' => 3,
			);
			try {
				$this->db->trans_begin();
				$this->Madmin->save($data);
				$this->db->trans_commit();
				redirect(base_url() . "Cliente/Ccliente");
			} catch (PDOException $ex) {
				$this->db->trans_rollback();
			}
		} else {
			$data = array(
				'allrols' => $this->Mrol->getroles(),
			);
			$this->load->view('backend/layouts/header');
			$this->load->view('backend/layouts/aside');
			$this->load->view('backend/clientes/Cadd', $data);
			$this->load->view('backend/layouts/footer');
		}
	}

/*	public function update()
	{
		$id = $this->input->post("txtid");
		$nombres = $this->input->post("txtnombre");
		$apellidos = $this->input->post("txtapellidos");
		$cedula = $this->input->post("txtcedula");
		$direccion = $this->input->post("txtdireccion");
		$email = $this->input->post("email");
		$celular = $this->input->post("txtcelular");

		$data = array(
			'CEDULA_PER' => $cedula,
			'APELLIDOS_PER' => $apellidos,
			'NOMBRES_PER' => $nombres,
			'CORREO_PER' => $email,
			'CELULAR_PER' => $celular,
			'DIRECCION_PER' => $direccion,
			'ESTADO_PER' => true,
			'ID_ROL' => "2",
		);

		$this->Madmin->update($data, $id);
		redirect(base_url() . "Cliente/Ccliente");
	}*/
	
	public function update()
	{
		$id = $this->input->post("txtid");
		$nombres = $this->input->post("txtnombre");
		$apellidos = $this->input->post("txtapellidos");
		$cedula = $this->input->post("txtcedula");
		$direccion = $this->input->post("txtdireccion");
		$email = $this->input->post("email");
		$celular = $this->input->post("txtcelular");
		$rol = $this->input->post("rol");

		$usuario = $this->input->post("txtusuario");
		$contraseña = $this->input->post("txtcontraseña");

		$data = array(
			'CEDULA_PER' => $cedula,
			'APELLIDOS_PER' => $apellidos,
			'NOMBRES_PER' => $nombres,
			'CORREO_PER' => $email,
			'CELULAR_PER' => $celular,
			'DIRECCION_PER' => $direccion,
			'ESTADO_PER' => true,
			'ID_ROL' => $rol,
		);

		try {
			if ($contraseña != NULL) {
				$this->db->trans_begin();
				$this->Madmin->update($data, $id);

				$dataCuenta = array(
					'USUARIO' => $usuario,
					'CONTRASEÑA' => sha1($contraseña),
					'ESTADO' => true,
				);
				if ($this->Mcuenta->update($dataCuenta, $id)) {
					$this->db->trans_commit();
					redirect(base_url() . "Cliente/Ccliente/");
				} else {
					$this->db->trans_rollback();
					redirect(base_url() . "Cliente/Ccliente/edit/$id");
				}
			} else {
				$this->db->trans_begin();
				$this->Madmin->update($data, $id);
				$this->db->trans_commit();
				redirect(base_url() . "Cliente/Ccliente/");
			}
		} catch (PDOException $ex) {
			$this->db->trans_rollback();
		}
	}
	
	public function desactivecli()
	{
		$result = $this->Madmin->desactivAdmin();
		if ($result) {
			$response['status'] = 'success';
			$response['message'] = 'Cliente desactivado correctamente...';
		}
		echo json_encode($response);
	}
	public function activecli()
	{
		$result = $this->Madmin->activeAdmin();
		if ($result) {
			$response['status'] = 'success';
			$response['message'] = 'Cliente activado correctamente...';
		}
		echo json_encode($response);
	}
}

