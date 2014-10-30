<?php
if( function_exists( 'get_stylesheet_directory_uri') )
	$assetsPath = get_stylesheet_directory_uri() .'/';
else
	$assetsPath = '';

$assets = '';
$assets .= '<link rel="stylesheet" href="'.$assetsPath.'css/app.css" />';

$assets .= '<script src="'.$assetsPath.'bower_components/modernizr/modernizr.js"></script>';
$assets .= '<link rel="stylesheet" href="'.$assetsPath.'bower_components/slick.js/slick/slick.css" />';
$assets .= '<link href="http://fonts.googleapis.com/css?family=Cinzel:400,700" rel="stylesheet" type="text/css">';
$assets .= '<script src="'.$assetsPath.'bower_components/jquery/dist/jquery.min.js"></script>';
$assets .= '<script src="'.$assetsPath.'bower_components/foundation/js/foundation.min.js"></script>';
$assets .= '<script src="'.$assetsPath.'bower_components/slick.js/slick/slick.min.js"></script>';

echo $assets;

?>  