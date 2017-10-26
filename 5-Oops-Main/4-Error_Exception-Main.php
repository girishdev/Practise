<?php

	//echo 'Throwing an Exception';

	function divide($num1 ,$num2) {
		if($num2==0){
			//echo 'Pass';
			throw new Exception('Cannot divide by Zero: ');
		} else {
			return $num1/$num2;
		}
	}
	echo divide(10, 2);/**/
	
	$age = 16;
	try {
		if($age > 18){
			echo 'Old enough';
		} else {
			throw new Exception ('Not old enoughs.');
		}
	} catch (Exception $exc){
		echo 'Error: '.$exc->getMessage();
	}
?>