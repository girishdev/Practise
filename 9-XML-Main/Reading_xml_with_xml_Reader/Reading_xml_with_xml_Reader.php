<?php

	/*$xml = new XMLReader();
	$xml->open('Basic_xml.xml');
	
	$producers = array();
	
	while($xml->read()){
		//get producer
		if($xml->nodeType == XMLREADER::ELEMENT && $xml->localName == 'producer'){
			$producer = array();
			$producer['id'] = $xml->getAttribute('id');
		}
		
		//first name
		/*if($xml->nodeType == XMLREADER::ELEMENT && $xml->localName == 'name'){
			$xml->read();
			echo $xml->value . '<br />';
		}/**/
		
		//Name
		/*if($xml->nodeType == XMLREADER::ELEMENT && $xml->localName == 'name'){
			$xml->read();
			$producer['name'] = $xml->value;
		}

		//age
		if($xml->nodeType == XMLREADER::ELEMENT && $xml->localName == 'age'){
			$xml->read();
			$producer['age'] = $xml->value;
			
			//this is the last element, add the member array to the collection
			$producers[] = $producer;
		}
	}
	
	echo displayProducers($producers);
	
	function displayProducers($producers){
		$r = '';
		
		if(count($producers) >0 ){
			$r .= '<table>';
			foreach($producers as $producer){
				$r .= '<tr>';
				$r .= '<td> .$producer[\'id\']. </td>';
				$r .= '<td> .$producer[\'name\']. </td>';
				$r .= '<td> .$producer[\'age\']. </td>';
				$r .= '</tr>';
			}
			$r .= '</table>';
		}
		
		return $r;
	}/**/

?>