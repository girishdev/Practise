<?php

//	function __autoload($className) {
//		include_once "classes/$className.php";
//	}

spl_autoload_register(function($class){
	require_once "classes/{$class}.php";
});

	$abc = new abc();
	$abc->funabc();
	echo '<br />';echo '<br />';

	$xyz = new xyz();
	$xyz->funxyz();

?>