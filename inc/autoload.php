<?php

function __autoload($class_name){

	$className = explode('_',$class_name);
	$classPath = implode('/',$className);
	return $classPath;
	
}

function pre($name){

	echo '<pre>';
	var_dump($name);
	echo '</pre>';
}
//pre(__autoload('app_coantroller'));
?>