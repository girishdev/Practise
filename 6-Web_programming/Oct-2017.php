<?php
/**
 * Created by PhpStorm.
 * User: kumar
 * Date: 29/10/17
 * Time: 7:29 PM
 */


$filename = 'gamming.txt';
$file = fopen($filename,"W");
if($file == false){
	die("Error in opening file");
}

fwrite($file, "This is simple text just to test date(\"Y-m-d\")");
fclose($file);