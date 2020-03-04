<?php

include_once( "nsgspt_contact_options.php" );
$title = "オンラインパソコン講座 お申し込み";
$description = "パソコン市民講座 オンラインパソコン講座へのお申し込み";
$keywords = "オンラインパソコン講座お申し込み,";
$pageId = 'contact';
include_once('../lib/home/config.php');
include_once('../lib/home/header-mama.php');

?>

<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン教室なら「パソコン市民講座」</a></li>
		<li><a href="/nsg_support/">NSGグループ パパママ支援専用サイト</a></li>
		<li><?=$title?></li>
	</ul>
</div><!-- /.l-breadcrumb -->

<div class="l-pagetitle">
<div class="c-wrap">
	<h1><?=$title?></h1>
</div>
</div><!-- /.l-pagetitle -->

<div id="contents">
<p>申し込み後の返信メールが無い場合、こちらまでお問合せ下さい　<a href="mailto:nsg0088@cheery.co.jp">nsg0088@cheery.co.jp</a></p>
<h2 class="c-title2">オンラインパソコン講座　申込フォーム</h2>
<div class="section2">
<p class="mgnB20">ご利用の際は、必ず「<a href="/privacy.php" target="_blank">プライバシーポリシー</a>」をご一読ください。<br />
なお、お問い合わせの内容によっては、ご返答が遅れる場合がございます。予めご了承ください。</p>

<form method="post" action="nsgspt_contact_confirm.php">
<? inputHTML(); ?>
</form>

</div>
</div>
<?php

include_once('../lib/home/footer-wdlc.php');

?>
