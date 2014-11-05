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
	$content = preg_replace("/<img[^>]+\>/i", "", $content);
	$content = preg_replace('/<a href=\"(.*?)\">(.*?)<\/a>/', "", $content);

 	$excerpt = get_the_excerpt();
	$excerpt = preg_replace("/<img[^>]+\>/i", "", $excerpt);
	$excerpt = preg_replace('/<a href=\"(.*?)\">(.*?)<\/a>/', "", $excerpt);

/*
	$doc = new DOMDocument();
	$doc->loadHTML($excerpt);    
	$selector = new DOMXPath($doc);

	$result = $selector->query('//p');

	// loop through all found items
	foreach($result as $node) {
	    var_dump( $node->nodeValue );
	}
*/


 }
}


// Set the excerpt type to be XML, so that the browser will   recognise it as XML.
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
$xml_track = $xml->createElement( "Content", $excerpt );
$xml_album->appendChild( $xml_track );

//$xml_album->appendChild( $xml_track );

$xml->appendChild( $xml_album );

// Parse the XML.
print $xml->saveXML();


?>