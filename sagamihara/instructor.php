<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
		array(
		"櫻井 先生",
		"エクセル・画像加工",
		"インターネット",
		"日々新たな発見のあるパソコンやタブレット。<br />できないなんて思わずにまずは教室を覗いてみてください。<br />パソコンやタブレットを利用することでみなさんの生活をより便利でより豊かにしていただきたい！そんな思いでサポートさせていただきます。<br />やってみたいことができる自分へ！楽しく学んでいきましょう！"
	),
		array(
		"石上 先生",
		"ワード・エクセル",
		"バレエ",
		"ここ数年でパソコンもすっかり身近な生活の道具になってきましたね。<br />「パソコンが出来なくても」という言葉を時々耳にしますが、イヤイヤ勿体無いですよ！写真や動画・旅行などの趣味に取り入れたり、インターネットを使って遠くのお友達と会話やメールをしたり･･･パソコンを活用すると世界がぐっと広がります！<br />皆様の「やってみようかな」を大切にしっかりサポートさせて頂きます。<br />一緒に楽しく頑張りましょう！！<br />教室で皆様のお越しをお待ちしております。"
	)
);
?>
					<h1><img src="/images/inst_03.png" width="632" height="45" alt="インストラクターのご紹介" /></h1>
					<p><img src="/images/inst_05.png" width="632" height="93" alt="「できない」悩みが「楽しくできる！」喜びの笑顔に変わる。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！" /></p>
					<p class="mB30"><img src="/<?=$room[$id][dir]?>/images/inst_06.jpg" alt="インストラクターの写真" /></p>
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