<?php
	setcookie('username','girish',time()+360);
	setcookie('password',123456,time()+360);
	setcookie('password_1','XYZ',time()+360);
	setcookie('password_3','KJFDSAKJF KFDSAKSDKFDSAH',time()+360);



	$var = 'apple';
	echo ucfirst($var);

	echo '<br/>';

	$filename = "htdocs/Example_programs/Practise/webdictionary.txt";
	$file = fopen( $filename, "w" );
	if(!$file){
		echo ( "Error in opening new file" ); exit();
	}else {
		echo 'ok';
		fwrite( $file, "This is a simple test\n" );
		fclose( $file );
	}


	$friends = array( array('xyz','123 main','Bangalore'),
	array('pqr','124 main','Mangalore'),
	array('abc','562 main','Chennai'));
		for($i=0;$i<3;$i++){
			for($j=0;$j<3;$j++){
				echo $friends[$i][$j];
			}
			echo "<br />";
		}

?>
