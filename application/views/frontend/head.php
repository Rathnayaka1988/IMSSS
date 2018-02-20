<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php
      if($acceso)
      {
      ?>
    <link href="<?= base_url()?>Resources/js/Book/css/default.css" rel="stylesheet"  type="text/css"/>
		<link href="<?= base_url()?>Resources/js/Book/css/bookblock.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url()?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <link href="<?= base_url()?>Resources/js/Book/css/demo4.css"  rel="stylesheet" type="text/css"/>

    <script src="<?= base_url()?>Resources/js/Book/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>vendor/components/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>Resources/js/Book/js/jquerypp.custom.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>Resources/js/Book/js/bookblock.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <?php
      }
      else
      {
    ?>

    <link href="<?=base_url()?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>Resources/css/book.css" rel="stylesheet" />

    <script type="text/javascript" src="<?= base_url() ?>vendor/components/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

    <?php
      }
    ?>

    <title>Systema IMSS</title>
  </head>
  <body>
