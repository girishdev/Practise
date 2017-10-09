<?php
	session_start();
	if(isset($_POST['login_form'])) {
		$_SESSION['ufname'] = $_POST['fname'];
		$_SESSION['usname'] = $_POST['sname'];
		$_SESSION['uemail'] = $_POST['user_email'];
		$_SESSION['upass'] = $_POST['user_pass'];
		$_SESSION['uphno'] = $_POST['phno'];
	}else {
		$htmlOut = '<form action="exit_page.php" method="POST">
						<span>first name:</span><input type="text" name="fname" /><br /><br />
						<span>second name:</span><input type="text" name="sname" /><br /><br />
						<span>E-mail:</span><input type="text" name="user_email" /><br /><br />
						<span>Password:</span><input type="text" name="user_pass" /><br /><br />
						<span>Phone no:</span><input type="text" name="phno" /><br /><br />
						<input type="submit" name="login_form" value="Login" /><br /><br />
					</form>';
		echo $htmlOut;
	}

?>
