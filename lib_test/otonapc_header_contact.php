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
if( ereg( "contact", $_SERVER["SCRIPT_NAME"]) || ereg( "recruit", $_SERVER["SCRIPT_NAME"]) || ereg( "biz-online", $_SERVER["SCRIPT_NAME"]) || ereg( "otonapc", $_SERVER["SCRIPT_NAME"])){
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
if( ereg( "mos", $_SERVER["SCRIPT_NAME"])){
	$title = "MOS（マイクロソフトオフィススペシャリスト）取得講座";
}
if( ereg( "biz-online", $_SERVER["SCRIPT_NAME"])){
	$title = "ビジネスオンライン";
	$biz_online = 1;
}
if( ereg( "otonapc", $_SERVER["SCRIPT_NAME"])){
	$title = "お問い合わせ";
	$otonapc = 1;
}
if( ereg( "xp", $_SERVER["SCRIPT_NAME"])){
	$title = "WindowsXPをご利用の皆様へ";
}


?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<title><?=$title.$sep?><?=$room[$id][name]?>｜パソコン・タブレットを仲間と楽しむ憩いの場</title>
<meta name="description" content="<?=$title.$sep?><?=$room[$id][area]?>でパソコン・タブレットを仲間と楽しむ憩いの場｜<?=$room[$id][name]?>" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="/css/import.css">
<link rel="stylesheet" href="../css/otona.css">
<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/images/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="/images/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="/images/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="/images/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="/images/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="/images/apple-touch-icon-152x152.png" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="/js/opacity-rollover2.1.js" type="text/javascript" charset="utf-8"></script>


</head>
<body>

<!-- header -->
<header>
<div class="header_wrap clearfix">
<h1><?=$room[$id][area]?>でパソコン・タブレットを仲間と楽しむ憩いの場｜<?=$room[$id][name]?></h1>
<div class="hd_left">
<div id="logo"><img src="../images/otonapc/img-logo.jpg" width="80" height="80" alt="おとなパソコン倶楽部"></div>
<div id="room_name"><img src="images/img-room_name.jpg" width="431" height="40" alt="<?=$room[$id][name]?>"></div>
</div>
<div class="hd_right">
<dl id="inq_tel">
<dt>電話でのお問い合わせはこちら</dt>
<dd><?=$room[$id][phone]?></dd>
</dl>
</div>
</div>
</header>
<!-- /header -->

		<div id="contents_wrap" class="clearfix">
		<div id="contents" class="clearfix">
				<div id="kasou" class="clearfix">
				<div class="block">
