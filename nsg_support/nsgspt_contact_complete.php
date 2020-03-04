<?php

include_once( "nsgspt_contact_options.php" );

foreach( $_POST as $k => $v ){
	if( get_magic_quotes_gpc() ){
		$v = stripslashes( $v );
	}
	$v = htmlspecialchars( $v, ENT_QUOTES );
	$$k = $v;
}

// メール送信プロセス
$subject = "オンラインパソコン講座にお申込みがありました";
$uSubject = "オンラインパソコン講座のお申込みを受付ました";

$to1 = CONTACT_MAIL_TO_1;
$to2 = CONTACT_MAIL_TO_2;
$header = "From: " . $to1 . "\n";

$date = date( "Y/m/d(D) H:i:s" );

$body .= "[受付日時]　" . $date . "\n";
$body .= "[所属法人名]　" . $base . "\n";
$body .= "[氏　　名]　" . $name . "\n";
$body .= "[ふりがな]　" . $kana . "\n";
$body .= "[郵便番号]　" . $zip . "\n";
$body .= "[ご 住 所]　" . $addr . $addrs . "\n";
$body .= "[電話番号]　" . $phone . "\n";
$body .= "[メ ー ル]　" . $mail . "\n";
$body .= "[申込番号：講座名]　" . $course . "\n";
$body .= "[ご質問等]\n" . $question . "\n";

$uBody .= <<<EOF
{$name}様

本メールは、育休中のパパ・ママ支援限定企画、
パソコン市民講座提供の「パパ・ママ支援Web通信講座」にお申込みいただいた方にお送りしています。
もし、お心あたりがない場合は、このままメールを破棄してください。
またその旨、nsg0088@cheery.co.jp までご連絡いただければ幸いです。

この度はパソコン市民講座の「パパ・ママ支援Web通信講座」にお申込みありがとうございます。
下記内容にて、お申込みを受付いたしました。

-------------------------------------------------------------
{$body}
-------------------------------------------------------------

◆受講料：9,130円（税込）につきましては、下記口座にお振込をお願いいたします。

◆お振込先：
　　りそな銀行 新宿支店
　　普通口座 0333278
　　株式会社チアリー
※ご入金確認後にテキスト等の受講準備物をご入力いただいた住所あてにお送りします。
（毎月1日・11日・21日締切、最初の平日より5営業日以内に発送予定です）

・必ず、郵便番号の下4ケタ+ご本人名義でのお振込をお願いいたします。「例：1234ヤマダ タロウ」
（コード・名義がご本人と異なる場合、ご入金を確認することができません）
・お振込後の返金はできません。振込手数料はご本人負担にてお願いいたします。
・ご入金が確認できない場合は受講の準備が開始されませんので、ご注意ください。

みなさまにご受講いただき、ステップアップしていただけるようサポートしてまいります。
何かご不明な点がございましたら、ご連絡ください。


*****************************************
株式会社 チアリー　パパ・ママ支援Web通信講座担当
E-mail : nsg0088@cheery.co.jp
URL : https://www.pc4353.net/nsg_support/
*****************************************
EOF;

mb_language( "ja" );
mb_internal_encoding( "UTF-8" );
if (mb_send_mail($to1, $subject, $body, $header) && mb_send_mail( $to2, $subject, $body, $header )) {
	mb_send_mail($mail, $uSubject, $uBody, $header);
	$message .= "<p>送信完了致しました。お申込いただき有難うございました。</p>\n";
} else {
	$message .= "<p>送信に失敗しました。</p>\n";
	$message .= "<p>大変恐れ入りますが、再度お申込をやり直してください。</p>\n";
}

$title = "オンラインパソコン講座 お申し込み（完了画面）";
$description = "パソコン市民講座 オンラインパソコン講座へのお申し込み（完了画面）";
$keywords = "オンラインパソコン講座お申し込み完了,";
$pageId = 'contact';
include_once('../lib/home/config.php');
include_once('../lib/home/header-mama.php');
?>

<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン教室なら「パソコン市民講座」</a></li>
		<li><a href="/nsg_support/">NSGグループ パパママ支援専用サイト</a></li>
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