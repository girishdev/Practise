<html>
<head>
    <title>Upload files</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <h2>Upload File</h2>
        <label>Filename:</label>
        <input type="file" name="photo" ><br>
        <input type="submit" name="submit" value="Upload">
    </form>

    <?php

        if(isset($_FILES["photo"]["error"])) {
            if($_FILES["photo"]["error"] > 0) {
                echo "Error: " . $_FILES["photo"]["error"] . "<br>";
            } else {
                $allowed = array("png" => "image/png");
                $filename = $_FILES["photo"]["name"];
                $filetype = $_FILES["photo"]["type"];
                $filesize = $_FILES["photo"]["size"];

                // Verify file extension
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if(!array_key_exists($ext, $allowed)) exit("Error: Please select a png  file format.");

                // Verify file size - 5MB maximum
                if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

                // Verify MYME type of the file
                if(in_array($filetype, $allowed)) {
					
                    // Check whether file exists before uploading it
                    if(file_exists("uploads/" . $_FILES["photo"]["name"])) {
                        echo $_FILES["photo"]["name"] . " is already exists.";
                    } else {
                        move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/" . $_FILES["photo"]["name"]);
                        echo "Your file was uploaded successfully"."<br/>";
                        echo  $filename."<br/>";
                        echo  $filetype."<br/>";
                        echo   $filesize."KB"."<br/>";
                    }
					
                } else {
                    echo "Error: There was a problem uploading your file - please try again.";
                }
            }
        } else {
            echo "Error: Invalid parameters - please contact your server administrator.";
        }

    ?>
 </body>

</html>
