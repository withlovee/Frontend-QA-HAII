$(window).load(function() {
	/*----------------- SLIDESHOW -----------------*/
	/* set background image for each slide */
	bg = [
		"img/bg_slide1.jpg", // bg for first slide
		"img/bg_slide2.jpg", // bg for second slide
	]
	headerBg = $('.header-bg');
	$('#slideshow .container').flexslider({
		selector: ".slide",
		directionNav: false,
		slideshowSpeed: 10000, // the speed of the slideshow cycling, in milliseconds
		before: function(slider){
			headerBg.css('background-image', "url("+bg[slider.animatingTo]+")");
		},
	});
	/*----------------- BLOG POSTS -----------------*/
	$('.blog .wrapper').flexslider({
		selector: "article",
		smoothHeight: true,
		slideshow: false,
		manualControls: ".blog-list li",
		directionNav: false,
	});
});