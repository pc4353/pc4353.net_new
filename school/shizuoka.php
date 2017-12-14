<?php

$title = "静岡県のパソコン教室を探す";
$description = "静岡県のパソコン市民講座の教室をご紹介。";
$keywords = "教室一覧,";
$pageId = "school";
include_once('../lib/home/config.php');
include_once('../lib/home/header.php');

?>

<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン教室なら「パソコン市民講座」</a></li>
		<li><a href="/school/">全国の教室</a></li>
		<li><?=$title?></li>
	</ul>
</div><!-- /.l-breadcrumb -->

<div class="l-pagetitle">
<div class="c-wrap">
	<h1><?=$title?></h1>
</div>
</div><!-- /.l-pagetitle -->


<div id="contents">

<div class="school">
	<p>静岡県には遠鉄百貨店教室や浜松プラザフレスポ教室、沼津教室など3件の教室が存在しています。ぜひお近くの教室をお探しください。</p>
<h2 id="chubu" class="c-title2">中部エリア</h2>

<?php
include_once('../lib/home/shizuoka.php');
?>

</div>

<?php

include_once('../lib/home/map.php');
include_once('../lib/home/footer.php');

?>