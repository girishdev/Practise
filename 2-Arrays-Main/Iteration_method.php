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

		echo '<h3 style="margin:0px;">***Display Array in Array by using Iteration***</h3>';

		$address = array('address1'=>'banglore','address2'=>'tumkur');
		$array = array('name'=>'abc','age'=>'34','address'=>$address);

		function displayArrays($array){
			$a = '';
			reset($array);
			while(key($array) !== null){
				if(is_array(current($array))== true){
					$a .= displayArrays(current($array));
				}else{
					echo key($array) .": " .current($array) . PHP_EOL;
				}
				next($array);
				echo '<br />';
			}
			return $a;
		}
		displayArrays($array);

		echo '<h3 style="margin:0px;">***Display Array in Array by using Iteration***</h3>';

		$address = array(
						array('Address1' => 184,'Address2' => 'Yelahanka New Town','Address3' => 'Bangalore'),
						array('Address_cor1' => 504,'Address_cor2' => 'Yelahanka','Address_cor3' => 'Bangalore')
				   );

		$students = array(
						array('name' => 'girish','age' => 24),
						array('name' => 'XYZ','age' => 20,'address' => $address)
					);

		$college[] = array('name'=>'DEF', 'id' => '002', 'student' => $students);

		function displayArray($array) {
			$retVal = '';
			//end($array);
			reset($array);
			while (key($array) !== null) {
				if(is_array(current($array))) {
					$retVal .= displayArray(current($array));
				}else{
					$retVal .= key($array) .": " .current($array);

				}

				//prev($array);
				$retVal .= '<br />';
				next($array);
			}
			return $retVal;
		}

		$varvar = displayArray($college);

		echo $varvar;

	?>
</body>

</html>
