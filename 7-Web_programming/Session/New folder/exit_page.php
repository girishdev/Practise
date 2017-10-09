<?php

	session_start();

	echo 'Hello: ' . $_SESSION['ufname'] = $_POST['fname'];
	echo '<br/ >';
	echo $_SESSION['usname'] = $_POST['sname'];
	echo '<br/ >';
	echo $_SESSION['uemail'] = $_POST['user_email'];
	echo '<br/ >';
	echo $_SESSION['upass'] = $_POST['user_pass'];
	echo '<br/ >';
	echo $_SESSION['uphno'] = $_POST['phno'];

?>
