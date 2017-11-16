<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"戸村 先生",
		"ワード・ネット活用",
		"ゴルフ・食べ歩き",
		"パソコンをやってみようと思ったらうちの教室で決まりです！教材と先生達は日本一！愛と情熱でサポート致します(^_^)/"
	),
	array(
		"小山 先生",
		"ワード・ネット活用",
		"半身浴",
		"普通の主婦だった私が今ではパソコンが生活の一部に！さぁ皆さんも一緒にパソコンライフを楽しみましょう！！"
	),
	array(
		"川村 先生",
		"パソコン全般",
		"楽器演奏",
		"パソコンはやればやるほど面白い！！教室に来ているからこそ聞ける「仕事で使えるポイント」をご紹介いたします。"
	),
	array(
		"野口 先生",
		"ワード・タイピング",
		"手芸・愛犬と遊ぶ",
		"「わかった！」「できた！」がどんどん増えていくように、お手伝いします。"
	),
	array(
		"石川 先生",
		"グラフィック",
		"食べ歩き・旅行",
		"iPadを使うと世界がグッと広がります。便利な裏ワザやアプリをご紹介します♪"
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