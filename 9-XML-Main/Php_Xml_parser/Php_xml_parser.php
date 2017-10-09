<?php


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
		} else {
			$output = "<" . $name . ">";
			echo $output;	
		}
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