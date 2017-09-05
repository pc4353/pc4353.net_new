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
if( ereg( "mos", $_SERVER["SCRIPT_NAME"])){
	$title = "MOS（マイクロソフトオフィススペシャリスト）資格取得講座";
}
if( ereg( "certify", $_SERVER["SCRIPT_NAME"])){
	$title = "ビジネス実践講座【サーティファイ】ワード・エクセル技能認定試験対応";
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
<link rel="stylesheet" type="text/css" href="/css/index_new.css?<?php echo filemtime($root.'/css/index_new.css'); ?>" media="screen and (min-width: 768px), print" />
<link rel="stylesheet" type="text/css" href="/css/index_new-sp.css?<?php echo filemtime($root.'/css/index_new-sp.css'); ?>" media="only screen and (max-width: 767px)" />

<link rel="stylesheet" type="text/css" href="/common/css/style.css?<?php echo filemtime($root.'/common/css/style.css'); ?>" media="screen and (min-width: 767px), print" />
<link rel="stylesheet" type="text/css" href="/common/css/style-sp.css?<?php echo filemtime($root.'/common/css/style-sp.css'); ?>" media="only screen and (max-width: 768px)" />


<link rel="stylesheet" type="text/css" href="/common/css/mos.css?<?php echo filemtime($root.'/common/css/mos.css'); ?>" media="screen and (min-width: 767px), print" />
<link rel="stylesheet" type="text/css" href="/common/css/mos-sp.css?<?php echo filemtime($root.'/common/css/mos-sp.css'); ?>" media="only screen and (max-width: 768px)" />



<link rel="shortcut icon" href="/favicon.ico">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/js/jquery-page-scroller.js"></script>
<script src="//maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/map.js"></script>
<script type="text/javascript" src="/common/js/jquery.maphilight.js" charset="utf-8"></script>
<script src="/common/js/function.js"></script>

<script src="//use.typekit.net/zec0ewo.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<script>
 $(function() {
  $(window).on('scroll', function() {
    if ($(this).scrollTop() > 0) {
      $('.header').addClass('fixed');
    } else {
      $('.header').removeClass('fixed');
    }
  });
});
</script>

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
<header id="header" class="mos">
<div id="hd_wrap" class="clearfix tk-kozuka-gothic-pr6n">
<div id="hd_lft">
<<?=$logo_tag?> class="hd_txt"><?=$room[$id][area]?>で資格が取れるパソコン教室　パソコン市民講座 <?=$room[$id][name]?>教室</<?=$logo_tag?>>
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

		<div id="contents" class="clearfix mos">
			<div id="main">
				<div id="kasou" class="clearfix" style="padding: 0;">

				<div id="locus-area" class="clearfix c-wrap">
				  <dl class="locus">
					<dt>現在のページ</dt>
					<dd>
					  <ul>
						<li><a href="/<?=$room[$id][dir]?>/"><?=$room[$id][area]?>のパソコン教室・講座TOP</a> ＞</li>
						<li><?=$title?></li>
					  </ul>
					</dd>
				  </dl><!-- /.locus -->
				</div><!-- /#locus-area -->

				<div class="block" style="background: #fff !important;">
