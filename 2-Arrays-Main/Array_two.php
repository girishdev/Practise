<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.24" />
</head>

<body>
<?php

	$var = array('abc','def','ghi','jkl');
	echo '<h3 style="margin:0px;">Array Iteration:</h3>';
	function displayArray($var){
		reset($var);
		while(key($var) !== NULL){
			echo key($var) .": " .current($var) .PHP_EOL;
			next($var);
		}
	}
	displayArray($var);

	echo '<br />';

	end($var);
	while(key($var) !== NULL ){
		echo key($var) . ":" .current($var) .PHP_EOL;
		prev($var);

	}

	echo '<br />';
	echo '<br />';
	echo '<h3 style="margin:0px;">An Easier way to Iterate:</h3>';
	foreach($var as $key => $value){
		echo "$key : $value";
	}
	echo '<br />';

	//$a = array(1,2,3);
	//foreach($a as $k => &$v){
		//$v +=1;
	//}
	//var_dump($a);

	echo '<br />';
	$arrayone = array('aabc','ddef','gghi','jjkl');

	foreach($arrayone as $key => $value){
		echo "$key : $value";
		echo '<br />';
	}

	echo '<br />';
	echo '<h3 style="margin:0px;">Sorting Arrays:</h3>';

	$arraytwo = array('a'=>'aabc','b'=>'xyz','c'=>'gppl','d'=>'jjkl');
	echo '<h4 style="margin:0px;">SORT:</h4>';
	sort($arraytwo); //Which sorts based on its values &destroys all the keys and renumbereds its elements
	var_dump($arraytwo);
	echo '<br />';
	echo '<h4 style="margin:0px;">Asort:</h4>';
	asort($arraytwo);
	var_dump($arraytwo);

	// Both sort() and asort() sort values in ascending order. To sort them in descending order, you can use rsort() and arsort().

	echo '<h4 style="margin:0px;">Rsort:</h4>';
	rsort($arraytwo); //Which sorts based on its values &destroys all the keys and renumbereds its elements
	var_dump($arraytwo);
	echo '<br />';
	echo '<h4 style="margin:0px;">ARsort:</h4>';
	arsort($arraytwo);
	var_dump($arraytwo);

	echo '<br />';
	echo '<h4 style="margin:0px;">NATsort:</h4>';
	$var_one = array('10at','2t','3t','1zz',6,2);
	natsort($var_one);	//based on number according to inc order it is going to arrange
	var_dump($var_one);

	echo '<br />';
	echo '<h4 style="margin:0px;">NATCASEsort:</h4>';
	natcasesort($var_one);	//based on number according to inc order it is going to arrange
	var_dump($var_one);

	echo '<br />';
	echo '<h4 style="margin:0px;">Ksort:</h4>';
	$a = array('a'=>30,'b'=>10,'c'=>22);
	ksort($a); //ksort() and krsort() function, which works analogously to sort() and rsort()
	var_dump($a);

	echo '<br />';
	echo '<h4 style="margin:0px;">KRsort:</h4>';
	krsort($a); //ksort() and krsort() function, which works analogously to sort() and rsort()
	var_dump($a);


?>
</body>

</html>
