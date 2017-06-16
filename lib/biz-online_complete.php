<?php

$step = $_POST["step"];

if( !$step ) {
	header("Location: " . $script_path );
} else {

foreach( $_POST as $k => $v ){
	if( get_magic_quotes_gpc() ){
		$v = stripslashes( $v );
	}
	$v = htmlspecialchars( $v, ENT_QUOTES );
	$$k = $v;
}

// メール送信プロセス
$subject = "[ビジネスオンライン]お申し込みへの対応お願いします";

$to1 = $room[$rid][mail];
$to2 = CONTACT_MAIL_TO;
$header = "From: " . $to1 . "\n";

$date = date( "Y/m/d(D) H:i:s" );

$body .= "[受付日時]　" . $date . "\n";
$body .= "[応募教室]　" . $room[$rid][name] . "\n";
$body .= "[お 名 前]　" . $name . "(" . $kana . ")\n";
$body .= "[電話番号]　" . $phone . "\n";
$body .= "[メールアドレス]　" . $mail . "\n";
$body .= "[住　　所]　" . $address . "\n";
$body .= "[無料説明会希望日]　" . $nichiji_1 . "月" . $nichiji_2 . "日　" . $nichiji_3 . "\n";
//$body .= "[ご希望のコース]　" . $course . "\n";
$body .= "[ご質問等]\n" . $question . "\n";

mb_language( "ja" );
mb_internal_encoding( "UTF-8" );
if( mb_send_mail( $to1, $subject, $body, $header ) && mb_send_mail( $to2, $subject, $body, $header ) ) {
	$message .= "<p>送信を完了しました。お申し込みありがとうございました。<br />\n";
	$message .= "後ほど、予約確認のお電話を差し上げます。<br />\n";
	$message .= "お申し込みいただき、ありがとうございました。</p>\n";
	$message .= "<p>ご不明な点などがございましたら、<br />";
} else {
	$message .= "<p>送信に失敗しました。</p>\n";
	$message .= "<p>大変恐れ入りますが、<br />\n";
}
$message .= "当教室、または本部事務局（電話：<span class=\"bold\">" . $area[$aid][phone] . "</span> 受付時間：月～金曜 9:30～18:00）までご連絡ください。</p>";
include_once("../lib/header.php");
?>
                <div id="toiawase_form">
					<h1 class="mB30"><img src="/images/contact_03.png" width="632" height="45" alt="お問い合わせ" /></h1>
					<div class="i-pt clearfix mB20 mR10">
						<h2 class="mB20 bg-check blue font20">お申し込み完了のお知らせ</h2>
						<div class="section-lv2 contact">
<?=$message?>
						</div><!-- /.section-lv2 -->
					</div><!-- /.i-pt -->
                </div><!-- /#toiawase_form -->
				</div><!-- /.block -->
				</div><!-- /#kasou -->

<SCRIPT language="JavaScript" type="text/javascript">
<!-- Yahoo Japan Corporation.
window.ysm_customData = new Object();
window.ysm_customData.conversion = "transId=,currency=,amount=";
var ysm_accountid  = "1315393TRU0DD5K3ELIBBRVNRRK";
document.write("<SCR" + "IPT language='JavaScript' type='text/javascript' " 
+ "SRC=//" + "srv2.wa.marketingsolutions.yahoo.com" + "/script/ScriptServlet" + "?aid=" + ysm_accountid 
+ "></SCR" + "IPT>");
// -->
</SCRIPT>

<script language="Javascript" type="text/javascript">
<!--
var account_id="Ot05zqgOLDWUgRVy_Vo1"; 
var transaction_id = "";
var amount = "";
if (location.protocol == "https:") { var protocol = "https:"} else { var protocol = "http:" }
document.write("<img width=1 height=1 border=0 src='" + protocol + "//b90.yahoo.co.jp/c?account_id=" + account_id + "&transaction_id=" + transaction_id + "&amount=" + amount + "'>");
//-->
</script>

<!-- Google Code for &#30003;&#36796;&#23436;&#20102; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1014763094;
var google_conversion_language = "ja";
var google_conversion_format = "1";
var google_conversion_color = "ffffff";
var google_conversion_label = "VdVACLKY7gIQ1pzw4wM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1014763094/?label=VdVACLKY7gIQ1pzw4wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Google Code for &#28961;&#26009;&#20307;&#39443; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1002710857;
var google_conversion_language = "ja";
var google_conversion_format = "1";
var google_conversion_color = "ffffff";
var google_conversion_label = "5QvmCMfMkQMQyc6Q3gM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1002710857/?value=0&amp;label=5QvmCMfMkQMQyc6Q3gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Yahoo Code for &#28961;&#26009;&#20307;&#39443;&#30003;&#36796; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_conversion_id = 1000011299;
var yahoo_conversion_label = "T58fCLzjzgIQjITu5AM";
var yahoo_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://i.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://b91.yahoo.co.jp/pagead/conversion/1000011299/?label=T58fCLzjzgIQjITu5AM&amp;guid=ON&amp;script=0&amp;disvt=true"/>
</div>
</noscript>

<script language="Javascript" type="text/javascript">
<!--
var account_id="0Q7uDGUOLDWN1zD4Apng"; 
var transaction_id = "";
var amount = "";
if (location.protocol == "https:") { var protocol = "https:"} else { var protocol = "http:" }
document.write("<img width=1 height=1 border=0 src='" + protocol + "//b90.yahoo.co.jp/c?account_id=" + account_id + "&transaction_id=" + transaction_id + "&amount=" + amount + "'>");
//-->
</script>

<?php
include_once("../lib/footer.php");
} // stepを踏まないアクセスを回避
?>