<?php

/* 共通functionの読み込み */
include_once( "functions.php" );

/* 送付先アドレス */
define( "CONTACT_MAIL_TO", "student@pc4353.net" );

/* このスクリプトのパス */
$script_path = "/" . $room[$id][dir] . "/certify.php";

/*========================================
入力用HTML
========================================*/
function inputHTML() {
global $room, $rid;
global $erName, $erKana, $erPhone, $erMail, $erNichiji;
global $name, $kana, $phone, $mail, $old, $student, $nichiji, $nichiji_1, $nichiji_2, $nichiji_3, $course, $question;
?>
<table class="inq_form">
<tr>
	<th>お申込教室</th>
	<td><?= $room[$rid]["name"] ?>教室</td>
</tr>
<tr>
	<th>お名前　<span class="red">必須</span></th>
	<td<?= $erName ?>><input type="text" value="<?= $name ?>" name="name" maxlength="20" class="form_input01"><br />例）市民花子</td>
</tr>
<tr>
	<th>ふりがな　<span class="red">必須</span></th>
	<td<?= $erKana ?>><input type="text" value="<?= $kana ?>" name="kana" maxlength="20" class="form_input01"><br />例）しみんはなこ</td>
</tr>
<tr>
	<th>電話番号（携帯可）　<span class="red">必須</span></th>
	<td<?= $erPhone ?>><input type="tel" value="<?= $phone ?>" name="phone" maxlength="15" class="form_input02"><br />例）09012345678（ハイフンなし）</td>
</tr>
<tr>
	<th>メールアドレス　<span class="red">必須</span></th>
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
	<th>無料説明会希望日　<span class="red">必須</span></th>
    <td<?= $erNichiji ?>><select name="nichiji_1">
    	<option value=""<? if( $nichiji_1 == "" ) { echo " selected"; } ?>>--</option>
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
    	<option value=""<? if( $nichiji_2 == "" ) { echo " selected"; } ?>>--</option>
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
    	<option value=""<? if( $nichiji_3 == "" ) { echo " selected"; } ?>>--</option>
    	<option value="午前"<? if( $nichiji_3 == "午前" ) { echo " selected"; } ?>>午前</option>
    	<option value="午後"<? if( $nichiji_3 == "午後" ) { echo " selected"; } ?>>午後</option>
        </select>
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
	<td><textarea name="question" rows="8" cols="44" class="form_input01"><?= $question ?></textarea></td>
</tr>
</table>

<?php
}
?>