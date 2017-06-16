<?php
require_once("config.php");
require_once("../lib/config.php");
?>

<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="description" content="<?=$title.$sep?>初心者のための個別学習型パソコン教室。<?=$room[$id][area]?>のパソコン市民講座 <?=$room[$id][name]?>教室。" />
<meta name="keywords" content="<?=$room[$id][keywords]?><?=$room[$id][name]?>教室,パソコン教室,パソコンスクール,パソコン市民講座,pc4353,株式会社チアリー,PC教室,初心者,パソコン検定,P検,パソコン資格" />
<title><?=$title.$sep?><?=$room[$id][area]?>のパソコン市民講座 <?=$room[$id][name]?>教室</title>
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=2">
<link rel="canonical" href="https://www.pc4353.net/<?=$room[$id][dir]?>/">
<link rel="stylesheet" href="/sp/css/smart.css">



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script> 
<script src="js/map.js" type="text/javascript" charset="utf-8"></script>

<!-- slider 'slick' -->
<script src="/sp/lib/js/modernizr.min.js" type="text/javascript"></script>
<script src="/sp/lib/js/jquery-1.11.0.min.js"></script>
<script src="/sp/lib/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/sp/lib/js/highlight.min.js"></script>
<script type="text/javascript" src="/sp/lib/slick/slick.js"></script>
<script type="text/javascript" src="/sp/lib/js/scripts.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script type="text/javascript">
        var disqus_shortname = 'slickcarousel';
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
<link rel="stylesheet" type="text/css" href="/sp/lib/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="/sp/lib/css/style.css">
<!-- // slider 'slick' -->
<!-- accordion -->
<link rel="stylesheet" href="/sp/css/acordion.css">
<script type="text/javascript" src="/sp/js/acordion.js"></script>
<!-- // accordion -->


</head>
<body onload="dispgmap();">
<header>
<div class="container">
<div class="header cf">
<h1><a href="/sp/"><img src="/sp/images/header_logo.png" width="190" height="76" alt="<?=$room[$id][area]?>のパソコン市民講座 <?=$room[$id][name]?>教室 初心者からスキルアップ・さらに資格取得までしっかり学べる！"></a></h1>
<p class="catch">スキルアップ・資格取得まで<br>
初心者からでもしっかり学べる</p>
</div>
</div>
</header>

<!-- selectSchool -->
<section class="selectSchool">
<h2><?=$room[$id][name]?>教室</h2>

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

<!--<div class="btGoCountact"><a href="/<?=$room[$id][dir]?>/smart_contact.php">お問い合わせ・無料体験のお申込み</a></div>-->

<div class="contactUs">
<a href="tel:<?=$room[$id][phone]?>"><?=$room[$id][phone]?></a>
</div>

</div>
</section>

<footer>

<div class="name">
<p>運営元　株式会社チアリー</p>
</div>

<div class="menu">
<ul class="cf">
<li><a href="/sp/profile.html">会社案内</a></li>
<li><a href="/sp/privacy.html">プライバシーポリシー</a></li>

</ul>
</div>

<div class="copyright">
<p>COPYRIGHT&copy;<?=date("Y")?> Cheery, All Rights Reserved.</p>
</div>

</footer>


<!-- GoogleAnalytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60689014-1', 'auto');
  ga('require', 'displayfeatures');
  ga('require', 'linkid', 'linkid.js');
  ga('send', 'pageview');

  ga('create', 'UA-19029672-1', 'auto', {'name': 'secondTracker'});
  ga('secondTracker.require', 'displayfeatures');
  ga('secondTracker.require', 'linkid', 'linkid.js');
  ga('secondTracker.send','pageview');

</script>


</body>
</html>