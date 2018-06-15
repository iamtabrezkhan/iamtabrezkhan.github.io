$('document').ready(function() {

	$('.dropdown').click(function(e) {
		$('.dropdown-container').toggleClass('dropdown-active');
	});

	$(document).click(function (e) {
	    e.stopPropagation();
	    var target = $(".dropdown");

	    //check if the clicked area is dropdown or not
	    if (target.has(e.target).length === 0) {
	        $('.dropdown-container').removeClass('dropdown-active');
	    }
	});

	$('.search-group input').focus(function() {
		$(this).addClass('input-active');
	});

	$('.search-group input').focusout(function() {
		$(this).removeClass('input-active');
	});

	$('.menu-button').click(function() {
		$('.mobile-navbar-menu-container').toggleClass('mobile-active');
	})

});