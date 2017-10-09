<?php

	/*$xml = simplexml_load_file("toys.xml");
	print '<pre>';
	print_r($xml);
	print '</pre>';/**/
	
	$xmlDocument = '<?xml version="1.0"?>';
	$xml = new SimpleXMLElement($xmlDocument);
	$toy = $xml->addChild('toy');
	$toy->addChild('name', 'Remote Control Car');
	$toy->addChild('type', 'Remote Contryl Toys');
	print '<pre>';
	print_r($xml);
	print '<pre>';

	$xmlDocument = '<?xml version="1.0"?>
	<toys xmlns:h="http://www.w3.org/TR/html4/">
	<toy>
	<name>Ben 10 Watch</name>
	<type>Battery Toys</type>
	</toy>
	<toy>
	<name>Angry Birds Gun</name>
	<type>Mechanical Toys</type>
	</toy>
	</toys>';
	$xml = new SimpleXMLElement($xmlDocument);
	$toy = $xml->addChild('toy');
	$toy->addChild('name', 'Remote Control Car');
	$toy->addChild('type', 'Remote Control Toys');
	print "<PRE>";
	print_r($xml);
	print "</PRE>";
	
	$dom = new DOMDocument();
	$dom->loadXML($xmlDocument);
	
	$target = $dom->getElementsByTagName("toys")->item(0);
	
	$new_node = $dom->createElement("toy");
	$child1 = $dom->createElement("name","Remote Car");
	$child2 = $dom->createElement("type","Remote Toys");
	
	$new_node->appendChild($child1);
	$new_node->appendChild($child2);
	$target->appendChild($new_node);
	$elements = $dom->documentElement;
	
	if (!is_null($elements)) {
		foreach ($elements->childNodes AS $element) {
			echo "<br/><". $element->nodeName. ">";
			$nodes = $element->childNodes;
			if (!is_null($nodes)) {
				foreach ($nodes as $node) {
					echo $node->nodeName . ":" . $node->nodeValue. "<br/>";
				}
			}
		}
	}
	
	$xmlDocument = '<?xml version="1.0"?>
	<toys>
	<toy>
	<name>Ben 10 Watch</name>
	<type>Battery Toys</type>
	</toy>
	<toy>
	<name>Angry Birds Gun</name>
	<type>Mechanical Toys</type>
	</toy>
	</toys>';
	$line_number = 0;
	function onStart($parser,$name,$attributes) {
		global $line_number;
		if($line_number != xml_get_current_line_number($parser)) {
			$line_number = xml_get_current_line_number($parser) . ": ";
			$output = "<br/>" . $line_number . " \t<" . $name . ">";
		} else 
			$output = "<" . $name . ">";
			echo $output;	
	}
	function onEnd($parser,$name) {
		global $line_number;
		if($line_number != xml_get_current_line_number($parser)) {
			$line_number = xml_get_current_line_number($parser) . ": ";
			$output = "<br/>".$line_number . " \t</" . $name . ">";
		} else 
			$output = "</" . $name . ">";
			echo $output;	
	}
	$parser = xml_parser_create();
	xml_set_element_handler($parser, 'onStart', 'onEnd');
	if (!xml_parse($parser, $xmlDocument, true)) {
		echo "<br/>Parse Error";
	} else {
		echo "<br/>Parsing is done.";
	}

?>