<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"中濱 先生",
		"ワード・iPad",
		"バイオリン・雑貨屋めぐり・自転車",
		"仕事や趣味、パソコンやタブレットの活用法は人それぞれだと思います。インターネットを始め、これらの機器たちは今や暮らしの中に欠かせないもの。そして多くの方が「便利に使いたい！」と思っていらっしゃるはず！<br />今は一人ではできないことも、私達と一緒に始めませんか？<br />きっと、もっとパソコンやタブレットが好きになりますよ☆"
	),
	array(
		"小林 先生",
		"エクセル・パワーポイント",
		"バレーボール・カラオケ",
		"恐々始めたパソコンですが、使っていくうちに便利でお得で楽しくてはまってしまい、皆さんにもこの気持ちをお伝えしたくてインストラクターになりました。<br />皆さんといっしょにパソコンで自分の視野や世界を広げていきたいと思っています。是非、いっしょに一歩ずつ楽しみながらパソコンのお勉強をしていきましょう。キラキラ光る何かが必ず見つかりますよ！<br />いつも元気な笑顔でお迎えします。どうぞよろしくお願いします。"
	),
	array(
		"米田 先生",
		"ワード・インターネット",
		"写真撮影・DIY",
		"「パソコンは仕事で使う難しいもの」というようなイメージを、お持ちの方も多いのではないでしょうか？でも実は、発想次第で仕事はもちろん、生活を楽しく充実させることがとても得意な機械なのです！その楽しさを、たくさんお伝えしたいと思います。一緒に発見していきましょう！"
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