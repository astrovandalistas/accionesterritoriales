<?php
/*
Template Name: Inicio
*/
get_header();

?>

<div id="home" class="principal row">
 
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

</div><!-- .principal -->


<?php
get_footer();
?>
