<?php

class Business extends Application{

	/**
	* Store Table Name 
	*
	* @var string 
	*/
	private $table = 'business';

	/**
	* Get All rows From Table Business
	*
	* @return mixed
	*/
	public function getBusiness()
	{
		$sql = "SELECT * FROM `$this->table` WHERE `id` = 1";
		//die($sql);
		return $this->db->fetchAll($sql);
	}

	/**
	* Get Vat Rate From Table
	*
	* @return mixed
	*/
	public function getVatRate()
	{

	}

}