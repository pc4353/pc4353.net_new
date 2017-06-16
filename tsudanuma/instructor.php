<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"長 先生",
		"ワード",
		"ネットショッピング",
		"津田沼教室では、初心者から資格取得まで多くの受講生さんが学んでいらっしゃいます。初めて習い事をするときは緊張されることもあるかと思いますが、アットホームな雰囲気と優しい先生たちがみなさまの新たなスタートのお力にきっとなれると思います。お気軽に教室へお立ち寄りください。"
	),
	array(
		"坂口 先生",
		"資格系・クラフト",
		"テニス・ヨガ",
		"パソコンやタブレットはいまや生活になくてはならないもの、当たり前にあるものになってきています。仕事ではもちろん、趣味としても、生活を便利で豊かにしてくれる素晴らしい道具です。<br />悩んでいる方、まずは始めてみましょう。私たちがしっかりサポートしていきます！！<br />新しい世界が広がりますよ。"
	),
	array(
		"菅野 先生",
		"iPad・インターネット・写真加工",
		"ショッピング・スイーツ食べ歩き",
		"パソコンと仲良くなると本当に頼りになります。パソコンやipadがないともう生活できないくらいです。教室ではたくさんのイベントも開催しています♪<br />皆さんと一緒にたくさん楽しみたいと思っています。"
	),
	array(
		"川津 先生",
		"iPhone",
		"水族館巡り",
		"新しい事を始める時緊張感がある反面、ワクワクする気持ちがあると思います。<br />パソコンやタブレットを使っていくうちに、知ることや使いこなせるようになることの楽しさをたくさん感じていただけます。<br />一緒にワクワクしながら学んでいきましょう。お待ちしております！"
	)
);
?>
					<h1 class=""><img src="/images/inst_03.png" width="632" height="45" alt="インストラクターのご紹介" /></h1>
					<p><img src="/images/inst_05.png" width="632" height="93" alt="「できない」悩みが「楽しくできる！」喜びの笑顔に変わる。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！" /></p>
					<p class=" mB30"><img src="/<?=$room[$id][dir]?>/images/inst_06.jpg" alt="インストラクターの写真" /></p>
					<h2 class="mB20"><img src="/images/inst_08.png" width="632" height="45" alt="インストラクターからのメッセージ" /></h2>
					
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