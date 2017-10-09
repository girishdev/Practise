<?php

	$dom = new DOMDocument;
	$dom->loadXML('<books><book><title>blah</title><test>Test</test></book></books>');
		if (!$dom) {
			echo 'Error while parsing the document';
			exit;
		}

	$s = simplexml_import_dom($dom);

	echo $s->book[0]->title;
	
?>