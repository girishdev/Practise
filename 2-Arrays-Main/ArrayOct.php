<?php

	$x=array("aaa","ttt","www","ttt","yyy","tttt"); 
	$y=array_count_values($x); 
	echo $y['ttt'];

	/*echo 'PHP_SELF  ===  '.$_SERVER['PHP_SELF'];echo '<br /><br />';
	echo 'SERVER_ADDR  ===  '.$_SERVER['SERVER_ADDR'];echo '<br /><br />';
	echo 'SERVER_NAME  ===  '.$_SERVER['SERVER_NAME'];echo '<br /><br />';
	echo 'SERVER_SOFTWARE  ===  '.$_SERVER['SERVER_SOFTWARE'];echo '<br /><br />';
	echo 'SERVER_PROTOCOL  ===  '.$_SERVER['SERVER_PROTOCOL'];echo '<br /><br />';
	echo 'REQUEST_METHOD  ===  '.$_SERVER['REQUEST_METHOD'];echo '<br /><br />';
	echo 'REQUEST_TIME  ===  '.$_SERVER['REQUEST_TIME'];echo '<br /><br />';
	echo 'QUERY_STRING  ===  '.$_SERVER['QUERY_STRING'];echo '<br /><br />';
	echo 'DOCUMENT_ROOT  ===  '.$_SERVER['DOCUMENT_ROOT'];echo '<br /><br />';
	echo 'HTTP_CONNECTION  ===  '.$_SERVER['HTTP_CONNECTION'];echo '<br /><br />';
	echo 'HTTP_HOST  ===  '.$_SERVER['HTTP_HOST'];echo '<br /><br />';
	echo 'HTTP_REFERER  ===  '.$_SERVER['HTTP_REFERER'];echo '<br /><br />';
	echo 'HTTP_USER_AGENT  ===  '.$_SERVER['HTTP_USER_AGENT'];echo '<br /><br />';
	echo 'HTTPS  ===  '.$_SERVER['HTTPS'];echo '<br /><br />';
	echo 'REMOTE_ADDR  ===  '.$_SERVER['REMOTE_ADDR'];echo '<br /><br />';
	echo 'REMOTE_HOST  ===  '.$_SERVER['REMOTE_HOST'];echo '<br /><br />';
	echo 'REMOTE_PORT  ===  '.$_SERVER['REMOTE_PORT'];echo '<br /><br />';
	echo 'SCRIPT_FILENAME  ===  '.$_SERVER['SCRIPT_FILENAME'];echo '<br /><br />';
	echo 'SERVER_ADMIN  ===  '.$_SERVER['SERVER_ADMIN'];echo '<br /><br />';
	echo 'SERVER_PORT  ===  '.$_SERVER['SERVER_PORT'];echo '<br /><br />';
	echo 'SERVER_SIGNATURE  ===  '.$_SERVER['SERVER_SIGNATURE'];echo '<br /><br />';
	echo 'PATH_TRANSLATED  ===  '.$_SERVER['PATH_TRANSLATED'];echo '<br /><br />';
	echo 'SCRIPT_NAME  ===  '.$_SERVER['SCRIPT_NAME'];echo '<br /><br />';
	echo 'REQUEST_URI  ===  '.$_SERVER['REQUEST_URI'];echo '<br /><br />';
	echo 'PHP_AUTH_DIGEST  ===  '.$_SERVER['PHP_AUTH_DIGEST'];echo '<br /><br />';
	echo 'PHP_AUTH_USER  ===  '.$_SERVER['PHP_AUTH_USER'];echo '<br /><br />';
	echo 'PHP_AUTH_PW  ===  '.$_SERVER['PHP_AUTH_PW'];echo '<br /><br />';
	echo 'AUTH_TYPE  ===  '.$_SERVER['AUTH_TYPE'];echo '<br /><br />';/**/

?>