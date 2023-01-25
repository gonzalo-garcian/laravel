<?php


$routes = [
	'/' => 'controllers/index.php',
	'/about' => 'controllers/about.php',
	'/contact' => 'controllers/contact.php',
	'/ourmission' => 'controllers/ourmission.php',
    '/notes' => 'controllers/notes.php',
];

$route = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if(array_key_exists($route, $routes)){

	require $routes[$route];

}
else {

	require('controllers/404.php');
}

