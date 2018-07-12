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