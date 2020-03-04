<?php

include_once( "options.php" );
$title = "お友達紹介特典お申し込み";
$description = "お友達紹介特典へのお申し込みはこちらから。";
$keywords = "お友達紹介特典,";
$pageId = 'contact';
include_once('../lib/home/config.php');
include_once('../lib/home/header-noindex.php');

?>

<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン教室なら「パソコン市民講座」</a></li>
		<li><?=$title?></li>
	</ul>
</div><!-- /.l-breadcrumb -->

<div class="l-pagetitle">
<div class="c-wrap">
	<h1><?=$title?></h1>
</div>
</div><!-- /.l-pagetitle -->

<div id="contents">

<h2 class="c-title2">ご紹介制度による無料体験申込はこちらから</h2>
<div class="section2">
<p>ご利用の際は、必ず「<a href="/privacy.php">プライバシーポリシー</a>」をご一読ください。<br />
なお、お問い合わせの内容によっては、ご返答が遅れる場合がございます。予めご了承ください。</p>
<p class="mgnB20">また、よろしければ「<a href="/qa.php">よくあるご質問</a>」もご確認下さい。</p>

<form method="post" action="invy_confirm.php">
<? inputHTML(); ?>
</form>

</div>
</div>
<?php

include_once('../lib/home/footer.php');

?>
