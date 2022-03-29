<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mmarca extends CI_Controller
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
			'allmarcas' => $this->Madmin->getmarcas(),
		);
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/aside');
		$this->load->view('backend/Marcas/list_mar', $data);
		$this->load->view('backend/layouts/footer');
	}

	function add()
	{
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/aside');
		$this->load->view('backend/Marcas/Madd');
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
		$nom_mar = $this->input->post("txtmar");
		$des_mar = $this->input->post("txtdes");

		$this->form_validation->set_rules("txtmar", "Nombre", "required");
		$this->form_validation->set_rules("txtdes", "Descripcion", "required");

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'nom_mar' => $nom_mar,
				'des_mar' => $des_mar,
			);
			try {
				$this->db->trans_begin();
				$this->Madmin->savemarca($data);
				$this->db->trans_commit();
				redirect(base_url() . "Marcas/Mmarca");
			} catch (PDOException $ex) {
				$this->db->trans_rollback();
			}
		} else {
			$this->load->view('backend/layouts/header');
			$this->load->view('backend/layouts/aside');
			$this->load->view('backend/Marcas/Madd');
			$this->load->view('backend/layouts/footer');
		}
	}

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

}
