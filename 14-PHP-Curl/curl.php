<?php

	/*$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://www.techflirt.com/php/php-curl/curl-examples.html");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($curl);
	curl_close($curl);
	print $result;/**/

	/*$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://completion.amazon.com/search/complete?search-alias=aps&client=amazon-search-ui&mkt=1&q=facebook");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($curl);
	curl_close($curl);
	print_r(json_decode($result));//return amazone autocomplete suggestion
	/**/
	
	/*$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://localhost/Example_programs/Imp_Points/Tutorials/index.php");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl,CURLOPT_USERPWD,"ankur:techflirt");
	$result = curl_exec($curl);
	curl_close($curl);
	print($result);/**/
	
	/*$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://localhost/Example_programs/Imp_Points/Tutorials/index.php");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, array('field1'=>'value1','field2'=>'value2','field3'=>'value3'));//Setting post data as xml
	$result = curl_exec($curl);
	curl_close($curl);
	print($result);/**/
	
$xml = '<node>'
. '<test>'
. '1'
. '</test>'
. '</node>';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://localhost/Example_programs/Imp_Points/Tutorials/index.php");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/xml')); //setting content type header
curl_setopt($curl, CURLOPT_POSTFIELDS, $xml);//Setting raw post data as xml
$result = curl_exec($curl);
curl_close($curl);
print($result);
	
?>