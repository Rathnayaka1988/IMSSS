<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_model extends CI_Model{

    function GetAllDoctors()
    {
      $result = $this->db->query("Select * from medico");
      if($result->num_rows() > 0)
      {
        return $result;
      }
      else
      {
        return null;
      }
    }

    function Delete($id = null)
    {
      if($id != null)
      {
        $SQL = "DELETE FROM medico WHERE idmedico = '$id'";

        if($this->db->query($SQL))
        {
          return true;
        }
      }
      return false;
    }

    function New($datos = null)
    {
      if($datos != null)
      {
        $name = $datos['nombre'];
        $ap = $datos['apellidop'];
        $am = $datos['apellidom'];
        $sex = $datos['sexo'];

        $SQL = "INSERT INTO medico(nombre, apellidoP, apellidoM, sexo) VALUES
         ('".$name."', '".$ap."', '".$am."', '".$sex."')";

        if($this->db->query($SQL))
        {
         return true;
        }
      }

      return false;
    }


}
