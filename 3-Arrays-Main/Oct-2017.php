<?php
/**
 * Created by PhpStorm.
 * User: qwickbit
 * Date: 27/10/17
 * Time: 11:34 AM
 */


echo $requestContentType = $_SERVER['HTTP_ACCEPT'];

echo '<br />';echo '<br />';echo '<br />';echo '<br />';

foreach(PDO::getAvailableDrivers() as $driver) {
    echo $driver.'<br />';
}

//If mysql connection fails error_log will be called
if(!mysql_connect('localhost', 'mysql_user', 'mysql_passwordls')){
    error_log("My error message", 4, "/home/qwickbit/error_log.txt");
    echo 'Not Connected Successfully';
} else {
    echo 'Connected Successfully';
}

$name = array("d" => "Mark", "a" => "David", "b" => "Peter", "c" => "Martha");
$nameArrayObject = new ArrayObject($name);
$nameArrayObject->ksort();

foreach ($nameArrayObject as $key => $val) {
    echo "$key = $val\n";
}
echo '<br />';echo '<br />';

$array1 = array("orange", "banana", "apple", "raspberry");
$array2 = array(0 => "pineapple", 4 => "cherry");
$array3 = array(10 => "grape22");
$array4 = array(0 => "grape3");
$array5 = array_replace($array1, $array2, $array3, $array4);
echo '<pre>';
print_r($array5);
echo '<br />';echo '<br />';

$array1 = array ('a' => 20, 30, 35);
$array2 = array ('b' => 20, 35, 30);
$array = array_intersect($array1, $array2);
echo '<pre>';
print_r($array);
echo '<br />';echo '<br />';

$array1 = array ('a' => 20, 30, 35);
$array2 = array ('b' => 20, 35, 30,y=> 43, 45, 66=>'1425', 1452, 'apple');
$array = array_intersect_assoc ($array1, $array2);
var_dump ($array);
echo '<pre>';
print_r($array2);
echo '<br />';echo '<br />';

$a = array(
    1 => 'php',
    'Hypertext',
    'Preprocessor',
    'widely used' =>
        array(
            'general' => 'purpose',
            'scripting' => 'language',
            'that' => 'was',
            'originally' =>
                array(
                    5 => 'designed',
                    9 => 'for',
                    'Web development',
                    4 => 'purpose',
                    'purpose2',
                    59 => 'purpose3',
                    'purpose4',
                )
        )
);
echo '<pre>';
echo "<br />";
print_r($a);


// Numerical Array
echo $ip = getenv('REMOTE_ADDR');
echo '<br />';echo '<br />';

echo rand(1,100);
echo '<br />';echo '<br />';

echo $_SERVER['PHP_SELF'];

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
