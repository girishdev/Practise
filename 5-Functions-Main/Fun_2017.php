<?php

	function sayHello($name) {
		echo "Hello $name";
	}
	sayHello('Girish');
	
	echo '<br />';echo '<br />';
	
	function sayHello2($name, $age){
		echo "Hello $name your age is  $age";
	}
	sayHello2('Kumar',26);
	
	echo '<br />';echo '<br />';
	
	function adder(&$str2) {
		$str2 .= ' Hello test';
	}
	$str = 'Just test'; 
	adder($str);
	echo $str;
	
	echo '<br />';echo '<br />';
	
	function fun_arg($arg) {
		echo $num_arg = func_num_args() . '<br />';
		echo $get_arg = func_get_arg(1) . '<br />';
		global $get_args;
		$get_args = func_get_args();
		var_dump($get_args);
		echo '<br />';echo '<br />';
		print_r($get_args);
	}
	fun_arg(1,2,3,5);
	echo '<br />';echo '<br />';
	print_r($get_args);
	echo '<br />';echo '<br />';
	$get_args;
	$val = 0;
	foreach($get_args as $arg) {
		echo $arg;
		echo '<br />';
		$val .= $arg;
	}
	
	echo $val;
	
	
	
?>