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

        <div id="entradas" class="large-9 columns">
          <?php entradas(); ?>
        </div>

        <div id="lateral" class="large-3 columns">
          <?php lateral(); ?>
        </div>

      </div>

    </div>


    <div id="footer" class="row">
     <div class="large-7 columns"></div> 
     <div id="redes" class="large-5 columns">
       <div class="icono large-3 columns"><a link=""><img src="img/redes/fb.png" alt=""></a></div>
       <div class="icono large-3 columns"><a link=""><img src="img/redes/tw.png" alt=""></a></div>
       <div class="icono large-3 columns"><a link=""><img src="img/redes/tvs.png" alt=""></a></div>
       <div class="icono large-3 columns"><a link=""><img src="img/redes/gg.png" alt=""></a></div>
     </div>
    </div>



    <script src="js/app.js"></script>


  </body>
</html>
