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
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
		
		<div class="content">

			<div class="menu clearfix">
				<ul>
					<li><a href="index.php?module=home">Home</a></li>
					<li><a href="index.php?module=about">About us</a></li>
					<li><a href="index.php?module=contact">Contact us</a></li>
					<li><a href="index.php?module=blog">Blog</a></li>
					<li><a class="wellcome" href="index.php?module=profile"><?php echo "<b>Hello ".$_SESSION['name']."</b>"; ?></a></li>
					<li><a href="index.php?module=logout"><?php echo "LogOut"; ?></a></li>
				</ul>
			</div>
			<div class="man_div">
				<?php

					if(empty($_SESSION['email'])){
						header("Location: login.php");
					}
					
					if(isset($_REQUEST['module']) && !empty($_REQUEST['module'])) {
						switch($_REQUEST['module']) {
							case 'home' :
								require_once('home.php');
								break;
							case 'about' :
								require_once('about.php');
								break;
							case 'contact' :
								require_once('contact.php');
								break;
							case 'blog' :
								require_once('blog.php');
								break;
							case 'profile' :
								require_once('profile.php');
								break;
							case 'logout' :
								require_once('logout.php');
								break;
							default:
								require_once('index.php');
						}
					} else {
						require_once('home.php');
					}
					
				?>
			</div>

		</div>
			
	</body>
</html>
