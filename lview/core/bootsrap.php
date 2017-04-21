<?php

$config = require 'config.php';
require 'core/Router.php';
require 'core/Request.php';
require 'core/database/connection.php';
require 'core/database/QueryBuilder.php';

/*$pdo = Connection::make();
$query = new QueryBuilder($pdo);*/
//$query = new QueryBuilder(Connection::make()); //It is a global variable

//return new QueryBuilder(Connection::make()); 
return new QueryBuilder(Connection::make($config['database'])); 


?>