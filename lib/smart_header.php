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
if( ereg( "contact", $_SERVER["SCRIPT_NAME"]) || ereg( "recruit", $_SERVER["SCRIPT_NAME"]) || ereg( "biz-online", $_SERVER["SCRIPT_NAME"])){
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
	$title = "お問い合わせ・無料体験お申し込みフォーム";
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
if( ereg( "mos", $_SERVER["SCRIPT_NAME"])){
	$title = "MOS（マイクロソフトオフィススペシャリスト）取得講座";
}
if( ereg( "biz-online", $_SERVER["SCRIPT_NAME"])){
	$title = "ビジネスオンライン";
	$biz_online = 1;
}
if( ereg( "shikaku", $_SERVER["SCRIPT_NAME"])){
	$title = "ビジネス向け資格取得講座";
}
if( ereg( "xp", $_SERVER["SCRIPT_NAME"])){
	$title = "WindowsXPをご利用の皆様へ";
}


?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=2">
<meta name="description" content="<?=$title.$sep?>スキルアップ・資格取得まで初心者からでも安心のパソコン教室 パソコン市民講座 <?=$room[$id][name]?>教室。MOS資格・サーティファイ技能検定などエクセル・ワード・パワーポイントの資格取得やビジネススキルアップを教室インストラクターがしっかりとサポート！" />
<meta name="keywords" content="<?=$room[$id][name]?>教室,パソコン,資格,検定,教室,スクール,MOS,サーティファイ,ビジネスオンライン,PC教室,初心者" />
<title><?=$title.$sep?><?=$room[$id][area]?>の資格が取れるパソコン教室｜パソコン市民講座 <?=$room[$id][name]?>教室</title>
<link rel="stylesheet" href="/sp/css/smart.css">
</head>
<body>
<header>
<div class="container">
<div class="header cf">
<a href="/sp/"><img src="/sp/images/header_logo.png" width="190" height="76" alt="パソコン市民講座"></a>
<p class="catch">スキルアップ・資格取得まで<br>
初心者からでもしっかり学べる</p>
</div>
</div>
</header>

<!-- selectSchool -->
<section class="selectSchool">
<?php
if( $biz_online ) {
?>
<h2><span class="sub">ビジネスオンライン</span>お申し込みフォーム</h2>
<?php
} else {
?>
<h2><span class="sub">お問い合わせ・無料体験</span>お申し込みフォーム</h2>
<?php
}
?>
<?php
if ($id == "6117001" || $id == "6114001" || $id == "1076001") {
//FC教室
?>
<?php
} else {
//通常
?>
<!--<div class="sliderPhoto"><img src="/sp/images/slider004.jpg" alt="スタートキャンペーン実施中！"></div>-->
<?php
}
?>

</section>
<!-- // selectSchool -->


