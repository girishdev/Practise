<?php

	/*$string = 'This is String file';
	
	echo ($string);
	echo '<br />';
	echo strrev($string);
	
	echo '<br />';
	$arr = array('Name1'=>'Girish','Name2'=>'kumar','Name3'=>'Raju');
	var_dump($arr);
	echo '<br />';
	var_dump(array_reverse($arr));/**/
	
	/*echo '<br />';
	var_dump(array_values($arr));/**/
	
	
	//session_start();
	//$_SESSION['username'] = 'Girish';
	
	/*if(isset($_POST['submit'])){
		echo 'set cookie';
		setcookie("user", $_POST['n'] , time()+60);
		setcookie("age", $_POST['a'], time()+60);
		setcookie("profile", $_POST['prof'], time()+60);
	}/**/
	//print_r($_COOKIE);
?>
   
<!--<html>
 
<body>
	
<form method="POST">
	 
 Enter your name <input type="text" name="n"/><hr/>
	 
 Enter your age <input type="text" name="a"/><hr/>
	  
Enter your profile <input type="text" name="prof"/><hr/>
		
 <input type="submit" value="SET COOKIE"/>
	
</form>
 
</body>
 
</html>-->

<?php

	//setcookie('username','Girish',time()+50);

	//echo "\x2a";
	//echo "\052";
	
	/*$me = 'Davey';
	$names = array('Smith','Jones','Jackson');
	echo "There cannot be more than two {$me}'s!" . '<br />';
	echo "Citation {$names[1]}[1987]";/**/
	
	/*$who = "World";
	echo <<<TEXT
	So i said, "Hello $who"
	TEXT;
	echo <<<EOT
	Hello World
	EOT>>>;/**/
	
	/*echo 'This is \'my\' string';
	$a = 10;
	echo "Hello value of \$a is \"$a\".";
	echo "Here is an escaped backslash: - \ -";
	echo "Here's a literal brace + dollar sign: {\$";
	$var = 'Girish';
	echo strlen($var);/**/
	
	/*echo $str = strstr('abc','a','1');
	$subst = array(
		'1'=>'one',
		'2'=>'two',
	);
	echo strtr('123', $subst);/**/
	
	/*$string = 'abcdef';
	echo $string[1];
	$srtlenth = strlen($string);
	for($i = 0; $i <= $srtlenth; $i++){
		echo $i;
	}/**/

	/*$str = '123aa';
	if($str == 123){
		echo 'You are in IF';
	} else {
		echo 'You are in ELSE';
	}/**/
	
	/*$str = "Hello World";
	//if(strcmp($str, "Hello World") === 0){}
	if(strcmp($str, "hello world") === 0){
		echo 'we are in if';
	}else {
		echo 'we are in else';		
	}
	echo '<br />';
	if(strcasecmp($str, "hello world") === 0){
		echo 'we are in if';
	}else {
		echo 'we are in else';		
	}
	
	$s1 = 'abcd1234';
	$s2 = 'abcd5678';
	echo strcasencmp($s1, $s2, 2);/**/
	
	/*$email  = 'girish@example.com';
	$domain = strstr($email, '@');
	echo "\$domain: ".$domain; // prints @example.com
	echo '<br />';
	$user = strstr($email, '@', true); // As of PHP 5.3.0
	echo $user; // prints name/**/
	
	/*$trans = array("h" => "-", "hello" => "hi", "name"=>"Girish", "hi" => "hello");
	echo strtr("hi all, I said hello, I am name", $trans);/**/
	
	/*echo strtr("baab", "ab", "01"),"\n";
	$trans = array("ab" => "01");
	echo strtr("baab", $trans);/**/
	
	/*echo substr_compare("abcde", "bc", 1, 2) . '<br />'; // 0
	echo substr_compare("abcde", "de", -2, 2) . '<br />'; // 0
	echo substr_compare("abcde", "bcg", 1, 2) . '<br />'; // 0
	echo substr_compare("abcde", "BC", 1, 2, true) . '<br />'; // 0
	echo substr_compare("abcde", "bc", 1, 3) . '<br />'; // 1
	echo substr_compare("abcde", "cd", 1, 2) . '<br />'; // -1
	echo substr_compare("abcde", "abc", 5, 1) . '<br />'; // warning/**/
	
	/*$haystack = "abcdefg";
	$needle = 'abc';
	if(strpos($haystack, $needle) !== false){
		echo 'Found';
	} else {
		echo 'Not Found';
	}/**/
	
	/*
	//$haystack = "123456123456";
	$haystack = "Hello World how are you";
	//$needle = "234";
	$needle = "E";
	//echo strpos($haystack, $needle)? 'YES':'NO';
	//echo stripos($haystack, $needle)? 'YES':'NO';
	echo '<br />';
	echo '<br />';
	$haystack = '123123';
	$needle = '23';
	echo 'Strrpos: '.strrpos($haystack, $needle);
	//echo strrpos($haystack, $needle)? 'YES':'NO';
	echo '<br />';
	echo '<br />';
	echo '<br />';
	$haystack = "123456123456";
	$needle = '123';
	echo strpos($haystack, $needle, 1);
	echo '<br />';
	echo '<br />';
	//$haystack = "123456";
	$haystack = "Testing";
	//$needle = '34';
	$needle = 'Ti';
	echo strstr($haystack, $needle);
	
	echo stripos('Hello World', 'hello');
	echo stristr('Hello My World', 'My');	//stristr supports small & capital letters/**/
	
	/*$string = '133445abcdef';
	//$mask = '12345';
	$mask = '3';
	echo strspn($string, $mask);/**/
		
	/*$haystack = 'ababcdgirishi';
	$needle   = 'i';

	echo $pos = strripos($haystack, $needle);
	if ($pos === false) {
		echo "Sorry, we did not find ($needle) in ($haystack)";
	} else {
		echo "Congratulations!\n";
		echo "We found the last ($needle) in ($haystack) at position ($pos)";
	}/**/
	
	/*$mystring = 'ababcdgirishi';
	$pos = strrpos($mystring, "b");
	if ($pos === false) { // note: three equal signs
		echo $pos;
		// not found...
	} else {
		echo $pos;
	}/**/
	
	/*echo strrev("Hello world!"); // outputs "!dlrow olleH"
	echo '<br />';
	echo strrev("world"); // outputs "!dlrow olleH"/**/
	
	//echo $var = strspn("42 is the answer to the 128th question.", "1234567890");
	//echo strspn("Hello world!","x");
	
	/*$email  = 'name@example.com';
	$domain = strstr($email, '@');
	echo $domain; // prints @example.com

	$user = strstr($email, '@', true); // As of PHP 5.3.0
	echo $user; // prints name/**/

	/*$string = "This is\tan example\nstring girish";
	//Use tab and newline as tokenizing characters as well
	$tok = strtok($string, " \n\t");
	while ($tok !== false) {
		echo "Word=$tok<br />";
		$tok = strtok(" \n\t");
	}/**/
	
	/*$str = "Mary Had A Little Lamb and She LOVED It So";
	echo $str = strtolower($str);
	echo '<br />';
	echo $str = strtoupper($str);/**/
	
	/*$foo = 'hello world!';
	echo $foo = ucfirst($foo);/**/
	
	/*$foo = 'this hello world!';
	echo $foo = ucwords($foo);             // Hello World!/**/
	
	/*print("Hello World");
	print 'Hello World';
	printf('Hello World');
	$variable = 'Testing 123';
echo '<br />';	
print <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
END;/**/

	/*$str = "\n";
	echo $str;
	if (ord($str) == 10) {
		echo "The first character of \$str is a line feed.\n";
	}/**/
	
	/*$str = "The string ends in escape: ";
	echo $str .= chr(244); /* add an escape character at the end of $str *//**/
	
	/*$num = 5;
	$location = 'tree';

	$format = 'There are %d monkeys in the %s';
	echo sprintf($format, $num, $location);/**/
	
	/*$hello  = "Hello World";
	
	$trimmed = trim($hello, "Hdle");
	var_dump($trimmed);
	echo '<br />';
	$trimmed = trim($hello, 'HdWr');
	var_dump($trimmed);/**/
	
	/*echo substr('abcdef', 1);     // bcdef
	echo substr('abcdef', 1, 3);  // bcd
	echo substr('abcdef', 0, 4);  // abcd
	echo substr('abcdef', 0, 8);  // abcdef
	echo substr('abcdef', -1, 1); // f

	// Accessing single characters in a string
	// can also be achieved using "square brackets"
	$string = 'abcdef';
	echo $string[0];                 // a
	echo $string[3];                 // d
	echo $string[strlen($string)-1]; // f/**/
		
	/*$text = "The quick brown fox jumped over the lazy dog.";
	$newtext = wordwrap($text, 20, "<br />\n");
	echo $newtext;/**/
	
	//echo ("foo isn't\n bar hi\n this is ");
	//echo nl2br("foo isn't\n bar hi\n this is ");
	
	/*$search  = array('A', 'B', 'C', 'D', 'E','W');
	$replace = array('B', 'C', 'D', 'E', 'F','W');
	$subject = 'A';
	echo str_replace($search, $replace, $subject);

	echo addcslashes('foo[ ]', 'A..z');/**/
	
	/*$str = "Hello";
	$arr1 = str_split($str);
	$arr2 = str_split($str, 2);
	print_r($arr1);
	echo '<br />';
	print_r($arr2);/**/
	
	/*$str = 'abcdeflgfjsdlfjdsfjd;lsjfdljsf;l';
	//$str = 'abcdeflgfjsdlfjdsfjd;lsjfdljsf;l DDKASJFHK AKSDLJHKJJDHASGF JDGSFDGSF KJSGFDJS    JHDASGFHJDGS';
	$shuffled = str_shuffle($str);

	// This will echo something like: bfdaec
	echo $shuffled;/**/
	
	// Provides: You should eat pizza, beer, and ice cream every day
	/*$phrase  = "You should eat fruits, vegetables, and fiber every day.";
	$healthy = array("fruits", "vegetables", "fiber");
	$yummy   = array("Ragi ball", "chapati", "ice cream");
	echo $newphrase = str_replace($healthy, $yummy, $phrase);/**/
	
	//echo str_repeat("-=", 4);
	//echo str_repeat("Girish kumar A ", 20);
	
	//echo str_rot13('PHP 4.3.0'); // CUC 4.3.0

	/*$str = "Hello frind, you're looking good today! hi this is Girish";
	print_r(str_word_count($str, 1));echo '<br />';echo '<br />';
	print_r(str_word_count($str, 2));echo '<br />';echo '<br />';
	print_r(str_word_count($str, 1, 'àáãç3'));echo '<br />';echo '<br />';
	echo str_word_count($str);echo '<br />';echo '<br />';/**/
	
	/*$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6 Hi this is Girish";
	$pieces = explode(" ", $pizza);
	//echo $pieces[0]; // piece1
	//echo $pieces[1]; // piece2
	echo '<br />';
	var_dump($pieces);/**/
	
	/*$array = array('lastname', 'email','phone');
	echo $comma_separated = implode(",", $array);
	//echo $comma_separated = implode(" ", $array);
	echo '<br />';echo '<br />';
	$var = array('Hi', 'This', 'is', 'Girish');
	echo implode(' ', $var)/**/

	//join — Alias of implode()
    /*$array = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');    
    //echo join('<br>', $array);	
    echo join(' ', $array);	/**/
	
	/*$text = "\t\tThese are a few words :) ...  ";
	$binary = "\x09Example string\x0A";
	$hello  = "Hello World";
	var_dump($text, $binary, $hello);
	
	$text = 'Testing';
	$trimmed = ltrim($text);
	var_dump($trimmed);/**/
	
	//strchr
	
	/*$email  = 'namE@Example.com';
	$domain = strstr($email, 'E');
	//$domain = strchr($email, '@');
	echo $domain; // prints @example.com
	echo '<br />';
	$email  = 'namE@Example.com';
	echo strchr($email,"e");/**/

	/*$str = "Hello";
	echo soundex($str);
	$str2 = "world";
	echo soundex($str2);/**/
	
	/*$bodytag = str_ireplace("%body%", "green", "<body class='august20' text=%BODY%>");
	echo $bodytag; // <body text=black>/**/
	
	/*$str = "Hello World";
	echo str_pad($str,15,".");/**/
	
	/*$var1 = "Hello";
	$var2 = "hello";
	if (strcmp($var1, $var2) !== 0) {
		echo '$var1 is not equal to $var2 in a case sensitive string comparison';
	} else {
		echo '$var1 is equal to $var2!';
	}/**/
	
	/*$var1 = "Hello";
	$var2 = "hello";
	if (strcasecmp($var1, $var2) == 0) {
		echo '$var1 is equal to $var2 in a case-insensitive string comparison';
	} else {
		echo '$var1 is not equal to $var2 in a case-insensitive string comparison!';
	}/**/
	
	//echo strncmp("Hello world!","Hello earth!",6);
	//echo strrchr("Hello world!","HadlloasdkHello");
	
	/*$text = 'This is a Simple text.';
	// this echoes "is is a Simple text." because 'i' is matched first
	echo strpbrk($text, 'mi');
	echo '<br />';
	// this echoes "Simple text." because chars are case sensitive
	echo strpbrk($text, 'xt');/**/
	
	/*$str = "Hello World!";
	echo $str . "<br>";
	echo trim($str,"!dHe");/**/
	
	/*$filename = "test.txt";
	$md5file = md5_file($filename);
	echo $md5file;/**/
	
	//$text = 'Testing string';
	//echo $trimmed = ltrim($text, 'Tes');
	
	/*echo $str = "A 'quote' is <b>bold</b>";
	// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
	echo htmlentities($str);/**/
	
	/*$orig = "I'll \"walk\" the <b>dog</b> now";
	$a = htmlentities($orig);
	echo '$a: '.$a; // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now
	$b = html_entity_decode($a);
	echo '<br />';
	echo '$b: '.$b; // I'll "walk" the <b>dog</b> now/**/
	
	/*echo ord("h")."<br>";
	echo ord("f")."<br>";/**/
	
	/*$str = "first=value&arr[]=foo+bar&arr[]=baz";
	parse_str($str);
	echo $first;echo '<br />'; // value
	echo $arr[0];echo '<br />'; // foo bar
	echo $arr[1];echo '<br />'; // baz
	echo '<br />';echo '<br />';
	parse_str($str, $output);
	echo $output['first'];echo '<br />';  // value
	echo $output['arr'][0];echo '<br />'; // foo bar
	echo $output['arr'][1];echo '<br />'; // baz/**/

///////////////////////************************ OLDER ************************///////////////////////
///////////////////////************************ OLDER ************************///////////////////////
///////////////////////************************ OLDER ************************///////////////////////

	/*function getSal(&$uid,&$nnn){
		echo 'Test displays'.$uid;// displays E6
		echo 'Test email'.$nnn;//displays email@gmail.com
		echo "<br />";
		$uid=20;
		$nnn = 'Nirmala@gmail.com';
		return;
	}
	$eid = 'E6';
	$email = 'email@gmail.com';
	getSal($eid,$email);
	echo $eid;//displays 20
	echo $email;// displays Nirmala@gmail.com /**/

	/*echo '<br />String Concatenation:- <br />';
	$stra = 'abc';
	$strb = 'def';
	$strc = $stra . ' '. $strb;
	echo $strc . '<br />';
	$strc .= ' '.'&nbsp;&nbsp;ghi';
	echo $strc . '<br />';/**/
 
	/*function Hello(){
		return 'Hello world';
	}
	echo Hello(); // calling function
	//print_r(Hello());/**/
	
	/*function Helloreturn() {
		return "Hello World";
	}
	$text = Helloreturn();
	echo $text;
	//print_r($text);/**/
	
	/*function hello($who){
		echo "Hello $who";
		if($who = "World") {
			//echo '<br />'.'In if Reader'.'<br />';
			return;
		}
		echo ", how are you";
	}
	hello("World");
	hello("Reader");/**/

?>
