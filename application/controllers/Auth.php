<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mcuenta");
        $this->load->model("Morden");
        date_default_timezone_set('America/Guayaquil');
    }

    public function login()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $res = $this->Mcuenta->login($username, sha1($password));
        if (!$res) {
            $this->session->set_flashdata("error", "El Usuario y/o contraseña son incorrecta...");
            redirect(base_url() . "Auth/initlogin");
        } else {

            $data = array(
                'id' => $res->ID_CUENTA,
                'id_per' => $res->ID_PERSONA,
                'apellidos' => $res->APELLIDOS_PER,
                'loginc' => $res->USUARIO,
                'nombres' => $res->NOMBRES_PER,
                'abreviatura' => $res->ABREVIATURA_ROL,
                'rol' => $res->ID_ROL,
                'tipo_rol' => $res->TIPO_ROL,
                'login' => TRUE,
            );

            $this->session->set_userdata($data);
            //Para cuando ingresa el tecnico
            if ($this->session->userdata("login") && ($res->ABREVIATURA_ROL == "TEC")) {
                $this->session->set_flashdata("error", "El Usuario y/o contraseña son incorrecta...");

                redirect(base_url() . "orden_reparacion/Corden/mostrar");
            } else {
                $this->session->set_flashdata("ingresologin", "Bienvenido a FadaSystem");
                redirect(base_url() . "Manteiner/Cadmin/inicio");
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    function init()
    {
        $this->load->view('backend/layouts/header');
        $this->load->view('backend/layouts/aside');
        $this->load->view('backend/prueba');
        $this->load->view('backend/layouts/footer');
    }

    function initlogin()
    {
        $this->load->view('frontend/init/layouts/header');
        $this->load->view('frontend/init/layouts/login');
        /* $this->load->view('fronted/prueba'); */
        $this->load->view('frontend/init/layouts/footer');
    }
    function initOrdenes()
    {
        $this->load->view('frontend/init/layouts/header');
        $this->load->view('frontend/init/layouts/ordenes');
        /* $this->load->view('fronted/prueba'); */
        $this->load->view('frontend/init/layouts/footer');
    }
}
