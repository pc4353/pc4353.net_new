<?php

$title = "中部のパソコン教室を探す";
$description = "中部のパソコン市民講座の教室をご紹介。";
$keywords = "中部,教室一覧,";
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
	<p>中部エリアには浜松教室や豊橋教室、尾張旭教室など11件の教室が存在しています。ぜひお近くの教室をお探しください。</p>
<h2 id="chubu" class="c-title2">中部エリア</h2>

<?php
include_once('../lib/home/aichi.php');
include_once('../lib/home/gifu.php');
include_once('../lib/home/shizuoka.php');
include_once('../lib/home/niigata.php');
?>

</div>

<?php

include_once('../lib/home/map.php');
include_once('../lib/home/footer.php');

?>