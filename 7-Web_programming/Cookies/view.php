<?php

	if(isset($_COOKIE['user'])) {
		echo 'Cookie is set and the value is: ' . $_COOKIE['user'];
	} else {
		echo "cookie is notset";
	}
	// echo $_COOKIE['user'];
	// echo $_COOKIE['test_val'];
	
?>