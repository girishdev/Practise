<?php

	if(isset($_POST['submit_value'])){
		$xml = new DomDocument("1.0","UTF-8");
		$xml->load('stdinfo.xml');
		$xml->formatoutput = true;
		
		$cname = $_POST['cname'];
		
		$xpath = new DOMXPATH($xml);
		
		foreach($xpath->query("/root/info[name = '$cname']") as $node){
			$node->parentNode->removeChild($node);
		}
		
		$xml->formatoutput = true;
		$xml->save('stdinfo.xml');

	}

?>

<html>
<head>

</head>
<body>

	<form action='delete.php' method="POST">
		Student infoto be deleted:<br /><br />
		Name: <input type="text" name="cname" /><br /><br />
		<input type="submit" value="add" name="submit_value" />
	</form>
</body>
</html>