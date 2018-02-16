<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

  function Search($usuario = null)
  {
    if($usuario != null)
    {
      $result = $this->db->query("Select * from usuario where nick = '".$usuario."'");
      if($result->num_rows() > 0)
        return $result->row();

    }
    else
      return null;
  }

  function GetAllUser()
  {
    $result = $this->db->query("Select * from usuario");
    if($result->num_rows() > 0)
    {
      return $result;
    }
    else
    {
      return null;
    }
  }

  function SearchId($id = null)
  {
    if($id != null)
    {
      $result = $this->db->query("Select * from usuario where idusuario = '".$id."'");
      if($result->num_rows() > 0)
      {
        return $result->row();
      }
    }
      return null;
  }

  function Insert($usuario = null)
  {
    if($usuario != null)
    {
      $nick = $usuario['nick'];
      $contra = $usuario['contrasena'];

      $SQL = "INSERT INTO usuario(nick, password) VALUES('$nick','$contra');";

      if($this->db->query($SQL))
      {
        return true;
      }
    }
    return false;
  }

  function Delete($usuario = null)
  {
    if($usuario != null)
    {
      $SQL = "DELETE FROM usuario WHERE nick = '$usuario'";

      if($this->db->query($SQL))
      {
        return true;
      }
    }
    return false;
  }

  function UpdatePass($usuario = null)
  {
    if($usuario != null)
    {
      $id = $usuario['id'];
      $pass = $usuario['pass'];

      $SQL = "UPDATE usuario SET password = '$pass' WHERE idusuario = '$id'";

      if($this->db->query($SQL))
      {
        return TRUE;
      }
    }
    return FALSE;
  }

}
