<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"木崎 先生",
		"パソコンの裏技",
		"バレエ",
		"夕食の献立に悩んだ時、バスの時刻を調べたい時、生活に便利な情報が今やインターネットで簡単に検索できるようになりました。<br />「いつかそのうち」ではなく、「今すぐ」快適パソコンライフを一緒にはじめませんか？"
	),
	array(
		"齋藤 先生",
		"Wordでお知らせ文の作成・ホームページ作成",
		"料理・ショッピング",
		"パソコンの資格と言ったら、どんなものをご存知ですか？パソコン市民講座では、「MOS」「サーティファイ」の対策講座をご用意しています。実務を想定した内容で、実践力育成・効率UPを目指すなら「サーティファイ」、就職・転職の実力アピールには、日本最大級のパソコン資格「MOS」がおすすめ！どちらもこの教室で本試験が受けられます。まずはお教室へいらっしゃってくださいね！"
	),
	array(
		"髙橋 先生",
		"年賀状・カード作成",
		"テニス・編み物・ダイビング",
		"パソコンを始めるのに「遅すぎる」は絶対にありません！<br />「写真入りの年賀状を作ってみたい」「たくさん撮った旅行の写真を整理したい」…<br />そんな「やりたい」気持ちが芽生えたら、いつでも教室に足を運んでみてください。<br />インストラクターが全力でサポートいたします！ご一緒に楽しく学びましょう！？"
	),
	array(
		"藤倉 先生",
		"Wordでのチラシ作成",
		"海外ドラマ鑑賞",
		"「パソコンを使える人ってどんな人？」そう思われたことはありませんか？これからお仕事に就かれる学生の方、転職をご希望の方はもちろん既にパソコンを使われている方も是非、「スキルの証明」として、資格取得を目指しませんか？当教室での合格率は98％!!合格までしっかりサポートさせて頂きます。ご一緒にチャレンジしましょう！"
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