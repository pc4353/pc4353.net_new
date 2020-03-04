$(function() {
	$('img.hover').wink();
	$('img.alpha').opOver();
	$('#keyv li').biggerlink().opOver(1,0.8);
	$('.school li:not(.none)').biggerlink().opOver();
	$('#mouse').scrollFollow( {
		speed: 1000,
		offset: 50
	} );
	$('.qa dt').each(function(i){
		$(this).click(function(){
			$('dd').eq(i).toggle('normal');
		});
	})
	
	var count = setInterval(changeImg, 3000);
	i = 1;
	function changeImg(){
		$('#keyv').css('background', 'url("img/kv0' + i + '.jpg") 0 0 no-repeat');
		if(i <= 2){
			i++;
		}
		else{
			i = 1;
		}
	}
	
	$('#keyv li.kv01').hover(
		function(){
			clearInterval(count);
			$('#keyv').css('background', 'url("img/kv01.jpg") 0 0 no-repeat');
		}
	);
	$('#keyv li.kv02').hover(
		function(){
			clearInterval(count);
			$('#keyv').css('background', 'url("img/kv02.jpg") 0 0 no-repeat');
		}
	);
	$('#keyv li.kv03').hover(
		function(){
			clearInterval(count);
			$('#keyv').css('background', 'url("img/kv03.jpg") 0 0 no-repeat');
		}
	);
});