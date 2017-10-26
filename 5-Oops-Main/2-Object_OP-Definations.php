<?php

	echo The Basic
		//http://www.techflirt.com/tutorials/oop-in-php/classes-and-objects-php.html
	
	echo Extends

	echo 'Properties(Visibility)';
		// http://www.php5-tutorial.com/classes/visibility/
		// Private members can only be accessed from inside the class itself.
		// Protected members can only be accessed from inside the class it self and its child classes.
		// Public members can be accessed from anywhere - outside the class, inside the class it self and from child classes.

	echo Class Constants
		// http://www.php5-tutorial.com/classes/constants/
		// http://www.sunilb.com/php/php5-tutorial-defining-class-constants
		// http://coursesweb.net/php-mysql/php-oop-constants-static-properties-methods
	
	echo Autoloading Classes

	echo Constructors and Destructors
		http://www.php5-tutorial.com/classes/constructors-and-destructors/
	
	echo Object Inheritance
		http://www.techflirt.com/tutorials/oop-in-php/inheritance-in-php.html
		http://www.elated.com/articles/object-oriented-php-working-with-inheritance/
	
	echo "Scope Resolution Operator(::)";
		Three special keywords self, parent, static are used to access properties or methods from inside the class defination

	echo 'Static Keyword';
		if no visibility declaration is used, then the property or method will be treated as if it was declared as public.
		Because static methods are callable without an instance of the object created, the pseudo-variable $this is not available inside the method declared as static.
		Static properties cannot be accessed through the object using the arrow operator ->.
	

	echo 'Class Abstraction';
		// http://www.techflirt.com/tutorials/oop-in-php/abstract-classes-interface.html
	
	echo 'Object Interfaces';
		// http://www.techflirt.com/tutorials/oop-in-php/abstract-classes-interface.html
	
	// echo 'Traits';

	echo 'Overloading		{Wants to know about overload}';
		// http://www.elated.com/articles/object-oriented-php-working-with-inheritance/

	echo 'Object Iteration';
		// PHP Docs-to-go (chrome addon):
	
	echo 'Magic Method	{Notes in Next file:-}';
		// http://www.techflirt.com/tutorials/oop-in-php/magic-methods-in-php.html
		// http://phpenthusiast.com/object-oriented-php-tutorials/magic-methods-and-constants
		// https://www3.ntu.edu.sg/home/ehchua/programming/webprogramming/php5_OOP.html
		// http://www.techflirt.com/tutorials/oop-in-php/magic-methods-in-php.html

	// echo 'Final Keyword';

	echo 'Object Cloning';

	echo 'Comparing Objects';

	echo 'Type Hinting';
		// http://www.techflirt.com/tutorials/oop-in-php/php-type-hinting.html
		
	echo 'Late Static Bindings';

	echo 'Objects and references';

	echo 'Object serialization';

	echo '<br />';echo '<br />';echo '<br />';echo '<br />';


	/*class SubObject
	{
		static $instances = 0;
		public $instance;

		public function __construct() {
			$this->instance = ++self::$instances;
		}

		public function __clone() {
			$this->instance = ++self::$instances;
		}
	}

	class MyCloneable
	{
		public $object1;
		public $object2;

		function __clone()
		{
			// Force a copy of this->object, otherwise
			// it will point to same object.
			$this->object1 = clone $this->object1;
		}
	}

	$obj = new MyCloneable();

	$obj->object1 = new SubObject();
	$obj->object2 = new SubObject();

	$obj2 = clone $obj;

	print("Original Object:\n");
	echo '<br />';echo '<br />';echo '<br />';
	
	print_r($obj);
	echo '<br />';echo '<br />';echo '<br />';

	print("Cloned Object:\n");
	print_r($obj2);/**/


?>