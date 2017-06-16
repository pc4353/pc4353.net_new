<?php
require_once("../st/config.php");
require_once("../lib/config.php");
?>

<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="description" content="<?=$title.$sep?>初心者のための個別学習型パソコン教室。パソコン市民講座 <?=$room[$id][name]?>教室。" />
<meta name="keywords" content="<?=$room[$id][name]?>教室,パソコン教室,パソコンスクール,パソコン市民講座,pc4353,日本パソコン普及協会,PC教室,初心者,パソコン検定,P検,パソコン資格" />
<title><?=$title.$sep?>パソコン市民講座 <?=$room[$id][name]?>教室</title>
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=2">
<link rel="stylesheet" href="/sp/css/smart.css">



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script src="../st/js/map.js" type="text/javascript" charset="utf-8"></script>



</head>
<body onload="dispgmap();">
<header>
<div class="container">
<div class="header cf">
<a href="/sp/"><img src="/sp/images/header_logo.png" width="190" height="76" alt="パソコン市民講座"></a>
<p class="catch">初心者からスキルアップ・<br>
さらに資格取得までしっかり学べる</p>
</div>
</div>
</header>

<!-- selectSchool -->
<section class="selectSchool">
<h1><?=$room[$id][name]?>教室</h1>

</section>
<!-- // selectSchool -->

<section class="schoolRoom">
<div class="container">

<div class="schoolAddress">
<p><?=$room[$id][ad1]?><br /><?=$room[$id][ad2]?><br /><?=$room[$id][ad3]?></p>
<p><?=$room[$id][access]?></p>
</div>

<div id="gmap" style="margin-bottom: 0px;width:310px; height:240px;"></div> 

<div class="gMapApp">
<a href="http://maps.google.com/maps?q=<?=$room[$id][ad1]?>" class="openmap">地図アプリで見る</a>
</div>

<div class="btGoCountact"><a href="/<?=$room[$id][dir]?>/smart_contact.php">お問い合わせ・無料体験のお申込み</a></div>

<div class="contactUs">
<a href="tel:<?=$room[$id][phone]?>"><?=$room[$id][phone]?></a>
</div>



<div class="calender">
<?php
	if (!empty($room[$id][open2])) {
		echo "<table><tr><th colspan=\"2\">開講時間</th></tr>";
		echo $room[$id][open2];
		echo "</table>";
	} else { 

		echo "<p class=\"th\">開講時間</p>";
		echo "<p class=\"body\">";
		echo $room[$id][open] ;
		echo "</p>";
	}
?>
<?php
	if (!empty($room[$id][open3])) {
		echo "<p class=\"note\">";
		echo $room[$id][open3];
		echo "</p>";
	}
?>
</div>


<div class="photoSchoolRoom">
<img src="/<?=$room[$id][dir]?>/images/about_38.jpg" alt="教室の様子など" />
</div>


<div class="linkPcSite">
<a href="/<?=$room[$id][dir]?>/about.php">当パソコン教室の詳細</a>
</div>



</div>
</section>



<footer>

<div class="name">
<p>運営元　株式会社日本パソコン普及協会</p>
</div>

<div class="menu">
<ul class="cf">
<li><a href="/sp/profile.html">会社案内</a></li>
<li><a href="/sp/privacy.html">プライバシーポリシー</a></li>

</ul>
</div>

<div class="copyright">
<p>COPYRIGHT&copy;2015 Cheery, All Rights Reserved.</p>
</div>

</footer>



</body>
</html>