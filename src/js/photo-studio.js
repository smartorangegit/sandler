if($("body").width() < 600) {
	$('.photographer-slider').slick({
	    autoplay: false,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    speed: 1000,
	    autoplaySpeed: 500,
	    arrows: true,
	    prevArrow: '.photographer-slider_prev',
		nextArrow: '.photographer-slider_next',
	});
}