$(function(){

	// 横幅取得
	var w = $(window).width();


	/*=======================================
	スムーズスクロール
	=========================================*/
	$('a[href^="#"]').click(function(){
		$('html,body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 500, 'swing');
		return false;
	});

	var gotop = $('.l-pagetop');
	gotop.hide();
	$(window).scroll(function(){
		if ($(window).scrollTop() > 500) gotop.fadeIn();
		else gotop.fadeOut();
	});

	var separate;
	if(w>767){ separate = 30; }
	else { separate = 10; }

	$(window).on('scroll', function(){
		scrollHeight = $(document).height();
		scrollPosition = $(window).height() + $(window).scrollTop();
		footHeight = $('.l-footer').innerHeight() - $('.l-footer1__block1').innerHeight();
		//console.log(footHeight);
		if (scrollHeight - scrollPosition <= footHeight) gotop.css({'position':'absolute','bottom':footHeight + separate});
		else gotop.css({'position':'fixed','bottom':separate+'px'});
	});



	/*=======================================
	スライダー
	=========================================*/
	$('.p-top1__block1 ul').bxSlider({
		auto: true,
		mode: 'fade',
		pause:	8000,
		speed: 500,
		controls: false
	});




	
	if(w>767){// PCでの処理



	} else {// SPでの処理



	}


});




$(window).on('load', function(){// ロード完了時に処理



	// 横幅取得
	var w = $(window).width();


	$('img[usemap]').maphilight({
		fillColor: 'ffffff',
		fillOpacity: 0.6,
		stroke: false
	});



	if(w>767){// PCでの処理



	} else {// SPでの処理


		/*=======================================
		スマホメニュー
		=========================================*/
		$('.l-header1__block2 .btn1').click(function(){
			$('.l-nav2').stop().slideToggle();
		});
		$('.l-nav2__block3').click(function(){
			$('.l-nav2').stop().slideUp();
		});

		$('.header-btn2').click(function(){
			$('nav #nav_wrap').stop().slideToggle();
		});


		/*=======================================
		トップページ 講座名から探す
		=========================================*/
		$('.p-top3__block2 .tit1').click(function(){
			$(this).siblings('.slidable').slideToggle();
			$(this).children('div').toggleClass('is--open');
		});


		/*=======================================
		トップページ 近くの教室を探す
		=========================================*/
		$('.p-top4__block2 h3').click(function(){
			$(this).next('ul').slideToggle();
			$(this).children('div').toggleClass('is--open');
		});



		/*=======================================
		表 横スクロール
		=========================================*/
		$('.js-table-xscroll').before('<p class="u-color--red"><strong>※表を横にスクロールすると、続きが表示されます。</strong></p>');
		$('.js-table-xscroll').wrap('<div class="js-table-xscroll__wrap"><div class="js-table-xscroll__in"></div></div>');



		/*=======================================
		クリッカブルマップ レスポンシブ
		=========================================*/
		$('img[usemap]').rwdImageMaps();



	}




});




$(window).on('load resize', function(){// ロード完了、リサイズ時に処理


	// 横幅取得
	var w = $(window).width();


	if(w>767){// PCでの処理


		/*=======================================
		高さ揃え
		=========================================*/
		$('.p-top3__block2 .box.box1,.p-top3__block2 .box.box2').autoHeight();
		$('.p-top3__block2 .box.box5,.p-top3__block2 .box.box6,.p-top3__block2 .box.box7').autoHeight();



	} else {// SPでの処理



	}


});