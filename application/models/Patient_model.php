<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_model extends CI_Model{

  function GetStates()
  {
    $result = $this->db->query("Select * from lugar");
    if($result->num_rows() > 0)
    {
      return $result;
    }
    else
    {
      return null;
    }
  }

  function GetPatient()
  {
    $result = $this->db->query("SELECT * fROM paciente ORDER BY noSeguro DESC LIMIT 5 ");
    if($result->num_rows() > 0)
    {
      return $result;
    }
    else
    {
      return null;
    }
  }

  function GetPerson($id = null)
  {
    if($id != null)
    {
      $result = $this->db->query("SELECT * FROM paciente WHERE noSeguro = ".$id."");
      if($result->num_rows() > 0)
      {
        return $result->row();
      }
      else
      {
        return null;
      }
    }
  }

  function Searchlike($id = null)
  {
    if($id != null)
    {
      $result = $this->db->query("SELECT * FROM paciente WHERE noSeguro like '%".$id."%'");
      if($result->num_rows() > 0)
      {
        return $result;
      }
      else
      {
        return null;
      }
    }
  }

  function Insert($datos = null)
  {
    if($datos != null)
    {

      $SQL = "INSERT INTO paciente (carnet, nombre, apellidoP, apellidoM, CURP, sexo, fecha_nacimiento, id_lugar) VALUES
      ('". $datos['carnet'] ."', '". $datos['nombre'] ."', '". $datos['ap'] ."', '". $datos['am'] ."',
        '". $datos['curp'] ."', '". $datos['sex'] ."', '". $datos['fecha'] ."', '". $datos['estado'] ."')";

      if($this->db->query($SQL))
      {
        return true;
      }
    }
    return false;
  }

  function Update($informacion = null)
  {
    if($informacion != null)
    {
      
    }
  }

  function Delete($seguro = null)
  {
    if($seguro != null)
    {
      $SQL = "DELETE FROM paciente WHERE noSeguro = $seguro";

      if($this->db->query($SQL))
      {
        return true;
      }
    }
    return false;
  }

}
