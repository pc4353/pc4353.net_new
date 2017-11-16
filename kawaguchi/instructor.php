<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"多田 先生",
		"Excel・iPhone",
		"ライブに行く・テレビ番組の観覧",
		"前職で15年間もパソコンを使う仕事をしてきましたが、パソコンのパの字も分らない所からスタートして独学で何冊も何冊も何冊も本を買って、本棚はパソコンの本でいっぱいでした。<br />土台である基礎が出来ていないと応用して使いこなす事が難しい事を実感しました。<br />パソコン教室に通おうと何度もパソコン教室の前をウロウロしていました。<br />今思うと、あの時に決意して3か月だけでも通って基礎を身につけていたら、苦労しなかったのにな・・・と後悔しています。<br />だから！教室の入口を、勇気と決意をもって入ってきた方々の気持ちが、凄く伝わってくるんです。皆さんの大切な時間と大切なお金を投資した事に後悔が無いように『自分に投資して良かった』『教室に来るのが楽しい』と言って頂ける様に全力でサポートさせて頂きたいと思っています。"
	),
	array(
		"佐藤 先生",
		"Word",
		"カフェ巡り",
		"パソコンは魔法の箱です！持っているだけでは本当にもったいない！数十年前私も全くのPC知らずでした。でも学んでいくうちにとても楽しく、『え？！こんなこともできるんだ！！！』と毎日がとても楽しく発見の連続でした！多くの方々にもこの感動をお伝えすべくサポートさせて頂きます！！iPhone,iPadの講座もありますので是非！！<br />川口教室でお会いできるの楽しみにお待ちしております！！"
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