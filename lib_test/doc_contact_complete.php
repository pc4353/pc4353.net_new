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
$subject = "【テスト】[パソコン市民講座]資料請求の対応お願いします";

$to1 = $room[$rid][mail];
$to2 = CONTACT_MAIL_TO;
$header = "From: " . $to1 . "\n";

$date = date( "Y/m/d(D) H:i:s" );

$body .= "[受付日時]　" . $date . "\n";
$body .= "[申込教室]　" . $room[$rid][name] . "教室\n";
$body .= "[お 名 前]　" . $name . "(" . $kana . ")\n";
$body .= "[郵便番号]　" . $zip . "\n";
$body .= "[ご 住 所]　" . $addr . $addrs . "\n";
$body .= "[電話番号]　" . $phone . "\n";
$body .= "[メ ー ル]　" . $mail . "\n";
$body .= "[年　　代]　" . $old . "\n";
$body .= "[目　　的]　" . checkboxComp( $_POST[purpose] ) . "\n";
$body .= "[そ の 他]　" . $other . "\n";
$body .= "[無料体験]　" . $free . "\n";
//$body .= "[希望日時]　" . $month . "月" . $day . "日" . $time . "時頃\n";
$body .= "[無料体験希望日]　" . $nichiji_1 . "月 " . $nichiji_2 . "日　" . $nichiji_3 . "\n";
$body .= "[ご質問等]\n" . $question . "\n";
$ua=$_SERVER['HTTP_USER_AGENT'];
  if((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false)) {
$body .= "\nスマホサイトから送信\n";
  } else {
$body .= "\nパソコンサイトから送信\n";
  }

mb_language( "ja" );
mb_internal_encoding( "UTF-8" );
if( mb_send_mail( $to1, $subject, $body, $header ) && mb_send_mail( $to2, $subject, $body, $header ) ) {
	$message .= "<p>送信を完了しました。お申し込みありがとうございました。<br />\n";
	$message .= "後ほど、担当よりご連絡させていただきます。</p>\n";
	$message .= "<p>ご不明な点などがございましたら、<br />";
} else {
	$message .= "<p>送信に失敗しました。</p>\n";
	$message .= "<p>大変恐れ入りますが、<br />\n";
}
$message .= "当教室、または本部事務局（電話：<span class=\"bold\">" . $area[$aid][phone] . "）</span>までご連絡ください。<br /><br />";
$message .= "<a href=/" . $room[$rid][dir] . "/>トップページへ戻る</a></p>\n";
include_once("../lib_test/header_contact.php");
?>
					<div class="i-pt clearfix mB20 mR10">
						<h2 class="mB20 bg-check blue font20"><img src="/images/mos2010/ico-mail.gif" width="42" height="30" alt="メール" /> お申し込み完了のお知らせ</h2>
                        <div class="mB20"><img src="/images/img-form_step3.jpg" width="810" height="55" alt="申込完了" /></div>
						<div class="section-lv2 contact thanks_msg">
<?=$message?>
						</div><!-- /.section-lv2 -->
					</div><!-- /.i-pt -->
				</div><!-- /.block -->
				</div><!-- /#kasou -->
<?php
include_once("../lib_test/footer_contact.php");
} // stepを踏まないアクセスを回避
?>