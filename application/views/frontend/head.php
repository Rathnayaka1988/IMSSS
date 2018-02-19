<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link href="<?=base_url()?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>Resources/css/book.css" rel="stylesheet" />

    <?php
      if($acceso)
      {
      ?>
    <link href="<?=base_url()?>Resources/css/Book/css/bookblock.css" rel="stylesheet" />

    <script type="text/javascript" src="<?= base_url() ?>Resources/js/Book/js/jquerypp.custom.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>Resources/js/Book/js/bookblock.js"></script>
      <?php
      }
     ?>
    <script type="text/javascript" src="<?= base_url() ?>vendor/components/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

    <title>Systema IMSS</title>
  </head>
  <body>
