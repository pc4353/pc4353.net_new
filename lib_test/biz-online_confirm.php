<?php

require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/biz-online_options.php");

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
	$errormsg .= "<label for=\"name\">■お名前" . $msg1 . "</label>\n" ;
	$erName = $erBg;
}
if( !$kana ) {
	$errormsg .= "<label for=\"kana\">■フリガナ" . $msg1 . "</label>\n" ;
	$erKana = $erBg;
}
if( !$phone ) {
	$errormsg .= "<label for=\"phone\">■電話番号" . $msg1 . "</label>\n" ;
	$erPhone = $erBg;
}
if( !$nichiji_1 || !$nichiji_2 || !$nichiji_3 ) {
	$errormsg .= "<label for=\"nichiji_1\">■無料説明会希望日" . $msg2 . "</label>\n" ;
	$erNichiji = $erBg;
}
//if( !$course ) {
//	$errormsg .= "<label for=\"course\">■ご希望のコース" . $msg2 . "</label>\n" ;
//	$erCourse = $erBg;
//}

/* エラーメッセージ */
if( $errormsg ){
	$errormsg = "<p class=\"red\">" . $errormsg . "</p>";
} else {
	$step = 2;
}

include_once("../lib/header.php");

?>

<?php

// 入力内容に不備があった場合
if( $step == 1 ) {
?>
                <div id="toiawase_form">
					<h1 class="mB30"><img src="/images/contact_03.png" width="632" height="45" alt="お問い合わせ" /></h1>
					<div class="i-pt clearfix mB20 mR10">
						<h2 class="mB20 bg-check blue font20">お問い合わせ・無料説明会のお申し込みフォーム</h2>
						<p><span class="red">必須</span>項目は、必ずご入力お願いいたします。</p>
						<div class="section-lv2 contact">
<?= $errormsg; ?>
						<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<? inputHTML(); ?>
						<p class="sp3 center mT10"><input class="file over1" type="image" src="/images/bt_39.png" width="146" height="32"/></p>
						<input type="hidden" value="1" name="step" />
						</form>
						</div><!-- /.section-lv2 -->
					</div><!-- /.i-pt -->
                </div><!-- /#toiawase_form -->
				</div><!-- /.block -->
				</div><!-- /#kasou -->
<?php

// 確認画面
} else {

?>
                <div id="toiawase_form">
					<h1 class="mB30"><img src="/images/contact_03.png" width="632" height="45" alt="お問い合わせ" /></h1>
					<div class="i-pt clearfix mB20 mR10">
						<h2 class="mB20 bg-check blue font20">お問い合わせ・無料説明会のお申し込みフォーム</h2>
						<p>入力内容をご確認ください。</p>
						<div class="section-lv2 contact">

						<form action="biz-online_complete.php" method="post">

						<table class="inq_form">
						<tr>
							<th>ご応募教室</th>
							<td><?= $room[$rid]["name"] ?>教室</td>
						</tr>
						<tr>
							<th>お名前　<span class="red">必須</span></th>
							<td><? textConf( $name, name ) ?></td>
						</tr>
						<tr>
							<th>フリガナ　<span class="red">必須</span></th>
							<td><? textConf( $kana, kana ) ?></td>
						</tr>
						<tr>
							<th>電話番号　<span class="red">必須</span></th>
							<td><? textConf( $phone, phone ) ?></td>
						</tr>
						<tr>
							<th>メールアドレス</th>
							<td><? textConf( $mail, mail ) ?></td>
						</tr>
						<tr>
							<th>住所</th>
							<td><? textConf( $address, address ) ?></td>
						</tr>
						<tr>
							<th>無料説明会希望日　<span class="red">必須</span></th>
							<td><? textConf( $nichiji_1, nichiji_1 ) ?>月 <? textConf( $nichiji_2, nichiji_2 ) ?>日 <? textConf( $nichiji_3, nichiji_3 ) ?>
                            <p>※後程、お電話にてお時間の確認をさせていただきます。</p></td>
						</tr>
						<!--<tr>
							<th>ご希望のコース　<span class="red">必須</span></th>
							<td><? textConf( $course, course ) ?></td>
						</tr>-->
						<tr>
							<th>ご質問など</th>
							<td><?= nl2br( $question ) ?><input type="hidden" value="<?= $question ?>" name="question"></td>
						</tr>
						</table>

						<p class="sp3 center mT10"><input class="file over1" type="image" src="/images/bt_40.png" width="146" height="32"/></p>
						<input type="hidden" value="2" name="step" />
						</form>
						</div><!-- /.section-lv2 -->
					</div><!-- /.i-pt -->
                </div><!-- /#toiawase_form -->
				</div><!-- /.block -->
				</div><!-- /#kasou -->
<?php
} // エラーチェック or 確認画面分岐終了
include_once("../lib/footer.php");
} // stepを踏まないアクセスを回避
?>