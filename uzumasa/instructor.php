<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"新屋敷 先生",
		"Word・タイピング",
		"散歩",
		"最近、お仕事には必ずと言ってよいほどパソコンスキルが必要となっています。<br />はじめての方でも資格取得を目指して通われる方も増えてきました。お仕事に直結するようにしっかりサポートさせて頂きます。<br /><br />保持資格：<br />MOS（Word・Excel）<br />サーティファイ（Word・Excel）3級2級1級<br />サーティファイPower Point初級上級"
	),
	array(
		"藤井 先生",
		"ワード",
		"スマホで写真のコラージュ",
		"パソコンだけではなく、スマホやタブレットも一人1台の時代になりました。さらに今はお仕事する方は特にPCやタブレットが触れて当たり前！なんですね。<br />なかなかチャンスがなくて触っていない方、怖くて…なんて思っているそこの方！<br />今こそチャンスです。ぜひ一度触れてみて下さい！今までにない便利な世界が広がりますよ。この教室では初心者から資格取得を目標にされる方までしっかりサポートさせて頂いています。ぜひ一緒に頑張りましょう☆<br /><br />保持資格：<br />MOS（Word・Excel）<br />サーティファイ（Word・Excel）1級<br />サーティファイPower Point初級上級"
	),
	array(
		"松島 先生",
		"エクセル",
		"合唱・美味しい日本酒を探すこと",
		"お仕事に趣味にとパソコンはとっても便利なツール。最近では使えることが当たり前になりつつありますね。でも大事なのはしっかり「まなぶ」という事。そして資格があればお仕事にも自信が付きます。資格取得にも私たちが万全のサポートをさせて頂きます。さぁ、私達と一緒に楽しんで学びましょう♪<br /><br />保持資格：<br />MOS（Word・Excel）<br />サーティファイ（Word・Excel）3級2級1級<br />サーティファイPower Point初級上級"
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