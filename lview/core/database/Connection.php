<?php

class Connection
{
	public static function make($config)
	{
		try{
			//return new PDO('mysql:host=localhost;dbname=mytodo', 'root', ''); //Pass it through or inject it??!
			return new PDO(
			$config['connection'].';dbname=' .$config['name'], 
			$config['username'], 
			$config['password'],
			$config['options']
			);
		} catch (PDOException $e){
			die($e->getMessage());
		}
	}	
}

//$pdo = connection::make();

?>