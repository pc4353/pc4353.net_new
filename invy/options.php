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
global $erName, $erKana, $erPhone, $erMail;
global $question, $name, $kana, $phone, $mail, $month_1, $day_1, $time_1, $month_2, $day_2, $time_2;
?>
<table class="about">
<tr>
  <th>申込教室<span class="red">必須</span></th>
  <td>
<select class="parent" name="pref" required>
 <option value="" class="msg" disabled selected>-----都道府県を選択-----</option>
 <option value="東京都">東京都</option>
 <option value="神奈川県">神奈川県</option>
 <option value="千葉県">千葉県</option>
 <option value="埼玉県">埼玉県</option>
 <option value="茨城県">茨城県</option>
 <option value="愛知県">愛知県</option>
 <option value="静岡県">静岡県</option>
 <option value="大阪府">大阪府</option>
 <option value="兵庫県">兵庫県</option>
 <option value="京都府">京都府</option>
 <option value="奈良県">奈良県</option>
 <option value="滋賀県">滋賀県</option>
 <option value="徳島県">徳島県</option>
 <option value="福岡県">福岡県</option>
</select>

<select class="children" name="room" disabled required>
 <option value="" class="msg" disabled selected>-----教室名を選択-----</option>
  <option value="丸井吉祥寺教室" data-val="東京都">丸井吉祥寺教室</option>
  <option value="上野マルイ教室" data-val="東京都">上野マルイ教室</option>
  <option value="丸井錦糸町教室" data-val="東京都">丸井錦糸町教室</option>
  <option value="中野マルイ教室" data-val="東京都">中野マルイ教室</option>
  <option value="神保町駅前教室" data-val="東京都">神保町駅前教室</option>
  <option value="IY竹の塚教室" data-val="東京都">IY竹の塚教室</option>
  <option value="IY金町教室" data-val="東京都">IY金町教室</option>
  <option value="亀有駅前教室" data-val="東京都">亀有駅前教室</option>
  <option value="IYアリオ亀有教室" data-val="東京都">IYアリオ亀有教室</option>
  <option value="IY葛西教室" data-val="東京都">IY葛西教室</option>
  <option value="ダイエー東大島教室" data-val="東京都">ダイエー東大島教室</option>
  <option value="大泉学園ゆめりあ教室" data-val="東京都">大泉学園ゆめりあ教室</option>
  <option value="ダイエー西八王子教室" data-val="東京都">ダイエー西八王子教室</option>
  <option value="西友福生教室" data-val="東京都">西友福生教室</option>
  <option value="マルイファミリー溝口教室" data-val="神奈川県">マルイファミリー溝口教室</option>
  <option value="センター北あいたい教室" data-val="神奈川県">センター北あいたい教室</option>
  <option value="IY川崎教室" data-val="神奈川県">IY川崎教室</option>
  <option value="イオンスタイル東神奈川教室" data-val="神奈川県">イオンスタイル東神奈川教室</option>
  <option value="とうきゅうすすき野教室" data-val="神奈川県">とうきゅうすすき野教室</option>
  <option value="IY相模原教室" data-val="神奈川県">IY相模原教室</option>
  <option value="IY古淵教室" data-val="神奈川県">IY古淵教室</option>
  <option value="イオン橋本教室" data-val="神奈川県">イオン橋本教室</option>
  <option value="マルイファミリー海老名教室" data-val="神奈川県">マルイファミリー海老名教室</option>
  <option value="IY茅ヶ崎教室" data-val="神奈川県">IY茅ヶ崎教室</option>
  <option value="ノジマ鴨宮教室" data-val="神奈川県">ノジマ鴨宮教室</option>
  <option value="イオン鎌取教室" data-val="千葉県">イオン鎌取教室</option>
  <option value="イオン市川妙典教室" data-val="千葉県">イオン市川妙典教室</option>
  <option value="ボンベルタ成田教室" data-val="千葉県">ボンベルタ成田教室</option>
  <option value="イオン北小金教室" data-val="千葉県">イオン北小金教室</option>
  <option value="おおたかの森S・C教室" data-val="千葉県">おおたかの森S・C教室</option>
  <option value="IY流山教室" data-val="千葉県">IY流山教室</option>
  <option value="西友常盤平教室" data-val="千葉県">西友常盤平教室</option>
  <option value="IY松戸教室" data-val="千葉県">IY松戸教室</option>
  <option value="IY船橋教室" data-val="千葉県">IY船橋教室</option>
  <option value="IY津田沼教室" data-val="千葉県">IY津田沼教室</option>
  <option value="イオンタウンユーカリが丘教室" data-val="千葉県">イオンタウンユーカリが丘教室</option>
  <option value="茂原駅前教室" data-val="千葉県">茂原駅前教室</option>
  <option value="アビイクオーレ我孫子教室" data-val="千葉県">アビイクオーレ我孫子教室</option>
  <option value="西武所沢教室" data-val="埼玉県">西武所沢教室</option>
  <option value="そごう川口教室" data-val="埼玉県">そごう川口教室</option>
  <option value="まるひろ東松山教室" data-val="埼玉県">まるひろ東松山教室</option>
  <option value="イオンモール与野教室" data-val="埼玉県">イオンモール与野教室</option>
  <option value="まるひろ入間教室" data-val="埼玉県">まるひろ入間教室</option>
  <option value="まるひろ南浦和教室" data-val="埼玉県">まるひろ南浦和教室</option>
  <option value="まるひろ上尾教室" data-val="埼玉県">まるひろ上尾教室</option>
  <option value="IY錦町教室" data-val="埼玉県">IY錦町教室</option>
  <option value="IY三郷教室" data-val="埼玉県">IY三郷教室</option>
  <option value="越谷サンシティ教室" data-val="埼玉県">越谷サンシティ教室</option>
  <option value="IY春日部教室" data-val="埼玉県">IY春日部教室</option>
  <option value="いなげや毛呂教室" data-val="埼玉県">いなげや毛呂教室</option>
  <option value="IY深谷教室" data-val="埼玉県">IY深谷教室</option>
  <option value="IY竜ヶ崎教室" data-val="茨城県">IY竜ヶ崎教室</option>
  <option value="プライムツリー赤池教室" data-val="愛知県">プライムツリー赤池教室</option>
  <option value="バロー豊橋教室" data-val="愛知県">バロー豊橋教室</option>
  <option value="イオン上飯田教室" data-val="愛知県">イオン上飯田教室</option>
  <option value="IY尾張旭教室" data-val="愛知県">IY尾張旭教室</option>
  <option value="津島教室" data-val="愛知県">津島教室</option>
  <option value="遠鉄百貨店教室" data-val="静岡県">遠鉄百貨店教室</option>
  <option value="南海堺東駅教室" data-val="大阪府">南海堺東駅教室</option>
  <option value="近鉄百貨店上本町教室" data-val="大阪府">近鉄百貨店上本町教室</option>
  <option value="イオン東大阪教室" data-val="大阪府">イオン東大阪教室</option>
  <option value="千里中央駅前教室" data-val="大阪府">千里中央駅前教室</option>
  <option value="イオンスタイル新茨木教室" data-val="大阪府">イオンスタイル新茨木教室</option>
  <option value="イオン北千里教室" data-val="大阪府">イオン北千里教室</option>
  <option value="京橋教室" data-val="大阪府">京橋教室</option>
  <option value="イオン高見教室" data-val="大阪府">イオン高見教室</option>
  <option value="メラード大和田教室" data-val="大阪府">メラード大和田教室</option>
  <option value="イオン吹田教室" data-val="大阪府">イオン吹田教室</option>
  <option value="イズミヤ千里丘教室" data-val="大阪府">イズミヤ千里丘教室</option>
  <option value="ライフ門真教室" data-val="大阪府">ライフ門真教室</option>
  <option value="ライフ香里園教室" data-val="大阪府">ライフ香里園教室</option>
  <option value="IY八尾教室" data-val="大阪府">IY八尾教室</option>
  <option value="ライフ国分教室" data-val="大阪府">ライフ国分教室</option>
  <option value="エコール・ロゼ教室" data-val="大阪府">エコール・ロゼ教室</option>
  <option value="ダイエー光明池教室" data-val="大阪府">ダイエー光明池教室</option>
  <option value="ダイエー北野田教室" data-val="大阪府">ダイエー北野田教室</option>
  <option value="IYあべの教室" data-val="大阪府">IYあべの教室</option>
  <option value="アステ川西教室" data-val="兵庫県">アステ川西教室</option>
  <option value="イオン西宮教室" data-val="兵庫県">イオン西宮教室</option>
  <option value="ダイエー三宮駅前教室" data-val="兵庫県">ダイエー三宮駅前教室</option>
  <option value="イズミヤ西神戸教室" data-val="兵庫県">イズミヤ西神戸教室</option>
  <option value="IY甲子園教室" data-val="兵庫県">IY甲子園教室</option>
  <option value="伊丹駅前教室" data-val="兵庫県">伊丹駅前教室</option>
  <option value="咲ランドショッピングセンター教室" data-val="兵庫県">咲ランドショッピングセンター教室</option>
  <option value="IY明石教室" data-val="兵庫県">IY明石教室</option>
  <option value="西友山科教室" data-val="京都府">西友山科教室</option>
  <option value="ライフ太秦教室" data-val="京都府">ライフ太秦教室</option>
  <option value="イオンモール奈良登美ヶ丘教室" data-val="奈良県">イオンモール奈良登美ヶ丘教室</option>
  <option value="ならファミリー教室" data-val="奈良県">ならファミリー教室</option>
  <option value="エコール・マミ教室" data-val="奈良県">エコール・マミ教室</option>
  <option value="フェリエ南草津教室" data-val="滋賀県">フェリエ南草津教室</option>
  <option value="アル・プラザ近江八幡教室" data-val="滋賀県">アル・プラザ近江八幡教室</option>
  <option value="フジグラン北島教室" data-val="徳島県">フジグラン北島教室</option>
  <option value="イオンスタイル笹丘教室" data-val="福岡県">イオンスタイル笹丘教室</option>
  <option value="スピナマート中井教室" data-val="福岡県">スピナマート中井教室</option>
</select>
  </td>
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
        </td>
</tr>
<tr>
	<th>ご質問</th>
	<td><textarea name="question" id="question" rows="8" cols="44"><?= $question ?></textarea></td>
</tr>
</table>

<p class="center mgnT20"><input type="submit" value="確認画面へ" /></p>
<?php
}
?>