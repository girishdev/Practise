<?php

	echo "<b>STRIP_TAGS: </b>" . strip_tags("<h1>Hello</h1> <b>world!</b>");
	
echo '<br />';echo '<br />';

	echo "<h3>Hello</h3> <b>world!</b>";

echo '<br />';echo '<br />';

	echo '<b>strstr: </b>' . strstr("Hello world!","rld");
echo '<br />';echo '<br />';
	echo '<b>Strstr: </b>' . strstr("hwllklaskl as Hello world! this is my hi girish","e");

echo '<br />';echo '<br />';

	echo '<b>stristr: </b>' . stristr("Hello world! dskhfds dklsjhfdkljs dkljshfdkjs dfskljdshfkj ","DSKHFDS");

echo '<br />';echo '<br />';echo '<br />';

	echo "<b>Strlen: </b>" . strlen("Hellokljghkljdhfgkjdhfghkljghkljfdhsgkljdfsgkljhdfskjghdfklsghkljsghkljhfsgkjhdfkjghdfklsghkljsdgfghl");

echo '<br />';echo '<br />';echo '<br />';

	echo "<b>Strlen: </b>" . strlen("Hellokljghkljdhfgkjdhfgh kljghkljfdhsgklj dfsgkljhdfskjgh dfklsghkljsghkljhfsgkjhdfkjghdfklsghkljs dgfghl");
	
echo '<br />';echo '<br />';echo '<br />';

	echo "<b>substr_count: </b>" . substr_count("Heworldllo world. worldThe world is world worldnice world","world");
	
echo '<br />';echo '<br />';echo '<br />';	

	echo '<b>substr_replace: </b>' . substr_replace("Hello world","earth",9);
	
echo '<br />';echo '<br />';echo '<br />';

	$str = " Hello World! ";
	echo "<b>Without trim: </b>" . $str . strlen($str);
	echo "<br>";
	$trim_str = trim($str);
	echo "<b>With trim: </b>" . $trim_str . strlen($trim_str);/**/
	
echo '<br />';echo '<br />';echo '<br />';

	echo '<b>Strrchr: </b>' . strrchr("Hello dskfjdasf worldsfkljskfljd ! sfdfkjhk","!");

echo '<br />';echo '<br />';echo '<br />';
	
	echo '<b>Strcspn: </b>' . strcspn("Hello world!","o");

echo '<br />';echo '<br />';echo '<br />';

	echo '<b>Strspn: </b>' . strspn("Hello world!","kHello");	

echo '<br />';echo '<br />';echo '<br />';

	echo "<b>substr_compare: </b>" . substr_compare("Hello world","Hello world",0);
	
echo '<br />';echo '<br />';echo '<br />';

	$string = "Hello world. Beautiful day today.";
	$token = strtok($string, " ");
	while ($token !== false) {
		echo "<b>Strtok: </b> $token<br>";
		$token = strtok(" ");
	}/**/

echo '<br />';echo '<br />';echo '<br />';

	$haystack = 'I love php';
	$needle = 'L';
	echo stripos($haystack, $needle) ? '<b>stripos: </b>Found':'<b>stripos: </b>Not found';
	
	echo strrpos("I love php, I love php too!","");/**/
	
echo '<br />';echo '<br />';echo '<br />';

	$haystack = 'I love php';
	$needle = 'L';
	echo stripos($haystack, $needle) ? '<b>stripos: </b>Found':'<b>stripos: </b>Not found';/**/
	
echo '<br />';echo '<br />';echo '<br />';

	$haystack2 = 'I love php, I love php too! Noting This is plenty of text here we have all kinds of lettere as for as we know';
	$needle2 = 'w';
	$haystack = 'I love php';
	$needle = 'p';
	echo strpos($haystack2, $needle2) ? '<b>strpos: </b>Found':'<b>strpos: </b>Not found';/**/
	
echo '<br />';echo '<br />';echo '<br />';

	echo '<b>Strncmp: </b>' . strncmp("Hello world!","Hello earth!",7);
	echo '<br />';echo '<br />';echo '<br />';
	echo '<b>Strncasecmp: </b>' . strncasecmp("Hello world!","hello earth!",7);

echo '<br />';echo '<br />';echo '<br />';

	$s1 = 'abcd1234';
	$s2 = 'abd5678';
	echo '<b>Strncasecmp: </b>' . strncasecmp($s1, $s2, 1);/**/

echo '<br />';echo '<br />';echo '<br />';

	$str = 'Hello world';
	echo '<b>Strcmp: </b>' . strcmp($str, 'Hello world');
	echo '<br />';echo '<br />';echo '<br />';
	if(strcmp($str, 'Hello world') == 0) {
		echo '<b>Strcmp: </b>' . '1';
	}
	echo '<br />';echo '<br />';echo '<br />';
	strcasecmp($str, 'hello world');
	if(strcasecmp($str, 'hello world') == 0) {
		echo '<b>strcasecmp: </b>' . '1';
	}/**/

echo '<br />';echo '<br />';echo '<br />';

	$a = 'abcdefghijk';
	for($i = 0; $i < strlen($a); $i++){
		//echo $i .'-'. $a[$i] . '<br />';
		if($a[$i] > 'c'){
			echo $a[$i] . '<br />';
		}
	}/**/

echo '<br />';echo '<br />';

	echo '<b>Substr: </b>' . substr("Hello world",3);

echo '<br />';echo '<br />';echo '<br />';

	echo '<b>Strtolower: </b>' . strtolower("LGHDS DSFLDASKLDS JFD;SJKLDJSFLJDAS FD;LSJFKLDJSFS .");

echo '<br />';echo '<br />';echo '<br />';

	echo '<b>Strtoupper: </b>' . strtoupper("fgkljdsfj dslfjdslfjdlsf dklsjfdj dsfjdsj fdsfkjhnk");
	
echo '<br />';echo '<br />';echo '<br />';

	$sub = array(1=>'one',2=>'two','a'=>'apple');
	echo strtr('12345a',$sub);
	
echo '<br />';echo '<br />';echo '<br />';

	$trans = array("h" => "-", "hello" => "hi", "hi" => "hello");
	echo strtr("hi all, I said hello", $trans);/**/
	
echo '<br />';echo '<br />';echo '<br />';

	$a = array('x'=>'girish','y'=>'kumar','z'=>'hi');
	echo strtr("x said, z to all with help of y", $a);/**/
	
echo '<br />';echo '<br />';echo '<br />';

	echo strstr('abc','a','1');
	$string = 'hithisisgirish';
	echo $string[3];/**/

echo '<br />';echo '<br />';echo '<br />';

	echo str_word_count("Hello world This is girish");

echo '<br />';echo '<br />';echo '<br />';

	print_r(str_split("Hello Girish, Hello Girish"));

echo '<br />';echo '<br />';echo '<br />';

	echo str_shuffle("Hello World");

echo '<br />';echo '<br />';echo '<br />';

	echo str_rot13("Hello World");
	echo "<br>";
	echo str_rot13("Uryyb Jbeyq");
	echo "<br>";
	echo str_rot13("zzzz xxxx");
	echo "<br>";
	echo str_rot13("xyz abc");
	echo "<br>";
	echo str_rot13("klm nop");/**/

echo '<br />';echo '<br />';echo '<br />';

	echo str_repeat("x",5);

echo '<br />';echo '<br />';echo '<br />';

	$str = "Hello World Hi";
	echo str_pad($str,15,"x");/**/

echo '<br />';echo '<br />';echo '<br />';

	echo str_ireplace("WORLD","Girish","Hello world!");

echo '<br />';echo '<br />';echo '<br />';

	echo similar_text("Hi this is girish kumar Bsc","Hi this is kumar BCA");
	similar_text("Hello World","Hello Peter",$percent);
	echo similar_text("Hi this is girish kumar Bsc","Hi this is kumar BCA",$percent);
	echo $percent;

echo '<br />';echo '<br />';echo '<br />';

	$number = 9;
	$str = "Beijing";
	$str123 = "Beijing123";
	printf("There are %u million bicycles in %s %s.",$number, $str, $str123);/**/

echo '<br />';echo '<br />';echo '<br />';

	echo number_format("1000000")."<br>";
	echo number_format("1000000",2)."<br>";
	echo number_format("1000000",2,".",",");/**/

echo '<br />';echo '<br />';echo '<br />';

	echo nl2br("One line.\nAnother line.");

echo '<br />';echo '<br />';echo '<br />';

	echo metaphone("World");

echo '<br />';echo '<br />';echo '<br />';

	$str = " fdlsfk Hello World!";
	echo $str . "<br>";
	echo 'This is ltrim: == '.ltrim($str,"fdl");
	
echo '<br />';echo '<br />';echo '<br />';

	$str = "Hello World!";
	echo $str . "<br>";
	echo 'This is rtrim: == '.rtrim($str,"World!");/**/

echo '<br />';echo '<br />';echo '<br />';

	echo levenshtein("Hello World","Hell");

echo '<br />';echo '<br />';echo '<br />';

	echo hex2bin("48656c6c6f20576f726c6421");

echo '<br />';echo '<br />';echo '<br />';

	$number = 9;
	$str = "Beijing";
	$file = fopen("test.txt","w");
	echo fprintf($file,"There are %u million bicycles in %s.",$number,$str);/**/

echo '<br />';echo '<br />';echo '<br />';

	$str = "Hello World! World!2 World!3 World!4 World!5";
	echo $str . "<br>";
	echo chop($str,"World!");/**/
	
	//mind tech => 2004	

echo '<br />';echo '<br />';echo '<br />';

	echo substr_count("Hello world. The world is nice","is");
 
	echo stristr("Hello world!","!");
	echo strstr("Hello world!","e");

echo '<br />';echo '<br />';echo '<br />';

	echo str_ireplace("WORLD!","123456","Hello world!");

echo '<br />';echo '<br />';echo '<br />';
	
	/*echo $htmlOut = '<form action="#" method="POST">
					<table>
						<tr><td>First Name:</td><td><input type="text" name="fname" /></td></tr>
						<tr><td>Last Name:</td><td><input type="text" name="lname" /></td></tr>
						<tr><td>Email:</td><td><input type="text" name="email" /></td></tr>
						<tr><td></td><td><input type="submit" value="submit" name="sub_form" /></td></tr>
					</table>
				</form>';/**/

	echo(round(1.40) . "<br>");
	echo(round(0.50) . "<br>");
	echo(round(0.49) . "<br>");
	echo(round(-4.40) . "<br>");
	echo(round(-4.60));/**/

	echo(rand() . "<br>");
	echo(rand() . "<br>");
	echo(rand(10,100));/**/

	echo dechex("30") . "<br>";
	echo dechex("10") . "<br>";/**/

	echo(sqrt(16) . "<br>");
	echo(sqrt(64) . "<br>");/**/

	echo(floor(7.99) . "<br>");
	echo(floor(0.60) . "<br>");
	echo(floor(0.40) . "<br>");
	echo(floor(5) . "<br>");
	echo(floor(-5.1) . "<br>");
	echo(floor(-5.9));/**/

	echo(ceil(0.60) . "<br>");
	echo(ceil(0.10) . "<br>");
	echo(ceil(1.1) . "<br>");/**/

echo '<br />';echo '<br />';echo '<br />';

	$arr = array('Hello','World!','Beautiful','Day!','gdsjfggds', 'jgfdjsa', 'gjksdagf', 'dsfgjsdgf', 'jdkasgf', 'jdas');
	echo implode(" ",$arr); /**/

	$str = "Hello world!";
	echo 'This is convert_uuencode: ==>' . convert_uuencode($str);
		echo '<br />';
	$a = ",2&5L;&\@=V]R;&0A `";
	echo 'This is convert_uudencode: ==>' . convert_uudecode($a);/**/

	$str = "Hello world!";
	echo chunk_split($str,12,".");/**/

	$a = 'There .are 9 million, bicycles in ,Beijing.';
	$echo = explode(' ', $a);
	var_dump($echo);/**/
	
	$str = 'Tesing';
	echo strlen($str);/**/
		
	$number = 9;
	$str = "Beijing";
	$file = fopen("test22.txt","w");
	echo fprintf($file,"There are %u million bicycles in %s.",$number,$str);/**/
	
echo '<br />';echo '<br />';echo '<br />';
	
	$i = 10;
	for($i = 0; $i <= 10; $i++){
		echo $i++ . '<br />';
	}/**/
	
	$i = 10;
	var_dump($i);echo '<br />';
	print_r($i);echo '<br />';
	print $i;/**/

	$i = 5;
	do{
		echo $i;
		$i++;
	}while($i < 10);

	echo '<br />';

	$i = 5;
	while($i < 10){
		echo $i;
		$i++;
	}/**/

echo '<br />';echo '<br />';echo '<br />';

	echo $htmlOut = '<form method="post">
						<input type="text" name="number" />
						<input type="submit" name="sub_form" />
					</form>';
	
	if(isset($_POST['sub_form'])){
		$att = $_POST['number'];
		switch($att){
			case 1 - 4:
				echo 'You have entered 1';
				break;
			case 5:
				echo 'You have entered 5';
				break;
			case 10:
				echo 'You have entered 10';
				break;
			case 15:
				echo 'You have entered 15';
				break;
			case 20:
				echo 'You have entered 20';
				break;
			default:
				echo 'You have entered <b>Default</b>';
				break;
		}
	}/**/
	
echo '<br />';echo '<br />';echo '<br />';

	$a = 10;
	//$a = null;
	//$a = 0;

	echo $a ? 'Vaue is assigned':'Value is not assigned';/**/

	$a = 10;
	//$b = &$a;
	$b = 20;
	echo $a;echo '<br />';
	echo $b;/**/

?>