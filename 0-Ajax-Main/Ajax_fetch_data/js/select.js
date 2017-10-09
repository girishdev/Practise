$(document).ready(function(){
	$('#button').click(function(){
		
		$.ajax({
			type: "POST",
			url: "select.php",
			data: {action:"showroom"},
			success: function(data){
				$('#id').hide();
				$('#button2').hide();
				$('#content').html(data);
			}
		});
		
	});
});

$(document).ready(function(){
	$('#button2').click(function(){
		var id = $('#id').val();
		$.ajax({
			type: "POST",
			url: "select.php",
			data: {action:id},
			success: function(data){
				$('#content').html(data);
				// $('#id').hide();
				$('#button').hide();
			}
		});
		
	});
})