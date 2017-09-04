<?php

$title = "関西のパソコン教室を探す";
$description = "関西のパソコン市民講座の教室をご紹介。";
$keywords = "関西,教室一覧,";
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
	<p>関西エリアにはあべの教室や西宮教室、登美ヶ丘教室など40件の教室が存在しています。ぜひお近くの教室をお探しください。</p>
<h2 id="kansai" class="c-title2">関西エリア</h2>

<?php
include_once('../lib/home/osaka.php');
include_once('../lib/home/hyogo.php');
include_once('../lib/home/kyoto.php');
include_once('../lib/home/nara.php');
include_once('../lib/home/shiga.php');
?>

</div>

<?php

include_once('../lib/home/map.php');
include_once('../lib/home/footer.php');

?>