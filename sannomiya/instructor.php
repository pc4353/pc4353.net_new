<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"石岡 先生",
		"タイピング",
		"お菓子を食べること、作ること",
		"パソコンとのお付き合いは、もう20年以上になります。自宅のパソコンで初めてインターネットを体験したときには、世界がすごく広がったように思えて「まるで世界がもうひとつ増えたみたい！」と、感動したことを今もはっきり覚えています。あの時の感動を、受講生の皆さんにも感じていただきたいと思いながら、毎日、教室で皆さんの学習のお手伝いをしています。パソコン上達への第一歩は、なによりもまず「パソコンを好きになること」です。私たちにお任せください。必ず、パソコンと仲良しになれますよ！"
	),
	array(
		"新免 先生",
		"ワード・タイピング",
		"娘たちとお出かけ",
		"パソコンが好きで、好きで・・・ 夢中になっている間にインストラクターになりました。 「パソコン市民講座」に来て下さる皆さんに「パソコン大好き！」と思っていただきたい・・・そういう思いでいつも皆さんの後ろにいます。 パソコンって魔法の箱のようですが、人がいなければただの箱。<br />魔法をかけるのは皆さんです！<br />ぜひ、そのお手伝いをさせていただきたいです。よろしくお願いします。"
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