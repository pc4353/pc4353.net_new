<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"鳥越 先生",
		"エクセル・インターネット",
		"お菓子作り・着物着付け・映画鑑賞",
		"今の時代パソコンはなくてはならないものですね。パソコンはこれからは絶対にできた方がいいです。瞬時にいろいろなことを調べることができるし、買い物や旅行の予約もできます、本当に世界が広がりますよ。<br />みなさんにそんなパソコンの楽しい世界を知っていただきたいと思い、日々頑張っております。<br />よろしくお願いします。"
	),
	array(
		"磯崎 先生",
		"パソコンの設置・トラブル対応等",
		"映画鑑賞・ドライブ・読書",
		"パソコンはどんどん身近な生活の道具になってきており、これからますます生活を潤す必須アイテムになっていくと思われます。パソコン習得をがんばっている受講生の方々の力になれるようがんばります。<br />よろしくお願いします。"
	),
	array(
		"谷川 先生",
		"ワード・iPad",
		"お菓子作り・展示会鑑賞",
		"触れば触るほど、楽しくなるのがパソコンです。疑問はその日のうち解決しましょう。私たちインストラクターが全面的にサポートいたします。"
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