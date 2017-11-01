<?php

echo '<br />This is Abstract class: <br />';
abstract class abc{
	abstract protected function f1($a,$b);
}

class xyz extends abc{
	protected function f1($name, $address){
		echo "$name, $address";
	}
}

$a = new xyz();

echo '<br />';echo '<br />';
echo '<br />=============================================================================================<br />';

class a {
	function test(){
		echo "a::test called";
	}
	function __construct() {
		echo '<h3>Hi this is from class::a</h3>';
	}

	function func(){
		echo "a::func called";
	}
}

class b extends a{
	function test(){
		echo "b:test called:";
	}
	function __construct() {
		parent::__construct();
	}
}

class c extends b {
	function test(){
		parent::test();
	}
}

class d extends c {
	function test() {
		b::test();
	}
}

$a = new a();
$a->test();
echo '<br />';echo '<br />';

$b = new b();
$b->test();echo '<br />';
$b->func();
echo '<br />';echo '<br />';

$c = new c();
$c->test();
echo '<br />';echo '<br />';

$d = new d();
$d->func();echo '<br />';
$d->test();
echo '<br />';
echo '<br />=============================================================================================<br />';


class myClass{
	function myFunction(){
		echo "You called myClass::myFunction";
	}
}

$obj = new myClass;
$obj->myFunction();
echo '<br />';
echo '<br />=============================================================================================<br />';

class myClass2{
	function myFunction2($data){
		echo "The value is $data";
	}
	function callMyFunction($data){
		// calling myFunction2();
		$this->myFunction2($data);
	}
}

$data = "123";
$obj2 = new myClass2();
$obj2->callMyFunction($data);
echo '<br />';
echo '<br />=============================================================================================<br />';

class foo{
	function __construct(){
		echo __METHOD__;
		echo '<br />';
	}
	function myFoo(){
		echo 'This is to test:';echo '<br />';
		echo __METHOD__;
	}
	function __destruct() {
		// this destructor method is called at the end of script execution
		echo __METHOD__;
		echo ' This is Destructor function: ';
	}
}

$obj3 = new foo;
$obj3->myFoo();
echo '<br />';
echo '<br />=============================================================================================<br />';

class foo1{
	public $name = 'Girish';
	function displayName(){
		echo "Hi My Name is: $this->name";
	}
}

$obj4 = new foo1();
$obj4->displayName();
echo '<br />';
echo '<br />=============================================================================================<br />';

class SimpleClass2{
	public $var = 'myconstant'; //Property declarations
	public $var_one = array(true,false); //Property declarations
	public $arr_var = ['a'=>'Apple','b'=>'Ball','c'=>'Cat'];
	protected $var1 = 1;
	private $var2 = 2;
	static $var3 = 3;

	public function newclass(){
		echo $this->var . ' ' . $this->var1 . $this->var2;echo '<br/>';
		echo self::$var3;echo '<br />';
//		print_r($this->var_one);
		print_r($this->arr_var);
	}
}
$SimpleClass2 = new SimpleClass2();
$SimpleClass2->newclass();
echo '<br />';echo '<br />';
echo '<br />=============================================================================================<br />';

class foo2{

	public $var1 = 'variable1';
	protected $var2 = 'variable2';
	private $var3 = 'variable3';

	function getAccessmodifier(){

		echo $this->var1;
		echo $this->var2;
		echo $this->var3;
	}

	function getAccessmodifier2(){
		echo $this->var1;
		echo $this->var2;
		echo $this->var3;
	}

//	echo $this->var1;
//	echo $this->var2;
//	echo $this->var3;

}

class fooChild extends foo2{
	function getAccessmodifier3() {
		echo $this->var1;
		echo $this->var2;
//		echo $this->var3;
	}
}

$obj5 =new foo2();
$obj5->getAccessmodifier();echo '<br />';
$obj5->getAccessmodifier2();
echo '<br />';echo '<br />';

$obj6 = new fooChild();
$obj6->getAccessmodifier3();echo '<br />';
echo $obj6->var1;

echo '<br />';echo '<br />';
echo '<br />=============================================================================================<br />';

class BaseClass {
	public function test() {
		echo "BaseClass::test() called<br />";
	}

	final public function moreTesting_Removethis() {
		echo "BaseClass::moreTesting() called<br />";
	}
}

class ChildClass extends BaseClass {
	//this will cause Compile error
	public function moreTesting() {
		echo "ChildClass::moreTesting() called<br />";
	}
}

$final = new ChildClass;
$final->test();
$final->moreTesting();

echo '<br />';echo '<br />';
echo '<br />=============================================================================================<br />';


abstract class AbstractClass {
	abstract protected function getValue();
	abstract protected function prefixValue($prefix);

	public function printOut($a, $b){
		print $this->getValue();
		echo 'This is just for testing purpose only';echo '<br />';
		echo $a+$b;echo '<br />';
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
$class1->printOut(10,2);
echo $class1->prefixValue("Foo In One: ");
echo '<br />';echo '<br />';

$class2 = new ConcreteClass2;
$class2->printOut(3,3);
echo $class2->prefixValue("Foo In Tow: ");


echo '<br />';echo '<br />';
echo '<br />=============================================================================================<br />';

?>