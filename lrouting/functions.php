<?php

function dd($data){
	echo "<pre>";
	die(var_dump($data));
	echo "</pre>";
}


/*function connectToDb()
{
	try {
		return new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');
	} catch (PDOException $e) {
		//die('Could not connect.');
		die($e->getMessage());
	}	
}*/

/*function fetchAllTasks($pdo)
{
	$statement = $pdo->prepare('select * from todos');
	$statement->execute();
	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}*/
	
?>