<?php

	/*$a = array('abc','def','ghi',array('1abc1','1def1','1ghi1'),'xyz');
	//print_r($a);
	echo '<br />';
	//var_dump($a);
	$address = array('address1'=>'banglore','address2'=>'tumkur','apple'=>$a);
	$array = array('name'=>'abc','age'=>'34','address'=>$address);/**/
	
	/*$arraynew = array('Key1'=>'Value1','Key2'=>'Value2','Key3'=>'Value3','Key3'=>'Value3');
	
	function displayArray($arraynew) {
		reset($arraynew);
		//end($arraynew);
		while(key($arraynew) !== null){
			echo key($arraynew) .":".current($arraynew) . '<br />';
			next($arraynew);
			prev($arraynew);
		}		
	}
	displayArray($arraynew);/**/
	
	/*
	echo 'Return Values';
	function add($a,$b) {
		$total = $a + $b;
		return $total;
	}
	echo add(5,55);/**/
	
	/*$arraynew = array('Key1'=>'Value1','Key2'=>'Value2','Key3'=>'Value3','Key3'=>'Value3');
	
	foreach($arraynew as $key=>$value) {
		echo "$key: $value";
	}/**/

	/*$a = array(1,2,3);
	
	foreach($a as $k => $v){
		echo $v . '<br />';
		echo $v = 'This is 1;-' . 1 . '<br />';
	}/**/
	
	/*$arraynew = array('Key1'=>'Value1','Key2'=>'Value2','Key3'=>'Value3','Key3'=>'Value3');
	$b = array('a'=>'foo','b'=>'bar','c'=>'baz','d'=>1,'e'=>'bee');
	$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
	//sort($b); //acb order and key value's are 0,1,2,3,4,5....
	//(effectively destroys all the keys in the array and renumbers its elements starting from zero)
	//var_dump($b);
	echo '<br />';
	asort($fruits);
	var_dump($fruits);/**/
	
	/*$arr = array('10t','2t','3t','5','1','apple','ball');
	natsort($arr);
	var_dump($arr);/**/
	
	/*$arr = array('a'=>10,'b'=>20,'c'=>40,'d'=>50);
	ksort($arr);
	var_dump($arr);/**/
	
	/*function myCmp($left, $right){
		$diff = strlen($left) - strlen($right);
		if(!$diff) {
			return strcmp ($left, $right);
		}
		return $diff;
	}
	echo myCmp('left', 'right');
	echo '<br />';
	$u = array('three','2two','one','two');
	usort($u, 'myCmp');
	var_dump($u);/**/
	
	/*$car = array(1,2,3,4,5,5.5,10.01,'apple');
	shuffle($car);
	var_dump($car);/**/
	
	/*$cards = array('a'=>10,'b'=>12,'c'=>13);
	$keys = array_keys($cards);
	shuffle($keys);
	foreach ($keys as $v) {
		echo $v . " - " . $cards[$v] . "\n" . '<br />';
	}/**/
	
	/*$cards = array('a'=>10,'b'=>12,'c'=>13);
	$keys = array_rand($cards, 2);
	var_dump($keys);
	echo '<br />';
	var_dump($cards);/**/
	
	/*$stack = array();
	array_push($stack, 'bar', 'baz', 'nand', 'Rand');
	var_dump($stack);
	echo '<br />';
	$last_in = array_pop($stack);
	echo '<br />';
	var_dump($last_in, $stack);
	
	$cards = array(1,2,3,4,5);/**/
	
	/*$stack = array('qux','bar','baz');
	$first_element = array_shift($stack);
	var_dump($first_element) . '<br />';
	echo '<br />';
	var_dump($stack);
	array_unshift($stack, 'foo');
	echo '<br />';
	var_dump($stack);
	array_unshift($stack, 'foo22');
	echo '<br />';
	var_dump($stack);/**/
	
	/*$a = array(1,2,3);
	$b = array(1,3,4);
	var_dump(array_diff($a, $b));
	echo '<br />';
	var_dump(array_diff_assoc($a, $b));
	echo '<br />';
	var_dump(array_diff_key($a, $b));
	echo '<br />';
	//var_dump(array_diff_key($a, $b));
	echo '<br />';
	//var_dump(array_diff_ukey($a, $b));
	echo '<br />';
	var_dump(array_intersect($a, $b));
	echo '<br />';/**/
	
	/*class a {
		function test(){
			echo "a::test called";
		}
		function func(){
			echo "a1::func called";
		}
	}
	
	class b extends a {
		function test2(){
			echo "b::test called";
		}
	}	
	
	$apple = new a();
	$apple->test();
	echo '<br />';
	$apple->func();
	
	echo '<br />';
	echo '<br />';
	
	$bat = new b();
	$bat->test2();
	echo '<br />';
	$bat->test();
	echo '<br />';
	$bat->func();
	
	echo '<br />';
	echo '<br />';
	
	class c extends a {
		function test3(){
			echo 'c::test called';
		}
	}
	
	$cat = new c();
	$cat->test3();
	echo '<br />';
	$cat->test();/**/
	
	/*class myClass{
		function myFunction($data,$test,$testdata){
			echo "The value is $data";
			echo '<br />';
			echo "The value is $test";
			echo '<br />';
			echo "The value is $testdata";
		}
		function callMyFunction($data,$test,$testdata){
			$this->myFunction($data,$test,$testdata);

		}
	}
	$var = new myClass();
	$var->callMyFunction("Girish kumar. A","Test","Test data");
	//$var->myFunction("Girish kumar. A","Test","Test data");/**/
	
	/*class foo{
		function __construct(){
			echo __METHOD__ . '<br />';
			echo 'This is constructor1' . '<br />';
			echo 'This is constructor2' . '<br />';
			echo 'This is constructor3' . '<br />';
		}
	}
	$var = new foo();
	echo '<br />';
	echo '<br />';
	
	class bar{
		function __destruct(){
			echo __METHOD__ . '<br />';
			echo 'This is destruct1' . '<br />';
			echo 'This is destruct2' . '<br />';
			echo 'This is destruct3' . '<br />';
		}
	}
	$var2 = new bar(); /**/
	
	/*class foo{
		public $foo = 'bar';
		protected $baz = 'bat';
		private $qux = 'bingo';
		
		function __construct() {
			var_dump(get_object_vars($this));
		}
	}
	
	class bar extends foo {
		function __construct() {
			var_dump(get_object_vars($this));
		}
	}
	
	class baz {
		function __construct() {
			$foo = new foo();
			var_dump(get_object_vars($this));
		}
	}
	
	$var1 = new foo();
	echo '<br />';
	$var2 = new bar();
	echo '<br />';
	$var3 = new baz(); /**/
	
	/*class foo {
		static $bar = 'bat';
		static public function baz() {
			echo "Hello World";
		}
	}
	$foo = new foo();
	$foo->baz();
	//echo $foo->bar;
	echo '<br />';
	class foo2{
		const BAR = "Bar Hello World";
	}
	echo foo2::BAR;/**/
	
	/*class Foo {
		public static $bar ="FooBar";
		public static function hello($var) {
			return $var;
		}
	}
	echo Foo::hello('Match');
	echo '<br />';
	echo '<br />';

	class Foo2 {
		public static $bar2 ="FooBar";
		public static function hello2() {
			echo 'hello class gflsj das;lfdjaslfk dslfjdasolfjds fdlasfjklj';
		}
	}
	//echo Foo2::hello2();
	Foo2::hello2();/**/
	
	/*
	Your job profile should mention your key responsibility areas, key performance indicators and achivements at this job.

	class foo {
		public function bar() {
			echo 'foobar<br />';
			return $this;
		}
		public function baz() {
			echo 'foobaz';
		}
	}
	$var1 = new foo();
	$var1->bar()->baz();/**/

	/*class Test {
		function __call( $var1, $var2 ) {
			$check = " '$var1' called\n" . '<br />';
			$check.= print_r( $var2, true );
			return $check;
		}
	}
	$item = new Test();
	print $item->array( "John", "Maria", "Jason" ); /**/
	
	/*class BaseClass{
		function __construct(){
			print "In BaseClass constructor\n";
		}
	}
	
	class SubClass extends BaseClass {
		function __construct(){
			parent::__construct();
			echo '<br />';
			print "In SubClass constructor\n";
		}
	}
	$obj = new BaseClass();
	echo '<br />';
	$obj = new SubClass();/**/
	
	/*Class MyClass {
		public $public = "public";
		protected $protected = "protected";
		private $private = "private";
		
		function printHello(){
			echo 'Inside the function:- ' . $this->public . '<br />';
			echo 'Inside the function:- ' . $this->private . '<br />';
			echo 'Inside the function:- ' . $this->protected . '<br />';
		}
	}
	$obj = new MyClass();
	echo 'Outside the class:- ' . $obj->public . '<br />';
	//echo $obj->protected . '<br />'; // Fatal error
	//echo $obj->private . '<br />'; // Fatal error
	$obj->printHello();

	class MyClass2 extends MyClass {
		protected $protected = 'Protected2';
		//protected $private = 'private2';
		function printHello(){
			echo 'Inside the function2:- ' . $this->public . '<br />';
			echo 'Inside the function2:- ' . $this->protected . '<br />';
			echo 'Inside the function2:- ' . $this->private . '<br />';
		}
	}
	
	$obj2 = new MyClass2();
	echo 'Outside the class2:- ' . $obj2->public . '<br />';
	//echo 'Outside the class2:- ' . $obj2->private . '<br />'; //undefined property
	//echo 'Outside the class2:- ' . $obj2->protected . '<br />'; //Cannot access protected property Fatal Error
	$obj2->printHello(); /**/
	
	/*class MyClass {
		public function __construct() {}
		
		public function MyPublic(){
			echo 'Test Public';
		}
		
		protected function MyProtected(){
			echo 'Test Protected';
		}
		
		private function MyPrivate() {
			echo 'Test Private';
		}
		
		function Foo() {
			echo '<br />';
			$this->MyPublic();
			echo '<br />';			
			$this->MyProtected();
			echo '<br />';			
			$this->MyPrivate();
			echo '<br />';
		}
	}
	
	$myClass = new MyClass;
	$myClass->MyPublic();
	//$myclass->MyProtected(); // Fatal Error
	//$myclass->MyPrivate(); // Fatal Error
	$myClass->Foo();
	
	echo '<br />';
	echo '<br />';
	class MyClass2 extends MyClass {
		function Foo2(){
			$this->MyPublic(); // coming
			$this->MyProtected(); // coming
			$this->MyPrivate();
		}
	}
	
	$myClass2 = new MyClass2;
	echo 'Foo2:- ' . $myClass2->MyPublic(); // coming
	echo '<br />';
	$myClass2->Foo2();/**/
	
	/*class Bar {
		public function test() {
			$this->testPrivate();
			$this->testPublic();
		}
		
		public function testPublic(){
			echo "Bar::testPublic\n" . '<br />';
		}
		private function testPrivate(){
			echo "Bar::testPrivate\n" . '<br />';
		}
	}
	
	class Foo extends Bar {
		public function testPublic() {
			echo "Foo:: testPublic\n" . '<br />';
		}
		private function testPrivate(){
			echo "Foo::testPrivate\n" . '<br />';
		}
	}
	$myFoo = new Foo();
	$myFoo->test();/**/
	
	/*class Test{
		private $foo;
		
		public function __construct($foo) {
			echo $this->foo = $foo . '<br />';
		}
		private function bar(){
			echo 'Accessed the private method. Hi ' . $this->foo;
		}
		public function baz(Test $other) {
			$other->foo = 'Hello is';
			var_dump($other->foo);
			
			$other->bar();
		}
	}
	
	$test = new Test('testdd');
	$test->baz(new Test('otherdd'));/**/
	
	/*class MyClass {
		const const_value = 'A constant value123';
	}
	$classname = 'MyClass';
	echo $classname::const_value;
	echo '<br />';
	echo MyClass::const_value;
	
	class OtherClass extends MyClass {
		public static $my_static = 'static var123';
		
		public static function doubleColon(){
			echo '<br />';
			echo parent::const_value;
			echo '<br />';
			echo self::$my_static;
		}
	}
	
	$classname = 'otherClass';
	echo $classname::doubleColon();
	otherClass::doubleColon();/**/
	
	/*class Myclass {
		protected function myFunc(){
			echo "1MyClass::myFunc()\n";
		}
	}
	class OtherClass extends MyClass {
		public function myFunc(){
			parent::myFunc();
			echo '<br />';
			echo "2OtherClass::myFunc()\n";
		}
	}
	$class = new OtherClass();
	$class->myFunc();/**/
	
	/*Important:-
Key responsibility:- UI developer( HTML, CSS, JAVASCRIPT, JQUERY, AJAX ) for 1+ year and from 4 to 5 month's i am working with coding part( PHP, MSQL, TYPO3(CMS) ) along with UI development )
	/**/

	//echo "1" + 2 * "0x02";
	//echo "1" + 2 * "0x02";
	
	/*abstract class AbstractClass {
		abstract protected function getValue();
		abstract protected function prefixValue($prefix);
		
		public function printout() {
			print $this->getValue();
		}
	}

	class ConcreteClass1 extends AbstractClass {
		protected function getValue(){
			return "ConcreteClass1" . '<br />';
		}
		public function prefixValue($prefix) {
			return "{$prefix}ConcreteClass1" . ' : Prefix1' . '<br />';
		}
	}
	
	class ConcreteClass2 extends AbstractClass {
		public function getValue(){
			return "ConcreteClass2" . '<br />';
		}
		public function prefixValue($prefix) {
			return "{$prefix}ConcreteClass2" . ': Prefix2' . '<br />';
		}
	}
	
	$class1 = new ConcreteClass1;
	$class1->printOut();
	echo $class1->prefixValue('Foo1_');
	
	$class2 = new ConcreteClass2;
	$class2->printOut();
	echo $class2->prefixValue('Foo2_');/**/

	/*abstract class Animal {
		public $name;
		public $age;
		
		public function Describe() {
			return $this->name . "," . $this->age ." years old";
		}
		abstract public function Greet();
	}
	
	$animal = new Animal; //you can not directly instantiated and object insted you have to exted that and that ectend class you have to instantiate in that is called abstract
	$animal->name = "Bob";
	$animal->age = "16";
	echo $animal->Describe(); /**/
	
	/*
	PHP BASICS
FUNCTIONS
ARRAYS
STRINGS AND PATTERNS
WEB PROGRAMMING
OOP'S
DATABASE PROGRAMING
OBJECT ORIENTED DESIGN
XML AND WEB  SERVICES
SECURITY
SRTEAMS AND NETWORK PROGRAMMING
DIFFERENCES BETWEEN PHP4 AND PHP5
/**/

/*echo "1".print(2)+3;
echo '<br />';
echo "1";
echo '<br />';
echo print(2)+3;
echo '<br />';
echo print(2);
echo '<br />';
echo print(445);
echo '<br />';

girishkumarias@gmail.com/**/

	/*$handle = fopen('Testfile.txt', 'w');
	fwrite($handle, 'girish kumar');/**/
	
	/*interface I1 {
		const v1 = "Hi this is interface";
		public function display();
	}

	class testint implements I1 {
		function display(){
			echo "Interface Method";
		}
	}
	
	$obj = new testint(); //create object
	$obj->display(); //create method
	echo testint::v1;/**/

	/*interface iTemplate {
		public function setVariable($name, $var);
		public function getHtml($template);		
	}
	class Template implements iTemplate {
		private $vars = array();
		public function setVariable($name, $var) {
			$this->vars[$name] = $var;
		}
		public function getHtml($template) {
			foreach ($this->vars as $name->$value) {
				$template = str_replace ('{'.$name.'}',$value, $template);
			}
			return $template;
		}
	}
	class BadTemplate implements iTemplate {
		private $vars = array();

		public function setVariable($name, $var) {
			echo $this->vars[$name] = $var;
		}
		public function getHtml($template) {
				echo $template;
		}
	}
	
	$obj = new Template();
	$obj->setVariable('girish','test');
	$obj->getHtml('GetHtmlTest');/**/
	
	/*interface a {
		public function foo();
	}
	interface b {
		public function bar();
	}
	interface c  extends a,b{
		public function baz();
	}
	class d implements c {
		public function foo(){
			echo 'D: foo';
		}
		public function bar(){
			echo 'D: bar';
		}
		public function baz(){
			echo 'D: baz';
		}
	}
	$obj = new d();
	$obj->foo();
	$obj->bar();
	$obj->baz();
	
	/**/
	
	/*class Base {
		public function sayHello(){
			echo 'Hello';
		}
	}
	trait SayWorld {
		public function sayHello(){
			parent::sayHello();
			echo 'World!';
		}
	}
	class MyHelloWorld extends Base {
		use SayWorld;
	}
	
	$obj = new MyHelloWorld();
	$obj->sayHello();
	
	trait HelloWorld {
		public function sayHello() {
			echo '<br /><h2>Hello World 2!</h2><br />';
		}
	}
	class TheWorldIsNotEnough{
		use HelloWorld;
		public function sayHello(){
			echo '<br /><h2>Hello Universe!</h2><br />';
		}
	}
	
	$obj = new TheWorldIsNotEnough;
	$obj->sayHello();/**/
	
	/*trait Hello {
		public function sayHello(){
			echo 'Hello3 ';
		}
	}
	trait World {
		public function sayWorld(){
			echo 'World3';
		}
	}
	class MyHelloWorld {
		use Hello, World;
		public function sayExclamationMark(){
			echo "!";
		}
	}
	$obj3 = new MyHelloWorld;
	$obj3->sayHello();
	$obj3->sayWorld();
	$obj3->sayExclamationMark();/**/
	
	/*trait A {
		public function smallTalk(){
			echo 'a';
		}
		protected function bigTalk(){
			echo 'A Apple';
		}
	}
	trait B {
		public function smallTalk(){
			echo 'b ball';
		}
		public function bigTalk(){
			echo 'B';
		}
	}

	class Talker {
		use A, B {
			B::smallTalk insteadof A;
			A::bigTalk insteadof B;
			A::bigTalk as public;
			
		}
	}

	class Aliased_Talker {
		use A, B {
			B::smallTalk insteadof A;
			A::bigTalk insteadof B;
			B::bigTalk as talk;
		}
	}
	
	//$obj9 = new Aliased_Talker();
	//$obj9->smallTalk();
	//echo '<br />';
	//$obj9->bigTalk();
	$obj19 = new Talker();	
	$obj19->smallTalk();
	echo '<br />';
	$obj19->bigTalk();
	echo '<br />';
	var_dump(class_uses($obj19));/**/
	

    /*class A {};
    class B1 extends A {};
    class_alias('A', 'B2');
    $b1 = new B1; echo get_class($b1);
    $b2 = new B2; echo get_class($b2);/**/
	
	/*trait Hello {
		public function sayhello(){
			echo 'Hello-> Form trait Hello';
		}
	}
	trait World {
		public function sayWorld(){
			echo ' World-> Form trait World';
		}
	}
	trait Helloworld {
		use Hello, World;
	}
	
	class MyHelloWorld {
		use HelloWorld;
	}
	
	$obj = new MyHelloWorld();
	$obj->sayHello();
	$obj->sayWorld();/**/
	
	/*trait Hello {
		public function sayHelloWorld(){
			echo 'Hello' . $this->getWorld();
		}
		abstract public function getWorld();
	}
	
	class MyHelloWorld {
		private $world;
		use Hello;
		public function getWorld(){
			return $this->world;
		}
		public function setWorld($val){
			$this->world = $val;
		}
	}
	
	$obj4 = new MyHelloWorld();
	$obj4->getWorld();
	$obj4->setWorld(' Test');
	$obj4->sayHelloWorld();/**/
	
	/*trait  staticExamp {
		public static function doSomething(){
			return 'Doing something';
		}
	}
	class Example {
		use staticExamp;
	}
		
	Example::doSomething();/**/
	
	/*trait prop {
		public $y = 1;
	}
	class prop3 {
		use prop
		public $x = 10;
	}
	
	$obj = new prop3;
	$obj->x;/**/

	/*Apress.Beginning.PHP.and.MySQL.5.From.Novice.to.Professional.2nd.Edition.Jan.2006 = Apress.PHPMySQL*/

	/*class number {
		public $a= 10;
		public $b=20;
		public $b1=21;
		public $b2=22;
		private $c=30;
	}
	$numbers = new number();

	foreach($numbers as $var => $value) {
		echo "$var " ."=>". " $value " . '<br />';
	} /**/

	/*Overloading and Overriding in PHP

	Magic method because overloading in php can be implmented using magic methods.
	
	What is Method Overriding in OOP ?
		Basic meaning of overriding in oop is same as real word meaning. In real word meaning of overriding  phenomena of replacing the same parental behavior in child. This is same in case of method overriding in oop. In oop meaning of overriding is to replace parent class method in child class. Or in simple technical word method overriding mean changing behavior of the method. In oop overriding is process by which you can re-declare your parent class method in child class. So basic meaning of overriding in oop is to change behavior of your parent class method.

	What is Method Overloading in OOP ?
		Overloading in oop is same as overloading in real word. In real word overloading means assigning extra work to same machine or person. In oop method overloading is same. By process of method overloading you are asking your method to some extra work. Or in some cases we can say some different work also.
		Normally method overloading in oop is managed on the basis of the argument passed in function. We can achieve overloading in oop by providing different argument in same function.

	Overloading and Overriding in PHP
		Hope your basic concept of overloading and overriding is clear now. Now let us explore implementation of overloading and overriding in php.
		Implementation of overriding in php is very easy. If your parent class has a function. You can create function with same name in your child class to override the function. Implementation of overriding can not be achieved by creating 2 function with same name and different argument in php. Because we can not create same name function more than 1 time in php class. To implement overloading we need to take help of magic method in php. In below section we will explore overloading and overriding one by one.
		
	Overloading in PHP/**/

	/*class test {
		public function __construct() {
			//Your logic for constructor
		}
		public function __call($method_name , $parameter) {
			if($method_name == "overlodedFunction") //Function overloading logic for function name overlodedFunction
			{
				$count = count($parameter);
				switch($count)
				{
					case "1":
						//Business log in case of overlodedFunction function has 1 argument
						echo "You are passing 1 argument";
						break;
					case "2": //Incase of 2 parameter
						echo "You are passing 2 parameter";
						break;
					default:
						throw new exception("Bad argument");
				}
			}
			else {
				throw new exception("Function $method_name does not exists ");
			}
		}
	}

	$a = new test();
	//$a->overlodedFunction("ankur");
	$a->overlodedFunction("techflirt" , "ankur");/**/
			
	/*class testParent {
		public function f1() {
			echo 1;
		}
		public function f2($a) {
			echo 2;
		}
	}
	class testChild extends testParent {
		function f2($a) //overriding function f2
		{
			echo "$a";
		}
	}
	$a = new testChild();
	$a->f2("Girish kumar A"); //it will print ankur/**/
	
	/*$capital = 67;
	print($capital) . ' Print';
	echo '<br />';
	echo $capital  . ' Echo';
	echo '<br />';
	print_r($capital . ' Print_r' );
	echo '<br />';
	var_dump($capital . ' Print');
	echo '<br />';
		//print($CapiTaL);
	echo '<br />';/**/

	/*class number {
		public $a= 10;
		public $b=20;
		private $c=30;
		public static $d = 99;
		protected static $d1 = 99;
		private static $d2 = 99;
	}
    $numbers = new number();
	echo '<br />';
	echo 'number:- ' . number::$d;
	echo '<br />';
	//echo 'number:- ' . number::$d1;
	echo '<br />';
	//echo 'number:- ' . number::$d2;
	echo '<br />';
	
	foreach($numbers as $var => $value) {
       echo "$value ";
	}/**/
	
	/*$src = fopen('http://www.example.com', 'r');
	$dest1 = fopen('first1k.txt', 'w');
	$dest2 = fopen('remainder.txt', 'w');

	echo stream_copy_to_stream($src, $dest1, 1024) . " bytes copied to first1k.txt\n";
	echo stream_copy_to_stream($src, $dest2) . " bytes copied to remainder.txt\n";/**/
	
	/*
	class c {
		public $x = 1;
		function __construct() {
			echo 'Constructer:- ' . ++$this->x . '<br />';
		}
		function __invoke() {
			return ++$this->x;
		}
		function __toString() {
			return (string) --$this->x;
		}
	}
	$obj = new c();
	echo $obj();


	/**/
		
	//echo '1' . (print '2') + 3;
	
	/*$variable = 5;
	echo $variable++;
	echo '<br />';	
	$variable = 5;
	echo ++$variable;
	echo '<br />';	
	$variable = 5;
	echo --$variable;
	echo '<br />';
	$variable = 5;
	echo $variable--;
	echo '<br />';
	echo $variable;
	echo '<br />';
	echo '<br />';
	echo '<br />';
	
	function inc($val) {
		echo  'Only val : ' .  $val;
		echo '<br />';
		echo '++val : ' .  ++$val;
		echo '<br />';
		echo 'val++ : ' . $val++;
		echo '<br />';
		echo '--val : ' .  --$val;
		echo '<br />';
		echo 'val-- : ' . $val--;
		echo '<br />';
	}
	$val = 1;
	inc($val);
	//echo $val; /**/

	/*if(isset($_REQUEST['test'])){
		echo 'You are in: ';
		echo $_REQUEST['list'];
	} else {	
		$testing = '<form method="post">
		<select name="list">
		<option>one</option>
		<option>two</option>
		<option>three</option>
		</select>
		<input type="submit" name="test" value="login" /s>
		</form>';
		echo $testing;
	}/**/

	//echo strpos("me myself and I", "y", 2);

/*
	__toString()

	__toString() is a magic method that is automatically called by PHP
	anytime an object variable is used in a string context.
	
	By defining this method, you can explicitly set how objects should be
	represented in string form/**/
	
	/*class Animal{
		public $username = 'Girish';
		public function __construct() {
			$this->created = time();
			//$this->logfile_handle = fopen('/tmp/log.txt', 'w');
			//$this->logfile_handle = fopen('Aug11testing_file/Practise/Example_programs/projects/htdocs/tmp/log.txt', 'w');
		}
	}
	class Penguin extends Animal {
		public function __get($field) {
			//echo 'Hi this is __get' . '<br />';
			if($field == 'name') {
				return $this->username;
			} else {
				echo 'you are in else';
			}
		}
	}		
	$tux = new Penguin;
	//echo $tux->created;
	echo $tux->name;/**/
		
//	class PropertyTest {
//		/**  Location for overloaded data.  */
//		private $data = array();
//		/**  Overloading not used on declared properties.  */
//		public $declared = 1;
//		/**  Overloading only used on this when accessed outside the class.  */
//		private $hidden = 2;
//		public function __set($name, $value) {
//			echo "Setting '$name' to '$value'\n";
//			$this->data[$name] = $value;
//		}
//		public function __get($name) {
//			echo "Getting '$name'\n";
//			if (array_key_exists($name, $this->data)) {
//				return $this->data[$name];
//			}
//			$trace = debug_backtrace();
//			trigger_error(
//				'Undefined property via __get(): ' . $name .
//				' in ' . $trace[0]['file'] .
//				' on line ' . $trace[0]['line'],
//				E_USER_NOTICE);
//			return null;
//		}
//		/**  As of PHP 5.1.0  */
//		public function __isset($name) {
//			echo "Is '$name' set?\n";
//			return isset($this->data[$name]);
//		}
//		/**  As of PHP 5.1.0  */
//		public function __unset($name) {
//			echo "Unsetting '$name'\n";
//			unset($this->data[$name]);
//		}
//		/**  Not a magic method, just here for example.  */
//		public function getHidden() {
//			return $this->hidden;
//		}
//	}
	/*echo "<pre>\n";
	$obj = new PropertyTest;
	
	$obj->a = 1;
	echo $obj->a . "\n\n";
	
	var_dump(isset($obj->a));
	unset($obj->a);
	var_dump(isset($obj->a));
	echo "\n";
	
	echo $obj->declared . "\n\n";
	echo "Let's experiment with the private property named 'hidden':\n";
	echo "Privates are visible inside the class, so __get() not used...\n";
	echo $obj->getHidden() . "\n";
	echo "Privates not visible outside of class, so __get() is used...\n";
	echo $obj->hidden . "\n";/**/
	
	/*class magic_tets {
		public $word;
		public function __set($property, $value){
			if((property_exists($this, $property))) {
				$this->$property = $value;
				echo "You succesfully updated {$property} to {$value}";
			} else {
				echo "Failed to update{$property}";
			}
		}
	}
	$obj = new magic_tets(22,'Brown');
	$obj->word = '6';/**/
	
	/*
	__construct()---ok	// This magic methods is called when someone create object of your class. Usually this is used for creating constructor in php5.
	__destruct()---ok	// This magic method is called when object of your class is unset. This is just opposite of __construct
	__call()---ok		// __call() is triggered when invoking inaccessible methods in an object context.
	__callStatic()---ok	// __callStatic() is triggered when invoking inaccessible methods in a static context.
	__get()---ok		// __get() is utilized for reading data from inaccessible properties.
	__set()---ok		// __set() is run when writing data to inaccessible properties. 

	__isset()-			// __isset() is triggered by calling isset() or empty() on inaccessible properties. 
	__unset()-			// __unset() is invoked when unset() is used on inaccessible properties. 
	__sleep()			// __sleep methods trigger when you are going to serialize your class object.
	__wakeup()			//
	__toString()		// The __toString() method allows a class to decide how it will react when it is treated like a string. 
	__invoke()
	__set_state()
	__clone()
	__debuginfo()
	
	__METHOD__
	__halt_compiler
	_indianmastisex/**/
	
	/*class MyClass {
		public $something;
		public function __construct($something){
			echo $this->something = $something;
		}
		public function __destruct(){
			echo 2;
		}
	}
	$obj = new MyClass('some');
	unset($obj);/**/
	
	/*class MyClass {
		public function __get($name){
			echo "<h3>__get executed with name $name</h3>";
		}
		public function __set($name, $value){
			echo "<h3>__set executed with name $name, value $value</h3>";
		}
		public function __call($name, $parameter){
			$a = print_r($parameter, true); // taking recursive array in string
			echo "<h3>__call executed with $name, parameter $a</h3>";
		}
		public static function __callstatic($name, $parameter) {
			$a = print_r($parameter, true);
			echo "<h3>__callStatic executed with $name, parameter $a</h3>";
		}
	}
	$obj = new MyClass();
	$obj->abc = 3; // __set will be ececuted
	$apple = $obj->pgr; // __get will be triggered
	$obj->getMyName('One','two','three'); // __call will be ececuted
	MyClass::xyz('1','qpc','test'); // __call static will be ececuted /**/
	
	/*class myClass {
		public function __isset($name) {
			echo "__isset is called for $name" . '<br />';
		}
		public function __unset($name) {
			echo "__unset is called for $name" . '<br />';
		}
	}
	$obj = new myClass();
	isset($obj->Girish);
	//empty($obj->Girish);
	unset($obj->kumar); /**/
	
	/*echo 'Declare a simple class';
	class TestClass
	{
		public $foo;

		public function __construct($foo)
		{
			$this->foo = $foo;
		}

		/*public function __toString() //important
		{
			return $this->foo;
		}
	}

	$class = new TestClass('Hello');
	var_dump($class);
	echo '<br />';
	print_r($class);/**/
	//echo $class;/**/

	/*class Connection {
		protected $link;
		private $dsn, $username, $password;   
		public function __construct($dsn, $username, $password) {
			$this->dsn = $dsn;
			$this->username = $username;
			$this->password = $password;
			$this->connect();
		}    
		private function connect() {
			$this->link = new PDO($this->dsn, $this->username, $this->password);
		}
		public function __sleep() {
			return array('dsn', 'username', 'password');
		}    
		public function __wakeup() {
			$this->connect();
		}
	}
	$class = new Connection('Hello','girish',123456);
	$class->connect();
	//var_dump($class);
	//echo $class;/**/

	
	/*echo 'Object iteration';
	class MyClass{
		public $var1 = 'value1';
		public $var2 = 'value2';
		public $var3 = 'value3';
		
		protected $protected = 'protected var';
		private $private = 'private var';
		
		function iterateVisible() {
			echo "MyClass::iterateVisible:";
			foreach($this as $key => $value) {
				echo '<br />';
				print "$key => $value";
				echo '<br />';
			}
		}
	}

	$obj = new MyClass();
	
	foreach($obj as $key => $value){
		print "$key => $value";
		echo '<br />';
	}
	echo '<br />';
	$obj->iterateVisible();/**/
	
	/*class MyIterator {
		private $varb = array();
		
		public function __construct($array) {
			if (is_array($array)) {
				$this->varb = $array;
				//var_dump($this->varb = $array);
			}
		}
		public function rewind() {
			echo "rewind\n";
			reset($this->varb);
		}
		public function current() {
			$varb = current($this->varb);
			echo "current: $varb\n";
			return $varb;
		}
		public function key() {
			$varb = key($this->varb);
			echo "key: $varb\n";
			return $varb;
		}
		public function next() {
			$varb = next($this->varb);
			echo "next: $varb\n";
			return $varb;
		}
		public function valid() {
			$key = key($this->varb);
			$varb = ($key !== NULL && $key !== FALES);
			echo "valid: $varb\n";
			return $varb;
		}
	}
	
	$values = array(1,2,3);
	$it = new MyIterator($values);
	
	foreach($it as $a => $b) {
		print "$a: $b\n";
	}/**/
	
	/*class BaseClass {
		public function test(){
			echo "BaseClass::test() called\n";
		}
		final public function moreTesting(){
			echo "BaseClass::moreTesting() called\n";
		}
	}
	class ChildClass extends BaseClass {
		public function moreTesting(){
			echo "ChildClass::moreTesting() called\n";
		}
	}
	
	$obj = new ChildClass;
	$obj->moreTesting();/**/
	
	/*
	echo 'PHP Object Cloning';
	
	Object cloning is nothing but creating copy of an object. Object model is one of the popular feature in PHP 5. 
		In this model, an object is passed by reference to create a copy of it where in PHP 4 it was passed by value./**/
		
	//Clonning of php object
	/*class Animals {
		public $name;
		public $category;
	}	
	Creating instance of Animals class
	$objAnimals = new Animals();
	//Assigning values
	$objAnimals->name = "Lion";
	$objAnimals->category = "Wild Animal";
	echo 'ObjAnimals;- ';
	print_r($objAnimals);
	echo '<br />';
	
	//Cloning the original object
	$objCloned = clone $objAnimals;
	$objCloned->name = "Elephant";
	$objCloned->category = "Wild Animal";
	echo 'ObjCloned:- ';
	print_r($objCloned);
	echo '<br />';
	
	//Copying $objAnimals to another variable
	$objCopied = $objAnimals;
	$objCopied->name = "Cat";
	$objCopied->category = "Pet Animal";
	echo 'ObjCopied:- ';
	print_r($objCopied);
	echo '<br />';
	echo '<br />';
	echo '<br />';
	
	print 'Values of object $objAnimals:';
	print "<PRE>";
	print_r($objAnimals);
	print "</PRE>";
	
	print 'Values of Cloned object $objCloned:';
	print "<PRE>";
	print_r($objCloned);
	print "</PRE>";
	
	print 'Values of Copied object $objCopied:';
	print "<PRE>";
	print_r($objCopied);
	print "</PRE>";
	
	/*
	echo 'Object Cloning – Pass by Reference';
	//Creating instance of Animals class
	$objAnimals = new Animals();
	//Assigning values
	$objAnimals->name = "Lion";
	$objAnimals->category = "Wild Animal";
	//Cloning the original object
	$objCloned = clone $objAnimals;
	$objCloned->name = "Elephant";
	$objCloned->category = "Wild Animal";
	print_r($objAnimals);
	ECHO '<BR />';	ECHO '<BR />';
	print_r($objCloned);/**/
	
	/*class test1 {
		public $name;
		public $age;
	}
	
	$obj1 = new test1();
	$obj1->name = 'Girish';
	$obj1->age = '26';
	print_r($obj1);
	echo '<br />';
	var_dump($obj1);
	
	echo '<br />';echo '<br />';
	
	$objCloned = clone $obj1;
	$objCloned->name = 'kumar';
	$objCloned->age = '27';
	var_dump($objCloned);
	echo '<br />';
	print_r($objCloned);
	
	echo '<br />';echo '<br />';
	
	$obj3 = clone $objCloned;
	$obj3->name = 'ABC';
	$obj3->age = 99;
	var_dump($obj3);
	echo '<br />';
	print_r($obj3);/**/
	
	/*
	class Beverage {
		public $name;
		function __construct() {
			echo "New beverage was created.<br />";
		}
		function __clone() {
			echo "Existing beverage was cloned.<br />";
		}
	}
	
	$a = new Beverage();
	$a->name = 'coffee';
	$b = $a; // always a reference with objects
	$b->name = 'tea';
	echo $a->name;
	echo '<br />';echo '<br />';
	
	$c = clone $a;
	$c->name = 'orange juice';
	echo $a->name;
	echo '<br />';
	echo $c->name;/**/
	
	/*	
	//Comparison operator '=='
	//Identity operator '==='
	
	function bool2str($bool) {
		if ($bool == false){
			return 'false';
		} else {
			return 'true';
		}
	}
	function compareObjects(&$o1, &$o2) {
		echo 'o1 == o2 : ' . bool2str($o1 == $o2) . "\n";
		echo 'o1 != o2 : ' . bool2str($o1 != $o2) . "\n";
		echo 'o1 === o2 : ' . bool2str($o1 === $o2) . "\n";
		echo 'o1 !== o2 : ' . bool2str($o1 !== $o2) . "\n";
	}
	class Flag {
		public $flag;		
		function Flag($flag = true){
			$this->flag = $flag;
		}
	}
	
	class OtherFlag {
		public $flag;
		function OtherFlag($flag = true) {
			$this->flag = $flag;
		}
	}
	
	$o = new Flag();
	$p = new Flag();
	
	$q = $o;
	$r = new OtherFlag();
	
	echo '<br />';
	echo "Two instances of the same class\n";
	echo '<br />';
	echo '<br />';
	compareObjects($o, $p);

	echo '<br />';
	echo "Two reference to the same instance\n";
	echo '<br />';
	echo '<br />';
	compareObjects($o, $q);

	echo '<br />';
	echo "Instances of two different class\n";
	echo '<br />';
	echo '<br />';
	compareObjects($o, $r);/**/
	
	/*function testFunction() { 
		static $testVariable = 1;
		echo $testVariable;
		//$testVariable++;
	}
	testFunction();
	//testFunction();
	//testFunction();/**/

	//echo $_SERVER['HTTP_USER_AGENT'];
	
	/*function doSomething( &$arg ) {
		$return = $arg;	
		$arg += 1;
		return $return;
	}

	$a = 3;
	$b = doSomething( $a );

	echo $a;
	echo '\n';
	echo $b;/**/
	
	/*$a = 012;
	echo $a / 4;/**/
	
	/*$string='this is ';
	if (strlen($string) != strlen(utf8_decode($string)))
	{
		echo 'is unicode';
	}else{
	  echo 'It is Not unicode.';
	}/**/

	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>
