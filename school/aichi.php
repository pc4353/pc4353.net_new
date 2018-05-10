<?php

$title = "愛知県のパソコン教室を探す";
$description = "愛知県のパソコン市民講座の教室をご紹介。";
$keywords = "教室一覧,";
$pageId = "school";
include_once('../lib/home/config.php');
include_once('../lib/home/header.php');

?>

<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン教室なら「パソコン市民講座」</a></li>
		<li><a href="/school/">全国のパソコン教室</a></li>
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
	<p>愛知県には赤池教室や上飯田教室、豊橋教室、尾張旭教室など6件の教室が存在しています。ぜひお近くの教室をお探しください。</p>
<h2 id="chubu" class="c-title2">中部エリア</h2>

<?php
include_once('../lib/home/aichi.php');
?>

</div>

<?php

include_once('../lib/home/map.php');
include_once('../lib/home/footer.php');

?>