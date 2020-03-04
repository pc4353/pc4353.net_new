<?php

/* 共通functionの読み込み */
include_once( "../lib/functions.php" );

/* 送付先アドレス */
define( "CONTACT_MAIL_TO_1", "mamasq@cheery.co.jp" );
define( "CONTACT_MAIL_TO_2", "m-support@mamasquare.co.jp" );

/*========================================
入力用HTML
========================================*/
function inputHTML() {
global $erBase, $erName, $erKana, $erPhone, $erMail, $erCourse, $erStart;
global $base, $name, $kana, $phone, $mail, $course, $start, $question;
?>
<table class="about">
<tr>
	<th>所属拠点<span class="red">必須</span></th>
	<td<?= $erBase ?>><input type="text" value="<?= $base ?>" name="base" id="base" maxlength="20" size="40"></td>
</tr>
<tr>
	<th>氏名<span class="red">必須</span></th>
	<td<?= $erName ?>><input type="text" value="<?= $name ?>" name="name" id="name" maxlength="20" size="40"><br>例）市民花子</td>
</tr>
<tr>
	<th>ふりがな<span class="red">必須</span></th>
	<td<?= $erKana ?>><input type="text" value="<?= $kana ?>" name="kana" id="kana" maxlength="20" size="40"><br>例）しみんはなこ</td>
</tr>
<tr>
	<th>電話番号（携帯可）<span class="red">必須</span></th>
	<td<?= $erPhone ?>><input type="tel" value="<?= $phone ?>" name="phone" id="phone" maxlength="15" size="30"><br>例）09012345678（ハイフンなし）</td>
</tr>
<tr>
	<th>メールアドレス<span class="red">必須</span></th>
	<td<?= $erMail ?>><input type="email" value="<?= $mail ?>" name="mail" id="mail" maxlength="100" size="40"><br>例）example@cheery.co.jp</td>
</tr>
<tr>
	<th>申込番号：講座名<span class="red">必須</span></th>
	<td<?= $erCourse ?>><ul>
    <li><label><input type="radio" class="nBn" value="A-1：ビジネスベーシック　ワード2016 基本" name="course"<? if( $course == "A-1：ビジネスベーシック　ワード2016 基本" ) { echo " checked"; } ?>> A-1：ビジネスベーシック　ワード2016 基本</label></li>
    <li><label><input type="radio" class="nBn" value="A-2：ビジネスベーシック　エクセル2016 基本" name="course"<? if( $course == "A-2：ビジネスベーシック　エクセル2016 基本" ) { echo " checked"; } ?>> A-2：ビジネスベーシック　エクセル2016 基本</label></li>
    <li><label><input type="radio" class="nBn" value="A-3：ビジネスベーシック　パワーポイント2016 基本" name="course"<? if( $course == "A-3：ビジネスベーシック　パワーポイント2016 基本" ) { echo " checked"; } ?>> A-3：ビジネスベーシック　パワーポイント2016 基本</label></li>
    <li><label><input type="radio" class="nBn" value="A-4：ビジネスベーシック　ワード2016 応用" name="course"<? if( $course == "A-4：ビジネスベーシック　ワード2016 応用" ) { echo " checked"; } ?>> A-4：ビジネスベーシック　ワード2016 応用</label></li>
    <li><label><input type="radio" class="nBn" value="A-5：ビジネスベーシック　エクセル2016 応用" name="course"<? if( $course == "A-5：ビジネスベーシック　エクセル2016 応用" ) { echo " checked"; } ?>> A-5：ビジネスベーシック　エクセル2016 応用</label></li>
    <li><label><input type="radio" class="nBn" value="B-1：ビジネス実践講座　ワード2013 基本編" name="course"<? if( $course == "B-1：ビジネス実践講座　ワード2013 基本編" ) { echo " checked"; } ?>> B-1：ビジネス実践講座　ワード2013 基本編</label></li>
    <li><label><input type="radio" class="nBn" value="B-2：ビジネス実践講座　ワード2013 応用編" name="course"<? if( $course == "B-2：ビジネス実践講座　ワード2013 応用編" ) { echo " checked"; } ?>> B-2：ビジネス実践講座　ワード2013 応用編</label></li>
    <li><label><input type="radio" class="nBn" value="B-3：ビジネス実践講座　エクセル2013 基本編" name="course"<? if( $course == "B-3：ビジネス実践講座　エクセル2013 基本編" ) { echo " checked"; } ?>> B-3：ビジネス実践講座　エクセル2013 基本編</label></li>
    <li><label><input type="radio" class="nBn" value="B-4：ビジネス実践講座　エクセル2013 応用編" name="course"<? if( $course == "B-4：ビジネス実践講座　エクセル2013 応用編" ) { echo " checked"; } ?>> B-4：ビジネス実践講座　エクセル2013 応用編</label></li>
    <li><label><input type="radio" class="nBn" value="B-5：ビジネス実践講座　パワーポイント2013 初級・上級" name="course"<? if( $course == "B-5：ビジネス実践講座　パワーポイント2013 初級・上級" ) { echo " checked"; } ?>> B-5：ビジネス実践講座　パワーポイント2013 初級・上級</label></li>
    <li><label><input type="radio" class="nBn" value="C-1：MOS資格対策講座　MOS ワード2013 対策講座" name="course"<? if( $course == "C-1：MOS資格対策講座　MOS ワード2013 対策講座" ) { echo " checked"; } ?>> C-1：MOS資格対策講座　MOS ワード2013 対策講座</label></li>
    <li><label><input type="radio" class="nBn" value="C-2：MOS資格対策講座　MOS エクセル2013 対策講座" name="course"<? if( $course == "C-2：MOS資格対策講座　MOS エクセル2013 対策講座" ) { echo " checked"; } ?>> C-2：MOS資格対策講座　MOS エクセル2013 対策講座</label></li>
    <li><label><input type="radio" class="nBn" value="C-3：MOS資格対策講座　MOS ワード2016 対策講座" name="course"<? if( $course == "C-3：MOS資格対策講座　MOS ワード2016 対策講座" ) { echo " checked"; } ?>> C-3：MOS資格対策講座　MOS ワード2016 対策講座</label></li>
    <li><label><input type="radio" class="nBn" value="C-4：MOS資格対策講座　MOS エクセル2016 対策講座" name="course"<? if( $course == "C-4：MOS資格対策講座　MOS エクセル2016 対策講座" ) { echo " checked"; } ?>> C-4：MOS資格対策講座　MOS エクセル2016 対策講座</label></li>
    <li><label><input type="radio" class="nBn" value="D-1：サーティファイ資格対策講座　ワード2016 3級" name="course"<? if( $course == "D-1：サーティファイ資格対策講座　ワード2016 3級" ) { echo " checked"; } ?>> D-1：サーティファイ資格対策講座　ワード2016 3級</label></li>
    <li><label><input type="radio" class="nBn" value="D-2：サーティファイ資格対策講座　ワード2016 2級" name="course"<? if( $course == "D-2：サーティファイ資格対策講座　ワード2016 2級" ) { echo " checked"; } ?>> D-2：サーティファイ資格対策講座　ワード2016 2級</label></li>
    <li><label><input type="radio" class="nBn" value="D-3：サーティファイ資格対策講座　エクセル2016 3級" name="course"<? if( $course == "D-3：サーティファイ資格対策講座　エクセル2016 3級" ) { echo " checked"; } ?>> D-3：サーティファイ資格対策講座　エクセル2016 3級</label></li>
    <li><label><input type="radio" class="nBn" value="D-4：サーティファイ資格対策講座　エクセル2016 2級" name="course"<? if( $course == "D-4：サーティファイ資格対策講座　エクセル2016 2級" ) { echo " checked"; } ?>> D-4：サーティファイ資格対策講座　エクセル2016 2級</label></li>
    <li><label><input type="radio" class="nBn" value="D-5：サーティファイ資格対策講座　パワーポイント2016 初級" name="course"<? if( $course == "D-5：サーティファイ資格対策講座　パワーポイント2016 初級" ) { echo " checked"; } ?>> D-5：サーティファイ資格対策講座　パワーポイント2016 初級</label></li>
    <li><label><input type="radio" class="nBn" value="D-6：サーティファイ資格対策講座　パワーポイント2016 上級" name="course"<? if( $course == "D-6：サーティファイ資格対策講座　パワーポイント2016 上級" ) { echo " checked"; } ?>> D-6：サーティファイ資格対策講座　パワーポイント2016 上級</label></li>
	</ul></td>
</tr>
<tr>
	<th>受講開始希望月<span class="red">必須</span></th>
	<td<?= $erStart ?>><input type="text" value="<?= $start ?>" name="start" maxlength="20" size="40"><br>※最短でもお申込月の２か月先をご指定ください（当月中の入金の場合）</td>
</tr>
<tr>
	<th>ご質問等</th>
	<td><textarea name="question" id="question" rows="8" cols="44"><?= $question ?></textarea></td>
</tr>
</table>

<p class="center mgnT20"><input type="submit" value="確認画面へ" /></p>
<?php
}
?>