<?php

// Check Session

if(!isset($_SESSION)){
	session_start();
}

// Site Domain Name 
defined('SITE_URL') || define('SITE_URL','http://'.$_SERVER['SERVER_NAME']);

// Directory Separator
defined('DS') || define('DS',DIRECTORY_SEPARATOR);

// Root Path
defined('ROOT_PATH') || define('ROOT_PATH',realpath(dirname(__FILE__).DS.'..'.DS));

// Classes Dir
defined('CLASSES_DIR') || define('CLASSES_DIR','classes');

// Pages Dir
defined('PAGES_DIR')   || define('PAGES_DIR','pages');

// Modules Dir
defined('MOD_DIR') || define('MOD_DIR','mod');

// Inc Dir
defined('INC_DIR') || define('INC_DIR','inc');

// Template Dir
defined('TEMPLATE_DIR') || define('TEMPLATE_DIR','template');

// Emails Path
defined('EMAILS_PATH') || define('EMAILS_PATH',ROOT_PATH.DS.'emails');

// Catalogue Path
defined('CATALOGUE_PATH') || define('CATALOGUE_PATH',ROOT_PATH.DS.'media'.DS.'catalogue');

// Include All Paths In Application 
set_include_path(implode(PATH_SEPARATOR,array(

	realpath(ROOT_PATH.DS.CLASSES_DIR),
	realpath(ROOT_PATH.DS.PAGES_DIR),
	realpath(ROOT_PATH.DS.MOD_DIR),
	realpath(ROOT_PATH.DS.INC_DIR),
	realpath(ROOT_PATH.DS.TEMPLATE_DIR),
	get_include_path()
)));
