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
// (function() {
//     var listItem = document.querySelectorAll(".page-block-1-list__text");

//     listItem.forEach(function(item, i) {
//         item.addEventListener("click", function(e) {
//             var element = e.target;
//             var subList = element.nextElementSibling;
            
//      
//             if(subList != null) {
//                subList.classList.toggle("page-block-1-sublist__open");
//             }
//         });
//     });
// }());
$(".page-block-1-list__text").on("click", function() {
    var subList = $(this).siblings(".page-block-1-sublist");
    if(subList.length != 0) {
        $(this).toggleClass("triangle_top");
        subList.slideToggle();
    }
});
// end__open_sub-list

// slow scroll
$(".js-page-block-1__button").on("click", function(e) {
    e.preventDefault();
    var elementIndex = $(".js-page-block-1__button").index(this);
    var section = $(".people-section");
    var headerHeight = $(".header").height();

    for(var i = 0; i < section.length; i++) {
        var scrollValue = $(section[i]).offset().top-headerHeight-15;
        if(elementIndex == i) {
            $('body,html').animate({scrollTop: scrollValue}, 500);
        }
    }
});
// end__slow scroll

