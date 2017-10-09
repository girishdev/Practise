<?php

	if(isset($_GET['search_text'])){
		$search_text = $_GET['search_text'];
	}
	
	$mysqli = new mysqli('localhost','root','','studentdetails');
	if(!empty($search_text)){
		$query = "SELECT name FROM stdinfo WHERE name LIKE '".($search_text)."%'";
		if ($result = $mysqli->query($query)) {
			while($row = $result->fetch_assoc()){
				echo $name = '<a href="another_page.php?search_text='.$search_text.'">' . $row['name'] . '</a><br />';
			}
		}
	}

?>