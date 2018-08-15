<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"岩間 先生",
		"オフィス全般・iPad",
		"入浴・歴史跡巡り",
		"「皆さんが楽しく学ぶ場所！」を目指しています。便利にパソコンを使いたい、iPhoneやiPadで楽しみたい、お仕事のために資格を取りたい、どんな方にもご満足いただけるように精いっぱいのサポートをさせていただきます★<br />皆さんの「こんなことができるようになりたい！」という気持ちをパワーの源にしておりますので、是非教室にお越しください！<br /><br />保持資格：<br />MOS Word2013<br />MOS Excel2013<br />Word2013文書処理技能認定試験 1級<br />Excel2013表計算処理技能認定試験1級<br />PowerPoint2013プレゼンテーション技能認定試験上級（サーティファイ認定インストラクター）"
	),
	array(
		"井本 先生",
		"ワード・インターネット・ブログ",
		"旅行・料理・手芸（羊毛フェルト)",
		"「こんなことが出来るようになった！」「知りたいことがもっと出てきた！」など、受講生の皆さんのお声を聞くと、私もとても嬉しく、「よし、頑張ろう！」と思います。きっと皆さんも「出来る」が増えると同じ気持ちになるのかなぁと思います。<br />そんな皆様の思いを少しでもたくさん増やせるよう、しっかりとサポートしていきます！<br />通常授業だけでなく、楽しいイベントもたくさんご用意していますので、是非ご参加してください！<br /><br />保持資格：<br />MOS Word2013<br />MOS Excel2013<br />Word2013文書処理技能認定試験 2級<br />Excel2013表計算処理技能認定試験2級<br />PowerPoint2013プレゼンテーション技能認定試験上級"
	),
	array(
		"中村 先生",
		"エクセル・iPad活用",
		"楽器、野球、写真、ゲームetc…",
		"日常でパソコンを使う事はよくありますが、なかなか全てを使いこなすのは難しいと思います。<br />でも全て使うのではなく、色々ある機能の中で使ってみたい事を見つけて頂き、楽しく使って頂ける事が大切だと思うので、私は皆さんが楽しく使って頂ける様に全力でサポートしていきます！！<br />パソコンの基本操作から周辺機器の使い方まで何でもお答えできる様になっていきますので、気になる事があれば何でも質問して下さい！！<br />★一緒にパソコンを楽しく便利に使っていきましょう！！★<br /><br />保持資格：<br />Word2013文書処理技能認定試験 1級<br />Excel2013表計算処理技能認定試験1級<br />PowerPoint2013プレゼンテーション技能認定試験上級（サーティファイ認定インストラクター）"
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