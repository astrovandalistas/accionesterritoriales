<?php
/*
Template Name: XML
*/


query_posts('orderby=rand&showposts=1'); 
if (have_posts()) {
 while (have_posts()) {
 	the_post();
 	$title = get_the_title();
 	$date = get_the_date();
 	$author = get_the_author();
 	$content = get_the_content();

 }
}




// Set the content type to be XML, so that the browser will   recognise it as XML.
header( "content-type: application/xml; charset=ISO-8859-15" );

// "Create" the document.
$xml = new DOMDocument( "1.0", "ISO-8859-15" );

// Create some elements.
$xml_album = $xml->createElement( "Post" );
$xml_track = $xml->createElement( "Title", $title );
$xml_album->appendChild( $xml_track );
$xml_track = $xml->createElement( "Author", $author );
$xml_album->appendChild( $xml_track );
$xml_track = $xml->createElement( "Date", $date );
$xml_album->appendChild( $xml_track );
$xml_track = $xml->createElement( "Content", $content );
$xml_album->appendChild( $xml_track );

$xml_album->appendChild( $xml_track );

$xml->appendChild( $xml_album );

// Parse the XML.
print $xml->saveXML();

?>