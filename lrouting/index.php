<?php

//require 'functions.php';
/*require 'database/connection.php';
require 'database/QueryBuilder.php';*/

//require 'bootstrap.php';
$database = require 'core/bootsrap.php';
//$router = new Router;
//require 'routes.php';

var_dump(trim($_SERVER['REQUEST_URI'], '/'));
$uri =(trim($_SERVER['REQUEST_URI'], '/'));

//require $router->direct($uri);
//require $router->direct('');
//require $router->direct('about/culture');
//require $router->direct($uri);

$router = Router::load('routes.php');
// Does not work for me 20.35 ->direct('');
//require $router->direct('contact');
require $router->direct($uri);

//require $router->dirct(Request::uri());







//require 'Task.php';

//$tasks = $query->fetchAll('todos');
//$tasks = $database->selectAll('todos');
 
//var_dump($tasks[0]->foobar()); // It can be done here
//var_dump($_SERVER);
//require('index.view.php');
//var_dump($tasks[0]->foobar()); // It can be dne here as well

?>