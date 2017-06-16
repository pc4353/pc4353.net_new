<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"森 先生",
		"ワード・クラフト",
		"読書・オークション",
		"私がパソコンを始めたきっかけは再就職のためでした。ですが、今では仕事以上に生活に欠かせないものになっています。年賀状を作ったり、CDやDVDのラベルを作ったりと、[オリジナル]のものを作ることが、とても楽しくてたまりません♪オークションで欲しい物を安く手にいれるのも快感です♪<br />みなさんがパソコンを使いこなせるようになるまで、しっかり・じっくり・丁寧にお手伝いさせていただきます。いっしょに楽しみながら頑張りましょう！",
	),
	array(
		"森浦 先生",
		"エクセル・インターネット",
		"音楽・映画鑑賞",
		"パソコンは私にとって様々な要望に応えてくれるものです。趣味の音楽・映画に関しての情報をインターネットで調べたり、仕事で必要な制作物・書類を作成したり。一人では難しい事がパソコンを通してなら手に入れる事が出来ます。<br />みなさんがお持ちの「こんな事が出来たらいいな」という思いをパソコンで実現させませんか？みなさんの夢の実現の為にインストラクター一同、精一杯お手伝いさせていただきますので一緒に頑張りましょう！",
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