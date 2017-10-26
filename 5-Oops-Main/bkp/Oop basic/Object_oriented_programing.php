<?php
	//session_start();
	//echo 'Wellcome '.$_SESSION['username'];

	echo '<h1>This is object oriented pograming language: </h1>';

	/*echo $htmlmenu = '<div class="second_menu">
					<ul style="color:red; list-style: none; float: left; width: 100%;">
						<li style="float: left; width: 15%;"><a href="ClassInheritance_extends.php">ClassInheritance_extends</a></li>
						<li style="float: left; width: 15%;"><a href="Magic_method.php">Magic_method</a></li>
						<li style="float: left; width: 15%;"><a href="Error_Exception.php">Error_Exception</a></li>
						<!--<li style="float: left; width: 15%;"><a href="Oop basic/object_oriented_programing.php">Object oriented programing</a></li>-->
					</ul>
				  </duv>';/**/
//echo 'Simple class Declaration: ';
	class SimpleClass {
		Public $var = 'A default value is displayed';
		
		Public function displayVar(){
			//echo $this->var;
			echo $this->var . '<br />';
		}
	}
	
	$instance = new SimpleClass();	//Creating a new objects (OR) Creating new instance
	$instance->displayVar();	//To call method (OR) Calling method functions
	/**/
	
	/*class A {
		function foo(){
			if(isset($this)){
				echo '$this is defined (';
				echo get_class($this);
				echo ")\n";
			} else {
				echo "\$This is not defined.\n";
			}
		}
	}
	
	class B {
		function bar(){
			A::foo();
		}
	}
	
	$a = new A();
	$a->foo();
	
	A::foo();
	$b = new B();
	$b->bar();
	
	B::bar();/**/
	
	/*class SimpleClass {
		public $name = 'Girish';
		public $newname;
		public function displayName($newname) {
			echo $this->name . " $newname";
			//echo $this->newname;
		}
	}
	$call = new SimpleClass();
	$call->displayName('kumar');/**/
	
	/*class myclass {
		public $item = 'Hello this is girish';
		public $name;

		function myfun(){
			$this -> Test();
			echo '<br />';
			echo 'Hello world: <b>This is in myfun()</b>';
		}
		function Test(){
			echo 'Test test'.'<br />';
			echo $this -> item . '<br />';
			$simp_var = 500;
			echo $simp_var;
		}
	}
	$var = new myclass;
	$var -> myfun();/**/
	
	/*class myclass {
		public $name = 'girish kumar';
		public $age = '24';
		function myfunction($names,$age) {
			echo $this->name = $names;
			echo '<br />';
			echo $this->age = $age;
		}
	}
	$var = new myclass;
	$var -> myfunction('Raju','25');/**/
	
	/*class Person {
		public $name = 'girish';
		protected $age = 20;
		private $address = 'Bangalore';

		function myfun() {
			echo $this->name . '<br />';
			echo $this->age . '<br />';
			echo $this->address . '<br />';
			echo 'Hello world';
				echo '<br />';
				echo '<br />';
		}

		function copy() {
			echo $this->name . '<br />';
			echo $this->age . '<br />';
			echo $this->address . '<br />';
		}
	}

	class newname {
		var $name;
		function set_name($new_name) {
			$this->name = $new_name;
		}
		function get_name(){
			return $this->name;
		}
	}

	$var = new Person; //Instanting object
	$var -> myfun(); //Calling the method
	$var -> copy();

	$var_new = new newname; //Instanting object
	$var_new -> set_name('girish'); //Calling the method

	echo "My name is " . $var_new->get_name();/**/

echo 'Class/Object Functions: ';
	/*class Test {
		static public function getNew(){
			return new static;
		}
	}
	
	class Child extends Test {}
	
	$obj1 = new Test();
	$obj2 = new $obj1();
	var_dump($obj1 !== $obj2);
	echo '<br />';
	
	$obj3 = Test::getNew();
	var_dump($obj3 instanceof Test);
	echo '<br />';
	
	$obj4 = Child::getNew();
	var_dump($obj4 instanceof Child);
	echo '<br />';/**/
	
	/*class foo {
		function name() {
			echo "My name is " , get_class($this) , "\n";
		}
	}

	if (class_exists('foo')) {
		// create an object
		$bar = new foo();
		echo '<br />';
		// external call
		echo "Its name is " , get_class($bar) , "\n";
		echo '<br />';
		// internal call
		$bar->name();		
		//$myclass = new MyClass();
	}/**/
	
	/*class Gettingclass_name {
		function Mufun(){
			echo 'This is my class name: '.get_class($this);
		}
	}
	
	$obj = new Gettingclass_name();
	$obj->Mufun();
	echo '<br />';
	var_dump($obj);
	echo '<br />';
	print_r($obj);
	echo '<br />';
	echo 'The class name is : '.get_class($obj);/**/

	/*class foo{
		function foo_func(){
			echo 'foo: ';			
		}
	}
	class_alias('foo','bar');
	
	$a = new foo;
	$a->foo_func();
	echo '<br />';
	$b = new bar;
	$b->foo_func();
	echo '<br />';
	// the objects are the same
	var_dump($a == $b, $a === $b);
	echo '<br />';
	var_dump($a instanceof $b);
	echo '<br />';
	var_dump($a instanceof foo);
	echo '<br />';
	var_dump($a instanceof bar);
	echo '<br />';
	var_dump($b instanceof foo);
	echo '<br />';
	var_dump($b instanceof bar);
	echo '<br />';/**/
	
	//echo 'Property Visibility:-';

	/*class cllingclassone {
		public $variable1 = 'Name';
		private $variable2 = 'Phone';
		protected $variable3 = 'Address';
		
		function countvar() {
			echo $this->variable1.'<br />';
			echo $this->variable2.'<br />';
			echo $this->variable3.'<br />';
		}
	}
	$obj = new cllingclassone;
	$obj->countvar();
	echo '<h4>This is calling outside class and functiin: </h4>'.'<br />';
	echo $obj->variable1;
	//echo $obj->variable2;	//Fatal error: Cannot access private property cllingclassone::$variable2
	//echo $obj->variable3;	//Fatal error: Cannot access protected property cllingclassone::$variable3
	
	
	echo '<br />';echo '<br />';echo '<br />';
	class cllingclasstwo extends cllingclassone {
		
		function countinsecondclass(){
			echo '<b>This is in clling class two: </b>'.$this->variable1.'<br />';
			//echo '<b>This is in clling class two: </b>'.$this->variable2.'<br />';
			echo '<b>This is in clling class two: </b>'.$this->variable3.'<br />';
		}
		function __construct(){
			echo '<br />';
			echo '<b>This is called in constructer function: </b>'.$this->variable1.'<br />';
			//echo '<b>This is called in constructer function: </b>'.$this->variable2.'<br />';
			echo '<b>This is called in constructer function: </b>'.$this->variable3.'<br />';
			echo '<br />';
		}
	}
	$obj2 =new cllingclasstwo;
	$obj2->countinsecondclass();
	echo '<h4>This is calling outside class and functiin: </h4>'.'<br />';
	echo $obj2->variable1;
	//echo $obj2->variable2;	//Notice: Undefined property: cllingclasstwo::$variable2
	//echo $obj2->variable3;	//Fatal error: Cannot access protected property cllingclasstwo::$variable3
	/**/

echo 'Method Visibility:-';
	/*
	class MyClass {
		public function __construct(){}
		public function Mypublic(){echo 'This is Public: ';}
		private function Myprivate(){echo 'This is Private: ';}
		protected function Myprotected(){echo 'This is Protected: ';}
		
		function Foo(){
			echo '<br />';echo '<br />';echo '<br />';echo '<br />';
			echo '<b>In Foo function: </b>'.$this->MyPublic().'<br />';
			echo '<b>In Foo function: </b>'.$this->MyPrivate().'<br />';
			echo '<b>In Foo function: </b>'.$this->MyProtected().'<br />';
		}
	}
	$obj = new MyClass();
	$obj->Mypublic();	//Fatal error: Call to private method MyClass::MyPrivate() from context ''		// Calling function case-insensitive.....
	//$obj->MyPrivate();	//Fatal error: Call to private method MyClass::MyPrivate() from context ''
	//$obj->MyProtected();
	$obj->Foo();
	
	echo '<br />';echo '<br />';echo '<br />';echo '<br />';
	
	class MyClass2 extends MyClass {
		function Foo2() {
			echo '<b>In Foo2 function: </b>'.$this->MyPublic().'<br />';
			//$this->Myprivate();	//Fatal error: Call to private method MyClass::Myprivate() from context 'MyClass2'
			echo '<b>In Foo2 function: </b>'.$this->MyProtected().'<br />';
		}
	}

	$obj2 = new MyClass2();
	$obj2->Foo2();/**/
	
	/*class Bar {
		public function test(){
			$this->testPrivate();
			$this->testPublic();			
		}
		public function testPublic(){
			echo "Bar::testPublic\n".'<br />';
		}
		private function testPrivate(){
			echo "Bar::testPrivate\n".'<br />';
		}
	}
	
	//$obj = new Bar;
	//$obj->test();
	class Foo extends Bar {
		public function testPublic(){
			echo "Foo::testPublic".'<br />';
		}
		private function testPrivate(){
			echo "Foo::testprivate".'<br />';
		}
	}
	$obj2 = new Foo();
	$obj2->test();/**/
	
	/*class Test {
		private $foo;
		public function __construct($foo){
			echo $this->foo = $foo . '<br />';
		}
		private function bar(){
			echo '<br /><b>Accessed the private method.</b><br />';
			
		}
		private function bar22(){
			echo '<br /><b>Accessed the private method.</b><br />';
		}
		public function baz(Test $other){
			$other->foo = 'Hello';
			var_dump($other->foo);
			
			$other->bar();
			$other->bar22();
		}
	}
	$test = new Test('test123');
	echo '<br />';
	//$test->baz(new Test('other123'));
	$test->baz(new Test('147'));/**/

//echo 'Constants: ';
	/*class MyClass {
		const varing = "This is My Constant Value:";
		function ShowConstant(){
			echo self::varing;
		}
	}
	$obj = new MyClass();
	$obj->ShowConstant();
	echo '<br />';echo '<br />';
	
	echo MyClass::varing;
	echo '<br />';echo '<br />';
	
	$Classname = "MyClass";
	echo $Classname::varing;
	echo '<br />';echo '<br />';
	
	$class = new MyClass();
	$class->showConstant();
	echo '<br />';echo '<br />';
	
	echo $class::varing;
	/**/

########################################## Abstract STARTS: ##########################################

	/*abstract class AbstractClass {
		abstract protected function getValue();
		abstract protected function prefixValue($prefix);
		
		public function printOut(){
			print $this->getValue();
		}
	}
	class ConcreteClass1 extends AbstractClass {
		protected function getValue(){
			return "ConcreteClass1: ";
		}
		public function prefixValue($prefix) {
			return "{$prefix}ConcreteClass1";
		}
	}
	class ConcreteClass2 extends AbstractClass {
		protected function getValue(){
			return "ConcreteClass2: ";
		}
		public function prefixValue($prefix) {
			return "{$prefix}ConcreteClass2";
		}
	}
	
	$class1 = new ConcreteClass1;
	$class1->printOut();
	echo $class1->prefixValue("Foo: ");
	echo '<br />';echo '<br />';

	$class2 = new ConcreteClass2;
	$class2->printOut();	
	echo $class2->prefixValue("Foo: ");/**/
	
########################################## Abstract ENDS: ##########################################

########################################## Interfaces STATRS: ##########################################

	/*interface iTemplate {
		public function setVariable($name, $var);
		public function getHtml($template);
	}

	class Template implements iTemplate {
		private $vars = array(); 
		public function setVariable($name, $var){
			$this->vars[$name] = $vars;
		}
		public function getHtml($template){
			foreach($this->vars as $name => $value) {
				$template = str_replace('{' . $name .'}', $value, $template);
			}
			return $template;
		}
	}

	class BadTemplate implements iTemplate {
		private $vars =  array();
		public function setVariable($name, $var) {
			$this->vars[$name] = $var;
		}
	}
	$obj = new BadTemplate();
	$obj->setVariable('girish',26);/**/
	
	/*interface Storable {
		function getContentsAsText();
	}

	class Document implements Storable {
		public function getContentsAsText() {
			return "This is Text of the Document\n";
		}
	}

	class Indexer {
		public function readAndIndex(Storable $s) {
			$textData = $s->getContentsAsText();
			//do necessary logic to index
			echo $textData;
		}
	}

	$p = new Document();
	 
	$i = new Indexer();
	$i->readAndIndex($p);/**/
	
	/*interface a {
		public function foo();
	}
	interface b extends a {
		public function baz(Baz $baz);
	}
	
	//This will work
	class c implements b {
		public function foo(){
			echo 'Foo';
		}
		public function baz(Baz $baz){
			echo 'Baz';
		}
	}
	
	//This will not work and result in a Fatal error
	class d implements b {
		public function foo(){
			
		}
		public function baz(Foo $foo){
			
		}
	}
	
	$z = new c;
	$z->foo();/**/

########################################## Interfaces ENDS: ##########################################

//echo 'TRAIT';
	/*trait first_trait {
		function first_method(){ echo 'First method in first trait: '; }
		function second_method(){ echo 'Second method in first trait: '; }
	}
	class first_class {
		use first_trait;
	}
	$obj = new first_class;
	$obj->first_method();
	echo '<br />';
	$obj->second_method();/**/
	
	/*trait first_trait {
		function first_method(){ echo 'First method in first trait: '; }
		abstract public function secondab_method();
	}
	trait second_trait {
		use first_trait;
		function second_method(){ echo 'Second method in first trait: '; }
	}
	class first_class {
		use second_trait;
		function secondab_method(){
			echo 'This is abstract method testing in TRAIT: ';
		}
	}
	
	$obj = new first_class;
	$obj->first_method();
	echo '<br />';
	$obj->second_method();
	echo '<br />';
	$obj->secondab_method();/**/
	
	/*trait first_trait {
		function first_function() { 
			echo "<b>From First Trait</b><br />";
		}
	}

	trait second_trait {
		function first_function() { 
			echo "<b>From Second Trait</b><br />";
		}
	}

	class first_class {
		use first_trait, second_trait {
			// This class will now call the method
			// first function from first_trait only
			first_trait::first_function insteadof second_trait;
			
			// first_function of second_traits can be 
			// accessed with second_function
			second_trait::first_function as second_function;
		}
	}

	$obj = new first_class();
	// Output: From First Trait
	$obj->first_function();
	// Output: From Second Trait
	$obj->second_function();/**/
	
	/*$test = 1;
	if ($test >= 1) {
	  //echo "Value must be 1 or below";
	  trigger_error("Value must be 1 or below");
	}/**/
	
	/*if(!file_exists("/tmp/test.txt")) {
		die("File not found");
	} else {
		$file = fopen("/tmp/test.txt","r");
		print "Opend file sucessfully";
	}
	// Test of the code here./**/

	/*class Test {
		function __call( $var1, $var2 ) {
			$check = " '$var1' called\n";
			echo '<br />';
			$check.= print_r( $var2, true );			
			return $check;
		}
	}
	$item = new Test();
	print $item->array( "John", "Maria", "Jason" );/**/
	
	/*class boy{
		public function __toString() {
			return "This is a boy:";
		}
	}
	$toby = new boy;
	print $toby;/**/
	
	/*function foo(string $foo) {
	}
	foo('somestring')/**/
	
	/*class A {
		static $word = "hello";
		static function hello() {print static::$word;}
	}
	class B extends A {
		static $word = "bye";
	}
	B::hello();/**/
	
	/*class A {
		var $variable;
		function display() {
			echo "I am inside the class.";
		}
	}
	$obj=new A;
	//echo $obj instanceof A;
	var_dump($obj instanceof A);/**/

	/*class myparent {
		public function foo($bar) {
		// do stuff
		}
	}

	class mychild extends myparent {
		public $val;
	
		private function bar(myparent &$baz) {
		// do stuff
		}
		public function __construct($val) {
			$this->val = $val;
		}
	}
	$child = new mychild('hello world');
	$child->foo('test');
	$reflect = new ReflectionClass('mychild');
	echo $reflect;/**/
	
	
	echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';
	$totalRows =5;
	$totalStar=1;
	for($rows=1; $rows<=$totalRows; $rows++){
		if($rows!=1){
			$totalStar+=2;
		}
		$cols=$totalStar;
		$space = $space1 = $totalRows-$rows; 

		/** create first space **/ 
		while($space>0){
			echo ' ';
			$space--;
		}

		/** create star **/
		while($cols>0){
			echo "* ";
			$cols--;
		}

		/** create second space **/ 
		while($space1>0){
			echo ' ';
			$space1--;
		}

		echo "";
	}
	echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';echo '<br />';
	
	
	
	
	

	
	
	
	
	
	
	
	
?>

<!--
<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  /*foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }/**/
  ?>
</table>-->