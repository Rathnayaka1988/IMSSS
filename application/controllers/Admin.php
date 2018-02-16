<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    $this->load->library('encryption');
    $this->load->model('User_model');
  }

  function Login()
  {
    if($this->session->userdata('login'))
    {
      header("Location: ".base_url('Admin/Home'));
    }
    else
    {
      $data = array('titulo' => 'Inicio de Sesión');
      $this->load->view('backend/head', $data);

      $this->load->view('backend/login');
    }
  }

  function Session()
  {

    $nick = $this->input->post('usuario');
    $contrasenia = $this->input->post('contrasena');

    $info = $this->User_model->Search($nick);

    if($info != null)
    {
      $contra = $this->encryption->decrypt($info->password);
      if($contra == $contrasenia)
      {
        $data = array(
          'id' => $info->idusuario,
          'user' => $info->nick,
          'login' => true
        );

        $this->session->set_userdata($data);

        echo base_url('Admin/Home');
      }
      else {
        echo "Las contraseñas no coinciden, intentelo de nuev";
      }
    }
    else {
        echo "El usuario no existe, intentelo de nuevo";
    }
  }

  function Exit()
  {
    $this->session->sess_destroy();
    header("Location: ".base_url('Log'));
  }

  function Home()
  {
    if($this->session->userdata('login'))
    {
      $data = array('titulo' => 'Pagina Principal', 'inicio' => true,
      'cita' => false, 'doctores' => false, 'pacientes' => false,
      'usuarios' => false);
      $this->load->view('backend/head', $data);

      $data = array('usuario' => $this->session->userdata('user'));
      $this->load->view('backend/nav', $data);

      $this->load->view('backend/body');
      $this->load->view('backend/footer');
    }
    else
      header("Location: ".base_url('Log'));
  }


}
