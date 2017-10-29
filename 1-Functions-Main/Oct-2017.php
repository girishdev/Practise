<?php
/**
 * Created by PhpStorm.
 * User: kumar
 * Date: 28/10/17
 * Time: 1:06 AM
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('123MESSAGE', '123');
echo strlen('123MESSAGE');
if (strlen('123MESSAGE') == 10) {
	echo "123MESSAGE";
}
else {
	echo 'ABC';
}
echo '<br />';echo '<br />';

$out = 'mkdir uuuuuuuuu';
echo $output = `ls`;echo '<br />';
echo $output = `$out`;echo '<br />';
echo '<br />';echo '<br />';

function hello4(){
	if(func_num_args() > 0){

		$arg = func_get_arg(0);
		echo "Hello4 $arg";
		echo '<br />';
		$args = func_get_args();
		print_r($args);

	} else {

		echo "Hello4 World4";

	}
}

//$arg = ["test","name"];
//$arg = "test";
//hello4($arg);
hello4("sasa",'asas','asassajj');
echo '<br />';echo '<br />';
hello4("fffffff",'rrrrrr','wwwwwww');

echo '<br />';echo '<br />';

$a = 'Hello3';
$b = 'world3';
function hello3(){
	echo $GLOBALS['a'] . ' '. $GLOBALS['b'];
}

hello3();
echo '<br />';echo '<br />';


$a = "Hello Reader";
$b = "how are you";
function hello2(){
	global $a, $b;
	echo "$a $b";
}
hello2();
echo '<br />';echo '<br />';


$a = 'Hello World';
function hello(){
	$a = "Hello Reader";
	$b = "how are you";
}
hello();

echo $a;
//echo $b;

echo '<br />';echo '<br />';

echo date("d/m/Y");
echo '<br />';echo '<br />';

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

