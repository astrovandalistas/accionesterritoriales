<?php
/*
Template Name: Inicio
*/
get_header();

?>

<div id="home" class="principal row">
 
  <div id="bullets" class="large-12 medium-10 medium-offset-1 small-10 small-offset-1 columns">
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
