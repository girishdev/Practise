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

	$dom = new DOMDocument();

	$dom->loadXML($xmlDocument);

	$target = $dom->getElementsByTagName("toys")->item(0);

	/* New element append */
	$new_node = $dom->createElement("toy");
	$child1 = $dom->createElement("name","Remote Car");
	$child2 = $dom->createElement("type","Remote Toys");

	$new_node->appendChild($child1);
	$new_node->appendChild($child2);
	$target->appendChild($new_node);
	/* New element append */

	echo '<br />';
	$elements = $dom->documentElement;
	print_r($elements);
	echo '<br />';
	
	if (!is_null($elements)) {
		foreach ($elements->childNodes AS $element) {
			echo "<br/><". $element->nodeName. ">";
			$nodes = $element->childNodes;
			if (!is_null($nodes)) {
				foreach ($nodes as $node) {
					echo $node->nodeName . ":" . $node->nodeValue. "<br/>";
				}
			}/**/
		}
	}

?>