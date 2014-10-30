<!doctype html>

<?php

require('html_generators.php');
require('funciones.php');

?>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Esto no es internet</title>

  <?php

  require('assets.php');
  wp_head();

  ?>

</head>
<body>
  <div id="contenedor">


    <div id="cabecera" class="row">
      <?php site_header(); ?>
    </div>

    <div id="menu" class="row">
      <?php menu(); ?>
    </div>

    <div id="principal">
