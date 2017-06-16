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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<meta name="Description" content="" />
<meta name="Keywords" content="" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="stylesheet" type="text/css" media="all" href="" />
<style type="text/css">
table {
	border-collapse: collapse;
}
table th,
table td{
	border: 1px solid #ccc;
	padding: 10px;
	font-weight: normal;
	text-align: left;
}
table th {
	background-color: #eee;
}
.red {
	color: red;
}
.bold {
	font-weight: bold;
}
.small {
	font-size: 80%;
}
textarea {
	width: 300px;
	height: 80px;
}
h1 {
	font-size: 16px;
}
</style>
</head>

<body>
<?php
}
/*========================================
フッターHTML
========================================*/
function footerHTML() {
?>
</body>
</html>
<?php
}
?>
