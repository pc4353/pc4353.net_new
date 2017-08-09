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
$subject = "[パソコン市民講座]ご応募ありがとうございます";
$to = RECRUIT_MAIL_TO;
$header = "From: " . $mail . "\n";

$date = date( "Y/m/d(D) H:i:s" );

$body .= $name . "(" . $kana . ")様\n\n";

$body .= <<<EOF
この度は弊社「パソコン市民講座」のインストラクター募集に
ご応募いただき誠にありがとうございました。

まずは書類選考を行いますので、履歴書・職務経歴書を添付の上、
下記のメールアドレスへご送付ください。
※メールでの送付が不可能な場合には、ご郵送でも対応可能です。

書類選考後、合格者の方に一次選考のご案内をいたします。

【履歴書送付先】
件名に勤務希望教室を明記の上、jinji@cheery.co.jp 採用担当者 宛
に、履歴書データと画像データをご送付ください。
※ 画像データは、写メールなどでも構いません。

郵送の方は…
{$area[$aid][address]}　採用担当者

こちらからのご連絡は、{$area[$aid][phone]}の番号よりご連絡させていただきます。

受信設定などをされている方は、解除をお願いいたします。

何卒、宜しくお願い致します。

--------------------------------------------------------------------------

株式会社チアリーは、下記期間中を夏季休業とさせていただきます。

期　間　　2017年8月10日（木）～2017年8月16日（水）

上記期間中にいただいたご応募に関するお返事等のご対応は、
休業日明けの8月17日（木）から随時となりますので、予めご了承ください。

--------------------------------------------------------------------------
-------------------------------------
株式会社チアリー　パソコン事業部
{$area[$aid][address]}
{$area[$aid][phone]}
採用担当
-------------------------------------

以下、ご応募いただいた内容となります。


EOF;

$body .= "[受付日時]　" . $date . "\n";
$body .= "[応募教室]　" . $room[$rid][name] . "\n";
$body .= "[お 名 前]　" . $name . "(" . $kana . ")\n";
$body .= "[雇用形態]　" . $pattern . "\n";
$body .= "[性　　別]　" . $gender . "\n";
$body .= "[電話番号]　" . $phone . "\n";
$body .= "[メ ー ル]　" . $mail . "\n";
$body .= "[ご質問等]\n" . $question . "\n";

mb_language( "ja" );
mb_internal_encoding( "UTF-8" );
if( mb_send_mail( $to, $subject, $body, $header ) && mb_send_mail( $mail, $subject, $body, $header ) ) {
	$message .= "<p>送信を完了しました。ご応募ありがとうございます。<br>\n";
	$message .= "今回ご入力いただいたメールアドレス宛に、今後の流れを記載したメールを送信しておりますので、ご確認お願いいたします。</p>\n";
	$message .= "<p>ご不明な点などがございましたら、<br />";
} else {
	$message .= "<p>送信に失敗しました。</p>\n";
	$message .= "<p>大変恐れ入りますが、<br />\n";
}
$message .= "本部事務局（電話：<span class=\"bold\">" . $area[$aid][phone] . "</span>）までご連絡ください。</p>";
include_once("../lib/header.php");
?>
						<h2 class="mB20 bg-check blue font16">インストラクター応募フォーム</h2>
						<div class="section-lv2 contact">
<?php
echo $message;
?>
						</div><!-- /.section-lv2 -->
					</div><!-- /.i-pt -->
				</div><!-- /.block -->
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
<!-- Google Code for &#25505;&#29992; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001562290;
var google_conversion_language = "ja";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "QZAMCN698gEQssHK3QM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1001562290/?label=QZAMCN698gEQssHK3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for &#25505;&#29992; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 988902538;
var google_conversion_language = "ja";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "bK_WCJ7rjQIQiunF1wM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/988902538/?label=bK_WCJ7rjQIQiunF1wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for &#25505;&#29992; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 986985180;
var google_conversion_language = "ja";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "3mg3CKztlAIQ3OXQ1gM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/986985180/?label=3mg3CKztlAIQ3OXQ1gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for &#25505;&#29992; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1000218892;
var google_conversion_language = "ja";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "kZwvCOzukwIQjML43AM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1000218892/?label=kZwvCOzukwIQjML43AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for &#25505;&#29992;&#24540;&#21215;&#23436;&#20102; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1014763094;
var google_conversion_language = "ja";
var google_conversion_format = "1";
var google_conversion_color = "ffffff";
var google_conversion_label = "AYMbCLqX7gIQ1pzw4wM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1014763094/?label=AYMbCLqX7gIQ1pzw4wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<?php
include_once("../lib/footer.php");

} // stepを踏まないアクセスを回避
?>