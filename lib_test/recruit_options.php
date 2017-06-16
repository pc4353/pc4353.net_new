<?php

/* 共通functionの読み込み */
include_once( "functions.php" );

/* 送付先アドレス */
define( "RECRUIT_MAIL_TO", "jinji@cheery.co.jp", "dtsubaki@pc4353.com" );

/* このスクリプトのパス */
$script_path = "/" . $room[$id][dir] . "/recruit.php";

/*========================================
入力用HTML
========================================*/
function inputHTML() {
global $room, $rid;
global $erName, $erKana, $erPattern, $erGender, $erPhone, $erMail;
global $name, $kana, $pattern, $gender, $phone, $mail, $question;
?>
<table>
<tr>
	<th>ご応募教室</th>
	<td><?= $room[$rid]["name"] ?>教室</td>
</tr>
<tr>
	<th>お名前<span class="red">※</span></th>
	<td<?= $erName ?>><input type="text" value="<?= $name ?>" name="name" maxlength="20" size="40"></td>
</tr>
<tr>
	<th>フリガナ<span class="red">※</span></th>
	<td<?= $erKana ?>><input type="text" value="<?= $kana ?>" name="kana" maxlength="20" size="40"></td>
</tr>
<tr>
	<th>ご希望の雇用形態<span class="red">※</span></th>
	<td<?= $erPattern ?>><label><input type="radio" class="nBn" value="インストラクター（パート・アルバイト）" name="pattern"<? if( $pattern == "インストラクター（パート・アルバイト）" ) { echo " checked"; } ?>>インストラクター（パート・アルバイト）</label><br />
						<label><input type="radio" class="nBn" value="教室長候補（地域限定 正社員 インストラクター）" name="pattern"<? if( $pattern == "教室長候補（地域限定 正社員 インストラクター）" ) { echo " checked"; } ?>>教室長候補（地域限定 正社員 インストラクター）</label><br />
</tr>
<tr>
	<th>性別<span class="red">※</span></th>
	<td<?= $erGender ?>><label><input type="radio" class="nBn" value="男性" name="gender"<? if( $gender == "男性" ) { echo " checked"; } ?>>男性</label>　
						<label><input type="radio" class="nBn" value="女性" name="gender"<? if( $gender == "女性" ) { echo " checked"; } ?>>女性</label></td>
</tr>
<tr>
	<th>電話番号<span class="red">※</span></th>
	<td<?= $erPhone ?>><input type="text" value="<?= $phone ?>" name="phone" maxlength="15" size="30"></td>
</tr>
<tr>
	<th>メールアドレス<span class="red">※</span></th>
	<td<?= $erMail ?>><input type="text" value="<?= $mail ?>" name="mail" maxlength="100" size="40"><br />
	<p>携帯アドレスをご入力の場合は、受信拒否設定などによるメールの不達が起こらないよう、事前の設定確認をお願いします。</p></td>
</tr>
<tr>
	<th>ご質問など</th>
	<td><textarea name="question" rows="8" cols="44"><?= $question ?></textarea></td>
</tr>
</table>
<?php
}
?>
