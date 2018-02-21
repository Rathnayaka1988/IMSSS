<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Appointment_model');

  }

  function Index()
  {
    if($this->session->userdata('login'))
    {
      $data = array('titulo' => 'Citas de Pacientes', 'inicio' => false,
      'cita' => true, 'doctores' => false, 'pacientes' => false,
      'usuarios' => false);
      $this->load->view('backend/head', $data);

      $data = array('usuario' => $this->session->userdata('user'));
      $this->load->view('backend/nav', $data);

      $this->load->view('backend/citas/tabla');

      //modales
      $this->load->view('backend/citas/new_modal');


      $this->load->view('backend/footer');
    }
    else
      header("Location: ".base_url('Log'));
  }

}
