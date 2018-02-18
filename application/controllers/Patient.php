<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Patient_model');
  }

  function Index()
  {
    if($this->session->userdata('login'))
    {
      $data = array('titulo' => 'Pacientes', 'inicio' => false,
      'cita' => false, 'doctores' => false, 'pacientes' => true,
      'usuarios' => false);
      $this->load->view('backend/head', $data);

      $data = array('usuario' => $this->session->userdata('user'));
      $this->load->view('backend/nav', $data);

      $data['person'] = $this->Patient_model->GetPatient();
      $this->load->view('backend/pacientes/tabla', $data);

      $this->load->view('backend/pacientes/search', $data);

      //modales
      $data['estado'] = $this->Patient_model->GetStates();
      $this->load->view('backend/pacientes/new_modal', $data);
      $this->load->view('backend/pacientes/delete_modal');

      $this->load->view('backend/footer');
    }
    else
      header("Location: ".base_url('Log'));
  }

  function New()
  {
    $post = $this->input->post();

    $data['nombre'] = $post['name'];
    $data['ap'] = $post['ap'];
    $data['am'] = $post['am'];
    $data['sex'] = $post['sex'];
    $data['carnet'] = $post['carnet'];
    $data['curp'] = $post['curp'];
    $data['fecha'] = $post['fecha'];
    $data['estado'] = $post['estado'];
    $data['direccion'] = $post['direccion'];

    if($this->Patient_model->Insert($data))
      echo "¡Derecho habiente registrado con exito!";
    else
      echo "No se pudo dar de alta al derecho habiente, intente despues";

  }

  function Search()
  {
    $post = $this->input->post();

    $seguro = $post['seguro'];
    $person = $this->Patient_model->Searchlike($seguro);

    $content  = "<div class='table-responsive' style='width: 60%; margin: 0 auto;''>";
    $content .= "<table class='table table-hover table-bordered table-condensed'>";
    $content .=	"<thead>";
    $content .=	"<tr>";
    $content .= "<th style='text-align: center;'>Nombre Completo</th>";
    $content .= "<th style='text-align: center;'>CURP</th>";
    $content .=	"</tr>";
    $content .=	"</thead>";
    $content .=	"<tbody>";
    foreach ($person->result_array() as $usuario)
    {
      $content .= "<tr id ='tr'>";
      foreach ($usuario as $fila => $value)
      {
        if($fila == "nombre")
        {
          $content .= "<td style='text-align: center;'><a class='enlace' href=".base_url("Patient/Show/".$usuario['noSeguro']).">".
          $value ." ".$usuario['apellidoP']." ".$usuario['apellidoM']."</a></td>";
          $content .= "<td style='text-align: center;'>".$usuario['CURP']."</td>";
        }
      }
      $content .= "</tr>";
    }
    $content .=	"</tbody>";
    $content .=	"</table>";
    $content .= "</div>";
    echo $content;
  }

  function Show($seguro = null)
  {

    if($seguro != null)
    {
      $data = array('titulo' => 'Pacientes', 'inicio' => false,
      'cita' => false, 'doctores' => false, 'pacientes' => true,
      'usuarios' => false);
      $this->load->view('backend/head', $data);

      $data = array('usuario' => $this->session->userdata('user'));
      $this->load->view('backend/nav', $data);

      $info = $this->Patient_model->GetPerson($seguro);
      $this->load->view('backend/pacientes/info', $info);

      //modales
      $this->load->view('backend/pacientes/cinfo_modal', $info);
      $this->load->view('backend/pacientes/dinfo_modal', $info);

      $this->load->view('backend/footer');
    }
    else
      header("Location: ".base_url('Admin/Home'));
  }

  function DeleteThis()
  {
    $datos = $this->input->post();

    $seguro = $datos['seguro'];

    $bool = $this->Patient_model->Delete($seguro);

    if($bool)
      echo "Persona eliminada del sistema con exito!";
    else
      echo "Error!";
  }

  function Carnet()
  {
    $datos = $this->input->post();

    $info['seguro'] = $datos['seguro'];
    $info['carnet'] = $datos['nuevo'];

    $bool = $this->Patient_model->SetCarnet($info);

    if($bool)
      echo "Carnet actualizado con exito!";
    else
      echo "Error!";
  }

  function Update()
  {
    $datos = $this->input->post();

    $info['seguro'] = $datos['seguro'];
    $info['nombre'] = $datos['name'];
    $info['paterno'] = $datos['ap'];
    $info['materno'] = $datos['am'];
    $info['sexo'] = $datos['sex'];
    $info['curp'] = $datos['curp'];
    $info['direccion'] = $datos['direccion'];

    $bool = $this->Patient_model->Update($info);

    if($bool)
      echo "Informacion actualizada con exito!";
    else
      echo "Error!";
  }

}
