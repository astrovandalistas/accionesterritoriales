<?php


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

?>

<div class="bullet">
	<div class="imagen">
		<img src="img/bullets/1.jpg" alt="">
	</div>
	<div class="cortina_holder"><div class="cortina">
	</div></div>
	<div class="texto">
		<h3>Ocupación Invisible</h3>
	</div>
</div>

<?php

}

}



function entradas() {
for( $i = 0; $i<9; $i++ ) {

?>

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

<?php

}

}

function lateral() {

for( $i = 0; $i < 3; $i++ ) {

?>

<div class="entrada">
	<div class="imagen">
		<img src="img/bullets/1.jpg" alt="">
	</div>
	<div class="texto">
		<h3>Entrada</h3>
	</div>
</div>

<?php

}

}

?>

