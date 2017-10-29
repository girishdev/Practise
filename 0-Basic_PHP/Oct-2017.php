<?php
/**
 * Created by PhpStorm.
 * User: kumar
 * Date: 29/10/17
 * Time: 8:48 AM
 */

ini_set('error_reporting', E_ALL);

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
echo 10 == $a
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