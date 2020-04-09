<?php

class Category extends Application {

	/**
	* Store Table Name
	*
	* @var string
	*/
	private $table = 'categories';

	public function getCategories()
	{
		$sql = "SELECT * FROM `$this->table` ORDER BY `name` ASC";
		return $this->db->fetchAll($sql);
	}
}