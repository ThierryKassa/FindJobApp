<?php
//start session
session_start();
require_once 'config.php';
require_once 'helpers/system_helper.php';

//require_once 'helper/system_helper.php';

function my_loader($className){
	include 'lib/'.$className.'.php';
}
spl_autoload_register('my_loader');