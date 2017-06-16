<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"吉野 先生",
		"エクセル",
		"ピアノ・猫と遊ぶこと",
		"「パソコンって何でもできるのねぇ～魔法の箱みたい」というお話しをよく耳にします。でも私達がしっかり使ってあげられないと“ただの箱”になってしまいます。みなさんが“ただの箱に魔法をかけられる魔法使い”になれるようにしっかりサポートしていきます。一緒に楽しく頑張りましょう！"
	),
	array(
		"平林 先生",
		"インターネット",
		"モザイクタイル・料理",
		"パソコンはこれからの将来なくてはならないライフラインです。お勉強だと思わず、まずは一緒に触って、一緒に学んで、パソコンライフを楽しみましょう。"
	)
);
?>
					<h1><img src="/images/inst_03.png" width="632" height="45" alt="インストラクターのご紹介" /></h1>
					<p><img src="/images/inst_05.png" width="632" height="93" alt="「できない」悩みが「楽しくできる！」喜びの笑顔に変わる。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！" /></p>
					<p class="mB30"><img src="/<?=$room[$id][dir]?>/images/inst_06.jpg" alt="インストラクターの写真" /></p>
					<h2 class="mB20"><img src="/images/inst_08.png" width="632" height="45" alt="インストラクターからのメッセージ" /></h2>
					
					<div class="i-pr clearfix mB50">
						<div class="section-lv2 moz2 clearfix">
							<p style="border:1px solid #cccccc; padding:20px;" class="mB30">
							パソコンをもっと「使いこなそう」！！<br />
							<br />
							みなさんは日々の生活の中でどのくらいパソコンとふれあっていますか？「購入してはみたものの、どうやって使ったらいいのか…」「インターネットに興味はあるけど、なんとなくこわい」、そんなふうに感じていませんか？<br />
							最近は「インターネット」という言葉を聞かない日はないくらい、パソコンやインターネットが身近なものになってきました。そして、「インターネットにつながる」ことは「世界につながる」ことだ、と言っても言い過ぎではありません！パソコンはみなさんを新しい世界へ連れて行ってくれる、とても便利な機械なのです。<br />
							<br />
							この教室では、みなさんのパソコンライフを、より充実したもの、より楽しいものにする手助けをします。熱意あるインストラクターが、みなさんがパソコンを「使いこなせる」ようになるまで、しっかりサポートします！<br />
							ぜひ教室にお立ち寄りください。インストラクター一同、お待ちしております。
							</p>
						</div><!-- /.section-lv2 -->
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