<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Corden extends CI_Controller
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

	function mostrar()
	{
		$fechaActual = date('Y-m-d');
		$data = array(
			'numeroPen' => $this->Morden->getNum(),
			'numeroAten' => $this->Morden->getNumAten(),
			'numeroSR' => $this->Morden->getNumSR(),
			'numeroHoy' => $this->Morden->getNumHoy($fechaActual),
			'pendientes' => $this->Morden->getPendientes(),
			'fecha' => $fechaActual,
		);
		$this->load->view('backend/layouts/newheader');
		$this->load->view('backend/layouts/newaside');
		$this->load->view('backend/dashboard', $data);
		$this->load->view('backend/layouts/footer');
	}

	function atendidos()
	{
		$data = array(
			'atendidos' => $this->Morden->getAtendidos(),

		);
		$this->load->view('backend/layouts/newheader');
		$this->load->view('backend/layouts/newaside');
		$this->load->view('backend/atendidos', $data);
		$this->load->view('backend/layouts/footer');
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
		$fechaActual = date('Y-m-d');
		$ultimo_fact = $this->Morden->get_codigo();
		$num_venta = $this->num_fact($ultimo_fact);
		$data = array(
			'hoy' => $fechaActual,
			'venta' => $num_venta,
			'alltecnicos' => $this->Madmin->getAllTenicos(),
			'allmarcas' => $this->Madmin->getmarcas(),
			'allservicios' => $this->Mservicio->getAllservicio(),
		);
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/aside');
		$this->load->view('backend/orden_reparacion/Oadd', $data);
		$this->load->view('backend/layouts/footer');
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
		$cedula = $this->input->post("txtcedula");
		$nombre = $this->input->post("txtnombre");
		$marca = $this->input->post("marca");
		$modelo = $this->input->post("modelo");
		$serie = $this->input->post("serie");
		$daño = $this->input->post("daño");
		$observaciones = $this->input->post("obs");
		$servicio = $this->input->post("sel");

		$idTec = $this->Morden->traerinfotec($idtecnico);
		//var_dump($idTec->CORREO_PER);
		$hoy = date("dmyhis");
		$folder = "folder/";
		$name = "FDpdf_" . $hoy . ".pdf";

		$this->form_validation->set_rules("txtcedula", "Cédula", "required");

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'ID_OREPARACION' => $reparacion_id,
				'ID_TECNICO' => $idtecnico,
				'FECHA_INGRESO' => $fingreso,
				'FECHA_SALIDA' => $fsalida,
				'ID_PERSONA' => $idPer,
				'ESTADO_ORDEN' => 1,
				'PDF' => $name,
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

				$val_imp = $this->Morden->traerinfo($cedula, $reparacion_id);

				$datos = array(
					'imprimir' => $val_imp,
					'tecnico' => $idTec,
				);

				$this->load->view('backend/pdf', $datos);
				$html = $this->output->get_output();
				$this->load->library('pdf');
				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'vertical');
				$this->dompdf->render();
				$outpu = $this->dompdf->output();
				$file_to_save = $folder . $name;
				if (!file_exists($folder)) {
					if (mkdir($folder, 0777, true)) {
						file_put_contents($file_to_save, $outpu);
					}
				} else {
					file_put_contents($file_to_save, $outpu);
				}


				$config['protocol']    = 'smtp';
				$config['smtp_host']    = 'ssl://smtp.googlemail.com';
				$config['smtp_port']    = '465';
				$config['smtp_timeout'] = '60';
				$config['smtp_user']    = 'fadasystems.info@gmail.com';    //Important
				$config['smtp_pass']    = 'fada.2021';  //Important
				$config['charset']    = 'utf-8';
				$config['newline']    = "\r\n";
				$config['mailtype'] = 'html'; // or html
				$config['validation'] = TRUE; // bool whether to validate email or not 
				$this->email->initialize($config);
				//$this->email->set_mailtype("html");
				$this->email->from('fadasystems.info@gmail.com');
				$this->email->to($idTec->CORREO_PER);
				$this->email->subject('Gracias por preferirnos');
				$this->email->attach($file_to_save);
				$this->email->message(
					'<b>Apreciado ' . $nombre . '</b>
				<p>¡Gracias por su preferencia! Estamos contentos de que haya encontrado lo que estaba buscando. Nuestro objetivo es que siempre esté satisfecho, así que avísenos si su nivel de satisfacción. Esperamos volver a verle de nuevo. ¡Que tengas un gran día!</p>
				<br><p>Atentamente:</p>
				
				<b><hr><br>Archivo adjunto</b><br>'
				);
				$this->email->send();
				$this->session->set_flashdata('msg', "Mail has been sent successfully");
				$this->session->set_flashdata('msg_class', 'alert-success');




				/* $to =  $this->input->post('clienteemail');  // User email pass here
				$subject = 'Bienvenido a FADASystems';
				$from = 'fadasystems.info@gmail.com';             // Pass here your mail id
				$emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#000000;padding-left:3%"><img src="https://snipboard.io/HrRqpQ.jpg" width="500px" vspace=10 /></td></tr>';
				$emailContent .= '<tr><td style="height:20px"></td></tr>';
				$emailContent .= $this->input->post('clientemessage');  //   Post message available here
				$emailContent .= '<tr><td style="height:20px"></td></tr>';
				$emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='https://fadasystem.com/' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.fadasystem.com</a></p></td></tr></table></body></html>";
				$config['protocol']    = 'smtp';
				$config['smtp_host']    = 'ssl://smtp.googlemail.com';
				$config['smtp_port']    = '465';
				$config['smtp_timeout'] = '60';
				$config['smtp_user']    = 'fadasystems.info@gmail.com';    //Important
				$config['smtp_pass']    = 'fada.2021';  //Important
				$config['charset']    = 'utf-8';
				$config['newline']    = "\r\n";
				$config['mailtype'] = 'html'; // or html
				$config['validation'] = TRUE; // bool whether to validate email or not 
				$this->email->initialize($config);
				$this->email->set_mailtype("html");
				$this->email->from($from);
				$this->email->to($to);
				$this->email->subject($subject);
				$this->email->message($emailContent);
				$this->email->send();
				$this->session->set_flashdata('msg', "Mail has been sent successfully");
				$this->session->set_flashdata('msg_class', 'alert-success'); */

				$this->db->trans_commit();
				$this->session->set_flashdata("ingresologin", "La orden de reparacion se guardo correctamente..");
				redirect(base_url() . "Manteiner/Cadmin/inicio");
			} catch (PDOException $ex) {
				$this->db->trans_rollback();
			}
		} else {
			$fechaActual = date('Y-m-d');
			$ultimo_fact = $this->Morden->get_codigo();
			$num_venta = $this->num_fact($ultimo_fact);
			$data = array(
				'alltecnicos' => $this->Madmin->getAllTenicos(),
				'venta' => $num_venta,
				'allservicios' => $this->Mservicio->getAllservicio(),
				'hoy' => $fechaActual,
			);
			$this->load->view('backend/layouts/header');
			$this->load->view('backend/layouts/aside');
			$this->load->view('backend/orden_reparacion/Oadd', $data);
			$this->load->view('backend/layouts/footer');
		}
	}

	public function insertRep()
	{
		$id = $this->input->post('id');
		$reparacion = $this->input->post('reparacion');
		$valor = $this->input->post('valor');
		$contador = $this->input->post('contador');
		$idrep = $this->input->post('idrep');
		$data = array(
			'DESCRIPCION_REPARACION' => $reparacion,
			'VALOR' => $valor,
			'ESTADO' => false,
		);
		if ($contador == 1) {
			$result = $this->Morden->update($id, $data);
			if ($result == true) {
				$dataOrden = array(
					'ESTADO_ORDEN' => false,
				);
				$this->Morden->update($idrep, $dataOrden);
			}
		} else {
			$this->Morden->update($id, $data);
		}
		echo json_encode(true);

		/* redirect(base_url() . "orden_reparacion/Corden/mostrar"); */
	}

	function actOrden($id)
	{
		$dataOrden = array(
			'ESTADO_ORDEN' => 2,
		);
		$this->Morden->updateOrden($id, $dataOrden);

		redirect(base_url() . "orden_reparacion/Corden/mostrar");
	}

	public function send()
	{
	}
}
