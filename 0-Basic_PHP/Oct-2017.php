<?php
/**
 * Created by PhpStorm.
 * User: kumar
 * Date: 29/10/17
 * Time: 8:48 AM
 */

// ini_set('error_reporting', E_ALL);

    // $a=5;
    // $b=12;
    // $c=10;
    // $d=7;
    // $e=($a*$b)+$c*$d/$a;
    // print($e);

// $x = 10;
// if($x > 100)
//  echo $x." is greater than 100";
// else if($x > 50)
//  echo $x." is greater than 50 but less than 100";
// else
//  echo $x." is less than 50";

// for($x = 1; $x <= 2; $x++){
//      	for($y = 1; $y <= 3; $y++){
//        	if ($x == $y) continue; 
//         	print("x = $x  y =  $y");
//         	echo '<br />';
//      	}
//   	}

    // $a = array (1, 2, 3);
    // $b = array (1 => 2, 2 => 3, 0 => 1); 
    // $c = array ('a' => 1, 'b' => 2, 'c' => 3);
    // var_dump ($a == $b); 
    // var_dump ($a === $b); 
    // var_dump ($a == $c); 

 // var_dump( (bool) 5.8 );

      echo strtotime("january 1, 1901"); 


    exit();

//post increment and pre increment operator
$a = 1;
echo $a++;
echo '<br />';
echo $a;
echo '<br />';echo '<br />';

$a = 1;
echo ++$a;
echo '<br />';
echo $a;
echo '<br />';echo '<br />';

$a = 1;
echo $a--;
echo '<br />';
echo $a;
echo '<br />';echo '<br />';

$a = 1;
echo --$a;
echo '<br />';
echo $a;
echo '<br />';echo '<br />';

$a = 'Test';
echo ++$a;
echo --$a;
echo '<br />';echo '<br />';

//Referencing variables
$a = 10;
$b = $a;
$b = 20;
echo $b;echo '<br />';
echo $a;
echo '<br />';echo '<br />';

$a = 10;
$b = &$a; // by reference
$b = 20;
echo $b;echo '<br />';
echo $a;
echo '<br />';echo '<br />';

echo $a == 10;
echo 10 == $a;
echo '<br />';echo '<br />';

//Iterative Constructs
$i = 0;
while($i < 1){
	echo $i;echo '<br/>';
	$i++;
}
echo '<br />';echo '<br />';

$i = 0;
do{
	echo $i;echo '<br />';
	$i++;
} while($i < 1);
echo '<br />';echo '<br />';