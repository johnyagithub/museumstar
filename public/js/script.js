$(function () {

	sliderBanner();

	AOS.init({
		duration: 500,
		easing: 'ease-in-sine',
		once: true
	});

});

let sliderBanner = () => {
	$(".box-banner .owl-carousel").owlCarousel({
		loop: true,
		margin: 0,
		items: 1,
		dots: true,
		lazyLoad: true,
		responsiveClass: true,
		responsive: {
			0: {
				nav: false,
			},
			1025: {
				nav: true,
			}
		},
		navText: ["<span class='material-icons'>arrow_back_ios_new</span>", "<span class='material-icons'>arrow_forward_ios</span>"],
		afterAction: (current) => {
			current.find('video').get(0).play();
		}
	});
}