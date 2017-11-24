<?php
/**
 * Created by PhpStorm.
 * User: qwickbit
 * Date: 27/10/17
 * Time: 11:34 AM
 */

/*
Array sort function:-

	sort — Sort an array
	asort — Sort an array and maintain index association

	rsort — Sort an array in reverse order
	arsort — Sort an array in reverse order and maintain index association

	natsort — Sort an array using a "natural order" algorithm
	natcasesort — Sort an array using a case insensitive "natural order" algorithm

	ksort — Sort an array by key
	krsort — Sort an array by key in reverse order

	usort() — Sort an array by values using a user-defined comparison function
	uasort — Sort an array with a user-defined comparison function and maintain index association
	uksort — Sort an array by keys using a user-defined comparison function

/**/

var_dump(array_combine(array(1,2,3,6),array(4,5,6)));
echo phpversion();

//$a = array('green', 'red', 'yellow');
//$b = array('avocado', 'apple', 'banana');
//$c = array_combine($a, $b);
//echo '<pre>';
//print_r($c);

//$input_array = array('a', 'b', 'c', 'd', 'e');

//$input_array = array('a', 'b', array('aa','vv','gg'), 'd', 'e',array('ll','yy'));
//echo '<pre>';
//print_r($input_array);

//echo '<pre>';
//print_r(array_chunk($input_array, 2));
//echo '<pre>';
//print_r(array_chunk($input_array, 2, true));

// Array representing a possible record set returned from a database
//$records = array(
//	array(
//		'id' => 2135,
//		'first_name' => 'John',
//		'last_name' => 'Doe',
//	),
//	array(
//		'id' => 3245,
//		'first_name' => array(
//							'id' => 9999,
//							'first_name' => 'Sally',
//							'last_name' => 'Smith',
//						),
//		'last_name' => 'Smith',
//	),
//	array(
//		'id' => 5342,
//		'first_name' => 'Jane',
//		'last_name' => 'Jones',
//	),
//	array(
//		'id' => 5623,
//		'first_name' => 'Peter',
//		'last_name' => 'Doe',
//	)
//);
//
//$first_names = array_column($records, 'first_name');
//print_r($first_names);

//$array1 = array("a" => "green", "red", "blue", 'pink');
//$array2 = array("b" => "green", "yellow", "red", 'pink');
//$array3 = array("bx" => "fgreen", "yellow", "redk", 'pink4');
//$result = array_intersect($array1, $array2, $array3);
//print_r($result);

//$array1 = array("a" => "green", "red", "blue", "redzzz",'test2','test3');
//$array2 = array("b" => "green", "yellow", "red", 'test','test4');
//$array3 = array('test2','blue');
//$result = array_diff($array1, $array2, $array3);
//print_r($result);

//$stack = array('orange','banana','apple','raspberry');
//$fruit = array_unshift($stack, 'mango','papaya','ananas');
//print_r($stack);

//$stack = array('orange','banana','apple','raspberry');
//$fruit = array_shift($stack);
//print_r($stack);

//$stack = array();
//
//var_dump($stack);
//
//array_push($stack, 'bar','baz', 'foo');
//
//var_dump($stack);
//
//$last_in = array_pop($stack);

//var_dump($last_in);
//var_dump($last_in);

//print_r($last_in);

exit();

$arr = array('10t','2t','2T','3T','3t','16','24t','apple','zebra','mango');

$var = array_rand($arr, 2);
print_r($var);

//shuffle($arr);
//print_r($arr);

//ksort($arr);
//krsort($arr);
//print_r($arr);

//natsort($arr);
//natcasesort($arr);
//print_r($arr);
//var_dump($arr);


$b115 = array('a'=>1,'b'=>2,'c'=>3,'d'=>45,'e'=>'this is string...','zzzz','abc','01','101','99');
//$b115 = array(1,2,99,66,775,3,3,5,7);

//sort($b115);
//rsort($b115);
//var_dump($b115);
//print_r($b115);

//asort($b115);
//print_r($b115);

//print_r(array_values($b115));
//print_r(array_keys($b115));

echo '<br />';echo '<br />';echo '<br />';echo '<br />';

echo count($b115);
echo sizeof($b115);
echo '<br />';echo '<br />';echo '<br />';echo '<br />';
//print_r($b115);
list($first,$second,$var2, , , , ,$var4) = $b115;

echo $first;echo '<br />';
echo $second;echo '<br />';
echo $var2;echo '<br />';
echo $var4;echo '<br />';

echo '<br />';
function displayArray($b11){
	reset($b11);
	while(key($b11) !== null){
		echo key($b11) . " : " . current($b11);echo '<br />';
		next($b11);
	}
}

//displayArray($b11);

$a1 = array(1, 2, 3);
$b1 = array('a'=>1,'b'=>2,'c'=>3,'d'=>45,'e'=>'this is string...');

//var_dump($a1 + $b1);
//echo count($b1);
//$b1 = array('d'=>77678);
//$b1 = 'This is sting for: ';
//if(is_array($b1)){

//array_key_exists($b1['c']) ? 'Yes key exist' : 'No key found';

//print_r(array_flip($b1));

//print_r(array_reverse($b1));

echo '<br />';echo '<br />';
//echo $b1[e];
if($b1[e]){
//	echo 'This is an array: ';
	echo 'Value is set';
} else {
//	echo 'This is not an array: !!!';
	echo 'Value is not set';
}

//print_r($a1);

echo '<br />';echo '<br />';echo '<br />';echo '<br />';



// Numerical Array

$res = array('name1','name2','name3');
//echo $res[1];
print_r($res);

echo '<br />=============================================================<br />';

// Associative Array

$res2 = array('firstname'=>'Girish','lastname'=>'kumar','location'=>'Bangalore');
//echo $res2['lastname'];
//print_r($res2);

//foreach($res2 as $res){
//	echo $res . '<br >';
//}

//echo count($res2);

for($i=0;$i<=count($res2);$i++){
	echo $res2[key($res2)] . ' ';
	next($res2);
}

echo '<br />=============================================================<br />';

// Multidimensional array

$res3 = array('Pets'=>array('Dog','Cat','hamster'),'Farm Animals'=>array('Horse','Cow'),'Wild Animals'=>array('Elephant','Deer','Camel'));
//echo $res3['Farm Animals'][1];
echo '<pre>';
print_r($res3);
echo '</pre>';

echo '<br />=============================================================<br />';

exit();

echo 'This is Array php 7: ';

$response = ['Name', 27, 'blue'];

list($name,$age,$color) = $response;

//[$name,$age,$color] = $response;

echo $name;
