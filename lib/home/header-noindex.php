<?php
if ($home) {
	$title_base = "パソコン教室 パソコン市民講座(東京/大阪ほか全国)";
	$lbt = "<h1>";
	$lat = "</h1>";
	$ht = ' id="home" class="is-home"';
	$smart_p = 'sp/';
} else {
	$title_base = "パソコン教室なら「パソコン市民講座」";
	$sep = " - ";
	$logo_s = "_s";
	$ht = ' id="subpage" class="is-sub"';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<title><?=$title?><?=$sep?><?=$title_base?></title>
<?=$a?>
<meta name="robots" content="noindex">
<meta name="viewport" content="width=device-width" />
<meta name="description" content="<?=$description?>初心者からスキルアップ・資格取得まで安心のパソコン教室 パソコン市民講座(東京/大阪ほか全国)。" />
<meta name="keywords" content="<?=$keywords?>パソコン教室,パソコンスクール,資格,検定,東京,大阪,パソコン,市民講座,pc4353,PC教室,初心者,サーティファイ,MOS" />
<!--
  <PageMap>
    <DataObject type="thumbnail">
      <Attribute name="src" value="https://www.pc4353.net/images/bnr-certify.jpg"/>
      <Attribute name="width" value="180"/>
      <Attribute name="height" value="180"/>
    </DataObject>
  </PageMap>
-->

<link rel="stylesheet" type="text/css" href="/common.css?<?php echo filemtime($root.'/common.css'); ?>" media="screen and (min-width: 768px), print" />
<link rel="stylesheet" type="text/css" href="/common-sp.css?<?php echo filemtime($root.'/common-sp.css'); ?>" media="only screen and (max-width: 767px)" />

<link rel="stylesheet" type="text/css" href="/common/css/style.css?<?php echo filemtime($root.'/common/css/style.css'); ?>" media="screen and (min-width: 768px), print" />
<link rel="stylesheet" type="text/css" href="/common/css/style-sp.css?<?php echo filemtime($root.'/common/css/style-sp.css'); ?>" media="only screen and (max-width: 767px)" />

<!--[if lt IE 9]>
<link rel="stylesheet" href="/common/css//style.css?<?php echo filemtime($root.'/common/css/style.css'); ?>" type="text/css" media="all" />
<script type="text/javascript" src="/common/js/selectivizr-min.js"></script>
<script type="text/javascript" src="/common/js/respond.js"></script>
<![endif]-->

<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/js/rollover.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/biggerlink.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/ui.core.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/scrollFollow.js" type="text/javascript" charset="utf-8"></script>
<?php /*<script src="/js/scroll.js" type="text/javascript" charset="utf-8"></script>*/?>
<script src="/js/common.js" type="text/javascript" charset="utf-8"></script>

<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/images/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="/images/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="/images/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="/images/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="/images/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="/images/apple-touch-icon-152x152.png" />

<script type="text/javascript" src="/common/js/bxslider/jquery.bxslider.min.js" charset="utf-8"></script>
<link rel="stylesheet" href="/common/js/bxslider/jquery.bxslider.min.css" />
<script type="text/javascript" src="/js/jquery.easing.1.3.js" charset="utf-8"></script>
<script type="text/javascript" src="/common/js/jQueryAutoHeight.js" charset="utf-8"></script>
<script type="text/javascript" src="/common/js/jquery.rwdImageMaps.js" charset="utf-8"></script>
<script type="text/javascript" src="/common/js/jquery.maphilight.js" charset="utf-8"></script>

<script src="/common/js/function.js?<?php echo filemtime($root.'/common/js/function.js'); ?>"></script>

<script src="https://use.typekit.net/zec0ewo.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<!-- GoogleAnalytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-60689014-1', 'auto');
  ga('require', 'displayfeatures');
  ga('require', 'linkid', 'linkid.js');
  ga('send', 'pageview');

  ga('create', 'UA-19029672-1', 'auto', {'name': 'secondTracker'});
  ga('secondTracker.require', 'displayfeatures');
  ga('secondTracker.require', 'linkid', 'linkid.js');
  ga('secondTracker.send','pageview');

</script>
</head>
<body<?=$ht?>>


<div id="container">



<div class="l-header">
<div class="c-wrap">

	<div class="l-header1">

		<div class="l-header1__txt1 pc-only">
			<p><?=$title?><?=$sep?><?=$title_base?></p>
		</div>

		<div class="l-header1__block1">
			<?=$lbt?><a href="/"><img src="/common/img/common/logo1.png" width="156" height="68" alt="初心者からスキルアップ・資格取得まで安心のパソコン教室（東京/大阪）パソコン市民講座" /></a><?=$lat?>
		</div><!-- /.l-header1__block1 -->

		<div class="l-header1__block2 pc-only">
			<ul>
				<li><a href="/contact/"><img src="/common/img/common/header1_btn1.png" width="112" height="40" alt="資料請求" /></a></li><!--
				--><li><a href="/contact/"><img src="/common/img/common/header1_btn2.png" width="128" height="40" alt="お問い合わせ" /></a></li><!--
				--><li class="free"><a href="/contact/"><img src="/common/img/common/header1_btn3.png" width="360" height="72" alt="無料体験レッスンお申し込み　お気軽にお越しください！" /></a></li>
			</ul>
		</div><!-- /.l-header1__block2 -->

		<div class="l-header1__block2 sp-only">
			<ul>
				<li><a href="/contact/"><img src="/common/img/common/sp/header1_btn1.png" width="180" height="90" alt="無料体験" /></a></li>
				<li><a href="/school/"><img src="/common/img/common/sp/header1_btn2.png" width="180" height="90" alt="全国の教室" /></a></li>
				<li class="btn1"><img src="/common/img/common/sp/header1_btn3.png" width="90" height="90" alt="無料体験" /></li>
			</ul>
		</div><!-- /.l-header1__block2 -->

	</div><!-- /.l-header1 -->

</div>
</div><!-- /.l-header -->



<div class="l-nav">

	<!-- <ul class="c-wrap pc-only">
		<li class="li1<?php if($pageId=="overview"){echo ' active';} ?>"><a href="/overview.php">パソコン市民講座について</a></li>
		<li<?php if($pageId=="school"){echo ' class="active"';} ?>><a href="/school/">全国の教室</a></li>
		<li<?php if($pageId=="course"){echo ' class="active"';} ?>><a href="/course/">講座一覧</a></li>
		<li<?php if($pageId=="shikaku"){echo ' class="active"';} ?>><a href="/shikaku/">資格対策講座</a></li>
		<li<?php if($pageId=="voice"){echo ' class="active"';} ?>><a href="/voice/works.php">受講生の声</a></li>
	</ul> -->
<ul class="accordion c-wrap pc-only">
		<li class="li1<?php if($pageId=="overview"){echo ' active';} ?>"><a href="/overview.php">パソコン市民講座<br>について</a></li>
		<li<?php if($pageId=="school"){echo ' class="active"';} ?>><a href="/school/">全国のパソコン教室</a>
      <ul>
         <li><a href="/school/tohoku.php">東北エリア</a>
			   <ul class="tohoku">
				 <li><a href="/school/fukushima.php">福島県</a></li>
			  </ul>
		</li>
         <li><a href="/school/kanto.php">関東エリア</a>
			   <ul class="kanto">
				 <li><a href="/school/tokyo.php">東京都</a></li>
				 <li><a href="/school/kanagawa.php">神奈川県</a></li>
				 <li><a href="/school/chiba.php">千葉県</a></li>
				 <li><a href="/school/saitama.php">埼玉県</a></li>
				 <li><a href="/school/ibaraki.php">茨城県</a></li>
			  </ul>
		</li>
         <li><a href="/school/chubu.php">中部エリア</a>
			   <ul class="chubu">
				 <li><a href="/school/aichi.php">愛知県</a></li>
				 <li><a href="/school/gifu.php">岐阜県</a></li>
				 <li><a href="/school/shizuoka.php">静岡県</a></li>
				 <li><a href="/school/niigata.php">新潟県</a></li>
			  </ul>
		</li>
         <li><a href="/school/kansai.php">関西エリア</a>
			   <ul class="kansai">
				 <li><a href="/school/osaka.php">大阪府</a></li>
				 <li><a href="/school/hyogo.php">兵庫県</a></li>
				 <li><a href="/school/kyoto.php">京都府</a></li>
				 <li><a href="/school/nara.php">奈良県</a></li>
				 <li><a href="/school/shiga.php">滋賀県</a></li>
			  </ul>
		</li>
         <li><a href="/school/seibu.php">中国・四国・九州エリア</a>
			   <ul class="seibu">
				 <li><a href="/school/okayama.php">岡山県</a></li>
				 <li><a href="/school/tokushima.php">徳島県</a></li>
				 <li><a href="/school/fukuoka.php">福岡県</a></li>
			  </ul>
		</li>
      </ul>
   </li>
		<li<?php if($pageId=="course"){echo ' class="active"';} ?>><a href="/course/">講座一覧</a>
      <ul>
         <li><a href="/course/works.php">今すぐ仕事で役立てたい</a></li>
         <li><a href="/course/qualification.php">資格を取得したい</a></li>
         <li><a href="/course/first.php">基本操作を覚えたい</a></li>
         <li><a href="/course/hobby.php">趣味で楽しみたい</a></li>
         <li><a href="/course/smartphone.php">スマートフォン</a></li>
         <li><a href="/course/tablet.php">タブレット</a></li>
      </ul>
   </li>
		<li<?php if($pageId=="shikaku"){echo ' class="active"';} ?>><a href="/shikaku/">資格対策講座</a>
      <ul>
         <li><a href="/certify/">サーティファイ</a></li>
         <li><a href="/mos/">MOS</a></li>
      </ul>
   </li>
		<li<?php if($pageId=="voice"){echo ' class="active"';} ?>><a href="/voice/works.php">受講生の声</a>
      <ul>
         <li><a href="/voice/works.php">仕事に活かす</a></li>
         <li><a href="/voice/">初めてのパソコン</a></li>
         <li><a href="/voice/senior.php">シニアこそパソコンを</a></li>
      </ul>
   </li>
		<li<?php if($pageId=="blog"){echo ' class="active"';} ?>><a href="/blog/">教室ブログ</a></li>
</ul>
</div><!-- /.l-nav -->

<script>
   //li(親メニュー)にhover(マウスオーバー)したら実行
   $('li').hover(function(){
      //this(イベントが起きた要素)のchildren(子要素)のulにslideToggleを実行
      $(this).children('ul').stop().toggle();
   });
</script>

<div class="l-nav2 sp-only">
	<div class="l-nav2__block1">
		<ul>
			<li class="c-link1"><a href="/">パソコン教室なら「パソコン市民講座」</a></li>
			<li class="c-link1">
				<a href="/overview.php">パソコン市民講座について</a>
				<ul>
					<li class="c-link2"><a href="/premiere.php">プレミア倶楽部のご紹介</a></li>
					<li class="c-link2"><a href="/gakuwari/">学生割引制度について</a></li>
				</ul>
			</li>
			<li class="c-link1"><a href="/school/">全国のパソコン教室</a></li>
			<li class="c-link1">
				<a href="/course/">講座一覧</a>
				<ul>
					<li class="c-link2"><a href="/course/works.php">今すぐ仕事で役立てたい</a></li>
					<li class="c-link2"><a href="/course/qualification.php">資格を取得したい</a></li>
					<?php /*<li class="c-link2"><a href="">学生の方へ</a></li>*/?>
					<li class="c-link2"><a href="/course/first.php">パソコンの基本操作を覚えたい</a></li>
					<li class="c-link2"><a href="/course/hobby.php">パソコンを趣味で楽しみたい</a></li>
					<li class="c-link2"><a href="/course/smartphone.php">スマートフォン</a></li>
					<li class="c-link2"><a href="/course/tablet.php">タブレット</a></li>
				</ul>
			</li>
            <li class="c-link1"><a href="/shikaku/">資格対策講座</a></li>
			<li class="c-link1"><a href="/voice/works.php">受講生の声</a></li>
			<li class="c-link1"><a href="/blog/">教室ブログ</a></li>
			<?php /*<li class="c-link1"><a href="/">受講生作品</a></li>
			<li class="c-link1"><a href="/">授業風景</a></li>*/?>
			<li class="c-link1"><a href="/instructor/">インストラクターインタビュー</a></li>
			<li class="c-link1"><a href="/qa.php">よくあるご質問</a></li>
			<li class="c-link1"><a href="https://www.facebook.com/pc4353/" target="_blank">公式Facebookページ</a></li>
		</ul>
	</div><!-- /.l-nav2__block1 -->

	<div class="l-nav2__block2">
		<div class="txt1">
			<p><img src="/common/img/common/sp/footer1_txt1.png" width="405" height="198" alt="パソコン市民講座では全国の教室で「無料体験レッスン」を実施しています。" /></p>
		</div>
		<div class="img1"><img src="/common/img/common/footer1_bg1.png" width="307" height="305" alt="" /></div>
		<ul>
			<li class="free"><a href="/contact/"><img src="/common/img/common/footer1_btn1.png" width="480" height="110" alt="無料体験レッスンお申し込み　お気軽にお越しください！" /></a></li><!--
			--><li><a href="/contact/"><img src="/common/img/common/sp/footer1_btn2.png" width="340" height="130" alt="資料請求" /></a></li><!--
			--><li><a href="/contact/"><img src="/common/img/common/sp/footer1_btn3.png" width="340" height="130" alt="お問い合わせ" /></a></li>
		</ul>
	</div><!-- /.l-nav2__block2 -->

	<div class="l-nav2__block3">
		<span>閉じる</span>
	</div><!-- /.l-nav2__block3 -->

</div><!-- /.l-nav2 -->