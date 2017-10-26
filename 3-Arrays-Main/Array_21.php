<?php

	echo 'array_intersect:<br />';
	$array1 = array("a" => "green", "red", "blue");
	$array2 = array("b" => "green", "yellow", "red");
	$result = array_intersect($array1, $array2);
	print_r($result);

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_key_exists:<br />';
	$search_array = array('first' => 1, 'second' => 4);
	if (array_key_exists('second', $search_array)) {
		echo "Element is in the array";
	}else {
		echo "Element not in array";
	}

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_keys:<br />';
	$array = array(0 => 100, "color" => "red");
	print_r(array_keys($array));

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_keys:<br />';
	$array = array("blue", "red", "green", "blue", "blue");
	print_r(array_keys($array, "blue"));

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_keys:<br />';
	$array = array("color" => array("blue", "red", "green"),
				   "size"  => array("small", "medium", "large"));
	print_r(array_keys($array));

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_map:<br />';
	function cube($n) {
		return($n * $n * $n);
	}
	$a = array(1, 2, 3, 4, 5);
	$b = array_map("cube", $a);
	print_r($b);

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_map:<br />';
	$func = function($value) {
		return $value * 2;
	};
	print_r(array_map($func, range(1, 5)));

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_merge_recursive:<br />';
	$ar1 = array("color" => array("favorite" => "red"), 5);
	$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
	$result = array_merge_recursive($ar1, $ar2);
	print_r($result);

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_merge:<br />';
	$array1 = array("color" => "red", 2, 4);
	$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
	$result = array_merge($array1, $array2);
	print_r($result);

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_multisort:<br />';
	$ar1 = array(10, 100, 100, 0);
	$ar2 = array(1, 3, 2, 4);
	array_multisort($ar1, $ar2);//sort's tow array with respects to first one ALSO sort's second one with respectes to its first one and its value;
	var_dump($ar1);
	echo '<br /><br />';
	var_dump($ar2);

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_pad:<br />';
	$input = array(12, 10, 9);
	$result = array_pad($input, 5, 0);//Pad array to the specified length with a value
	//It will take 5 values which is mentioned in ARRAY_PAD
	print_r($result);

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_pop:<br />';
	$stack = array("orange", "banana", "apple", "raspberry");
	$fruit = array_pop($stack);//array_pop() pops and returns the last value of the array, shortening the array by one element.
	print_r($stack);

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_product:<br />';
	$a = array(2, 4, 6, 8);
	echo "product(a) = " . array_product($a) . "\n";
	echo '<br />';
	echo "product(array()) = " . array_product(array()) . "\n";

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_push:<br />';
	$stack = array("orange", "banana");
	array_push($stack, "apple", "raspberry");
	print_r($stack);

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_rand:<br /	>';
	$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
	$rand_keys = array_rand($input, 2);//Picks one or more random entries out of an array, and returns the key (or keys) of the random entries.
	echo $input[$rand_keys[0]] . "\n";
	echo $input[$rand_keys[1]] . "\n";
	/*------------------------------*/
	echo '<br /> <br />';
	echo 'array_rand:<br/ >';
	$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
	$rand_keys = array_rand($input, 3);//Picks one or more random entries out of an array, and returns the key (or keys) of the random entries.
	echo $input[$rand_keys[0]] . "\n";
	echo $input[$rand_keys[1]] . "\n";
	echo $input[$rand_keys[2]] . "\n";
/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	function sum($carry, $item) {
		$carry += $item;
		return $carry;
	}
	function multiplication($carry, $item) {
		$carry *= $item;
		return $carry;
	}
	$a = array(1, 2, 3, 4, 5);
	$x = array();

	var_dump(array_reduce($a, "sum")); // int(15)
	var_dump(array_reduce($a, "multiplication", 10)); // int(1200), because: 10*1*2*3*4*5
/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	$base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
	$replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

	$basket = array_replace_recursive($base, $replacements);//Replace all values of Array and add extra values of array if present
	print_r($basket);
	echo '<br />';
	$basket = array_replace($base, $replacements);//Only replace all values of Array(with respected values)
	print_r($basket);
/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	$base = array("orange", "banana", "apple", "raspberry");
	$replacements = array(0 => "pineapple", 4 => "cherry");
	$replacements2 = array(0 => "grape");

	$basket = array_replace($base, $replacements, $replacements2);
	print_r($basket);
/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	$input  = array("php", 4.0, array("green", "red"));
	$reversed = array_reverse($input);
	$preserved = array_reverse($input, true);

	print_r($input); echo '<br />';
	print_r($reversed); echo '<br />';
	print_r($preserved); echo '<br />';//Key differs
/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_search:<br />';
	$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

	$key = array_search('green', $array);
	echo $key . '<br />';
	$key = array_search('red', $array);
	echo $key;
/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	$stack = array("orange", "banana", "apple", "raspberry");
	$fruit = array_shift($stack);
	print_r($stack);
/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	$input = array("a", "b", "c", "d", "e");

	$output = array_slice($input, 2);      // returns "c", "d", and "e"
	$output = array_slice($input, -2, 1);  // returns "d"
	$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"

	// note the differences in the array keys
	print_r(array_slice($input, 2, -1)); echo '<br />';
	print_r(array_slice($input, 2, -1, true));
/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_splice:<br />';
	$input = array("red", "green", "blue", "yellow");
	array_splice($input, 2);
	print_r($input);
	// $input is now array("red", "green")
	echo '<br />';
	$input = array("red", "green", "blue", "yellow");
	array_splice($input, 1, -1);
	print_r($input);
	// $input is now array("red", "yellow")
	echo '<br />';
	$input = array("red", "green", "blue", "yellow");
	array_splice($input, 1, count($input), "orange");
	print_r($input);
	// $input is now array("red", "orange")
	echo '<br />';
	$input = array("red", "green", "blue", "yellow");
	array_splice($input, -1, 1, array("black", "maroon"));
	print_r($input);
	// $input is now array("red", "green",
	//          "blue", "black", "maroon")
	echo '<br />';
	$input = array("red", "green", "blue", "yellow");
	array_splice($input, 3, 0, "purple");
	print_r($input);
	// $input is now array("red", "green",
	//          "blue", "purple", "yellow");

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	echo 'array_sum:<br />';
	$a = array(2, 4, 6, 8);
	echo "sum(a) = " . array_sum($a) . "\n";

	$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
	echo "sum(b) = " . array_sum($b) . "\n";

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	$input = array("a" => "green","Black", "red", "b" => "green", "blue", "red");
	$result = array_unique($input);
	print_r($result);

/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	$queue = array("orange", "banana");
	array_unshift($queue, "apple", "raspberry");
	print_r($queue);
/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	$array = array("size" => "XL", "color" => "gold");
	print_r(array_values($array));
/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
	arsort($fruits);
	foreach ($fruits as $key => $val) {
		echo "$key = $val\n";
	}
/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
	asort($fruits);
	foreach ($fruits as $key => $val) {
		echo "$key = $val\n";
	}
/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
	$food = array('fruits'=>array('orange','banana','apple'),
				  'veggie'=>array('carrot','collard','pea'));
	//var_dump($food);
	echo $food['veggie'][2];
/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
/*------------------------------------------------------------------------*/
	echo '<br /> <br />';
/*------------------------------------------------------------------------*/
	echo '<br /> <br />';


?>
