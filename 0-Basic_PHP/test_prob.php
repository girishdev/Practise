<?php
	/*echo '<h1>This is Test problems file: </h1>';
	function authentication(){
		if($_SERVER['PHP_AUTH_USER'] !== 'admin' && $_SERVER['PHP_AUTH_PW'] !== 'admin123'){
			//if(empty($_SERVER['PHP_AUTH_USER'])){}
			header("WWW-Authenticate: Basic realm=\"Hi Girish\"");
			header("HTTP\ 1.0 401 Unauthorized");
			echo 'There is an error!';
			exit;
		}
	}
	authentication();/**/

	/*session_start();
	//if(isset($_SESSION['username'])){}
	if(isset($_POST['login_form'])){
		$_SESSION['sess_user'] = $_POST['username'];
		echo 'Hi '.$_SESSION['sess_user'].' You are logied successfully';
		//echo 'Wellcome: '.$_SESSION['username'] . 'You are login successfully: ';
	} else {
		echo 'Please login to view pages';
	}
	
	/**/

	//echo $_COOKIE['username'];
	
	//print_r($_COOKIE);
	/*
		
		Easy Youtube Video Downloader Express
		Firebug
		LastPass
		MeasureIt
		Nimbus Screen Capture - editable screenshots.
		ShowIP
		Text to Voice
		User-Agent Switcher
		NoScript
		Empty Cache Button
	
	/**/
	
	
	
	/*
		//PHP Basics
		Databases and SQL
		Web Features
		INPUT/OUTPUT
		//Basics 1
		Arrays 1
		Strings 1
		Web Features 1
		//70 Questions	
	/**/

/////////////// **************** PHP BASICS **************** ///////////////
/////////////// **************** PHP BASICS **************** ///////////////
/////////////// **************** PHP BASICS **************** ///////////////

    /*$a=5;
    $b=12;
    $c=10;
    $d=7;
    $e=($a*$b)+$c*$d/$a;
    print($e);/**/

	/*for($x = 1; $x <= 2; $x++){
		for($y = 1; $y <= 3; $y++){
			if ($x == $y) continue;
			print("x = $x  y =  $y");
			//echo '<br />';
			//print_r("x = $x  y =  $y");
			//echo '<br />';
			//echo 'X: '.$x. ':' .'Y: '.$y;
			echo '<br />';
		}
	}/**/
	
	/*function modifyArray (&$array) {
		foreach ($array as &$value) {
			echo 'Value: '.$value = $value + 2;
			echo '<br />';
		}
		echo 'Last after foreach: '.$value = $value + 3;
		echo '<br />';
	}
	$array = array (1, 2, 3);
	modifyArray($array);
	print_r($array);

	echo '<br />';echo '<br />';echo '<br />';

	function modifyArray2 (&$array2) {
		foreach ($array2 as &$value2) {
			echo 'Value: '.$value2 = $value2 + 2;
			echo '<br />';
		}
		echo 'Last after foreach: '.$value2 = $value2 + 3;
		echo '<br />';
	}
	$array2 = array (1, 2, 3);
	modifyArray2($array2);
	print_r($array2);
	/**/
	
    /*$a = array (1, 2, 3);
    $b = array (1 => 2, 2 => 3, 0 => 1);
    $c = array ('a' => 1, 'b' => 2, 'c' => 3);
//    var_dump ($a = $b);echo '<br />';
    var_dump ($a == $b);echo '<br />';
    var_dump ($a === $b);echo '<br />';
    var_dump ($a == $c);echo '<br />';
    var_dump ($a = $c);echo '<br />';/**/
	
	/*function magic($p, $q) {
		return ($q == 0)    ? $p    : magic($q, $p % $q);
	}
	echo magic(250, 30);/**/
	
	/*echo strtotime("january 1, 1901");
	var_dump(strtotime("january 1, 1901")); /**/
	
	/*echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1995));/**/
	
	/*echo 'test';
	echo $a = 'ls - l';/**/
	
	/*echo (int) (0.1 + 0.7);echo '<br />';
	echo (int) (0.1 + 0.8);echo '<br />';
	echo (int) (0.1 + 0.9);echo '<br />';
	echo (int) ((0.1 + 0.7) * 10);echo '<br />';/**/

    /*define('FOO', 10);
    $array = array(10 => FOO,"FOO" => 20);
    print $array[$array[FOO]];echo '<br />';
    print $array["FOO"];echo '<br />';
    print $array[$array[FOO]] * $array["FOO"];/**/
	
    /*$x=0;
    $i;
    for($i=0;$i<5;$i++){
        $x+=$i;
    }
    print($x);/**/
	
	/*function modvalue() {
       $a=20;
       $b=4;
       $c=$a%$b;
       print($c);
	}
	modvalue();/**/
	
	/*$somearray = array("hi", "this is a string", "this is a code");
	for( $i = 0; $i < count ($somearray); $i++ ){
		echo $somearray[$i] .= "($i )";
	}/**/
	
	/*function b($a = 4){
		$a = $a / 2;
		return $a;
	}
	$a = 10;
	b($a);
	echo $a;/**/

    /*$a;
    for($a=1;$a<=10;$a++){
		if($a==50){
			continue;
		}
		print($a);
		echo '<br />';
    }
    /**/
	
	/*$a = 20;
	function myfunction($b) {
		$a = 30;
		global $a, $c;
		return $c = ($b + $a);	//40+ 20 (global)
	}
	//print myfunction(40);
	print myfunction(40) + $c;	//60+60 ($c = global)
	//print myfunction(20);/**/

	/*echo date('l');echo '<br />';
	echo date('jS');echo '<br />';
	echo date('l jS');echo '<br />';
	echo date('l \t\h\e jS');echo '<br />';
	//echo date('l \t\h\e jS');echo '<br />';
	//echo date('l \t\h\e jS');
	//echo date('l \t\h\e jS');/**/
	
	/*echo $x = 123;
	echo $x == 0123;
	echo $x = 123 == 123;/**/
	
	/*echo time();
	echo date();
	echo strtotime();
	var_dump(localtime());/**/
	
	/*$a=20%-8;
	//$a = 20%8;
	echo $a;/**/
	
	/*
	//$i = '';
	function odd(){
		for($i=1; $i<=50; $i=$i+2){
			echo "$i";
		}
		//echo "The last value of the variable \$i: $i";
	}
	//odd();
	echo "The last value of the variable \$i: $i";/**/
	
	/*
	//echo (int) "Jason 1235"; 
	//echo (int) "Jason1235"; 
	//echo (int) "1235Jason"; 
	echo (int) "12Jason35"; /**/

    /*
	//Important :-
	$sale = 200;
    echo $sale = $sale;
	echo '<br />';
	$sale = 200;
	//echo $sale = $sale + + - + + 1;
	//echo $sale = $sale - + + + - 1;
    //echo 'Testing 0: '.$sale = $sale- + 1;
	echo '<br />';
	$sale = 200;
    echo $sale = $sale- + 1;
	echo '<br />';
	$sale = 200;
    echo $sale;
	echo '<br />';
	$sale = 200;
    echo $sale = $sale- + 1;
	/**/
	
	/*
	10 = $a;
	//10 == $a;
	//$a = 10;
	//echo $a;
	echo 10;
	/**/
	
    /*$num = -123test;
    $newnum = abs( $num );
    print $newnum;/**/
	
	/*
    echo $a = 10 % 4;
	echo '<br />';
    echo $a = 10 / 4;
	echo '<br />';
    echo $a = 6 - 10;
	echo '<br />';
    echo $a = 6 - 10 % 4;
	echo '<br />';
    //echo $a;
	/**/

    /*$a = 5 < 2;
    //$a = 5;
    //$a = 'testing';
    //$a = '123';
    echo (gettype($a));/**/
	
/////////////// **************** Basics 1 **************** ///////////////
/////////////// **************** Basics 1 **************** ///////////////
/////////////// **************** Basics 1 **************** ///////////////
	
    /*$a = 10;
    $b = 20;
    $c = 30;

    if ($a < 50 && $b > 100 || $c == 30) {
        echo "a";
    }
    else {
        echo "b";
    }

    if ($b < 30 XOR $c == 30) {
        echo "c";
    }
    else {
        echo "d";
    }/**/

    /*$a = 0;
    if ($a = 10) {
		echo "a".'<br />';
    } else {
		echo "$a"."In else Test".'<br />';
	}
	if ($a == 0) {
		echo "$a"."b".'<br />';
    } else {
		echo "$a"."In else Test".'<br />';
	}
    if ($a == "0") {
        echo "$a"."c".'<br />';
    } else {
		echo "$a"."In else Test".'<br />';
	}
	/**/
	
    /*echo $c = 50;
	echo '<br />';
    echo $d = &$c;
	echo '<br />';/**/
	
    /*$i = 100;
    echo $j = $i++;
	echo '<br />';
    echo $j = $i++ - 10;
	echo '<br />';
    echo $i . ' - ' . $j;/**/
	
    /*$x = 0x0d;
	echo '<br />';
	echo '<br />';
	echo '<br />';
    $a = 0xF0;
	echo '<br />';
    $b = 0x0F;
	echo '<br />';
	
    echo $val1 = $a & $b; // bitwise AND
	echo '<br />';
    echo $val2 = $a | $b; // bitwise OR
	echo '<br />';
    echo $val3 = $a ^ ($b | $a); // bitwise XOR
	echo '<br />';

    //echo sprintf('0x%02X - 0x%02X - 0x%02X');
    echo sprintf('0x%02X - 0x%02X - 0x%02X', $val1, $val2, $val3);
	/**/
	
	/*$num = 5;
	$location = 'tree';

	//$format = 'There are %d monkeys in the %s';
	$format = 'There are %d monkeys on %d %s\'s';
	echo sprintf($format, $num, $num, $location);/**/

    /*echo "\$a: ".$a = 10 * 5 + 8;
	echo '<br />';
    echo "\$b: ".$b = 4 * 6 - 10 / 2;
	echo '<br />';
    echo $c1 = (12 - 8);
	echo '<br />';
    echo $c2 = (12 - 8) * 4;
	echo '<br />';
    echo $c3 = 8 / 16;
	echo '<br />';
    echo $c = 8 / (12 - 8) * 4;
	echo '<br />';

    echo $a . ' - ' . $b . ' - ' . $c;/**/
	
    /*$a = 15 << 2;
    $b = 10 >> 1;
    $c = 0xF0 >> 4;

    echo sprintf('%d - %d - 0x%X', $a, $b, $c);/**/
	
    /*$a = array('z', 'x');
    $b = array('y', 'w');
    //$b = array('3'=>'y', '4'=>'w');

    $c = array('a' => 1, 'b' => 2);
    $d = array('c' => 3, 'd' => 4);

    $e = $a + $b;
    //var_dump($e);
	echo '<br />';
    $f = $c + $d;
    //var_dump($f);
	echo '<br />';

    foreach ($e as $value) {
        echo $value;
    }

    foreach ($f as $value) {
        echo $value;
    }
	/**/

    /*$a = 10;
    $b = "10";
    if ($a == $b) {
        echo "a";
    } else {
        echo "b";
    }
    if ($a === $b) {
        echo "c";
    } else {
        echo "d";
    }/**/
	
	/*$number = range('A', 'z');
	print_r ($number);
	echo '<br />';
	echo '<br />';
	foreach (range(0, 12) as $number) {
		echo $number.'<br />';
	}/**/

    /*echo $string1 = 'foo' . 'bar';
	echo '<br />';
    echo $string2 = "147hello" + "147goodbye";
	echo '<br />';
    echo $string31 = "456" + "123";
	echo '<br />';
    echo $string3 = "abc" + "123";
	echo '<br />';
    echo sprintf('%s - %s - %s', $string1, $string2, $string3);/**/
	
    /*$myVar = 'foo';
    $$myVar = 'bar';
    echo $'myVar';/**/
	
	/*function getName($lastName){
        if ($lastName) {
            return 'Bloggs';
        }
        else {
            return 'Jeremiah';
        }
    }
    //echo getName('Test');
	$func = 'getName';
    echo $func(true);/**/

	/*define('123MESSAGE', '123');
	echo '<br />';
	echo strlen('123MESSAGE');
	echo '<br />';
    if (strlen('123MESSAGE') == 12) {
        echo '123MESSAGE';
    } else {
        echo 'ABC';
    }/**/
	
	/*define('SOMEVAL', 0);
    if (strlen(SOMEVAL) > 0) { //If you adding number in string you have to give it in doudle cout'' or ""
        echo "Hello";
    } else {
        echo "Goodbye";
    }/**/
	
    /*define('MYCONSTANT', 0);	//WE CAN ADD 0, NULL, '0', etc.....
    if (empty(MYCONSTANT)) {
        echo "Hello123";
    } else {
        echo "Goodbye";
    }/**/
	
    /*$number = 100;
    echo $number < 10 ? "a" : ($number > 100 ? "b" : ($number == 100 ? "c" : ($number <= 100 ? "d" : "e")));/**/

	/*$arr = array(1, 2, 3, 4);
    foreach ($arr as $value) {
        $value -= 1;
        //echo $value -= 1;
        //echo $value += 1;
        //echo $value *= 1;
        //echo $value /= 1;
        //echo $value %= 1;
    }/**/
	
	//$arr = array('a'=>1, 'b'=>2, 'c'=>3,'d'=> 4);
    /*foreach ($arr as &$value) {				// we have to know more about this &$value
        //$value *= 2;
        //echo $value *= 2;
    }/**/

	//$arr = array(1, 2, 3, 4, 5, 6);
	//$arr = array(1, 2, 3, 4);
    /*foreach ($arr as $v) {
        if($v <= 8){
            echo $v;
        } else {
			echo 'You are in else'.'<br />';
		}
    }/**/
	
	/*echo $x = 5;
	echo '<br />';
    echo $y = $x << 1;	//	Working of bitwise
	echo '<br />';
	
    switch ($x + $y) {
        case 5:
            echo "a";
            break;
        case 10:
            echo "b";
            break;
        case 15:
            echo "c";
        case 20:
            echo "d";
            break;
        default:
            echo "e";
    }/**/
	
	/*$transport = array('foot', 'bike', 'car', 'plane');
	var_dump($transport);
	echo '<br />';
	echo $mode = current($transport); // $mode = 'foot';
	echo '<br />';
	echo $mode = next($transport);    // $mode = 'bike';
	echo '<br />';
	echo $mode = next($transport);    // $mode = 'car';
	echo '<br />';
	echo $mode = prev($transport);    // $mode = 'bike';
	echo '<br />';
	echo $mode = end($transport);     // $mode = 'plane';
	echo '<br />';
	echo 'Prev: '.$mode = prev($transport);
	echo '<br />';
	echo 'Next: '.$mode = next($transport);
	echo '<br />';
	echo 'Current: '.$mode = current($transport);
	echo '<br />';
	echo 'Reset: '.$mode = reset($transport);
	echo '<br />';
	echo '<br />';
	/**/
	
	/*$colors = array(
		'Giri'=>'Girish',
        'r' => 'f00',
        'g' => '0f0',
        'b' => '00f'
    );
	var_dump($colors);
    next($colors);
    end($colors);
	echo '<br />';
	var_dump($colors);
	//exit;
	echo '<br />';
    foreach ($colors as $k => $v) {
        echo $k.':';
    }
	echo '<br />';
	echo '<br />';
	echo "$k: " . $v .'<br />';
    reset($colors);
	echo "$k: " . $v .'<br />';
    //next($colors);
    //prev($colors);
    //end($colors);
    //current($colors);
	//var_dump($colors);
		
    while (list($v, $k) = each($colors)) {
        echo $v.':';
    }
	/**/
	
	/*$info = array('coffee', 'brown', 'caffeine','Tee');
	// Listing all the variables
	list($drink, $color, $power, $foo) = $info;
	echo "$drink is $color and $power makes it special.\n"."And i like more times to take $foo";
	
	echo '<br />';
	echo '<br />';
	
	$my_array = array("Dog","Cat","Horse",'pigen');
	list($a, $b, $c, $d) = $my_array;
	echo "I have several animals, a $a, a $b and a $c."."And also i have $d";/**/
	
	/*echo ord('a');
	//echo ord('e');
	echo '<br />';
	/*
	a = 97
	b = 98 
	c = 99
	d = 100
	e = 101
	f = 102
	g = 103
	h = 104
	//for ($i = ord('a'); $i < ord('e'); $i++);
	for ($i = 97; $i < 101; $i++);
	echo chr($i);
	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo chr(97);
	echo chr(83);/**/
	
    /*for ($i = 5; ; $i++) {
        //if ($i < 10) {}
        if ($i == 5) {
			echo $i;
        }
    }
    echo $i;/**/
	
    /*$x = 5;
    switch ($x) {
        case 5:
            echo "a";
            break;
        case 10:
            echo "b";
            break;
        case 15:
            echo "c";
            break;
        case 20:
            echo "d";
            break;
        case default:
            echo "e";
		//default:
			//echo 'This is default statement: ';
    }/**/
	
	/*$number = 15;
    if ($number > 15);		// If we add this in last ; that means termination
		for ($i = 1; $i < 5; $i++)
			echo $i . '<br />';		
    echo '<br />' . $number . '<br />';/**/
	
	/*$foo = "Bar";
	return $foo;/**/
	
    /*$ages = array(16, 10, 46, 25, 41);
    echo $largest = -1;
	echo '<br />';
    foreach ($ages as $age) {
		echo 'In foreach - LARGEST: '.$largest . '<br />';
		echo 'In foreach - AGE: '.$age . '<br />';
        if ($largest < 0) {
            $largest = $age . '<br />';
			echo $age;
			echo '<br />';
            //break;
			continue;
        }
	
        if ($age > $largest) {
            $largest = $age;
        }
	
    }
	echo '<br />';
    echo sprintf('The largest age is %d', $largest);
	/**/

    /*echo 'This is ord: '.$i = ord('a');
    echo 'This is ord: '.$i1 = ord('b');
	echo '<br />';
	echo 'This is chr: '.$j = chr('97');
	echo 'This is chr: '.$j1 = chr('98');
	echo '<br />';
	echo '<br />';
    do {
        echo chr($i);
    } while ($i++ < ord('f') + 1);/**/
	
	//echo $i = ord('a');
	//echo $i = chr(7);
	/*echo $il = chr(105);
	
	for ($j = 0; $j < $il; $j++) {
		echo $j . '<br />';
	}/**/
	
	/*do {
        echo chr($i);
    } while ($i++ < ord('z') + 1);/**/
	
	/*$number = 2500;
    if ($number <= 10) {
        echo "lte Test";
    } else if ($number == 25) {
        echo "e";
    } else if ($number >= 245) {
        echo "gte";
    } else {
        echo "o";
    }/**/
	
	/*$anArray = array('x', 'y', 'z',);

    foreach ($anArray as $k => $val) {
        if ($k == 0) {
            echo $val;
        }
    }/**/
	
	/*$myInt = -1;
    echo $myBool = (bool) $myInt;/**/
	
	/*$int1 = 25.9;
    $int2 = 10;
    $int3 = ceil($int1 / $int2);
    $int4 = ceil((int) ($int1 / $int2));
    echo $int3 . ' - ' . $int4;/**/
	
	/*echo 100;
	echo '<br />';
    echo 0xf;
	echo '<br />';
    echo 010;
	echo '<br />';/**/
	
	/*if ("") {
        echo "a";
    }
	echo '<br />';
	
    if (1) {
        echo "b";
    } else if (-2) {
        echo "c";
    }
	echo '<br />';
	
    if ("foo") {
        echo "d";
    }
	echo '<br />';
	
    if (array('12')) {
        echo "e";
    }
	echo '<br />';
	
    if (array()) {
        echo "f";
    }
	echo '<br />';
	
    if ("false") {
        echo "g";
    }
	/**/
	
/////////////// **************** 70 QUESTIONS **************** ///////////////
/////////////// **************** 70 QUESTIONS **************** ///////////////
/////////////// **************** 70 QUESTIONS **************** ///////////////

	/*$m = 3;
	$n = 0;
	function l() {
	   $m = 0;
	   $m++;
	   global $n;
	   $g = 'test';
	   return array($n,$m,$g);
	}
	//echo implode((L(l())),',');
	//echo implode((L ( l() ) ),',');
	echo implode(l(),',');/**/

	/*class M {
		function m() {		//Here it printing 2 times because m and class M calling so....
			echo "M";
		}
		function construct() {
			echo "mmm";
		}
	}
	$m = new M();
	$m->m();/**/

	/*$a = 4 << 2 + 1;
	echo $a;/**/

	/*$fruits = array("d" => "Zitrone", "a" => "Orange", "b" => "Banane", "c" => "Apfel");

	function test_alter(&$item1, $key, $prefix) {
		$item1 = "$prefix: $item1";
	}
	function test_print($item2, $key) {
		echo "$key. $item2<br>\n";
	}
	echo "Vorher ...:\n".'<br />'.'<br />';
	array_walk($fruits, 'test_print');

	array_walk($fruits, 'test_alter', 'Frucht');
	echo "... und nachher:\n".'<br />'.'<br />';
	array_walk($fruits, 'test_print');

	exit;
	
	function myfunction($value,$key) {
		echo "The key $key has the value $value<br>";
	}
	$a=array("a"=>"red","b"=>"green","c"=>"blue");
	array_walk($a,"myfunction");	
	
	function myfunction($value,$key)
	{
	echo "The key $key has the value $value<br>";
	}
	$a1=array("a"=>"red","b"=>"green");
	$a2=array($a1,"1"=>"blue","2"=>"yellow");
	array_walk_recursive($a2,"myfunction");

	$sweet = array('a' => 'Apfel', 'b' => 'Banane');
	$fruits = array('süß' => $sweet, 'sauer' => 'Zitrone');

	function test_print($item, $key) 
	{
		echo "$key beinhaltet $item\n".'<br />';
	}
	array_walk_recursive($fruits, 'test_print');/**/	

	/*$pattern = '/[a-z]{4} /';
	$string = 'Mary had a little lamb';
	$matches = preg_match($pattern, $string);
	print_r($matches);/**/
	
	/*$a = 'test';
	echo 'Strlen: '.strlen($a);
	echo '<br />';
		echo empty($a) ? $a : 5;
	echo '<br />';
		echo isset($a) ? $a : 5;
	echo '<br />';
	$a = '354';
	echo $a ?: 5;/**/
	
	/*define('Tree', 'oak');
	define('Tree', 'oak', true);
	echo 'This tree is: ' . tree;/**/
	
	/*$a = range(3,9);
	$z = range(20,25);
	foreach ($a as $b) {
	   switch($b) {
		  case 3:
			$b = 7;
		  case 7:
			$b = 3;
		  default:	
		  // do nothing
	   }
	}
	echo implode('-',$a);
	echo '<br />';
	echo implode('-',$z);/**/
	
	/*$a = 10;
	//$a = '10';
	echo strlen($a) . count($a);
	echo '<br />';	
	echo count($a);
	echo '<br />';
	echo strlen($a);
	echo '<br />';
	echo '<br />';
	echo $a;
	echo '<br />';	
	do {
	   echo $a . "elephpant ";
	   $a++;
	} while($a <= 1);/**/

	/*$a = 10;
	echo strlen($a) . count($a);
	do {
		echo $a . "elephpant ";
		$a++;
	} while($a <= 1);/**/

	/*function a($a) {
	   echo 'Second is A: '.$a . "&";
	}
	function b($a) {
	   echo 'Only B: '."-" . $a;
	}
	$a = "!";
	$b = &$a;
	//echo a(b($b));
	//echo ($b);
	//echo b($b);
	echo a(b($b));/**/
	
	/*$wish_list = array(1 => "Romeo and Juliet",
	   4 => "Bad Science",
	   2 => "To Kill A Mockingbird");
	//print_r(sort($wish_list));
	$arry = sort($wish_list);
	sort($wish_list);
	var_dump($wish_list);
	print_r($arry);
	echo '<br />';
	var_dump(sort($wish_list));
	var_dump($arry);
	echo '<br />';
	printf(sort($wish_list));
	printf($arry);
	echo '<br />';
	sprintf(sort($wish_list));/**/

/////////////// **************** WEB FEATURES **************** ///////////////
/////////////// **************** WEB FEATURES **************** ///////////////
/////////////// **************** WEB FEATURES **************** ///////////////

	/*$string = 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
		Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, 
		when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
		It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
		It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
		and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
	
	echo 'Not compressed: '.strlen($string) . '<br />';
	$compressed = gzcompress($string);
	echo 'Compressed: '.strlen($compressed) . '<br />';/**/
	
	//$compressed = gzcompress('Compress me', 9);
	//echo $compressed;	
	
	/*if(isset($_POST['sub_form'])){
		
		if(isset($_POST['languages'])){
			foreach($_POST['languages'] as $lang){
				$test = $lang;
				switch($lang){
					case 'PHP':
						echo 'Php is Awesome'.'<br />';
						$php = $lang;
						//echo 'Hi this is:--- '.$php;
						break;
					case 'JAVA':
						echo 'Java is good language'.'<br />';
						$java = $lang;
						//echo 'Hi this is:--- '.$java;
						break;
					case 'HTML':
						echo 'Html is a basic language'.'<br />';
						$html= $lang;
						//echo 'Hi this is:--- '.$html;
						break;
					case 'JAVASCRIPT':
						echo 'Javascript and jquery is wonderfull languages'.'<br />';
						$javascript = $lang;
						//echo 'Hi this is:--- '.$javascript;
						break;
					default:
						echo 'You must know any one of that languages'.'<br />';
						break;
				}
				//echo '<h3>TEST</h3>'.$test;
			}
		}else {
			echo 'You must know any one of that languages';
		}
		//echo "<h3>$javascript</h3>";
		
	} elseif(isset($_POST['login_form'])){
		
		echo '<h1>login_form</h1>';		
		
	} elseif(isset($_POST['file_submit'])){
		
		if(file_exists("upload/" . $_FILES["photo"]["name"])){
			echo '<span>'.$_FILES["photo"]["name"] . '</span>' . " <h4 style=\"color:red\">is already exist.</h4>";
		} else {
			if($_FILES["photo"]["error"] > 0) {
				echo "Error".$_FILES["photo"]["error"].'<br />';
			}else {				
				//$maxsize = 5 * 1024 *1024;
				$maxsize = 1024 * 1024;
				if($_FILES["photo"]["size"] > $maxsize) {
					//echo "Erroe: File size is larger than the allowed limit.";
					die("Erroe: File size is larger than the allowed limit.");
				} else {
					echo "<b>File Name: </b>" . $_FILES["photo"]["name"] . '<br /><br />';
					echo "<b>File Type: </b>" . $_FILES["photo"]["type"] . '<br /><br />';
					echo "<b>File Size: </b>" . $_FILES["photo"]["size"] . '<br /><br />';
					echo "<b>Stored in: </b>" . $_FILES["photo"]["tmp_name"] . '<br /><br />';
					var_dump($_FILES["photo"]) . '<br /><br />';
					
					move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/".$_FILES["photo"]["name"]) . '<br /><br />';
					echo '<br />'.'<h4 style="color:green;">Successfully uploaded</h4>';					
				}	
			}
		}
		
	} else {
		//header('Location: https://www.google.co.in/');
		//header("HTTP/1.0 404 Not Found");
		header('HTTP/1.1 404 Not Found');
		$htmlOut = '<form  method="POST" action="#">
						<span>Name: </span><input type="text" name="name" /><br /><br />
						<span>You are from: </span>
						<select name="orderby">
							<option vlaue="empty">Select your country</option>
							<option vlaue="name">Country</option>
							<option vlaue="city">City</option>
							<option vlaue="zip">Zip</option>
						</select><br /><br />
						<input type="checkbox" name="languages[]" value="PHP">PHP<br /><br />
						<input type="checkbox" name="languages[]" value="JAVA">JAVA<br /><br />
						<input type="checkbox" name="languages[]" value="HTML">HTML/CSS<br /><br />
						<input type="checkbox" name="languages[]" value="JAVASCRIPT">JAVASCRIPT/JQUERY<br /><br />
						<input type="submit" name="sub_form" value="Submit" />					
				   </form>';
		echo $htmlOut;
		
		$htmlOut2 = '<form action="#" method="post" enctype="multipart/form-data">
						<h2>Upload File</h2>
						<label for="fileSelect">Filename:</label>
						<input type="file" name="photo" id="fileSelect"><br>
						<input type="submit" name="file_submit" value="Upload">
					 </form>';
		echo $htmlOut2;

		echo $htmlmenu = '<div class="menu">
							<ul style="color:red; list-style: none; float: left; width: 100%;">
								<li style="float: left; width: 10%;"><a href="Strings.php">Strings</a></li>
								<li style="float: left; width: 10%;"><a href="Array.php">Arrays</a></li>
								<li style="float: left; width: 10%;"><a href="../Links_imp/imp.php">Important lisks</a></li>
								<li style="float: left; width: 10%;"><a href="Function.php">Function</a></li>
							</ul>
   					 </duv>';
		$htmlOut3 = '<form action="#" method="POST">
						<h2>Login form</h2>
						<label for="fileSelect">User name:</label>
						<input type="text" name="username" /><br>
						<label for="fileSelect">Password:</label>
						<input type="text" name="password" /><br>
						<input type="submit" name="login_form" value="Login" >
					 </form>';
		echo $htmlOut3;
		
	}/**/

	/*
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<title>Example of PHP $_REQUEST variable</title>
		</head>
		<body>
		<?php
		if(isset($_REQUEST["name"])){
			echo "<p>Hi, " . $_REQUEST["name"] . "</p>";
		}
		?>
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
			<label for="inputName">Name:</label>
			<input type="text" name="name" id="inputName">
			<input type="submit" value="Submit">
		</form>
		</body>
	/**/

	//echo 'Hi this is super GLOBAL VARIABLES';//
	/*$x = 5;
	$y = 15;
	function add(){
		$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
	}
	add();
	echo $z;

	echo '<br />';
	echo 'PHP_SELF:: '.$_SERVER['PHP_SELF'];
	echo '<br />';
	echo '<br />';
	echo 'HTTP_USER_AGENT:: '.$_SERVER['HTTP_USER_AGENT']; //prints THE broweser which are supported
	echo '<br />';
	echo '<br />';
	echo 'GATEWAY_INTERFACE:: '.$_SERVER['GATEWAY_INTERFACE'];
	echo '<br />';
	echo '<br />';
	echo 'SERVER_ADDR:: '.$_SERVER['SERVER_ADDR'];
	echo '<br />';
	echo '<br />';
	echo 'SERVER_NAME:: '.$_SERVER['SERVER_NAME'];
	echo '<br />';
	echo '<br />';
	echo 'SERVER_SOFTWARE:: '.$_SERVER['SERVER_SOFTWARE'];
	echo '<br />';
	echo '<br />';
	echo 'SERVER_PROTOCOL:: '.$_SERVER['SERVER_PROTOCOL'];
	echo '<br />';
	echo '<br />';
	echo 'REQUEST_METHOD:: '.$_SERVER['REQUEST_METHOD'];
	echo '<br />';
	echo '<br />';
	echo 'REQUEST_TIME:: '.$_SERVER['REQUEST_TIME'];
	echo '<br />';
	echo '<br />';
	echo 'QUERY_STRING:: '.$_SERVER['QUERY_STRING'];
	echo '<br />';
	echo '<br />';
	echo 'HTTP_ACCEPT:: '.$_SERVER['HTTP_ACCEPT'];
	echo '<br />';
	echo '<br />';
	//echo 'HTTP_ACCEPT_CHARSET:: '.$_SERVER['HTTP_ACCEPT_CHARSET'];
	echo '<br />';
	echo '<br />';
	echo 'HTTP_HOST:: '.$_SERVER['HTTP_HOST'];
	echo '<br />';
	echo '<br />';
	//echo 'HTTP_REFERER:: '.$_SERVER['HTTP_REFERER'];	// have to work out
	echo '<br />';
	echo '<br />';
	//echo 'HTTPS:: '.$_SERVER['HTTPS'];
	echo '<br />';
	echo '<br />';
	echo 'REMOTE_ADDR:: '.$_SERVER['REMOTE_ADDR'];
	echo '<br />';
	echo '<br />';
	//echo 'REMOTE_HOST:: '.$_SERVER['REMOTE_HOST'];
	echo '<br />';
	echo '<br />';
	echo 'REMOTE_PORT:: '.$_SERVER['REMOTE_PORT'];
	echo '<br />';
	echo '<br />';
	echo 'SCRIPT_FILENAME:: '.$_SERVER['SCRIPT_FILENAME'];
	echo '<br />';
	echo '<br />';
	echo 'SERVER_ADMIN:: '.$_SERVER['SERVER_ADMIN'];
	echo '<br />';
	echo '<br />';
	echo 'SERVER_PORT:: '.$_SERVER['SERVER_PORT'];
	echo '<br />';
	echo '<br />';
	echo 'SERVER_SIGNATURE:: '.$_SERVER['SERVER_SIGNATURE'];
	echo '<br />';
	echo '<br />';
	//echo 'PATH_TRANSLATED:: '.$_SERVER['PATH_TRANSLATED'];
	echo '<br />';
	echo '<br />';
	echo 'SCRIPT_NAME:: '.$_SERVER['SCRIPT_NAME'];
	echo '<br />';
	echo '<br />';
	//echo 'SCRIPT_URI:: '.$_SERVER['SCRIPT_URI'];
	echo '<br />';
	/**/

/////////////// **************** PHP FILE HANDLING **************** ///////////////
/////////////// **************** PHP FILE HANDLING **************** ///////////////
/////////////// **************** PHP FILE HANDLING **************** ///////////////

	/*$filename = '/path/to/foo.txt';
	if (file_exists($filename)) {
		echo "The file $filename exists";
	} else {
		echo "The file $filename does not exist";
	}/**/
	

	/*$dummytext = 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
	
	//	$handle = fopen('names.txt','w');
	//	fwrite($handle, $dummytext);
	//	fclose($handle);
	
	$handle = fopen('names2.txt','a');
	fwrite($handle, "$dummytext ");

	/**/
	
	/*
	echo $df_c = disk_free_space("C:");
	echo '<br />';
	echo $df_c = disk_free_space("D:");
	echo '<br />';
	echo $df_c = disk_free_space("E:");
	echo '<br />';
	echo $df_c = disk_free_space("f:");
	echo '<br />';
	echo $df_c = disk_free_space("g:")/1024;
	echo '<br />';
	echo 'Pendrive Remaining space: '.$df_c = disk_free_space("h:")/1024;
	echo '<br />';
	echo 'Pendrive Totla space: '.$ds = disk_total_space("h:");
	echo '<br />';
	echo 'Pendrive Free space: '.$ds = diskfreespace("h:");
	echo '<br />';
	//echo $df_c = disk_free_space("i:");
	echo '<br />';
	/**/
	/*
	if(isset($_POST['sub_name'])){
		$fname = $_POST['fname'];
		
		$file_name = 'names.txt';
		$file_type = filetype($file_name);
		echo 'File type'.$file_type.'<br />';
		
		$handle = fopen($file_name,'a');
		fwrite($handle, $fname."\n");/**/
		
		/*echo 'Get file stat: ';
		//echo $stat = stat('C:\php\php.exe');echo '<br />';
		$stat2 = stat('names.txt');
		echo '<pre>';
		var_dump($stat2);
		/**/
		
		/*
		foreach (glob("*.txt") as $filename) {
			echo "$filename size " . filesize($filename) .'<br />';
		}/**/	

		/*echo '<br />';
		$link = 'names.txt';			
		if (is_link($link)) {
			echo(readlink($link));
		} else {
			symlink('names.txt', $link);
		}
		echo '<br />';/**/
		
		/*echo '<br />';
		$target = 'source.ext'; // This is the file that already exists
		$link = 'newfile.ext'; // This the filename that you want to link it to
		$linking = link($target, $link);
		echo 'Linking: '.$linking;
		echo '<br />';/**/
		

		/*echo '<br />';
		$filename = 'names.txt';
		if (is_readable($filename)) {
			echo 'The file is readable';
		} else {
			echo 'The file is not readable';
		}
		echo '<br />';/**/
		
		/*
		//fclose($handle);
		$new_file = 'abc.txt';	// coping file content
		fopen($new_file, 'w');		
		if(copy($file_name, $new_file)){
			echo 'copyed successfully';
		} else {
			echo 'copyed unsuccessfully!';
		}/**/
		

		/*$homepage = file_get_contents('http://www.tutorialrepublic.com/');
		echo $homepage;
		$current = file_get_contents($file_name);
		$written = file_put_contents($file_name, $current);
		/**/
		
		/*
		echo '<br />';
		$content = file_get_contents($file_name);
		echo 'FILE GET CONTENTS: '.$content;
		echo '<br />';
		echo '<br />';
		echo filesize($file_name);
		echo '<br />';
		$file_name = 'names_test.txt';
		if(file_exists($file_name)){
			echo 'Nessarry File exists';
		} else {
			die("Error: The file you are trying to access doesn't exist.!");
			//echo 'Nessarry Not found!';
		}/**/
		
		/*echo 'Current names in file are: ';
		
		$count = 1;
		
		$readin = file('names.txt');
		$readin_count = count($readin);
		echo '<br />'.$readin_count.'<br />';
		
		foreach($readin as $fnm){
			echo trim($fnm);
			if($count < $readin_count){
				echo ', ';
			}
			$count++;
		}/**/

		//$handle = fopen($file_name, 'r');
		
		/*
		$status = unlink($file_name);
		if($status){
			echo 'File deleted successfully';
		} else {
			echo 'File IS NOT deleted!';
		}/**/
		
		
		/*echo 'This is fgets: '.fgets($handle);		
		while(!feof($handle)){
			echo fgetc($handle);
			echo '<br />';
		}
		
		fclose($handle);/**/
		
		
		/*$datain = fread($handle, filesize($file_name));
		$names_array = explode(',',$datain);
		foreach($names_array as $name){
			echo $name;
			echo '<br />';
		}/**/
		//echo '<br />Hi this is NAMES_ARRAY '.$names_array[0].'<br />';
		/*
	} else {
		$htmlOut = '<form method="POST">
						<lable>Name: </lable>
						<input type="text" name="fname" /><br /><br />
						<input type="submit" name="sub_name" value="submit" />
					</form>';
		echo $htmlOut;
	}/**/

	/*$count = 1;
	do {
		echo $count . "<br>";
		$count++;
	}
	while ($count <= 5);		// It is not going to print upto 6 Please note:::::::::::::::::/**/
	
	//echo 'Hello world';
	
	/*$filename = 'names.txt';
	//$filename = 'OO Programming with PHP5';
	if (is_readable($filename)) {
		echo 'The file is readable';
	} else {
		echo 'The file is not readable';
	}/**/
	
	/*$filename = 'names.txt';
	$filename = 'OO Programming with PHP5';
	if (touch($filename)) {
		echo $filename . ' modification time has been changed to present time';
	} else {
		echo 'Sorry, could not change modification time of ' . $filename;
	}/**/
	/*
	$filename = 'names.txt';
	$filename = 'OO Programming with PHP5';
	// This is the touch time, we'll set it to one hour in the past.
	$time = time() - 3600;

	// Touch the file
	if (!touch('names.txt', $time)) {
		echo 'Whoops, something went wrong...';
	} else {
		echo 'Touched file with success';
	}
	echo '<br />';
	$stat = stat('names.txt');
	var_dump($stat)/**/;

	/*
	// open a file
	$fp = fopen("names.txt", "r");

	// gather statistics
	$fstat = fstat($fp);
	var_dump($fstat);

	// close the file
	//fclose($fp);
	echo '<br />';
	echo '<br />';
	// print only the associative part
	print_r(array_slice($fstat, 13));/**/

	/*$src = fopen('http://www.zendexam.com', 'r');
	$dest1 = fopen('first1k.txt', 'w');
	$dest2 = fopen('remainder.txt', 'w');

	echo stream_copy_to_stream($src, $dest1, 1024) . " bytes copied to first1k.txt\n";
	echo '<br />';
	echo stream_copy_to_stream($src, $dest2) . " bytes copied to remainder.txt\n";/**/
	
	/*$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	echo $hostname;
	//echo 'My username is ' .$_ENV["USER"] . '!';
	echo gethostname();echo '<br />';
	echo php_uname('n');echo '<br />';
	echo '<br />';
	$result = dns_get_record("php.net");
	print_r($result);/**/

	/*
	echo 'setcookie() will add a response header on its own';
	setcookie('foo', 'bar');

	echo 'Define a custom response header
	   This will be ignored by most clients';
	header("X-Sample-Test: foo");

	echo 'Specify plain text content in our response';
	header('Content-type: text/plain');

	echo What headers are going to be sent?';
	var_dump(headers_list());/**/
	
	/*class testing_magic{
		function name_func(){
			echo 'Test';
		}
	}
	$obj = new testing_magic();
	$obj->name_func();
	//echo name_func();/**/
	
	/*namespace TestProject;
	echo 'The full path and filename of the FILE:- ' . __FILE__ . '<br />';
	echo '<br />';
	echo 'The directory of the FILE:- ' . __DIR__ . '<br />';
	echo '<br />';
	echo 'The current line number of the FILE: ' . __line__ . '<br />';
	echo '<br />';
	
	function test_function_magic_constant() {
		echo 'The FUNCTION NAME: ' . __FUNCTION__ . '<br />';
	}
	test_function_magic_constant();
	//echo 'The FUNCTION NAME: ' . __FUNCTION__ . '<br />';
	echo '<br />';
	class TestMagicConstants {
		// Prints class name
		public function printClassName() {
			echo 'The CLASS NAME: ' . __CLASS__ . '<br />';
			echo '<br />';
		}
		// Prints class and method name
		public function printMethodName() {
			echo 'The class METHOD NAME: ' . __METHOD__ . '<br />';
			echo '<br />';
		}
		// Prints function name
		public function printFunction() {
			echo 'The FUNCTION NAME: ' . __FUNCTION__ . '<br />';
			echo '<br />';
		}
		// Prints namespace name (works only with PHP 5.3)
		public function printNamespace() {
			echo 'The name of the current NAMESPACE: ' . __NAMESPACE__ . '<br />';
		}
	}
	// Create new TestMagicConstants class
	$test_magic_constants = new TestMagicConstants;

	// This prints class name and used namespace
	$test_magic_constants->printClassName();

	// This prints method name and used namespace
	$test_magic_constants->printMethodName();

	// This prints function name inside class and used namespace
	// same as method name, but without class
	$test_magic_constants->printFunction();

	// This prints namespace name (works only with PHP 5.3)
	$test_magic_constants->printNamespace();/**/

	/*
	echo '<br />';
	echo __TRAIT__;
	echo '<br />';
	/**/
	
	/*
	$fp = fopen('names.txt', 'r');
	echo $string1 = fgets($fp, 512);
	echo $fseek = fseek($fp, 1);
	
	//$fp = fopen('sample.php', 'r');
	
	$str = '<html><body>
			<p>Welcome! Today is the <?php echo(date(\'jS\')); ?> of <?= date(\'F\'); ?>.</p>
			</body></html>
			Text outside of the HTML block.';
	
	
	file_put_contents('sample.php', $str);

	$handle = @fopen("sample.php", "r");
	if ($handle) {
		while (!feof($handle)) {
			$buffer = fgetss($handle, 4096);
			echo $buffer;
		}
		fclose($handle);
	}/**/
	
	/*
	// opens a file and read some data
	echo $fp = fopen("names.txt", "r");
	echo '<br />';
	echo $data = fgets($fp, 5);
	echo '<br />';
	// where are we ?
	echo ftell($fp); // 11

	fclose($fp);/**/
	
	/*
	header("Content-type:application/pdf");
	header("Content-Disposition:attachment;filename='2.pdf'");
	readfile("1.pdf");/**/
	
/////////////// **************** PHP FILE HANDLING ENDS **************** ///////////////
/////////////// **************** PHP FILE HANDLING ENDS **************** ///////////////
/////////////// **************** PHP FILE HANDLING ENDS **************** ///////////////


/////////////// **************** 70 Questions STARTS **************** ///////////////
/////////////// **************** 70 Questions STARTS **************** ///////////////
/////////////// **************** 70 Questions STARTS **************** ///////////////

	/*$x = 5;
	function print_conditional() {
		static $x;
		if($x++ == 1){
			echo "many"."$x";
			echo "good"."$x";
			echo "things";
		} else {
			echo 'You are in Else'."$x";
		}
		
		return $x;
	}
	print_conditional();
	echo '<br />';
	$x++;
	print_conditional();/**/

	/*function format(&$item) {
		$item = strtoupper($item) . '.';
		return $item;
	}
	$shopping = array("fish", "bread", "eggs", "jelly", "apples");
	//array_walk($shopping, "format");
	$shopping = sort($shopping);
	//echo $shopping[1];
	var_dump($shopping);
	print_r($shopping);
	print($shopping);/**/
	
	/*class Content {
		public function publish() {
			$this->published = true;
			//$this->article();
			//return true;
		}
		protected function article() {
			echo "<i>Article:</i>";
		}
	}
	class Article extends Content {
		public function article() {
			echo "<i>Post:</i>";
		}
	}
	$post = new Article();
	echo $post->publish();/**/
	
	/*if(strcmp("hi", "HI")) echo "hello";
	elseif(strcasecmp("hi","HI")) echo "world";
	else throw new Exception("HI");/**/
	
	/*$a = 1;
	function calculate() {
	   global $a;
	   $a += 7;
	   $a = $a * 043;
	   return --$a;
	}
	//echo calculate();
	echo '<br />';
	echo $a;/**/

	
/////////////// **************** 70 Questions ENDS **************** ///////////////
/////////////// **************** 70 Questions ENDS **************** ///////////////
/////////////// **************** 70 Questions ENDS **************** ///////////////

/////////////// **************** MATH FUNCTIONS STARTS **************** ///////////////
/////////////// **************** MATH FUNCTIONS STARTS **************** ///////////////
/////////////// **************** MATH FUNCTIONS STARTS **************** ///////////////


	/*$input_array = array("FirSt" => 1, "SecOnd" => 4,'Test'=>65,256=>100,'2566'=>1000,'Apple'=>789);
	print_r(array_change_key_case($input_array, CASE_UPPER));/**/
	
	/*$input_array = array('a', 'b', 'c', 'd', 'e');
	print_r(array_chunk($input_array, 3));
	echo '<br />';
	echo '<br />';
	print_r(array_chunk($input_array, 2, true));/**/
	
	/*$num = 55;
	echo ceil($num);
	// Result Will Be: 55
	echo '<br />';
	$result = ceil(295.34);
	$result = ceil(295.9);
	echo $result;
	// Result Will Be: 296/
	echo '<br />';
	//echo ceil(-4.99);  // -3/**/
	
	//echo rand(0, 500);
	// Result Is: 68
	
	/*echo abs(-4.9); // 4.2 (double/float)
	echo '<br />';
	echo abs(5);    // 5 (integer)
	echo '<br />';
	echo abs(-5.23);   // 5 (integer)
	echo '<br />';
	echo abs(8.19);   // 5 (integer)/**/
	
	/*echo rand() . "\n";
	echo '<br />';
	echo rand(5, 15);
	echo '<br />';
	echo rand() . "\n";/**/
	
	/*echo floor(4.3);   // 4
	echo '<br />';
	echo floor(9.999); // 9
	echo '<br />';
	echo floor(-3.14); // -4/**/
	
	/*$hexadecimal = 'a37334';
	echo base_convert($hexadecimal, 16, 2);
	echo '<br />';
	echo base_convert($hexadecimal, 8, 2);
	echo '<br />';
	echo base_convert($hexadecimal, 4, 2);
	echo '<br />';echo '<br />';echo '<br />';/**/
	
	/*echo intval(42);echo '<br />';                      // 42
	echo intval(4.2);echo '<br />';                     // 4
	echo intval('42');echo '<br />';                    // 42
	echo intval('+42');echo '<br />';                   // 42
	echo intval('-42');echo '<br />';                   // -42
	echo 'This is 042: '. intval(042);echo '<br />';                     // 34
	echo intval('042');echo '<br />';                   // 42
	echo 'This is 1e10: '. intval(1e10);echo '<br />';                    // 1410065408
	echo intval('1e10');echo '<br />';                  // 1
	echo 'This is 0x1A: '. intval(0x1A);echo '<br />';                    // 26
	echo intval(42000000);echo '<br />';                // 42000000
	echo intval(420000000000000000000);echo '<br />';   // 0
	echo intval('420000000000000000000');echo '<br />'; // 2147483647
	echo intval(42, 8);echo '<br />';                   // 42
	echo intval('42', 8);echo '<br />';                 // 34
	echo intval(array());echo '<br />';                 // 0
	echo intval(array('foo', 'bar'));echo '<br />';     // 1/**/

	/*echo bindec('1') . "\n";
	echo '<br />';
	echo bindec('110011') . "\n";
	echo '<br />';
	echo bindec('000000110011') . "\n";
	echo '<br />';
	echo bindec('00000011001100') . "\n";
	echo '<br />';
	echo bindec('00001111') . "\n";
	echo '<br />';
	echo bindec('111');/**/
	
	/*echo decbin(12) . "\n";
	echo decbin(26);/**/
	
	/*echo dechex(-1)."\n";
	echo dechex(PHP_INT_MAX * 2 + 1)."\n";
	echo '<br />';
	echo '<br />';
	echo dechex(pow(2, 32) - 1)."\n";
	echo '<br />';
	echo '<br />';
	echo dechex(100)."\n";/**/
	
	/*echo decoct(15) . "\n";
	echo decoct(28) . "\n";
	echo decoct(264);/**/

	/*//$x = 5.7;
	$x = 7;
	//$y = 1.3;
	$y = 2;
	echo $r = fmod($x, $y);
	// $r equals 0.5, because 4 * 1.3 + 0.5 = 5.7/**/
	
	/*var_dump(hexdec("se"));
	var_dump(hexdec("See"));
	var_dump(hexdec("ee"));
	// both print "int(238)"

	var_dump(hexdec("that")); // print "int(10)"
	var_dump(hexdec("a0")); // print "int(160)"
	var_dump(hexdec("b0")); // print "int(160)"
	var_dump(hexdec("b6")); // print "int(160)"/**/
	
	/*echo is_finite(2351);
	echo is_infinite(2351);/**/
	
	// Invalid calculation, will return a 
	// NaN value
	
	/*//$nan = acos(8);
	$nan = '66';
	var_dump(is_nan($nan));
	//var_dump($nan, is_nan($nan));
	echo '<br />';
	echo $nan = acos(8);
	echo '<br />';
	echo log(20);/**/
	
	/*echo max(2, 3, 1, 6, 7);  // 7
	echo '<br />';
	echo max(2, 3, 1, 6, 7, -10, -5.22, 7.01);  // 7
	echo '<br />';
	echo max(array(2, 4, 5)); // 5
	http://sg2.php.net/manual/en/function.max.php/**/
	
	/*echo pi(); // 3.1415926535898
	echo M_PI; // 3.1415926535898/**/

	//echo pow(1, 20); // 1
	
	/*echo sqrt(9); // 3
	echo '<br />';
	echo sqrt(4); // 3
	echo '<br />';
	echo sqrt(10); // 3.16227766 .../**/
	
	/*echo round(3.4);         // 3
	echo round(3.5);         // 4
	echo round(3.6);         // 4
	echo round(3.6, 0);      // 4
	echo round(1.95583, 2);  // 1.96
	echo round(1241757, -3); // 1242000
	echo round(5.045, 2);    // 5.05
	echo round(5.055, 2);    // 5.06/**/
	
	/*$question = "What's the unluckiest kind of cat to have?<br>";
	if (isset($question)) {
		echo $question;
		echo "A catastrophe!";
	} else {
		echo "If you don't have a question you don't get an answer.";
	}
	echo '<br />'.$question.'<br />';
	/**/
	
	/*$question = "What do you get when two giraffes collide?<br>";
	if (!empty($question)) {
		echo $question;
		echo '<br />';
		echo gettype($question);
		echo '<br />';
		echo "A giraffic jam.";
		unset($question);
	} else {
		echo "If you don't have a question you don't get an answer.";
	}
	//echo $question;
	/**/
	
	/*echo '<br />';echo '<br />';
	$foo = "5bar"; // string
	$bar = true;   // boolean
	echo gettype($foo) . '<br />';
	settype($foo, "integer"); // $foo is now 5   (integer)
	settype($bar, "string");  // $bar is now "1" (string)	
	echo gettype($foo) . '<br />';/**/
	
	/*$present = time();
	echo "Present : " . $present . "<br /><br />";
	echo '<br />';/**/
	
	/*echo 'Test:- ';
	$testing = time();
	echo '<br />';
	echo $testing_time = 'Testing: ' . date('d : m : y', $testing);
	echo '<br />';
	echo $testing_time = 'Testing: ' . date('D/M/Y @ H:i:s', $testing);
	echo '<br />';
	echo $testing_time = 'Testing: ' . date('j(d)/M/Y @ H:i:s', $testing);
	echo '<br />';
	echo $testing_time = 'Testing: ' . date('e');
	echo '<br />';
	echo $testing_time = 'Testing: ' . date('i');
	echo '<br />';
	echo $testing_time = 'Testing: ' . date('O');
	echo '<br />';
	echo '<br />';
	echo $testing_time = 'Just date: '.date('D/M/Y @ H:i:s');
	echo '<br />';
	echo '<br />';
	echo $testing_time = date('H : i : s', $testing);
	echo '<br />';
	echo '<br />';
	echo $testing_time = date('D : M : Y', $testing);
	echo '<br />';
	echo '<br />';
	$last_week = time() - (7 * 24 * 60 * 60);
	echo "Last Week: " . $last_week . "<br /><br />";
	
	$next_week = time() + (7 * 24 * 60 * 60);
	echo "Next Week: " . $next_week . "<br /><br />";
	
	$next_month = time() + (30 * 24 * 60 * 60);
	echo "Next Month: " . $next_month . "<br /><br />";/**/
	
	/*
	// Will Echo: 9:12 PM Sunday, August 28, 2016
	echo date("g:i A l, F d, Y");
	echo '<br />';
	// Will Echo: 2016-08-27
	$yesterday = strtotime("yesterday");
	echo date("Y-m-d", $yesterday);
	echo '<br />';
	echo '<br />';	
	//echo strtotime('last day');
	
	//$my_date = strtotime("10 April 2005");
	echo $my_date = strtotime("15 December 2016");
	echo '<br />';
	if(strtotime($my_date) >= time()) {
		echo "Future Date!";
	} elseif(strtotime($my_date) <= time()) {
		echo "Past Date!";
	} elseif(strtotime($my_date) == time()) {
		echo "Current Date!";
	}/**/
	
	/*echo strtotime("now"), "\n";
	echo '<br />';
	echo strtotime("10 September 2000"), "\n";
	echo '<br />';
	echo strtotime("+1 day"), "\n";
	echo '<br />';
	echo strtotime("+1 week"), "\n";
	echo '<br />';
	echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
	echo '<br />';
	echo strtotime("next Thursday"), "\n";
	echo '<br />';
	echo strtotime("last Monday"), "\n";/**/

	
	//mktime(hour, minute, second, month, day, year)
	// Create the timestamp for a particular date
	/*echo mktime(15, 20, 12, 5, 10, 2014);
	echo '<br />';
	
	var_dump(checkdate(12, 31, 2000));
	var_dump(checkdate(2, 29, 2001));
	var_dump(checkdate(2, 29, 2016));/**/
	
	/*$info = cal_info(0);
	print_r($info);/**/
	
	/*$date = new DateTime('2000-01-20');
	$date->sub(new DateInterval('P10D'));
	echo $date->format('Y-m-d') . "\n";/**/
	
	/*$today = getdate();
	print_r($today);
	echo '<br />';
	echo date("M d Y H:i:s", mktime(0, 0, 0, 1, 1, 1998));
	echo '<br />';
	echo date("M d Y H:i:s", mktime(10, 40, 10, 1, 1, 1998));
	echo '<br />';
	echo gmdate("M d Y H:i:s", mktime(0, 0, 0, 1, 1, 1998));/**/
	
	/*$to = "an-email@a-domain.com";
	$subject = "Why do dogs bury bones in the ground?";
	$message = "Because they can't bury them in trees!";
	$headers = 'From: <an-email@a-domain.com>' . "\r\n";
	$headers .= 'Reply-To: an-email@a-domain.com' . "\r\n";
	$headers .= 'Cc: an-email@a-domain.com' . "\r\n";
	$headers .= 'Bcc: an-email@a-domain.com' . "\r\n";
	mail($to,$subject,$message,$headers);/**/

/////////////// **************** MATH FUNCTIONS ENDS **************** ///////////////
/////////////// **************** MATH FUNCTIONS ENDS **************** ///////////////
/////////////// **************** MATH FUNCTIONS ENDS **************** ///////////////


/////////////// **************** Preg Match STARTS **************** ///////////////
/////////////// **************** Preg Match STARTS **************** ///////////////
/////////////// **************** Preg Match STARTS **************** ///////////////

	/*$string = 'Hi this is preg match tutorial';
	
	if(preg_match("/[A-Z]/",$string)) {
		echo 'Match found';
	} else {
		echo 'Match Not found!';
	}/**/
	
	/*$subject = "abcdef";
	$pattern = '/adef/';
	//preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE, 3);
	$pmatch = preg_match($pattern, $subject);
	print_r($pmatch);/**/
	
	/*($keywords = '$40 for a g3/400*';
	$keywords = preg_quote($keywords, '/');
	echo $keywords; // returns \$40 for a g3\/400/**/
	
	/*$string = 'The quick brown fox jumps over the lazy dog.';
	$patterns = array();
	$patterns[0] = '/quick/';
	$patterns[1] = '/brown/';
	$patterns[2] = '/fox/';
	$replacements = array();
	$replacements[2] = 'bear';
	$replacements[1] = 'black';
	$replacements[0] = 'slow';
	echo preg_replace($patterns, $replacements, $string);/**/
	
	/*$today = getdate();
	print_r($today);/**/

	/*print_r(gettimeofday());
	echo gettimeofday(true);/**/
	
	/*echo date("M d Y H:i:s", mktime(0, 0, 0, 1, 1, 1998));echo '<br />';
	echo gmdate("M d Y H:i:s", mktime(0, 0, 0, 1, 1, 1998));echo '<br />';
	echo date("M d Y", mktime(0, 0, 0, , 2));/**/
	
/////////////// **************** Preg Match ENDS **************** ///////////////
/////////////// **************** Preg Match ENDS **************** ///////////////
/////////////// **************** Preg Match ENDS **************** ///////////////





	
	
	
	
	
?>