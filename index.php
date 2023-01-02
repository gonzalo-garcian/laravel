<?php


$routes = [
	'/laravel/' => 'controllers/index.php',
	'/laravel/about' => 'controllers/about.php',
	'/laravel/contact' => 'controllers/contact.php',
	'/laravel/ourmission' => 'controllers/ourmission.php',
];

$route = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if(array_key_exists($route, $routes)){

	require $routes[$route];

}
else{

	require('controllers/404.php');
}

?>