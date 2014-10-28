<div id="entrada" class="principal row">

  <div class="large-8 columns">  
    <?php entrada(); ?>
  </div>

  <div id="lateral" class="large-4 columns">
   <div class="contenidos_destacados">            
    <?php lateral(); ?>
  </div>
  <div id="redes" class="large-12 columns">
   <?php redes(); ?>
 </div>

</div>

</div>

</div>

</div><!-- .principal -->

<script>
  
  $('#subMenu li').click(function(){
    var id = $(this).attr('id').split('_')[1];

    var sel = '.contenido section[id$='+id+']';

    var targetDivScroll = $(sel).offset().top;
    var parentTop  = $('.contenido').offset().top;
    var currScroll = $('.contenido').scrollTop();

    var targetY = currScroll - parentTop + targetDivScroll;

    $('.contenido').stop().animate({
      scrollTop: targetY
    }, 1000, 'swing');
  });





  var scrollTimer;

  $('#entrada .contenido').scroll(function(){

      if ( scrollTimer ) clearTimeout(scrollTimer);

      scrollTimer = setTimeout(function(){

      $('.contenido section').each(function(){
        if( $(this).visible() ) {
          $('#subMenu li').eq( $(this).index() ).addClass('active');
          $('#subMenu li').eq( $(this).index() ).siblings().removeClass('active');
        }
      });
      }, 100);
  });

  
  

</script>