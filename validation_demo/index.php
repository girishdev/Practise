<?php
	session_start();
	$dbConnection = mysqli_connect('localhost','root','','Car_details');
	//require_once('init/sqlconnect.php');
	if(isset($_REQUEST['login_form']) || isset($_REQUEST['login_formsec'])) {
		//echo $_SESSION['first_name'] = $_REQUEST['first_name'];
		//echo $_SESSION['last_name'] = $_REQUEST['last_name'];
		//echo $_SESSION['email'] = $_REQUEST['email'];
		//echo $_SESSION['age'] = $_REQUEST['age'];
		//echo $_SESSION['phone_no'] = $_REQUEST['phone_no'];
		//echo $_SESSION['address_one'] = $_REQUEST['address_one'];
		//echo $_SESSION['address_two'] = $_REQUEST['address_two'];
		//echo $_SESSION['upload_Photo'] = $_REQUEST['upload_Photo'];
	}
?>
<!DOCTYPE html>
<!--Code by Chris Youderian, ContactMetrics.com, http://contactmetrics.com/blog/validate-contact-form-jquery, Code released under an MIT license, http://opensource.org/licenses/MIT -->
<html lang="en">
	<head>
		<link rel="stylesheet" href="css/colorbox.css" />
		
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
		<script type='text/javascript' src='js/jquery.min.js'></script>
		<script type='text/javascript' src='js/jquery.colorbox.js'></script>
    </head>
	
	<!-- Styles -->
	<style>
		body {
			font:12px/1.2 Verdana, sans-serif;
			padding:0 10px;
		}
		a:link, a:visited {
			text-decoration:none;
			color:#416CE5;
			border-bottom:1px solid #416CE5;
		}
		h2 {
			font-size:13px;
			margin:15px 0 0 0;
		}

		#second_res label,
		#contact label{
			display: inline-block;
			width: 100px;
			text-align: right;
		}
		#contact_submit{
			padding-left: 100px;
		}
		#second_res div,
		#contact div{
			margin-top: 1em;
		}
		textarea{
			vertical-align: top;
			height: 5em;
		}
			
		.error{
			display: none;
			margin-left: 10px;
		}		
		
		.error_show{
			color: red;
			margin-left: 10px;
		}
		
		input.invalid, textarea.invalid{
			border: 2px solid red;
		}
		
		input.valid, textarea.valid{
			border: 2px solid green;
		}
		.classhover {
			background: red;
			color: #fff;
			font-size: 16px;
			font-weight: bold;
		}
		.edit_form label {
			width: 150px;
			display: inline-block;
		}
		.edit_form > div {
			margin-bottom: 20px;
		}
	</style>
	
	<!-- JavaScript Code -->
	<script>
		$(document).ready(function() {
			$(".login_popup").colorbox({inline:true, width:"50%"});
			//$(".second_form").colorbox({inline:true, width:"50%"});
			//$(".third_form").colorbox({inline:true, width:"50%"});
			$(".inline").colorbox({inline:true, width:"50%"});
			$(".ajax").colorbox();
			<!-- Real-time Validation -->
				<!--Name can't be blank-->
				/*$('#contact_name').on('input', function() {
					var input=$(this);
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
				
				<!--Email must be an email -->
				$('#contact_email').on('input', function() {
					var input=$(this);
					var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
					var is_email=re.test(input.val());
					if(is_email){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
				
				<!--Website must be a website -->
				$('#contact_website').on('input', function() {
					var input=$(this);
					if (input.val().substring(0,4)=='www.'){input.val('http://www.'+input.val().substring(4));}
					var re = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
					var is_url=re.test(input.val());
					if(is_url){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
				
				<!--Message can't be blank -->
				$('#contact_message').keyup(function(event) {
					var input=$(this);
					var message=$(this).val();
					console.log(message);
					if(message){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}	
				});
		
			<!-- After Form Submitted Validation-->
			$("#contact_submit button").click(function(event){
				var form_data=$("#contact").serializeArray();
				var error_free=true;
				for (var input in form_data){
					var element=$("#contact_"+form_data[input]['name']);
					var valid=element.hasClass("valid");
					var error_element=$("span", element.parent());
					if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
					else{error_element.removeClass("error_show").addClass("error");}
				}
				if (!error_free){
					event.preventDefault(); 
				}
				else{
					alert('No errors: Form will be submitted');
				}
			}); /* */
		});
	</script>
	
    <body>

		<!-- This contains the hidden content for inline calls -->
		<div style='display:none'>
			<div id='inline_content' style='padding:10px; background:#fff;'>
			<p><strong>This content comes from a hidden element on this page.</strong></p>
			<p>The inline option preserves bound JavaScript events and changes, and it puts the content back where it came from when it is closed.</p>
			<p><a id="click" href="#" style='padding:5px; background:#ccc;'>Click me, it will be preserved!</a></p>
			
			<p><strong>If you try to open a new Colorbox while it is already open, it will update itself with the new content.</strong></p>
			<p>Updating Content Example:<br />
			<a class="ajax" href="../ajax_content/ajax.html">Click here to load new content</a></p>
			</div>
		</div>
		
		<?php
			
			if(isset($_REQUEST['login_formsec']) || isset($_REQUEST['login_form'])) {	
				$uploaddir = 'uploads/';
				$uploadfile = $uploaddir . basename($_FILES['image']['name']);
				//if(isset($_REQUEST['login_form'])) {}
				if((move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile))){
					echo '<h3>Hello</h3>';
					$sqlQry = "INSERT INTO customer (first_name,last_name,age,email,phone_no,address_one,adress_two,upload_Photo) 
					values ('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['age']."','".$_POST['email']."',
					'".$_POST['phone_no']."','".$_POST['address_one']."','".$_POST['address_two']."','".$uploadfile."')";
					
					$qryResult = mysqli_query($dbConnection, $sqlQry);
					
					echo '<br />'.'<b>FILE NAME:-</b>' . $file_name = $_FILES['image']['name'] . '<br />';
					echo '<br />'.'<b>FILE SIZE:-</b>' . $file_size =$_FILES['image']['size'] . '<br />';
					echo '<br />'.'<b>FILE TMP:-</b>' . $file_tmp = $_FILES['image']['tmp_name'] . '<br />';
					echo '<br />'.'<b>FILE TYPE:-</b>' . $file_type = $_FILES['image']['type'] . '<br />';

					/*if(isset($_REQUEST['file_tmp'])){
						echo 'pass';
					} else {
						echo '<br />' . 'No image' . '<br />';
					}/**/
					
					if( !$qryResult) {
						echo 'Unable to execute query : ' . mysql_error() .'<br />';
					}else {
						echo 'User '.$_POST['first_name'].' Created successfully <br />';
					}
					echo 'Your name:' . $_REQUEST['first_name'];
					echo '<br />';
					echo 'Your Email ID:' . $_REQUEST['email'];
					echo '<br />';
				}
			} elseif(isset($_REQUEST['email_sub'])) {
				$emailid = $_POST['email_id'];
				$sqlQry = "SELECT * FROM customer WHERE email='$emailid'";
				$result = mysqli_query($dbConnection, $sqlQry);
				$db_id = '';
				//mysql_fetch_assoc
				while($row = mysqli_fetch_assoc($result)) {
					$db_id = $row['email'];
					/*$first_name = $row['first_name'];
					$last_name = $row['last_name'];
					$age = $row['age'];
					$db_id = $row['email'];
					$phone = $row['phone_no'];
					$address_1 = $row['address_one'];
					$address_2 = $row['adress_two'];
					$Photo = '<img src='.$row['upload_Photo'].' width="100" height="70" />';*/
					$htmlOut = '<form class="edit_form" method="POST" action="" enctype="multipart/form-data">
									<div>
										<label for="contact_name">First name:</label>
										<input type="text" name="fname_view" value='.$row['first_name'].' />
									</div>								
									<div>
										<label for="contact_name">Last name:</label>
										<input type="text" name="lname_view" value='.$row['last_name'].' />
									</div>
									<div>
										<label for="contact_name">Age:</label>
										<input type="text" name="age_view"  value='.$row['age'].' />
									</div>
									<div>
										<label for="contact_name">E-mail:</label>
										<input type="text" name="email_view" value='.$row['email'].' />
									</div>
									<div>
										<label for="contact_name">phone:</label>
										<input type="text" name="phone_view" value='.$row['phone_no'].' />
									</div>
									<div>
										<label for="contact_name">Address1:</label>
										<input type="text" name="address_1_view" value='.$row['address_one'].' />
									</div>
									<div>
										<label for="contact_name">Address2:</label>
										<input type="text" name="address_2_view" value='.$row['adress_two'].' />
									</div>
									<div>
										<label for="contact_name">Image:</label>
										<img src='.$row['upload_Photo'].' width="100" height="70" />
									</div>
									<div>
										<input type="submit" name="from_edit" value="Edit" />
									</div>
								</form>';
					echo $htmlOut;
				}
				if($emailid == $db_id) {
					/*echo $first_name . '<br />';
					echo $last_name . '<br />';
					echo $age . '<br />';
					echo $db_id . '<br />';
					echo $phone . '<br />';
					echo $address_1 . '<br />';
					echo $address_2 . '<br />';
					echo $Photo . '<br />';/**/
				} else {
					echo '<h3>No match found</h3>';
				}
			} elseif(isset($_REQUEST['from_update'])) {
				echo 'We are in update';
				$fname_edit = $_REQUEST['fname_edit'];
				$lname_edit = $_REQUEST['lname_edit'];
				$age_edit = $_REQUEST['age_edit'];
				$email_edit = $_REQUEST['email_edit'];
				$phone_edit = $_REQUEST['phone_edit'];
				$address_1_edit = $_REQUEST['address_1_edit'];
				$address_2_edit = $_REQUEST['address_2_edit'];
				$image_edit = $_REQUEST['image_edit'];
				$sqlQry = "UPDATE customer SET first_name='$fname_edit',last_name='$lname_edit',age='$age_edit',email='$email_edit',phone_no='$phone_edit',
				address_one='address_1_edit',adress_two='address_2_edit',upload_Photo='$image_edit' WHERE email='$email_edit'";/**/
				$resultObj = mysqli_query($dbConnection, $sqlQry);
				if(!resultObj){
					die("Unable to excecute".mysql_error());
				}else {
					echo 'Record '.$_POST['fname_edit']. ' Updated';	
				}
			} elseif(isset($_REQUEST['from_edit'])) {
				echo '<h3>From edit<h3>'.'<br />';
				$emailid = $_REQUEST['email_view'];
				$sqlQry = "SELECT * FROM customer WHERE email='$emailid'";
				$result = mysqli_query($dbConnection, $sqlQry);
				$fname = '';
				while($sqlRow = mysqli_fetch_assoc($result)) {
					$fname = $sqlRow['first_name'];
					$htmlOut = '<form class="edit_form" method="POST" action="" enctype="multipart/form-data">
									<div>
										<label for="contact_name">First name:</label>
										<input type="text" name="fname_edit" value='.$sqlRow['first_name'].' />
									</div>								
									<div>
										<label for="contact_name">Last name:</label>
										<input type="text" name="lname_edit" value='.$sqlRow['last_name'].' />
									</div>
									<div>
										<label for="contact_name">Age:</label>
										<input type="text" name="age_edit"  value='.$sqlRow['age'].' />
									</div>
									<div>
										<label for="contact_name">E-mail:</label>
										<input type="text" name="email_edit" value='.$sqlRow['email'].' />
									</div>
									<div>
										<label for="contact_name">phone:</label>
										<input type="text" name="phone_edit" value='.$sqlRow['phone_no'].' />
									</div>
									<div>
										<label for="contact_name">Address1:</label>
										<input type="text" name="address_1_edit" value='.$sqlRow['address_one'].' />
									</div>
									<div>
										<label for="contact_name">Address2:</label>
										<input type="text" name="address_2_edit" value='.$sqlRow['adress_two'].' />
									</div>
									<div>
										<label for="contact_name">Image:</label>
										<img src='.$sqlRow['upload_Photo'].' width="100" height="70" />
									</div>
									<div>
										<input type="submit" name="from_update" value="update" />
									</div>
								</form>';
					echo $htmlOut;
				}
			}
			else {
				$htmlOut = '<div style="display: none;">
								<form id="contact" class="login_form" method="post" action="" enctype="multipart/form-data">
									<!-- First name: -->
									<div>
										<label for="contact_name">First name:</label>
										<input type="text" id="contact_name" name="first_name"></input>
										<span class="error">This field is required</span>
									</div>
									<!-- Last name: -->
									<div>
										<label for="contact_name">Last name:</label>
										<input type="text" id="contact_name" name="last_name"></input>
										<span class="error">This field is required</span>
									</div>
									
									<!-- Email -->
									<div>
										<label for="contact_email">Email:</label>
										<input type="email" id="contact_email" name="email"></input>
										<span class="error">A valid email address is required</span>				
									</div>
									
									<!-- Age: -->
									<div>
										<label for="contact_age">Age:</label>
										<input type="text" id="contact_age" name="age"></input>
										<span class="error">A valid email address is required</span>				
									</div>
									<!--
									***Website***
									<div>
										<label for="contact_website">Website:</label>
										<input type="url" id="contact_website" name="website"></input>
										<span class="error">A valid url is required</span>								
									</div>		

									***Message***
									<div>
										<label for="contact_message">Message:</label>
										<textarea id="contact_message" name="message"></textarea>
										<span class="error">This field is required</span>												
									</div>-->
									
									<!-- Phone no: -->
									<div>
										<label for="contact_phone">Phone no:</label>
										<input type="text" id="contact_phone" name="phone_no"></input>
										<span class="error">This field is required</span>
									</div>
									
									<!-- Address1: -->
									<div>
										<label for="contact_addressone">Address1:</label>
										<input type="email" id="contact_adressone" name="address_one"></input>
										<span class="error">A valid email address is required</span>				
									</div>	
									
									<!-- Address2: -->
									<div>
										<label for="contact_addresstwo:">Address2:</label>
										<input type="url" id="contact_addresstwo" name="address_two"></input>
										<span class="error">A valid url is required</span>								
									</div>
									
									<!-- Upload Photo: -->
									<div>
										<label for="contact_photo">Upload Photo:</label>
										<input type="file" name="image" />
										<!--<textarea id="contact_message" name="upload_Photo"></textarea>-->
										<!--<input type="submit" value="Upload">-->
										<span class="error">This field is required</span>												
									</div>

									<!-- Submit Button -->
									<div id="contact_submit">				
										<!--<button type="submit">Submit</button>
										<input type="submit" name="login_form" value="Login" />
										<a class="second_form" href="#second_res">LOGIN</a>-->
										<a class="second_form" href="#second_res"><input type="submit" name="login_form" value="Login" /></a>
									</div>
								</form>
							</div>

							<div style="display: none;">
								<form id="second_res" class="login_formsec" method="post" action="">

									<!-- Submit Button -->
									<div id="contact_submit">				
										<!--<button type="submit">Submit</button>
										<a href="#third_res">LOGIN</a>-->
										<input type="submit" name="login_formsec" value="Login" />
									</div>
								</form>
							</div>

							<p><a class="login_popup" href="#contact">LOGIN FORM</a></p>
							
							
							<h2>Enter you email id to see your account detail</h2>
							<form method="POST">
								<input type="text" name="email_id" />
								<input type="submit" name="email_sub" value="Submit" />
							</form>
							';
							
				echo $htmlOut;
			}
			
		?>
	</body>
</html>