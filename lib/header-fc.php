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
if( ereg( "contact", $_SERVER["SCRIPT_NAME"]) || ereg( "recruit", $_SERVER["SCRIPT_NAME"])){
	$form = 1;
}

// 各ページ判定
if( ereg( "course", $_SERVER["SCRIPT_NAME"])){
	$title = "あなたの目的は？";
}
if( ereg( "instructor", $_SERVER["SCRIPT_NAME"])){
	$title = "インストラクターのご紹介";
}
if( ereg( "recruit", $_SERVER["SCRIPT_NAME"])){
	$title = "インストラクター募集";
}
if( ereg( "about", $_SERVER["SCRIPT_NAME"])){
	$menu1 = " class=\"here\"";
	$title = "教室紹介";
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
	$title = "サマータイム制の導入について";
}
if( ereg( "cp2", $_SERVER["SCRIPT_NAME"])){
	$title = "夏の特別レッスンについて";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="description" content="初心者のための個別学習型パソコン教室。パソコン市民講座 <?=$room[$id][name]?>教室。" />
<meta name="keywords" content="パソコン市民講座,<?=$room[$id][name]?>教室,pc4353,日本パソコン普及協会,パソコン教室,パソコンスクール,PC教室,初心者,パソコン検定,P検,パソコン資格" />
<title><?=$title.$sep?>パソコン市民講座 <?=$room[$id][name]?>教室</title>

<link href="/css/import.css" rel="stylesheet" type="text/css" />
<script src="/js/jquery.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/jquery-page-scroller.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/opacity-rollover2.1.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script> 
<script src="js/map.js" type="text/javascript" charset="utf-8"></script>
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
	<p id="tagline"><span><a href="/<?=$room[$id][dir]?>/about.php#about4">⇒アクセスMAP</a></span>[初心者のための個別学習型パソコン教室] パソコン市民講座 <?=$room[$id][name]?>教室 </p>
	<div id="doc">
		<div id="header" class="clearfix">
			<div id="site-title" class="clearfix">
				<div class="box-a">
					<<?=$logo_tag?> class="logo">
						<strong><a href="/<?=$room[$id][dir]?>/"><img src="/images/logo_03.png" alt="パソコン市民講座" /></a></strong>
					</<?=$logo_tag?>>
				</div>
				<div class="box-b">
					<?=$room[$id][name]?>教室
				</div>
				<div class="box-c">
					<img src="/<?=$room[$id][dir]?>/images/top_05.png" alt="<?=$room[$id][phone]?>" />
				</div>
			</div>
		</div><!-- #header -->

		<div id="contents" class="clearfix">
			<div id="main">
				<div id="menu" class="clearfix">
					<ul class="clearfix">
						<li id="menu1"<?=$menu1?>><a href="/<?=$room[$id][dir]?>/about.php">教室紹介</a></li>
						<li id="menu2"<?=$menu2?>><a href="/<?=$room[$id][dir]?>/voice.php">受講生の声</a></li>
						<li id="menu3"<?=$menu3?>><a href="/<?=$room[$id][dir]?>/apply.php">お申し込み方法</a></li>
						<li id="menu4"<?=$menu4?>><a href="/<?=$room[$id][dir]?>/qa.php">よくあるご質問</a></li>
						<li id="menu5"<?=$menu5?>><a href="/<?=$room[$id][dir]?>/contact.php">お問い合わせ</a></li>
					</ul>
				</div><!-- #menu -->

<?php
if( $index ) {
?>
				<div id="key-visual"><a href="/<?=$room[$id][dir]?>/contact.php">
					<h2><img src="/images/main01.jpg" width="647" height="300" alt="あなたのヤル気を全力サポート！笑顔いっぱいで楽しい！パソコン教室です。" /></h2>
<?/*					<img src="/images/kv20110124.jpg" class="alpha" width="647" height="300" alt="新春パソコンスタート応援キャンペーン開催！" />*/?>
				</a></div><!-- #key-visual -->
				<!--
<?php
} else {
?>
				<div id="kasou" class="clearfix">
				
				<div id="locus-area" class="clearfix">
				  <dl class="locus"> 
					<dt>現在のページ</dt> 
					<dd> 
					  <ul> 
						<li><a href="/<?=$room[$id][dir]?>/">HOME</a> <img src="/images/locus.png" alt="の中の" width="9" height="9" /></li> 
						<li><?=$title?></li>
					  </ul>
					</dd> 
				  </dl><!-- /.locus --> 
				</div><!-- /#locus-area -->

				<div class="block">
<?php
}
?>