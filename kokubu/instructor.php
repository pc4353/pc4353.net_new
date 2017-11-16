<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"山原 先生",
		"ワード・エクセル・インターネット",
		"ショッピング・映画鑑賞",
		"パソコンは、まるで「宝箱」です。インターネットを使っていろいろな新しい発見があったり、ワードやエクセルで楽しい作品を作ることもできます。ドキドキとワクワクがいっぱい詰まっている、生活にはかかせないすばらしい電化製品ですね。たとえば旅行に行く時…料理を作る時…写真を使って…音楽を楽しんで…♥<br />いろいろなシーンでパソコンは大活躍しています。教室にいらっしゃるみなさんにも私が日々感じているパソコンの便利さや楽しさをお伝えするお手伝いをさせていただければと思っています。"
	),
	array(
		"岩本 先生",
		"ワード・ネットショッピング",
		"読書・雑貨屋さん巡り",
		"いまやパソコンは生活の一部、欠かせない物になっています。お仕事で使ったり、お買い物が出来たり、お料理のレシピを検索出来たり…とーっても便利なので、使えるようにならないともったいない！<br />少しでも多くのことが出来るように一生懸命サポートします☆そして皆様と一緒に、楽しく学習出来ればいいなって思っています！解らないことや、困ったことがあればお気軽に聞いて下さいね(^^)/"
	),
	array(
		"植野 先生",
		"ワード・インターネット",
		"食べること・お料理",
		"実は私はパソコン市民講座の受講生でした。この教室で学ぶことでパソコンの便利さ、使いこなし方などマスターすることができました。初めはパソコンに対して苦手意識をもっておられても、パソコンがなくてはならない生活の一部となること請け合いです。明るく楽しく一緒に学びましょう！教室に通ってくださるみなさんのお力になれるように頑張ります。"
	),
	array(
		"田村 先生",
		"エクセル・画像処理・イラスト",
		"テニス・お料理・日本酒",
		"パソコンは、いつも自分を新しい無限の世界につれていってくれる、大切な「トビラ」です♪受講生のみなさんと一緒に、その新しいトビラを開いていくことができることを大変うれしく思います！＾＾<br />好奇心を全開にして、ワクワク～ドキドキの毎日を創っていきましょう♪"
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