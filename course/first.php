<?php

$title = "はじめてのパソコン（コース紹介）";
$description = "はじめての方のためのパソコンコース。";
$keywords = "初心者,コース,はじめて,";
$pageId = 'course';
include_once('../lib/home/config.php');
include_once('../lib/home/header.php');

?>

<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン教室なら「パソコン市民講座」</a></li>
		<li><a href="/course/">受講コース</a></li>
		<li><?=$title?></li>
	</ul>
</div><!-- /.l-breadcrumb -->

<div class="l-pagetitle">
<div class="c-wrap">
	<h1><?=$title?></h1>
</div>
</div><!-- /.l-pagetitle -->

<div id="contents">

<div class="u-center"><img src="/img/kv_first.jpg" alt="超初心者の方大歓迎！の教室です。" width="858" height="195" /></div>

<div class="section2 large mgnT20">
<p>初心者の方がパソコンの楽しみ方を効率よくマスターできるよう、<br />
バラエティに富んだコースをご用意しています！</p>
</div>

<h2 class="c-title2">まったくの初心者からパソコンをはじめたい方へ</h2>
<div class="section2 clearfix">
	<div class="c_img">
		<img src="/img/first_pic.jpg" alt="初心者コースイメージ" width="250" height="188" />
    </div>
<h5>こんな方におすすめ！</h5>
<ul class="mgnB10 mgnL10">
	<li>●初めてパソコンを買った</li>
	<li>●マウス操作やキーボード入力などの基礎を身につけたい</li>
	<li>●パソコンでどんなことができるのか知りたい</li>
	<li>●タッチタイピングを身につけたい</li>
	<li>●電子メールでやりとりしたい</li>
</ul>
<h5>対象のOS</h5>
<p class="mgnL10"><img src="../img/win10.jpg" class="icon"> Windows 10　　<img src="../img/win8.jpg" class="icon"> Windows 8.1　　<img src="../img/win7.jpg" class="icon"> Windows 7</p>
</div>

<h3 class="c-title1">「はじめてのパソコン」コース内容</h3>
<div class="section3">
<h4>初心者／初級者コース</h4>
<p class="mgnL20">パソコンの基礎から、インターネット、メールやワードの使い方、デジカメ活用まで、<br />
パソコンの初歩を総合的に楽しめるコースです。</p>
<h4>パソコン使いこなし術</h4>
<p class="mgnL20">日々のパソコン操作の『？？？』を解消する講座です。<br />
便利な機能を知ればますます楽しくなりますよ！</p>
</div>

<div class="center mgnT30">
<a href="/voice/"><img src="/img/btn_first.jpg" class="alpha" alt="このコースの受講生の声" width="350" height="70" /></a>
</div>

<div class="center mgnT50">
<img src="/img/course_bottom.jpg" alt="パソコン市民講座は個別カウンセリングなので、コース選びも安心です！" width="801" height="118" />
</div>

<?php

include_once('../lib/home/ss.php');

?>
</div>
<?php

include_once('../lib/home/footer.php');

?>