<?php

include_once( "options.php" );
$title = "mosお問い合わせ";
$description = "mosパソコン市民講座へのお問い合わせはこちらから。";
$keywords = "mosお問い合わせ,";
include_once('../lib/home/config.php');
include_once('../lib/home/header.php');

?>
<div id="contents">
<ul id="bl">
	<li><a href="/">パソコン市民講座トップ</a></li>
	<li><?=$title?></li>
</ul>

<h1><img src="/img/h1_contact.gif" alt="<?=$title?>" width="153" height="23" /></h1>
<h2>全国の教室にて無料受講体験実施中!!</h2>
<div class="center">
<a href="/school/"><img src="/img/btn_ss.gif" class="alpha" alt="無料体験実施中！（全国の教室ページへ）"  width="573" height="140" /></a>
</div>

<h2>MOS対策講座に関する問い合わせは、下記フォームよりお願いいたします。</h2>
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
