$('#Nelio').on('click touchstart',function() {
	$('.interfaz').load('http://google.com', function(data) {
		$(this).html(data);
	});
});