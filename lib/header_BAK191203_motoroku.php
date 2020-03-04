<?php
// index判定
if( ereg( "index", $_SERVER["SCRIPT_NAME"])){
	$index = 1;
	$body_class = " class=\"top\"";
	$logo_tag = "h1";
} else {
	$sep = "｜";
	$logo_tag = "p";
}

// form判定
if( ereg( "contact", $_SERVER["SCRIPT_NAME"]) || ereg( "recruit", $_SERVER["SCRIPT_NAME"]) || ereg( "mos", $_SERVER["SCRIPT_NAME"])){
	$form = 1;
}

// 各ページ判定
if( ereg( "course", $_SERVER["SCRIPT_NAME"])){
	$title = "あなたの目的は？";
}
if( ereg( "instructor", $_SERVER["SCRIPT_NAME"])){
	$title = "パソコンインストラクターのご紹介";
}
if( ereg( "recruit", $_SERVER["SCRIPT_NAME"])){
	$title = "パソコン教室・インストラクター求人募集";
}
if( ereg( "about", $_SERVER["SCRIPT_NAME"])){
	$menu1 = " class=\"here\"";
	$title = "当パソコン教室のご紹介";
}
if( ereg( "voice", $_SERVER["SCRIPT_NAME"])){
	$menu2 = " class=\"here\"";
	$title = "受講生の評判・口コミ";
}
if( ereg( "apply", $_SERVER["SCRIPT_NAME"])){
	$menu3 = " class=\"here\"";
	$title = "お申し込み方法";
}
if( ereg( "qa", $_SERVER["SCRIPT_NAME"])){
	$menu4 = " class=\"here\"";
	$title = "よくあるご質問";
}
if( ereg( "contact", $_SERVER["SCRIPT_NAME"])){
	$menu5 = " class=\"here\"";
	$title = "お問い合わせ";
}
if( ereg( "cp1", $_SERVER["SCRIPT_NAME"])){
	$title = "冬の特別レッスンについて";
}
if( ereg( "cp2", $_SERVER["SCRIPT_NAME"])){
	$title = "夏の特別レッスンについて";
}
if( ereg( "business", $_SERVER["SCRIPT_NAME"])){
	$title = "仕事に活かす！";
}
if( ereg( "junior", $_SERVER["SCRIPT_NAME"])){
	$title = "小中学生のパソコン学習";
}
if( ereg( "yousei", $_SERVER["SCRIPT_NAME"])){
	$title = "パソコンインストラクター養成講座";
}
if( ereg( "tablet", $_SERVER["SCRIPT_NAME"])){
	$title = "タブレット講座（iPad対応）";
}
if( ereg( "iphone", $_SERVER["SCRIPT_NAME"])){
	$title = "iPhone講座";
}
if( ereg( "win10", $_SERVER["SCRIPT_NAME"])){
	$title = "Windows10講座";
}
if( ereg( "gakuwari", $_SERVER["SCRIPT_NAME"])){
	$title = "学割";
}
if( ereg( "senior", $_SERVER["SCRIPT_NAME"])){
	$title = "シニア割";
}
if( ereg( "summer_lesson", $_SERVER["SCRIPT_NAME"])){
	$title = "夏休みパソコン教室 小中学生対象特別講座";
}
if( ereg( "sokudoku", $_SERVER["SCRIPT_NAME"])){
	$title = "みんなの速読";
	$sokudoku = 1;
	$contents_class = " sokudoku";
}
if( ereg( "mos", $_SERVER["SCRIPT_NAME"])){
	$title = "MOS（マイクロソフトオフィススペシャリスト）資格取得講座";
	$mos = 1;
	$contents_class = " mos";
}
if( ereg( "certify", $_SERVER["SCRIPT_NAME"])){
	$title = "サーティファイ ビジネス実践講座";
	$certify = 1;
	$contents_class = " certify";
}
if( ereg( "shikaku", $_SERVER["SCRIPT_NAME"])){
	$title = "ビジネス向け資格取得講座";
}
if( ereg( "xp", $_SERVER["SCRIPT_NAME"])){
	$title = "WindowsXPをご利用の皆様へ";
}
if( ereg( "recruit", $_SERVER["SCRIPT_NAME"])){
	$body_class = " class=\"recruit\"";
}
if( ereg( "win10", $_SERVER["SCRIPT_NAME"])){
	$body_class = " class=\"win10\"";
}
if( ereg( "brain_training", $_SERVER["SCRIPT_NAME"])){
	$title = "脳トレおとなプログラミング講座";
}
if( ereg( "d_photo_master", $_SERVER["SCRIPT_NAME"])){
	$title = "デジタル写真マスター講座";
}
if( ereg( "word", $_SERVER["SCRIPT_NAME"])){
	$title = "ワード講座";
}
if( ereg( "excel", $_SERVER["SCRIPT_NAME"])){
	$title = "エクセル講座";
}
if( ereg( "powerpoint", $_SERVER["SCRIPT_NAME"])){
	$title = "パワーポイント講座";
}
if( ereg( "bb_basic", $_SERVER["SCRIPT_NAME"])){
	$title = "ビジネスベーシック パソコン基礎";
}
if( ereg( "bb_word", $_SERVER["SCRIPT_NAME"])){
	$title = "ビジネスベーシックWord（ワード）講座";
}
if( ereg( "bb_excel", $_SERVER["SCRIPT_NAME"])){
	$title = "ビジネスベーシックExcel（エクセル）講座";
}
if( ereg( "bb_powerpoint", $_SERVER["SCRIPT_NAME"])){
	$title = "ビジネスベーシックPowerPoint（パワーポイント）講座";
}
if( ereg( "outlook_mail", $_SERVER["SCRIPT_NAME"])){
	$title = "Outlook（アウトルック）メール講座";
}
if( ereg( "pc_basic", $_SERVER["SCRIPT_NAME"])){
	$title = "パソコン基礎講座";
}
if( ereg( "digital_basic", $_SERVER["SCRIPT_NAME"])){
	$title = "デジタル基礎知識講座";
}
if( ereg( "typing", $_SERVER["SCRIPT_NAME"])){
	$title = "タッチタイピング習得";
}
if( ereg( "word_craft", $_SERVER["SCRIPT_NAME"])){
	$title = "ワードで作ろう講座";
}
if( ereg( "internet_master", $_SERVER["SCRIPT_NAME"])){
	$title = "インターネットマスター講座";
}
if( ereg( "smartphone", $_SERVER["SCRIPT_NAME"])){
	$title = "スマートフォン（スマホ）講座";
}
if( ereg( "line", $_SERVER["SCRIPT_NAME"])){
	$title = "LINE講座";
}
if( ereg( "nenga", $_SERVER["SCRIPT_NAME"])){
	$title = "かんたん年賀状講座";
}
?>
<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" />
<title><?=$title.$sep?><?=$room[$id][area]?>のパソコン教室｜パソコン市民講座 <?=$room[$id][name]?>教室</title>
<meta name="keywords" content="パソコン教室,<?=$room[$id][keywords]?><?=$room[$id][name]?>教室,パソコンスクール,資格,検定,MOS,サーティファイ,ビジネスオンライン,PC教室,初心者">
<meta name="description" content="<?=$title.$sep?>初心者からスキルアップ・資格取得まで安心のパソコン教室。<?=$room[$id][area]?>のパソコン市民講座 <?=$room[$id][name]?>教室。MOS資格・サーティファイ技能検定などエクセル・ワード・パワーポイントの資格取得やビジネススキルアップを教室インストラクターがしっかりとサポート！">

<link rel="stylesheet" type="text/css" href="/css/style.css?<?php echo filemtime($root.'/css/style.css'); ?>" media="screen and (min-width: 768px), print" />
<link rel="stylesheet" type="text/css" href="/css/style-sp.css?<?php echo filemtime($root.'/css/style-sp.css'); ?>" media="only screen and (max-width: 767px)" />
<script src="https://kit.fontawesome.com/048a2152ad.js" crossorigin="anonymous"></script>

<?php
if( !$index ) {
?>
<link rel="stylesheet" type="text/css" href="/css/index_new.css?<?php echo filemtime($root.'/css/index_new.css'); ?>" media="screen and (min-width: 768px), print" />
<link rel="stylesheet" type="text/css" href="/css/index_new-sp.css?<?php echo filemtime($root.'/css/index_new-sp.css'); ?>" media="only screen and (max-width: 767px)" />
<?php
}
?>
<?php
if( $sokudoku ) {
?>
<link rel="stylesheet" type="text/css" href="/common/css/sokudoku.css?<?php echo filemtime($root.'/common/css/sokudoku.css'); ?>" media="screen and (min-width: 767px), print" />
<link rel="stylesheet" type="text/css" href="/common/css/sokudoku_sp.css?<?php echo filemtime($root.'/common/css/sokudoku_sp.css'); ?>" media="only screen and (max-width: 768px)" />
<?php
}
?>
<?php
if( $mos ) {
?>
<link rel="stylesheet" type="text/css" href="/common/css/mos.css?<?php echo filemtime($root.'/common/css/mos.css'); ?>" media="screen and (min-width: 767px), print" />
<link rel="stylesheet" type="text/css" href="/common/css/mos-sp.css?<?php echo filemtime($root.'/common/css/mos-sp.css'); ?>" media="only screen and (max-width: 768px)" />
<?php
}
?>
<?php
if( $certify ) {
?>
<link rel="stylesheet" type="text/css" href="/common/css/certify.css?<?php echo filemtime($root.'/common/css/certify.css'); ?>" media="screen and (min-width: 768px), print" />
<link rel="stylesheet" type="text/css" href="/common/css/certify-sp.css?<?php echo filemtime($root.'/common/css/certify-sp.css'); ?>" media="only screen and (max-width: 767px)" />
<?php
}
?>

<link rel="shortcut icon" href="/favicon.ico">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--<script src="/js/jquery-page-scroller.js"></script>-->
<script src="//maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="/common/js/jquery.maphilight.js" charset="utf-8"></script>
<script src="/common/js/function.js"></script>

<script src="//use.typekit.net/zec0ewo.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<script>
$(function() {
var navPos = jQuery( '#header' ).offset().top; // グローバルメニューの位置
var navHeight = jQuery( '#header' ).outerHeight(); // グローバルメニューの高さ
jQuery( window ).on( 'scroll', function() {
  if ( 100 < jQuery( this ).scrollTop() ) { // 100px以上スクロールしたら
    jQuery( '#header' ).addClass( 'm_fixed' );
  } else {
    jQuery( '#header' ).removeClass( 'm_fixed' );
  }
});
});

jQuery(function(){
	var headerHight = 100;
   jQuery('a[href^=#]').click(function() {
	  var speed = 400; // ミリ秒
	  var href= jQuery(this).attr("href");
	  var target = jQuery(href == "#" || href == "" ? 'html' : href);
	  var position = target.offset().top-headerHight; // ※　-headerHightでズレの処理
	  jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
	  return false;
   });
});
</script>

<script src="/js/jquery.bxslider.min.js"></script>
<script>
$(document).ready(function(){
	$('.slider').bxSlider({
		controls: false,
		auto: true,
		pause:	8000,
		speed: 500,
		mode: 'fade',
		pager: true,
		buildPager: function(slideIndex){
      switch (slideIndex){
      <?php if (date("Ymd") >= 20191201) : ?>
<?php
if ($id == "1076000") {
	//けやき
?>
        case 0:
          return '<img src="/images/img-main_thumb01.png" width="150" />';
        case 1:
          return '<img src="/images/img-main_thumb05.jpg" width="150" />';
        case 2:
          return '<img src="/images/img-main_thumb02.png" width="150" />';
<?php
} elseif ( $room[$id][sokudoku] == "1" && $room[$id][senior] == "0" ) {
	//速読
?>
        case 0:
          return '<img src="/images/img-thumb_junior_pc.png" width="130" />';
        case 1:
          return '<img src="/images/img-thumb_gakuwari.png" width="130" />';
        case 2:
          return '<img src="/images/img-thumb_mos.png" width="130" />';
        case 3:
          return '<img src="/images/img-thumb_sokudoku.png" width="130" />';
<?php
} elseif ( $room[$id][senior] == "1" && $room[$id][sokudoku] == "0" ) {
	//シニア割
?>
        case 0:
          return '<img src="/images/img-thumb_junior_pc.png" width="130" />';
        case 1:
          return '<img src="/images/img-thumb_gakuwari.png" width="130" />';
        case 2:
          return '<img src="/images/img-thumb_seniorwari.png" width="130" />';
        case 3:
          return '<img src="/images/img-thumb_mos.png" width="130" />';
<?php
} elseif ( $room[$id][sokudoku] == "1" && $room[$id][senior] == "1" ) {
	//速読＆シニア割
?>
        case 0:
          return '<img src="/images/img-thumb_junior_pc.png" width="130" />';
        case 1:
          return '<img src="/images/img-thumb_gakuwari.png" width="130" />';
        case 2:
          return '<img src="/images/img-thumb_seniorwari.png" width="130" />';
        case 3:
          return '<img src="/images/img-thumb_sokudoku.png" width="130" />';
<?php
}else{
	//通常
?>
        case 0:
          return '<img src="/images/img-thumb_junior_pc.png" width="130" />';
        case 1:
          return '<img src="/images/img-thumb_gakuwari.png" width="130" />';
        case 2:
          return '<img src="/images/img-thumb_certify.png" width="130" />';
        case 3:
          return '<img src="/images/img-thumb_mos.png" width="130" />';
<?php
}
?>
      <?php endif; ?>

      <?php if (date("Ymd") <= 20191130) : ?>
<?php
if ($id == "1076000") {
	//けやき
?>
        case 0:
          return '<img src="/images/img-main_thumb01.png" width="150" />';
        case 1:
          return '<img src="/images/img-main_thumb05.jpg" width="150" />';
        case 2:
          return '<img src="/images/img-main_thumb02.png" width="150" />';
<?php
} elseif ($id == "6015000") {
	//test
?>
        case 0:
          return '<img src="/images/img-thumb_sokudoku.png" width="130" />';
        case 1:
          return '<img src="/images/img-thumb_junior_pc.png" width="130" />';
        case 2:
          return '<img src="/images/img-thumb_mos.png" width="130" />';
        case 3:
          return '<img src="/images/img-main_thumb05.jpg" width="150" />';
<?php
} elseif ($id == "1001050") {
	//所沢
?>
        case 0:
          return '<img src="/images/img-thumb_hayawari.png" width="130" />';
        case 1:
          return '<img src="/images/img-thumb_junior_pc.png" width="130" />';
        case 2:
          return '<img src="/images/img-thumb_gakuwari.png" width="130" />';
        case 3:
          return '<img src="/images/img-thumb_certify.png" width="130" />';
        case 4:
          return '<img src="/images/img-thumb_mos.png" width="130" />';
<?php
} elseif ( $room[$id][sokudoku] == "1" && $room[$id][senior] == "0" ) {
	//速読
?>
        case 0:
          return '<img src="/images/img-thumb_oenwari.png" width="130" />';
        case 1:
          return '<img src="/images/img-thumb_junior_pc.png" width="130" />';
        case 2:
          return '<img src="/images/img-thumb_gakuwari.png" width="130" />';
        case 3:
          return '<img src="/images/img-thumb_mos.png" width="130" />';
        case 4:
          return '<img src="/images/img-thumb_sokudoku.png" width="130" />';
<?php
} elseif ( $room[$id][senior] == "1" && $room[$id][sokudoku] == "0" ) {
	//シニア割
?>
        case 0:
          return '<img src="/images/img-thumb_oenwari.png" width="130" />';
        case 1:
          return '<img src="/images/img-thumb_junior_pc.png" width="130" />';
        case 2:
          return '<img src="/images/img-thumb_gakuwari.png" width="130" />';
        case 3:
          return '<img src="/images/img-thumb_seniorwari.png" width="130" />';
        case 4:
          return '<img src="/images/img-thumb_mos.png" width="130" />';
<?php
} elseif ( $room[$id][sokudoku] == "1" && $room[$id][senior] == "1" ) {
	//速読＆シニア割
?>
        case 0:
          return '<img src="/images/img-thumb_oenwari.png" width="130" />';
        case 1:
          return '<img src="/images/img-thumb_junior_pc.png" width="130" />';
        case 2:
          return '<img src="/images/img-thumb_gakuwari.png" width="130" />';
        case 3:
          return '<img src="/images/img-thumb_seniorwari.png" width="130" />';
        case 4:
          return '<img src="/images/img-thumb_sokudoku.png" width="130" />';
<?php
}else{
	//通常
?>
        case 0:
          return '<img src="/images/img-thumb_oenwari.png" width="130" />';
        case 1:
          return '<img src="/images/img-thumb_junior_pc.png" width="130" />';
        case 2:
          return '<img src="/images/img-thumb_gakuwari.png" width="130" />';
        case 3:
          return '<img src="/images/img-thumb_certify.png" width="130" />';
        case 4:
          return '<img src="/images/img-thumb_mos.png" width="130" />';
<?php
}
?>
      <?php endif; ?>
	  }
    }
	});
});
</script>
<!--objedt-fit（IE/Edge対策）-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.3/ofi.js"></script>
<script>objectFitImages();</script>
	
<!-- GoogleAnalytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-60689014-1', 'auto');
  ga('require', 'displayfeatures');
  ga('require', 'linkid', 'linkid.js');
  ga('send', 'pageview');

  ga('create', 'UA-19029672-1', 'auto', {'name': 'secondTracker'});
  ga('secondTracker.require', 'displayfeatures');
  ga('secondTracker.require', 'linkid', 'linkid.js');
  ga('secondTracker.send','pageview');

</script>
</head>

<body<?=$body_class?>>
<header id="header">
<div id="hd_wrap" class="clearfix tk-kozuka-gothic-pr6n">
<div id="hd_lft">
<<?=$logo_tag?> class="hd_txt"><?=$room[$id][area]?>で資格が取れるパソコン教室　<br class="sp-only" />パソコン市民講座 <?=$room[$id][name]?>教室</<?=$logo_tag?>>
	<div id="hd_logo"><a href="/<?=$room[$id][dir]?>/">
		<img class="pc-only" src="/images/img-hd_logo.png" width="211" height="34" alt="<?=$room[$id][area]?>の資格が取れるパソコン教室｜パソコン市民講座 <?=$room[$id][name]?>教室">
		<img class="sp-only" src="/common/img/common/logo1.png" width="156" height="68" alt="<?=$room[$id][area]?>の資格が取れるパソコン教室｜パソコン市民講座 <?=$room[$id][name]?>教室">
	</a></div>
<div id="hd_room"><?=$room[$id][name]?>教室</div>
</div>
<div id="hd_rgt">
<ul class="link">
<li><a href="/<?=$room[$id][dir]?>/qa.php">よくある質問</a></li>
</ul>
<div id="hd_tel"><?=$room[$id][phone]?></div>
	<div id="hd_reception">受付時間/<br>
	<a href="/<?=$room[$id][dir]?>/about.php">営業時間はこちら</a>
	</div>
	<?php
	if( $sokudoku ) {
	?>
		<div class="header-btn1 sp-only"><a href="/<?=$room[$id][dir]?>/sokudoku.php#toiawase_form"><img src="../images/btn-inq_taiken.png" width="127" height="33" alt="無料体験予約"></a></div>
	<?php
	} else {
	?>
		<div class="header-btn1 sp-only"><a href="/<?=$room[$id][dir]?>/contact.php"><img src="../images/btn-inq_taiken.png" width="127" height="33" alt="無料体験予約"></a></div>
	<?php
	}
	?>
	<div class="header-btn2 sp-only"><img src="/common/img/common/sp/header1_btn3.png" width="90" height="90" alt="メニュー"></div>
</div>
</div>

<nav>
<div id="nav_wrap" class="clearfix tk-kozuka-gothic-pr6n">
<ul class="main_nav clearfix">
<li><a href="/<?=$room[$id][dir]?>/about.php">教室情報</a></li>
<li><a href="/<?=$room[$id][dir]?>/course.php">講座紹介</a></li>
<li><a href="/<?=$room[$id][dir]?>/voice.php">受講生の声</a></li>
<li class="last"><a href="/<?=$room[$id][dir]?>/apply.php">お申込み方法</a></li>
</ul>
	<ul class="inq_btn clearfix">
	<?php
	if( $sokudoku ) {
	?>
	<li class="fl_left"><a href="/<?=$room[$id][dir]?>/sokudoku.php#toiawase_form"><img src="../images/btn-inq_taiken.png" width="127" height="33" alt="無料体験予約"></a></li>
	<?php
	} else {
	?>
	<li class="fl_left"><a href="/<?=$room[$id][dir]?>/contact.php"><img src="../images/btn-inq_taiken.png" width="127" height="33" alt="無料体験予約"></a></li>
	<li class="fl_right"><a href="/<?=$room[$id][dir]?>/doc_contact.php"><img src="../images/btn-inq_shiryo.png" width="102" height="33" alt="資料請求"></a></li>
	<?php
	}
	?>
	</ul>
</div>
</nav>
</header>


<?php
if( $index ) {
?>
<?php
} else {
?>
				<div id="locus-area" class="clearfix">
				  <dl class="locus">
					<dt>現在のページ</dt>
					<dd>
					  <ul>
						<li><a href="/">パソコン教室なら「パソコン市民講座」</a> ＞</li>
						<li><a href="/school/<?=$room[$id][pref]?>.php"><?=$room[$id][pref_name]?>のパソコン教室を探す</a> ＞</li>
						<li><a href="/<?=$room[$id][dir]?>/"><?=$room[$id][area]?>のパソコン教室・講座TOP</a> ＞</li>
						<li><?=$title?></li>
					  </ul>
					</dd>
				  </dl><!-- /.locus -->
				</div><!-- /#locus-area -->

		<div id="contents" class="clearfix<?=$contents_class?>">
			<div id="main">
				<div id="kasou" class="clearfix">

				<div class="block">
<?php
}
?>