<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Doctor_model');
  }

  function Index()
  {
    if($this->session->userdata('login'))
    {
      $data = array('titulo' => 'Doctores', 'inicio' => false,
      'cita' => false, 'doctores' => true, 'pacientes' => false,
      'usuarios' => false);
      $this->load->view('backend/head', $data);

      $data = array('usuario' => $this->session->userdata('user'));
      $this->load->view('backend/nav', $data);

      $data['doc'] = $this->Doctor_model->GetAllDoctors();
      $this->load->view('backend/doctores/body', $data);

      //madals
      $this->load->view('backend/doctores/delete_modal');
      $this->load->view('backend/doctores/new_modal');

      $this->load->view('backend/footer');
    }
    else
      header("Location: ".base_url('Log'));
  }

  function New()
  {
    $post = $this->input->post();

    $data['nombre'] = $post['name'];
    $data['apellidop'] = $post['ap'];
    $data['apellidom'] = $post['am'];
    $data['sexo'] = $post['sex'];

    if($this->Doctor_model->New($data))
      echo "¡Medico registrado con exito!";
    else
      echo "No se pudo dar de alta al Medico";

  }

  function DeleteThis() //funcion
  {
    $datos = $this->input->post();

    $doc = $datos['doc'];
    $id = $datos['id'];

    $bool = $this->Doctor_model->Delete($doc);

    if($bool)
      echo $id;
  }

}
