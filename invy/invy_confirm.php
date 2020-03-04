<?php

include_once( "options.php" );

foreach( $_POST as $k => $v ){
	if( get_magic_quotes_gpc() ){
		$v = stripslashes( $v );
	}
	$v = htmlspecialchars( $v, ENT_QUOTES );
	$$k = $v;
}

/* 空欄チェック */
$msg1 = "は必ずご入力下さい。";
$msg2 = "は必ずご選択下さい。";
$erBg = " style=\"background-color: #fdd;\"";

if( !$name ) {
	$errormsg .= "<label for=\"name\">■お名前" . $msg1 . "</label><br />\n" ;
	$erName = $erBg;
}
if( !$kana ) {
	$errormsg .= "<label for=\"kana\">■ふりがな" . $msg1 . "</label><br />\n" ;
	$erKana = $erBg;
}
if( !$phone ) {
	$errormsg .= "<label for=\"phone\">■電話番号" . $msg1 . "</label><br />\n" ;
	$erPhone = $erBg;
}
if( !$mail ) {
	$errormsg .= "<label for=\"mail\">■メールアドレス" . $msg1 . "</label><br />\n" ;
	$erMail = $erBg;
}

/* エラーメッセージ */
if( $errormsg ){
	$errormsg = "<p class=\"red mgnT10 mgnB20\">" . $errormsg . "</p>";
	$step = 1;
} else {
	$step = 2;
}

include_once( "options.php" );
$title = "お問い合わせ（確認画面）";
$description = "パソコン市民講座へのお問い合わせはこちらから。";
$keywords = "お問い合わせ,";
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

<div class="section2">

<?php
// 入力内容に不備があった場合
if( $step == 1 ) {
?>
<?= $errormsg; ?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<? inputHTML(); ?>
</form>

<?php
// 確認画面
} else {
?>
<p class="mgnT10 mgnB20">内容をご確認下さい。</p>
<form action="invy_complete.php" method="post">
<table class="about">
<tr>
	<th>申込教室<span class="red">必須</span></th>
	<td><? textConf( $room, room ) ?></td>
</tr>
<tr>
	<th>お名前<span class="red">必須</span></th>
	<td><? textConf( $name, name ) ?></td>
</tr>
<tr>
	<th>ふりがな<span class="red">必須</span></th>
	<td><? textConf( $kana, kana ) ?></td>
</tr>
<tr>
	<th>電話番号<span class="red">必須</span></th>
	<td><? textConf( $phone, phone ) ?></td>
</tr>
<tr>
	<th>メールアドレス<span class="red">必須</span></th>
	<td><? textConf( $mail, mail ) ?></td>
</tr>
<tr>
	<th>無料体験希望日</th>
	<td>【第1希望】　<? textConf( $month_1, month_1, "", "月" ) ?>　<? textConf( $day_1, day_1, "", "日" ) ?>　<? textConf( $time_1, time_1, "", "時頃" ) ?><br />
		【第2希望】　<? textConf( $month_2, month_2, "", "月" ) ?>　<? textConf( $day_2, day_2, "", "日" ) ?>　<? textConf( $time_2, time_2, "", "時頃" ) ?>
	</td>
</tr>
<tr>
	<th>ご質問</th>
	<td><?= nl2br( $question ) ?><input type="hidden" value="<?= $question ?>" name="question"></td>
</tr>
</table>

<p class="center mgnT20"><input type="button" onclick="javascript: history.back();" value="修正する" /><span class="pc-only">　　　　</span><input type="submit" value="送信する" /></p>
</form>

<?php
} // エラーチェック or 確認画面分岐終了
?>
</div>
</div>
<?php

include_once('../lib/home/footer.php');

?>
