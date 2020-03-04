<?php

/* 共通functionの読み込み */
include_once( "../lib/functions.php" );

/* 送付先アドレス */
define( "CONTACT_MAIL_TO_1", "student@pc4353.net" );
define( "CONTACT_MAIL_TO_2", "tooseki@pc4353.com" );

/*========================================
入力用HTML
========================================*/
function inputHTML() {
global $erQuestion, $erName, $erKana, $erPhone, $erMail, $erPref1;
global $question, $corporate, $name, $kana, $phone, $mail, $pref1, $way, $other;
?>
<table class="about">
<tr>
	<th width="30%">お問い合わせ内容<span class="red">必須</span></th>
	<td<?= $erQuestion ?>><textarea name="question" id="question" rows="8" cols="44"><?= $question ?></textarea></td>
</tr>
<tr>
	<th>法人様名</th>
	<td><input type="text" value="<?= $corporate ?>" name="corporate" id="corporate" maxlength="20" size="40"></td>
</tr>
<tr>
	<th>ご担当者名<span class="red">必須</span></th>
	<td<?= $erName ?>><input type="text" value="<?= $name ?>" name="name" id="name" maxlength="20" size="40"></td>
</tr>
<tr>
	<th>ふりがな<span class="red">必須</span></th>
	<td<?= $erKana ?>><input type="text" value="<?= $kana ?>" name="kana" id="kana" maxlength="20" size="40"></td>
</tr>
<tr>
	<th>電話番号（携帯可）<span class="red">必須</span></th>
	<td<?= $erPhone ?>><input type="tel" value="<?= $phone ?>" name="phone" id="phone" maxlength="15" size="30"></td>
</tr>
<tr>
	<th>メールアドレス<span class="red">必須</span></th>
	<td<?= $erMail ?>><input type="email" value="<?= $mail ?>" name="mail" id="mail" maxlength="100" size="40"></td>
</tr>
<tr>
	<th>所在地（都道府県）<span class="red">必須</span></th>
	<td<?= $erPref1 ?>><input type="text" value="<?= $pref1 ?>" name="pref1" maxlength="100" size="40"></td>
</tr>
<tr>
	<td colspan="2">よろしければ、下記についてもご回答ください。</td>
</tr>
<tr>
	<th>どうやって「パソコン市民講座」をお知りになりましたか？<br />（複数選択可能）</th>
	<td>
<?php
$way[0] = "チラシを見て";
$way[1] = "教室看板を見て";
$way[2] = "知人のご紹介";
$way[3] = "ホームページを検索して";
$way[4] = "その他";

foreach( $way as $key => $value ) {
?>
		<label><input type="checkbox" value="<?= $way[$key] ?>" name="wa[<?=$key?>]"<? if( $_POST[wa][$key] ) { echo " checked=checked"; } ?>><?= $value ?></label>
<?php
$i += 1;
if( $i == 2 || $i == 4 ) { echo "<br />"; }
}
?>
<input type="text" value="<?= $other ?>" name="other" maxlength="100" size="40"></td>
</tr>
</table>

<p class="center mgnT20"><input type="submit" value="確認画面へ" /></p>
<?php
}
?>