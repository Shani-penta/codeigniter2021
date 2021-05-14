$(window).on('load', function() {
    $('.load-complete').fadeOut('slow', function() {
        $(this).remove();
    });
});
$('.flexslider').flexslider({
    animation: "slide",
    controlNav: true
});
$('.mobile-menu a').click(function() {
    $(this).toggleClass('clicked');
    $('body').toggleClass('hide-cnt');
    $('.mobile-nav .navbar').toggleClass('open')
})
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
        $(".mobile-nav .navbar").removeClass("open");
        $(".mobile-menu a").removeClass("clicked");
        $('body').removeClass('hide-cnt');
    } else {}
});
$('.owl-princi').owlCarousel({
    margin: 0,
    navText: ["", ""],
    nav: false,
    loop: true,
    dots: false,
    autoplay: true,
    smartSpeed: 1500,
    responsive: {
        0: {
            items: 1
        },
        480: {
            items: 2
        },
        600: {
            items: 2
        },
        768: {
            items: 3
        },
        1000: {
            items: 3
        },
        1500: {
            items: 4
        }
    }
});
$('.owl-gal').owlCarousel({
    margin: 0,
    navText: ["<img src='images/baner-left-icon.png'/>", "<img src='images/baner-right-icon.png'/>"],
    nav: true,
    loop: true,
    dots: true,
    autoplay: true,
    smartSpeed: 1500,
    responsive: {
        0: {
            items: 1
        },
        480: {
            items: 1
        },
        600: {
            items: 1
        },
        768: {
            items: 1
        },
        1000: {
            items: 1
        },
        1500: {
            items: 1
        }
    }
});
var equal_height = $(".equal-height");
if (equal_height.length) {
    equal_height.matchHeight();
}
$(window).scroll(function() {
    $(".header").toggleClass('sticky animated slideInDown', $(window).scrollTop() >= $('.banner').height());
    $("body").toggleClass('sticky', $(window).scrollTop() >= $('.banner').height());
});