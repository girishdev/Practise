<?php
/**
 * Created by PhpStorm.
 * User: qwickbit
 * Date: 27/10/17
 * Time: 11:34 AM
 */



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
