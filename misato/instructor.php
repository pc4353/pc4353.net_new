<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"深野英津子",
		"Ｅｘｃｅｌ・ＰｏｗｅｒＰｏｉｎｔ",
		"食べ歩き・花めぐり",
		"「パソコンが出来ない」なんて大きな声で言えない世の中になりました。<br />私もパソコンインストラクター歴15年以上になりましたが、今まで「パソコンを覚えたい」「資格を取りたい」というパソコンビギナーを指導してきた人数は1000人以上になりました。<br />これからも「パソコンてすごい！！」と思う仲間を増やしていきたいと思います。<br />さあ、一歩前に進みましょう。いつでも扉を開けてお待ちしております。"
	),
	array(
		"杉浦理奈",
		"インターネット・Excel・Word",
		"旅行・ショッピング",
		"パソコンに興味を持っている皆様！パソコンは事務作業を効率良くするだけではなく、ＣＤやカレンダーなど自分だけのオリジナル作品も作れたりと使い方次第で無限の可能性を持っています。私たちと一緒に楽しく学習しませんか？全力で皆様をサポート致します。お気軽に体験にいらして下さい。"
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