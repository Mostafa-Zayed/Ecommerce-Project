<?php

class Database{
	
	private $hostName = 'localhost';
	private $userName = 'root';
	private $password = '';
	private $databaseName = 'ecommerce';

	private $connection = 'false';
	public $lastQuery   = null;
	public $affectedRows = 0;

	public $insert_keys  = array();
	public $insert_values = array();
	public $update_sets  = array();

	public $id;

	public function __construct(){

		$this->connect();
	}

	private function connect()
	{
		$this->connection = mysqli_connect($this->hostName,$this->userName,$this->password,$this->databaseName);
		if(!$this->connection)
		{
			die('Database Connection is Faild');
		}
	}

	public function clsoe(){
		if(!mysqli_close($this->connection)){
			die('database closed');
		}
	}

	/**
	* given The Sql Statement 
	*
	* @param string $sql
	* @return mixed
	*/
	public function query($sql){

		$this->lastQuery = $sql;
		//die($this->lastQuery);

		$result = mysqli_query($this->connection,$sql);
		$this->displayQuery($result);
		return $result;
		
	}

	/**
	* check if query executed success 
	*
	* @param mixed 
	* @return void
	*/
	public function displayQuery($result)
	{

		if(!$result){

			$output = 'Database Is Faild :'.mysqli_error($this->connection).'<br>';
			$output .= 'Last Query Is : '.$this->lastQuery;
			die($output);
		}else{

			$this->affectedRows = mysqli_affected_rows($this->connection);
		}
	}

	/**
	* given sql statement and show data as array
	*
	* @param string $sql
	* @return array
	*/
	public function fetchAll($sql)
	{
		$result = $this->query($sql);
		$data = array();
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
		mysqli_free_result($result);
		return $data;
	}

	/**
	* given sql statment and show one row
	*
	* @param string $sql
	* @return mixed
	*/
	public function fetchOne($sql)
	{
		$row = fetchAll($sql);
		return array_shift($row);
	}

	/**
	* show Last id inserted in table
	*
	* @return mixed
	*/
	public function lastId()
	{
		return mysqli_insert_id($this->connection);
	}
}