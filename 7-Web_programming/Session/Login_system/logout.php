<?php
	
	echo '<b class="center green">' . $_SESSION['name'] . ' LogOut successfull</b>';
	session_destroy();
	header('Refresh: 2; url=login.php');
	
?>