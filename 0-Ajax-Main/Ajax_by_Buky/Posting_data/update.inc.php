<?php

	echo $updated_text = $_POST['textpost'];			
	/*$dbConnection = mysqli_connect('localhost','root','','studentdetails');
	$sqlQuery = "INSERT INTO stdinfo (name) VALUES ('".$updated_text."')";
	
	if(mysqli_query($dbConnection, $sqlQuery)){
		echo "<br />$updated_text sucessfully inserted<br />";
	} else {
		echo error($dbConnection);
	}/**/

?>