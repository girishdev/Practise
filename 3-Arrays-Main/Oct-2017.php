<?php
/**
 * Created by PhpStorm.
 * User: qwickbit
 * Date: 27/10/17
 * Time: 11:34 AM
 */

/*
Array sort function:-
sort();
asort();
rsort();
arsort();

/**/



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

exit();

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
