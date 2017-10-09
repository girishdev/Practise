<?php

	/*$xml = simplexml_load_file('Basic_xml.xml');
	
	foreach($xml->producer as $producer) {
		echo $producer->name. ' (-'.$producer->age.'-)<br />';
		echo '<br /><br />'.$producer->show->showname.'<br /><br />';
		foreach($producer->show as $show) {
			echo $show->showname.' on '.$show->showdate.'<br />';
		}
	}/**/
	
/*Test*/
	/*$xml = simplexml_load_file("Basic_xml.xml");
	
	//print_r($xml);
	
	foreach($xml->producer as $producer){
		echo $producer->name . '<br />';
		echo $producer->show->showname . '<br >';
		echo $producer->show->showdate . '<br >';
		echo '<br >';
	}/**/

/*Test*/

	/*$xml = simplexml_load_file('Basic_xml.xml');
	
	echo '<pre>';
	print_r($xml);
	echo '</pre>';
	$counting = count($xml);/**/
	
	/*In for loop we are extracting data*/
	/*for($i = 0; $i < $counting; $i++) {
		echo $xml->producer[$i]->name . $xml->producer[$i]->age . $xml->producer[$i]->show->showname . $xml->producer[$i]->show->showdate . '<br />';
	}/**/
	
	/*In foreach loop we are extracting data*/
	/*foreach($xml->producer as $producer){		
		echo '<br ><b>1st foreach: </b>';
		echo '<br />'.$producer->name . ' and his age is ' . $producer->age . '<br />';
		
		echo '<br ><b>2nd foreach: </b><br />';
		foreach($producer->show as $show) {
			echo '<b>This is show name</b> '.$show->showname . ' <b>This is show date</b> ' . $show->showdate.'<br />';
		}		
	}/**/
	
?>