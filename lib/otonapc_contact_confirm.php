<?php

require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/otonapc_contact_options.php");

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

/* エラーメッセージ */
if( $errormsg ){
	$errormsg = "<p class=\"red\">" . $errormsg . "</p>";
} else {
	$step = 2;
}

include_once("../lib/otonapc_header_contact.php");

?>

<?php

// 入力内容に不備があった場合
if( $step == 1 ) {
?>
                <div id="toiawase_form">
					<div class="i-pt clearfix mB20 mR10">
						<h2 class="mB20 bg-check blue font16"><img src="/images/mos2010/ico-mail.gif" width="42" height="30" alt="メール" /> お問い合わせ・無料体験のお申し込みフォーム</h2>
                        <div class="mB20"><img src="/images/img-form_step1.jpg" width="810" height="55" alt="お客様情報入力" /></div>
						<p><span class="red">必須</span>項目は、必ずご入力お願いいたします。</p>
						<div class="section-lv2 contact">
<?= $errormsg; ?>
						<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<? inputHTML(); ?>
						<p class="sp3 center mT10"><input class="file over1" type="image" src="/images/btn-inq_confirm.jpg" width="500" height="70"/></p>
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
					<div class="i-pt clearfix mB20 mR10">
						<h2 class="mB20 bg-check blue font16"><img src="/images/mos2010/ico-mail.gif" width="42" height="30" alt="メール" /> お問い合わせ・無料体験のお申し込みフォーム</h2>
                        <div class="mB20"><img src="/images/img-form_step2.jpg" width="810" height="55" alt="入力内容確認" /></div>
						<p>入力内容をご確認ください。</p>
						<div class="section-lv2 contact">

						<form action="otonapc_contact_complete.php" method="post">

						<table class="inq_form">
						<tr>
							<th>ご応募教室</th>
							<td><?= $room[$rid]["name"] ?></td>
						</tr>
						<tr>
							<th>お名前<span class="red">必須</span></th>
							<td><? textConf( $name, name ) ?></td>
						</tr>
						<tr>
							<th>フリガナ<span class="red">必須</span></th>
							<td><? textConf( $kana, kana ) ?></td>
						</tr>
						<tr>
							<th>電話番号<span class="red">必須</span></th>
							<td><? textConf( $phone, phone ) ?></td>
						</tr>
						<tr>
							<th>メールアドレス</th>
							<td><? textConf( $mail, mail ) ?></td>
						</tr>
						<tr>
							<th>ご希望のコースは？<br />（複数選択可）</th>
							<td><? checkboxConf( $_POST[pur], "purpose" ); ?></td>
						</tr>
						<tr>
							<th>無料体験のお申し込み</th>
							<td><? textConf( $free, free ) ?>
<!--
							<? textConf( $month, month, "", "月" ) ?>
							<? textConf( $day, day, "", "日" ) ?>
							<? textConf( $time, time, "", "時頃" ) ?>
-->
							</td>
						</tr>
						<tr>
							<th>ご質問など</th>
							<td><?= nl2br( $question ) ?><input type="hidden" value="<?= $question ?>" name="question"></td>
						</tr>
						</table>

						<p class="sp3 center mT10"><input class="file over1" type="image" src="/images/btn-inq_complete.jpg" width="500" height="70"/></p>
						<input type="hidden" value="2" name="step" />
						</form>
						</div><!-- /.section-lv2 -->
					</div><!-- /.i-pt -->
                </div><!-- /#toiawase_form -->
				</div><!-- /.block -->
				</div><!-- /#kasou -->
<?php
} // エラーチェック or 確認画面分岐終了
include_once("../lib/otonapc_footer_contact.php");
} // stepを踏まないアクセスを回避
?>