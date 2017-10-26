<?php

	echo '<br />';
    for ($i = 0; $i < 3; $i++) {
        for ($j = 3; $j > 0; $j--) {
            if ($i == $j) {
                break;
            }

            echo $j;
        }
    }

    echo '<br />';
    echo '<br />';
    echo '<br />';
    echo '<br />';
       echo $output = 'ls';

    echo '<br />';
        $a = 15;
    $b = $a;
    $b = 25;

    $c = 50;
    $d = &$c;
    //$d = 25;

    echo $a . ' - ' . $c;

    echo '<br />';
    echo '<br />';
    echo '<br />';
    $prsns[0]=4;
$prsns[1]=12;
$prsns[2]=13;
$prsns[3]=14;
$prsns[4]=15;

$cap=4;

$rm[0]= ceil ($prsns[0]/$cap);
$rm[1]= ceil ($prsns[1]/$cap);
$rm[2]= ceil ($prsns[2]/$cap);
$rm[3]= ceil ($prsns[3]/$cap);
$rm[4]= ceil ($prsns[4]/$cap);

echo "<br />Capacity:$cap<br />";

echo "<br />Persons:";
print_r($prsns);

echo "<br />Room:";
print_r($rm);
echo '<br />';
echo '<br />';

    $a = 1;
    $b = 1;

    if ($a == $b) {
        echo "a";
    }
    else {
        echo "b";
    }

    if ($a === $b) {
        echo "c";
    }
    else {
        echo "d";
    }

    if ($a < $b) {
        echo "e";
    }
    else {
        echo "f";
    }

echo '<br />';
    $a = array('z', 'x','p');
    $b = array('y', 'w');

    $c = array('a' => 1, 'b' => 2);
    $d = array('c' => 3, 'd' => 4);

    $e = $a + $b;
    $f = $c + $d;

    foreach ($e as $value) {
        echo $value;
    }

    foreach ($f as $value) {
        echo $value;
    }

echo '<br />';
        $myVar = 'foo';
    $$myVar = 'bar';

    echo $myVar;

    echo '<br />';

   echo  $string1 = 'foo' . 'bar';
   echo '<br />';
   echo  $string2 = 'hello' + 'goodbye';
   echo '<br />';
   echo  $string3 = "abc" + '123';
   echo '<br />';

    echo sprintf('%s - %s - %s', $string1, $string2, $string3);

   echo '<br />';
       $myVar = 'foo';
    $$myVar = 'bar';

    echo ${'myVar'} . $foo;

    echo '<br />';


$array = array("a1"=>'x',"a2"=>'e',"a3"=>'z');
ksort( $array );
foreach ( $array as $keys => $values )
{
print "$keys = $values";
}

echo '<br />';
echo '<br />';
echo '<br />';

for($x = 1; $x <= 2; $x++){
      for($y = 1; $y <= 3; $y++){
         if ($x == $y) continue;
         print("x = $x  y =  $y");
      }
   }
echo '<br />';
echo '<br />';
echo '<br />';

function a(&$a = 19){
 $a .= 1;
}
$b = 6;
a($b);
echo $b++;
echo $b;
echo $b;

echo '<br />';
echo '<br />';
echo '<br />counter:-';
function counter($start, &$stop){
	if($stop > $start){
		return;
	}
	counter($start--,++$stop);
}
$start = 5;
$stop = 2;
counter($start,$stop);

echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';

for ($run=0; $run<10; $run++) {
	echo "<br /><br /><h1>Run: $run</h1>";
	unset($headers);
	$headers = array();
	$headers[] = "From: akkreditering@superliga.dk <Superliga Akkreditering>";
	$headers[] = "Bcc: info@scandesigns.dk";
	$headers[] = "X-Mailer: PHP/".phpversion();
	echo "<br />headers:";
	print_r($headers);
	/* $passed_header = implode("-", $headers);
	echo "<br />passed_header:";
	print_r($passed_header); /* */
}
function counter($start, &$stop){
	if($stop > $start){
		return;
		echo 'Hello';
	}
	counter($start-- , ++$stop);
	//echo 'Hello';
}
$start = 5;
$stop = 2;
counter($start,$stop);

echo '<br />Int:';
    echo (int) "1235 Jason";
echo '<br />';
echo '<br />Sale:';
    $sale = 200;
    $sale = $sale+ + 1;
    echo $sale;
echo '<br />';
echo '<br />float:';
	echo (float)((0.1+0.7)*10);
	echo '<br />';
	echo (int)((0.1+0.7)*10);
echo '<br />';
echo '<br />$sale2:';
	$sale = 500;
    $sale = $sale- + 2;
    echo $sale;
echo '<br />';
echo '<br />left abc right:<br />';
	$left = 'abc';
	$right = 'abc';
	echo (int) ($left > $right);
echo '<br />0.6+0.1<br />';
echo (int)((1.1+ 13.7) * 10);
echo '<br />break 2:';
for($i = 0;$i < 10; $i++){
	for($j = 0;$j < 3; $j++){
		if(($j+$i)%5 == 0){
			continue;
		}
		//echo $j . '<br />';
	}
}
echo '<br />$x-$y:';
$x = 123 == 0123;
$y = 123 == 123;
echo $x;
echo $y;
echo '<br />function:';
function add($a=5){
	//echo 'hello';
	if($a==5){
		return;
		echo 'hello';
	}
}
add($a=5);
echo '<br />';
$i=0;
function odd(){
	$i=0;
	$j=0;
	for($i=1; $i<=50; $i=$i+2){
		$j++;
		echo $j . '=>' . $i;
		echo '<br />';
	}
}
echo "The last value of the variable \$i: $i";

echo '<br />';
echo '<br />break 3:<br />';
for($i = 0;$i < 10; $i++){
	//echo $i . '<br />';
	for($j = 0;$j < 3; $j++){
		//echo $j . '<br />';
		if(($j+$i)%5 == 0){
			echo $j . '<br />';
			//continue;
		}
	}
}
echo 10%100 . '<br />';
echo (5/100);
if(5<2){
   echo 'False';
}else{
      echo 'True';
}
echo '<br />';
echo '<br />';
$a = 5;
$b = 4;
$c = ($a + $b);
echo '($a++ * ++$b):' . $c;
echo '<br />';
$input = array(4, "4", "3", 4, 3, "3", 3, 3, 3, 3, 3, 5, 5, 5, 5, 7, 7, 7, 7);
echo count(array_unique($input));

echo '<br />Switch:';

function operations($a,$b,$ch) {
 $ans;
 switch($ch){
  case 'add': $ans = $a + $b;
     break;
  case 'sub': $ans = $a - $b;
    break;
  case 'mul': $ans = $a * $b;
    break;
  case 'div': if($a > $b) {
     $ans = $a / $b;
    } else {
     echo "A value should be greater than B";
    }
    break;
  case 'mod': $ans = $a % $b;
    break;
  default: echo "Invalid";
 }
 return $ans;
}
echo $a=operations(20,30,'add');

echo '<br />';
$my_array = array(1 => 'a', 2 => 'b');
echo $my_array;

echo '<br />:';
	$x = array(10,2,4,12356,245896255);
	$y = array(1 => 2, 0 => 10, 2 => 4,3 => 12356,2 => 245896255);
	var_dump($x);
	echo '<br />';
	var_dump($y);
	echo '<br />';
	var_dump($x == $y);

echo '<br />';
echo '<br />';
if($a==5){
   echo 'Hello';
}else {
  echo 'World';
}
echo '<br />';
echo '<br />Hi....';
for($i=0;$i<=5;$i++){
  echo $i+$I;
}
echo '<br />';
echo '<br />';
$a = 5;
$b = 4;
echo $a++;
echo $a;
echo '<br />';
echo ++$b;
echo $b;
echo '<br />';
$c = ($a++ * ++$b);
echo $c;
echo '<br />';
echo '<br />:Define:';
    define('123MESSAGE', '123');

    if (strlen('123MESSAGE') == 12) {
        echo '123MESSAGE';
    }
    else {
        echo 'ABC';
    }
echo '<br />';
$input = array(4,"4","3",4,3,"3");
$result = array_unique($input);
var_dump($result);

echo '<br />';
   $number = 100;
   echo $number < 10 ? "a" : ($number > 100 ? "b" : ($number > 60 ? ($number < 5 ) : "z"));
echo '<br />';

//class myClass {
 // echo "Hello class";
//}
//echo $a = new myClass();

echo '<br />';
	for($i = 0; $i <= 10; $i++){
		echo $i . '<br />';
		for ($j = 0; $j < 5; $j++){
			echo $j;
			if($i==$j){
				echo 'Hello' . '<br />';
				for($l = 0; $l <= 2; $l++){
					echo $l;
					switch ($l) {
						case 0:
							echo 'This is first row<br />';
						break;
						case 1:
							//echo 'This is second row<br />';
							if($l==1){
								//echo 'echo this simple sentence:<br />';
								for($m = 0; $m <= 1; $m++){
									echo $m . '<br />';
								}
							}
						break;
						case 2:
							echo 'This is third row<br />';
						break;
						default:
							echo 'This row is empty<br />';
						break;
					}
				}
			}else {
				echo 'world' . '<br />';
			}
		}
		//exit;
	}
echo '<br />';
echo '<br />';
echo '<br />';
	$a = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	echo $a;
echo '<br />Addition:';
$p = 1;
++$p;
$p++;
$p--;
$p--;
++$p;
$p--;
$q = $p + $p;
echo $g = $q + $p - $q / $q + $p %$q;

echo '<br />';
echo '<br />Addition:';
$p = 1;
++$p;
$p++;
$p--;
$p--;
++$p;
$p--;
$q = $p + $p;
echo '<br />';
$z = 5;
echo 'Hello_1:-' . $p = &$z;
echo '<br />';
echo $var = &$p;
echo '<br />';

echo '<br />';
$p++;
$p--;
$p--;
++$p;
$p--;
echo 'p_only:' . $p;
echo 'one:' . $one = &$p . '<br />';
echo 'one_2:' . $one_2 = $p . '<br />';
echo 'one_3:' . $one_3 = $q . '<br />';
$q = &$p + $p - $q * $q;
echo 'Qq:' . $q;
echo 'Qq_p:' . $p;
echo '<br />';
echo 'Hello:' . $g = $q + $p - $q / $q + $p %$q;
echo '<br />';
class myclass {
	function test(){
		echo 'Hello test';
	}
}
$var_one = new myclass();
$var_one->test();

echo '<br />';
class myclass{
	function myfun(){
		echo 'Hello';
	}
	function myfun_one(){
		echo 'second_function';
		$this -> myfun();
	}
}
$var = new myclass();
$var -> myfun_one();
//echo '<br />';
//$var -> myfun_one();

echo '<br />';

class foo {
	public $foo = 'bar';
	protected $bar = 'bat';
	private $qux = 'bingo';
	function myclass() {
		var_dump(get_object_vars($this));
	}
}

$var = new foo();
$var -> myclass();

echo '<br />';

class bar extends foo {
	function mysecfun() {
		var_dump(get_object_vars($this));
	}
}
$var_two = new bar();
$var_two -> mysecfun();

echo '<br />';

class baz extends bar {
	function mylastclass(){
		var_dump(get_object_vars($this));
	}
}
$var_last = new baz();
$var_last -> mylastclass();

echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';

echo ord('f');
echo '<br />';
echo ord('k');
echo '<br />';
echo 'Z:' . $z = ord('g') + ord('k');echo '<br />';
echo 'X:' . $x = ord('g') - ord('k');echo '<br />';
echo 'Y:' . $y = ord('g') % ord('k');echo '<br />';
echo 'P:' . $p = ord('g') / ord('k');echo '<br />';
echo 'Z:' . ord($z);
echo '<br />';
echo 'Final:' . $var = ord($z) / ord($x) - ord($y) % ord($p) * ord($z) ;
echo '<br />';
echo '<br />';
echo '<br />';

 $values = array(
        15,
        12,
        "15",
        34,
        15 => 25,
        15 => 15
    );

    $key = array_search("15", $values);

    if (!$key) {
        echo "Not found";
    }
    else {
        // gettype() will return either 'string' or 'integer'
        echo $key . ' - ' . strtolower(gettype($values[$key]));
    }

exit;


echo chr((ord('a') + ord('A'))/2);
echo '<br />';

echo ord("hello");

for($i= 10; $i <= 126; $i++) {
	echo $i . '==' . chr($i) . '<br />';
}



ord('f');
ord('k');
$z = ord('g') + ord('k');
$x = ord('g') - ord('k');
$y = ord('g') % ord('k');
$p = ord('g') / ord('k');
$var = ord($z) / ord($x) - ord($y) % ord($p) * ord($z) ;


?>
