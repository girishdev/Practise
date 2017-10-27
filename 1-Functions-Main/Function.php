<?php

	echo '<h1>This is Function file: </h2>';

	// function sayHello
		function sayHello($name,$age){
			echo "Hello $name, your age is $age.";
			echo '<br />';
		}
		sayHello("girish","26");
		sayHello("kumar",16);
		sayHello("John",32);/**/
		
		echo '<br />';echo '<br />';
		
	// function adder
		function adder(&$str2) {
			echo $str2 = 'Call by Reference<br />';
		}
		$str = 'Hello';
		adder($str);
		echo $str;/**/
	
		echo '<br />';echo '<br />';

	// function sayHello2
		function sayHello2($name = 'girish'){
			echo "Hello $name<br />";
		}
		sayHello2('Raj kumar');
		sayHello2("kumar");
		sayHello2();/**/

		echo '<br />';echo '<br />';

	// function cube
		function cube($n){
			return $n*$n*$n;
		}
		echo cube(3);/**/
	
		echo '<br />';echo '<br />';
	
	// function adder2
		function adder2($str2){
			$str2 .= 'Call By Value';
		}  
		$str = 'Hello ';  
		adder2($str);  
		echo $str;/**/
	
		echo '<br />';echo '<br />';
	
	// function increment
		function increment($i){  
			return $i++;
		}
		$i = 10;
		increment($i);
		echo $i;/**/

		echo '<br />';echo '<br />';
	
	// function hello
		$a = "Hello World";
		function hello(){
			$a = "Hello Reader<br />";
			$b = "How are you<br />";
			return $a.$b;
		}
		echo 'Outside the function: '.$a.'<br />';
		echo hello();/**/
	
		echo '<br />';echo '<br />';

	// function Hello2
		$a = 'Hello1 ';
		$b = 'World2';
		function Hello2(){
			global $a, $b;
			echo $a . $b;
		}
		echo 'Outside the function:- '.$a . $b.'<br />';
		Hello2();/**/
	
		echo '<br />';echo '<br />';
	
	// function increment
		function increment2(&$i) {  
			$i++;
		}
		$i = 10;
		echo increment2($i);
		echo $i;/**/

		echo '<br />';echo '<br />';

	// function add
		function add(...$numbers){
			$sum = 0;
			foreach ($numbers as $n){
				echo $sum += $n;
				echo '<br />';
			}
			return $sum;
		}
		echo add(1, 2, 3, 4,5,6,7,8);/**/

		echo '<br />';echo '<br />';

	// function hello3
		function hello3(){
			if(func_num_args() > 0){
				$arg = func_get_arg(0);
				echo "Hello $arg";
			} else {
				echo 'No argument\'s';
			}
		}
		// hello3('Girish','kumar');
		hello3();/**/

		echo '<br />';echo '<br />';

	// function foo
		function foo(){
			$numargs = func_num_args();
			echo "Number of arguments: $numargs\n";
		}
		foo(1, 2, 3, 4, 99, 'test');/**/
	
		echo '<br />';echo '<br />';
	
	function foo2(){
		$numargs = func_num_args();
		echo "Number of arguments: $numargs\n";
		if ($numargs >= 0) {
			echo "Second argument is: " . func_get_arg(3) . "\n";
		}
	}
	foo2(1, 2, 3, 99);/**/
	
		echo '<br />';echo '<br />';
	
	// function foo3
	function foo3(){
		$numargs = func_num_args();
		echo "Number of arguments: $numargs\n";
	}
	foo3(1, 2, 3, '404', 45);/**/
	
		echo '<br />';echo '<br />';

	// function foo4
		function foo4(){
			$numargs = func_num_args();
			echo "Number of arguments: $numargs \n" . '<br />';
			if ($numargs >= 2) {
				echo "Second argument is: " . func_get_arg(1) . "\n" . '<br />';
			}
			$arg_list = func_get_args();
			echo '<br />';
			var_dump($arg_list);
			echo '<br />';
			echo '<br />';
			for ($i = 0; $i < $numargs; $i++) {
				echo "Argument $i is: " . $arg_list[$i] . "\n";
				echo '<br />';
			}
		}
		foo4(1, 2, 3);/**/
	
		echo '<br />';echo '<br />';

///////////////////////************************ OLDER ************************///////////////////////
///////////////////////************************ OLDER ************************///////////////////////
///////////////////////************************ OLDER ************************///////////////////////
	/*echo '<h3 style="margin:0px;">Global/$GLOBALS example</h3>'.'<br/>';
	$vara = 20;
	$varb = 10;
	function hello() {
		echo "Hello World This is simple program of function part";
		global $vara,$varb;
		$varc = $vara + $varb;
		echo '<br/ >';
		echo $GLOBALS['vara'];
		echo '<br/ >';
		echo "$varc";
	}
	echo 'This is out side function:' .$vara;
	echo '<br/>';
	hello();
	*/

	/*echo 'Passing argument by value'.'<br/>';

	function hello($who){
		if($who == "world"){
			return " WELLCOME";

		}else {
			echo ' Hello Hello';
		}
	}
	echo "HELLO";
	$varoneone = hello("world");
	echo $varoneone;
	*/

	/*echo 'Passing argument by default:'.'<br/>';
	function hello($who = "people" , $how = "world") {
		echo "Hello $who". '<br/>' ."Hello $how ";
	}
	hello();
	*/

	/*function myFunc() {
		echo 'myFunc!';
		
		function nextfunc() {
			echo 'Next funcction';
			
			function lastfunc() {
				echo 'Next funcction';
			}
		}
	}
	
	$fu = myFunc();
	$fp = nextfunc(); // with out first list this line says => Call to undefined function nextfunc()
	$fr = lastfunc(); // with out first list this line says => Call to undefined function nextfunc()
	//$fu = myFunc;	// Use of undefined constant myFunc - assumed 'myFunc'
	//$fu();	//Undefined variable: fu &&
	//Function name must be a string in H:\xampp\htdocs\projects\Example_programs\Practise\0-Basic_PHP\Aug15.php on line 44
	/**/

	/*echo 'Passing multiple argument :'.'<br/>';
	function display(){
		if(func_num_args() > 0){
			$len = func_get_args();

			$sum = 0;

			foreach($len as $a){
					echo $a."<br/>";
					$sum +=$a;
					echo "SUM=".$sum.'<br/>';

			}
			echo "SUM=".$sum.'<br/>';

			$ele = func_get_arg(0);
			echo "Element:".$ele;
		}
	}
	display(10,20,30,40,50,60,70,80,90);
	/**/

	/*$string = "14302";
	$string[$string[2]] = "4";
	print $string;
	/**/
	
	/*$a = 10;
	$b = 20;
	function myFun(){
		global $a,$b;
		echo $a,$b;
	}
	echo myFun();

	function my(){
		echo $GLOBALS['a'],$GLOBALS['b'];
	}
	my();/**/

 	/*function getSal($uid){
		$var = func_get_arg(0);
		if(isset($var) && !empty($var)){
			echo $var;
		}
	}
	getSal(10);/**/

 	/*function hello(){
		if(func_num_args() > 0){
			$arg = func_get_arg(2);
			echo func_num_args();
			echo "<br />";
			echo "Hello $arg";
			echo "<br />";
		}else{
			echo "Hello world";
			echo "<br />";
		}
	}
	hello("Reader",'Hello',"Reader1");/**/

	/*function countAll($arg1){
		if(func_num_args() == 0){
			die("You need to specify at least one arg");
		}
		 else{
			$args = func_get_args();
			//var_dump($args);
			array_shift($args);
			$count = strlen($arg1);
			foreach ($args as $arg){
				$count += strlen($arg);
			}
		}
		return $count;
	}
	echo countAll("foobarss","bar","baz"); /**/
	
?>
