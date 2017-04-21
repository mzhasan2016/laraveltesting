<?php

class QueryBuilder
{
	protected $pdo;
	
	public function __Construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}
	
	/*public	function fetchAll($table, $intoClass)
	{
		$statement = $this->pdo->prepare("select * from {$table}"); //Delegating at Video 14 - 17:27
		$statement->execute();
		//return $statement->fetchAll(PDO::FETCH_CLASS);
		//return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');  //How the Task is referenced here??!
		return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
	}*/
	
	public	function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);
	}
}

?>