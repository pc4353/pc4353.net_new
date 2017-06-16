<?php

date_default_timezone_set('Asia/Tokyo');
$year = date("Y");

$array_m01_pref = array();

$handle = fopen("./data/m01_pref.txt", "r");
while($row = fgets($handle, 1024)) {
  list(
  $m01_pref_cd,
  $m01_pref_name
  ) = explode("<>", $row);
  array_push($array_m01_pref, array(
    "m01_pref_cd"  => $m01_pref_cd,
    "m01_pref_name" => $m01_pref_name
  ));
}
fclose($handle);

$array_m02_class = array();

$handle = fopen("./data/m02_class.txt", "r");
while($row = fgets($handle, 1024)) {
  list(
  $m02_pref_cd,
  $m02_class_cd,
  $m02_class_name,
  $m02_class_mail,
  $m02_class_tel
  ) = explode("<>", $row);
  array_push($array_m02_class, array(
    "m02_pref_cd"    => $m02_pref_cd,
    "m02_class_cd"   => $m02_class_cd,
    "m02_class_name" => $m02_class_name,
    "m02_class_mail" => $m02_class_mail,
    "m02_class_tel" => $m02_class_tel
  ));
}
fclose($handle);

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
$d_check1  = $_POST['d_check1'];
$d_check2  = $_POST['d_check2'];
$d_check3  = $_POST['d_check3'];
$d_check4  = $_POST['d_check4'];
$d_check5  = $_POST['d_check5'];
$d_message = $_POST['d_message'];

if($d_name1 == " 例：山田") {
  $d_name1 = "";
}

if($d_name2 == " 例：太郎") {
  $d_name2 = "";
}

if($d_kana1 == " 例：やまだ") {
  $d_kana1 = "";
}

if($d_kana2 == " 例：たろう") {
  $d_kana2 = "";
}

if($d_tel == " 例：09000000000") {
  $d_tel = "";
}

if($d_mail == " 例：bo@example.jp") {
  $d_mail = "";
}

if($event == "1") {

  if($d_pref == "") {
    $msg_pref = "<div class=\"error\">都道府県を選択してください。</div>";
    $event = "";
  }

  if($d_class == "") {
    $msg_class = "<div class=\"error\">教室名を選択してください。</div>";
    $event = "";
  }

  if($d_year == "") {
    $msg_year = "<div class=\"error\">希望日時「年」を選択してください。</div>";
    $event = "";
  }

  if($d_month == "") {
    $msg_month = "<div class=\"error\">希望日時「月」を選択してください。</div>";
    $event = "";
  }

  if($d_day == "") {
    $msg_day = "<div class=\"error\">希望日時「日」を選択してください。</div>";
    $event = "";
  }

  if($d_time == "") {
    $msg_time = "<div class=\"error\">希望日時「時間帯」を選択してください。</div>";
    $event = "";
  }

  if($d_name1 == "") {
    $msg_name1 = "<div class=\"error\">お名前「姓」を入力してください。</div>";
    $event = "";
  }

  if($d_name2 == "") {
    $msg_name2 = "<div class=\"error\">お名前「名」を入力してください。</div>";
    $event = "";
  }

  if($d_tel == "") {
    $msg_tel = "<div class=\"error\">電話番号を入力してください。</div>";
    $event = "";
  }

}

$d_pref_name = "";
for($i=0; $i<count($array_m01_pref); $i++) {
  $m01_pref_cd   = $array_m01_pref[$i]['m01_pref_cd'];
  $m01_pref_name = $array_m01_pref[$i]['m01_pref_name'];
  if($m01_pref_cd == $d_pref) {
    $d_pref_name = $m01_pref_name;
    break;
  }
}
$d_class_name = "";
$d_class_mail = "";
$d_class_tel  = "";
for($i=0; $i<count($array_m02_class); $i++) {
  $m02_pref_cd    = $array_m02_class[$i]['m02_pref_cd'];
  $m02_class_cd   = $array_m02_class[$i]['m02_class_cd'];
  $m02_class_name = $array_m02_class[$i]['m02_class_name'];
  $m02_class_mail = $array_m02_class[$i]['m02_class_mail'];
  $m02_class_tel  = $array_m02_class[$i]['m02_class_tel'];
  if($m02_pref_cd == $d_pref && $m02_class_cd == $d_class) {
    $d_class_name = $m02_class_name;
    $d_class_mail = $m02_class_mail;
    $d_class_tel  = $m02_class_tel;
    break;
  }
}

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

  $d_check = "";
  if($d_check1 == "1") {
    $d_check .= "・資格を取得したい（サーティファイ・MOS）\n";
  }
  if($d_check2 == "1") {
    $d_check .= "・仕事に活かしたい\n";
  }
  if($d_check3 == "1") {
    $d_check .= "・スキルアップしたい\n";
  }
  if($d_check4 == "1") {
    $d_check .= "・就・転職活動に活かしたい\n";
  }
  if($d_check5 == "1") {
    $d_check .= "・その他\n";
  }

  $body  = "";

  $body .= <<< EOM
*************************************************************

お申し込みありがとうございます。
ご予約を確定するために、担当の者よりご連絡差し上げます。
ご連絡があるまで今暫くお待ち下さい。

*************************************************************

【希望教室】
都道府県：${d_pref_name}
教室名：${d_class_name}

【希望日時】
${d_year}年${d_month}月${d_day}日
時間帯：${d_time}時台

【氏名】
${d_name1}　${d_name2}

【ふりがな】
${w_kana}

【年代】
${w_age}

【電話番号】
${d_tel}

【メールアドレス】
${d_mail}

【あなたの目的】
${d_check}

【その他ご要望】
${d_message}

============================================================

ビジネスオンライン
http://www.pc4353.net/

============================================================
EOM;

  // お申込者向けメール

  if($d_mail != "") {

  $to          = "$d_mail";
  $return_path = "$d_class_mail";
  $from_nm     = "$d_class_name";
  $from_mail   = "$d_class_mail";
  $subject     = "【ビジネスオンライン】 お申し込みありがとうございます";

    $header  = "Return-Path: $return_path\n";
    $header .= "From:" . mb_encode_mimeheader($from_nm) . "<$from_mail>\n";
    $header .= "Reply-To: $from_mail\n";

    mb_send_mail($to, $subject, $body, $header);

  }

  // 教室向けメール

  if($d_class_mail != "") {

  $to          = "$d_class_mail";
  $return_path = "$d_class_mail";
  $from_nm     = "$d_class_name";
  $from_mail   = "$d_class_mail";
  $subject     = "【ビジネスオンライン】 お申し込みがありました";

    $header  = "Return-Path: $return_path\n";
    $header .= "From:" . mb_encode_mimeheader($from_nm) . "<$from_mail>\n";
    $header .= "Reply-To: $from_mail\n";

    mb_send_mail($to, $subject, $body, $header);

  }

  // 管理者向けメール

  $to          = "student@pc4353.net";
  $return_path = "$d_class_mail";
  $from_nm     = "$d_class_name";
  $from_mail   = "$d_class_mail";
  $subject     = "【ビジネスオンライン】 お申し込みがありました";

  $header  = "Return-Path: $return_path\n";
  $header .= "From:" . mb_encode_mimeheader($from_nm) . "<$from_mail>\n";
  $header .= "Reply-To: $from_mail\n";

  mb_send_mail($to, $subject, $body, $header);

  header("Location: ./biz-online_contact_complete.html");

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="description" content="これまでなかった！ 自宅＋教室で学べる新パソコンスクール誕生！" />
	<meta name="keyword" content="パソコン,PC,教室,チアリー,cheery,スクール,資格,ビジネスオンライン" />

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
<!-- GoogleAnalytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-60689014-1', 'auto');
  ga('require', 'displayfeatures');
  ga('require', 'linkid', 'linkid.js');
  ga('send', 'pageview');

  ga('create', 'UA-19029672-1', 'auto', {'name': 'secondTracker'});
  ga('secondTracker.require', 'displayfeatures');
  ga('secondTracker.require', 'linkid', 'linkid.js');
  ga('secondTracker.send','pageview');
</script>
<script type="text/javascript">
 (function(w,d,s){
  var f=d.getElementsByTagName(s)[0],j=d.createElement(s);
  j.async=true;j.src='//dmp.im-apps.net/js/9615/0001/itm.js';
  f.parentNode.insertBefore(j, f);
 })(window,document,'script');
</script>


<form name="form1" method="post" action="">

<div id="container">

	<div class="l-header">
		<div class="c-cheader__block1">
			<h1><a href="./biz-online.html"><img src="biz-online_img/logo.png" width="555" height="81" alt="ビジネスオンライン" /></a></h1>
		</div><!-- c-cheader__block1 -->

	</div><!-- /.l-header -->

	<div class="l-contact">



<?php
if($event == "1") {
?>

		<div class="c-contact-block1">
			<h2>受講申し込み・無料スキル診断予約フォーム</h2>

<?php /*
			<div class="c-contact-block1__head">
				<h3>お急ぎの方は直接お電話にてお申し込みください</h3>
				<h4><?php echo $d_class_tel; ?>
				<img src="biz-online_img/contact_img02.png" width="387" height="40" alt="03-1234-5678" /></h4>
			</div><!-- /.c-contact-block1__head -->
*/ ?>

		</div><!-- /.c-contact-block1 -->

		<div class="c-contact-flow">
			<img src="biz-online_img/contact_flow2.png" width="960" height="60" alt="入力内容の確認" />
		</div><!-- /.c-contact-flow -->

		<div class="c-contact-block2">

			<script type="text/javascript">
			if(window.addEventListener) {
				window.addEventListener('load', function_onload, false);
			} else if (window.attachEvent) {
				window.attachEvent('onload', function_onload);
			}
			function function_onload() {
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
					<td>都道府県：<?php echo $d_pref_name; ?>　<br class="sp-only">教室名：<?php echo $d_class_name; ?></td>
				</tr>

				<tr>
					<th>※お急ぎの方は直接お申し込みください</th>
					<td><?php if($event == "1") { echo $d_class_tel; } ?></td>
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
					<th><label for="check">ご利用の目的</label></th>
					<td>
						<?php
							if($d_check1 == "1") {
							  echo "・資格を取得したい（サーティファイ・MOS）<br />";
						}
							if($d_check2 == "1") {
							  echo "・仕事に活かしたい<br />";
						}
							if($d_check3 == "1") {
							  echo "・スキルアップしたい<br />";
						}
							if($d_check4 == "1") {
							  echo "・就・転職活動に活かしたい<br />";
						}
							if($d_check5 == "1") {
							  echo "・その他<br />";
						}
						?>
					</td>
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
				<input type="hidden" name="d_check1" id="d_check1" value="<?php echo $d_check1; ?>" />
				<input type="hidden" name="d_check2" id="d_check2" value="<?php echo $d_check2; ?>" />
				<input type="hidden" name="d_check3" id="d_check3" value="<?php echo $d_check3; ?>" />
				<input type="hidden" name="d_check4" id="d_check4" value="<?php echo $d_check4; ?>" />
				<input type="hidden" name="d_check5" id="d_check5" value="<?php echo $d_check5; ?>" />
				<input type="hidden" name="d_message" id="d_message" value="<?php echo $d_message; ?>" />

			</table>

			<p>無料体験をお申込みの方にはご予約確定の旨、教室から折返しご連絡をさせていただきます。</p>

			<div class="c-contact_btn01">
				<img src="biz-online_img/contact_btn02.png" width="450" height="100" class="content09_submit" style="cursor: pointer;" onclick="btn_submit_onclick();" />
			</div><!-- /.c-contact_btn01 -->


		</div><!-- /.c-contact-block2 -->

	</div><!-- /.l-contact -->
<?php
} else {
?>


		<div class="c-contact-block1">
			<h2>受講申し込み・無料スキル診断予約フォーム</h2>

<?php /*
			<div class="c-contact-block1__head">
				<h3>お急ぎの方は直接お電話にてお申し込みください</h3>
				<h4><?php if($event == "1") { echo $d_class_tel; } ?>
				<img src="biz-online_img/contact_img02.png" width="387" height="40" alt="03-1234-5678" /></h4>
			</div><!-- /.c-contact-block1__head -->
		</div><!-- /.c-contact-block1 -->
*/ ?>

		<div class="c-contact-flow">
			<img src="biz-online_img/contact_flow1.png" width="960" height="60" alt="お客様情報の入力" />
		</div><!-- /.c-contact-flow -->

		<div class="c-contact-block2">

			<script type="text/javascript">
			if(window.addEventListener) {
				window.addEventListener('load', function_onload, false);
			} else if (window.attachEvent) {
				window.attachEvent('onload', function_onload);
			}
			function function_onload() {
			}
			function d_pref_onchange() {
				document.form1.d_class.value = '';
				document.form1.submit();
			}
			function d_class_onchange() {
				document.form1.submit();
			}
			function btn_submit_onclick() {
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
<?php
for($i=0; $i<count($array_m01_pref); $i++) {
  $m01_pref_cd   = $array_m01_pref[$i]['m01_pref_cd'];
  $m01_pref_name = $array_m01_pref[$i]['m01_pref_name'];
  $selected = "";
  if($m01_pref_cd == $d_pref) {
    $selected = " selected";
  }
?>
						<option value="<?php echo $m01_pref_cd;?>"<?php echo $selected; ?>><?php echo $m01_pref_name;?></option>
<?php
}
?>
						</select>
						　<br class="sp-only">教室名
						<select id="d_class" name="d_class" onchange="d_class_onchange();">
						<option value="">--</option>
<?php
for($i=0; $i<count($array_m02_class); $i++) {
  $m02_pref_cd    = $array_m02_class[$i]['m02_pref_cd'];
  $m02_class_cd   = $array_m02_class[$i]['m02_class_cd'];
  $m02_class_name = $array_m02_class[$i]['m02_class_name'];
  if($m02_pref_cd == $d_pref) {
    $selected = "";
    if($m02_class_cd == $d_class) {
      $selected = " selected";
    }
?>
						<option value="<?php echo $m02_class_cd;?>"<?php echo $selected; ?>><?php echo $m02_class_name;?></option>
<?php
  }
}
?>
						</select><?php echo $msg_pref; ?><?php echo $msg_class; ?>
					</td>
				</tr>


				<tr>
					<th>※お急ぎの方は直接お申し込みください</th>
					<td class="phone"><?php if($d_class == "") { echo '<span class="att">※教室を選択していただくと電話番号が表示されます</span>'; } else { echo $d_class_tel; } ?></td>
				</tr>


				<tr>
					<th>希望日時<span class="h">必須</span></th>
					<td>
						<select id="d_year" name="d_year">
						<option value="">--</option>
<?php
for($i=$year; $i<=$year+4; $i++) {
  $iiii = sprintf("%04d", $i);
  $selected = "";
  if($iiii == $d_year) {
    $selected = " selected";
  }
?>
						<option value="<?php echo $iiii; ?>"<?php echo $selected; ?>><?php echo $iiii; ?></option>
<?php
}
?>
						</select> 年　
						<select id="d_month" name="d_month">
						<option value="">--</option>
<?php
for($i=1; $i<=12; $i++) {
  $ii = sprintf("%02d", $i);
  $selected = "";
  if($ii == $d_month) {
    $selected = " selected";
  }
?>
						<option value="<?php echo $ii; ?>"<?php echo $selected; ?>><?php echo $ii; ?></option>
<?php
}
?>

						</select> 月　
						<select id="d_day" name="d_day">
						<option value="">--</option>
<?php
for($i=1; $i<=31; $i++) {
  $ii = sprintf("%02d", $i);
  $selected = "";
  if($ii == $d_day) {
    $selected = " selected";
  }
?>
						<option value="<?php echo $ii; ?>"<?php echo $selected; ?>><?php echo $ii; ?></option>
<?php
}
?>
						</select> 日
						　<br class="sp-only">時間帯　<select id="d_time" name="d_time">
						<option value="">--</option>
<?php
for($i=10; $i<=19; $i++) {
  $ii = sprintf("%02d", $i);
  $selected = "";
  if($ii == $d_time) {
    $selected = " selected";
  }
?>
						<option value="<?php echo $ii; ?>"<?php echo $selected; ?>><?php echo $ii; ?></option>
<?php
}
?>
						</select> 時台<?php echo $msg_year; ?><?php echo $msg_month; ?><?php echo $msg_day; ?><?php echo $msg_time; ?>
					</td>
				</tr>

				<tr>
					<th><label for="name">氏名<span class="h">必須</span></label></th>
					<td>姓：<input id="d_name1" class="jq-placeholder" name="d_name1" type="text" title=" 例：山田" placeholder=" 例：山田" value="<?php echo $d_name1; ?>" />　<br class="sp-only">名：<input id="d_name2" name="d_name2" type="text" title=" 例：太郎" placeholder=" 例：太郎" value="<?php echo $d_name2; ?>" /><?php echo $msg_name1; ?><?php echo $msg_name2; ?></td>
				</tr>

				<tr>
					<th><label for="kana">ふりがな</label></th>
					<td>姓：<input id="d_kana1" class="jq-placeholder" name="d_kana1" type="text" title=" 例：やまだ" placeholder=" 例：やまだ" value="<?php echo $d_kana1; ?>" />　<br class="sp-only">名：<input id="d_kana2" class="jq-placeholder" name="d_kana2" type="text" title=" 例：たろう" placeholder=" 例：たろう" value="<?php echo $d_kana2; ?>" /></td>
				</tr>

				<tr>
					<th><label for="age">年代</label></th>
					<td>
						<select id="d_age" name="d_age">
						<option value="">--</option>
<?php
for($i=10; $i<=80; $i+=10) {
  $ii = sprintf("%02d", $i);
  $selected = "";
  if($ii == $d_age) {
    $selected = " selected";
  }
?>
						<option value="<?php echo $ii; ?>"<?php echo $selected; ?>><?php echo $ii; ?></option>
<?php
}
?>
						</select> 代
					</td>
				</tr>

				<tr>
					<th><label for="tel">電話番号（携帯可）<span class="h">必須</span></label></th>
					<td><input id="d_tel" class="jq-placeholder" name="d_tel" type="text" title=" 例：09000000000" placeholder=" 例：09000000000" value="<?php echo $d_tel; ?>" /><?php echo $msg_tel; ?></td>
				</tr>

				<tr>
					<th><label for="mail">メールアドレス</label></th>
					<td><input id="d_mail" class="jq-placeholder" name="d_mail" type="text" title=" 例：bo@example.jp" placeholder=" 例：bo@example.jp" value="<?php echo $d_mail; ?>" /></td>
				</tr>

				<tr>
					<th><label for="check">ご利用の目的</label></th>
					<td class="check">
						<input type="checkbox" id="d_check1" name="d_check1" value="1">資格を取得したい（サーティファイ・MOS）<br>
						<input type="checkbox" id="d_check2" name="d_check2" value="1">仕事に活かしたい<br>
						<input type="checkbox" id="d_check3" name="d_check3" value="1">スキルアップしたい<br>
						<input type="checkbox" id="d_check4" name="d_check4" value="1">就・転職活動に活かしたい<br>
						<input type="checkbox" id="d_check5" name="d_check5" value="1">その他
					</td>
				</tr>

				<tr>
					<th><label for="message">その他ご要望</label></th>
					<td><textarea id="message" name="d_message" wrap="PHYSICAL"><?php echo $d_message; ?></textarea></td>
				</tr>

			</table>

			<p>無料体験をお申込みの方にはご予約確定の旨、教室から折返しご連絡をさせていただきます。</p>

			<div class="c-contact_btn01">
				<img src="biz-online_img/contact_btn01.png" width="450" height="100" class="content09_submit" style="cursor: pointer;" onclick="btn_submit_onclick();" />
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
		<h6>パソコン市民講座運営元：<a href="http://www.cheery.co.jp/" target="_blank">株式会社チアリー</a></h6>
	</div><!-- /.l-contact-footer -->

</div><!-- /#container -->

<input type="hidden" name="event" id="event" value="" />
</form>

<!-- YahooListing -->
<script type="text/javascript">
  (function () {
    var tagjs = document.createElement("script");
    var s = document.getElementsByTagName("script")[0];
    tagjs.async = true;
    tagjs.src = "//s.yjtag.jp/tag.js#site=iBKwITQ";
    s.parentNode.insertBefore(tagjs, s);
  }());
</script>
<noscript>
  <iframe src="//b.yjtag.jp/iframe?c=iBKwITQ" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</noscript>

</body>
</html>