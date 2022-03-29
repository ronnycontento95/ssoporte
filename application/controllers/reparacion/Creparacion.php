<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Creparacion extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Madmin");
		$this->load->model("Mcuenta");
		$this->load->model("Mrol");
		$this->load->model("Morden");
		$this->load->model("Mservicio");
	}

	function index()
	{
		$data = array(
			'allrols' => $this->Mrol->getroles(),
			'alltecnicos' => $this->Madmin->getAllTenicos(),
		);
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/aside');
		$this->load->view('backend/admin/list', $data);
		$this->load->view('backend/layouts/footer');
	}

	function add()
	{
		$ultimo_fact = $this->Morden->get_codigo();//incrementa el numero de orden
		$num_venta = $this->num_fact($ultimo_fact);
		$data = array(
			'alltecnicos' => $this->Madmin->getAllTenicos(),
			'venta' => $num_venta,
			'allservicios' => $this->Mservicio->getAllservicio(),
		);
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/aside');
		$this->load->view('backend/reparacion/Radd', $data);
		$this->load->view('backend/layouts/footer');
	}

	function editar($id)
	{		
		$numero_orden = $this->num_orden($id);//Mantiene el numero de orden
		$data = array(
			'orden' => $numero_orden,
			'datoTablaOrden' => $this ->Morden ->traerdatos($id),
			'cont' => $this ->Morden ->getcant($id),
		);
		$this->load->view('backend/layouts/newheader');
		$this->load->view('backend/layouts/newaside');
		$this->load->view('backend/reparacion/Radd', $data);
		$this->load->view('backend/layouts/footer');
	}

	function imprimir($id)
	{		
		$impresion = $this->Morden->traerdatos($id);
		$reparacion = $this->Morden->info($id);
		$valor=$reparacion->ID_TECNICO;
		$tecnico = $this->Morden->traerinfotec($valor);
		$datos = array(
			'imprimir' => $impresion,
			'tecnico' => $tecnico,
		);
		$this->load->view('backend/imp', $datos);
	}

	function imprimir2()
	{		
		$impresion = $this->Morden->traerdatos(5);
		$reparacion = $this->Morden->info(5);
		$valor=$reparacion->ID_TECNICO;
		$tecnico = $this->Morden->traerinfotec($valor);
		$datos = array(
			'imprimir' => $impresion,
			'tecnico' => $tecnico,
		);
		$this->load->view('backend/pdf', $datos);
	}

	function presentar($cod)
	{
		$id = $this->input->post('id');
		$val_imp = $this->Morden->traerinfo($id, $cod);
		$reparacion = $this->Morden->info($cod);
		if ($reparacion == NULL) {
			$tecnico = 0;
		} else {
			$valor = $reparacion->ID_TECNICO;
			$tecnico = $this->Morden->traerinfotec($valor);
		}	
		$datos = array(
			'imprimir' => $val_imp,
			'tecnico' => $tecnico,
		);

		if ($val_imp == NULL) {
			echo json_encode(1);
		} else {
			$this->load->view('backend/imp', $datos);
		}
	}

	public function num_fact($numero)
	{
		if ($numero >= 99999 && $numero < 999999) {
			return $numero + 1;
		}
		if ($numero >= 9999 && $numero < 99999) {
			return '0' . ($numero + 1);
		}
		if ($numero >= 999 && $numero < 9999) {
			return '00' . ($numero + 1);
		}
		if ($numero >= 99 && $numero < 999) {
			return '000' . ($numero + 1);
		}
		if ($numero >= 9 && $numero < 99) {
			return '0000' . ($numero + 1);
		}
		if ($numero >= 1 && $numero < 9) {
			return '00000' . ($numero + 1);
		}
		if ($numero == null) {
			return '0000001';
		}
	}

	public function num_orden($numero)
	{
		if ($numero >= 99999 && $numero < 999999) {
			return $numero;
		}
		if ($numero >= 9999 && $numero < 99999) {
			return '0' . ($numero);
		}
		if ($numero >= 999 && $numero < 9999) {
			return '00' . ($numero);
		}
		if ($numero >= 99 && $numero < 999) {
			return '000' . ($numero);
		}
		if ($numero >= 9 && $numero < 99) {
			return '0000' . ($numero);
		}
		if ($numero >= 1 && $numero < 9) {
			return '00000' . ($numero);
		}
		if ($numero == null) {
			return '0000001';
		}
	}


	public function getClientes()
	{
		$valor = $this->input->post('valor');
		$pacientes = $this->Morden->getClienteOrden($valor);
		echo json_encode($pacientes);
	}

	public function insert()
	{
		$reparacion_id = $this->input->post("idcod");
		$idtecnico = $this->input->post("idtecnico");
		$fingreso = $this->input->post("fingreso");
		$fsalida = $this->input->post("fsalida");
		$idPer = $this->input->post("idPer");

		$marca = $this->input->post("marca");
		$modelo = $this->input->post("modelo");
		$serie = $this->input->post("serie");
		$daño = $this->input->post("daño");
		$observaciones = $this->input->post("obs");
		$servicio = $this->input->post("sel");


		$data = array(
			'ID_OREPARACION' => $reparacion_id,
			'ID_TECNICO' => $idtecnico,
			'FECHA_INGRESO' => $fingreso,
			'FECHA_SALIDA' => $fsalida,
			'ID_PERSONA' => $idPer,
		);
		/* var_dump($data); */
		try {
			$this->db->trans_begin();
			$this->Morden->saveOrden($data);

			for ($i = 0; $i < count($marca); $i++) {
				$dataOrden = array(
					'ID_OREPARACION' => $reparacion_id,
					'MARCA' => $marca[$i],
					'MODELO' => $modelo[$i],
					'SERIE' => $serie[$i],
					'DAÑO_REPORTADO' => $daño[$i],
					'OBSERVACIONES' => $observaciones[$i],
					'ID_SERVICIO' => $servicio[$i],
				);
				$this->Morden->saveDetalle($dataOrden);
			}
			$this->db->trans_commit();
		} catch (PDOException $ex) {
			$this->db->trans_rollback();
		}

		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/aside');
		$this->load->view('backend/prueba');
		$this->load->view('backend/layouts/footer');
	}
}
