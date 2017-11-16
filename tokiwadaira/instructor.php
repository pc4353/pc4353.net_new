<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"陣野 先生",
		"インターネット・ワード",
		"小物の手作り、手芸",
		"私が初めてパソコンを触った時、画面は黒くて映っているのは緑の文字の羅列だけ…今は見た目も色鮮やかに楽しく、インターネットを使えば知らない世界の景色すら見ることができますね。パソコンを使えば、沢山のワクワクやドキドキがあなたの生活にやってきます！使わないのはもったいない！<br />「趣味にパソコンを使ってみたい」方も「仕事で使うから覚えなくちゃいけなくなった」という方も、ぜひ教室にお問い合わせください。思い通りにパソコンを使いこなせるようになるには何を習えばいいのか、しっかりカウンセリングさせていただきます。一緒に楽しく学びましょう！"
	),
	array(
		"竹内 先生",
		"iPad・iPhone",
		"海外ドラマ、映画鑑賞",
		"私がインストラクターになったのはパソコンや携帯端末を使える便利さ、楽しさをたくさんの人に知ってもらいたいと思ったからです。最初の内は苦戦する事もあるでしょう。なので私たちがサポートします！ぜひ、おうちでも安心してパソコン、iPad、iPhoneを使えるようになりましょう！"
	),
	array(
		"塩澤 先生",
		"ワード・iPhone",
		"読書、ジョギング",
		"私とパソコンとの出会いは今から約20年前のことです。当時は私も初心者でしたので、毎日苦戦していたことを覚えています。ですが使えるようになると便利なだけでなく、世界も広がり、今では生活に欠かせないものとなりました。みなさんにも出来た喜びと新しい世界を感じて頂けるよう精一杯サポートさせてください。スタッフみんなでお待ちしています。"
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