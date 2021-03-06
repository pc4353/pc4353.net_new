<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"首藤 先生",
		"パワーポイント・DVD編集",
		"息子のサッカー観戦",
		"今や一家に一台から、一人一台にとなってきたパソコン!!<br />「パソコンを使ってみたいけれど、できるかしら？」「自己流で使ってきたけど、もっと便利に使いこなしたい…」と思われている方も多いのでは？<br />そうお思いの皆様、まずは教室までお越しください。<br />教室で学習したことが、自宅でも仕事でも自分ひとりで作成できるように、私たちインストラクターと一緒に楽しく学習しましょう。"
	),
	array(
		"家田 先生",
		"インターネット・画像映像編集加工",
		"最近ワインにはまってます",
		"こんなことが出来たら…と自己流でパソコンを始めて十数年。初めてやりたいことが出来た時の喜びは忘れられません。<br />パソコンもどんどん進化していろんなことが簡単に出来るようになりました。<br />遠回りしてやってきた事が、基礎を学ぶことでこんな近道もあったのかと思うことが多々ありました。<br />しっかり基礎を学習することがパソコンライフの第一歩です。パソコンの楽しさを私たちと一緒にみつけて行きましょう。"
	),
	array(
		"青柳 先生",
		"ワード・タイピング・インターネット",
		"趣味：ゴルフ・ペイント",
		"趣味で始めたブログがきっかけで数十年ぶりに同窓会をすることが出来ました。それから年に数回、旧友たちと親交を深めています。このようにパソコンは人々を繋いでくれる便利なツールです。<br />皆さんのパソコンライフをお手伝いできたらうれしく思います。<br />生徒さんの「ありがとう」の一言が私のエネルギー源です。"
	),
	array(
		"牧本 先生",
		"エクセル・インターネット・iPad",
		"パソコン・スキー・サッカー観戦",
		"パソコンをどのように使ってみたいですか？パソコンで何がしたいですか？<br />パソコンは皆さんが思っているよりはるかに簡単で楽しい道具です。いきなり複雑なことをしようとせずに基礎をしっかり学習しましょう。そして反復練習するだけでなく「こうしたらどうなるだろう？」「こんなことできないかな？」と常に考えながら操作を行ってみましょう。簡単なことから何かをパソコンで完成させてみましょう。パソコンの便利さや楽しさがわかると同時に、自分の思っていることをパソコンに伝えるコツが身につきますよ。思わぬことになったり、失敗しても大丈夫！そのためにわたしたちしっかりとフォローします。<br />パソコンとは皆さんが知っているWindowsもインターネットもない頃から30年のお付き合いです。テレビはなくても困りませんが、パソコンがないのは考えられません。でもそれも基礎をしっかりやってきたからこそと思っています。<br />そんな私ですが、いまだに日々新しいこと楽しいことに遭遇しています。今のお困りごとは私たちにおまかせください！私たちと一緒に楽しく新しく便利な世界を体験しましょう！"
	),
	array(
		"柴田 先生",
		"ワード・画像編集・デザイン",
		"映画・テレビ鑑賞",
		"仕事で必要になったことでパソコンとの付き合いが始まりましたが、今やそれ以上に生活の中で欠かせない存在となりました。<br />インターネットで調べ物をしたり、買い物をしたり。また、年賀状や履歴書などの書類も作成できます。パソコンが1台あるだけで自分でできる世界がどんどん広がりますよ。より便利で豊かな生活が送れるように、私たちと一緒にパソコンを学びましょう！"
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