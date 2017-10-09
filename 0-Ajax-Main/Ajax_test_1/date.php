<?php

	$date = date('d/m/Y');
	echo $date .'<br />';
	$email = $_POST['email'];
	
	$db = new mysqli('localhost','root','','studentdetails');
	if($result = $db->query("SELECT * FROM stdinfo where email='$email'")){
		if($count = $result->num_rows){
			echo 'Found Result..<br />';
			while($rows = $result->fetch_assoc()){
				echo '<b style="color:green;">'.$rows['name'] . '</b><br />';
			}
		} else {
			echo 'Not found';
		}
	} else {
		echo 'Not found';
	}

?>