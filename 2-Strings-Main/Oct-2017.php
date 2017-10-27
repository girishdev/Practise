<?php
/**
 * Created by PhpStorm.
 * User: qwickbit
 * Date: 27/10/17
 * Time: 12:56 PM
 */

echo 'This is to test form Sublime Text3: ';



$count = sizeof($imei);
//	        return $count;

$var = "000000000";
// $var = '00005dsdad0';
// $var = '000000142536789000000';
echo '<br />';
if (ctype_digit($var) && $var !== 0) {
	echo "Valid IMEI";
} else {
	echo "InValid IMEI or All Zeros";
}


exit();

$str = 'This is string function for practising:';

echo strlen($str);

echo '<br />';

print $str;

echo '<br />';

print $str . 'ssdsd' . ' AAAAAAAs';

echo '<br />';

echo strpos($str, 'for');

echo '<br />';

echo strrev($str);

// Sending mail

$to = 'girishkumar.aorg@gmail.com';
$subject = 'This is to test...';
$message = 'hi hello how are you...';
$headers = 'From: <girishkumar.aorg@gmai.com>' . "\r\n";
$headers .= 'MIME-Version: 1.0' . '\r\n';
$headers .= 'Content-type:text/html;charset=iso-88859-1' . "\r\n";

$mail = mail( $to, $subject, $message, $headers );
if($mail){
	echo '<br />Mail sent successful<br />';
} else {
	echo '<br />Mail Not send<br />';
}