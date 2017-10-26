<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "<center>File is an image - " . $check["mime"] . ".</center>";
        $uploadOk = 1;
    } else {
        echo "<center>File is not an image.</center>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<center>Sorry, file already exists.</center>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<center>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</center>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<center>Sorry, your file was not uploaded.</center>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		echo "<img src='$target_file' hight='400' width='400'>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<center>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
</center>

https://autoportal.com/newcars/toyota/etios/landing/?&utm_source=Google&utm_campaign=Toyota-|-Etios-|-Bangalore-|-Exact-|-Search&utm_medium=CPC&utm_term=keyword&utm_content=creative&gclid=CIrlyOCSlM8CFdeKaAodOMUKug
http://allcustomercarenumbers.com/Customer-Care-Number-Toyota-Bangalore-02536
https://www.cardekho.com/toyota-etios/car-on-road-price-in-bangalore.htm
https://www.cardekho.com/toyota/toyota-etios-specifications.htm

***http://www.toyotabharat.com/showroom/platinum-etios/
http://www.toyotabharat.com/pricelist/?model=14&campaign=
http://toyotaetios.in/
http://www.toyotabharat.com/find-a-dealer/
https://www.google.co.in/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=toyota%20etios%202013%20model%20price
http://www.carwale.com/toyota-cars/etios-2013-2014/gd-2881/
http://www.carwale.com/news/toyota-etios-sedan-facelift-launched-at-rs-574-lakh-14330/


