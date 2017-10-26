<?PHP

/*
	Test Basic
/**/

	/*$x = 10;
	echo $x;
	echo '<br />';
	echo "${x}";
	echo '<br />';
	echo "{$x}";
	echo '<br />';
	echo '$x';
	echo '<br />';
	echo "$x";/**/
	
	/*$name = 'foo';
	$$name = 'bar';
	echo $name;
	echo '<br />';
	echo $$name;
	echo '<br />';
	echo $foo;
	echo '<br />';
	echo 'test Bar' . $$$bar;/**/

	/*$name = '123';
	$$name = '456';
	$$$name = '456 last';
	$$$$name = '456 last to last';
	echo ${'123'};
	echo '<br />';
	echo ${'456'};
	echo '<br />';
	echo ${'456 last'};
	echo '<br />';
	echo $name;
	echo '<br />';/**/
	
	/*$var = 24;
	echo isset($var) ? 'Yes':'No';
	echo '<br />';
	echo empty($var) ? 'Yes':'No';
	echo '<br />';
	var_dump($var) ? 'Yes':'No';
	echo '<br />';
	print_r($var);
	echo '<br />';
	print $var;
	echo '<br />';
	unset($var);
	$var = '62';
	//reset($var); //reset() expects parameter 1 to be array, string given in H:\xampp\htdocs\projects\Example_programs\Practise\0-Basic_PHP\Aug15.php on line 71
	echo '<br />';
	echo $var;
	echo '<br />';
	echo '<br />';
	echo count($var);/**/


	// ***** Array *****
 	/*$yes = array('this', 'is', 'an array');
	//$yes = 'variable';
	echo $yes ? 'This is an Array' : 'not an Array';
	echo '<br />';
	echo is_array($yes) ? 'Array' : 'not an Array';
	echo '<br />';echo '<br />';
	if(is_array($yes)){
		echo 'Yes this is an array: ';
	} else {
		echo 'No this is not an array: ';
	}/**/
	
	/*$var = 25.23;
	if (is_float($var)) {
		echo "is float\n";
	} else {
		echo "is not float\n";
	}/**/
	
	/*$vsr = ((0.1 + 0.7) * 10);
	echo $vsr;
	echo '<br />';
	echo (int) $vsr;
	echo '<br />';
	echo (float) $vsr;
	echo '<br />';
	echo (int) ('someval');
	echo '<br />';
	echo (int) ('0');
	echo '<br />';
	if( '0' ){
		echo 'it returned true!';
	}else{
		echo 'in false';
	}/**/
	
	/*echo '<br />Variable variable / Dynamic variable name: ';
	$name = 'firstname';
	$$name = 'pqr';

	echo $firstname;
	echo '<br />isset example: ';
	if ( isset($firstname) )
	{
		echo 'variable is defined';
	}
	else
	{
		echo 'varaible not defined';
	}/**/

	/*echo '<br /> Constants: ';
	define('MYEMAIL','p@c.com');
	echo MYEMAIL;
	ECHO '<BR />';
	echo 'This is Constant mail: ' . MYEMAIL;
	/**/
	
	/*echo '<br />String comparison <br />';
	$lt = 'ABC';
	$rt = 'ABD';
	if( (int) $lt < $rt){
		echo 'lt lesser';
	}else{
		echo 'rt greater';
	}

	echo '<br />String comparison <br />';
	$lt = 'ABC';
	$rt = 'abc';
	if( (int) $lt < $rt){
		echo 'lt lesser';
	}else{
		echo 'rt greater';
	}/**/	
	
	/*echo '<br />Email comparison <br />';
	$user = strtoupper('sHruti@gmail.com');
	$db = strtoupper('Shruti@gmail.com');
	//	$db = strtolower('Shruti@gmail.com');

	if( $user == $db){
		echo 'user found';
	}else{
		echo 'no match';
	}/**/
	
	/*echo '<br /> Operators: <br />';
	echo 3+2 . "<br />";
	echo 3-2 . "<br />";
	echo 3/2 . "<br />";
	echo 3*2 . "<br />";
	echo 3%2 . "<br />";/**/

	/*echo '<br /> Incremental / decremental Operators: <br />';
	$mynum = 3;
	$num_a = ++$mynum;
	echo $num_a. "<br />";echo '<br />';

	$mynum = 3;
	$num_b = $mynum++;
	echo $num_b. "<br />";echo '<br />';

	$mynum = 3;
	$num_c = --$mynum;
	echo $num_c. "<br />";echo '<br />';

	$mynum = 3;
	$num_d = $mynum--;
	echo $num_d. "<br />";echo '<br />';/**/
	
	/*echo '<br />Referencing the variables: <br />';
	echo 'Pass by val <br />';
	$a = 10;
	$b = $a;
	$b += 10;
	$a = 30;
	echo $b;/**/

	/*echo '<br />Pass by Reference <br />';
	echo $a = 10;
	echo '<br />';
	echo $b = &$a;
	echo '<br />';
	echo $b += 10;
	echo '<br />';
	echo '<br />';	
	echo 'a:' .$a . "<br />";
	$a = 30;

	echo '<b>*** Please Note this - b: </b>' .$b; //*** Please Note this

	echo '<br />Comparison operator: <br />';
	unset($b);
	$a=10;$b = '10';
	echo '<br />Simple compare == : ';
	if($a== $b){
		echo 'same';
	}
	echo '<br />Identity compare === : ';
	if( $a === $b){
		echo 'same';
	}else{
		echo 'not same';
	}
	echo '<br />Simple compare != : ';
	if($a!=$b){
		echo 'not same';
	}else{
		echo ' same';
	}
	echo '<br />not identical operator == : ';
	if( $a !== $b){
		echo 'not same';
	}else{
		echo ' same';
	}
	echo '<br />les than or equal operator <= : ';
	if( $a <= $b){
		echo 'lesser / equal';
	}else{
		echo 'condition fail';
	}
	echo '<br />greater than or equal operator >= : ';
	if( $a >= $b){
		echo 'greater / equal';
	}else{
		echo 'condition fail';
	}
	echo '<br />greater than operator >: ';
	$a = 20;
	if( $a > $b){
		echo 'a greater';
	}else{
		echo 'a lesser';
	}
	echo '<br />less than operator < : ';
	$b= 15;
	if( $a < $b){
		echo 'a lesser';
	}else{
		echo ' a greater';
	}/**/
	
	/*echo '<br />Email comparison, with password comparison <br />';
	$user = strtoupper('sHruti@gmail.com');
	$db = strtoupper('Shruti@gmail.com');
	$userP = strtoupper('xtyu');
	$dbP = strtoupper('xtyu');

	if( $user == $db AND $userP == $dbP){
		echo 'user & password match';
	}else{
		echo 'no match';
	}
	echo '<br /><b>Error suppression: </b><br />';
	echo $somevariable;
	echo @$somevariable ." example";

	$myvar = 'ls -l';
	echo $myvar;

	if( $user == $db AND $userP == $dbP){
		echo 'You are logged in';
	}elseif($user == $db){
		echo 'You have entered a wrong password';
	}else{
		echo 'no match';
	}
	//$userP = 'cv';
	echo '<br />Ternary operator<br />';
	$loginstate = ($user == $db AND $userP == $dbP)?'loggedin':'not logged';
	echo $loginstate;/**/
	
	/*echo 'BOOLVAL: ';echo '<br />';
	echo '0:        '.(boolval(0) ? 'true' : 'false') . '<br />';echo '<br />';
	echo '42:       '.(boolval(42) ? 'true' : 'false') . '<br />';echo '<br />';
	echo '0.0:      '.(boolval(0.0) ? 'true' : 'false') . '<br />';echo '<br />';
	echo '4.2:      '.(boolval(4.2) ? 'true' : 'false') . '<br />';echo '<br />';
	echo '"":       '.(boolval("") ? 'true' : 'false') . '<br />';echo '<br />';
	echo '"string": '.(boolval("string") ? 'true' : 'false') . '<br />';echo '<br />';
	echo '"0":      '.(boolval("0") ? 'true' : 'false') . '<br />';echo '<br />';
	echo '"1":      '.(boolval("1") ? 'true' : 'false') . '<br />';echo '<br />';
	echo '[1, 2]:   '.(boolval([1, 2]) ? 'true' : 'false') . '<br />';echo '<br />';
	echo '[]:       '.(boolval([]) ? 'true' : 'false') . '<br />';echo '<br />';
	echo 'stdClass: '.(boolval(new stdClass) ? 'true' : 'false') . '<br />';echo '<br />';
	
	$val = 42;
	echo boolval($val) ? 'YES':'NO';
	echo boolval($val) ? 'true':'false';
	echo boolval($val);/**/
	
	/*echo 'debug_zval_dump';
	$var1 = 'Hello World';
	$var2 = '';
	$var2 = &$var1;
	debug_zval_dump(&$var1);/**/
	
	//http://stackoverflow.com/questions/4221645/why-the-refcount-is-2-not-1
	//http://stackoverflow.com/questions/3764686/get-the-reference-count-of-an-object-in-php

	/*$var = 1;              # $var's Refcount = 1
	//$var = 'Girish kumar A';              # $var's Refcount = 1
	debug_zval_dump($var); # $var is passed by refrence intarlly./**/

	/*
	// To see Memory Usage:
	function convert($size){
		$unit = array('b','kb','mb','gb','tb','pb');
		return @round($size/pow(1024, ($i = floor(log($size,1024)))),2) . ' ' .$unit[$i];
	}
	echo convert(memory_get_usage(true));/**/

	/*
	// To check time take to execute function
	$start = microtime(true);
	for ($x=0;$x<10000;$x++) {
		$x;
	}
	sleep(3);
	$end = microtime(true);
	echo '<br /><b>It took ' . ($end-$start) . ' seconds!</b>'; /**/

//	$time_start = microtime(true);
//	// Sleep for a while
//	usleep(2);
//	$time_end = microtime(true);
//	echo $time = $time_end - $time_start;

	/*$var = '122.34343The';
	$float_value_of_var = floatval($var);
	echo $float_value_of_var; // 122.34343
	echo '<br />';
	$var = '25.33this';
	$float_value_of_var = floatval($var);
	echo $float_value_of_var;/**/
	
//	$b = array(1, 1, 2, 3, 5, 8);
//	$arr = get_defined_vars();
//	print_r($arr["b"]);

	/*$data = array(1, 2.3, 1., NULL, new stdClass, 'foo');
	foreach ($data as $value) {
		echo gettype($value), "\n";
		echo '<br />';
	}
	//echo '<br />';
	$data = 21.36;
	echo gettype($data);/**/

	// This will import GET and POST vars
	// with an "rvar_" prefix
//	import_request_variables("gp", "rvar_");
//	echo $rvar_foo;

	/*echo 'INTVAL';
	echo intval(42);echo '<br />';                      // 42
	echo intval(4.2);echo '<br />';                     // 4
	echo intval('42');echo '<br />';                    // 42
	echo intval('+42');echo '<br />';                  // 42
	echo intval('-42');echo '<br />';                   // -42
	echo intval(042);echo '<br />';                     // 34
	echo intval('042');echo '<br />';                   // 42
	echo '1e10:- ' . intval(1e10);echo '<br />';                    // 1410065408
	echo intval('1e10');echo '<br />';                  // 1
	echo '0x1A:- ' . intval(0x1A);echo '<br />';                    // 26
	echo intval(42000000);echo '<br />';                // 42000000
	echo intval(420000000000000000000);echo '<br />';   // 0
	echo intval('420000000000000000000');echo '<br />'; // 2147483647
	echo intval(42, 8);echo '<br />';                   // 42
	echo intval('42', 8);echo '<br />';                 // 34
	echo intval(array());echo '<br />';                 // 0
	echo intval(array('foo', 'bar'));echo '<br />';     // 1/**/
	
	/*$a = false;
	//$b = true;
	//$b = 'YES';
	$b = 0;

	// Since $a is a boolean, it will return true
	//if (is_bool($a) === true) {}
	if (is_bool($a)) {
		echo "Yes, this is a boolean";
		echo '<br />';
	}

	// Since $b is not a boolean, it will return false
	//if (is_bool($b) === false) {}
	if (!is_bool($b)) {
		echo "No, this is not a boolean";
		echo '<br />';
	} else {
		echo "Yes, this is a boolean";
		echo '<br />';
	}/**/
	
	/*function someFunction(){
		echo 'test';
	}
	$functionVariable = 'someFunction';
	var_dump(is_callable($functionVariable, false, $callable_name));  // bool(true)
	echo $callable_name, "\n";  // someFunction

	class someClass {
	  function someMethod(){
	  }
	}
	$anObject = new someClass();
	$methodVariable = array($anObject, 'someMethod');
	var_dump(is_callable($methodVariable, true, $callable_name));  //  bool(true)
	echo $callable_name, "\n";  //  someClass::someMethod /**/
	
	/*class Foo {
		public function __construct() {}
		public function foo() {}
	}
	var_dump(
		is_callable(array('Foo', '__construct')),
		is_callable(array('Foo', 'foo'))
	);/**/	
	
	/*$values = array(23, "23", 23.5, "23.5", null, true, false);
	foreach ($values as $value) {
		echo "is_int(";
		var_export($value);
		echo ") = ";
		var_dump(is_int($value));
		echo '<br />';
	}
	$test = 256;
	echo is_int($test) . '<br />';
	echo is_integer($test);/**/
	
	/*error_reporting(E_ALL);
	$foo = NULL;
	var_dump(is_null($inexistent), is_null($foo));
	echo is_null($foo);
	echo '<br />';
	var_dump(is_null($foo));
	echo '<br />';
	$inexistent = '';
	var_dump(is_null($inexistent));/**/
	
	/*$tests = array(
		"42",
		1337,
		0x539,
		02471,
		0b10100111001,
		1337e0,
		"not numeric",
		array(),
		9.1
	);

	foreach ($tests as $element) {
		if (is_numeric($element)) {
			echo "'{$element}' is numeric", PHP_EOL;
			echo '<br />';
		} else {
			echo "'{$element}' is NOT numeric", PHP_EOL;
			echo '<br />';
		}
	}
	
	$ele = "testing";
	echo is_numeric($ele);/**/

	/*function get_students($obj){
		if (!is_object($obj)) {
			return false;
			//return true;
		}
		return $obj->students;
	}
	$obj = new stdClass();
	$obj->students = array('Kalle', 'Ross', 'Felipe');
	var_dump(get_students(null));
	echo '<br />';
	var_dump(get_students($obj));/**/
	
	/*$float = 50.97;
	//if(is_float($float))
	if(is_real($float))
	{
		echo $float."is a float";
	}
	else
	{
		echo $float. "is not a float";
	}/**/
	
	/*$db_link = @mysql_connect('localhost', 'root','');
	if (!is_resource($db_link)) {
		die('Can\'t connect : ' . mysql_error());
	} else {
		echo 'Connected';
	}
	echo is_resource($db_link);
	var_dump(is_resource($db_link));
	print_r(is_resource($db_link));/**/
	
	/*$values = array(false, true, null, 'abc', '23', 23, '23.5', 23.5, '', ' ', '0', 0,'girish');
	foreach ($values as $value) {
		echo "is_string(";
		var_export($value);
		echo ") = ";
		echo var_dump(is_string($value));
		echo '<br />';
	}
	
	$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
	print_r ($a);
		
	$foo = "5bar"; // string
	$bar = true;   // boolean

	echo settype($foo, "integer"); // $foo is now 5   (integer)
	echo settype($bar, "string");  // $bar is now "1" (string)
		
	class StrValTest{
		public function __toString(){
			return __CLASS__;
		}
	}
	// Prints 'StrValTest'
	echo strval(new StrValTest);

	$a = array (1, 2, array ("a", "b", "c"));
	var_export($a);
	echo '<br />';
	var_dump($a);	//Outputs or returns a parsable string representation of a variable
	/**/

	/*define('email', 'girishkumar.aorg@gmail.com');
	echo email;
	
	define('USE_XML', true);
	echo USE_XML;

	if (defined('TEST')) {
		echo TEST;
	}
		
	$browser = get_browser(null, true);
	print_r($browser);

	// current time
	echo date('h:i:s') . "\n";

	// sleep for 10 seconds
	sleep(20);
	//usleep(20);

	// wake up !
	echo date('h:i:s') . "\n";/**/
	
	/*$a = 1;
	echo $a++ . '<br />';
	echo $a . '<br />';
	
	echo ++$a . '<br />';
	echo $a-- . '<br />';
	echo --$a . '<br />';
	
	$a = 'Test';
	echo ++$a . '<br />';//u
	echo ++$a . '<br />';//v
	echo ++$a . '<br />';//w
	echo ++$a . '<br />';//x
	echo ++$a . '<br />';//y
	echo ++$a . '<br />';//z
	echo ++$a . '<br />';//a
	echo ++$a . '<br />';//b
	
	$string = 'girish';
	$string .= 'kumar';
	$string .= 'A';
	$string2 = 'Apple';
	
	echo $string . $string2;
	echo '<br />';
	echo '<br />';
	$var = 1;
	echo $var2 = $var += 3;
	echo '<br />';
	echo $var2 +=1;
	
	echo '<br />';
	echo '<br />';
	$a = 10;
	$b =20;
	$b = $a;
	echo $a;
	
	echo '<br />';echo '<br />';echo '<br />';
	$x = 10;
	$y = &$x; // By reference
	$y = 20;
	echo $x;/**/
	
	/*$left = "ABC";
	$right = "ABD";
	
	$varl = (int)($left < $right);
	echo $varl;/**/
	
	/*$x = 10;
	echo 10 == $x ? 'YES':'NO';/**/
	
	/*$a = 120;
	switch($a){
		case 1:
			echo 'This is first place';
			break;
		case 4:
			echo 'This is forth place';
			break;
		case 6:
			echo 'This is sixth place';
			break;
		case 9:
			echo 'This is Ninth place';
			break;
		case 12:
			echo 'This is 12th  place';
			break;
		default:
			echo 'Sorry you don\'t have any place!';
			break;
	}/**/
	
	/*echo '<br />Switch Case example: <br />';
	$mychoice=0;

	if( isset( $_GET['anyname'] ) ){
		$mychoice = $_GET['anyname'];
	}
	switch($mychoice){
		case 1: echo 'selected one';break;
		case 2: echo 'selected two';break;
		case 3: echo 'selected three';break;
		case 4: echo 'selected four';break;
		default:echo 'You have chosen something else...';
	}/**/

	/*$ij = 1;
	while($ij <= 10) {
		echo $ij . '<br />';
		$ij++;
	}
	echo '<br />';echo '<br />';
	$i = 1;
	do{
		echo $i . '<br />';
		$i++;
	}while($i <= 10);/**/
	
	/*echo 'do While loop:'.'<br/>';
	$i = 0;
	$sum = 0;
	do {
		echo $i . PHP_EOL;
		echo '<br />';
		$sum += $i;
		$i++;
	}
	while ($i <= 20);
	echo 'SUM:'.$sum . '<br />';
	echo 'Hello';
	/**/

	/*echo 'While loop:'.'<br/>';
		$i = 0;
		while ($i <= 10) {
			echo $i . PHP_EOL;
			$i++;
		}
	/**/

	/*echo '<br />WHILE Loop example<br />';
	$myvar = 0;
	$eachbill = 15000;
	$billtotal =0;

	while ($myvar < 10){
		echo $myvar . '<br />';

		//govt decides 4th type of bill cannot be put in this excemption
		if($myvar == 3){
			$myvar++;
			continue;
		}
		$myvar++;
		$billtotal += 	$eachbill;
		echo $billtotal . '<br />';
		if( $billtotal  >= 100000){
			$billtotal = 100000;
			echo $billtotal . '<br />';
			break;
		}
	}

	echo '<br />Your total exclusion amount are: $billtotal' . '<br />';
	echo "Your total exclusion amount are: { $billtotal }". '<br />';

	echo (((10 + 1) * 5) / 4) * 30 - 20;/**/
	
	//$j = 'testing';
	/*for($i = 0; $i < 10; $i++) {
		for($j = 0; $j <= 3; $j++) {
			echo $i .'=>'. $j . '<br />';
		}
	}/**/

	/*echo '<br />FOR Loop example<br />';
	for($x=0,$j=20; $x<10 AND $j<=20 ;$x++, $j--){
		echo $x .' :x ' . $j . ' :j' . "<br />";
	}/**/
	
	/*$b = array(34,676,89);
	for($i = 0; $i <= 10;$i++){
		if($i == 5 && $b > 50){
			echo $i."-->".'This is VIP fifth row reserved:'."<br />";
			foreach($b as $num){
				if($b > 50){
					echo $num."<br />";
				}
			}
		}elseif($i <= 4){
			echo $i."-->" . 'This row booked find NEXT';
		}
		else{
			echo $i."-->" .'EMPTY';
		}
		echo '<br/ >';
	}
	/**/

	/*for($i = 0; $i < 10; $i++){
		echo "$i" . "world" . "<br/ >";
		for($j = 0; $j < 3; $j++){
			echo "HELLO"."<br />";
			if(($j + $i) % 5 == 0){
				continue;
			}
		}
	}
	/**/
	
	/*$var = array(1,2,3,4,5,6);
	//$var = ['name','girish','kumar'];
	//$var = ('name','girish','kumar');
	
	echo 'Var dump values:- '.var_dump($var).'<br />';
	echo '<br />';
	echo 'Print r values:- '.print_r($var).'<br />';
	echo '<br />';
	echo 'Var export values:- '.var_export($var).'<br />';/**/
	
	/*$var = array(1,2,3,4,5,6);
	for($j = 0; $j <= 3; $j++) {
		foreach($var as $test){
			echo $j.'=>'.'Foreach values: '.$test.'<br />';
		}
		echo '<br />';
	}/**/
	
	/*for($j = 0; $j <= 3; $j++) {
		if($j > 2 && $j <=3){
			continue;
			echo $j . PHP_EOL;
		}
	}/**/
	
	/*$msg = "The Quick Brown Foxed Jumped Over the Lazy Dog";

	$state = true;
	$retval = "";
	for($i = 0; (isset($msg[$i])); $i++) {
		if($state) {
			$retval .= strtolower($msg[$i]);
		} else {
			$retval .= strtoupper($msg[$i]);
		}
		$state = !$state;
	}
	print $retval . '<br />';
	echo $retval . '<br />';
	print_r($retval) . '<br />';
	/**/
	
	/*$var = "Hello";
	$$var = "How are you?";
	$var = $$var;
	echo $Hello;
	/**/

	/*$ch = 1;
	$a=10;
	$b=20;

	//if(isset($_GET['choiceone'] || $_GET['choicetwo'])){
		//$a = $_GET['choiceone'];
		//$a = $_GET['choicetwo'];
	//}

	switch($ch){
		case 1:
			echo 'You have selected  Addition';
			echo '<br />';
				$sum= $a + $b;
				echo 'Addition= a + b'. '<br />';
				echo "Addition is:$sum";
			break;
		case 2:
			echo 'You have selected  Subtraction';
			echo '<br />';
				$sum= $a - $b;
				echo "Subtraction is:$sum";
			break;
		case 3:
			echo 'You have selected  Multiply';
			echo '<br />';
				$sum= $a * $b;
				echo "Multiply is:$sum";
			break;
		case 4:
			echo 'You have selected  Division';
			echo '<br />';
				$sum= $a / $b;
				echo "Division is:$sum";
			break;
		case 5:
			echo 'You have selected  Modulus';
			echo '<br />';
				$sum= $a % $b;
				echo "Modulus is:$sum";
			break;
		default:
			echo 'Out of range';
			echo '<br />';
	}/**/



	//Creating an asterisk symbol
//	$totalRows =5;
//	$totalStar=1;
//	for($rows=1; $rows<=$totalRows; $rows++){
//		if($rows!=1){
//			$totalStar+=2;
//		}
//		$cols=$totalStar;
//		$space = $space1 = $totalRows-$rows;
//
//		/** create first space **/
//		while($space>0){
//			echo ' ';
//			$space--;
//		}
//
//		/** create star **/
//		while($cols>0){
//			echo "* ";
//			$cols--;
//		}
//
//		/** create second space **/
//		while($space1>0){
//			echo ' ';
//			$space1--;
//		}
//
//		echo "";
//	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>