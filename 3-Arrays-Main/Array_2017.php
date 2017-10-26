<?php

	$arr = array(1,2,3,4,5,'Apple','Banana','Orange','Grapes');
	var_dump($arr);
	echo '<br />';echo '<br />';
	print_r($arr);
	echo '<br />';echo '<br />';
	echo $arr[0];
	echo '<br />';echo '<br />';
	echo $arr[3];
	echo '<br />';echo '<br />';
	echo $arr["4"];
	
	echo '<br />';echo '<br />';
	
	$arr2 = array('Peter'=>"35",'Kumar'=>"26","Girish"=>"27");
	$arr_key = array_change_key_case($arr2, CASE_LOWER);
	$arr_key = array_change_key_case($arr2, CASE_UPPER);
	print_r($arr_key);

	echo '<br />';echo '<br />';
	echo '<b>Sort the elements of the $cars array in ascending alphabetical order:</b> This is sort: ';
	$cars = array('Volvo','BMW','Toyota');
	sort($cars);
	print_r($cars);
	
	echo '<br />';echo '<br />';
	echo '<b>Sort the elements of the $cars array in descending alphabetical order:</b> This is rsort: ';
	$cars = array('Volvo','BMW','Toyota');
	rsort($cars);
	print_r($cars);
	
	echo '<br />';echo '<br />';
	echo '<b>Sort an associative array in ascending order, according to the value:{{{</b> This is asort: ';
	$cars = array('Volvo','BMW','Toyota');
	asort($cars);
	print_r($cars);
	echo '<br />';echo '<br />';
	echo '<b>Sort an associative array in ascending order, according to the value:{{{</b> This is asort: ';
	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Girish"=>"26","Alex"=>"80");
	asort($age);
	print_r($age);
	
	echo '<br />';echo '<br />';
	echo '<b>Sort an associative array in descending order, according to the value:}}}</b> This is rsort: ';
	$cars = array('Volvo','BMW','Toyota');
	arsort($cars);
	print_r($cars);
	
	echo '<br />';echo '<br />';
	echo '<b>Sort an associative array in descending order, according to the value:}}}</b> This is rsort: ';
	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Girish"=>"26","Alex"=>"80");
	arsort($age);
	print_r($age);	
	
	echo '<br />';echo '<br />';
	$nat = array('10t','2t','3t','100t','0.1t','2.3T','3T');
	natsort($nat);
	print_r($nat);
	
	echo '<br />';echo '<br />';
	$nat = array('10t','2t','3t','100t','0.1t','2.3T','3a','3c');
	natcasesort($nat);
	print_r($nat);
	
	echo '<br />';echo '<br />';
	$people = array('Peter','Joe','kumar','girish');
	next($people);
	echo key($people);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>