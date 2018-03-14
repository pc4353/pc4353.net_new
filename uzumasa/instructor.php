<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"川野 先生",
		"パワーポイント",
		"ドライブ・アロマテラピー",
		"私は子供のころからパソコンに触れる機会が多かったのですが、きちんと習ったわけではなかったので、何となく・・・でしか使えませんでした。<br />一から基礎を学ぶ機会があり、難しいながらも少しずつできることが増えていき、だんだんおもしろくてうれしくなり、学ぶことがとても楽しかった経験があります。<br />受講生のみなさんにも『わかった！』『おもしろい！』と楽しみながら学んで頂けるように、精一杯フォローしたいと思いますので、お気軽に声をかけてください！"
	),
	array(
		"藤井 先生",
		"ネット検索",
		"スマホでコラージュ",
		"自分が学生のときに初めてパソコンに触れて早○○年。時代の流れは速いもので、今では外でスマートフォン・タブレットを操作し、行きたい所へ案内してくれる時代になりました。<br />ぜひ、便利なものは使えるようになって頂きたい！！<br />さぁ皆さんもこの教室で新しい世界を見つけてみませんか？"
	),
	array(
		"松島 先生",
		"Excel",
		"合唱・美味しい日本酒を探すこと",
		"お仕事に趣味に、とパソコンはとっても便利なツール。そして最近ではiPadやスマートフォンも多彩な機能が盛りだくさん♪<br />でも共通して大事なのはしっかり「まなぶ」ということ。<br />さぁ私たちと一緒に楽しんで学びましょう♫何でも聞いてくださいね！"
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