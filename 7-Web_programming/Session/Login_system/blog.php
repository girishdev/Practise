	<div class="about_content">
		<h2 class="title">Blog </h2>
		<form class="image_upload" enctype="multipart/form-data" method="POST">
			<input type="file" name="uploadfile" />
			<input type="submit" name="img_sub" value="Upload" />
		</form>
	<?php
		if(isset($_POST['img_sub'])) {
			// $path = "files_uploaded/" . $_FILES['uploadfile']['name'];
			$uploaddir = 'files_uploaded/';
			$uploadfile = $uploaddir . basename($_FILES['uploadfile']['name']);
			if(file_exists($uploadfile)){
				echo '<b class="red"> '. $_FILES['uploadfile']['name'] . ' is already exists</b>';
			} else {
				move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile);
				echo '<div><img class="upload_width" src="'.$uploadfile.'"></div>';
				$email_user = $_SESSION['email'];
				if($insert = $db->query("INSERT INTO images (image,email) VALUES ('{$uploadfile}','{$email_user}')")) {
					echo '<div><b class="green">Image Successfully uploaded</b></div>';
				} else {
					echo "Failed to insert image";
				}
			}
		}
	?>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	</div>
	