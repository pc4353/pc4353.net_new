<?php

/* 共通functionの読み込み */
include_once( "smart_functions.php" );

/* 送付先アドレス */
define( "CONTACT_MAIL_TO", "student@pc4353.net" );
/* define( "CONTACT_MAIL_TO", "ymotoroku@pc4353.com" ); */


/* このスクリプトのパス */
$script_path = "/" . $room[$id][dir] . "/smart_biz-online_contact.php";


/*========================================
入力用HTML
========================================*/
function inputHTML() {
global $room, $rid;
global $erName, $erKana, $erPhone, $erNichiji, $erCourse;
global $name, $kana, $phone, $mail, $address, $nichiji, $nichiji_1, $nichiji_2, $nichiji_3, $course, $question;
?>
<h3>ご応募教室</h3>
<p class="body name"><?= $room[$rid]["name"] ?>教室</p>
<hr>
<h3>お名前　<span class="colorRed">必須</span></h3>
<input type="text" name="name" value="<?= $name ?>" class="name">
<hr>
<h3>フリガナ　<span class="colorRed">必須</span></h3>
<input type="text" name="kana" value="<?= $kana ?>" class="name">
<hr>
<h3>電話番号（携帯可）　<span class="colorRed">必須</span></h3>
<input type="text" name="phone" value="<?= $phone ?>" class="name">
<hr>
<h3>メールアドレス</h3>
<input type="text" name="mail" value="<?= $mail ?>" class="name">
<hr>
<h3>住所</h3>
<input type="text" name="address" value="<?= $address ?>" class="name">
<hr>
<h3>無料説明会希望日　<span class="colorRed">必須</span></h3>
<div class="nichiji">
<select name="nichiji_1">
<option value=""<? if( $nichiji_1 == "" ) { echo " selected"; } ?>>&nbsp;</option>
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
</select>月&nbsp;&nbsp;&nbsp;&nbsp;
<select name="nichiji_2">
<option value=""<? if( $nichiji_2 == "" ) { echo " selected"; } ?>>&nbsp;</option>
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
</select>日&nbsp;&nbsp;&nbsp;&nbsp;
<select name="nichiji_3">
<option value=""<? if( $nichiji_3 == "" ) { echo " selected"; } ?>>&nbsp;</option>
<option value="午前"<? if( $nichiji_3 == "午前" ) { echo " selected"; } ?>>午前</option>
<option value="午後"<? if( $nichiji_3 == "午後" ) { echo " selected"; } ?>>午後</option>
</select>
</div>
<div class="formNote">
<p>※後程、お電話にてお時間の確認をさせていただきます。</p>
</div>
<hr>
<h3>開講時間</h3>
<p><?= $room[$rid]["open"] ?></p>
<hr>
<h3>ご質問など</h3>
<textarea class="text" name="question"><?= $question ?></textarea>




<?php
}
?>