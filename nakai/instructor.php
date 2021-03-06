<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"久古 先生",
		"ワード・エクセル・ラベルマイティ",
		"洋服作り・ラベルマイティでＰＯＰ作り",
		"パソコンは「魔法の箱」と言われるくらい何でもできる便利な道具です！でも魔法を使うには呪文が必要なようにパソコンもスキルがないと使いこなせません♪中井教室には下は５歳から上は８０代後半の方まで、初心者から資格取得の方まで、と様々な方が通ってくれるパソコン教室です！それぞれの方にあったサポートを全力でさせていただきますのでぜひ一緒にがんばりましょう♪！「好きこそものの上手なれ」パソコンもただ覚えるのではなくて、楽しみながらスキルアップしてもらいたいです♪"
	),
	array(
		"早田 先生",
		"インターネット",
		"スポーツ観戦",
		"パソコンを使い始めて十数年になりますが、どんどん進化して便利になっていくパソコンが今では生活に欠かせなくなっています。私の活用方法はインターネットで買い物やチケットの手配、DVD作成、年賀状作成など様々です。娘の夏休みの宿題もインターネットに随分お世話になりました（笑）　皆さんにも是非パソコンの楽しさを、パソコン市民講座で知ってもらえたら嬉しいです。中井教室は初心者の方にも丁寧に分かり易くサポートしています。私たちインストラクターにお任せ下さい♪"
	),
	array(
		"渡辺 先生",
		"ワード",
		"テニス　目標：試合で勝つ!!",
		"電機メーカーに入社し、コンピュータ業界に足を踏み入れたのは20年前！汎用コンピュータからワークステーションを経てパソコンの部署に、時代の流れと共に移って来ました。その当時、パソコンが初めて納入された会社の方々の反応はまるでテレビが初めて家に来た時のようなものでした。Windowsの画面の余りの使いやすさに皆大喜びしたものです。今ではパソコンは一家に一台の時代になりました。パソコンは情報家電と言う家電の仲間入りをしたのです。家電のパソコンにもてあそばれないよう頑張って使いこなせるようになりましょう。年賀状作成、インターネット検索等皆さんがパソコンでやりたい目標は様々でしょうが、目標を達成する喜びには格別のものがあります。目標達成のためのお手伝いしますので、どんどん質問して来て下さい。"
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