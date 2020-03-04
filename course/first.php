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

<div class="section2 large mgnT20">
<p class="mgnB20"><strong>「超初心者です」という方も大歓迎！の教室です。<br>パソコンを「楽しい」と思ってもらえる、そんなコースをご用意！</strong></p>
<p>初心者の方がパソコンの楽しみ方を効率よくマスターできるよう、バラエティに富んだコースをご用意しています！</p>
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
<p class="mgnL10"><img src="../img/win10.jpg" class="icon"> Windows 10　　<img src="../img/win8.jpg" class="icon"> Windows 8.1</p>
</div>

<h3 class="c-title1">おすすめの講座をご紹介</h3>
<div class="section3">
<h4><a href="pc_basic.php">パソコン基礎講座</a></h4>
<p class="mgnL20">パソコンの基礎から、インターネット、メールやワードの使い方、デジカメ活用まで、パソコンの初歩を総合的に楽しめるコースです。</p>
<h4><a href="typing.php">タッチタイピング習得</a></h4>
<p class="mgnL20">入力の時間はできるだけ短く効率よく行えたら、もっとパソコンを活用できます。どなたでも確実にタッチタイピングマスターに！</p>
<h4><a href="digital_basic.php">デジタル基礎知識講座</a></h4>
<p class="mgnL20">パソコンの仕組みやWi-Fiやインターネットなど、パソコンの知識を学習します。パソコンを知って、もっと活用しよう！</p>
<h4><a href="junior_pc.php">子ども向けパソコン講座</a></h4>
<p class="mgnL20">小学生から学べる講座で初めてのパソコンを楽しく学習！「何ができるか」を、実際にパソコンを触りながら学習できるのでわかりやすく、身に付きやすくなっています。</p>
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