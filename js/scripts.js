$(document).ready(function() {
	viewportWidth = null;
	viewportHeight = null;
	navbarHeight = null;

	$(window).on("resize", function(){
		viewportWidth = $(window).width();
		viewportHeight = $(window).height();
		navbarHeight = $('#navbar').height();

		$('.home-featured').height(viewportHeight);
	}).resize();

	$('body').waypoint(function(direction) {
		$('#navbar').toggleClass("compact");
	}, {
		offset: -50
	});

	$('.home-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		pauseOnHover: false,
		arrows: false,
		easing: 'easeInOutQuad',
		cssEase: 'cubic-bezier(0.800, 0.020, 0.195, 0.960)',
		speed: 1500
	});

	$('.home-scroll').on('click', function() {
		$.smoothScroll({
			scrollElement: $('body').firstScrollable(),
			scrollTarget: '#home-obras',
			easing: 'easeInOutQuad',
			speed: 1000
		});
		return false;
	});

	$("#nav-trigger").click(function() {
		if ( $('body').hasClass('nav-visible') ) {
			$('body').removeClass('nav-visible');
		} else {
			$('body').addClass('nav-visible');
		}
	});

	$(".nav-mobile a").click(function() {
		if ( $('body').hasClass('nav-visible') ) {
			$('body').removeClass('nav-visible');
		} else {
			$('body').addClass('nav-visible');
		}
	});
});