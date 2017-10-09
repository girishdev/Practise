 <?php
	$error = array();
	if(isset($_POST['login'])){
		$username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
		$email = $_POST['email'];
		$password = $_POST['password'];
		$c_password = $_POST['c_password'];
		
		if(file_exists('users/' . $username . '.xml')){
			
			$error[] = 'Username already exists';
			
		} elseif($username == '') {
			
			$error[] = 'Username is blank';
			
		} elseif($email == '') {
			
			$error[] = 'Email is blank';
			
		} elseif($password == '' || $c_password == '')  {
			
			$error[] = 'password are blank';
			
		} elseif($password != $c_password){
			
			$error[] = 'password do not match';
			
		} elseif(count($error) == 0) {
			$xml = new SimpleXMLElement('<user></user>');
			$xml->addChild('password', $password);
			$xml->addChild('email',$email);
			$xml->asXML('users/' . $username . '.xml');
			header('Location: login.php');
			die;
		}
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Register</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
	<h1>Register</h1>
	<form method="POST" action="">
		<p>Username: <input type="text" name="username" /></p>
		<p>Email: <input type="text" name="email" /></p>
		<p>password: <input type="password" name="password" /></p>
		<p>Confirm password: <input type="password" name="c_password" /></p>
		<p>
			<?php
				if(count($error) > 0) {
					echo '<ul>';
						foreach($error as $e) {
							echo '<li>' . $e . '</li>';
						}
					echo '</ul>';
				}
			?>
		</p>
		<p><input type="submit" name="login" value="Login " /></p>
	</form>	
	
</body>

</html>
