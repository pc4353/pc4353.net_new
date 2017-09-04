<?php

$title = "福岡県のパソコン教室を探す";
$description = "福岡県のパソコン市民講座の教室をご紹介。";
$keywords = "教室一覧,";
$pageId = "school";
include_once('../lib/home/config.php');
include_once('../lib/home/header.php');

?>

<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン市民講座トップ</a></li>
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
	<p>福岡県には中井教室や笹丘教室、筑紫野教室など3件の教室が存在しています。ぜひお近くの教室をお探しください。</p>
<h2 id="seibu" class="c-title2">中国・四国・九州エリア</h2>

<?php
include_once('../lib/home/fukuoka.php');
?>

</div>

<?php

include_once('../lib/home/map.php');
include_once('../lib/home/footer.php');

?>