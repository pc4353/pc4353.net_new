<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"東 先生",
		"ワード・エクセル・資格対策",
		"ハンドクラフト・旅行",
		"パソコンやタブレット、スマートフォンが生活や仕事に欠かせない時代になりました。これからパソコンを始めたい、趣味に生かしたい方、また、独学で使ってはいるけど基礎から知りたいと思っている方、スキルアップや資格取得を目指したい方！少しでも「やってみよう」という気持ちがあれば、是非チャレンジしてください！スタッフ一同、全力でサポートさせていただきます！学ぶことで世界が広がり、新しい発見があるはずです。"
	),
	array(
		"平口 先生",
		"ワード",
		"映画鑑賞",
		"パソコンが気が付けば生活にも仕事にも必要不可欠になってきました。パソコンが初めてでどこから始めていいか分からない…苦手意識がある…けれど興味があるのでしてみたい！という意欲的な方は必ず上達します。もっとパソコンを知っていただき楽しさを広げていただけるように是非力になっていきたいです！パソコンを学ぶ喜び、達成感を味わっていただきたいので、一歩踏み出してみませんか？"
	),
	array(
		"土山 先生",
		"写真・プログラミング・iPad",
		"読書・ゲーム",
		"スマホやタブレットで遊ぶ幼児が７割を超えました！文部科学省が、2020年より小学校でのプログラミング教育を必修化の検討を発表しました！！ＡＩの発達により、優れたロボットが続々と登場してきました！！すごい世の中になってきましたね"
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