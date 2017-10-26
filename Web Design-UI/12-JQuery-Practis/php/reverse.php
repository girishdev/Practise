<?php

	// if(isset($_GET['input'])){
		// echo 'Your value '.$_GET['input'];
	// }
	
	if(isset($_POST['name'], $_POST['string'])){
		echo '<strong>'.$_POST['name'] . '</strong> says ' . $_POST['string'];
	}
	

?>