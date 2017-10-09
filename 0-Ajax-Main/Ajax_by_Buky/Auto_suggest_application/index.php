<html>

<head>
	<script type="text/javascript">
		function findmatch(){
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
			}

			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
					document.getElementById('results').innerHTML = xmlhttp.responseText;
				}
			}

			xmlhttp.open('GET', 'search.inc.php?search_text='+document.searchtest.search_text.value, true);
			/* document.searchtest.search_text.value
			 * In this we are using
			 * Form name->searchtest, Input name->search_text, Input value->value
			 /**/
			xmlhttp.send();
		}
	</script>
</head>

<body>
	 
	<form id="searchform" method="GET" action="another_page.php" name="searchtest">
		Type a name: <br />
		<input type="text" name="search_text" onkeyup="findmatch();">
	</form>
	
	<div id="results"></div>
	
</body>

</html>