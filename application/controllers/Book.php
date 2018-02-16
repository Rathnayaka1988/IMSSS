<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller{

  function Index()
  {
    $this->load->view('frontend/head');
    $this->load->view('frontend/body');
  }

  function Libro1()
  {
    $this->load->view('frontend/head');
    $this->load->view('frontend/body1');
  }

  function Libro2()
  {
    $this->load->view('frontend/head');
    $this->load->view('frontend/body2');
  }

  function Libro3()
  {
    $this->load->view('frontend/head');
    $this->load->view('frontend/body3');
  }

}
