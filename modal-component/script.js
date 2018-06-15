$('document').ready(function() {

	$('.open-modal').click(function() {
		$('.modal').addClass('modal-active');
		$('.overlay').fadeIn();
	});

	$('.cross, .close, .overlay').click(function() {
		$('.modal').removeClass('modal-active');
		$('.overlay').fadeOut();
	});

});