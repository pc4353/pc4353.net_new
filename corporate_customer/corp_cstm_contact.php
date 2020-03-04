<?php

include_once( "corp_cstm_options.php" );
$title = "法人様向けお問い合わせ";
$description = "パソコン市民講座への法人様向けお問い合わせはこちらから。";
$keywords = "法人様向け,お問い合わせ,";
$pageId = 'contact';
include_once('../lib/home/config.php');
include_once('../lib/home/header-wdlc.php');

?>

<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン教室なら「パソコン市民講座」</a></li>
		<li><a href="/corporate_customer/">法人様向けサービスのご案内</a></li>
		<li><?=$title?></li>
	</ul>
</div><!-- /.l-breadcrumb -->

<div class="l-pagetitle">
<div class="c-wrap">
	<h1><?=$title?></h1>
</div>
</div><!-- /.l-pagetitle -->

<div id="contents">

<h2 class="c-title2">お問い合わせフォーム</h2>
<div class="section2">
<p>ご利用の際は、必ず「<a href="/privacy.php">プライバシーポリシー</a>」をご一読ください。<br />
なお、お問い合わせの内容によっては、ご返答が遅れる場合がございます。予めご了承ください。</p>

<form method="post" action="corp_cstm_confirm.php">
<? inputHTML(); ?>
</form>

</div>
</div>
<?php

include_once('../lib/home/footer-wdlc.php');

?>
