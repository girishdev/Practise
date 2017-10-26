<?js

	function productheight(){
	var maxHeight = 0;
	$(".product .top").each(function(){
		if ($(this).height() > maxHeight) {
			maxHeight = $(this).height();
		}
		$(".product .top").height(maxHeight);
	});

}
?>
<?php
echo 'Array search';
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

echo "<br />Key:".$key = array_search('green', $array); // $key = 2;
echo "<br />Key:".$key = array_search('red', $array);   // $key = 1;
echo "<br />Key:".$key = array_search('white', $array);   // $key = 1;

echo '<br />Array search for Int';
//$array = array(0 => 10, 1 => 20, 2 => 30, 3 => 40);
$array = array(10, 20, 30, 40);

echo "<br />Key:".$key = array_search(11, $array); // $key = 2;
if (false !== $key) {
	echo "<br />Exists";
}else{
	echo"<br />Not there";
}

echo "<br />Key:".$key = array_search(10, $array);   // $key = 1;
echo "<br />Key is:";
print_r($key);
if (false !== $key) {echo "<br />Exists";}else{echo"<br />Not there";}
echo "<br />Key:".$key = array_search(30, $array);   // $key = 1;


	exit;

	function addition($x,$y){
		$ans = $x + $y;
		return $ans;
	}
	$varans = addition(4,5);
	echo '<br />' . $varans;
	exit;

    $who = "This is first function world";
    function hello($who){
        echo "Hello: $who";
        if($who == "This is first function world") {
            return;
        }else {
            echo "Hi how are you";
        }
    }
    hello($who);

    echo '<br />';
    echo '<br />';

    function myfunction($who){
        echo "HELLO $who";
    }
    myfunction("WELL COME");

    echo '<br />';
    echo '<br />';

    function mynew() {
        if(func_num_args() > 0) {
            echo "We have arguments";
            echo '<br />';
            echo func_num_args(); //Counts number of arguments
            echo '<br />';
            echo func_get_arg(2); //To get the required argument
            echo '<br />';
            $args = func_get_args(); //In programming and computer science, this is called an apply function.(Apply is a function that applies functions to arguments.)
            call_user_func_array("myfunction",$args);
        }else {
            echo "We dont have any argument";
        }
    }
    mynew('apple','b','c','d');

    echo '<br />';
    echo '<br />';

    function newfunction(){
        if(func_num_args() > 0){
            $len = func_get_args();
            foreach($len as $a){
                echo $a . '<br />';
            }
        }
    }
    newfunction(10,20,30,40,50,60,70,80,90);

    echo '<br />';
    echo '<br />';

    $i = 100;
    $sum = 0;
    do {
        echo $i;
        $sum += $i;
        echo '<br />';
        $i++;
    }
    while($i <= 110);
    echo 'SUM:' .$sum. '<br />';

?>
