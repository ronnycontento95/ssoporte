<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rordenes extends CI_Controller
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
		$this->load->view('backend/Reportes/Rordenes', $data);
		$this->load->view('backend/layouts/footer');
	}
}
