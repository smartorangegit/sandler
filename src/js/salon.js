if($("body").width() < 600) {
	$('.hair-slider').slick({
	    autoplay: false,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    speed: 1000,
	    autoplaySpeed: 500,
	    arrows: true,
	    prevArrow: '.hair-slider_prev',
		nextArrow: '.hair-slider_next',
	});

	$('.visage-slider').slick({
	    autoplay: false,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    speed: 1000,
	    autoplaySpeed: 500,
	    arrows: true,
	    prevArrow: '.visage-slider_prev',
		nextArrow: '.visage-slider_next',
	});

	$('.nails-slider').slick({
	    autoplay: false,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    speed: 1000,
	    autoplaySpeed: 500,
	    arrows: true,
	    prevArrow: '.nails-slider_prev',
		nextArrow: '.nails-slider_next',
	});

	$('.stylist-slider').slick({
	    autoplay: false,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    speed: 1000,
	    autoplaySpeed: 500,
	    arrows: true,
	    prevArrow: '.stylist-slider_prev',
		nextArrow: '.stylist-slider_next',
	});
}

