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
	Inicio
</div>
<div class="opcion_menu large-3 columns">
	Tutorial
</div>
<div class="opcion_menu large-3 columns">
	Acciones territoriales
</div>
<div class="opcion_menu large-3 columns">
	Colabora
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
		<h3><?php echo vcenter($ttl); ?></h3>
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
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque culpa accusamus quas voluptatibus, doloremque iste.
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


function entrada() {

?>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sed exercitationem, aliquam tempora amet, obcaecati sit labore error blanditiis earum quo veniam, voluptate autem repellat esse ipsa ipsam! Voluptates expedita ut ea id natus. Officiis, rem id culpa aspernatur quis voluptates, voluptatum blanditiis repellendus modi aut eveniet necessitatibus velit, similique quidem soluta dolorem! Animi culpa, iusto natus nostrum. Reprehenderit ex voluptas fugit, eum laborum iste tempora nisi dolor architecto ipsa impedit repudiandae minus, placeat, ipsum minima! Laudantium atque harum repudiandae. Vel, soluta, eaque! Maxime, sapiente pariatur obcaecati, illum omnis tempore similique quae id repellendus delectus modi dolore incidunt fuga! Eligendi pariatur dolorum, illo deleniti officia nisi, reprehenderit laborum libero aut doloribus dolorem neque sint vel reiciendis odit quibusdam cum nostrum numquam illum ullam tenetur, amet possimus, ducimus quia. Ullam soluta animi molestiae commodi, voluptates quidem, neque mollitia maxime deserunt quam velit minus aut omnis et fugiat quos debitis quae necessitatibus.

<?php
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