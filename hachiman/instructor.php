<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"藤田 先生",
		"iPad/iPhone・インターネット",
		"料理・ブログ",
		"インストラクターになる前はパソコンを独学で使っていました。できると思っていることでも一からしっかり学ぶことで「今までの苦労はなんだったんだろう」と完成にたどりつく時間も出来栄えの美しさも全く違うものになります。パソコンやタブレット、スマートフォンなどが使えるようになることで趣味の幅が広がったり、交流が広がったりと生活もより充実したものに変わっていくことでしょう。<br />私たちと一緒に楽しい時間を過ごしましょう。しっかりサポートしていきますよ！まずは勇気を出して教室へお越しください、お会いできるのを楽しみにしています。"
	),
	array(
		"大西 先生",
		"ワード",
		"ショッピング",
		"実は私　十数年前、皆さんと同じパソコン市民講座の受講生だったんです。<br />その後、ご縁があってインストラクターとなりましたのでパソコン市民講座とはとても長いお付き合いになります。<br />私がパソコンを始めた時からでもパソコンやタブレットはすごく速いスピードで進化しています。これからもどんどん進化・変化していくでしょうね(+o+)　そのスピードに遅れないよう、私自身も皆さんと一緒に勉強し、元受講生として皆さんの側に立ったアドバイスができるように努力していきたいと思っています。"
	),
	array(
		"中島 先生",
		"エクセル・パワーポイント",
		"ドライブ",
		"パソコンを使ったことがない方から仕事にエクセル等を使っておられる方や試験取得まで、その方に応じて目的は違いますが、みなさんが楽しく解りやすく習って頂けるようサポートしていきたいと思っています。<br />少しでもわからないことや疑問があればお声掛けください。<br />さあ、一緒にスタートしましょう！！"
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