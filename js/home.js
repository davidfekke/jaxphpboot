
$(document).ready(function () {
	$('#viewnavbardocs').on('click', function(event) {
		event.preventDefault();
		//alert('This button does something');
		var alertContent = '<div class="alert alert-warning fade">' +
		'	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' +
		'	<strong>Holy guacamole!</strong> This button does something.' +
		'</div>';
		$(".container:nth-child(2)").prepend(alertContent);
		$('.alert').alert().addClass('in');
		return false;
	});
	
	$(".jumbotron a").tooltip({ delay: { show: 500, hide: 100 }});
});