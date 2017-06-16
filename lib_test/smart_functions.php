<?php

/*========================================
オプションHTML
========================================*/
function getOptionHTML( $i, $end, $value, $firststring = FALSE, $reverse = FALSE ) {
	if( $firststring !== FALSE ) {
		$html .= "<option value=\"\">" . $firststring . "</option>\n";
	}
	if( $reverse !== FALSE ) {
		while ( $i >= $end ) {
			unset($selected);
			if( $value == $i ) { $selected = " selected"; }
			$html .= "<option value=\"" . $i . "\"" .$selected . ">" . $i . "</option>\n";
			$i--;
		}
	} else {
		while ( $i <= $end ) {
			unset($selected);
			if( $value == $i ) { $selected = " selected"; }
			$html .= "<option value=\"" . $i . "\"" .$selected . ">" . $i . "</option>\n";
			$i++;
		}
	}
	return $html;
}

/*========================================
text確認用HTML
========================================*/
function textConf( $value, $name, $front = "", $back = "" ) {
	if( $value && $front ) { echo $front; }
	echo $value . "<input type=\"hidden\" value=\"" . $value . "\" name=\"" . $name . "\" />";
	if( $value && $back ) { echo $back; }
}

/*========================================
checkbox確認用HTML
========================================*/
function checkboxConf( $value, $name ) {
	if( $value ) {
		foreach( $value as $values ) {
			if( $i ) { echo "<br />"; }
//		$values = mb_convert_encoding( $values, "shift-jis", "euc-jp" );
			echo $values;
			echo "<input type=\"hidden\" value=\"" . $values . "\" name=\"" . $name . "[]\">";
			$i += 1;
		}
	}
}

/*========================================
checkbox送信用HTML
========================================*/
function checkboxComp( $value ) {
	if( $value ) {
		foreach( $value as $values ) {
			if( $i ) { $html .= ","; }
			$html .= $values;
			$i += 1;
		}
		return $html;
	}
}

/*========================================
教室の設定
========================================*/
include_once( "../lib/config.php" );

/*========================================
ヘッダーHTML
========================================*/
function headerHTML() {
?>

<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<title>お問い合わせ・無料体験お申し込みフォーム</title>
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=2">
<link rel="stylesheet" href="/sp/css/smart.css">
</head>

<body>
<?php
}
/*========================================
フッターHTML
========================================*/
function footerHTML() {
?>

<footer>

<div class="name">
<p>運営元　株式会社チアリー</p>
</div>

<div class="menu">
<ul class="cf">
<li><a href="/sp/profile.html">会社案内</a></li>
<li>プライバシーポリシー</li>
</ul>
</div>

<div class="copyright">
<p>COPYRIGHT&copy;<?=date("Y")?> Cheery, All Rights Reserved.</p>
</div>
</footer>

</body>
</html>

<?php
}
?>
