<?php
	$error = false;
	if(isset($_POST['login'])){
		$username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
		$password = $_POST['password'];

		if(file_exists('users/' . $username . '.xml')){
			$xml = new SimpleXMLElement('users/' . $username . '.xml', 0, true);
			if($password == $xml->password){
				session_start();
				$_SESSION['username'] = $username;
				header("Location: index.php");
				die;
			}
		}
		$error = true;
		
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Login</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
	<h1>Login form</h1>
	<form method="POST" action="">
		<p>username: <input type="text" name="username" /></p>
		<p>password: <input type="password" name="password" /></p>
		<p>
			<?php
				if($error) {
					echo '<p>Invalid username and/or password</p>';
				}
			?>
		</p>
		<p><input type="submit" name="login" value="Login " /></p>
	</form>
	<a href="register.php">Register</a>
</body>

</html>
