// add animation class for first screen
document.querySelector(".home-block_top__heading").classList.add("slide-left-in");
document.querySelector(".home-block_top__text").classList.add("slide-left-in");
document.querySelector(".home-block_top").classList.add("border-draw_black-in");

document.querySelector(".home-block_top__line_1_1").classList.add("home-line-1_1-in");
document.querySelector(".home-block_top__line_2_1").classList.add("home-line-2_1-in");
document.querySelector(".home-block_top__line_1_2").classList.add("fade-in");
document.querySelector(".home-block_top__line_2_2").classList.add("fade-in");
// end__add class for animation first screen

$('.home-slider').slick({
    autoplay: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 1000,
    autoplaySpeed: 500,
    arrows: false,
    dots: true
});