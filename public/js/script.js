$(function () {

  sliderBanner();

});

let sliderBanner = () => {
	$(".box-banner .owl-carousel").owlCarousel({
		loop: true,
		margin: 0,
		nav: true,
    items: 1,
		dots: true,
		lazyLoad: true,
		navText: ["<span class='material-icons'>arrow_back_ios_new</span>", "<span class='material-icons'>arrow_forward_ios</span>"],
		afterAction: (current) => {
			current.find('video').get(0).play();
		}
	});
}