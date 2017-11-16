<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"浅野 先生",
		"ワード・エクセル",
		"ネットショッピング・洋裁",
		"私がパソコンを始めたころは、仕事で必要なことだけを教えてもらいながら使っていました。これからの時代パソコンは必要だと思い、パソコン教室に通い始めました。習ってみるとなんとなく使っていたけど、基本がわかっていないことに気づかされました。やはり何事も基本が大事、独学だけでは行き詰ったりすることもあると思いますが、教室ではその辺りの皆さんの困った・・・を解決できると思いますよ♪<br />是非、北千里教室で楽しみながらパソコンを使いこなせるようになってください。<br />私達インストラクターがしっかりと理解して使えるようになってもらえるようサポートさせて頂きます！"
	),
	array(
		"片尾 先生",
		"ワード",
		"スポーツ観戦 ・囲碁・走る事",
		"私がインストラクターになり10年以上経ちますが、今、そのころには考えられないほどパソコンは普及し、生活に必要不可欠なものとなっています。受講生の皆さんにパソコンの楽しさ面白さをお伝えできればと思っています。どんどん新しい世界へ!!!<br />そんなお手伝いができたらいいなと毎日頑張ってます。<br />なんでもご相談くださいね(*^^)v"
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