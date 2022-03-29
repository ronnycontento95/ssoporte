<?php
class Backend_lib
{
  private $CI;
  public function __construct()
  {
    //Hace la referencia a un metodo de una instancia 
    $this->CI = &get_instance();
  }
  //CLASE PARA LLAMAR LA CLASE
  public function control()
  {
    if (!$this->CI->session->userdata("login")) {
      redirect(base_url());
    }
    $url = $this->CI->uri->segment(1);
    if ($this->CI->uri->segment(2)) {
      $url = $this->CI->uri->segment(1) . "/" . $this->CI->uri->segment(2);
    }
    $infomenu = $this->CI->Backend_model->getId($url);
    $permisos = $this->CI->Backend_model->getPermisos($infomenu->id_menu, $this->CI->session->userdata("rol"));
    if ($permisos->read == 0) {
      redirect(base_url() . "cdenegado");
    } else {
      return $permisos;
    }
  }
}
