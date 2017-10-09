<?php

	if(file_exists('Basic_xml.xml')){
		$xml = simplexml_load_file('Basic_xml.xml');
		print '<xmp>';
		print_r($xml);
		print '</xmp>';
	} else {
		exit('Failed to open Basic_xml.xml');
	}

?>