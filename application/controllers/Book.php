<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Patient_model');
  }

  function Index()
  {
    $validacion['acceso'] = false;

    $this->load->view('frontend/head', $validacion);
    $this->load->view('frontend/body');
  }

  function Access()
  {
    $post = $this->input->post();

    $seguro = $post['seguro'];

    $info = $this->Patient_model->GetPerson($seguro);

    if($info != null)
      echo base_url('Book/Details/'.$seguro);
    else
      echo "no existe el paciente";
  }

  function Details($persona = null)
  {
    if($persona != null)
    {
      $validacion['acceso'] = true;

      $this->load->view('frontend/head', $validacion);

      $info = $this->Patient_model->GetPerson($persona);
      $this->load->view('frontend/persona', $info);

      $citas;
      $this->load->view('frontend/citas');

      $this->load->view('frontend/footer');
    }
    else
      header("Location: ".base_url());
  }

}
