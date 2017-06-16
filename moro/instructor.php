<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"塚越 先生",
		"ワード・タイピング",
		"読書",
		"パソコンは何でも出来る魔法の箱といわれていますが使いこなすにはコツが必要です。初心者の方でも大丈夫。一緒にコツを勉強しましょう！"
	),
	array(
		"小林 先生",
		"インターネット",
		"韓流ドラマ鑑賞・ウォーキング",
		"市民講座の受講生として学んでいた私も、今ではスタッフの一員として頑張っています。上達のコツは、何でも一緒だとおもうのですが、「解らないままにしない事」「いっぱい触る事」ですね。スタッフ一同でサポートしていきますので、一緒に頑張りましょう!!"
	),
	array(
		"丸田 先生",
		"Office全般",
		"音楽",
		"ワードで年賀状をつくったり、エクセルで家計簿を作ったり、インターネットで旅行の計画を立てたりと、パソコンひとつでいろいろな事ができます。一緒に楽しく学びましょう。"
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