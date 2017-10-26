<?php

function add(...$numbers) {  
    $sum = 0;  
    foreach ($numbers as $n) {  
        $sum += $n;  
    }  
    return $sum;  
}  
  
echo add(1, 2, 3, 4);  

//echo 'Call by reference';
	function adder(&$str2)  
	{  
	   echo $str2 .= 'Call By Reference<br />' ;  
	}  
	$str = 'Hello ';  
	adder($str);  
	echo $str;  
	echo '<br /><br />';

	class SimpleClass {
		public $name = 'girish';
		public $na = 'ku';
		public function displayName(){
			echo $this->name;
		}
	}
	$call = new SimpleClass;
	$call -> displayName();echo '<br />';
/********************************************************************************************************************************/
	class MyClass {
		public $first = 10; //Here we declare properties
		public $second = 20; //Here also we declare properties
		public function addclass(){ //here we created method
			//echo $this->first + $this->second;
			//$result = $this->first + $this->second;
			//$result = $this->first * $this->second;
			//$result = $this->first - $this->second;
			$result = $this->first / $this->second;
			echo $result;
		}
	}
	$var = new MyClass; //created object of class
	$var -> addclass();echo '<br />'; //calling class method usage
/********************************************************************************************************************************/
	class MyClass2 {
		public $first;
		public $second;
		//passing parameter in method findsumTow()
		public function findSumTwo($first,$second){
			$result = $first + $second;
			echo $result;
		}
	}
	$pr = new MyClass2; //created object of class
	$pr->findSumTwo(200,300);echo '<br />'; //calling class method usage
/********************************************************************************************************************************/
	class Foo {
		public function printitem($string){
			echo 'Foo: ' . $string . PHP_EOL;
		}
		public function printPHP(){
			echo 'PHP is great. ' . PHP_EOL;
		}
	}
	class Bar extends Foo {
		public function printitem($string){
			echo 'Bar: ' . $string . PHP_EOL;
		}
	}
	$foo = new FOO(); //Creating an Object
	$foo -> printItem('baz1');
	$foo -> printPHP();
	echo '<br />';echo '<br />';
	
	$bar = new Bar(); //Creating an Object
	$bar -> printItem('baz2');
	$bar -> printPHP();echo '<br />';echo '<br />';
/********************************************************************************************************************************/

/********************************************************************************************************************************/
?>