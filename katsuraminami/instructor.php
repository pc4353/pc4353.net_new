<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"坂井 先生",
		"エクセル・iPad",
		"我が家の犬たちと遊ぶこと",
		"私がパソコンと出会った20年前、パソコンは特別な人が使う特別なものでした。<br />今やパソコンは家庭に当たり前に存在し、また持って歩ける便利なタブレットも登場、皆さんとってとても身近なものになりました。パソコンを使いこなすことによって、生活はより豊かに便利になります。パソコンライフを楽しんでいただけるようしっかりとサポートいたします！ぜひ一度教室にお越しくださいね。"
	),
	array(
		"松島 先生",
		"iPad・エクセル・笑顔（*^_^*）",
		"合唱・酒蔵めぐり",
		"パソコンは世代を問わず活用できる便利ツールです。どこでも楽しく使えるiPadも人気ですね！すべてに共通することは「きちんと学ぶ」ということ。さぁ、私たちと一緒にわくわく楽しく学びましょう♪",
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