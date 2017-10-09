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
					
	$demo = new DOMDocument();
	
	$demo->loadXML($xmlDocument);
	
	$target = $demo->getElementsByTagName("toys")->item(0);
	
	/*print '<xmp>';
	print_r($target);
	print '</xmp>';/**/
	
	$elements = $demo->documentElement;
	
	/*print '<xmp>';
	print_r($elements);	
	print '</xmp>';/**/
	
	/*print '<xmp>';
	$elements->childNodes;
		//$elements->nodeName;
	print_r($elements);
	print '</xmp>';/**/
	
	if(!is_null($elements)){
		foreach($elements->childNodes as $element){
			echo '<br />' . $element->nodeName . '<br />';
			$nodes = $element->childNodes;
			if(!is_null($nodes)){
				foreach($nodes as $node){
					echo '<br />' . $node->nodeName . '-' . $node->nodeValue . '<br />';
				}
			}
		}
	}
	
	
/* Another one for testing purpose */
	$string = <<<XML
<a>
 <foo name="one" game="lonely">1</foo>
</a>
XML;

$xml = simplexml_load_string($string);
foreach($xml->foo[0]->attributes() as $a => $b) {
    echo $a,'="',$b,"\"\n";
}


echo '<br />';echo '<br />';echo '<br />';
/* Another one for testing purpose */
$xml = new SimpleXMLElement(
					'<person>
						<child role="son">
							<child role="daughter"/>
						</child>
						<child role="daughter">
							<child role="son">
							<child role="son"/>
						</child>
						</child>
					</person>');

foreach ($xml->children() as $second_gen) {
    echo ' The person begot a ' . $second_gen['role'] . '<br />';

    foreach ($second_gen->children() as $third_gen) {
        echo ' who begot a ' . $third_gen['role'] . '<br />';

        foreach ($third_gen->children() as $fourth_gen) {
            echo ' and that ' . $third_gen['role'] .
                ' begot a ' . $fourth_gen['role'];
        }/**/
    }
}	


?>