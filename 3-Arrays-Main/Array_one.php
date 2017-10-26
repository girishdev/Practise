<!DOCTYPE html>
<html>
<head>
	<title>Log in page</title>
</head>
<body>
	<form action="loginpage.php" method="POST">
		Name :<input type="text" name="fname" /><br /><br />
		pass :<input type="text" name="pswd" /><br /><br />
		<input type="submit" value="Login!" name="login" />
	</form>

	<?php
		
		echo '<a href="/Example_programs/Practise/Arrays/ArrayOct.php">Test</a>';

		$array = array(0 => 'Girish', 1 => 'Nirmala', 2 => 'Shruti', 3 => 'LKGowda');
		//$key = array_search($_POST['fname'] , $array);
		if(isset($_POST) && isset($_POST['login'])){
			if($_POST['fname'] !== FALSE ){
				echo 'Hello ' . $_POST['fname'] . ' Well come';
			}
		}
		echo '<br />';
		echo print_r($array);
		echo '<br />';
		echo '<br />';
		echo 'var_dump :-';
		echo var_dump($array);
		echo '<br />';
		echo '<br />';
		echo 'Counts no of array :-';
		echo count($array);
		echo '<br />';
		echo '<br />';
		echo 'array_key_exists :-';
		echo array_key_exists(1 , $array)? 'YES':'NO';//It search's key is present in $array or Not
		echo '<br />';
		echo '<br />';
		echo 'in_array :-';
		echo in_array('raju' , $array)? 'YES':'NO';//It search's value is present in $array or Not
		echo '<br />';
		echo '<br />';
		echo 'in_array(used->unset) :-';
		//unset($array[]);
		echo in_array('Nirmala' , $array)? 'YES':'NO';//It search's value is present in $array or Not
		echo '<br />';
		echo '<br />';
		echo 'array_flip :-';
		var_dump(array_flip($array));//Inverts the value of each element key as value & value as key
		echo '<br />';
		echo '<br />';
		echo 'array_reverse :-';
		var_dump(array_reverse($array));//Reverse the value of an array
		echo '<br />';
		echo '<br />';
		foreach($array as $key=>$value){
			echo "$key : $value";//unset($array[]);
		}
		echo '<br />';
		echo '<br />';
		//Arrays sort(),asort(),natsort(),ksort(),krsort(),rsort(),usort(),uasort(),uksort(),
		sort($array);
		var_dump($array);
		echo '<br />';
		echo '<br />';
		asort($array);
		var_dump($array);// And we are using natsort($array)/ksort($array)//
		echo '<br />';
		echo '<br />';
		$search_array = array_search('Girish' , $array)? 'YES':'NO';
		echo $search_array;
		echo '<br />';
		echo '<br />';
		$a = array(1,2,3,4,5,6,7,8,9,0);
		shuffle($a);
		var_dump($a);
		echo '<br />';
		echo '<br />';
		echo '<h2>***Array as Stacks, Queues and Sets***</h2>';
		echo '<br />';
		$stack = array();
		array_push($stack,'bar','baz','abc','zyx');
		var_dump($stack);
		echo '<br />';
		echo '<br />';
		$last_in = array_pop($stack);
		var_dump($last_in, $stack);
		echo '<br />';
		echo '<br />';
		$stack = array('qux','bar','baz');
		$first_element = array_shift($stack);
		var_dump($stack);
		echo '<br />';
		echo '<br />';
		$second_element = array_unshift($stack , 'foo');
		var_dump($stack);
		echo '<br />';
		echo '<br />';
		echo '<h2>***Set Functionality***</h2>';
		$a = array(1,2,3,6);
		$b = array(1,3,4,7);
		var_dump(array_diff ($a , $b));
		echo '<br />';
		echo '<br />';
		var_dump(array_intersect($a , $b));

		echo '<h1>***Strings and  patterns***</h1>';
		$me = 'girish';
		$name = array('Smit','Jones','Jackson');
		echo "There cannot be more than two {$me}'s";
		echo '<br />';
		echo '<br />';
		echo "{$name[2]} He is my friend";

		echo '<h2>***Strings and  patterns***</h2>';

		$string = 'abcdefg';
		echo $string[2];
		echo '<br />';
		echo '<br />';
		echo '<h2>***Calculate the sum of values in an array***</h2>';
		$st = array(1,2,3,4,5,6,7,8,9);
		var_dump($st);
		echo '<br />';
		echo array_sum($st);
		echo '<br />';
		echo array_rand($st);
		echo '<br />';
		$rest = substr("abcdef", 2);
		echo $rest;

	?>
</body>
</html>
