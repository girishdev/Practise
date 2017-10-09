<?php

	/*
	$arr = array('Person_one'=>"girish", 'Person_one'=>"kumar", 'Person_one'=>"raj");
	echo json_encode($arr);/**/

	class User {
		public $firstname = '';
		public $lastname = '';
		public $web = '';
	}

	$u = new User();
	$u->firstname ="Girish";
	$u->lastname = 'Kumar';
	$u->web = 'www.google.com';

	$json = json_encode($u);
	echo $json;
	
	echo '<br /><br />';
	var_dump(json_decode($json));
	
	echo '<br /><br />';
	var_dump(json_decode($json))
	
	

?>