<?php

require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/smart_biz-online_contact_options.php");

$step = $_POST["step"];

if( !$step ) {
	header("Location: " . $script_path );
} else {

foreach( $_POST as $k => $v ){
	if( get_magic_quotes_gpc() ){
		$v = stripslashes( $v );
	}
	$v = htmlspecialchars( $v, ENT_QUOTES );
	$$k = $v;
}

/* 空欄チェック */
$msg1 = "は必ずご入力ください。";
$msg2 = "は必ずご選択ください。";
$erBg = " style=\"background-color: #fdd;\"";

if( !$name ) {
	$errormsg .= "<label for=\"name\">■お名前" . $msg1 . "</label><br />\n" ;
	$erName = $erBg;
}
if( !$kana ) {
	$errormsg .= "<label for=\"kana\">■フリガナ" . $msg1 . "</label><br />\n" ;
	$erKana = $erBg;
}
if( !$phone ) {
	$errormsg .= "<label for=\"phone\">■電話番号" . $msg1 . "</label><br />\n" ;
	$erPhone = $erBg;
}
if( !$nichiji_1 || !$nichiji_2 || !$nichiji_3 ) {
	$errormsg .= "<label for=\"nichiji_1\">■無料説明会希望日" . $msg2 . "</label><br />\n" ;
	$erNichiji = $erBg;
}

/* エラーメッセージ */
if( $errormsg ){
	$errormsg = "<p class=\"colorRed\">" . $errormsg . "</p>";
} else {
	$step = 2;
}

include_once("../lib/smart_header.php");

?>

<?php

// 入力内容に不備があった場合
if( $step == 1 ) {
?>
<!-- section .contactNote -->
<section class="contactNote">
<div class="container">
<p><span class="colorRed">入力内容をご確認ください。</span></p>
<?= $errormsg; ?>
</div>
</section>
<!-- // section .contactNote -->

<!-- section .contactForm -->
<section class="contactForm">
<div class="container">


<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<? inputHTML(); ?>
<div class="submit">
<input type="submit" class="submitButton" value="入力内容を確認する">
</div>

<div class="notice">
<p>当社のプライバシーポリシーを十分にご確認いただいた上で、お問い合わせください。</p>
</div>

</div>
</section>
<!-- // section .contactForm -->


<input type="hidden" value="1" name="step" />
</form>
<?php

// 確認画面
} else {

?>

<!-- section .contactNote -->
<section class="contactNote">
<div class="container">
<p><span class="colorRed">入力内容をご確認ください。</span></p>
</div>
</section>
<!-- // section .contactNote -->

<!-- section .contactForm -->
<section class="contactForm">
<div class="container">

<form action="smart_biz-online_contact_complete.php" method="post">

<h3>ご応募教室</h3>
<p class="body"><?= $room[$rid]["name"] ?>教室</p>
<hr>
<h3>お名前　<span class="colorRed">必須</span></h3>
<p class="body"><? textConf( $name, name ) ?></p>
<hr>
<h3>フリガナ　<span class="colorRed">必須</span></h3>
<p class="body"><? textConf( $kana, kana ) ?></p>
<hr>
<h3>電話番号（携帯可）　<span class="colorRed">必須</span></h3>
<p class="body"><? textConf( $phone, phone ) ?></p>
<hr>
<h3>メールアドレス</h3>
<p class="body"><? textConf( $mail, mail ) ?></p>
<hr>
<h3>住所</h3>
<p class="body"><? textConf( $address, address ) ?></p>
<hr>
<h3>無料説明会希望日　<span class="colorRed">必須</span></h3>
<p class="body"><? textConf( $nichiji_1, nichiji_1 ) ?>月 <? textConf( $nichiji_2, nichiji_2 ) ?>日 <? textConf( $nichiji_3, nichiji_3 ) ?></p>
<div class="formNote">
<p>※後程、お電話にてお時間の確認をさせていただきます。</p>
</div>
<hr>
<h3>ご質問など</h3>
<?= nl2br( $question ) ?><input type="hidden" value="<?= $question ?>" name="question">


<div class="submit">
<input type="submit" class="submitButton" value="送信する">
</div>
<input type="hidden" value="2" name="step" />
</form>

</div>
</section>
<!-- // section .contactForm -->

<?php
} // エラーチェック or 確認画面分岐終了
include_once("../lib/smart_footer.php");
} // stepを踏まないアクセスを回避
?>