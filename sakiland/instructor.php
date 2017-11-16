<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"永吉 先生",
		"ワード・エクセル",
		"映画・LIVE鑑賞",
		"学生時代にパソコンを習って、仕事で使っているだけでした。<br />エクセルで困って教室に通ったのですが、目からうろこのことばかりで教室で習う大切さを思い知らされました。思いきって通ってよかったです。教室でパソコンの楽しさを知りました。<br />最初は誰でも一緒です。はじめの一歩を踏み出しませんか？<br />楽しく身につけていただけるように、全力でサポートいたします！"
	),
	array(
		"小松 先生",
		"エクセル・iPad",
		"カラオケ・読書",
		"パソコン教室でタッチタイピングを身に付けてからパソコンが大好きになりました。市民講座の魅力は、タイピングのスピードを上げるきっかけになるタイピングコンテストだと思います。前回よりも文字数が増えると皆さん、いい笑顔をされますよ。<br />私は自宅での資料作りにはパソコン、外出先での読書ではiPadを活用しています。<br />1人でも多くの方に、この楽しさをお伝えしていきたいです！"
	),
	array(
		"田中 先生",
		"ワード・エクセル",
		"カフェめぐり",
		"以前は全くのアナログ人間でしたが、パソコンとiPadに出会って生活が激変！使えば使うほど、なんて便利なんだ～！と感動の連続で、もはや無くてはならない存在に…。<br />私自身、この2つによってぐーんと世界が広がったので、ぜひ、この楽しさ、便利さをたくさんの方にお伝えしたい！と思っています(*^_^*)"
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