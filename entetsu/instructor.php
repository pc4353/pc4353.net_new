<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"宮分 先生",
		"インターネット",
		"犬・写真・旅行・食べ歩き",
		"パソコンが普及していない時代って、どんな生活だったかな？って思い出せないほど、パソコンが生活に欠かせなくなりましたね。パソコン市民講座で、皆さまの「あんなことができたらいいな」という気持ちを全力でサポートさせてください。皆さまの「あっ！こんなことができた♪」という喜びを一緒に味あわせてください。<br />新しいことができるようになるって、ドキドキ☆ワクワクしますよね。皆さまとの出会いを楽しみにしています。一緒に頑張りましょう！"
	),
	array(
		"小池 先生",
		"Excel・Word",
		"猫溺愛・お裁縫・韓国ドラマ鑑賞",
		"パソコンに向かっているとつい時間を忘れてしまいます。<br />インターネットで買い物したり、音楽を聴いたり、旅行の写真を整理したり、やりたいことがたくさんあります。パソコンを趣味に活かしたい方や、仕事で必要な方、皆さんのやりたいことを一緒に楽しみながら学んでいけたらうれしいです♪<br />私もまだまだ勉強中！一緒に頑張りましょう！"
	),
	array(
		"村松 先生",
		"インターネット",
		"読書(時代小説)、朝ドラ鑑賞",
		"パソコンが出来ると楽しみや便利さが大きく変わります。インターネットで好きなアイドルのコンサート情報を得たり、見たい映画の時間を調べたりと趣味に活かせたら楽しいですね♪エクセルでは血圧などの健康管理や家計簿をつけたりと生活に役立てることも出来ます。私もまだまだ勉強中ですが、知らなかったことが出来るようになるのは嬉しい物です。一緒に新しい楽しみをみつけていきましょう♪"
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