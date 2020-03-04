<?php

$title = "趣味で楽しみたい（コース紹介）";
$description = "趣味で楽しみたい人のためのパソコンコース。";
$keywords = "趣味,コース,";
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
<p class="mgnB20"><strong>デジカメ写真の活用、水彩画、絵はがき作成など、日々の生活に彩りを添える講座を多数ご用意しています！</strong></p>
<p>ワープロソフトの「ワード」や表計算ソフトの「エクセル」を使った、料理レシピやはがきづくりなどの応用術も満載！！</p>
</div>

<h2 class="c-title2">パソコンを活かして、生活をもっと楽しくしたい方へ</h2>
<div class="section2 clearfix">
	<div class="c_img">
		<img src="/img/hobby_pic.jpg" alt="趣味で楽しみたい！イメージ" width="250" height="188" />
    </div>
<h5>こんな方におすすめ！</h5>
<ul class="mgnB10 mgnL10">
	<li>●デジカメ写真をパソコンで管理したい</li>
	<li>●下調べ、しおり、予約…</li>
	<li>●パソコンを旅行に活かしたい。</li>
	<li>●パソコンで年賀状をつくりたい</li>
	<!--<li>●パソコンで水彩画！？</li>-->
	<li>●自分好みのCD作り</li>
	<li>●パソコンで世界にひとつだけのオリジナル作品をつくりたい。</li>
	<li>●パソコンでゲームをしたい</li>
</ul>
</div>

<h3 class="c-title1">おすすめの講座をご紹介</h3>
<div class="section3">
<h4><a href="d_photo_master.php">デジタル写真マスター講座</a></h4>
<p class="mgnL20">デジカメで撮った写真をパソコンに取り込み、加工・編集など基本的な活用方法をご紹介します。</p>
<h4><a href="word_craft.php">ワードで作ろう講座</a></h4>
<p class="mgnL20">文書作成ソフトとして有名なワードですが、文書作成以外にも日常的な使い方ができ、特にモノづくりに活躍します。</p>
<h4><a href="brain_training.php">脳トレおとなプログラミング講座</a></h4>
<p class="mgnL20">パソコンでプログラミングしながら「脳をトレーニング」する講座です。パズル感覚でかんたんに楽しめる！ </p>
<h4>年賀状作成講座</h4>
<p class="mgnL20">毎年の年賀状をパソコンで。新年のご挨拶で相手をびっくりさせられるかも！？ </p>
<h4><a href="line.php">LINE講座</a></h4>
<p class="mgnL20">ご家族やお友達とのコミュニケーションの幅を広げてくれるアプリとして有名なLINE（ライン）を楽しもう！</p>
<p class="mgnT10">※エクセルコース / ワードコース　の応用や演習問題、インターネット活用講座、うちわやカレンダー作成イベントなど、あらゆる講座にパソコンで広げる趣味の可能性は秘められていますよ。教室のインストラクターにもご相談ください。</p>
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