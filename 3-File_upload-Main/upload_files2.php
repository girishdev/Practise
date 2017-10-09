<html>
<head>
	<title></title>
</head>
<body>
	<form action="#" method="POST" enctype="multipart/form-data">
		<label>File upload: </label>
		<input type="file" name="image_file" /><br /><br />
		<input type="submit" name="img_sub" value="upload" />
	</form>
	
	<?php 
	
		if(isset($_POST['img_sub'])){
			if(file_exists("upload2/" . $_FILES['image_file']['name'])){
				echo $_FILES['image_file']['name'] . 'is already exist.';
				echo $_FILES['image_file']['error'];
			} else {
				move_uploaded_file($_FILES['image_file']['tmp_name'], "upload2/".$_FILES['image_file']['name']);
				echo '<b>FILE NAME: </b>' . $_FILES['image_file']['name'];echo '<br />';echo '<br />';
				echo '<b>MIME TYPE OF THE FILE: </b>' . $_FILES['image_file']['type'];echo '<br />';echo '<br />';
				echo '<b>SIZE OF THE FILE (IN BYTES): </b>' . $_FILES['image_file']['size'];echo '<br />';echo '<br />';
				echo '<b>TEMPORARY FILE NAME OF THE FILE WHICH WAS STORED ON THE SERVER: </b>' . $_FILES['image_file']['tmp_name'];echo '<br />';echo '<br />';
				echo '<b>ERROR CODE ASSOCIATED WITH THIS FILE: </b>' . $_FILES['image_file']['error'];echo '<br />';echo '<br />';
	            $img = "upload2/".$_FILES['image_file']['name'];
				echo'<img src="'.$img.'" style="width:100px;height:auto;"/>';
			}
		}
	
	?>
</body>
</html>