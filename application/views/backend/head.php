<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link href="<?=base_url()?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <?php
      if(!$this->session->userdata('login'))
      {
     ?>
    <link href="<?=base_url()?>Resources/css/login.css" rel="stylesheet" />

    <script type="text/javascript" src="<?= base_url() ?>vendor/components/jquery/jquery.min.js"></script>
    <?php
      }
      else
      {
    ?>
    <link href="<?=base_url()?>Resources/css/home.css" rel="stylesheet" />
    <link href="<?=base_url()?>vendor/components/jquery-ui/jquery-ui.min.css" rel="stylesheet" />

    <script type="text/javascript" src="<?= base_url() ?>vendor/components/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>vendor/components/jquery-ui/jquery-ui.min.js"></script>
    <?php
      }
    ?>
    <script type="text/javascript" src="<?= base_url() ?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>vendor/fortawesome/font-awesome/svg-with-js/js/fontawesome-all.min.js"></script>

    <title><?=$titulo?></title>
  </head>
  <body>
