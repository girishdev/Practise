<?php

	$xml = new DomDocument("1.0","UTF-8");
	
	$cont2 = $xml->createElement("cont2");
	$cont2 = $xml->appendChild($cont2);
	
	$book = $xml->createElement('books');
	$book = $cont2->appendChild($book);
	
	$author = $xml->createElement('Author Name','girish');
	$author = $book->appendChild($author);
	
	$price = $xml->createElement('price',200);
	$price = $book->appendChild($price);
	
	$name = $xml->createElement('Book Name', "PHP");
	$name = $book->appendChild($name);
	
	
	$xml->formatOutput = true;
	$string_value = $xml->saveXML();
	$xml->save('exmp2.xml');

?>