<!DOCTYPE html>
<html lang="en">
<head>
	<title>HTML practise</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$("#submit_form").submit(function() {
			//var url = window.location.href;
			jQuery.ajax({
				type: "POST",
				url: date.php,
				data: $("#submit_form").serialize(),
				success: function(data) {
					$("#response").text(data);
				}
			});
			return false;
		});
	</script>
</head>
<body>

	<form id="submit_form" method="POST">
		<input type="text" name="fname" />
		<input type="submit" name="sub_vals" />
	</form>
	<p id="response"></p>

</body>