<?php

/* 共通functionの読み込み */
include_once( "functions.php" );

/* 送付先アドレス */
define( "CONTACT_MAIL_TO", "ymotoroku@pc4353.com" );

/* このスクリプトのパス */
$script_path = "/" . $room[$id][dir] . "/doc_contact.php";

/*========================================
お電話でのお問い合わせHTML
========================================*/
function telHTML() {
global $room, $id;
?>
						<div class="pc-only">
						<h2 class="bg-check blue font20 mB20"><img src="/images/mos2010/ico-tel.gif" width="30" height="30" alt="電話" /> お電話でのお問い合わせ・資料請求のお申し込み</h2>
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
global $erName, $erKana, $erZip, $erAddrs, $erPhone;
global $name, $kana, $zip, $addr, $addrs, $phone, $mail, $old, $purpose, $event, $other, $free, $month, $day, $time, $nichiji, $nichiji_1, $nichiji_2, $nichiji_3, $question;
?>
<table class="inq_form">
<tr>
	<th>お申込教室</th>
	<td><?= $room[$rid]["name"] ?>教室</td>
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
	<th>郵便番号<span class="red">必須</span></th>
	<td<?= $erZip ?>>例）1000001<br /><input type="text" name="zip" value="<?= $zip ?>" placeholder="　" maxlength="15" size="15">　<br class="sp-only">【入力すると住所が自動入力されます】</td>
</tr>
<tr>
	<th>住所<span class="red">必須</span></th>
	<td<?= $erAddrs ?>><input type="text" value="<?= $addr ?>" name="addr" maxlength="100" size="40"><br /><input type="text" value="<?= $addrs ?>" name="addrs" placeholder="番地以降を入力" maxlength="100" size="40"></td>
</tr>
<tr>
	<th>電話番号（携帯可）<span class="red">必須</span></th>
	<td<?= $erPhone ?>>例）09000000000<br /><input type="text" value="<?= $phone ?>" name="phone" maxlength="15" size="30"></td>
</tr>
<tr>
	<th>メールアドレス</th>
	<td>例）example@pc4353.com<br /><input type="text" value="<?= $mail ?>" name="mail" maxlength="100" size="40"></td>
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
	<th>あなたの目的は？<br class="pc-only">（複数選択可）</th>
	<td><ul>
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
<li><input type="text" value="<?= $other ?>" name="other" maxlength="100" size="40" /></li>
	</ul></td>
</tr>
<tr>
	<th>無料体験のお申し込み</th>
	<td><label><input type="radio" class="nBn" value="する" name="free"<? if( $free == "する" ) { echo " checked"; } ?>> する</label>&nbsp;&nbsp;
		<label><input type="radio" class="nBn" value="しない" name="free"<? if( $free == "しない" ) { echo " checked"; } ?>> しない</label>
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
	<th>無料体験希望日</th>
    <td><select name="nichiji_1">
    	<option value="--"<? if( $nichiji_1 == "--" ) { echo " selected"; } ?>>--</option>
    	<option value="1"<? if( $nichiji_1 == "1" ) { echo " selected"; } ?>>1</option>
    	<option value="2"<? if( $nichiji_1 == "2" ) { echo " selected"; } ?>>2</option>
    	<option value="3"<? if( $nichiji_1 == "3" ) { echo " selected"; } ?>>3</option>
    	<option value="4"<? if( $nichiji_1 == "4" ) { echo " selected"; } ?>>4</option>
    	<option value="5"<? if( $nichiji_1 == "5" ) { echo " selected"; } ?>>5</option>
    	<option value="6"<? if( $nichiji_1 == "6" ) { echo " selected"; } ?>>6</option>
    	<option value="7"<? if( $nichiji_1 == "7" ) { echo " selected"; } ?>>7</option>
    	<option value="8"<? if( $nichiji_1 == "8" ) { echo " selected"; } ?>>8</option>
    	<option value="9"<? if( $nichiji_1 == "9" ) { echo " selected"; } ?>>9</option>
    	<option value="10"<? if( $nichiji_1 == "10" ) { echo " selected"; } ?>>10</option>
    	<option value="11"<? if( $nichiji_1 == "11" ) { echo " selected"; } ?>>11</option>
    	<option value="12"<? if( $nichiji_1 == "12" ) { echo " selected"; } ?>>12</option>
        </select>月&nbsp;
        <select name="nichiji_2">
    	<option value="--"<? if( $nichiji_2 == "--" ) { echo " selected"; } ?>>--</option>
    	<option value="1"<? if( $nichiji_2 == "1" ) { echo " selected"; } ?>>1</option>
    	<option value="2"<? if( $nichiji_2 == "2" ) { echo " selected"; } ?>>2</option>
    	<option value="3"<? if( $nichiji_2 == "3" ) { echo " selected"; } ?>>3</option>
    	<option value="4"<? if( $nichiji_2 == "4" ) { echo " selected"; } ?>>4</option>
    	<option value="5"<? if( $nichiji_2 == "5" ) { echo " selected"; } ?>>5</option>
    	<option value="6"<? if( $nichiji_2 == "6" ) { echo " selected"; } ?>>6</option>
    	<option value="7"<? if( $nichiji_2 == "7" ) { echo " selected"; } ?>>7</option>
    	<option value="8"<? if( $nichiji_2 == "8" ) { echo " selected"; } ?>>8</option>
    	<option value="9"<? if( $nichiji_2 == "9" ) { echo " selected"; } ?>>9</option>
    	<option value="10"<? if( $nichiji_2 == "10" ) { echo " selected"; } ?>>10</option>
    	<option value="11"<? if( $nichiji_2 == "11" ) { echo " selected"; } ?>>11</option>
    	<option value="12"<? if( $nichiji_2 == "12" ) { echo " selected"; } ?>>12</option>
    	<option value="13"<? if( $nichiji_2 == "13" ) { echo " selected"; } ?>>13</option>
    	<option value="14"<? if( $nichiji_2 == "14" ) { echo " selected"; } ?>>14</option>
    	<option value="15"<? if( $nichiji_2 == "15" ) { echo " selected"; } ?>>15</option>
    	<option value="16"<? if( $nichiji_2 == "16" ) { echo " selected"; } ?>>16</option>
    	<option value="17"<? if( $nichiji_2 == "17" ) { echo " selected"; } ?>>17</option>
    	<option value="18"<? if( $nichiji_2 == "18" ) { echo " selected"; } ?>>18</option>
    	<option value="19"<? if( $nichiji_2 == "19" ) { echo " selected"; } ?>>19</option>
    	<option value="20"<? if( $nichiji_2 == "20" ) { echo " selected"; } ?>>20</option>
    	<option value="21"<? if( $nichiji_2 == "21" ) { echo " selected"; } ?>>21</option>
    	<option value="22"<? if( $nichiji_2 == "22" ) { echo " selected"; } ?>>22</option>
    	<option value="23"<? if( $nichiji_2 == "23" ) { echo " selected"; } ?>>23</option>
    	<option value="24"<? if( $nichiji_2 == "24" ) { echo " selected"; } ?>>24</option>
    	<option value="25"<? if( $nichiji_2 == "25" ) { echo " selected"; } ?>>25</option>
    	<option value="26"<? if( $nichiji_2 == "26" ) { echo " selected"; } ?>>26</option>
    	<option value="27"<? if( $nichiji_2 == "27" ) { echo " selected"; } ?>>27</option>
    	<option value="28"<? if( $nichiji_2 == "28" ) { echo " selected"; } ?>>28</option>
    	<option value="29"<? if( $nichiji_2 == "29" ) { echo " selected"; } ?>>29</option>
    	<option value="30"<? if( $nichiji_2 == "30" ) { echo " selected"; } ?>>30</option>
    	<option value="31"<? if( $nichiji_2 == "31" ) { echo " selected"; } ?>>31</option>
        </select>日&nbsp;
        <select name="nichiji_3">
    	<option value="--"<? if( $nichiji_3 == "--" ) { echo " selected"; } ?>>--</option>
    	<option value="午前"<? if( $nichiji_3 == "午前" ) { echo " selected"; } ?>>午前</option>
    	<option value="午後"<? if( $nichiji_3 == "午後" ) { echo " selected"; } ?>>午後</option>
        </select>
		<p class="red">※後程、お電話にてお時間の確認をさせていただきます。<br />
		なお、ご連絡には少々お時間をいただく場合がありますので、お急ぎの方は直接、お電話でお申し込みください。</p>
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