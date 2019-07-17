jQuery( document ).ready(function() {
    jQuery('.photos .slider').slick({
		dots: true,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear'
	});
	jQuery('.videos .slider').slick({
		centerMode: true,
		centerPadding: '60px',
		slidesToShow: 2,
		responsive: [
			{
			    breakpoint: 768,
			  	settings: {
				    arrows: false,
				    centerMode: true,
				    centerPadding: '40px',
				    slidesToShow: 3
			  	}
			},
			{
			  breakpoint: 480,
			  	settings: {
				    arrows: false,
				    centerMode: true,
				    centerPadding: '40px',
				    slidesToShow: 1
				}
			}
		]
	});
});