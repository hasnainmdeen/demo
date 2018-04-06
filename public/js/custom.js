$('.testimonial-slider').bxSlider({
	  pagerCustom: '#bx-pager',
	  mode: 'horizontal',
	  startSlide:1,
	  auto:'true',
	  controls: false
	});

$('.owl-carousel').owlCarousel({
    loop:true,
	 autoPlay: 3000, //Set AutoPlay to 3 seconds
    items : 3,
    margin:10,
    responsiveClass:true,
    
});