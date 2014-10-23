<!doctype html>

<?php
  
  require('funciones.php');

?>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CODEPI</title>
    <link rel="stylesheet" href="css/app.css" />

    <script src="bower_components/modernizr/modernizr.js"></script>
  

    <link rel="stylesheet" href="bower_components/slick.js/slick/slick.css" />

   

    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <script src="bower_components/foundation/js/foundation.min.js">
    </script>
    
    <script src="bower_components/slick.js/slick/slick.min.js"></script>


  </head>
  <body>
    <div id="cabecera" class="row">
      <?php site_header(); ?>
    </div>

    <div id="menu" class="row">
      <?php menu(); ?>
    </div>

    <div id="principal">
   
      <div id="bullets" class="row">
          <?php bullets(); ?>                                             
      </div>



      <div id="contenido" class="row">

        <div id="entradas" class="large-8 columns">
          <?php entradas(); ?>
        </div>

        <div id="lateral" class="large-4 columns">
          <div id="redes" class="large-12 columns">
           <?php redes(); ?>
          </div>
          <div class="contenidos_destacados">            
          <?php lateral(); ?>
          </div>

        </div>

      </div>

    </div>


    <div id="footer" class="row">
     
      <div class="large-12 columns"><a href="http://astrovandalistas.cc">*</a></div> 

    </div>



    <script src="js/app.js"></script>


  </body>
</html>
