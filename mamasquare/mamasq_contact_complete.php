<?php

include_once( "mamasq_contact_options.php" );

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
$body .= "[所属拠点]　" . $base . "\n";
$body .= "[氏　　名]　" . $name . "\n";
$body .= "[ふりがな]　" . $kana . "\n";
$body .= "[電話番号]　" . $phone . "\n";
$body .= "[メ ー ル]　" . $mail . "\n";
$body .= "[申込番号：講座名]　" . $course . "\n";
$body .= "[受講開始希望月]　" . $start . "\n";
$body .= "[ご質問等]\n" . $question . "\n";

$uBody .= <<<EOF
{$name}様

本メールは、mama square従業員さま限定企画、
パソコン市民講座のオンラインパソコン講座にお申込みいただいた方にお送りしています。
もし、お心あたりがない場合は、このままメールを破棄してください。
またその旨、mamasq@cheery.co.jp までご連絡いただければ幸いです。


この度は「パソコン市民講座」のオンラインパソコン講座にお申込みありがとうございます。
下記内容にて、お申込みを受付いたしました。

-------------------------------------------------------------
{$body}
-------------------------------------------------------------

◆受講料：8,800円（税込）につきましては、下記口座にお振込をお願いいたします。

◆お振込先：
　　りそな銀行 新宿支店
　　普通口座 0333278
　　株式会社チアリー
※ご入金確認後にテキスト等の受講準備物を統括拠点あてにお送りします。

・必ず、ご本人名義でのお振込をお願いいたします。
（名義がご本人と異なる場合、ご入金を確認することができません）
・お振込後の返金はできません。振込手数料はご本人負担にてお願いいたします。
・ご入金が確認できない場合は開始月のご希望に沿えない場合がございます

みなさまに楽しく受講していただけるよう、サポートしてまいります。
何かご不明な点がございましたら、ご連絡ください。


*****************************************
株式会社 チアリー　オンラインパソコン講座担当
E-mail : mamasq@cheery.co.jp
URL : https://www.pc4353.net/mamasquare/
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
		<li><a href="/mamasquare/">ママスクエア 従業員さま専用サイト</a></li>
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