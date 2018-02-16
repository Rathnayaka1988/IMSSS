<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->library('encryption');
    $this->load->model('User_model');
  }

  function Index() //vista
  {
    if($this->session->userdata('login'))
    {
      $data = array('titulo' => 'Usuarios', 'inicio' => false,
      'cita' => false, 'doctores' => false, 'pacientes' => false,
      'usuarios' => true);
      $this->load->view('backend/head', $data);

      $data = array('usuario' => $this->session->userdata('user'));
      $this->load->view('backend/nav', $data);

      $data['user'] = $this->User_model->GetAllUser();
      $this->load->view('backend/usuarios/body', $data);

      //modales
      $this->load->view('backend/usuarios/new_modal');
      $this->load->view('backend/usuarios/pass_modal');
      $this->load->view('backend/usuarios/delete_modal');

      $this->load->view('backend/footer');
    }
    else
      header("Location: ".base_url('Log'));
  }

  function GetInfo()
  {

    $nick = $this->input->post('user');
    $info = $this->User_model->Search($nick);

    if($info != null)
      echo $info->idusuario;
  }

  function New() //funcion
  {
    $post = $this->input->post();

    $password = $post['nueva'];
    $rpassword = $post['rnueva'];

    if($password == $rpassword)
    {
      $data['nick'] = $post['nick'];
      $data['contrasena'] = $this->encryption->encrypt($password);

      if($this->User_model->Insert($data))
        echo "¡Usuario registrado con exito!";
      else
        echo "No se pudo dar de alta el usuario";
    }
    else
    {
      echo "Las contraseñas no coinciden, intentelo de nuevo";
    }
  }

  function ChangePass() //funcion
  {
    $this->load->library('encryption');

    $post = $this->input->post();

    $id = $post['id'];
    $vieja = $post['actual'];
    $nueva = $post['nueva'];
    $rnueva = $post['rnueva'];

    $info = $this->User_model->SearchId($id);

    $contra = $this->encryption->decrypt($info->password);
    //$contra = $info->password;

    if($contra == $vieja)
    {
      if($nueva == $rnueva)
      {
        $data['pass'] = $this->encryption->encrypt($nueva);
        $data['id'] = $id;

        $val = $this->User_model->UpdatePass($data);

        if($val)
        {
          echo "si subi prra";
        }
        else
          echo ":'v";
      }
      else
        echo "Las cantraseñas no coinciden, verifiquelas por favor";
    }
    else
      echo "La contraseña actual es incorrecta";
  }

  function DeleteThis() //funcion
  {
    $datos = $this->input->post();

    $nick = $datos['user'];
    $id = $datos['id'];

    $bool = $this->User_model->Delete($nick);

    if($bool)
      echo $id;
  }

}
