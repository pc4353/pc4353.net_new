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

<?php
include_once("../lib/footer.php");

} // stepを踏まないアクセスを回避
?>