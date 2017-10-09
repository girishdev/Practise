<?php

	$dbConnection = mysqli_connect('localhost','root','','Car_details');
	//$dbConnection = mysqli_connect('localhost','root');
	//$dbConnection = mysql_connect('127.0.0.1','root');
	if(!$dbConnection) {
		die('Could not connect: ' . mysql_error());
	}else {
		echo 'elsed';
		//$dbSel = mysql_select_db('Car_details' , $dbConnection);
	}

?>
