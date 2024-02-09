<?php

$uri = $_SERVER['REQUEST_URI'] ;
// якщо у запиті є "?" то відрізаємо після нього
$pos = strpos( $uri, '?' ) ;
if( $pos > 0 ) {
	$uri = substr( $uri, 0, $pos ) ;
}
// створюємо маршрутизацію
$routes = [
	'/'                   => 'index.php',
	'/regexp'             => 'regexp.php',
	'/special_characters' => 'special_characters.php',
    '/groupies'           => 'groupies.php',
    '/quantifiers'        => 'quantifiers.php',
    '/anchors'            => 'anchors.php'
] ;

if( isset($routes[$uri])) {  // у маршрутах є запис
    $page_body = $routes[$uri];
    // include '_layout.php' ;
}
else {
    echo "$uri not found";
}
