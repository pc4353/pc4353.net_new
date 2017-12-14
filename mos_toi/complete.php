<?php

include_once( "options.php" );

foreach( $_POST as $k => $v ){
	if( get_magic_quotes_gpc() ){
		$v = stripslashes( $v );
	}
	$v = htmlspecialchars( $v, ENT_QUOTES );
	$$k = $v;
}

// メール送信プロセス
$subject = "[mos_toiパソコン市民講座]お問い合わせがありました";
$uSubject = "[mos_toiパソコン市民講座]お問い合わせありがとうございます";

$to = CONTACT_MAIL_TO;
$header = "From: " . $to . "\n";

$date = date( "Y/m/d(D) H:i:s" );

$body .= "[受付日時]　" . $date . "\n";
$body .= "[お 名 前]　" . $name . "(" . $kana . ")\n";
$body .= "[電話番号]　" . $phone . "\n";
$body .= "[メ ー ル]　" . $mail . "\n";
$body .= "[ご 住 所]　" . $address . "\n";
$body .= "[受講状況]　" . $member . "(" . $room1 . $room2 . ")\n";
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
if (mb_send_mail($to, $subject, $body, $header)) {
	mb_send_mail($mail, $uSubject, $uBody, $header);
	$message .= "<p>送信完了致しました。お問い合わせ有難うございました。<br />\n";
	$message .= "<p>ご不明な点などがございましたら、</p>";
} else {
	$message .= "<p>送信に失敗しました。</p>\n";
	$message .= "<p>大変恐れ入りますが、</p>\n";
}
$message .= "<p class=\"mgnT10\"><span class=\"bold\">東京本部事務局 03-5919-1151<br />大阪本部事務局 06-6262-4353</span><br />までお電話をお願い致します。</p>";

$title = "mosお問い合わせ（完了画面）";
$description = "mosパソコン市民講座へのお問い合わせはこちらから。";
$keywords = "mosお問い合わせ,";
include_once('../lib/home/config.php');
include_once('../lib/home/header.php');
?>
<div id="contents">
<ul id="bl">
	<li><a href="/">パソコン教室なら「パソコン市民講座」</a></li>
	<li><?=$title?></li>
</ul>

<h1><img src="/img/h1_contact.gif" alt="<?=$title?>" width="153" height="23" /></h1>
<div class="section2 mgnT20">
<?=$message;?>
</div>
</div>
<?php

include_once('../lib/home/footer.php');

?>