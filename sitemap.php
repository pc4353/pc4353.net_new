<?php

$title = "サイトマップ";
$description = "パソコン市民講座サイトのサイトマップです。";
$keywords = "サイトマップ,";
include_once('lib/home/config.php');
include_once('lib/home/header.php');

?>

<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン市民講座トップ</a></li>
		<li><?=$title?></li>
	</ul>
</div><!-- /.l-breadcrumb -->

<div class="l-pagetitle">
<div class="c-wrap">
	<h1><?=$title?></h1>
</div>
</div><!-- /.l-pagetitle -->

<div id="contents">

<div class="section2">
<ul id="sitemap">
	<li><a href="/">トップページ</a></li>
	<li><a href="/course/">受講コース</a></li>
	<li class="sub"><ul>
		<li><a href="/course/first.php">はじめてのパソコン</a></li>
		<li><a href="/course/works.php">もっと仕事で役立てたい！</a></li>
		<li><a href="/course/senior.php">シニア特別クラスを開講中</a></li>
		<li><a href="/course/internet.php">インターネットをしたい！</a></li>
		<li><a href="/course/hobby.php">趣味で楽しみたい！</a></li>
		<li><a href="/course/qualification.php">資格を習得したい！</a></li>
	</ul></li>
	<li><a href="/school/">全国の教室</a></li>
	<li><a href="/voice/">受講生の声</a></li>
	<li><a href="/instructor/">インストラクター紹介</a></li>
	<li><a href="/merit.php">パソコン市民講座の特長</a></li>
	<li><a href="/premiere.php">プレミア倶楽部の紹介</a></li>
	<li><a href="/qa.php">よくあるご質問</a></li>
	<li><a href="/contact/">お問い合わせ</a></li>
	<li><a href="/about.php">株式会社チアリー（運営元）について</a></li>
	<li><a href="/privacy.php">プライバシーポリシー</a></li>
</ul>
</div>

<?php

include_once('lib/home/ss.php');

?>
</div>
<?php

include_once('lib/home/footer.php');

?>