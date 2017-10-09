<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			session_start();
			$db = new mysqli('localhost','root','','login system');
			if($db->connect_errno) {
				die("Sorry we are having some problem");
			}
		?>
		<title>Login system</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		
		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/login_system.js"></script>
		
	</head>
	<body>
		<div class="container clearfix">
			<div>
				<div class="login_form">
					<form method='POST'>
						<h2>Login Form: </h2>
						<table>
							<tr><td><span>Email: </span></td><td><input type='email' name='email' /></td></tr>
							<tr><td><span>Password: </span></td><td><input type='password' name='password' /></td></tr>
							<tr><td><input type='submit' name='login' value="Login" /></td>
							<tr><td class="create_new">Create New account</td></tr>
						</table>
					</form>
				</div>
				<div class="new_creation">
					<form method='POST'>
						<h2>Create New Login: </h2>
						<table>
							<tr><td><span>Name: </span></td><td><input type='text' name='fname' /></td></tr>
							<tr><td><span>Male: </span></td><td><input type='radio' name='gender' value="Male"/></td></tr>
							<tr><td><span>Female: </span></td><td><input type='radio' name='gender' value="Female"/></td></tr>
							<tr><td><span>Phone no: </span></td><td><input type='text' name='phone' /></td></tr>
							<tr><td><span>Country: </span></td><td><input type='text' name='country' /></td></tr>
							<tr><td><span>Email: </span></td><td><input type='email' name='email' /></td></tr>
							<tr><td><span>Password: </span></td><td><input type='password' name='password' /></td></tr>
							<tr><td><input type='submit' name='registration' value="Submit" /></td>
							<tr><td class="login">I have an account</td></tr>
						</table>
					</form>
				</div>
				<?php

					if(isset($_POST['login'])) {
						if(!empty($_POST['email']) && !empty($_POST['password'])) {
							$email_user = $_SESSION['email'] = $_POST['email'];
							$pass_user = $_POST['password'];
							$db_name = '';
							$db_email = '';
							$db_pass = '';
							if($result = $db->query("SELECT * FROM login_system WHERE email = '{$email_user}' AND password = '{$pass_user}' ")){
								while($row = $result->fetch_object()){
									$db_name = $_SESSION['name'] = $row->name;
									$db_email = $row->email;
									$db_pass = $row->password;
								}
								if($email_user == $db_email && $pass_user == $db_pass) {
									header("Location: index.php");
								} else {
									echo '<b class="red">Email and Password mismatch: </b>';
								}
							}
						} else {
							echo '<b class="center red">Please fill the fields properly...</b>';
						}
					} elseif(isset($_POST['registration'])) {
						$name = $_POST['fname'];
						$gender = $_POST['gender'];
						$phone = $_POST['phone'];
						$country = $_POST['country'];
						$email = $_POST['email'];
						$password = $_POST['password'];

						if($insert = $db->query("INSERT INTO login_system (name,gender,phone,country,email,password) VALUES 
									('{$name}','{$gender}','{$phone}','{$country}','{$email}','{$password}')")) {
							echo '<b class="green">Registration Successfull</b>';
							header('Refresh: 2;url=login.php');
						} else {
							echo "Failed in inserting...";
						}
					}

				?>
			</div>
		</div>

	</body>
</html>
