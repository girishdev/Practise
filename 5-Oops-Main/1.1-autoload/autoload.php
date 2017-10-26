<?php

	function __autoload($className) {
		include_once "classes/$className.php";
	}

	$abc = new abc();
	$abc->funabc();
	echo '<br />';
	$xyz = new xyz();
	$xyz->funxyz();

?>