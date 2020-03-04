<?php

$title = "インターネットがしたい（コース紹介）";
$description = "インターネットがしたい人のためのパソコンコース。";
$keywords = "インターネット,コース,";
$pageId = 'course';
include_once('../lib/home/config.php');
include_once('../lib/home/header.php');

?>

<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン教室なら「パソコン市民講座」</a></li>
		<li><a href="/course/">受講コース</a></li>
		<li><?=$title?></li>
	</ul>
</div><!-- /.l-breadcrumb -->

<div class="l-pagetitle">
<div class="c-wrap">
	<h1><?=$title?></h1>
</div>
</div><!-- /.l-pagetitle -->

<div id="contents">

<div class="section2 large mgnT20">
<p class="mgnB20"><strong>パソコンの「楽しい」をもっと「便利」に。日本一インターネットが楽しめる教室です！</strong></p>
<p>楽しさや発見がいっぱいのインターネットを活用する授業内容で、お店検索やショッピング、友人との交流などインターネットの無限に広がる楽しさを全てお伝えします。</p>
</div>

<h2 class="c-title2">インターネットに挑戦したい方へ</h2>
<div class="section2 clearfix">
	<div class="c_img">
		<img src="/img/internet_pic.jpg" alt="インターネットがしたい！イメージ" width="250" height="188" />
	</div>
<h5>こんな方におすすめ！</h5>
<ul class="mgnB10 mgnL10">
	<li>●インターネットって何？</li>
	<li>●ネットショッピングをしたい</li>
	<li>●ネットで宿泊先の予約をしたい</li>
	<li>●ブログをやってみたい</li>
	<li>●インターネットのルールなどを知りたい</li>
	<li>●便利な使い方やいろんなサイトを知りたい</li>
</ul>
<h5>対象ブラウザ</h5>
<p class="mgnL10">
Microsoft Edge<br />
<img src="../images/ie.jpg" class="icon"> Internet Explorer 11</p>
</div>

<h3 class="c-title1">おすすめの講座をご紹介</h3>
<div class="section3">
<h4><a href="internet_master.php">インターネットマスター講座</a></h4>
<p class="mgnL20">お店検索やショッピング、友人との交流など、インターネットの無限に広がる楽しさを全てお伝えします。</p>
<h4><a href="junior_pc.php">子ども向けパソコン講座</a></h4>
<p class="mgnL20">小学生から学べる講座で初めてのパソコンを楽しく学習！「何ができるか」を、実際にパソコンを触りながら学習できるのでわかりやすく、身に付きやすくなっています。</p>
<h4><a href="pc_basic.php">パソコン基礎講座</a></h4>
<p class="mgnL20">パソコンの基礎から、インターネット、メールやワードの使い方、デジカメ活用まで、パソコンの初歩を総合的に楽しめるコースです。</p>
<h4><a href="ipad.php">iPad講座</a></h4>
<p class="mgnL20">「写真の撮影」や、「インターネット」、「地図アプリ」など、さまざまな機能を楽しく学べるコースです。</p>
<h4><a href="iphone.php">iPhone講座</a></h4>
<p class="mgnL20">電話のかけ方や写真の撮り方はもちろん、地図の便利な使い方や、様々なアプリのインストール方法など、iPhoneを便利に楽しく学べます。</p>
</div>

<div class="center mgnT30">
<img src="/img/course_bottom.jpg" alt="パソコン市民講座は個別カウンセリングなので、コース選びも安心です！" width="801" height="118" />
</div>

<?php

include_once('../lib/home/ss.php');

?>
</div>
<?php

include_once('../lib/home/footer.php');

?>