<html>

<head>
	<script type="text/javascript">
		function insert() {
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

			parameters = 'textpost='+document.getElementById('textpost').value;
			
			xmlhttp.open('POST', 'update.inc.php', true);
			xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xmlhttp.send(parameters);
		}
	</script>
</head>

<body>

	Insert: <input type="text" id="textpost">
	<input type="button" value="Submit" onclick="insert();">
	
	<div id="results"></div>

</body>

</html>