<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clostpassword extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Mcuenta");
  }

  function index()
  {
    $this->load->view('frontend/init/layouts/header');
    $this->load->view('frontend/init/layouts/lostpassword');
    /* $this->load->view('fronted/prueba'); */
    $this->load->view('frontend/init/layouts/footer');
  }

  function pswd()
  {
    $email = $this->input->post('email');
    $data = array(
      'email' => $email,
    );
    $this->load->view('frontend/init/layouts/header');
    $this->load->view('frontend/init/layouts/newpswd', $data);
    $this->load->view('frontend/init/layouts/footer');
    //var_dump($email);
  }

  function recuperar_pswd()
  {
    $email = $this->input->post('email');
    $clave = $this->input->post("pswd");

    $this->form_validation->set_rules("pswd", "Contraseña", "required");
    $this->form_validation->set_rules("newpswd", "Confirmar Contraseña", 'required|matches[pswd]');
    // var_dump($email, $clave);

    if ($this->form_validation->run()) {
      /* $dataCuenta = array(
        'contraseña' => sha1($clave),
      ); */
      $res = $this->Mcuenta->getCuenta($email);
      // var_dump($res);

      $key = sha1($clave);
      try {
        $this->db->trans_begin();
        if ($this->Mcuenta->update_pswd($key, $res->ID_CUENTA)) {
          $this->db->trans_commit();
          $this->session->set_flashdata("exitochangepassword", "La contraseña se cambiaron correctamente...");

          redirect(base_url() . "Auth/initlogin");
        } else {
          $this->db->trans_rollback();
          redirect(base_url());
        }
      } catch (PDOException $ex) {
      }
    } else {
      $data = array(
        'email' => $email,
      );
      $this->load->view('frontend/init/layouts/header');
      $this->load->view('frontend/init/layouts/newpswd', $data);
      /* $this->load->view('fronted/prueba'); */
      $this->load->view('frontend/init/layouts/footer');
    }
  }

  public function send_mail_recuperar()
  {
    $mail = $this->input->post('email');
    $ced = $this->input->post('ced');
    //cargamos la libreria email de ci
    $this->load->library("email");

    //configuracion para gmail
    $configGmail = array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'fadasystems.info@gmail.com',
      'smtp_pass' => 'fada.2021',
      'mailtype' => 'html',
      'charset' => 'utf-8',
      'newline' => "\r\n"
    );

    //cargamos la configuración para enviar con gmail
    $this->email->initialize($configGmail);

    $this->email->from('fadasystems.info@gmail.com', 'FADAsystem.cia.ltda');
    $this->email->to($mail);
    $this->email->subject('Restablecer contraseña');
    $this->email->message(
      '<form name="form" id="form" action=' . base_url() . "Clostpassword/pswd" . ' method="post">
      <b>Estimado usuari@</b>
      <input type="hidden" name="email" value=' . $mail . '>
       <p>Una petición de de reinicio de contraseña a sido pedida para la cuenta de Telectrocom asociada a esta cuenta de email.
       <br><p>Puede cambiar la contraseña dando clic en el siguiente botón <button type="submit" style="background: lightskyblue;">Cambiar Contraseña</button> </p></p>
       <p><b>Nota: </b>Al presionar Cambiar contraseña es posible le muestre una advertencia de Gmail, hacer clic en aceptar para poder cambiar su contraseña</p>
       <br><p>Atentamente:</p>
       <p>Tus amigos de FADAsystem</p>
       </form>'
    );


    for ($i = 1; $i <= 1; $i++) {
      if ($this->email->send()) {
        $this->session->set_flashdata("erroremail", "Revise su correo porfavor...");

        redirect(base_url() . "Auth/initlogin");
      } else {
        $this->session->set_flashdata("erroremail", "El correo son incorrecta...");
        redirect(base_url() . "Clostpassword");
      }
      sleep(1);
    }
  }
}
