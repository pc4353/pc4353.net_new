<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"首藤 先生",
		"ワード・DVD編集",
		"息子のサッカー観戦",
		"今や一家に一台から、一人一台にとなってきたパソコン!!<br />「パソコンを使ってみたいけれど、できるかしら？」「自己流で使ってきたけど、もっと便利に使いこなしたい・・・」と思われている方も多いのでは？<br />そうお思いの皆様、まずは教室までお越しください。<br />教室で学習したことが、自宅でも仕事でも自分ひとりで作成できるように、私たちインストラクターと一緒に楽しく学習しましょう。",
	),
	array(
		"齋藤 先生",
		"ワード",
		"ライブ遠征、お酒のおつまみ作り",
		"「パソコン」「インターネット」と聞くだけで「自分には無理！」と思われている方も少なくないと思います。私もかつてはそうでした。まずは触れてみる、そして興味を持ってみる。そうしているうちに、自然とパソコンの楽しさや奥深さを実感でき、気づけば手放せない存在となっているはずです。<br />ぜひ、パソコンの楽しさ、奥深さを体感しに教室にいらしてください。",
	),
	array(
		"天野 先生",
		"ワード",
		"映画鑑賞",
		"パソコンやスマートフォンは、みなさんの生活に必ず彩りを加えてくれるものになるはずです。苦手意識をお持ちの方も多いと思いますが、まずは触れて、体験してみましょう。今までには考えられなかった世界がきっと待っています。趣味に仕事に、目的は様々ですが、楽しんで学習していきましょう！",
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