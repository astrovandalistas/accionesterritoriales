<?php
if( function_exists( 'get_stylesheet_directory_uri') )
	$assetsPath = get_stylesheet_directory_uri() .'/';
else
	$assetsPath = '';

$assets = '';
$assets .= '<script src="'.$assetsPath.'js/app.js"></script>';

echo $assets;

?>  