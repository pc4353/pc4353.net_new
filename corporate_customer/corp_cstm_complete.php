<?php

include_once( "corp_cstm_options.php" );

foreach( $_POST as $k => $v ){
	if( get_magic_quotes_gpc() ){
		$v = stripslashes( $v );
	}
	$v = htmlspecialchars( $v, ENT_QUOTES );
	$$k = $v;
}

// メール送信プロセス
$subject = "[法人様向け]お問い合わせがありました";
$uSubject = "[パソコン市民講座]お問い合わせありがとうございます";

$to1 = CONTACT_MAIL_TO_1;
$to2 = CONTACT_MAIL_TO_2;
$header = "From: " . $to1 . "\n";

$date = date( "Y/m/d(D) H:i:s" );

$body .= "[受付日時]　" . $date . "\n";
$body .= "[法人様名]　" . $corporate ."\n";
$body .= "[ご担当者名]　" . $name . "(" . $kana . ")\n";
$body .= "[電話番号]　" . $phone . "\n";
$body .= "[メ ー ル]　" . $mail . "\n";
$body .= "[都道府県]　" . $pref1 . "\n";
$body .= "[認知方法]　" . checkboxComp( $_POST[wa] ) . "(" . $other . ")\n";
$body .= "[内　　容]\n" . $question . "\n";

$uBody .= <<<EOF
{$name}様


この度は、株式会社チアリーに
お問い合わせいただきまして誠にありがとうございます。
下記の内容につきまして、後日担当よりご連絡させていただきます。

-------------------------------------------------------------
{$body}
-------------------------------------------------------------

今後とも「パソコン市民講座」をよろしくお願いいたします。

************************************
株式会社チアリー
大阪本部事務局
〒541-0051
大阪市中央区備後町2-6-8 サンライズビル 13F
Tel：06-6262-4353 (代表) 

東京本部事務局
〒160-0022
東京都新宿区新宿1-15-9　さわだビル 9階
Tel：03-5919-1151（代表）  
************************************
EOF;

mb_language( "ja" );
mb_internal_encoding( "UTF-8" );
if (mb_send_mail($to1, $subject, $body, $header) && mb_send_mail( $to2, $subject, $body, $header )) {
	mb_send_mail($mail, $uSubject, $uBody, $header);
	$message .= "<p>送信完了致しました。お問い合わせ有難うございました。<br />\n";
	$message .= "<p>ご不明な点などがございましたら、</p>";
} else {
	$message .= "<p>送信に失敗しました。</p>\n";
	$message .= "<p>大変恐れ入りますが、</p>\n";
}
$message .= "<p class=\"mgnT10\"><span class=\"bold\">東京本部事務局 03-5919-1151<br />大阪本部事務局 06-6262-4353</span><br />までお電話をお願い致します。</p>";

$title = "法人様向けお問い合わせ（完了画面）";
$description = "パソコン市民講座への法人様向けお問い合わせ完了画面。";
$keywords = "法人様向け,お問い合わせ,";
$pageId = 'contact';
include_once('../lib/home/config.php');
include_once('../lib/home/header-wdlc.php');
?>

<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン教室なら「パソコン市民講座」</a></li>
		<li><a href="/corporate_customer/">法人様向けサービスのご案内</a></li>
		<li><?=$title?></li>
	</ul>
</div><!-- /.l-breadcrumb -->

<div class="l-pagetitle">
<div class="c-wrap">
	<h1><?=$title?></h1>
</div>
</div><!-- /.l-pagetitle -->

<div id="contents">

<div class="section2 mgnT20">
<?=$message;?>
</div>
</div>
<?php

include_once('../lib/home/footer-wdlc.php');

?>