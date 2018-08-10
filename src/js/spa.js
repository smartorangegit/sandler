
// show full list
$(".list__more").on("click", function() {
    var list = $(this).siblings(".page-block-1-list");
    var items = list.find(".page-block-1-list__item_top");

    $(this).find("svg").toggleClass("list__more_revers");
    for(var i = 9; i < items.length; i++) {
        $(items[i]).slideToggle();
    }

    console.log(this);
});
// end show full list

if($("body").width() < 600) {
	$('.massage-slider').slick({
	    autoplay: false,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    speed: 1000,
	    autoplaySpeed: 500,
	    arrows: true,
	    prevArrow: '.massage-slider_prev',
		nextArrow: '.massage-slider_next',
	});

	$('.cosmetology-slider').slick({
	    autoplay: false,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    speed: 1000,
	    autoplaySpeed: 500,
	    arrows: true,
	    prevArrow: '.cosmetology-slider_prev',
		nextArrow: '.cosmetology-slider_next',
	});
}

