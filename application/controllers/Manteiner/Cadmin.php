<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cadmin extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model("Madmin");
		$this->load->model("Mcuenta");
		$this->load->model("Mrol");
		$this->load->model("Morden");
		$this->permisos = $this->backend_lib->control();

	}
	function inicio()
	{
		$fechaActual = date('Y-m-d');
		$data = array(
			'numeroPen' => $this->Morden->getNum(),
			'numeroAten' => $this->Morden->getNumAten(),
			'numeroSR' => $this->Morden->getNumSR(),
			'numeroHoy' => $this->Morden->getNumHoy($fechaActual),
			'pendientes' => $this->Morden->getAll(),
			'fecha' => $fechaActual,
		);
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/aside');
		$this->load->view('backend/prueba', $data);
		$this->load->view('backend/layouts/footer');
	}

	function index()
	{
		$data = array(
			'allrols' => $this->Mrol->getroles(),
			'alladmins' => $this->Madmin->getAlladmin(),
		);
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/aside');
		$this->load->view('backend/admin/list', $data);
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
		$this->load->view('backend/admin/add', $data);
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

	function editCli($id)
	{
		$data = array(
			'alladmin' => $this->Madmin->getAll($id),
		);
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/aside');
		$this->load->view('backend/clientes/editCli', $data);
		$this->load->view('backend/layouts/footer');
	}

	public function insert()
	{
		$info = $this->input->post();

		$data = array(
			'CEDULA_PER' => $info['cedula'],
			'APELLIDOS_PER' => $info['apellidos'],
			'NOMBRES_PER' => $info['nombres'],
			'CORREO_PER' => $info['email'],
			'CELULAR_PER' => $info['celular'],
			'DIRECCION_PER' => $info['direccion'],
			'ESTADO_PER' => true,
			'ID_ROL' => $info['rol'],
		);

		// var_dump($data); 

		try {
			$this->db->trans_begin();
			$this->Madmin->save($data);
			$idPersona = $this->Madmin->recuperarId();

			$dataCuenta = array(
				'USUARIO' => $info['email'],
				'CONTRASEÑA' => sha1($info['psw']),
				'ESTADO' => true,
				'ID_PERSONA' => $idPersona,
			);
			if ($this->Mcuenta->save($dataCuenta)) {
				$this->db->trans_commit();
				/* redirect(base_url() . "Manteiner/Cadmin"); */
				echo json_encode(0);
			} else {
				$this->db->trans_rollback();
				/* redirect(base_url() . "Manteiner/Cadmin/add"); */
				echo json_encode(1);
			}
		} catch (PDOException $ex) {
			$this->db->trans_rollback();
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
					redirect(base_url() . "Manteiner/Cadmin/");
				} else {
					$this->db->trans_rollback();
					redirect(base_url() . "Manteiner/Cadmin/edit/$id");
				}
			} else {
				$this->db->trans_begin();
				$this->Madmin->update($data, $id);
				$this->db->trans_commit();
				redirect(base_url() . "Manteiner/Cadmin/");
			}
		} catch (PDOException $ex) {
			$this->db->trans_rollback();
		}
	}

	public function desactiveadmin()
	{
		$result = $this->Madmin->desactivAdmin();
		if ($result) {
			$response['status'] = 'success';
			$response['message'] = 'Usuario desactivado correctamente...';
		}
		echo json_encode($response);
	}
	public function activeadmin()
	{
		$result = $this->Madmin->activeAdmin();
		if ($result) {
			$response['status'] = 'success';
			$response['message'] = 'Administrador activado correctamente...';
		}
		echo json_encode($response);
	}


	
}
