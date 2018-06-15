$('document').ready(function() {

	$('.box .button a').click(function(e) {
		e.preventDefault();
		let button = $(this).parent()[0];
		let collapseBox = $(button).parent()[0];
		let collapseContent = $(collapseBox).siblings()[0];
		$(collapseContent).toggleClass('active');
		$('.collapse-content').not(collapseContent).removeClass('active');

	});

});