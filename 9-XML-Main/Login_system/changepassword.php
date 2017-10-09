<?php
	session_start();
	if(!file_exists('users/' . $_SESSION['username'] . '.xml')){
		header('Location: login.php');
		die;
	}
	$error = false;
	if(isset($_POST['change'])){
		$old = $_POST['o_password'];
		$new = $_POST['n_password'];
		$c_new = $_POST['c_n_password'];
		
		$xml = new SimpleXMLElement('users/' . $_SESSION['username'] . '.xml', 0, true);
		if($old == $xml->password){
			if($new == $c_new){
				$xml->password = $new;
				$xml->asXML('users/' . $_SESSION['username'] . '.xml');
				header('Location: logout.php');
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
	<title>Change password page</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
	<h1>Change password Page</h1>
	<form method="POST" action="">
		<?php
			if($error){
				echo 'passwords do not match.';
			}
		?>
		<p>Old password: <input type="password" name="o_password" /></p>
		<p>New password: <input type="password" name="n_password" /></p>
		<p>confirm new password: <input type="password" name="c_n_password" /></p>
		<p><input type="submit" name="change" value="Change password" /></p>
	</form>
	<hr />
	<a href="index.php">User home</a>
</body>

</html>
