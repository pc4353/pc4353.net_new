<?php

$event = $_POST['event'];

$d_pref    = $_POST['d_pref'];
$d_class   = $_POST['d_class'];
$d_year    = $_POST['d_year'];
$d_month   = $_POST['d_month'];
$d_day     = $_POST['d_day'];
$d_time    = $_POST['d_time'];
$d_name1   = $_POST['d_name1'];
$d_name2   = $_POST['d_name2'];
$d_kana1   = $_POST['d_kana1'];
$d_kana2   = $_POST['d_kana2'];
$d_age     = $_POST['d_age'];
$d_tel     = $_POST['d_tel'];
$d_mail    = $_POST['d_mail'];
$d_message = $_POST['d_message'];

if($event == "2") {

  // メール送信

  date_default_timezone_set('Asia/Tokyo');
  mb_language("japanese");
  mb_internal_encoding("UTF-8");

  $w_kana = $d_kana1;
  if($w_kana != "") {
    $w_kana .= "　";
  }
  $w_kana .= $d_kana2;

  $w_age = $d_age;
  if($w_age != "") {
    $w_age .= "代";
  }

  $body  = "";

  $body .= <<< EOM
*************************************************************

ご予約を受付けました。

*************************************************************

希望教室
都道府県：${d_pref}
教室名：${d_class}

希望日時
${d_year}年${d_month}月${d_day}日
時間帯：${d_time}時台

氏名
${d_name1}　${d_name2}

ふりがな
${w_kana}

年代
${w_age}

電話番号
${d_tel}

メールアドレス
${d_mail}

その他ご要望
${d_message}

============================================================

ビジネスオンライン
〒999-9999 住所
Tel:999-999-9999 Fax:999-999-9999
http://www.xxx.xxx/
xxx@xxx.xxx

============================================================
EOM;

  // 入力者向けメール

  if($d_mail != "") {

    $to          = $d_mail;
    $return_path = "kiryu@prontonet.co.jp";
    $from_nm     = "kiryu";
    $from_mail   = "kiryu@prontonet.co.jp";
    $subject     = "【テスト・ビジネスオンライン・入力者向けメール】ご予約を受付けました";

    $header  = "Return-Path: $return_path\n";
    $header .= "From:" . mb_encode_mimeheader($from_nm) . "<$from_mail>\n";
    $header .= "Reply-To: $from_mail\n";

    mb_send_mail($to, $subject, $body, $header);

  }

  // 管理者向けメール

  $to          = "kiryu@prontonet.co.jp";
  $return_path = "kiryu@prontonet.co.jp";
  $from_nm     = "kiryu";
  $from_mail   = "kiryu@prontonet.co.jp";
  $subject     = "【テスト・ビジネスオンライン・管理者向けメール】ご予約を受付けました";

  $header  = "Return-Path: $return_path\n";
  $header .= "From:" . mb_encode_mimeheader($from_nm) . "<$from_mail>\n";
  $header .= "Reply-To: $from_mail\n";

  mb_send_mail($to, $subject, $body, $header);

  header("Location: ./complete.html");

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="keyword" content="" />

	<title>コンタクトフォーム | ビジネスオンライン</title>

	<style>
	@import url("style.css") print;
	@import url("style.css") all and (min-width: 641px);
	@import url("style-sp.css") all and (max-width: 640px);
	</style>

	<!--[if lt IE 9]>
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<script type="text/javascript" src="js/selectivizr-min.js"></script>
	<script type="text/javascript" src="js/respond.js"></script>
	<![endif]-->


	<!--[if lt IE 9]><!-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<!--<![endif]-->

	<!--[if gte IE 9]><!-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<!--<![endif]-->

	<!-- js 初期 -->
	<script type="text/javascript" src="js/selectivizr103.js"></script>
	<script type="text/javascript" src="js/respond.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.simplyscroll.js"></script>
	<script type="text/javascript" src="js/jQueryAutoHeight.js"></script>
	<script type="text/javascript" src="js/form.js"></script>
	<script type="text/javascript" src="js/jquery.ah-placeholder.js"></script>

	<script>
	$(function(){

		// 滑らかにスクロール
		$('a[href^="#"]').click(function(){
			$('html,body').animate({scrollTop: $($(this).attr('href')).offset().top}, '500', 'swing');
			return false;
		});

	});
	</script>

	<script type="text/javascript">
	$(function(){

		$('a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 800);
		        return false;
		      }
		    }
		});

	});
	</script>

	<!-- 高さ揃え -->
	<script type="text/javascript">
	jQuery(function($){

		$('h4.block_ah0').autoHeight({});
	   	$('p.block_ah1').autoHeight({column:'2', height:'height'});
	   	$('p.block_ah2').autoHeight({column:'2', height:'height'});

	});
	</script>

	<!-- IE プレースホルダー -->
	<script type="text/javascript">
	$(function(){
    	$('[placeholder]').ahPlaceholder({
          placeholderColor : 'silver',
          placeholderAttr : 'title',
          likeApple : false
    	});
	});
	</script>


</head>
<body>
<form name="form1" method="post" action="">

<div id="container">

	<div class="l-header">
		<div class="c-header__block1">
			<h1><a href="http://dns1.prontonet.ne.jp/hp/nagamatsu/cheery_lp2/"><img src="img/logo.png" width="555" height="81" alt="ビジネスオンライン" /></a></h1>
		</div><!-- c-header__block1 -->

		<div class="c-header__block2">
			<h2><img src="img/head_img01.png" width="724" height="155" alt="これまでなかった自宅＋教室で学べる 新パソコンスクール誕生！" /></h2>
		</div><!-- /.c-header__block2 -->
	</div><!-- /.l-header -->

	<div class="l-contact">

		<div class="c-contact-block1">
			<h2>教室見学・無料体験予約フォーム</h2>
		</div><!-- /.c-contact-block1 -->

<?php
if($event == "1") {
?>

		<div class="c-contact-block2">

			<script type="text/javascript">
			if(window.addEventListener) {
				window.addEventListener('load', function_onload, false);
			} else if (window.attachEvent) {
				window.attachEvent('onload', function_onload);
			}
			function function_onload() {
				d_pref_onchange();
			}
			function btn_submit_onclick() {
				document.form1.event.value = '2';
				document.form1.submit();
			}
			</script>

			<h3>お客様情報の入力確認</h3>

			<table>

				<tr>
					<th><label for="school">希望教室</label></th>
					<td>都道府県：<?php echo $d_pref; ?>　<br class="sp-only">教室名：<?php echo $d_class; ?></td>
				</tr>

				<tr>
					<th>希望日時</th>
					<td><?php echo $d_year; ?>年 <?php echo $d_month; ?>月 <?php echo $d_day; ?>日　時間帯：<?php echo $d_time; ?>時台</td>
				</tr>

				<tr>
					<th><label for="name">氏名</label></th>
					<td><?php echo $d_name1; ?><?php if($d_name1 != "") { ?>　<?php } ?><?php echo $d_name2; ?></td>
				</tr>

				<tr>
					<th><label for="furi">ふりがな</label></th>
					<td><?php echo $d_kana1; ?><?php if($d_kana1 != "") { ?>　<?php } ?><?php echo $d_kana2; ?></td>
				</tr>

				<tr>
					<th><label for="age">年代</label></th>
					<td><?php echo $d_age; ?><?php if($d_age != "") { ?>代<?php } ?></td>
				</tr>

				<tr>
					<th><label for="tel">電話番号（携帯可）</label></th>
					<td><?php echo $d_tel; ?></td>
				</tr>

				<tr>
					<th><label for="mail">メールアドレス</label></th>
					<td><?php echo $d_mail; ?></td>
				</tr>

				<tr>
					<th><label for="message">その他ご要望</label></th>
					<td class="c_message"><?php echo nl2br($d_message); ?></td>
				</tr>
				<input type="hidden" name="d_pref" id="d_pref" value="<?php echo $d_pref; ?>" />
				<input type="hidden" name="d_class" id="d_class" value="<?php echo $d_class; ?>" />
				<input type="hidden" name="d_year" id="d_year" value="<?php echo $d_year; ?>" />
				<input type="hidden" name="d_month" id="d_month" value="<?php echo $d_month; ?>" />
				<input type="hidden" name="d_day" id="d_day" value="<?php echo $d_day; ?>" />
				<input type="hidden" name="d_time" id="d_time" value="<?php echo $d_time; ?>" />
				<input type="hidden" name="d_name1" id="d_name1" value="<?php echo $d_name1; ?>" />
				<input type="hidden" name="d_name2" id="d_name2" value="<?php echo $d_name2; ?>" />
				<input type="hidden" name="d_kana1" id="d_kana1" value="<?php echo $d_kana1; ?>" />
				<input type="hidden" name="d_kana2" id="d_kana2" value="<?php echo $d_kana2; ?>" />
				<input type="hidden" name="d_age" id="d_class" value="<?php echo $d_age; ?>" />
				<input type="hidden" name="d_tel" id="d_tel" value="<?php echo $d_tel; ?>" />
				<input type="hidden" name="d_mail" id="d_class" value="<?php echo $d_mail; ?>" />
				<input type="hidden" name="d_message" id="d_message" value="<?php echo $d_message; ?>" />

			</table>

			<p>無料体験をお申込みの方にはご予約確定の旨、教室から折返しご連絡をさせていただきます。</p>

			<div class="c-contact_btn01">
				<img src="img/contact_btn02.png" width="450" height="100" class="content09_submit" style="cursor: pointer;" onclick="btn_submit_onclick();" />
			</div><!-- /.c-contact_btn01 -->


		</div><!-- /.c-contact-block2 -->

	</div><!-- /.l-contact -->
<?php
} else {
?>
		<div class="c-contact-block2">

			<script type="text/javascript">
			if(window.addEventListener) {
				window.addEventListener('load', function_onload, false);
			} else if (window.attachEvent) {
				window.attachEvent('onload', function_onload);
			}
			function function_onload() {
				d_pref_onchange();
			}
			function d_pref_onchange() {
				html  = '<select id="d_class" name="d_class">';
				html += '<option value="">--</option>';
				var pref = document.form1.d_pref.value;
				if(pref == '茨城県') {
					html += '<option value="イトーヨーカドー竜ヶ崎店教室">イトーヨーカドー竜ヶ崎店教室</option>';
				} else if(pref == '埼玉県') {
					html += '<option value="まるひろ入間店教室">まるひろ入間店教室</option>';
					html += '<option value="まるひろ南浦和店教室">まるひろ南浦和店教室</option>';
					html += '<option value="まるひろ上尾店教室">まるひろ上尾店教室</option>';
					html += '<option value="ザ・プライス川口店教室">ザ・プライス川口店教室</option>';
					html += '<option value="イトーヨーカドー錦町店教室">イトーヨーカドー錦町店教室</option>';
					html += '<option value="イトーヨーカドー三郷店教室">イトーヨーカドー三郷店教室</option>';
					html += '<option value="越谷サンシティ教室">越谷サンシティ教室</option>';
					html += '<option value="イトーヨーカドー春日部店教室">イトーヨーカドー春日部店教室</option>';
					html += '<option value="いなげや毛呂店教室">いなげや毛呂店教室</option>';
					html += '<option value="イオン所沢教室">イオン所沢教室</option>';
					html += '<option value="イトーヨーカドー深谷店教室">イトーヨーカドー深谷店教室</option>';
					html += '<option value="ひばりが丘教室">ひばりが丘教室</option>';
					html += '<option value="イオンモール与野教室">イオンモール与野教室</option>';
				} else if(pref == '千葉県') {
					html += '<option value="イオン鎌取店教室">イオン鎌取店教室</option>';
					html += '<option value="イオン市川妙典店教室">イオン市川妙典店教室</option>';
					html += '<option value="ボンベルタ成田教室">ボンベルタ成田教室</option>';
					html += '<option value="イオン稲毛店教室">イオン稲毛店教室</option>';
					html += '<option value="イオン北小金店教室">イオン北小金店教室</option>';
					html += '<option value="おおたかの森S・C教室">おおたかの森S・C教室</option>';
					html += '<option value="イトーヨーカドー流山店教室">イトーヨーカドー流山店教室</option>';
					html += '<option value="西友常盤平店教室">西友常盤平店教室</option>';
					html += '<option value="イトーヨーカドー松戸店教室">イトーヨーカドー松戸店教室</option>';
					html += '<option value="イトーヨーカドー船橋店教室">イトーヨーカドー船橋店教室</option>';
					html += '<option value="サミット馬込沢店教室">サミット馬込沢店教室</option>';
					html += '<option value="イトーヨーカドー津田沼店教室">イトーヨーカドー津田沼店教室</option>';
					html += '<option value="イトーヨーカドー新浦安店教室">イトーヨーカドー新浦安店教室</option>';
					html += '<option value="イオンユーカリが丘店教室">イオンユーカリが丘店教室</option>';
					html += '<option value="イオン茂原店教室">イオン茂原店教室</option>';
					html += '<option value="イトーヨーカドー柏店教室">イトーヨーカドー柏店教室</option>';
					html += '<option value="アビイクオーレ我孫子教室">アビイクオーレ我孫子教室</option>';
				} else if(pref == '東京都') {
					html += '<option value="イトーヨーカドー竹の塚店教室">イトーヨーカドー竹の塚店教室</option>';
					html += '<option value="イトーヨーカドー金町店教室">イトーヨーカドー金町店教室</option>';
					html += '<option value="イトーヨーカドー亀有駅前店教室">イトーヨーカドー亀有駅前店教室</option>';
					html += '<option value="イトーヨーカドーアリオ亀有店教室">イトーヨーカドーアリオ亀有店教室</option>';
					html += '<option value="イトーヨーカドー葛西店教室">イトーヨーカドー葛西店教室</option>';
					html += '<option value="ダイエー東大島店教室">ダイエー東大島店教室</option>';
					html += '<option value="大泉学園ゆめりあ教室">大泉学園ゆめりあ教室</option>';
					html += '<option value="ダイエー西八王子店教室">ダイエー西八王子店教室</option>';
					html += '<option value="西友福生店教室">西友福生店教室</option>';
					html += '<option value="自由が丘教室">自由が丘教室</option>';
					html += '<option value="神保町駅前教室">神保町駅前教室</option>';
				} else if(pref == '神奈川県') {
					html += '<option value="センター北あいたい教室">センター北あいたい教室</option>';
					html += '<option value="イトーヨーカドー川崎店教室">イトーヨーカドー川崎店教室</option>';
					html += '<option value="イオン東神奈川店教室">イオン東神奈川店教室</option>';
					html += '<option value="とうきゅうすすき野店教室">とうきゅうすすき野店教室</option>';
					html += '<option value="イトーヨーカドー相模原店教室">イトーヨーカドー相模原店教室</option>';
					html += '<option value="イトーヨーカドー古淵店教室">イトーヨーカドー古淵店教室</option>';
					html += '<option value="イオン橋本店教室">イオン橋本店教室</option>';
					html += '<option value="ショッパーズプラザ海老名教室">ショッパーズプラザ海老名教室</option>';
					html += '<option value="イトーヨーカドー湘南台店教室">イトーヨーカドー湘南台店教室</option>';
					html += '<option value="イトーヨーカドー茅ヶ崎店教室">イトーヨーカドー茅ヶ崎店教室</option>';
					html += '<option value="伊勢原駅前教室">伊勢原駅前教室</option>';
					html += '<option value="島忠ホームズ川崎大師店教室">島忠ホームズ川崎大師店教室</option>';
					html += '<option value="ノジマ鴨宮店教室">ノジマ鴨宮店教室</option>';
				} else if(pref == '岐阜県') {
					html += '<option value="ピアゴ多治見教室">ピアゴ多治見教室</option>';
				} else if(pref == '静岡県') {
					html += '<option value="沼津イシバシプラザ教室">沼津イシバシプラザ教室</option>';
					html += '<option value="浜松プラザフレスポ教室">浜松プラザフレスポ教室</option>';
					html += '<option value="遠鉄百貨店教室">遠鉄百貨店教室</option>';
				} else if(pref == '愛知県') {
					html += '<option value="イトーヨーカドー豊橋教室">イトーヨーカドー豊橋教室</option>';
					html += '<option value="岡崎シビコ教室">岡崎シビコ教室</option>';
					html += '<option value="イオン上飯田教室">イオン上飯田教室</option>';
					html += '<option value="イトーヨーカドー尾張旭教室">イトーヨーカドー尾張旭教室</option>';
					html += '<option value="津島教室">津島教室</option>';
				} else if(pref == '滋賀県') {
					html += '<option value="フェリエ南草津教室">フェリエ南草津教室</option>';
					html += '<option value="アル・プラザ近江八幡教室">アル・プラザ近江八幡教室</option>';
				} else if(pref == '京都府') {
					html += '<option value="ダイエー桂南教室">ダイエー桂南教室</option>';
					html += '<option value="西友山科教室">西友山科教室</option>';
					html += '<option value="ヒカリ屋山科教室">ヒカリ屋山科教室</option>';
					html += '<option value="イトーヨーカドー六地蔵教室">イトーヨーカドー六地蔵教室</option>';
					html += '<option value="ライフ太秦教室">ライフ太秦教室</option>';
				} else if(pref == '大阪府') {
					html += '<option value="イオン北千里教室">イオン北千里教室</option>';
					html += '<option value="イオン京橋教室">イオン京橋教室</option>';
					html += '<option value="イオン高見教室">イオン高見教室</option>';
					html += '<option value="メラード大和田教室">メラード大和田教室</option>';
					html += '<option value="イオン吹田教室">イオン吹田教室</option>';
					html += '<option value="イズミヤ千里丘教室">イズミヤ千里丘教室</option>';
					html += '<option value="ライフ門真教室">ライフ門真教室</option>';
					html += '<option value="ライフ香里園教室">ライフ香里園教室</option>';
					html += '<option value="イズミヤ東寝屋川店教室">イズミヤ東寝屋川店教室</option>';
					html += '<option value="イズミヤ若江岩田教室">イズミヤ若江岩田教室</option>';
					html += '<option value="イトーヨーカドー東大阪教室">イトーヨーカドー東大阪教室</option>';
					html += '<option value="はやし山本教室">はやし山本教室</option>';
					html += '<option value="イトーヨーカドー八尾教室">イトーヨーカドー八尾教室</option>';
					html += '<option value="ライフ国分教室">ライフ国分教室</option>';
					html += '<option value="エコール・ロゼ教室">エコール・ロゼ教室</option>';
					html += '<option value="ダイエー光明池教室">ダイエー光明池教室</option>';
					html += '<option value="イズミヤ泉佐野教室">イズミヤ泉佐野教室</option>';
					html += '<option value="ダイエー北野田教室">ダイエー北野田教室</option>';
					html += '<option value="イトーヨーカドーあべの教室">イトーヨーカドーあべの教室</option>';
					html += '<option value="千里中央教室">千里中央教室</option>';
				} else if(pref == '兵庫県') {
					html += '<option value="アステ川西教室">アステ川西教室</option>';
					html += '<option value="イオン西宮教室">イオン西宮教室</option>';
					html += '<option value="ライフ春日野道教室">ライフ春日野道教室</option>';
					html += '<option value="ダイエー三宮駅前教室">ダイエー三宮駅前教室</option>';
					html += '<option value="イズミヤ西神戸店教室">イズミヤ西神戸店教室</option>';
					html += '<option value="イトーヨーカドー甲子園教室">イトーヨーカドー甲子園教室</option>';
					html += '<option value="伊丹駅前教室">伊丹駅前教室</option>';
					html += '<option value="イトーヨーカドー広畑教室">イトーヨーカドー広畑教室</option>';
					html += '<option value="咲ランドショッピングセンター教室">咲ランドショッピングセンター教室</option>';
					html += '<option value="コープ西明石教室">コープ西明石教室</option>';
					html += '<option value="イトーヨーカドー明石教室">イトーヨーカドー明石教室</option>';
				} else if(pref == '奈良県') {
					html += '<option value="ならファミリー教室">ならファミリー教室</option>';
					html += '<option value="ライフ学園前教室">ライフ学園前教室</option>';
					html += '<option value="エコール・マミ教室">エコール・マミ教室</option>';
				} else if(pref == '岡山県') {
					html += '<option value="高梁教室">高梁教室</option>';
				} else if(pref == '徳島県') {
					html += '<option value="フジグラン北島教室">フジグラン北島教室</option>';
				} else if(pref == '福岡県') {
					html += '<option value="イオン笹丘教室">イオン笹丘教室</option>';
					html += '<option value="スピナマート中井店教室">スピナマート中井店教室</option>';
					html += '<option value="ゆめタウン筑紫野教室">ゆめタウン筑紫野教室</option>';
				}
				html += '</select>';
				document.getElementById('span_class').innerHTML = html;
			}
			function btn_submit_onclick() {
				// 希望教室
				if(document.form1.d_pref.value == '') {
					alert('都道府県を選択してください。');
					return false;
				}
				if(document.form1.d_class.value == '') {
					alert("教室名を選択してください。");
					return false;
				}
				// 希望日時
				if(document.form1.d_year.value == '') {
					alert('希望日時「年」を選択してください。');
					return false;
				}
				if(document.form1.d_month.value == '') {
					alert('希望日時「月」を選択してください。');
					return false;
				}
				if(document.form1.d_day.value == '') {
					alert('希望日時「日」を選択してください。');
					return false;
				}
				if (document.form1.d_time.value == '') {
					alert('希望日時「時間帯」を選択してください。');
					return false;
				}
				// 氏名
				if(document.form1.d_name1.value == '') {
					alert('お名前を入力してください。');
					return false;
				}
				if(document.form1.d_name2.value == '') {
					alert('お名前を入力してください。');
					return false;
				}
				// 電話番号
				if(document.form1.d_tel.value == '') {
					alert('電話番号を入力してください。');
					return false;
				}
				document.form1.event.value = '1';
				document.form1.submit();
			}
			</script>

			<h3>お客様情報の入力</h3>

			<table>

				<tr>
					<th><label for="school">希望教室<span class="l"><a href="http://www.pc4353.net/school/" target="_blank">教室一覧はこちら</a></span><span class="h">必須</span></label></th>
					<td>都道府県
						<select id="d_pref" name="d_pref" onchange="d_pref_onchange();">
						<option value="">--</option>
						<option value="茨城県">茨城県</option>
						<option value="埼玉県">埼玉県</option>
						<option value="千葉県">千葉県</option>
						<option value="東京都">東京都</option>
						<option value="神奈川県">神奈川県</option>
						<option value="岐阜県">岐阜県</option>
						<option value="静岡県">静岡県</option>
						<option value="愛知県">愛知県</option>
						<option value="滋賀県">滋賀県</option>
						<option value="京都府">京都府</option>
						<option value="大阪府">大阪府</option>
						<option value="兵庫県">兵庫県</option>
						<option value="奈良県">奈良県</option>
						<option value="岡山県">岡山県</option>
						<option value="徳島県">徳島県</option>
						<option value="福岡県">福岡県</option>
						</select>
						　<br class="sp-only">教室名
						<span id="span_class"><select id="d_class" name="d_class">
						<option value="">--</option>
						</select></span>
					</td>
				</tr>

				<tr>
					<th>希望日時<span class="h">必須</span></th>
					<td>
						<select id="d_year" name="d_year">
						<option value="">--</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						</select> 年　
						<select id="d_month" name="d_month">
						<option value="">--</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						</select> 月　
						<select id="d_day" name="d_day">
						<option value="">--</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						</select> 日
						　<br class="sp-only">時間帯　<select id="d_time" name="d_time">
						<option value="">--</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						</select> 時台
					</td>
				</tr>

				<tr>
					<th><label for="name">氏名<span class="h">必須</span></label></th>
					<td>姓：<input id="d_name1" name="d_name1" title=" 例：山田" type="text" placeholder=" 例：山田" />　<br class="sp-only">名：<input id="d_name2" title=" 例：太郎" name="d_name2" type="text" placeholder=" 例：太郎" /></td>
				</tr>

				<tr>
					<th><label for="kana">ふりがな</label></th>
					<td>姓：<input id="d_kana1" name="d_kana1" title=" 例：やまだ" type="text" placeholder=" 例：やまだ" />　<br class="sp-only">名：<input id="d_kana2" name="d_kana2" type="text" title=" 例：たろう" placeholder=" 例：たろう" /></td>
				</tr>

				<tr>
					<th><label for="age">年代</label></th>
					<td>
						<select id="d_age" name="d_age">
						<option value="">--</option>
						<option value="10">10</option>
						<option value="20">20</option>
						<option value="30">30</option>
						<option value="40">40</option>
						<option value="50">50</option>
						<option value="60">60</option>
						<option value="70">70</option>
						<option value="80">80</option>
						</select> 代
					</td>
				</tr>

				<tr>
					<th><label for="tel">電話番号（携帯可）<span class="h">必須</span></label></th>
					<td><input id="d_tel" name="d_tel" title=" 例：09000000000" type="text" placeholder=" 例：09000000000" /></td>
				</tr>

				<tr>
					<th><label for="mail">メールアドレス</label></th>
					<td><input id="d_mail" name="d_mail" title=" 例：bo@example.jp" type="text" placeholder=" 例：bo@example.jp" /></td>
				</tr>

				<tr>
					<th><label for="message">その他ご要望</label></th>
					<td><textarea id="message" name="d_message" wrap="PHYSICAL"></textarea></td>
				</tr>

			</table>

			<p>無料体験をお申込みの方にはご予約確定の旨、教室から折返しご連絡をさせていただきます。</p>

			<div class="c-contact_btn01">
				<img src="img/contact_btn01.png" width="450" height="100" class="content09_submit" style="cursor: pointer;" onclick="btn_submit_onclick();" />
			</div><!-- /.c-contact_btn01 -->


		</div><!-- /.c-contact-block2 -->

		<div class="c-contact-block3">
			<h3>個人情報の取扱いについて</h3>

			<div class="c-contact-block3__box">
				<p>株式会社チアリー（以下「当社」と記す）は個人情報を扱う企業として、個人情報保護についての重要性・社会的責任を認識し、ここに個人情報保護方針を定め、これを実行、維持することにより個人情報の保護に努めます。</p>
			</div><!-- /.c-contact-block3__box -->

			<div class="c-contact-block3__box">
				<h4>第1.個人情報保護に関する法令や規律の遵守</h4>
				<p>当社は、個人情報の保護に関する法令およびその他の規範を遵守し、個人情報を適正に取り扱います。</p>
			</div><!-- /.c-contact-block3__box -->

			<div class="c-contact-block3__box">
				<h4>第2.個人情報の取得</h4>
				<p>当社は、個人情報の保護に関する法令およびその他の規範を遵守し、個人情報を適正に取り扱います。当社が個人情報を取得する際には、利用目的を明確化するよう努力し、適法かつ公正な手段によって、個人情報を取得します。</p>
			</div><!-- /.c-contact-block3__box -->

			<div class="c-contact-block3__box">
				<h4>第3.個人情報の利用</h4>
				<p>当社が取得した個人情報は、取得の際に示した利用目的もしくは、それと合法的な関連性のある範囲内で、業務の遂行上必要な限りにおいて利用します。</p>
			</div><!-- /.c-contact-block3__box -->

			<div class="c-contact-block3__box">
				<h4>第4.個人情報の管理</h4>
				<p>当社は、個人情報の正確性および最新性を保ち、安全に管理するとともに個人情報の紛失、改ざん、漏えいなどを防止するため、必要かつ適正な情報セキュリティー対策を実現します。</p>
			</div><!-- /.c-contact-block3__box -->

			<div class="c-contact-block3__box">
				<h4>第5.個人情報の開示・訂正・利用停止・消去</h4>
				<p>当社は、本人が個人情報について、開示・訂正・利用停止・消去などを求める権利を有していることを認識し、個人情報相談窓口を設置して、これらの要求がある場合には、法令に従って速やかに対応します。</p>
			</div><!-- /.c-contact-block3__box -->

			<div class="c-contact-block3__box">
				<h4>第6.組織・体制</h4>
				<p>当社は、業務上使用する個人情報について適正な管理を実施するとともに、業務上の個人情報の適正な取扱いを実現するための体制を構築します。</p>
			</div><!-- /.c-contact-block3__box -->

			<div class="c-contact-block3__box">
				<h4>第7.見直し・改善・教育</h4>
				<p>当社は、この個人情報保護方針を実施するため、コンプライアンス・プログラムの要求事項を尊重し、これに準じた管理体制を構築するために随時見直し改善し、これを研修・教育を通じて社内に周知徹底させて実行し、継続的に改善することに努めてまいります。</p>
			</div><!-- /.c-contact-block3__box -->

		</div><!-- /.c-contact-block3 -->

	</div><!-- /.l-contact -->

<?php
}
?>

	<div class="l-contact-footer">
		<h6>Copyright (C) 2016 ○○○○○○○. All Rights Reserved.</h6>
	</div><!-- /.l-contact-footer -->

</div><!-- /#container -->

<input type="hidden" name="event" id="event" value="" />
</form>
</body>
</html>