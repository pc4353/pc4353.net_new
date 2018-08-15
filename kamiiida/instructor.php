<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"梅本 先生",
		"エクセル・パワーポイント",
		"テニス・ダーツ",
		"パソコンやiPhone・iPadを使っているけど...わからないことが多い！！<br />お仕事でワードやエクセルやパワーポイントを使っているけど...使いこなせていない！！<br />転職、就職のためにパソコンの資格を取りたい！！<br />そんな悩みをお持ちではありませんか？？<br />この教室は、1から10まで、基礎から応用まで一つ一つを学ぶことができ、しっかりとパソコンやiPhone・iPadが使いこなせるようになる教室です。<br />基礎講座やワード・エクセル講座だけでなく、インターネットで買い物をする講座、写真を加工・編集をする講座、お仕事に活かせるビジネス講座など、あらゆる講座をご用意しています。<br />あなたにピッタリの講座がきっと見つかります（●＾o＾●）<br />もちろんパソコンやiPhone・iPadの初心者の方も大歓迎です！！<br />私たちと一緒に楽しく学びましょう！"
	),
	array(
		"荒谷 先生",
		"ワード・iPad",
		"旅行・時代劇観賞",
		"今、皆さんはいろいろな目標や目的をお持ちでいらっしゃると思います。<br />私もかつて、仕事でパソコンのスキルが必要になったことをきっかけに、パソコンの世界に触れる一歩を踏み出しました。<br />その時は本当にいろいろな不安や疑問を感じました。<br />なにから手をつけたらいいんだろう、どこへ相談に行けばいいんだろう。<br />しかし、地道に真剣に学習に取り組んでいくうちに、不安な気持ちがいつしか「パソコンってなんて便利なんだろう！」という驚きと楽しさに変化していきました。<br />これがあなたにとって新しい世界ならば、不安や疑問があって当然です。<br />私たちは、そんな皆さんの目標実現のために一緒に階段を登っていきます。<br />始めるのに遅いということことはありません。<br />なんでもお気軽にご相談くださいね。"
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