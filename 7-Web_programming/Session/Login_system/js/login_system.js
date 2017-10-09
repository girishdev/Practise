
$(document).ready(function(){
	$('.create_new').click(function(){
		$('.login_form').hide();
		$('.new_creation').show();
	});
	$('.login').click(function(){
		$('.new_creation').hide();
		$('.login_form').show();
	});
	$('.new_creation').hide();
});

/*$(window).load(function(){
	$('input[type="submit"]').click(function(){
		setTimeout(function () {
			window.location.href= 'http://www.google.com';
		},5000);
	});
});/**/