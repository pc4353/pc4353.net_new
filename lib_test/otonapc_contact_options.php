<?php

/* 共通functionの読み込み */
include_once( "functions.php" );

/* 送付先アドレス */
define( "CONTACT_MAIL_TO", "student@pc4353.net" );

/* このスクリプトのパス */
$script_path = "/" . $room[$id][dir] . "/otonapc_contact.php";

/*========================================
お電話でのお問い合わせHTML
========================================*/
function telHTML() {
global $room, $id;
?>
						<h2 class="bg-check blue font16 mB20"><img src="/images/mos2010/ico-tel.gif" width="30" height="30" alt="電話" /> お電話でのお問い合わせ・無料体験のお申し込み</h2>
						<div class="clearfix">
						<img src="/images/contact_62.jpg" class="imgleft" />
						<div class="section-lv2 moz2 mB30 clearfix">
							<p>お気軽にお電話下さい！</p>
							<p><span class="font30 red">tel.<?=$room[$id][phone]?></span><br />
							・お電話の際は、必ず<strong>「ホームページを見た」とお伝えください。</strong></p>
						</div><!-- /.section-lv2 -->
						</div>
<?php
}
/*========================================
入力用HTML
========================================*/
function inputHTML() {
global $room, $rid;
global $erName, $erKana, $erPhone;
global $name, $kana, $phone, $mail, $purpose, $free, $month, $day, $time, $question;
?>
<table class="inq_form">
<tr>
	<th>ご応募教室</th>
	<td><?= $room[$rid]["name"] ?></td>
</tr>
<tr>
	<th>お名前<span class="red">必須</span></th>
	<td<?= $erName ?>>例）市民花子<br /><input type="text" value="<?= $name ?>" name="name" maxlength="20" size="40"></td>
</tr>
<tr>
	<th>フリガナ<span class="red">必須</span></th>
	<td<?= $erKana ?>>例）シミンハナコ<br /><input type="text" value="<?= $kana ?>" name="kana" maxlength="20" size="40"></td>
</tr>
<tr>
	<th>電話番号（携帯可）<span class="red">必須</span></th>
	<td<?= $erPhone ?>>例）09000000000<br /><input type="text" value="<?= $phone ?>" name="phone" maxlength="15" size="30"></td>
</tr>
<tr>
	<th>メールアドレス</th>
	<td><input type="text" value="<?= $mail ?>" name="mail" maxlength="100" size="40"></td>
</tr>
<tr>
	<th>ご希望のコースは？<br />（複数選択可）</th>
	<td><ul>
<?php
$purpose[0] = "パソコンコース";
$purpose[1] = "iPadコース";
$purpose[2] = "プログラミングで脳トレコース";

foreach( $purpose as $key => $value ) {
?>
		<li><label><input type="checkbox" class="nBn" value="<?= $purpose[$key] ?>" name="pur[<?=$key?>]"<? if( $_POST[pur][$key] ) { echo " checked=checked"; } ?>><?= $value ?></label></li>
<?php
}
?>
	</ul></td>
</tr>
<tr>
	<th>無料体験のお申し込み</th>
	<td><label><input type="radio" class="nBn" value="する" name="free"<? if( $free == "する" ) { echo " checked"; } ?>>する</label>&nbsp;&nbsp;
		<label><input type="radio" class="nBn" value="しない" name="free"<? if( $free == "しない" ) { echo " checked"; } ?>>しない</label>
		<p class="red">無料体験をご希望の方には、教室から折り返しご連絡をさせていただきます。ご希望の訪問日時などはその際にお伝えください。<br />
		なお、ご連絡には少々お時間をいただく場合がありますので、お急ぎの方は直接、お電話でお申し込みください。</p>
<?/*
		<select name="month">
<?= getOptionHTML( 1, 12, $month, "--" ) ?>
		</select>月
		<select name="day">
<?= getOptionHTML( 1, 31, $day, "--" ) ?>
		</select>日
		<select name="time">
<?= getOptionHTML( 9, 20, $time, "--" ) ?>
		</select>時頃の訪問
*/?>
</td>
</tr>
<tr>
	<th>ご質問など</th>
	<td><textarea name="question" rows="8" cols="44"><?= $question ?></textarea></td>
</tr>
</table>
<?php
}
?>