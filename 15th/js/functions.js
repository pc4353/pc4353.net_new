$(function(){

	$('.c-slide1 ul').bxSlider({
		minSlides: 4,
		maxSlides: 4,
		moveSlides: 1,
		slideWidth: 240,
		pager: false,
		auto: true,
		controls: true,
		touchEnabled:true,
		slideMargin: 12
	});

	$('.c-slide1-s ul').bxSlider({
		minSlides: 3,
		maxSlides: 3,
		moveSlides: 1,
		pager: false,
		auto: true,
		controls: false,
		touchEnabled:true,
	});

	$('.c-slide2__list').bxSlider({
		minSlides: 2,
		maxSlides: 2,
		moveSlides: 1,
		slideWidth: 500,
		pager: true,
		auto: true,
		controls: true,
		touchEnabled:true,
		slideMargin: 30,
		pagerCustom: '.c-slide2-pager'
	});

});


$(function(){
	$('.p-top4 .c-voice').autoHeight();
	$('.c-voice-list .c-voice').matchHeight();

})
