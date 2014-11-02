<?php

require('html-tag-generator.php');









function site_header(){

	?>

	<div id="logo" class="large-4 medium-6 small-8 columns">        

		<div id="nombre" class="large-7 columns">
			<div id="siglas" class="large-12 columns">
				<h1></h1>
			</div>
			<div id="bandera" class="large-12 columns">
				<img src="<?php echo themeDir(); ?>/img/bandera.png" alt="">
			</div>
			<div id="titulo" class="large-12 columns">
				<h5></h5>
			</div>
		</div>

		<div id="escudo" class="large-5 columns">
			<img src="<?php echo themeDir(); ?>/img/escudo.png" alt="">
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

	$q = new WP_Query(array('post_type'=>'post','category_name'=>Bullets));
	if( $q -> have_posts() ) {
		while( $q -> have_posts() ) {

			$post = $q -> the_post();
			$id = get_the_ID();
			$ttl = get_the_title();
			$img = makeImg( featImg() );
			$cnt = get_the_content();

			?>

			<div class="bullet revealHolder">
				<div class="imagen revealOn">
					<?php echo $img; ?>
				</div>
				<div class="cortina_holder revealOn"><div class="cortina">
				</div></div>
				<div class="titulo revealOn">
					<?php echo vcenter( '<h3>' . $ttl . '</h3>' ); ?>
				</div>


				<div class="texto revealOff">
					<?php
					echo vcenter($cnt);
					?>
				</div>
			</div>

			<?php

		}

	}

}







function entradas() {

	$excludeCatsIDs = array();

	$excludeCats = get_categories('parent='. get_cat_ID( "Redes" ));
	foreach($excludeCats as $rC) {
		array_push( $excludeCatsIDs, (int)$rC->term_id );
	}
	array_push( $excludeCatsIDs, get_cat_ID("Bullets") );

	
	$q = new WP_Query(array( 'post_type' => 'post', 'category__not_in' =>  $excludeCatsIDs ) );
	if( $q -> have_posts() ) {
		while( $q -> have_posts() ) {

			$post = $q -> the_post();
			$id = get_the_ID();
			$ttl = get_the_title();
			$img = makeImg( featImg() );
			$xcrpt = get_the_excerpt();
			$cnt = get_the_content();

			?>


			<a href="#" data-reveal-id="cnt_<?php echo $id; ?>">

				<div class="entrada row">
					<div class="imagen large-3 columns">
						<?php echo $img; ?>
					</div>

					<div class="texto large-9 columns">
						<div class="texto large-12 columns">
							<h3><?php echo $ttl; ?></h3>
						</div>
						<div class="texto large-12 columns">
							<p><?php echo $xcrpt; ?></p>

						</div>
					</div>

				</div>

			</a>


			<div id="cnt_<?php echo $id; ?>" class="reveal-modal" data-reveal>
				<?php echo '<h1>'.$ttl.'</h1>'.$cnt; ?>
				<a class="close-reveal-modal">&#215;</a>
			</div>

			<?php

		}

	}

}






function lateral() {

	$q = new WP_Query(array('post_type'=>'post','category_name'=>'Destacada','posts_per_page'=>3));
	if( $q -> have_posts() ) {
		while( $q -> have_posts() ) {

			$post = $q -> the_post();
			$id = get_the_ID();
			$ttl = get_the_title();
			$img = makeImg( featImg() );
			$xcrpt = get_the_excerpt();
			$cnt = get_the_content();
			
		?>

		<a href="#" data-reveal-id="cnt_<?php echo $id; ?>">

			<div class="contenido_lateral">
				<div class="imagen">
					<?php echo $img;?>
				</div>
				<div class="titulo">
					<h6><?php echo $ttl;?></h6>
				</div>
			</div>

		</a>


		<div id="cnt_<?php echo $id; ?>" class="reveal-modal" data-reveal>
				<?php echo '<h1>'.$ttl.'</h1>'.$cnt; ?>
		</div>


		<?php
		}

	}

}




function iconoRed($str) {

	if($str=="fb") $catName = "Facebook";
	if($str=="tw") $catName = "Twitter";
	if($str=="tvs") $catName = "Televisa";
	if($str=="gg") $catName = "Google";


	
	$q = new WP_Query(array( 'category_name'=>$catName,'posts_per_page'=>1,'orderby'=>'rand','order'=>'ASC'));
	if( $q -> have_posts() ) {
		while( $q -> have_posts() ) {

			$post = $q -> the_post();
			$id = get_the_ID();
			$ttl = get_the_title();
			$img = makeImg( featImg() );
			$xcrpt = get_the_excerpt();
			$cnt = get_the_content();
			
			?>
			<div class="icono large-3 columns">
			<a href="#" data-reveal-id="cnt_<?php echo $id; ?>">
				<img src="<?php echo themeDir(); ?>/img/redes/<?php echo $str; ?>.png" alt=""></div>
			</a>

			<div id="cnt_<?php echo $id; ?>" class="reveal-modal" data-reveal>
				<?php echo '<h1>'.$ttl.'</h1>'.$cnt; ?>
				<a class="close-reveal-modal">&#215;</a>
			</div>

			<?php
		
		}
	}	
?>
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



	?>