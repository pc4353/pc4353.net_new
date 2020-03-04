<?php
// index判定
if( ereg( "index", $_SERVER["SCRIPT_NAME"])){
	$index = 1;
	$body_class = " class=\"top\"";
	$logo_tag = "h1";
	$onload = " onload=\"dispgmap();\"";
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
	$onload = " onload=\"dispgmap();\"";
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
if( ereg( "summer_lesson", $_SERVER["SCRIPT_NAME"])){
	$title = "夏休みパソコン教室 小中学生対象特別講座";
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


?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" />
<title><?=$title.$sep?><?=$room[$id][area]?>のパソコン教室｜パソコン市民講座 <?=$room[$id][name]?>教室</title>
<meta name="keywords" content="パソコン教室,<?=$room[$id][keywords]?><?=$room[$id][name]?>教室,パソコンスクール,資格,検定,MOS,サーティファイ,ビジネスオンライン,PC教室,初心者">
<meta name="description" content="<?=$title.$sep?>初心者からスキルアップ・資格取得まで安心のパソコン教室。<?=$room[$id][area]?>のパソコン市民講座 <?=$room[$id][name]?>教室。MOS資格・サーティファイ技能検定などエクセル・ワード・パワーポイントの資格取得やビジネススキルアップを教室インストラクターがしっかりとサポート！">

<link rel="stylesheet" type="text/css" href="/css/style.css?<?php echo filemtime($root.'/css/style.css'); ?>" media="screen and (min-width: 768px), print" />
<link rel="stylesheet" type="text/css" href="/css/style-sp.css?<?php echo filemtime($root.'/css/style-sp.css'); ?>" media="only screen and (max-width: 767px)" />
<?php
if( !$index ) {
?>
<link rel="stylesheet" type="text/css" href="/css/index_new.css?<?php echo filemtime($root.'/css/index_new.css'); ?>" media="screen and (min-width: 768px), print" />
<link rel="stylesheet" type="text/css" href="/css/index_new-sp.css?<?php echo filemtime($root.'/css/index_new-sp.css'); ?>" media="only screen and (max-width: 767px)" />
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
<script src="js/map.js"></script>
<script type="text/javascript" src="/common/js/jquery.maphilight.js" charset="utf-8"></script>
<script src="/common/js/function.js"></script>

<script src="//use.typekit.net/zec0ewo.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('header'),
      animationClass = 'is-animation';

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > 300 ) {
      $header.addClass(animationClass);
    } else {
      $header.removeClass(animationClass);
    }
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
      <?php if (date("Ymd") <= 20181124) : ?>
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
} elseif ($id == "1001135" || $id == "1001136" ) {
	//上野・溝口
?>
        case 0:
          return '<img src="/images/img-new_thumb.png" width="150" />';
        case 1:
          return '<img src="/images/img-junior_pc_thumb.jpg" width="150" />';
        case 2:
          return '<img src="/images/img-main_thumb01.png" width="150" />';
        case 3:
          return '<img src="/images/img-main_thumb02.png" width="150" />';
<?php
} elseif ($id == "6015118" ) {
	//あべの
?>
        case 0:
          return '<img src="/images/img-main_thumb01.png" width="150" />';
        case 1:
          return '<img src="/images/img-junior_pc_thumb.jpg" width="150" />';
        case 2:
          return '<img src="/images/img-main_thumb02.png" width="150" />';
        case 3:
          return '<img src="/images/img-main_thumb05.jpg" width="150" />';
<?php
}else{
?>
        case 0:
          return '<img src="/images/img-oenwari_thumb.jpg" width="150" />';
        case 1:
          return '<img src="/images/img-junior_pc_thumb.jpg" width="150" />';
        case 2:
          return '<img src="/images/img-main_thumb01.png" width="150" />';
        case 3:
          return '<img src="/images/img-main_thumb02.png" width="150" />';
<?php
}
?>
      <?php endif; ?>

      <?php if (date("Ymd") >= 20181125) : ?>
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
} elseif ($id == "1001135" || $id == "1001136" ) {
	//上野・溝口
?>
        case 0:
          return '<img src="/images/img-new_thumb.png" width="150" />';
        case 1:
          return '<img src="/images/img-junior_pc_thumb.jpg" width="150" />';
        case 2:
          return '<img src="/images/img-main_thumb01.png" width="150" />';
        case 3:
          return '<img src="/images/img-main_thumb02.png" width="150" />';
<?php
}else{
?>
        case 0:
          return '<img src="/images/img-main_thumb01.png" width="150" />';
        case 1:
          return '<img src="/images/img-junior_pc_thumb.jpg" width="150" />';
        case 2:
          return '<img src="/images/img-main_thumb02.png" width="150" />';
        case 3:
          return '<img src="/images/img-main_thumb05.jpg" width="150" />';
<?php
}
?>
      <?php endif; ?>
	  }
    }
	});
});
</script>

<?php
/*if( $index ) {
?>
<link rel="alternate" media="only screen and (max-width: 640px)" href="https://www.pc4353.net/<?=$room[$id][dir]?>/sp.php" />
<?php
}
?>
<?php
if( $index ) {
?>
<script>
if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
    location.href = '/<?=$room[$id][dir]?>/sp.php';
}
</script>
<?php
} elseif( $biz_online ) {
?>
<script>
if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
    location.href = '/<?=$room[$id][dir]?>/smart_biz-online_contact.php';
}
</script>
<?php
}*/
?>
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

<body<?=$body_class?><?=$onload?>>
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
	<div class="header-btn1 sp-only"><a href="/<?=$room[$id][dir]?>/contact.php"><img src="../images/btn-inq_taiken.png" width="127" height="33" alt="無料体験予約"></a></div>
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
<li class="fl_left"><a href="/<?=$room[$id][dir]?>/contact.php"><img src="../images/btn-inq_taiken.png" width="127" height="33" alt="無料体験予約"></a></li>
<li class="fl_right"><a href="/<?=$room[$id][dir]?>/doc_contact.php"><img src="../images/btn-inq_shiryo.png" width="102" height="33" alt="資料請求"></a></li>
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