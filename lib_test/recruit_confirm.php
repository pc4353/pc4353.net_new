<?php
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
if( !$pattern ) {
	$errormsg .= "<label for=\"pattern\">■ご希望の雇用形態" . $msg2 . "</label><br />\n" ;
	$erPattern = $erBg;
}
if( !$gender ) {
	$errormsg .= "<label for=\"gender\">■性別" . $msg2 . "</label><br />\n" ;
	$erGender = $erBg;
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
						<h2 class="mB20 bg-check blue font16">インストラクター応募フォーム</h2>
						<p><span class="red">※</span>は必須項目になります。ご入力お願いいたします。</p>
						<div class="section-lv2 contact">
<?= $errormsg; ?>
						<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
<? inputHTML(); ?>
						<p class="sp3 center mT10"><input class="file over1" type="image" src="/images/bt_39.png" width="146" height="32"/></p>
						<input type="hidden" value="1" name="step" />
						</form>
						</div><!-- /.section-lv2 -->
					</div><!-- /.i-pt -->
				</div><!-- /.block -->
<?php
// 確認画面
} else {
?>
						<h2 class="mB20 bg-check blue font16">インストラクター応募フォーム</h2>
						<p>入力内容をご確認ください。</p>
						<div class="section-lv2 contact">
						<form action="recruit_complete.php" method="post">
						<table>
						<tr>
							<th>ご応募教室</th>
							<td><?= $room[$rid]["name"] ?>教室</td>
						</tr>
						<tr>
							<th>お名前<span class="red">※</span></th>
							<td><?= $name ?><input type="hidden" value="<?= $name ?>" name="name" /></td>
						</tr>
						<tr>
							<th>フリガナ<span class="red">※</span></th>
							<td><?= $kana ?><input type="hidden" value="<?= $kana ?>" name="kana" /></td>
						</tr>
						<tr>
							<th>ご希望の雇用形態<span class="red">※</span></th>
							<td><?= $pattern ?><input type="hidden" value="<?= $pattern ?>" name="pattern" /></td></tr>
						<tr>
							<th>性別<span class="red">※</span></th>
							<td><?= $gender ?><input type="hidden" value="<?= $gender ?>" name="gender" /></td></tr>
						<tr>
							<th>電話番号<span class="red">※</span></th>
							<td><?= $phone ?><input type="hidden" value="<?= $phone ?>" name="phone" /></td>
						</tr>
						<tr>
							<th>メールアドレス<span class="red">※</span></th>
							<td><?= $mail ?><input type="hidden" value="<?= $mail ?>" name="mail" /></td>
						</tr>
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
				</div><!-- /.block -->
<?php
} // エラーチェック or 確認画面分岐終了
include_once("../lib/footer.php");
} // stepを踏まないアクセスを回避
?>