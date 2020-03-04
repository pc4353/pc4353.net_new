<?php

$title = "資格を取得したい（コース紹介）";
$description = "資格を取得したい人のためのパソコンコース。";
$keywords = "資格,コース,";
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
<p class="mgnB20"><strong>基礎からしっかり学んで、腕試し！資格を取得して、パソコンの実力を形に！</strong></p>
<p>あなたのパソコンスキルを証明するのに「資格取得」は非常に有効です。様々な機能を使いこなせるだけではなく、より実務に役立つスキルを証明することで、あなたの市場価値を高めることができます！</p>
</div>

<h2 class="c-title2">資格を取得してスキルアップしたい方へ</h2>
<div class="section2 clearfix">
	<div class="c_img">
		<img src="/img/qualification_pic.jpg" alt="資格を取得したい！イメージ" width="250" height="188" />
    </div>
<h5>こんな方におすすめ！</h5>
<ul class="mgnB10 mgnL10">
	<li>●パソコンの資格を取って、就職や復職に役立てたい</li>
	<li>●基礎から、ワード・エクセル・タイピングなど、総合的に使えるようになりたい</li>
	<li>●自分のパソコンスキルの腕試しをしてみたい</li>
	<li>●パソコンを習った努力の証が欲しい</li>
	<li>●仕事でのスキルアップへ向けて、資格を取って自信を付けたい</li>
</ul>
</div>

<h3 class="c-title1">おすすめの講座をご紹介</h3>
<div class="section3">
<p>教室で資格対策の講座をしっかり学べることはもちろん、慣れた教室のパソコンで、いつもの先生の指導の元で模擬試験・本試験を受験していただくことができますので安心ですね！</p>
<h4>サーティファイ ビジネス実践講座</h4>
<ul class="mgnB10 mgnL10">
	<li>●<a href="business_word.php">Microsoft Word 2013　（3級・2級）</a></li>
	<li>●<a href="business_excel.php">Microsoft Excel 2013　（3級・2級）</a></li>
	<li>●<a href="business_powerpoint.php">Microsoft PowerPoint 2013　（初級・上級）</a></li>
</ul>
<h4>サーティファイ 資格対策講座</h4>
<ul class="mgnB10 mgnL10">
	<li>●<a href="certify_word.php">Microsoft Word 2016　（3級・2級）</a></li>
	<li>●<a href="certify_excel.php">Microsoft Excel 2016　（3級・2級）</a></li>
	<li>●<a href="certify_powerpoint.php">Microsoft PowerPoint 2016　（初級・上級）</a></li>
</ul>
<h4>MOS（マイクロソフトオフィススペシャリスト）資格取得講座</h4>
<ul class="mgnB10 mgnL10">
	<li>●<a href="mos_word.php">Microsoft Word 2016 / 2013 / 2010</a></li>
	<li>●<a href="mos_excel.php">Microsoft Excel 2016 / 2013 / 2010</a></li>
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