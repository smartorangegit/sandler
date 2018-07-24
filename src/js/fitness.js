if($("body").width() < 600) {
	$('.dance-slider').slick({
	    autoplay: false,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    speed: 1000,
	    autoplaySpeed: 500,
	    arrows: true,
	    prevArrow: '.dance-slider_prev',
		nextArrow: '.dance-slider_next',
	});

	$('.fitness-slider').slick({
	    autoplay: false,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    speed: 1000,
	    autoplaySpeed: 500,
	    arrows: true,
	    prevArrow: '.fitness-slider_prev',
		nextArrow: '.fitness-slider_next',
	});

	$('.pilates-slider').slick({
	    autoplay: false,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    speed: 1000,
	    autoplaySpeed: 500,
	    arrows: true,
	    prevArrow: '.pilates-slider_prev',
		nextArrow: '.pilates-slider_next',
	});

	$('.jumps-slider').slick({
	    autoplay: false,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    speed: 1000,
	    autoplaySpeed: 500,
	    arrows: true,
	    prevArrow: '.jumps-slider_prev',
		nextArrow: '.jumps-slider_next',
	});
}