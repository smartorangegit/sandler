// fixed_menu
window.addEventListener("scroll", function() {
    if(window.pageYOffset > 0) {
        document.querySelector(".header").classList.add('header_scroll');
    } else {
        document.querySelector(".header").classList.remove('header_scroll');
    }
});
// end__fixed_menu

// page-slider
$('.page-slider').slick({
    autoplay: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 1000,
    autoplaySpeed: 500,
    arrows: true,
    prevArrow: '.page-slider__button_prev',
	nextArrow: '.page-slider__button_next',
    dots: true
});
// end__page-slider

// open_sub-list
$(".page-block-1-list__text").on("click", function() {
    var subList = $(this).siblings(".page-block-1-sublist");
    if(subList.length != 0) {
        $(this).toggleClass("triangle_top");
        subList.slideToggle();
    }
});
// end__open_sub-list

// slow scroll
// for many link
$(".js-anchor__button").on("click", function(e) {
    e.preventDefault();
    var elementIndex = $(".js-anchor__button").index(this);
    var section = $(".people-section");
    var headerHeight = $(".header").height();

    for(var i = 0; i < section.length; i++) {
        var scrollValue = $(section[i]).offset().top - headerHeight - 15;
        if(elementIndex == i) {
            $('body,html').animate({scrollTop: scrollValue}, 500);
        }
    }
});

// for one link
function oneAnchor(button, anchor) {
    button.on("click", function(e) {
        e.preventDefault();
        var section = anchor;
        var headerHeight = $(".header").height();
        var scrollValue = section.offset().top-headerHeight-15;

        $('body,html').animate({scrollTop: scrollValue}, 500);
    });
}
oneAnchor($(".js-massage-specialist__button"), $(".massage-specialist"));
oneAnchor($(".js-cosmetology-specialist__button"), $(".cosmetology-specialist"));
// end__slow scroll

