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
$subject = "[パソコン市民講座]invy紹介制度でお問い合わせがありました";
$uSubject = "[パソコン市民講座]紹介制度でのお申込ありがとうございます";

$to = CONTACT_MAIL_TO;
$header = "From: " . $to . "\n";

$date = date( "Y/m/d(D) H:i:s" );

$body .= "[受付日時]　" . $date . "\n";
$body .= "[申込教室]　" . $room . "\n";
$body .= "[お 名 前]　" . $name . "(" . $kana . ")\n";
$body .= "[電話番号]　" . $phone . "\n";
$body .= "[メ ー ル]　" . $mail . "\n";
$body .= "[第1希望日時]　" . $month_1 . "月　" . $day_1 . "日　" . $time_1 . "時頃\n";
$body .= "[第2希望日時]　" . $month_2 . "月　" . $day_2 . "日　" . $time_2 . "時頃\n";
$body .= "[ご 質 問]\n" . $question . "\n";
$ua=$_SERVER['HTTP_USER_AGENT'];
  if((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false)) {
$body .= "\nスマホサイトから送信\n";
  } else {
$body .= "\nパソコンサイトから送信\n";
  }

$uBody .= <<<EOF
{$name}様


この度は、「パソコン市民講座」の無料体験に
お申し込みいただきまして誠にありがとうございます。
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

$title = "お問い合わせ（完了画面）";
$description = "パソコン市民講座へのお問い合わせはこちらから。";
$keywords = "お問い合わせ,";
$pageId = 'contact';
include_once('../lib/home/config.php');
include_once('../lib/home/header-noindex.php');
?>

<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン教室なら「パソコン市民講座」</a></li>
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

<?php /* 201911 invy */ ?>
<script type="text/javascript">
  (function(d,a,o,e){
    if(d.getElementById(o)) return;
    var p = { ci:'pc-star',mi:'<?=$mail?>', ta:'1', pt:'1', rm:'' };
    var b = d.getElementsByTagName(a).item[0];
    tg = d.createElement(e);tg.id = o;
    tg.width=1;tg.height=1;tg.style.display='none';
    tg.src = encodeURI('//invy.jp/rest/report/addcv?ci='+p.ci+'&mi='+p.mi+'&ta='+p.ta+'&pt='+p.pt+'&rm='+p.rm);
    d.write(tg.outerHTML);
  })(document,'body','invy-asp','img')
</script>

<?php

include_once('../lib/home/footer.php');

?>