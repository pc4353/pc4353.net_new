<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"伊藤（久） 先生",
		"Office全般・iPhone",
		"ネット検索・動画視聴",
		"やりたいと思った時が始め時！！<br />津島教室では、中学生のお子さんから80代の方まで幅広い年代の皆さんに学んでいただいてます。<br />最近では働き方改革で仕事活用の方が増え、資格取得の為に皆さん日々励んでいらっしゃいます。パソコン教室ですがタブレットやスマートフォンの講座も楽しく学ベルようになっています。インストラクター一同真摯に取り組んで参りますので是非一度教室へお越し下さいませ。"
	),
	array(
		"伊藤（愛） 先生",
		"Office全般・タイピング",
		"ショッピング・ドラマ観賞",
		"初めての方も安心してください！！<br />パソコンやiPhone、iPad、まだ持っていない方も、一度無料体験をしてみませんか？<br />「趣味」を広げたい方、転職に備え「ワード」「エクセル」を身に着けたい方、「仕事効率をアップ」させたい方、皆さんさまざまな思いがあると思います。<br />私たちが全力でサポートいたしますので、津島教室でスキルアップしてみませんか？"
	),
	array(
		"池牟禮 先生",
		"ワード・プログラミング",
		"旅行・カラオケ",
		"パソコンは知れば知るほど楽しくなる！！<br />津島教室では様々な講座があります。初心者の方から普段お仕事で使われている方にも、こんな事ができるんだ！こんな便利な機能があったんだ！という発見が必ずあります。<br />そして出来たことの喜びとスキルアップは「自信」に繋がります！<br />無料体験も行っているので、是非一度お越しくださいませ。"
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