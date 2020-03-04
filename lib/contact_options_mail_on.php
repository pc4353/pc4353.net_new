<?php

/* 共通functionの読み込み */
include_once( "functions.php" );

/* 送付先アドレス */
define( "CONTACT_MAIL_TO", "student@pc4353.net" );

/* このスクリプトのパス */
$script_path = "/" . $room[$id][dir] . "/contact.php";

/*========================================
お電話でのお問い合わせHTML
========================================*/
function telHTML() {
global $room, $id;
?>
						<div class="pc-only">
						<h2 class="bg-check blue mB20"><img src="/images/mos2010/ico-tel.gif" width="30" height="30" alt="電話" /> お電話でのお問い合わせ・無料体験のお申し込み</h2>
						<div class="clearfix">
						<img src="/images/contact_62.jpg" class="imgleft" />
						<div class="section-lv2 moz2 mB30 clearfix">
							<p>お気軽にお電話下さい！</p>
							<p><span class="font30 red">tel.<?=$room[$id][phone]?></span><br />
							・お電話の際は、必ず<strong>「ホームページを見た」とお伝えください。</strong><br />
							・営業時間は<a href="/<?=$room[$id][dir]?>/about.php#about4" target="_blank">こちらをご覧ください</a></p>
						</div><!-- /.section-lv2 -->
						</div>
						</div>
<?php
}
/*========================================
入力用HTML
========================================*/
function inputHTML() {
global $room, $rid;
global $erName, $erKana, $erPhone, $erMail;
global $name, $kana, $old, $student, $phone, $mail, $purpose, $trigger, $event, $other, $trigger_other, $free, $month_1, $day_1, $time_1, $month_2, $day_2, $time_2, $question;
?>
<table class="inq_form">
<tr>
	<th>お申込教室</th>
	<td><?= $room[$rid]["name"] ?>教室</td>
</tr>
<tr>
	<th>お名前<span class="red">必須</span></th>
	<td<?= $erName ?>><input type="text" value="<?= $name ?>" name="name" maxlength="20"><br />例）市民花子</td>
</tr>
<tr>
	<th>ふりがな<span class="red">必須</span></th>
	<td<?= $erKana ?>><input type="text" value="<?= $kana ?>" name="kana" maxlength="20"><br />例）しみんはなこ</td>
</tr>
<tr>
	<th>電話番号（携帯可）<span class="red">必須</span></th>
	<td<?= $erPhone ?>><input type="tel" value="<?= $phone ?>" name="phone" maxlength="15"><br />例）09012345678（ハイフンなし）</td>
</tr>
<tr>
	<th>メールアドレス<span class="red">必須</span></th>
	<td<?= $erMail ?>><input type="email" value="<?= $mail ?>" name="mail" maxlength="100"><br />例）example@pc4353.com
	        <p class="red">※携帯アドレスをご使用の場合、受信設定で【@pc4353.com】からのメールが受信できるよう設定変更をお願い致します。</p>
	</td>
</tr>
<tr>
	<th>年代</th>
	<td><ul class="old clearfix">
    <li><label><input type="radio" class="nBn" value="10代" name="old"<? if( $old == "10代" ) { echo " checked"; } ?>> 10代</label></li>
	<li><label><input type="radio" class="nBn" value="20代" name="old"<? if( $old == "20代" ) { echo " checked"; } ?>> 20代</label></li>
	<li><label><input type="radio" class="nBn" value="30代" name="old"<? if( $old == "30代" ) { echo " checked"; } ?>> 30代</label></li>
    <li><label><input type="radio" class="nBn" value="40代" name="old"<? if( $old == "40代" ) { echo " checked"; } ?>> 40代</label></li>
	<li><label><input type="radio" class="nBn" value="50代" name="old"<? if( $old == "50代" ) { echo " checked"; } ?>> 50代</label></li>
	<li><label><input type="radio" class="nBn" value="60代" name="old"<? if( $old == "60代" ) { echo " checked"; } ?>> 60代</label></li>
    <li><label><input type="radio" class="nBn" value="70代" name="old"<? if( $old == "70代" ) { echo " checked"; } ?>> 70代</label></li>
	<li><label><input type="radio" class="nBn" value="80代" name="old"<? if( $old == "80代" ) { echo " checked"; } ?>> 80代</label></li>
	</ul></td>
</tr>
<tr>
	<th>学生種別</th>
	<td><ul class="old clearfix">
    <li><label><input type="radio" class="nBn" value="小学生" name="student"<? if( $student == "小学生" ) { echo " checked"; } ?>> 小学生</label></li>
    <li><label><input type="radio" class="nBn" value="中学生" name="student"<? if( $student == "中学生" ) { echo " checked"; } ?>> 中学生</label></li>
    <li><label><input type="radio" class="nBn" value="高校生" name="student"<? if( $student == "高校生" ) { echo " checked"; } ?>> 高校生</label></li>
    <li><label><input type="radio" class="nBn" value="大学生" name="student"<? if( $student == "大学生" ) { echo " checked"; } ?>> 大学生</label></li>
    <li><label><input type="radio" class="nBn" value="専門学生" name="student"<? if( $student == "専門学生" ) { echo " checked"; } ?>> 専門学生</label></li>
	</ul></td>
</tr>
<tr>
	<th>あなたの目的は？<br class="pc-only">（複数選択可）</th>
	<td><ul>
<?php
if( $room[$rid][spp] == "1" ) {
//SPP実施校
?>
	<?php
	$purpose[0] = "はじめてのパソコン！";
	$purpose[1] = "インターネットがしたい！";
	$purpose[2] = "趣味で楽しみたい！";
	$purpose[3] = "仕事に活かしたい！";
	$purpose[4] = "学校で必要となった！";
	$purpose[5] = "転職・就活に役立てたい！";
	$purpose[6] = "資格（サーティファイ・MOS）を取得したい！";
	$purpose[7] = "タブレット・スマホを使いこなしたい！";
	$purpose[8] = "スタープログラミング個別（プログラミング講座）";
	$purpose[9] = "その他";

	foreach( $purpose as $key => $value ) {
	?>
			<li><label><input type="checkbox" class="nBn" value="<?= $purpose[$key] ?>" name="pur[<?=$key?>]"<? if( $_POST[pur][$key] ) { echo " checked=checked"; } ?>> <?= $value ?></label></li>
	<?php
	}
	?>
<?php
} else {
//SPPなし
?>
	<?php
	$purpose[0] = "はじめてのパソコン！";
	$purpose[1] = "インターネットがしたい！";
	$purpose[2] = "趣味で楽しみたい！";
	$purpose[3] = "仕事に活かしたい！";
	$purpose[4] = "学校で必要となった！";
	$purpose[5] = "転職・就活に役立てたい！";
	$purpose[6] = "資格（サーティファイ・MOS）を取得したい！";
	$purpose[7] = "タブレット・スマホを使いこなしたい！";
	$purpose[8] = "その他";

	foreach( $purpose as $key => $value ) {
	?>
			<li><label><input type="checkbox" class="nBn" value="<?= $purpose[$key] ?>" name="pur[<?=$key?>]"<? if( $_POST[pur][$key] ) { echo " checked=checked"; } ?>> <?= $value ?></label></li>
	<?php
	}
	?>
<?php
}
?>
<li><input type="text" value="<?= $other ?>" name="other" maxlength="100" /></li>
	</ul></td>
</tr>
<tr>
	<th>市民講座を何で知りましたか？<br>（複数選択可）</th>
	<td><ul>
<?php
$trigger[0] = "インターネット検索";
$trigger[1] = "手配りチラシ";
$trigger[2] = "折込チラシ";
$trigger[3] = "その他";

foreach( $trigger as $key => $value ) {
?>
		<li><label><input type="checkbox" class="nBn" value="<?= $trigger[$key] ?>" name="tri[<?=$key?>]"<? if( $_POST[tri][$key] ) { echo " checked=checked"; } ?>> <?= $value ?></label></li>
<?php
}
?>
<li><input type="text" value="<?= $trigger_other ?>" name="trigger_other" maxlength="100" /></li>
	</ul></td>
</tr>
<tr>
	<th>無料体験のお申し込み</th>
	<td><ul class="old clearfix">
    <li><label><input type="radio" class="nBn" value="する" name="free"<? if( $free == "する" ) { echo " checked"; } ?>> する</label></li>
    <li><label><input type="radio" class="nBn" value="しない" name="free"<? if( $free == "しない" ) { echo " checked"; } ?>> しない</label></li>
</ul></td>
</tr>
<tr>
	<th>無料体験希望日</th>
    <td>第1希望&nbsp;&nbsp;<br class="sp-only">
		<select name="month_1">
<?= getOptionHTML( 1, 12, $month_1, "--" ) ?>
		</select>月&nbsp;&nbsp;
		<select name="day_1">
<?= getOptionHTML( 1, 31, $day_1, "--" ) ?>
		</select>日&nbsp;&nbsp;
		<select name="time_1">
<?= getOptionHTML( 9, 19, $time_1, "--" ) ?>
		</select>時頃<br /><br class="sp-only">
		第2希望&nbsp;&nbsp;<br class="sp-only">
		<select name="month_2">
<?= getOptionHTML( 1, 12, $month_2, "--" ) ?>
		</select>月&nbsp;&nbsp;
		<select name="day_2">
<?= getOptionHTML( 1, 31, $day_2, "--" ) ?>
		</select>日&nbsp;&nbsp;
		<select name="time_2">
<?= getOptionHTML( 9, 19, $time_2, "--" ) ?>
		</select>時頃<br class="sp-only"><br class="sp-only">
	<?php
	if( $room[$rid]["close"] == "0" ) {
    ?>
        <p class="red">※後程、お電話にてお時間の確認をさせていただきます。<br />
		なお、ご連絡には少々お時間をいただく場合がありますので、お急ぎの方は直接、お電話でお申し込みください。</p>
	<?php
	} else {
    //休校日ありver
    ?>
        <p class="red"><strong>※希望日は本日から2日後以降としてください。</strong><br />
        ※後程、お電話にてお時間の確認をさせていただきます。<br />
        ※お急ぎの方は直接、お電話でお申し込みください。</p>
	<?php
	}
    ?>
        </td>
</tr>
<tr>
	<th>開講時間</th>
	<td><?= $room[$rid]["open"] ?></td>
</tr>
<tr>
	<th>ご質問など</th>
	<td><textarea name="question" rows="8" cols="44"><?= $question ?></textarea></td>
</tr>
</table>
<?php
}
?>