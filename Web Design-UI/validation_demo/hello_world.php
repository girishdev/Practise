<?php

	//echo 'This is Girish';
/*
http://edward-designer.com/web/passing-php-5-3-certification-exam/
http://edward-designer.com/web/oop-php-5-3-certification-exam-series-8/

https://www.youtube.com/channel/UCYxM8wytrGYSAh46JM-7LsA
https://www.youtube.com/watch?v=Y4hPiTiDXQI
https://www.youtube.com/watch?v=u1o38nPSd0U

https://www.youtube.com/watch?v=uZnFTGmC-WQ&list=PLXjA6KKtfKnAXGQYlzw55lG9DLL_qmXkj /**/


	/* $i = 0;
	while ($i < 10) {
		echo $i . PHP_EOL;
		$i++;
	} /* */
	
	$i = 0;
	do {
		echo $i . PHP_EOL;
		$i++;
	}
	while ($i < 10);
	

	/*=>//$x = 5;
	$x = 10;
	echo 10 ==  $x ? 'YES' : 'NO'; /* */
	
	/*=>//$a = '';
	$a = 'Apple';
	$b = 'Mango';
	
	if ($a) {
		echo $a . ' is present' . '<br />';
		if($b) {
			echo $b . ' also present' . '<br />';
			switch($b) {
				case 'Apple':
					echo 'You can go through ' . $a;
					break;
				case 'Orange':
					echo 'You can go through ' . $a;
					break;
				case 'Mango':
					echo 'You can go through ' . $b;
					break;
				default:
					echo 'Sorry closed';
			}
		}		
	} elseif ($b) {
		echo $b . ' is present' . '<br />';
	} else {
		echo 'Nothing is present' . '<br />';
	} /* */
	
	
	/*=>$left = 'ABC';
	$right = 'XYZ';
	
	echo (int) ($left > $right); /* */
	
	/*=>$a = '';
	$a == 10;
	$a = 10;
	//10 = $a;
	echo $a; /* */
	
	/*=>$a = 10;
	$b = &$a;
	//$b = 50;
	echo $a . '<br />';
	echo $b . '<br />';
	
	$a = 10;
	$b = 20;
	$b = $a;
	echo $a . '<br />';
	echo $b . '<br />'; /* */

	
	/*=>$varone = '';
	$var = '1';
	$var += '3';
	$var -= '3';
	$var *= '5';
	echo $var;
	//echo $varone; /* */
	
	/*=>$string = 'foo ' . 'bar';
	$string2 = 'Foo ' . 'Bar ' . 'Acb ' . 'Apple ' . 'Mango ' .'Pinapple';
	//echo $string;
	echo $string2; /* */
	
	/*=>$a = 1;
	echo 'Value: ' . $a . '<br />';
	echo $a++ . '<br />';
	echo 'Result: ' . $a . '<br />';
	echo ++$a . '<br />';
	echo 'Result: ' . $a . '<br />';
	echo --$a . '<br />';
	echo 'Result: ' . $a . '<br />';
	echo $a-- . '<br />';
	echo 'Result: ' . $a . '<br />'; /* */
	
	/*=>define('Email', 'girishkumar.aorg@gmail.com');
	echo Email . '<br />';
	
	if(Email){
		echo 'Email is present';
	} else {
		echo 'Email is not present';
	} /* */
	
	
	/*=>function myFun(){
		echo 'MyFunc!';
	}
	$f = 'myFun';
	$f(); /**/
	
	/*=>echo 'Hello new world';
	echo '<br/>';
	
	echo 'Hello word' . '<br/>';
	$val = 'one';
	
	if($val = 0){
		echo 'Value is present';
	} else {
		echo 'Value is not present';
	} /* */

?>