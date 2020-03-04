<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"新 先生",
		"受講生さんのニーズに応じたイベントを多数開催",
		"iPhoneでインターネットショッピングとLINE",
		"少し前までは、インターネットは自分には関係ないという方が多かったのですが、近頃は「周りの人から、インターネットくらいできなくちゃ、とか、LINEしてよって言われるけど、誰も教えてくれなくて困ってる！」と多くの方が切実な悩みをもって教室に来られます。<br />教室では、映像を見ながら繰り返し練習していただけます。困ったことがあればいつでも相談してください。<br />使って楽しいインターネットにLINE、ぜひ習いにきてください！<br />使えるようになるまでお手伝いします^ ^"
	),
	array(
		"廣嶋 先生",
		"資格の合格率が高さ",
		"ビジネスで即戦力のビジネスOffice講座",
		"仕事の現場では、限られた時間の中で、いかに正確に業務をこなせるかが求められます。<br />過去にとった資格がある！なんとなくできる！入力だけしかしない、という方も、スキルを一定に保ち効率を上げることによって、負担も時間も軽減出来ます。<br />まずはお気軽に、ご自身の今のスキルをチェックしてみませんか？"
	),
	array(
		"源田 先生",
		"受講生さんが質問しやすい教室",
		"写真整理をしながらファイル操作を身に付ける写真マスター講座",
		"重くて保存に場所をとるアルバム、また最近では、携帯やスマホで撮りためた写真、いつか整理しようと思われているのではないでしょうか。いつでも取り出せるよう、パソコンにわかりやすく保存し、また、それらの写真を使って、スライドショーやフォトブックを作成、大切な写真を復元したり、数枚の写真を一枚にするコラージュ、暗い写真を明るく加工など、とても楽しい講座です。"
	),
	array(
		"植田 先生",
		"受講生さんから明るくて居心地がいい教室と好評頂いてます",
		"会員制のサイトでしっかり身に付く",
		"サイトで復習することができ、自宅でのオンライン学習も可能！また会員ならではのサポートも充実して、生涯学習としても同じ教室での交流もあり、皆さんに楽しんで頂いて折ります"
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
									<dt class="box-a">教室の自慢</dt>
									<dd class="box-b"><?=$value[01]?></dd>
								</dl>
								<dl class="clearfix mB10">
									<dt class="box-a">おすすめ講座</dt>
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