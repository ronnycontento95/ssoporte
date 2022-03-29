<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cdenegado extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata("login")) {
      redirect(base_url());
    }
  }

  public function index()
  {
    $this->load->view('backend/layouts/header');
    $this->load->view('backend/layouts/aside');
    $this->load->view('backend/layouts/Vcdenegado');
    $this->load->view('backend/layouts/footer');
  }
}
