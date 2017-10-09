<?php

	$xmlDocument = '<?xml version="1.0"?>
					<toys>
						<toy code="10001">
							<name>Ben 10 Watch</name>
							<type>Battery Toys</type>
						</toy>
						<toy  code="10002">
							<name>Angry Birds Gun</name>
							<type>Mechanical Toys</type>
						</toy>
					</toys>';

	$xml = new XMLReader();
	$xml->XML($xmlDocument);

	while( $xml->read() ) {
		if($xml->name == "toy") {
			print "ID:" . $xml->getAttribute("code") . "<br/>";
			print $xml->readInnerXML() . "<br/>";
			$xml->next();
		}
	}

?>