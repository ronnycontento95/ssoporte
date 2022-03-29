<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cpermisos extends CI_Controller
{

    private $permisos;
    public function __construct()
    {
        parent::__construct();
        $this->permisos = $this->backend_lib->control();
        $this->load->model("Mcuenta");
        $this->load->model("Morden");
        $this->load->model("Mpermisos");
        $this->load->model("Mrol");
        $this->load->model("Madmin");

        date_default_timezone_set('America/Guayaquil');
    }


    function index()
    {
        $data = array(
			'allpermisos' => $this->Madmin->getpermisos(),
		);
        $this->load->view('backend/layouts/header');
        $this->load->view('backend/layouts/aside');
        $this->load->view('backend/Permisos/Vlis_Per', $data);
        $this->load->view('backend/layouts/footer');
    }

    function add()
    {
        $data = array(
            'roles' => $this->Mrol->getroles(),
            'menus' => $this->Mpermisos->getMenus(),
        );
        $this->load->view('backend/layouts/header');
        $this->load->view('backend/layouts/aside');
        $this->load->view('backend/Permisos/Vadd_per', $data);
        $this->load->view('backend/layouts/footer');
    }


    public function guardar()
    {
        $menu = $this->input->post("menu");
        $rol = $this->input->post("rol");
        $insert = $this->input->post("insert");
        $read = $this->input->post("read");
        $update = $this->input->post("update");
        $delete = $this->input->post("delete");
        $data = array(
            'menu_id' => $menu,
            'rol_id' => $rol,
            'insert' => $insert,
            'read' => $read,
            'update' => $update,
            'delete' => $delete,
        );
        if ($this->Mpermisos->save($data)) {
            redirect(base_url() . "Permisos/Cpermisos");
        } else {
            $this->session->set_flashdata("error", "No se  con exito");
            redirect(base_url() . "Administrador/Cpermisos/fadd");
        }
    }
}
