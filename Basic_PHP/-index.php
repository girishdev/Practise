<?php
	session_start();
	/*require_once('Array.php');
	require_once('Basic_php.php');
	require_once('Function.php');
	require_once('object_oriented_programing.php');
	require_once('test_prob.php');/**/
	
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$mysql_db = 'personal_db';
	
	//echo 'Custom Error Messages';
	class ServerException extends Exception {
		public function showSpecific(){
			$report_error = 'Error thrown on line '.$this->getLine().' in '.$this->getFile();
			$andtrace = $this->getTrace();
			var_dump($andtrace);
			echo '<br />';
			return $report_error;
			echo '<br />';
		}
	}
	class DatabaseException extends Exception {
		public function showSpecific(){
			$report_error = 'Error Thrown on line '.$this->getLine().' in '.$this->getFile();
			$andtrace = $this->getTrace();
			var_dump($andtrace);
			echo '<br />';
			return $report_error;
			echo '<br />';
		} 
	}
	
	try {
		
		if(!@mysql_connect($mysql_host, $mysql_user, $mysql_pass)){
			throw new ServerException();
		} elseif(!@mysql_select_db($mysql_db)){
			throw new DatabaseException();
		} else {
			echo 'Connected successfully.';
		}
	} catch (ServerException $ex){
		echo $ex->showSpecific();		
	} catch (DatabaseException $ex){
		echo $ex->showSpecific();
	}
	
	/*echo 'Custom Exceptions';
	class ServerException extends Exception {}
	class DatabaseException extends Exception {}
	
	try {
		
		if(!@mysql_connect($mysql_host, $mysql_user, $mysql_pass)){
			throw new ServerException('Could not connect to server.');
		} elseif(!@mysql_select_db($mysql_db)){
			throw new DatabaseException('Could not select Database.');
		} else {
			echo 'Connected successfully.';
		}
	} catch (ServerException $ex){
		echo 'Error: '.$ex->getMessage();		
	} catch (DatabaseException $ex){
		echo 'Error: '.$ex->getMessage();
	}/**/

	if(isset($_POST['login_form'])){
		echo '<h1>login successfully: </h1>';
		$user_name = $_POST['username'];
		$_SESSION['username'] = $user_name;
		echo 'Hi '.$_SESSION['username'].' you are loged in successfully';
		//header("Location: object_oriented_programing.php");
	} elseif(isset($_GET['logout'])){
		//session_unregister('username');
		//session_unset
		session_destroy();
	}
	/*else {
		echo 'Account is invalid: ';
	}/**/
	//$dbConnection = mysqli_connect('localhost','root','','personal details');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>untitled</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" src="js/jquery-2.1.3.min.js"> </script>
	<script type="text/javascript" src="js/jquery.fancybox.pack.js"> </script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#foo input#checkboxes").click(function() {
				if ($(this).is(':checked')) {
					$(".url_form").appendTo("#foo");
					$(".url_form").css({'display':'block'});
				} else {
					$(".url_form").css({'display':'none'});
				}
			});
		});
	</script>
</head>

<body>

<?php

	//echo 'This is index.php file';
	
	if(isset($_POST['sub_form'])){
		
		if(isset($_POST['languages'])){
			foreach($_POST['languages'] as $lang){
				$test = $lang;
				switch($lang){
					case 'PHP':
						echo 'Php is Awesome'.'<br />';
						$php = $lang;
						//echo 'Hi this is:--- '.$php;
						break;
					case 'JAVA':
						echo 'Java is good language'.'<br />';
						$java = $lang;
						//echo 'Hi this is:--- '.$java;
						break;
					case 'HTML':
						echo 'Html is a basic language'.'<br />';
						$html= $lang;
						//echo 'Hi this is:--- '.$html;
						break;
					case 'JAVASCRIPT':
						echo 'Javascript and jquery is wonderfull languages'.'<br />';
						$javascript = $lang;
						//echo 'Hi this is:--- '.$javascript;
						break;
					default:
						echo 'You must know any one of that languages'.'<br />';
						break;
				}
				//echo '<h3>TEST</h3>'.$test;
			}
		}else {
			echo 'You must know any one of that languages';
		}
		//echo "<h3>$javascript</h3>";
		
	} elseif(isset($_POST['file_submit'])){
		
		if(file_exists("upload/" . $_FILES["photo"]["name"])){
			echo '<span>'.$_FILES["photo"]["name"] . '</span>' . " <h4 style=\"color:red\">is already exist.</h4>";
		} else {
			if($_FILES["photo"]["error"] > 0) {
				echo "Error".$_FILES["photo"]["error"].'<br />';
			}else {				
				//$maxsize = 5 * 1024 *1024;
				$maxsize = 1024 * 1024;
				if($_FILES["photo"]["size"] > $maxsize) {
					//echo "Erroe: File size is larger than the allowed limit.";
					die("Erroe: File size is larger than the allowed limit.");
				} else {
					echo "<b>File Name: </b>" . $_FILES["photo"]["name"] . '<br /><br />';
					echo "<b>File Type: </b>" . $_FILES["photo"]["type"] . '<br /><br />';
					echo "<b>File Size: </b>" . $_FILES["photo"]["size"] . '<br /><br />';
					echo "<b>Stored in: </b>" . $_FILES["photo"]["tmp_name"] . '<br /><br />';
					var_dump($_FILES["photo"]) . '<br /><br />';
					
					move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/".$_FILES["photo"]["name"]) . '<br /><br />';
					echo '<br />'.'<h4 style="color:green;">Successfully uploaded</h4>';					
				}
			}
		}
	} else {
		//header('Location: https://www.google.co.in/');
		//header("HTTP/1.0 404 Not Found");
		//header('HTTP/1.1 404 Not Found');
		
		echo $htmlmenu = '<div class="menu">
							<ul style="color:red; list-style: none; float: left; width: 100%;">
								<li style="float: left; width: 10%;"><a href="../Links_imp/php_real_content.php">PHP real content</a></li>
								<li style="float: left; width: 10%;"><a href="Strings.php">Strings</a></li>
								<li style="float: left; width: 10%;"><a href="Array.php">Arrays</a></li>
								<li style="float: left; width: 10%;"><a href="../Links_imp/imp.php">Important lisks</a></li>
								<li style="float: left; width: 10%;"><a href="../Links_imp/Points_noted.php">Points noted</a></li>
								<li style="float: left; width: 10%;"><a href="Function.php">Function</a></li>
								<li style="float: left; width: 10%;"><a href="test_prob.php">Test problems</a></li>
								<li style="float: left; width: 15%;"><a href="Oop basic/object_oriented_programing.php">Object oriented programing</a></li>
								<li style="float: left; width: 15%;"><a href="index.php?action=logout">Log out</a></li>
							</ul>
						  </duv>';
						  
		echo $htmllogin = '<form class="login_form" action="#" method="POST">
								<h2>Login form</h2>
								<label for="fileSelect">User name:</label>
								<input type="text" name="username" /><br>
								<label for="fileSelect">Password:</label>
								<input type="text" name="password" /><br>
								<input type="submit" name="login_form" value="Login" >
						   </form>';

		$htmlOut = '<h2>This is simple form just for testing purpose: </h2>
					<form  method="POST" action="#">
						<span>Name: </span><input type="text" name="name" /><br /><br />
						<span>You are from: </span>
						<select name="orderby">
							<option vlaue="empty">Select your country</option>
							<option vlaue="name">Country</option>
							<option vlaue="city">City</option>
							<option vlaue="zip">Zip</option>
						</select><br /><br />
						<input type="checkbox" name="languages[]" value="PHP">PHP<br /><br />
						<input type="checkbox" name="languages[]" value="JAVA">JAVA<br /><br />
						<input type="checkbox" name="languages[]" value="HTML">HTML/CSS<br /><br />
						<input type="checkbox" name="languages[]" value="JAVASCRIPT">JAVASCRIPT/JQUERY<br /><br />
						<input type="submit" name="sub_form" value="Submit" />					
				    </form>';
		echo $htmlOut;
		
		$htmlOut2 = '<form action="#" method="post" enctype="multipart/form-data">
						<h2>Upload File</h2>
						<label for="fileSelect">Filename:</label>
						<input type="file" name="photo" id="fileSelect"><br>
						<input type="submit" name="file_submit" value="Upload">
					</form>';
		echo $htmlOut2;		
	}/**/

?>
</body>

</html>