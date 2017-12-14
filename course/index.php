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

<div class="u-center"><img src="/img/kv_course.jpg" alt="あなたの「やりたい気持ち」をパソコン市民講座が叶えます！すべての人に「できた」の感動を！" width="858" height="195" /></div>

<div class="section2">
<p>全く初めての方、趣味で楽しみたい方、仕事で役立てたい方、資格を取得したい方など、様々なあなたの目的やご要望に合わせて、800講座以上の豊富なカリキュラムの中から、インストラクターが最適なコースをご提案します。パソコン機器もWindows 7 ～ 最新のWindows 10まで対応、さらにはiPad講座もご用意し、最新のiPadで受講ができるので安心ですね。<br />また、スマートフォンの普及に伴い、ニーズの増えているiPhone講座も開講いたしております！<br />
今後も日々進化するパソコン・iPad・iPhoneの楽しさをお伝えする新教材が、続々と登場しますのでお楽しみに！</p>
</div>

<!-- <h2 class="c-title2">はじめてのパソコン</h2>
<h2 class="c-title2">パソコンをもっと仕事で役立てたい！</h2>
<h2 class="c-title2">シニアのためのパソコン教室</h2>
<h2 class="c-title2">パソコンでインターネットをしたい！</h2>
<h2 class="c-title2">パソコンを趣味で楽しみたい！</h2>
<h2 class="c-title2">パソコン資格を習得したい！</h2> -->
<ul class="course_bnr clearfix">
	<li><a href="/course/first.php"><img src="/img/btn_course01.jpg" class="alpha" alt="はじめてのパソコン　メールやインターネットの使い方、デジカメ写真の活用、作品制作を通じ、パソコンを初歩から学べます。" width="240" height="150" /></a></li>
	<li><a href="/course/works.php"><img src="/img/btn_course02.jpg" class="alpha" alt="パソコンをもっと仕事で役立てたい！　マイクロソフトオフィスのワード、エクセル、パワーポイントを基礎から習得し、仕事に活かせるよう、スキルアップします。" width="240" height="150" /></a></li>
	<li><a href="/course/senior.php"><img src="/img/btn_course03.jpg" class="alpha" alt="シニアのためのパソコン教室　マウスやキーボードの操作から始められ、一人一人の目的にあわせて学習プランを選べます。" width="240" height="150" /></a></li>
	<li><a href="/course/internet.php"><img src="/img/btn_course04.jpg" class="alpha" alt="パソコンでインターネットをしたい！　YahooやGoogleの使い方など、インターネットの楽しみ方を基本から学べます。" width="240" height="150" /></a></li>
	<li><a href="/course/hobby.php"><img src="/img/btn_course05.jpg" class="alpha" alt="パソコンを趣味で楽しみたい！　デジカメ写真を活用してポストカードを作成したり、パソコンで絵を描いたり、趣味への活用を学べます。" width="240" height="150" /></a></li>
	<li><a href="/course/qualification.php"><img src="/img/btn_course06.jpg" class="alpha" alt="パソコン資格を習得したい！　MOS・サーティファイのビジネスで役立つ資格が取得できます。あなたのスキルを証明できます！" width="240" height="150" /></a></li>
</ul>

<?php

include_once('../lib/home/ss.php');

?>
</div>
<?php

include_once('../lib/home/footer.php');

?>