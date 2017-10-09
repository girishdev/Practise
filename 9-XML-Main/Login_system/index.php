<?php
	session_start();
	if(!file_exists('users/' . $_SESSION['username'] . '.xml')){
		header('Location: login.php');
		die;
	}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>User page</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
	<h1>User Page</h1>
	<h2>Welcome, <?php echo $_SESSION['username']?></h2>
	<table>
		<tr>
			<td>Username</td>
			<td>Email</td>
		</tr>
		<tr>
			<?php
				$files = glob('users/*.xml');
				foreach($files as $file){
					$xml = new SimpleXMLElement($file, 0, true);
					echo '
							<tr>
								<td>'.basename($file, '.xml').'</td>
								<td>'.$xml-> email.'</td>
							</tr>
						 ';
					
					
				}
				/**/
			?>
		</tr>		
	</table>
	<hr />
	<a href="changepassword.php">Change password</a>
	-
	<a href="logout.php">Logout</a>
</body>

</html>
