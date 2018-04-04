$(document).ready(function () {
    
    //smoothscroll
    $('.sidebar a[href^="#"], .about a[href^="#"]').on('click', function (e) {
        // e.preventDefault();
        $(document).off("scroll");
        
        $('.sidebar a').each(function () {
            $(this).removeClass('active-menu');
        });
        $(this).addClass('active-menu');
        $('.about a').removeClass('active-menu');
        $('.sidebar-social a').removeClass('active-menu');
      
        var hash = this.hash;
        $('html, body').stop().animate({
            'scrollTop': $(hash).offset().top+2
        }, 300, 'swing', function () {
            window.location.hash = hash;
        });
    });

    var sections = $('section');
    $(window).on('scroll', function() {
        var currentPosition = $(this).scrollTop();

        sections.each(function(){
            var top = $(this).offset().top;
            var bottom = top + $(this).outerHeight();
            if(currentPosition >= top && currentPosition <= bottom) {
                $('.sidebar').find('li').removeClass('active-menu');
                $('.sidebar').find('a[href="#'+$(this).attr('id')+'"]').addClass('active-menu');
            }
            else {
                $('.sidebar').find('li').removeClass('active-menu');
                $('.sidebar').find('a[href="#'+$(this).attr('id')+'"]').removeClass('active-menu');
            }
        });
    });

    $('.menu-button').on('click', function () {
        $('.sidebar').addClass('active-sidebar');
        $('.my-overlay').fadeIn();
    });

    $('.my-overlay').on('click', function () {
        $('.sidebar').removeClass('active-sidebar');
        $('.my-overlay').fadeOut();
    });

    $(".swipe-area").swipe({
        swipeStatus:function(event, phase, direction, distance, duration, fingers)
        {
            if (phase=="move" && direction =="right") {
                $('.sidebar').addClass('active-sidebar');
                $('.my-overlay').fadeIn();
                return false;
            }
            if (phase=="move" && direction =="left") {
                $('.sidebar').removeClass('active-sidebar');
                $('.my-overlay').fadeOut();
                return false;
            }
        }, allowPageScroll: "auto"
    });

    $(".sidebar").swipe({
        swipeStatus:function(event, phase, direction, distance, duration, fingers)
        {
            
            if (phase=="move" && direction =="left") {
                $('.sidebar').removeClass('active-sidebar');
                $('.my-overlay').fadeOut();
                return false;
            }
        }, allowPageScroll: "auto"
    });
});