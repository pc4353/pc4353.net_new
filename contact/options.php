<?php

/* 共通functionの読み込み */
include_once( "../lib/functions.php" );

/* 送付先アドレス */
define( "CONTACT_MAIL_TO", "student@pc4353.net" );
//define( "CONTACT_MAIL_TO", "dtsubaki@pc4353.com" );
//define( "CONTACT_MAIL_TO", "test@ignis.co.jp" );

/*========================================
入力用HTML
========================================*/
function inputHTML() {
global $erQuestion, $erName, $erKana, $erPhone, $erMail, $erPref1;
global $question, $name, $kana, $phone, $mail, $pref1, $address, $member, $room1, $room2, $way, $other;
?>
<table class="about">
<tr>
	<th>お問い合わせ内容<span class="red">必須</span></th>
	<td<?= $erQuestion ?>><textarea name="question" id="question" rows="8" cols="44"><?= $question ?></textarea></td>
</tr>
<tr>
	<th>お名前<span class="red">必須</span></th>
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
	<th>お住いの都道府県<span class="red">必須</span></th>
	<td<?= $erPref1 ?>><input type="text" value="<?= $pref1 ?>" name="pref1" maxlength="120" size="60"></td>
</tr>
<tr>
	<th>ご住所</th>
	<td><input type="text" value="<?= $address ?>" name="address" maxlength="120" size="60"></td>
</tr>
<tr>
	<td colspan="2">よろしければ、下記についてもご回答ください。</td>
</tr>
<tr>
	<th>「パソコン市民講座」に通っていますか？</th>
	<td><label><input type="radio" value="通っていない" name="member"<? if( $member == "通っていない" ) { echo " checked"; } ?>>通っていない</label><br />
		<label><input type="radio" value="現在受講中" name="member"<? if( $member == "現在受講中" ) { echo " checked"; } ?>>現在受講中</label> <input type="text" class="sotu2" value="<?= $room1 ?>" name="room1" maxlength="40" size="20"  style="height:20px;">教室<br />
		<label><input type="radio" value="卒業している" name="member"<? if( $member == "卒業している" ) { echo " checked"; } ?>>卒業している</label> <input type="text" class="sotu1" value="<?= $room2 ?>" name="room2" maxlength="40" size="20" style="height:20px;">教室<br />
		<label><input type="radio" value="他のパソコン教室に通っている" name="member"<? if( $member == "他のパソコン教室に通っている" ) { echo " checked"; } ?>>他のパソコン教室に通っている</label></td>
</tr>
<tr>
	<th>どうやって「パソコン市民講座」をお知りになりましたか？（複数選択可能）</th>
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