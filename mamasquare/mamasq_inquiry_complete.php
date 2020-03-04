<?php

include_once( "mamasq_inquiry_options.php" );

foreach( $_POST as $k => $v ){
	if( get_magic_quotes_gpc() ){
		$v = stripslashes( $v );
	}
	$v = htmlspecialchars( $v, ENT_QUOTES );
	$$k = $v;
}

// メール送信プロセス
$subject = "オンラインパソコン講座の問合せがありました";
$uSubject = "オンラインパソコン講座の問合せを受付ました";

$to1 = CONTACT_MAIL_TO;
$header = "From: " . $to1 . "\n";

$date = date( "Y/m/d(D) H:i:s" );

$body .= "[受付日時]　" . $date . "\n";
$body .= "[所属拠点]　" . $base . "\n";
$body .= "[氏　　名]　" . $name . "\n";
$body .= "[ふりがな]　" . $kana . "\n";
$body .= "[メ ー ル]　" . $mail . "\n";
$body .= "[申込番号：講座名]　" . $course . "\n";
$body .= "[ご質問等]\n" . $question . "\n";

$uBody .= <<<EOF
{$name}様

本メールは、mama square従業員さま限定企画、
パソコン市民講座のオンラインパソコン講座にお問合せいただいた方にお送りしています。
もし、お心あたりがない場合は、このままメールを破棄してください。
またその旨、mamasq@cheery.co.jp までご連絡いただければ幸いです。


この度は「パソコン市民講座」のオンラインパソコン講座にお問合せありがとうございます。
下記内容にて、お問合せを受付いたしました。

-------------------------------------------------------------
{$body}
-------------------------------------------------------------

回答につきましては、ご入力いただいたメールアドレスに返信させていただきますので、
しばらくお待ちいただけますようお願いいたします。


*****************************************
株式会社 チアリー　オンラインパソコン講座担当
E-mail : mamasq@cheery.co.jp
URL : https://www.pc4353.net/mamasquare/
*****************************************
EOF;

mb_language( "ja" );
mb_internal_encoding( "UTF-8" );
if (mb_send_mail($to1, $subject, $body, $header)) {
	mb_send_mail($mail, $uSubject, $uBody, $header);
	$message .= "<p>送信完了致しました。お問い合わせ有難うございました。<br />\n";
	$message .= "<p>回答までしばらくお待ちくださいませ。</p>";
} else {
	$message .= "<p>送信に失敗しました。</p>\n";
	$message .= "<p>大変恐れ入りますが、再度お問い合わせをやり直してください。</p>\n";
}

$title = "オンラインパソコン講座 お問い合わせ（完了画面）";
$description = "パソコン市民講座 オンラインパソコン講座へのお問い合わせ（完了画面）";
$keywords = "オンラインパソコン講座お問い合わせ完了,";
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