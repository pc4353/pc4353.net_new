<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"的場 先生",
		"インターネット",
		"お菓子作り・ネットショッピング",
		"皆さんは、普段パソコンをどの様にしてお使いですか？<br />パソコンは使えば使う程『便利だな～』と実感出来る優れものです！！<br />皆さんがパソコンをお使いになられる時に『便利だな！』『楽しいな！！』と実感して頂ける様にお手伝いさせて頂きます。<br />一緒に楽しくパソコンの勉強をしていきましょう♪"
	),
	array(
		"浮田 先生",
		"ワード・ネット通販",
		"囲碁・将棋・料理・映画鑑賞",
		"もともとパソコンが苦手でした。<br />外に出たり、歩いたりすることが好きではない私…。でも買い物が好き。便利に買う事は出来ないものだろうか…。そこで、ネット通販に出会いました。それからは、パソコンが手放せなくなりました。パソコンは使い方次第でいろんなことが出来ます。こんな楽しいもの、使わないなんて損です。<br />一緒にパソコンで楽しみましょう(*^_^*)"
	),
	array(
		"小山 先生",
		"資格講座・Excel",
		"動画鑑賞・写真加工",
		"パソコンやスマホを好きな方も苦手な方も便利に使ってもらいたい！という思いでいつも授業をしております。<br />便利な時代だからこそご自身に必要なこと、大切なことをしっかりと選択して学ぶお手伝いをさせて頂きます。<br />一緒に楽しく無理なく学習をしていきましょう！"
	),
	array(
		"西本 先生",
		"Excel・タイピング",
		"野球観戦・映画鑑賞",
		"PC・タブレット等生活の必需品となっています。みなさん使い始めは不安でいっぱいかと思います。一歩踏み出すと不安が楽しみに変わります。そのサポートをさせて頂ければと思っております。受講生の皆さんの笑顔が何よりの励みです！<br />ドキドキワクワクの新しい世界を一緒に楽しみましょう"
	)
);
?>
					<h1><?=$room[$id][name]?>教室インストラクターのご紹介</h1>
					<p><img src="/images/inst_05.png" width="632" height="93" alt="「できない」悩みが「楽しくできる！」喜びの笑顔に変わる。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！" /></p>
					<p class="mB30"><img src="/<?=$room[$id][dir]?>/images/inst_06.jpg" alt="インストラクターの写真" /></p>
					<h2 class="mB20">インストラクターからのメッセージ</h2>
					

					 <div class="i-pr clearfix mB20">
						<div class="section-lv2 moz2 clearfix">
<?php
foreach( $ary as $key => $value  ) {
?>
							<h3 class="blue"><?=$value[00]?></h3>
							<div class="section-lv3 clearfix mB30">
								<dl class="clearfix mB10">
									<dt class="box-a">好きな分野</dt>
									<dd class="box-b"><?=$value[01]?></dd>
								</dl>
								<dl class="clearfix mB20">
									<dt class="box-a">趣味</dt>
									<dd class="box-b"><?=$value[02]?></dd>
								</dl>
								<p><?=$value[03]?></p>
								<div class="back-top"><a class="moz2" href="#header">ページトップへ</a></div>
							</div><!-- /.section-lv3 -->
<?php
}
?>
						</div><!-- /.section-lv2 -->
					</div><!-- /.i-pr -->

				</div><!-- /.block -->
				</div><!-- /#kasou -->
<?php
include_once("../lib/footer.php");
?>