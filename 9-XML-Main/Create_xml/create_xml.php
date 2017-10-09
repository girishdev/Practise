<?php

	$xml = new DomDocument("1.0","UTF-8");

	$container = $xml->createElement("container");
	$container = $xml->appendChild($container) ;
	
	$sale = $xml->createElement("sale");
	$sale = $container->appendChild($sale);
	
	$item = $xml->createElement("iten","Television");
	$item = $sale->appendChild($item);
	
	$price = $xml->createElement("price","$100");
	$price = $sale->appendChild($price);
	
	$address = $xml->createElement("address","Bangalore");
	$address = $sale->appendChild($address);
	
	$owner = $xml->createElement("Owner","Girish kumar");
	$owner = $sale->appendChild($owner);
	
	$xml->formatOutput = true;
	$string_value = $xml->saveXML();
	$xml->save("example.xml");
	
?>