if($("body").width() < 600) {
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