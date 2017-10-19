<?php
/**
 * Created by PhpStorm.
 * User: qwickbit
 * Date: 19/10/17
 * Time: 4:13 PM
 */

	class myClass{
		function myFunction($data){
			echo "The Value is: $data";
		}
		function callMyFunction($data){
			// calling myFunction()

			$this->myFunction($data);
		}
	}

	$obj = new myClass();
	$obj->callMyFunction(123);

	echo '<br />';echo '<br />';

	$a = array(10,20,30,50);
	print_r($a);
	echo '<br />';
	var_dump($a);
	echo '<br />';
	echo $a[0];

	echo '<br />';echo '<br />';

	function test($variable){

		echo 'I am Inside Function: ';

		echo "$variable";

	}
	test(25);

	echo '<br />';echo '<br />';

	function hello($who){
		echo "Hello $who";
		if($who == "World"){
			return;
		}
		echo ", how are you";
	}

//	hello("World");

	hello("Girish");

?>