<?php

	$db = new mysqli('localhost','root','','study_strategies');
	if($db->connect_errno){
		echo "We found an err in DB connection";
	} else {
		echo 'OK';
	}
	
	$action = $_POST['action'];
	if($action == "showroom" ){
		$select = $db->query("SELECT * FROM study_list");
		while($rows = $select->fetch_object()){
			echo $rows->main_topic;
			echo '<br />';
		}
	} else {
		// $action = 'HTML';
		$select = $db->query("SELECT * FROM study_list WHERE main_topic='".$action."'");
		while($rows = $select->fetch_object()){
			echo $rows->main_topic;
			echo '<br />';
		}
	}
	

?>