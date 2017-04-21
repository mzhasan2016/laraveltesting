<?php

//$routes = [
//Below can be under register function name instead of define
$router->define([
	'' => 'controllers/index.php',
	'about' => 'controllers/about.php',
	'about/culture' => 'controllers/about-culture.php',
	'contact' => 'controllers/contact.php'
]);

//$router->define('' => 'controllers/index.php');
//$router->define('about' => 'controllers/about.php');
//In Laravel - Route::get('about' => 'controllers/about.php');

?>