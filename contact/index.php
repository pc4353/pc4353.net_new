<?php

include_once( "options.php" );
$title = "お問い合わせ";
$description = "パソコン市民講座へのお問い合わせはこちらから。";
$keywords = "お問い合わせ,";
$pageId = 'contact';
include_once('../lib/home/config.php');
include_once('../lib/home/header.php');

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

<h2 class="c-title2">全国の教室にて無料受講体験実施中!!</h2>
<div class="center u-mt10">
<a href="/school/"><img src="/img/btn_ss.gif" class="alpha" alt="無料体験実施中！（全国の教室ページへ）"  width="573" height="140" /></a>
</div>

<h2 class="c-title2">パソコン市民講座・運営本部へのご連絡は、下記フォームよりお願いいたします。</h2>
<div class="section2">
<p>ご利用の際は、必ず「<a href="/privacy.php">プライバシーポリシー</a>」をご一読ください。<br />
なお、お問い合わせの内容によっては、ご返答が遅れる場合がございます。予めご了承ください。</p>
<p class="mgnB20">また、よろしければ「<a href="/qa.php">よくあるご質問</a>」もご確認下さい。</p>

<form method="post" action="confirm.php">
<? inputHTML(); ?>
</form>

</div>
</div>
<?php

include_once('../lib/home/footer.php');

?>
