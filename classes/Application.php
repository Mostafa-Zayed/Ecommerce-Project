<?php

class Application {

	/**
	* Databas Object 
	*
	* @var object $db
	*/
	public $db;

	/**
	* Constructor 
	*
	*/
	public function __construct(){

		$this->db = new Database();
	}
}