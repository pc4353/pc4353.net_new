<?php

$title = "資格を取得したい（コース紹介）";
$description = "資格を取得したい人のためのパソコンコース。";
$keywords = "資格,コース";
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

<img src="/img/kv_qualification.jpg" alt="【【適当なコピーを考えて下さい】】" width="858" height="195" />

<h2 class="c-title2">資格を取得してスキルアップしたい方へ</h2>
<div class="section2 clearfix">
	<div class="c_img">
		<img src="/img/qualification_pic.jpg" alt="資格を取得したい！イメージ" width="250" height="188" />
    </div>
<h5>こんな方におすすめ！</h5>
<ul class="mgnB10 mgnL10">
	<li>●パソコンの資格を取って、就職や復職に役立てたい</li>
	<li>●基礎から、ワード・エクセル・タイピングなど<br />　総合的に使えるようになりたい</li>
	<li>●自分のパソコンスキルの腕試しをしてみたい</li>
	<li>●パソコンを習った努力の証が欲しい</li>
	<li>●仕事でのスキルアップへ向けて、資格を取って自信を付けたい</li>
</ul>
</div>

<h3 class="c-title1">このコースに適した人は？</h3>
<div class="section3">
<p>教室で資格対策の講座をしっかり学べることはもちろん、慣れた教室のパソコンで、いつもの先生の指導の元で模擬試験・本試験を受験していただくことができますので安心ですね！</p>
<h4>サーティファイ　ビジネス実践講座</h4>
<ul class="mgnB10 mgnL10">
	<li>●Microsoft Word 2013　（3級・2級）</li>
	<li>●Microsoft Excel 2013　（3級・2級）</li>
	<li>●Microsoft PowerPoint 2013　（初級・上級）</li>
</ul>
<h4>MOS（マイクロソフトオフィススペシャリスト）資格取得講座</h4>
<ul class="mgnB10 mgnL10">
	<li>●Microsoft Word 2013 / 2010</li>
	<li>●Microsoft Excel 2013 / 2010</li>
</ul>
</div>

<div class="center mgnT30">
<img src="/img/course_bottom.jpg" alt="パソコン市民講座は個別カウンセリングなので、コース選びも安心です！" width="801" height="118" />
</div>

<?php

include_once('../lib/home/ss.php');

?>
</div>
<?php

include_once('../lib/home/footer.php');

?>