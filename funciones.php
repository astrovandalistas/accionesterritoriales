<?php

function foo_link($content="",$url="",$onclick=""){
  if($url=="") $url = "#";
    $str = "";
    $str = '<a href="'.$url.'"';
    if($onclick!="") {    
      $str .= ' onclick="'.$onclick.'"';
    }

  $str .= '>';
  $str .= $content;
  $str .= '</a>';

  return $str;
}




function makeDiv($id="",$class="", $content="", $link=""){
  $str = '<div';
    if($id!="") {     $str .= ' id="'.$id.'"';  }
    if($class!="") {  $str .= ' class="'.$class.'"'; }

  $str .= '>';

    if($link!="") {   $str .= '<a href="'.$link.'">'; }
    if($content!="") {  $str .= $content; }
    if($link!="") {   $str .= '</a>'; }
  
  $str .= '</div>';
  
  return $str;
}


function vcenter($content="", $link="", $align="justify", $id="", $class="" ){
  $str =  makeDiv($id,'vcenter_table '.$class,
        makeDiv("","vcenter_container",makeDiv("", "vcenter_content ".$align, $content) )       
      );
  if($link!="") $str = makeLink($str,$link);
  
  return $str;
}










function site_header(){

?>

<div id="logo" class="large-4 medium-6 small-8 columns">        

	<div id="nombre" class="large-7 columns">
		<div id="siglas" class="large-12 columns">
			<h1></h1>
		</div>
		<div id="bandera" class="large-12 columns">
			<img src="img/bandera.png" alt="">
		</div>
		<div id="titulo" class="large-12 columns">
			<h5></h5>
		</div>
	</div>

	<div id="escudo" class="large-5 columns">
		<img src="img/escudo.png" alt="">
	</div>

</div>

<?php

}


function menu(){

?>

<div class="opcion_menu large-3 columns">
	<a href="#"><h6>Inicio</h6></a>
</div>
<div class="opcion_menu large-3 columns">
	<a href="#"><h6>Tutorial</h6></a>
</div>
<div class="opcion_menu large-3 columns">
	<a href="#"><h6>Acciones territoriales</h6></a>
</div>
<div class="opcion_menu large-3 columns">
	<a href="#"><h6>Colabora</h6></a>
</div>

<?php

}




function bullets() {

for( $i = 0; $i<9; $i++ ) {
$ttl = "Nombre de Bullet";
?>

<div class="bullet revealHolder">
	<div class="imagen revealOn">
		<img src="img/bullets/1.jpg" alt="">
	</div>
	<div class="cortina_holder revealOn"><div class="cortina">
	</div></div>
	<div class="titulo revealOn">
		<?php echo vcenter( '<h3>' . $ttl . '</h3>' ); ?>
	</div>


	<div class="texto revealOff">
		<?php
		$txt = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni rerum sed eos quo.</p>
		<p>Itaque dignissimos et fugit, laudantium beatae ducimus minima praesentium ab similique voluptas!</p>';

		echo vcenter($txt);
		?>
	</div>
</div>

<?php

}

}

function entrada() {
	

?>

<article>
	<header>
		<h1>Título de la entrada</h1>
	</header>
	<nav id="subMenu">
		<ul>
			<li id="submenu_id1">Opción de Navegación</li>
			<li id="submenu_id2">Opción de Navegación</li>
			<li id="submenu_id3">Opción de Navegación</li>
			<li id="submenu_id4">Opción de Navegación</li>
			
		</ul>
	</nav>
	<div class="contenido">
		
		<div class="section" id="secc_id1">
			<h3>Título de sección</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus voluptatum soluta iusto.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos minus veniam quidem praesentium libero, qui ad laborum?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>		
		<div class="section" id="secc_id2">
			<h3>Título de sección</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus voluptatum soluta iusto.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos minus veniam quidem praesentium libero, qui ad laborum?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
		<div class="section" id="secc_id3">
				<h3>Título de sección</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus voluptatum soluta iusto.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos minus veniam quidem praesentium libero, qui ad laborum?</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>		
		<div class="section" id="secc_id4">
			<h3>Título de sección</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus voluptatum soluta iusto.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos minus veniam quidem praesentium libero, qui ad laborum?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
		
	</div>

</article>

<?php


}


function entradas() {
for( $i = 0; $i<9; $i++ ) {

?>

<a href="#" data-reveal-id="myModal">
	
	<div class="entrada row">
		<div class="imagen large-3 columns">
			<img src="img/bullets/1.jpg" alt="">
		</div>

		<div class="texto large-9 columns">
			<div class="texto large-12 columns">
				<h3>Título de Entrada</h3>
			</div>
			<div class="texto large-12 columns">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo magni et, hic deserunt incidunt nulla.</p>

			</div>
		</div>

	</div>

</a>


<div id="myModal" class="reveal-modal" data-reveal>
	<?php entrada(); ?>
	<a class="close-reveal-modal">&#215;</a>
</div>

<?php

}

}






function lateral() {

	for( $i = 0; $i < 3; $i++ ) {

	?>

	<a href="#" data-reveal-id="myModal">

	<div class="contenido_lateral">
		<div class="imagen">
			<img src="img/bullets/1.jpg" alt="">
		</div>
		<div class="titulo">
			<h6>Título de contenido</h6>
		</div>
	</div>

	</a>


	<div id="myModal" class="reveal-modal" data-reveal>
		<?php entrada(); ?>
		<a class="close-reveal-modal">&#215;</a>
	</div>


	<?php

	}

}


function contenidoRed($str) {
}


function iconoRed($str) {
	?>
	<div class="icono large-3 columns">
		<a href="#" data-reveal-id="myModal">
			<img src="img/redes/<?php echo $str; ?>.png" alt=""></div>
		</a>

	<div id="myModal" class="reveal-modal" data-reveal>
		<?php contenidoRed( $str ); ?>
		<a class="close-reveal-modal">&#215;</a>
	</div>
	<?php
}



function redes() {
?>

	<?php
		iconoRed('fb');
		iconoRed('tw');
		iconoRed('tvs');
		iconoRed('gg');
	?>
	

<?php
}




?>