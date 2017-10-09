<?php


	/*$cars=array("Volvo","BMW","Toyota","abc","xyz");
	sort($cars);
	print_r($cars);/**/
	
	/*$a1=array_fill(3,3,"blue");
	$b1=array_fill(0,1,"red");
	print_r($a1);
	echo "<br>";
	print_r($b1);/**/

/*$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$last_names = array_column($a, 'first_name', 'last_name');
print_r($last_names);/**/
	
	//echo $h = '<a href="/Example_programs/practise/Basic_PHP/Strings/string_oct.php">string_oct.php</a>';
	/*$number = range('A','Z');
	$number = range('A','z');
	print_r ($number);/**/
	
	/*$my_array = array("Dog","Cat","Horse",'Girish');

	list($a, $b, $c, $d) = $my_array;
	echo "I have several animals, a $a, a $b and a $c. and \"$d\" is my close friend...";/**/
	
	/*$size = "large";
	$var_array = array("color" => "blue",
					   "size"  => "medium",
					   "shape" => "sphere");
	extract($var_array, EXTR_PREFIX_SAME, "abcv");

	echo "$color, $size, $shape, $abcv_size\n";/**/
	
	/*$foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
	$bar = each($foo[2]);
	echo '<pre>';
	print_r($bar);
	echo '</pre>';/**/
	
	/*$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
	$a2=array("e"=>"red","f"=>"green","g"=>"blue");

	$result=array_diff($a1,$a2);
	print_r($result);/**/
	
	/*$a=array("A","Cat","Dog","A","Dog",'Giri');
	print_r(array_count_values($a));/**/
	
	/*$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	print_r(array_change_key_case($age,CASE_UPPER));/**/
	
	/*$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
	print_r(array_chunk($cars,5));/**/
	
	/*$a=array("a"=>"red","b"=>"green","c"=>"red",'girish','kumar','kumar');
	print_r(array_unique($a));/**/
	
	/*$a1=array("ax"=>"red","b"=>"dfgreen","c"=>"blue","d"=>"yellow");
	$a2=array("a"=>"red","b"=>"green","c"=>"blue");

	$result=array_intersect_assoc($a1,$a2);
	print_r($result);

	echo '<br /><br />';
	$a1=array("a"=>"rdddkjged","b"=>"green","c"=>"bludde");
	$a2=array("a"=>"rdded","c"=>"blue","d"=>"pink");

	$result=array_intersect_key($a1,$a2);
	print_r($result);/**/
	
	/*$a1=array("red","green","green2","green3","green4","green5","green6");
	$a2=array("blue","yellow",'greenare');
	print_r(array_replace($a1,$a2));/**/
	
	/*$a = array('a'=>'foo','f'=>'zebra','b'=>'bar','c'=>'baz','d'=>'Apple','e'=>'mango');
	//echo array_search('Apple', $a);
	echo array_reverse('Apple', $a);/**/

	/*$a = array('a'=>'foo','f'=>'zebra','b'=>'bar','c'=>'baz','d'=>'Apple','e'=>'mango');
	var_dump($a);
	echo '<br />';
	$shift = array_unshift($a, 'Hi');
	//var_dump($shift);
	echo '<br />';
	var_dump($a);/**/
	
	/*$a = array('a'=>'foo','f'=>'zebra','b'=>'bar','c'=>'baz','d'=>'Apple','e'=>'mango');
	var_dump($a);
	echo '<br />';
	$shift = array_shift($a);
	var_dump($shift);
	echo '<br />';
	var_dump($a);/**/
	
	/*$a = array('a'=>'foo','f'=>'zebra','b'=>'bar','c'=>'baz','d'=>'Apple','e'=>'mango');
	$rand =	array_rand($a, 4);
	var_dump($rand);/**/

	/*$a = array(11,22,33,44,55);
	$key = array_keys($a);
	shuffle($key);
	foreach($key as $v) {
		echo $v . '-' . $a[$v] . '<br />';
	}/**/
	//var_dump($key);
	
	/*$a = array('a'=>'foo','f'=>'zebra','b'=>'bar','c'=>'baz','d'=>'Apple','e'=>'mango');
	$key = array_keys($a);
	var_dump($key);/**/

	/*$a = array(1,2,3,4,5);
	shuffle($a);
	var_dump($a);/**/
	
	/*function myCmp($left, $right){
		$diff = strlen($left) - strlen($right);
		if($diff){
			return strcmp($left, $right);
		}
		return $diff;
	}

	$a = array('three','four','one','two');
	usort($a, 'myCmp');
	echo 'USORT' . var_dump($a);echo '<br />';echo '<br />';
	
	$b = array('three','four','one','two');
	uksort($b, 'myCmp');
	echo 'UKSORT' . var_dump($b);echo '<br />';echo '<br />';
	
	$c = array('three','four','one','two');
	uasort($c, 'myCmp');
	echo 'UASORT' . var_dump($c);echo '<br />';echo '<br />';/**/

	/*$a = 'This is first string';
	strlen($a);
	var_dump($a);
	echo '<br />';
	$b = 'This is secondstring';
	strlen($a);
	var_dump($b);
	echo '<br />';
	echo $diff = strlen($a) - strlen($b);
	echo '<br />';
	echo $diff = strlen($a) + strlen($b);
	echo '<br />';
	echo $diff = strlen($a) * strlen($b);
	echo '<br />';
	echo $diff = strlen($a) / strlen($b);
	echo '<br />';
	strcmp($a, $b);
	var_dump($a);/**/

	/*$a = array('a'=>'foo','f'=>'zebra','b'=>'bar','c'=>'baz','d'=>'Apple','e'=>'mango');
	//ksort($a);
	//var_dump($a);
	
	krsort($a);
	var_dump($a);/**/

	/*$a = array('10t','2t','3t','1t','2T');
	//$a = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple",'e'=>'coffee');
	//$a = array('10','2','3','11','1.1');
	natsort($a);
	var_dump($a);
	
	//natcasesort($a);
	//var_dump($a);/**/

	/*$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple",'e'=>'coffee');
	asort($fruits);
	var_dump($fruits);
	//arsort($fruits);
	//var_dump($fruits);	
	foreach ($fruits as $key => $val) {
		echo "$key = $val\n";
	}/**/

	/*$a = array('a'=>'foo','b'=>'bar','c'=>'baz','d'=>'Apple','e'=>'mango','f'=>'zebra');
	$a = array(7,9,3,4,5,6,1,8,2);
	//In Ascending order:-
	sort($a);
	var_dump($a);
	//In Decending order:-
	rsort($a);
	var_dump($a);
	/**/

	/*$var1 = "helloDKSdjhfk";
	$var2 = "hellodksdjhfk";
	if (strcasecmp($var1, $var2) == 0) {
		echo '$var1 is equal to $var2 in a case-insensitive string comparison';
	} else {
		echo 'Text not equal';
	}/**/

	/*$array1 = array("a" => "Green", "b" => "brown", "c" => "blue", "red");
	$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
	//$result_array = array_intersect_uassoc($array1, $array2, "strcasecmp");
	print_r(array_intersect_uassoc($array1, $array2, "strcasecmp"));
	//print_r($result_array);/**/

	/*$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red", 'or'=>'Apple');
	$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red", 'OR'=>'Apple');
	print_r(array_intersect_uassoc($array1, $array2, "strcasecmp"));/**/

	/*$array1 = array("a" => "green", "red", "blue", "apple", 'abc',22);
	$array2 = array("b" => "green", "yellow", "red", "apple",22);
	$array3 = array("b" => "green", "yellow", "red2", "apple",22);
	$array4 = array("b" => "green", "yellow", "red2", "apple",722);
	$res = array_intersect($array1, $array2, $array3, $array4);
	print_r($res);/**/

	/*function sum($carry, $item){
		$carry += $item;
		return $carry;
	}
	
	function multiplye($carry, $item){
		$carry *= $item;
		return $carry;
	}
	
	$a = array(1,2,3,4,5);
	var_dump(array_reduce($a, "sum"));
	echo '<br />';
	var_dump(array_reduce($a, "multiplye"));/**/
	

	/*$input = array('f1k'=>"Neo", 's2k'=>"Morpheus", 't3k'=>"Trinity", 'f4k'=>"Cypher", 'f5k'=>"Tank");
	$rand_keys = array_rand($input, 3);
	print_r($rand_keys);
	//echo $input[$rand_keys[0]] . "\n";
	//echo $input[$rand_keys[1]] . "\n";/**/

	/*function cube($n) {
		return ($n * $n * $n);
	}
	
	$a = array(1,2,3,4);
	$b = array_map('cube', $a);
	print_r($b);/**/

	/*$a = array('apple','banana');
	array_push($a, "Orange","raspberry","Orange2","Orange3","Orange4","Orange5","Orange6");
	print_r($a);/**/

	/*$a = array('first'=>2, 'second'=>4, 'third'=>6, 'forth'=>8);
	echo array_product($a);/**/

	/*$ar1 = array(26, 10, 600, 200, 300, 400);
	$ar2 = array(5, 1, 2, 3, 4, 6);
	$varar = array_multisort($ar1, $ar2);
	//$varar = array_multisort($ar2, $ar1);
	print_r($ar1);echo '<br />';
	print_r($ar2);echo '<br />';/**/

	/*$input = array(12, 10, 9);

	//$result = array_pad($input, 10, 2);
	$result = array_pad($input, -7, -1);
	print_r($result);/**/

	/*$a = array('game'=>'GTA', 'Movie'=>'kannada', 'sports'=>'100m splint');
	print_r($a);
	echo '<br >';
	print_r(array_pop($a));
	echo '<br />';
	print_r($a);
	echo '<br />';
	print_r(array_pop($a));
	echo '<br />';
	print_r($a);/**/
	
	
	/*$a = array('name1'=>'girish','name2'=>'kumar','name3'=>'Raj');
	$c = array('game'=>'GTA', 'Movie'=>'kannada', 'sports'=>'100m splint');
	$b = array('one hundred'=>'100','two hundred'=>'200','three hundred'=>'300', 'activites'=>$c);
	echo '<pre>';
	print_r(array_merge_recursive($b, $a));
	echo '</pre>';/**/

	/*$a = array('name1'=>'girish','name2'=>'kumar','name3'=>'Raj');
	$b = array('one hundred'=>'100','two hundred'=>'200','three hundred'=>'300',"color" => array("favorite" => "green", "blue"));
	echo '<pre>';
	print_r(array_merge($b, $a));
	echo '</pre>';/**/
	
	/*$a = array('name1'=>'girish','name2'=>'kumar','name3'=>'Raj');
	print_r(array_keys($a));echo '<br />';
	print_r(array_values($a));/**/
	
	/*$b = array('name1','name2','name3');
	$a = array('green','red','apple');
	$c = array_combine($b, $a);
	echo '<pre>';
		print_r($c);
	echo '</pre>';/**/
	
	/*function array_alk($key, $value) {
		echo "this is Key $key<br />";
		echo "this is Value $value<br />";
	}
	$arr2 = array('xyz'=>2, 'abc'=>3);
	$arr = array('girish'=>'Name1', 'kumar'=>'Name2', 'raju'=>'Name3', 'test'=>$arr2);
	array_walk_recursive($arr, "array_alk");/**/

	/*function array_alk($key, $value) {
		echo "this is Key $key<br />";
		echo "this is Value $value<br />";
	}
	$arr2 = array('xyz'=>2, 'abc'=>3);
	$arr = array('girish'=>'Name1', 'kumar'=>'Name2', 'raju'=>'Name3', 'test'=>$arr2);
	array_walk($arr, "array_alk");/**/
	
	/*$arr = array('foo','bar','baz');
	foreach($arr as $kay => $value) {
		echo "$kay ; $value";echo '<br />';
	}/**/
	
	/*$a = array('a'=>10, 'b'=>20, 'c'=>30);
	function displayArray($a){
		//reset($a);
		end($a);
		while(key($a) !== null){
			echo key($a) .' : '.current($a);
			//echo key($a);
			//echo current($a);
			echo '<br />';
			//next($a);
			prev($a);
		}
	}
	displayArray($a);/**/

	/*$a = array(10, 20, 'name'=>'giri', 'xyz');
	print_r(array_reverse($a));/**/

	/*$a = array(10, 20, 'name'=>'giri', 'xyz');
	print_r(array_flip($a));
	echo '<br />';
	print_r($a);
	echo '<br />';
	var_dump(array_flip($a));/**/
	
	/*$a = array(10, 20, 'name'=>'giri', 'xyz');
	unset($a[0]);
	echo in_array('10', $a);/**/
	
	/*$a = array(10, 20, 'name'=>'giri', 'xyz');
	echo isset($a['name']);
	echo isset($a['lastname']);/**/
	
	/*$a = array(10, 20, 'name'=>'giri', 'xyz');
	echo array_key_exists('name', $a);/**/
	
	/*$a = array(10, 20, 'giri', 'xyz');
	$a = 'Hi';
	echo is_array($a) ? 'Yes this is an array':'No this is not an array';/**/

	/*$a = array(1,2,4);
	$b = array();
	$c = 10;

	echo count($a);
	echo count($b);
	echo count($c);/**/

	/*$a = array(1,2,3);
	$b = array(1=>2, 2=>3, 0=>1);
	var_dump($a != $b);
	var_dump($a !== $b);/**/
	
	/*$a = array(1,2,3);
	$b = array(1=>2, 2=>3, 0=>1);
	$c = array('a'=>1,'b'=>2,'c'=>3);

	var_dump($a == $b);echo '<br />';
	var_dump($a === $b);echo '<br />';
	var_dump($a == $c);echo '<br />';
	var_dump($a === $c);/**/
	
	/*$a = array(1,2,3);
	$b = array('a'=>1,'b'=>2,'c'=>3);
	var_dump($a + $b);/**/
	
	/*$a = array();
	$a[] = array(
			'foo',
			'bar'
			);
	$a[] = array(
			'baz',
			'bat'
			);

	echo $a[0][1] . ' ' . $a[1][1];/**/
			
	/*$a = array(20=>5);
	$a[] = 'a'; 
	echo '<pre>';
	var_dump($a);
	echo '<pre>';
	
	$a = array('4'=>5, 'a'=>'b');
	$a[] = 44;
	echo '<pre>';
	var_dump($a);
	echo '<pre>';/**/
	
/*
$arr = array(array('Girish', 'kumar', 'raju'), array('xyz', 'abc', 'qwe'));
echo '<pre>';
var_dump($arr);
echo '<pre>';

$fr = array_column($arr, 1);
print_r($fr);
/**/
	
	//include('test_prob.php');
	
	//echo 'Hi'.$_SESSION['sess_user'].'You are in ARRAY.php';

	//$season = array("summer","winter","spring","autumn");
	//print_r($season);

	/*$season[0]="summer";
	$season[1]="winter";
	$season[2]="spring";
	$season[3]="autumn";
	print_r($season);
	echo '<br />';
	echo $season[1] . '<br />';
	echo $season[1] . '<br />';
	echo $season[3] . '<br />';/**/
	
	//$season = array("summer","winter","spring","autumn");
	//echo "Season are: $season[0], $season[1], $season[2] and $season[3]";

	/*$a = array(2=>5, 'test'=>'array1 testing');
	//$a = array(2=>5, 'Test'=>'array1 testing');
	echo $a[2];
	echo $a['test'];
	//echo $a[5];
	echo '<br />';
	var_dump($a);
	echo '<br />';
	print_r($a);/**/
	
	/*$a = array(1,22,3);
	$b = array('a'=>1,'bb'=>2,'c'=>3);
	var_dump($a + $b);
	echo '<br />';
	print_r($a + $b);
	echo '<br />';
	var_dump($a & $b);
	echo '<br />';
	var_dump($a && $b);
	echo '<br />';
	print_r($a && $b);
	echo '<br />';
	var_dump($a | $b);
	echo '<br />';
	var_dump($a || $b);/**/

	/*$a = array(1,2,3);
	$b = array(1=>2,2=>3,0=>1);
	$c = array('a'=>1,'b'=>2,'c'=>3);
	var_dump($a == $b);
	echo '<br />';
	print_r($a == $b);
	echo '<br />';
	var_dump($a === $b);
	echo '<br />';
	//var_dump($a = $b);
	echo '<br />';
	var_dump($a == $c);
	echo '<br />';
	var_dump($a === $c);
	echo '<br />';/**/
	
	/*$a = array(1,2,3,11,22,33);
	$b = array();
	$c = [10,20,30];
	$d = 10;
	echo count($a).'<br />';
	echo count($b).'<br />';
	echo count($c).'<br />';
	echo count($d).'<br />';
	echo 'is_array: '.is_array($a).'<br />';
	echo 'isset: '.isset($a).'<br />';/**/
	
	/*$a = array('a'=>NULL,'b'=>2);
	//$a = array('a'=>45,'b'=>2);
	echo isset($a['a']);
	echo isset($a['b']);
	echo '<br />';
	echo 'Array key exists: '.array_key_exists('b',$a);
	echo '<br />';
	echo array_key_exists('b',$a)? 'YES':'NO';/**/

	/*$a = array('a'=>NULL,'b'=>2);
	echo in_array(2,$a) . '<br />';
	unset($a['b']);
	echo '<br />'; 
	echo in_array(2,$a)? 'YES':'NO';/**/
	
	/*$a = array('a','b','c','d');
	var_dump($a);
	echo '<br / >';
	var_dump(array_flip($a)); //Acts as key as value and value as key
	echo '<br / >';	
	var_dump(array_reverse($a)); //it will show in reverse order/**/
	
	/*function displayArray($arr){
		//reset($arr);
		end($arr);
		while(key($arr) !== null){
			echo key($arr) .":". current($arr) .'<br />';
			//next($arr);
			prev($arr);
		}
	}
	$arr = array('foo'=>'bar','baz','bat'=>2,'dis','play','nmae'=>'Girish','pen');
	displayArray($arr);/**/
	
	/*$arrays = array('foo','bar','baz');
	foreach($arrays as $key=>$value){
		echo "$key:$value" . '<br />';
	}/**/
	
	/*$a = array(1,2,3);
	
	foreach($a as $k=>&$v){
		$v +=1;
		//echo "$k: ". "$v".'<br />';
		//return $var;
	}
	var_dump($v);
	echo '<br />';
	var_dump($a);
	echo '<br />';
	print_r($a);/**/
	
	/*$array = array('a'=>'foo','b'=>'bar','c'=>'baz','z'=>'apples','d'=>'bat');
	sort($array);	// sort based on alphabetical order only for values. Here key changes to index value
	var_dump($array);
	echo '<br />';
	echo '<br />';
	$array = array('a'=>'foo','b'=>'bar','c'=>'baz','z'=>'apples','d'=>'bat');
	rsort($array);	// sort based on alphabetical order only for values. Here key changes to index value
	var_dump($array);
	echo '<br />';
	echo '<br />';
	$array = array('a'=>'foo','b'=>'bar','c'=>'baz','z'=>'apples','d'=>'bat');
	asort($array);	//asort based on alphabetical order only for values. Here key remains same 
	var_dump($array);
	echo '<br />';
	echo '<br />';
	$array = array('a'=>'foo','b'=>'bar','c'=>'baz','z'=>'apples','d'=>'bat');
	arsort($array);	//asort based on alphabetical order only for values. Here key remains same 
	var_dump($array);/**/
	
	/*$array = array('a'=>'10t','2t','3t','13t','z'=>'1afkashdkjash','100t');
	natsort($array);
	var_dump($array);/**/
	
	/*$a = array('a'=>30,'d'=>10,'c'=>33,'b'=>100,'z'=>1);
	ksort($a);	//Based on values in correct order
	var_dump($a);
	echo '<br />';
	$a = array('a'=>30,'d'=>10,'c'=>33,'b'=>100,'z'=>1);
	krsort($a);	//Based on values in reverse order
	var_dump($a);/**/
	
	/*$var = array('this','is','php','programing');
	$var = 'programming language';
	echo strlen($var);
	echo '<br />';
	echo strtoupper($var);
	$var2 = 'PROGRAMMING LANGUAGE';
	echo strtolower($var2);
	echo '<br />';
	echo '<br />';
	echo strcmp($var, $var2);/**/
	
	/*
	usort — Sort an array by values using a user-defined comparison function
	The function cmp itself doesn't do the sorting. It just tells usort if a value is smaller, equal or greater than another value. E.g. if $a = 5 and $b = 9 it will return 1 to indicate that the value in $b is greater than the one in $a.
	Sorting is done by usort.	
	function cmp($a, $b){
		if ($a == $b) {
			return 0;
		}
		return ($a < $b) ? -1 : 1;
	}
	$a = array(3, 2, 5, 6, 1);
	usort($a, "cmp");
	foreach ($a as $key => $value){
		echo "$key: $value\n";
		echo '<br />';
	}
	echo '<br />';echo '<br />';
	$a = array(3, 2, 5, 6, 1);
	echo usort($a, "cmp");/**/
	
	/*function cmp($a, $b){
		return strcmp($a["fruit"], $b["fruit"]);
	}
	$fruits[0]["fruit"] = "lemons";
	$fruits[1]["fruit"] = "apples";
	$fruits[2]["fruit"] = "grapes";
	usort($fruits, "cmp");
	while (list($key, $value) = each($fruits)) {
		echo "\$fruits[$key]: " . $value["fruit"] . "\n";
	}/**/

	/*function cmp_function($a, $b){
		if ($a == $b) return 0;
		return ($a > $b) ? -1 : 1;
	}
	//$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana" );
	$fruits = array('a'=>'Apple','b'=>'Ball','c'=>'Cat','d'=>'Dog');
	usort($fruits, "cmp_function"); // Default key's, values will come in default order. if any one starting letter is small then it will come first
	//uasort($fruits, "cmp_function"); // Gives key will appear and values will come in reverse order. if any one starting letter is small then it will come first
	//uksort($fruits, "cmp_function"); // Gives key will appear and values will come in reverse order.
	print_r($fruits);/**/
	
	/*$cards = array(1,2,3,4,'this','is','shuffle');
	shuffle($cards);
	var_dump($cards);/**/
	
	/*$cards = array('a'=>10,'b'=>12,'c'=>13,'this is key'=>'Array key','d'=>'this is last key for this array key');
	$keys = array_keys($cards);
	//var_dump($keys);
	shuffle($keys);
	foreach($keys as $k){
		echo $k . '<br />';
	}/**/
	
	/*$cards = array('a'=>10,'b'=>12,'c'=>13,'d'=>155);
	$keys = array_rand($cards, 3);
	var_dump($keys);
	echo '<br />';
	var_dump($cards);/**/
	
	/*echo 'ARRAY PUSH:- '.'<br />';
	$stack = array();
	var_dump($stack);
	echo '<br />';
	array_push($stack, 'bar', 'baz', 'Test', 'Math');
	//var_dump($stack);
	array_push($stack, 'Game_paly');
	array_push($stack, 'Game_paly123');
	var_dump($stack);
	
	echo '<br />';
	echo '<br />';
	echo 'ARRAY POP:- '.'<br />';
	$last_in = array_pop($stack);
	var_dump($stack);
	echo '<br />';
	var_dump($last_in);/**/
	
	/*$stack = array('qux','bar','baz');
	var_dump($stack);
	echo '<br />';
	$first_element = array_shift($stack);
	echo '<br />';
	echo $first_element;
	echo '<br />';
	var_dump($stack);
	array_unshift($stack, 'adding1','adding2');
	echo '<br />';
	var_dump($stack);
	echo '<br />';echo '<br />';echo '<br />';echo '<br />';	
	$queue = array("orange", "banana");
	array_unshift($queue, "apple", "raspberry");
	print_r($queue);/**/
	
	/*$a = array(1,2,3,5,6);
	$b = array(1,3,4,9);
	var_dump(array_diff($a,$b));
	echo '<br />';
	print_r(array_diff($a,$b));/**/
	
	/*$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "z"=>"red");
	$array2 = array("a" => "green", "yellow", "z"=>"red");
	$array3 = array("c"=>"blue");
	$result = array_diff_assoc($array1, $array2, $array3);
	print_r($result);/**/
   
	/*$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
	$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
	//$array3 = array('red' => 78);
	var_dump(array_diff_key($array1, $array2));
	//var_dump(array_diff_key($array1, $array2, $array3));/**/
	
	/*function key_compare_func($a, $b){
		if ($a === $b) {
			return 0;
		}
		return ($a > $b)? 1:-1;
	}
	$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
	$array2 = array("a" => "green", "yellow", "red");
	$result = array_diff_uassoc($array1, $array2, "key_compare_func");
	print_r($result);/**/
	
	/*function key_compare_func($key1, $key2){
		if ($key1 == $key2)
			return 0;
		else if ($key1 > $key2)
			return 1;
		else
			return -1;
	}
	$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
	$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
	var_dump(array_diff_ukey($array1, $array2, 'key_compare_func'));/**/
	
	/*$a = array_fill(5, 6, 'banana');
	$a = array_fill(2, 3, 'banana');
	$b = array_fill(-2, 4, 'pear');
	print_r($a);
	echo '<br />';
	print_r($b);/**/
	
	/*$keys = array('foo', 5, 10, 'bar');
	$a = array_fill_keys($keys, 'banana');
	print_r($a);/**/
	
	/*function odd($var){
		// returns whether the input integer is odd
		return($var & 1);
	}
	function even($var){
		// returns whether the input integer is even
		return(!($var & 1));
	}
	$array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
	$array2 = array(6, 7, 8, 9, 10, 11, 12);

	echo "Odd :\n";
	print_r(array_filter($array1, "odd"));
	echo '<br />';
	echo "Even:\n";
	print_r(array_filter($array2, "even"));/**/
	
	/*$input = array("oranges", "apples", "pears", 'Girish');
	$flipped = array_flip($input);
	print_r($flipped);/**/
	
	/*$input_array = array('a', 'b', 'c', 'd', 'e');
	print_r(array_chunk($input_array, 2));
	echo '<br />';
	print_r(array_chunk($input_array, 2, true)); // it will give continus key/**/
	
	// Array representing a possible record set returned from a database
	/*$records = array(
		array(
			'id' => 2135,
			'first_name' => 'John',
			'last_name' => 'Doe',
		),
		array(
			'id' => 3245,
			'first_name' => 'Sally',
			'last_name' => 'Smith',
		),
		array(
			'id' => 5342,
			'first_name' => 'Jane',
			'last_name' => 'Jones',
		),
		array(
			'id' => 5623,
			'first_name' => 'Peter',
			'last_name' => 'Doe',
		)
	);
	$first_names = array_column($records, 'first_name');
	//$first_names = array_column($records, 'id');
	print_r($first_names);/**/

	/*$a = array('green', 'red', 'yellow', 'BatA');
	$b = array('avocado', 'apple', 'banana', 'BatB');
	$c = array_combine($a, $b);
	print_r($c);/**/
	
	/*$array = array(1, "hello", 1, "world", "hello", "Girish", 'kumar', 'kumar');
	print_r(array_count_values($array));/**/

	/*$search_array = array('first' => 1, 'second' => 4);
	if (array_key_exists('first', $search_array)) {
		echo "The 'first' element is in the array";
	}else {
		echo 'No element';
	}/**/

	/*$array1 = array("color" => "red", 2, 4);
	$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
	$array3 = array('test1','test2','test3','test4','aa'=>'Apple','testing22');
	$result = array_merge($array1, $array2, $array3);
	print_r($result);/**/
	
	/*$ar1 = array(10, 100, 100, 0);
	$ar2 = array(1, 3, 2, 4);
	array_multisort($ar1, $ar2);
	var_dump($ar1);
	echo '<br />';
	var_dump($ar2);/**/
	
///////////////////////************************ OLDER ************************///////////////////////
///////////////////////************************ OLDER ************************///////////////////////
///////////////////////************************ OLDER ************************///////////////////////

	/*echo "This is index.php";
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/xampp/');
	exit;/**/

/******* ARRAY *******/

	/*$d = array();
	$d[102]=20;
	$d[103]=30;
	$d[104]=40;
	print_r($d); //It display as string value;
	echo '<br />';
	echo $d[103];
	echo '<br />';
	echo $d[104];
	/**/

	/*$a = array(10,20,30,40,50);
	$z = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
	$b = array('a'=>10,'b'=>20,'c'=>30,'d'=>40,'e'=>50);
	$c = array(1=>10,2=>20,3=>30,4=>40,5=>50,60,70,80,'a',90,100);
	$d = array();
	echo count($a).'<br />';
	foreach($a as $key=>$value){
		echo "$key"."=>"."$value"."<br/>";
	}
	echo 'THE END************'.'<br />';
	echo '<hr>';
	echo count($z).'<br />';
	foreach($z as $key=>$value){
		echo "$key"."=>"."$value"."<br/>";
	}
	echo 'THE END************'.'<br />';
	echo '<hr>';
	echo count($c).'<br />';
	foreach($c as $key=>$value){
		echo "$key"."=>"."$value"."<br/>";
	}
	echo 'THE END************'.'<br />';
	echo '<hr>';
	echo count($d);
	foreach($d as $key=>$value){
		echo "$key"."=>"."$value"."<br/>";
	}
	/**/

	/*$a = array ('102' => 5, '103' => 'b');
	$a[] = 44;
	$a[] = "abc";
	print_r($a);
	/**/

	/*echo 'Multi-dimensionalArrays'.'<br />';
	$array = array();
	$array[] = array( 'foo', 'bar' );
	$array[] = array( 'baz', 'bat' );
	echo $array[0][1] . $array[1][0];
	/**/

	/*$file = array(
				array("file_name"=>"phpfile","file_size"=>"25kb"),
				array("file_name"=>"htmlfile","file_size"=>"50kb"),
				array("file_name"=>"javascriptfile","file_size"=>"20kb")
			);
	foreach($file as $key => $value){
		echo "$key" . "=>" . "$value";
	}
	/**/

	/*$cars = array
	   (
	   array("Volvo",22,18),
	   array("BMW",15,13),
	   array("Saab",5,2),
	   array("Land Rover",17,15)
	   );

	echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
	echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
	echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
	echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
	/**/

	/*$a = array (123, 456, 789);
	$b = array ('a' => 1, 'b' => 2, 'c' => 3);
	echo count($a + $b);
	var_dump($a + $b);
	/**/
	
	/*$array = array(1,1,2,3,4,4,5,6,'A','A','A',6,6,6,123,123,123,3,2,2,2);
	print_r(array_count_values($array));
	/**/

	/*$a = array('a','b','c','d');
	$b = array('e','a','c','h');
	$re = array_intersect($a, $b);
	print_r($re);
	$pe = array_intersect($b, $a);
	print_r($pe);
	/**/

	/*$arr = array(10,20,30,40);
	print_r(isset($arr[1]));
	print_r(is_array($arr));/**/
	
	/*$arr = array('a'=>'scwebs','b'=>'infosys','c'=>'wipro');
	echo(isset($arr['a']));/**/

	/*$arr=array(10,20,30);
	unset($arr[0]);
	print_r($arr[0]);/**/

	/*$a = array('a','b','c');
	var_dump($a);
	echo "<br />";
	$b= array(10,20,30);
	print_r($b);
	echo "<br />";
	$a['a'] = 'giri';
	$a['b'] = 'b';
	$a['10'] = 'nnn';
	print_r($a);
	echo "<br />";
	$student = array('name'=>'Girish','age'=>24);
	print_r($student); /**/


	/*$students[] = array('name' => 'girish','age' => 24);
	$students = array(
					array('name' => 'XYZ','age' => 23),
					array('name' => 'XYZ X','age' => 23)
					);

				print_r($students);
				echo '<br />';
				//exit;

	$college = array();

	$college[] = array('name'=>'ABC', 'id' => 001);
	$college[] = array('name'=>'DEF', 'id' => 002, 'student' => $students);
	echo '<br />';
	var_dump($college); /**/

	/*$a = array(1,2,3);
	$b = array(2=>3,1=>2,0=>1);
	$c = array('a'=>1,'b'=>3,'c'=>3);
	var_dump($a==$b);
	var_dump($b==$c);/**/

	/*$a = array(1,2,3);
	$b = array();
	$c = 10;
	echo count ($a);
	echo count ($b);
	echo count ($c);/**/

	/*$a = array('a'=>'abc','b'=>'xyz');
	if(isset($a['c'])){
		echo "true";
	}else{
		echo "false";
	}/**/


	/*$a = array('a'=>NULL,'b'=>2);
	if(isset($a['a'])){
		echo "true";
	}else{
		echo "false";
	}/**/

	/*$a = array(1=>20,2=>2);
	echo array_key_exists(1,$a)? 'yes':'no';/**/

 	/*$a = array('a'=>NULL,'b'=>2,'c'=>1);
	echo in_array(1,$a)? 'yes':'no';/**/

	/*echo "***Iteration part:***"."<br/>";

	$pin_no = array('pin_no'=>'560056');
	$city =array('city'=>'Bangalore','state'=>'karnataka','pin_no'=>$pin_no);
	$address[] = array('location'=>'Yelahanka New Town', 'post' => 'gkvk(post)','city'=>$city);
	$address[] = array('location'=>'sahakarinagara', 'post' => 'gkvk(post)');
	$students = array(
					array('name' => 'girish','age' => 24),
					array('name' => 'XYZ','age' => 20,'address' => $address)
				);
	$college[] = array('name'=>'ABC', 'id' => '001');
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
	$finalRes = displayArray($college);

	echo $finalRes;/**/

	/*$a = array(1,2,3);
	end($a);
	while(key($a) !== null){
		echo key($a) .":" .current($a) .PHP_EOL;
		echo '<br />';
		prev($a);
	}/**/

	

	/*$students[12] = array('name' => 'adsada','age' => 24);
	$students[10] = array('name' => 'sfsdf','age' => 23);

	//print_r($students);

	$students = array(
					array('name' => 'girish','age' => 23),
					array('name' => 'XYZ','age' => 23)
					);

	$students = array(
		array('name' => 'girish','age' => 23),
		array('name' => 'XYZ','age' => 23)
		);

	print_r($students);
	//exit;

	$college = array();

	$college[] = array('name'=>'ABC', 'id' => '001');
	$college[] = array('name'=>'DEF', 'id' => '002', 'student' => $students);

	//var_dump($college);
	echo '<br />';
	var_dump($college[1]['student']);
	echo '<br />';
	//echo array_key_exists ('girish',$college[1]['student'])? 'yes':'no';
	echo '<br />';
	echo in_array ('girish',$college[1]['student'][0])? 'Yes 0\'th key is girish':'no 0\'th key is not girish';
	echo '<br />';
	echo in_array ('girish',$college[1]['student'][1])? 'yes 1 is girish':'no 1 is not girish';
	echo '<br />';

	echo '<br />';
	echo $college[0]['name'];
	echo '<br />';
	echo $college[0]['id'];
	echo '<br />';
	echo $college[1]['name'];
	echo '<br />';
	echo $college[1]['id'];
	echo '<br />';
	//echo print_r($college[1]['student']);
	echo '<br />';
	echo "\nName: ";
	echo $college[1]['student'][0]['name'];
		echo '<br />';
	echo "\nAge:";
	echo $college[1]['student'][0]['age'];
	echo '<br />';
	echo "\nName:";
	echo $college[1]['student'][1]['name'];
	echo '<br />';
	echo "\nAge: ";
	echo $college[1]['student'][1]['age'];/**/
	
	/*
	$characters['pig'] = "Porky Pig";
	$characters['duck'] = "Daffy Duck";
	$characters['mouse'] = "Speedy Gonzales";

	foreach ($characters as $key => $value) {
		echo $value . " is a " . $key . ".<br />";
	}
	
	$characters[0] = "Bugs Bunny";
	$characters[1] = "Tweety";
	$characters[2] = "Wile E. Coyote";
	$characters[3] = "Elmer Fud";
	$characters[4] = "Sylvester";
	$characters[5] = "Road Runner";

	foreach ($characters as $value) {
	echo $value . "<br />";
	}
	/**/
	
?>
