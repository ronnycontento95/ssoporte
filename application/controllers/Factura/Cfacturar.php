<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cfacturar extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Madmin");
		$this->load->model("Mcuenta");
		$this->load->model("Mrol");
		$this->load->model("Morden");
		$this->load->model("Mservicio");
		date_default_timezone_set('America/Guayaquil');
    }
    function add()
	{
		
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/aside');
		$this->load->view('backend/facturar/facturaro.php');
		$this->load->view('backend/layouts/footer');
	}
}