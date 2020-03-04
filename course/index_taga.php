<?php

$title = "受講コース";
$description = "パソコン市民講座のコースをご紹介。初心者やシニアの方向けのコースから、転職・就活などビジネス目的、資格取得まで対応しているコースをご用意しています。";
$keywords = "コース,受講,資格,ビジネス,初心者,シニア,";
$pageId = 'course';
include_once('../lib/home/config.php');
include_once('../lib/home/header.php');

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

<div class="u-center">
	<div class="mainimg">
		<img src="/img/kv_course2.jpg" alt="kv_course2"/>
	 <p>あなたの「やりたい」を叶えます！<br>すべての人に「できた！」の感動を</p>
	</div>
</div>
<br>
<!--キャンペーン-->
<div class="u-center mgnB10 corse_campaign">
<a href="/course/summer.php"><img src="images/summer/img-main2.png" alt="小中学生対象 夏期講習受付中！" /></a>
<a href="/course/junior_pc.php"><img src="images/junior_pc/img-main2.png" alt="子どもパソコン講座開講！" class="pc-only" />
<img src="images/junior_pc/img-main_sp.jpg" alt="子どもパソコン講座開講！" class="sp-only" /></a>
</div>

<!--コースリスト-->
<ul id="course_list">
    <li class="course_box a"><a href="/uehonmachi/mos.php"><p class="course_boxtx">MOS試験対策講座</p>
		<img src="/img/bnr_corse01.jpg" alt="MOS資格対策講座"><p>Microsoft公認試験で知名度ばつぐん！</p>
		<div class="course_logo"><object data="../img/logo_mos.svg" type="image/svg+xml" height="30"></object></div></a></li>
    <li class="course_box b"><a href="/uehonmachi/mos.php"><p class="course_boxtx">サーティファイ講座</p>
		<img src="/img/bnr_corse02.jpg" alt="サーティファイ講座"><p>仕事に活かせるさらに上のスキルを身につける</p></a>
			<div class="course_logo"><object data="../img/logo_cert.svg" type="image/svg+xml" height="30"></object></div></a></li>
	<li class="course_box c"><a href="/uehonmachi/mos.php"><p class="course_boxtx">仕事でパソコンを使いたい</p>
		<img src="/img/bnr_corse03.jpg" alt="仕事でパソコンを使いたい"><p>独学で習得されてきた方に最適！</p></a></li>
	<li class="course_box d"><a href="/uehonmachi/mos.php"><p class="course_boxtx">基本操作を覚えたい</p>
		<img src="/img/bnr_corse04.jpg" alt="基本操作を覚えたい"><p>パソコンを使ったことがない超初心者も大歓迎！</p></a></li>
	<li class="course_box e"><a href="/uehonmachi/mos.php"><p class="course_boxtx">タブレットをはじめたい</p>
		<img src="/img/bnr_corse05.jpg" alt="タブレットをはじめたい"><p>タブレットを使って便利に生活しよう</p></a></li>
	<li class="course_box f"><a href="/uehonmachi/mos.php"><p class="course_boxtx">スマホをはじめたい</p>
		<img src="/img/bnr_corse06.jpg" alt="スマホをはじめたい"><p>基本操作から便利な使い方LINE講座も♪</p></a></li>
	<li class="course_box g"><a href="/uehonmachi/mos.php"><p class="course_boxtx">インターネットをしたい</p>
		<img src="/img/bnr_corse07.jpg" alt="基本操作を覚えたい"><p>パソコンを使ったことがない超初心者も大歓迎！</p></a></li>
	<li class="course_box h"><a href="/uehonmachi/mos.php"><p class="course_boxtx">趣味を楽しみたい</p>
		<img src="/img/bnr_corse08.jpg" alt="タブレットをはじめたい"><p>タブレットを使って便利に生活しよう</p></a></li>
	<li class="course_box i"><a href="/uehonmachi/mos.php"><p class="course_boxtx">小中学生コース</p>
		<img src="/img/bnr_corse09.jpg" alt="スマホをはじめたい"><p>基本操作から便利な使い方LINE講座も♪</p></a></li>
</ul>	
<!--SPS-->
<div class="corse_campaign u-center mgnB10">
	<a href="http://www.star-programming-school.com/" target="_blank"><img src="../images/bnr-sps_740.jpg" alt="2020年 プログラミング教育必修化！STAR Programming SCHOOL"></a>
</div>
	
<div class="section2">
<p>全く初めての方、趣味で楽しみたい方、仕事で役立てたい方、資格を取得したい方など、様々なあなたの目的やご要望に合わせて、800講座以上の豊富なカリキュラムの中から、インストラクターが最適なコースをご提案します。パソコン機器もWindows 8 ～ 最新のWindows 10まで対応、さらにはiPad講座もご用意し、最新のiPadで受講ができるので安心ですね。<br />また、スマートフォンの普及に伴い、ニーズの増えているiPhone講座も開講いたしております！<br />
今後も日々進化するパソコン・iPad・iPhoneの楽しさをお伝えする新教材が、続々と登場しますのでお楽しみに！</p>
</div>
</div>



	<div class="c-btn2">
		<div class="center mgnT30"><b>ご見学も可能です。実際に教室の雰囲気を知りたい方、教材を見たい方<br>
	ぜひお気軽に教室までお問い合わせください。<br></b>
		<a href="/school/index.php"><span>全国の教室を検索する</span></a>
	</div></div>
	
	


<?php

include_once('../lib/home/footer.php');

?>