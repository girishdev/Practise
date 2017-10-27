<?php
/**
 * Created by PhpStorm.
 * User: kumar
 * Date: 28/10/17
 * Time: 1:06 AM
 */


//Call by value:-
function sayHello($name){
	echo "Hello $name";
}

sayHello('Girish');
echo '<br />';
sayHello('Raj');
echo '<br />';echo '<br />';

//Call by Reference:-
function adder(&$str2){
	echo $str2 .= ' Call By Reference';
	echo '<br />';
}

$str = 'Hello';
adder($str);
echo $str;
echo '<br />';echo '<br />';

//Return value
function cube($n){
	return $n*$n*$n;
}

echo "This cude of 3 is ".cube(3);
echo '<br />';echo '<br />';

//Passing an array values
function add(...$num){
	print_r($num);
//	echo $num;
}

add(1,2,3,4,'Girish','kumar',27);
echo '<br />';echo '<br />';

$num = '123';
//unset($num);
echo isset($num)? 'Yes':'No';

