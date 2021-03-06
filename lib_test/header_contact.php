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
if( ereg( "contact", $_SERVER["SCRIPT_NAME"]) || ereg( "doc_contact", $_SERVER["SCRIPT_NAME"]) || ereg( "recruit", $_SERVER["SCRIPT_NAME"]) || ereg( "biz-online", $_SERVER["SCRIPT_NAME"])){
	$form = 1;
}

// 各ページ判定
if( ereg( "recruit", $_SERVER["SCRIPT_NAME"])){
	$title = "パソコン教室・インストラクター求人募集";
}
if( ereg( "contact", $_SERVER["SCRIPT_NAME"])){
	$menu5 = " class=\"here\"";
	$title = "お問い合わせ";
}
if( ereg( "doc_contact", $_SERVER["SCRIPT_NAME"])){
	$menu5 = " class=\"here\"";
	$title = "資料請求";
}
if( ereg( "biz-online", $_SERVER["SCRIPT_NAME"])){
	$title = "ビジネスオンライン";
	$biz_online = 1;
}


?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title><?=$title.$sep?><?=$room[$id][area]?>の資格が取れるパソコン教室｜パソコン市民講座 <?=$room[$id][name]?>教室</title>
<meta name="viewport" content="width=device-width" />
<meta name="keywords" content="パソコン教室,<?=$room[$id][keywords]?><?=$room[$id][name]?>教室,パソコンスクール,資格,検定,MOS,サーティファイ,ビジネスオンライン,PC教室,初心者">
<meta name="description" content="<?=$title.$sep?>初心者からスキルアップ・資格取得まで安心のパソコン教室。<?=$room[$id][area]?>のパソコン市民講座 <?=$room[$id][name]?>教室。MOS資格・サーティファイ技能検定などエクセル・ワード・パワーポイントの資格取得やビジネススキルアップを教室インストラクターがしっかりとサポート！">

<link rel="stylesheet" type="text/css" href="/css/style.css?<?php echo filemtime($root.'/css/style.css'); ?>" media="screen and (min-width: 768px), print" />
<link rel="stylesheet" type="text/css" href="/css/style-sp.css?<?php echo filemtime($root.'/css/style-sp.css'); ?>" media="only screen and (max-width: 767px)" />
<link rel="stylesheet" type="text/css" href="/css/index_new.css?<?php echo filemtime($root.'/css/index_new.css'); ?>" media="screen and (min-width: 768px), print" />
<link rel="stylesheet" type="text/css" href="/css/index_new-sp.css?<?php echo filemtime($root.'/css/index_new-sp.css'); ?>" media="only screen and (max-width: 767px)" />

<link rel="shortcut icon" href="/favicon.ico">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="//zipaddr.github.io/zipaddrx.js" charset="UTF-8"></script>
<script src="//zipaddr.github.io/jzipaddr3.js" charset="UTF-8"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("").zipaddr2({zip:"zip",zip1:"",pref:"",city:"",addr:"addr"});
    $("").zipaddr();    // パラメータの設定。
    Zip.x();       // 最後にzipaddrを呼び出す。
});
</script>

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

</head>

<body<?=$body_class?>>
<header class="header">
<div id="hd_wrap" class="clearfix tk-kozuka-gothic-pr6n">
<div id="hd_lft">
<<?=$logo_tag?> class="hd_txt"><?=$room[$id][area]?>の資格が取れるパソコン教室　パソコン市民講座 <?=$room[$id][name]?>教室</<?=$logo_tag?>>
	<div id="hd_logo">
		<img class="pc-only" src="../images/img-hd_logo.png" width="211" height="34" alt="<?=$room[$id][area]?>の資格が取れるパソコン教室｜パソコン市民講座 <?=$room[$id][name]?>教室">
		<img class="sp-only" src="/common/img/common/logo1.png" width="156" height="68" alt="<?=$room[$id][area]?>の資格が取れるパソコン教室｜パソコン市民講座 <?=$room[$id][name]?>教室">
	</div>
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
</div>
</div>

</header>




		<div id="contents" class="clearfix">
				<div id="kasou" class="clearfix">
				<div class="block">
