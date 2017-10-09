<?php

	$xml = new DomDocument('1.0');
	$xml->formatOutput = true;
	/*create element using createElement();
	append child to parent using appendChild();/**/

	$books = $xml->createElement("books");
	$xml->appendChild($books);
		//parent->appendChild(child);
	
	/*This is first part*/
	$book = $xml->createElement("book");
	$book->setAttribute("id",1);
	$books->appendChild($book);
	
	$name = $xml->createElement("Name", "Java");
	$book->appendChild($name);
	
	$price = $xml->createElement("Price", 200);
	$book->appendChild($price);
	
	/*This is second part*/
	$book = $xml->createElement("book");
	$book->setAttribute("id",2);
	$books->appendChild($book);
	
	$name = $xml->createElement('Name', "php");
	$book->appendChild($name);
	
	$price = $xml->createElement("Price", 300);
	$price->setAttribute('testing', 500);
	$book->appendChild($price);
	
	/*Another element Testting*/
	$bags = $xml->createElement('Bags');
	$books->appendChild($bags);
	
	$bag = $xml->createElement("Bag-1", 200);
	$bags->appendChild($bag);
		
	echo '<xmp>' . $xml->saveXML() . '</xmp>';
	
	$xml->save("book_reports.xml") or die("Error, Unable to create xml File");

/*Another testing from phppot*/	

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

/*Another testing from phppot*/	
	echo '<br />';
/*Test loading xml file*/

	$doc = new DOMDocument();
	$doc->formatOutput = true;
	$doc->load('example.xml');
	echo 'Doc test: '. $doc->saveXML();

/*Test loading xml file*/

$string = <<<XML
<a>
 <b>
  <c>text</c>
  <c>stuff</c>
 </b>
 <d>
  <c>code</c>
 </d>
</a>
XML;

$xml = new SimpleXMLElement($string);

echo $xml->asXML();
	
?>