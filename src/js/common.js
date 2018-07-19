// fixed_menu
window.addEventListener("scroll", function() {
    if(window.pageYOffset > 0) {
        document.querySelector(".header").classList.add('header_scroll');
    } else {
        document.querySelector(".header").classList.remove('header_scroll');
    }
});
// end__fixed_menu

// animation on scroll
var animationArr = ["fade", "slide-left", "slide-right",  
                "slide-top", "slide-bottom", "letter-draw",
                "border-draw_white", "border-draw_black", "home-line-2", 
                "home-line-3", "home-line-4", "home-line-5_1",
                "home-line-5_2", "home-line-6", "home-line-7", "flip",
                "height"];

function animationOnScroll(animationList) { 
    var elements = document.querySelectorAll(".animation-wrapper-js");
    var arrElement = [];
    var arrDescendants = [];

    elements.forEach(function(item, i) {
        arrElement.push(elements[i]);
    });


    window.addEventListener("scroll", function() {
        arrElement.forEach(function(item, i) {
            if(item.getBoundingClientRect().top < 500 && item.getBoundingClientRect().top > 300) {

                var colDescendants = item.getElementsByTagName('*');

                for(var k = 0; k < colDescendants.length; k++) {
                    if(colDescendants[k].classList.contains("animated-block-js")) {
                        arrDescendants.push(colDescendants[k]);
                    }
                }

                //add class for animation
                for (var j = 0; j < animationList.length; j++) {
                    arrDescendants.forEach(function(item, i) {
                        if(item.classList.contains(animationList[j])) {
                            item.classList.add(animationList[j] + "-in");
                        }
                    });
                }
            }
        });
    });
}
animationOnScroll(animationArr); 
// end__animation on scroll

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


// header-mobile
$(".menu-open").on("click", function() {
    $(".nav-wrapper").slideDown();
    $(".header-mobile__icon").fadeIn();
    $(".menu-open__text").css("font-size", "1rem");
    $(".menu-line-wrap").css("display", "none");
    $(".home-header").css("background-color", "#000");
    $(".header__link").fadeOut();
});
$(".header-mobile__icon").on("click", function() {
    $(".nav-wrapper").slideUp();
    $(this).fadeOut();
    $(".menu-line-wrap").css("display", "block");
    $(".menu-open__text").css("font-size", "6px");
    $(".home-header").css("background-color", "rgba(0,0,0,0.3)");
    $(".header__link").fadeIn();
});
// end__header-mobile


