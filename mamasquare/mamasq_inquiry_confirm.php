<?php

include_once( "mamasq_inquiry_options.php" );

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

if( !$base ) {
	$errormsg .= "<label for=\"base\">■所属拠点" . $msg1 . "</label><br />\n" ;
	$erBase = $erBg;
}
if( !$name ) {
	$errormsg .= "<label for=\"name\">■氏名" . $msg1 . "</label><br />\n" ;
	$erName = $erBg;
}
if( !$kana ) {
	$errormsg .= "<label for=\"kana\">■ふりがな" . $msg1 . "</label><br />\n" ;
	$erKana = $erBg;
}
if( !$mail ) {
	$errormsg .= "<label for=\"mail\">■メールアドレス" . $msg1 . "</label><br />\n" ;
	$erMail = $erBg;
}
if( !$course ) {
	$errormsg .= "<label for=\"course\">■申込番号：講座名" . $msg2 . "</label><br />\n" ;
	$erCourse = $erBg;
}

/* エラーメッセージ */
if( $errormsg ){
	$errormsg = "<p class=\"red mgnT10 mgnB20\">" . $errormsg . "</p>";
	$step = 1;
} else {
	$step = 2;
}

include_once( "mamasq_inquiry_options.php" );
$title = "オンラインパソコン講座 お問い合わせ（確認画面）";
$description = "パソコン市民講座 オンラインパソコン講座へのお問い合わせ（確認画面）";
$keywords = "オンラインパソコン講座お問い合わせ確認,";
$pageId = 'contact';
include_once('../lib/home/config.php');
include_once('../lib/home/header-mama.php');
?>

<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン教室なら「パソコン市民講座」</a></li>
		<li><a href="/mamasquare/">ママスクエア 従業員さま専用サイト</a></li>
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
<p class="mgnT10 mgnB20">入力内容をご確認下さい。</p>
<form action="mamasq_inquiry_complete.php" method="post">

<table class="about">
<tr>
	<th>所属拠点<span class="red">必須</span></th>
	<td><? textConf( $base, base ) ?></td>
</tr>
<tr>
	<th>氏名<span class="red">必須</span></th>
	<td><? textConf( $name, name ) ?></td>
</tr>
<tr>
	<th>ふりがな<span class="red">必須</span></th>
	<td><? textConf( $kana, kana ) ?></td>
</tr>
<tr>
	<th>メールアドレス<span class="red">必須</span></th>
	<td><? textConf( $mail, mail ) ?></td>
</tr>
<tr>
	<th>申込番号：講座名<span class="red">必須</span></th>
	<td><? textConf( $course, course ) ?> </td>
</tr>
<tr>
	<th>ご質問等</th>
	<td><? textConf( $question, question ) ?></td>
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

include_once('../lib/home/footer-wdlc.php');

?>
