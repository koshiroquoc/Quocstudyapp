$(".owl-Dv").owlCarousel({
	autoplayHoverPause: 1,
	loop: 0,
	nav: 1,
	dots: 0,
	lazyLoad: 1,
	autoplay: 1,
	setTimeout: 3000,
	smartSpeed: 1500,
	fluidSpeed: 1500,
	responsive: {
		0: {
			items: 1,
			margin: 0
		},
		768: {
			items: 2,
			margin: 50,
		},
		1024: {
			items: 3,
			margin: 30
		}
	}
});