<?php

	if(isset($_POST['submit_value'])){
		$xml = new DOMDocument("1.0","UTF-8");
		$xml->load('stdinfo.xml');

		$cname = $_POST['cname'];
		$cadd = $_POST['cadd'];

		$rootTag = $xml->getElementsByTagName("root")->item(0);

		$infoTag = $xml->createElement("info");
			$nameTag = $xml->createElement("name", $cname);
			$addTag = $xml->createElement("add", $cadd);
			
			$infoTag->appendChild($nameTag);
			$infoTag->appendChild($addTag);
			
		$rootTag->appendChild($infoTag);
		
		$xml->formatOutput = true;		
		$xml->save('stdinfo.xml');

	}

?>

<html>
<head>

</head>
<body>

	<form action='index.php' method="POST">
		Student info:<br /><br />
		Name: <input type="text" name="cname" /><br /><br />
		Address: <input type="text" name="cadd" /><br /><br />
		<input type="submit" value="add" name="submit_value" />
	</form>
</body>
</html>