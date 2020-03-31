<?php

class Url{
	
	public static $pageName = 'page';
	public static $folderName = PAGES_DIR;
	public static $paramsName = array();

	public static function getParams($param){

		return isset($_GET[$param]) && !empty($_GET[$param]) ? $_GET[$param] : NULL ;

	}

	public static function cPage(){

		return isset($_GET[self::$pageName]) ? $_GET[self::$pageName] : 'index';
	}
	public static function getPage(){

		$page = self::$folderName.DS.self::cPage().'.php';
		$errorPage = self::$folderName.DS.'error.php';
		return is_file($page) ? $page : $errorPage;
	}

	public static function getAllParam(){
		if(!empty($_GET)){
			foreach($_GET as $key => $value ){
				if(!empty($value)){
					self::$paramsName[$key] = $vlaue;
				}
			}
		}
	}
}