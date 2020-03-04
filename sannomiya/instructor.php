<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"石岡 先生",
		"タイピング",
		"お菓子を食べること、作ること",
		"三宮駅前教室のMOS試験官のひとりとして、日々皆さんの資格取得のお手伝いをしています。<br />小学生からお年寄りまで、誰もがパソコンを使う今の時代、パソコン資格は皆さんのスキルを証明する大切なもの。<br />これまでたくさんの受講生の皆さんと一緒にがんばってきた経験を活かして、学習のコツや合格へのポイント、さらに学習した知識をお仕事に活かすアドバイスまで、幅広くお伝えできれば、と思っています。<br />「合格しました」「できるようになりました」の笑顔を拝見できるのを楽しみに、皆さんの来校をお待ちしていますね！"
	),
	array(
		"小堀 先生",
		"ワード・パワーポイント",
		"お料理、散歩",
		"「スマホは使えるけどパソコンのタイピングが苦手、ワードやエクセルの使い方がわからない。」などの理由で、就職活動やお仕事探しに不安をお持ちではありませんか？<br />パソコン市民講座では、実務に活かせるビジネス向けの講座も充実しており、MOSなどの資格試験も教室で受検できます。<br />効率よくパソコンが使えるように、私達インストラクターがお手伝い致します。"
	),
	array(
		"上山 先生",
		"ワード・パワーポイント",
		"海に行く事",
		"求人欄に「ワード、エクセルが使える方」とよく記載されてありますが、どの程度なの？と不安に思うことがありますよね。<br />「使えます！」と自信をもって言える様、あなたに合った効率の良いカリキュラムをご提案させて頂きます。<br />また、資格を持っていれば、履歴書を提出するだけで自分のスキルを証明できます。資格は将来ご自身の強い味方になってくれます。<br />MOSやサーティファイの資格を取得してみませんか。受講生になられたら、いつも通うこの教室で受験できます。ぜひお待ちしております。"
	),
	array(
		"江越 先生",
		"ワード・エクセル",
		"ビーズ製作・マラソン",
		"「何となくは使えるんだけど、いまいち分からない・・・」「決まったフォーマットに入力するだけで、自分では一から出来る自信がない・・・」「独学でやってみようと市販の本を買ったけど、どこからやればいいか分からない・・・」など、皆さまの様々な疑問や不安を解決させるためのお手伝いを致します！<br />受講生の「出来た!!」という喜びのお声や笑顔が、私の一番の喜びでもあります。一緒にパソコンの学習を楽しみましょう。<br />パソコンが出来る証明書でもあり、自信にもなる資格取得も全力でサポート致します！ぜひ教室にお越し下さい。"
	),
	array(
		"柏原 先生",
		"エクセル・タイピング",
		"映画・ドライブ",
		"今や世の中は「パソコンが使えて当たり前」の時代になっています。当然就職の際に企業から求められるエクセルやワードのスキルも高いものになっています。皆さんはどのぐらい使いこなせていますか？<br />自己流で手探りでエクセルやワードを使えるレベルはたくさんいらっしゃいますが、実際には便利な機能をほとんど使いこなせていない方が多いです。<br />いかに効率よく、的確な資料を作成できるかどうかで企業からの信頼が変わります。<br />当教室では、ビジネス向けの講座も多く、世界でも通用するMOS資格や、実践力が身に着くサーティファイの資格取得も出来ます。<br />経験豊富なインストラクターが皆さまのお手伝いをさせて頂きます。皆さまとの出会いを楽しみにしています♪"
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