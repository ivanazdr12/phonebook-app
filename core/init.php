<?php
//Include Config
require_once('config/config.php');

//Autoload
function sql_autoload_register($class_name){
	require_once('libraries/'.$class_name.'.php');
}