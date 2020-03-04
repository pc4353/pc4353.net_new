<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"菊地 先生",
		"ワード・エクセル・資格対策",
		"旅行・カフェめぐり",
		"今やインターネットでニュースを見たり、ショッピングをしたり…パソコンは日常に欠かせないものになりました！他にも、年賀状を作ったり、写真を加工したり、表を作ったり…パソコンがあれば、趣味も仕事も、幅が広がりますよ！<br />そして、今やどんなお仕事にもパソコンは絶対必要な時代です！今さら…と思っている方、全然遅くはありませんよ！！初心者からでもビジネススキルをしっかり身に付けられるよう、私たちインストラクターがしっかりサポートします。資格を取得してお仕事に役立てたり就職が決まった方も多数！！諦めずにパソコン市民講座へお越しくださいね♪"
	),
	array(
		"池戸 先生",
		"エクセル・パワーポイント",
		"旅行・ドライブ・映画",
		"今や日常の生活の一部になった電子機器。テレビ番組では「視聴者提供動画」「プレゼント応募」が当たり前のようにインターネットを使用してできるようになりました。当たり前だけど「どんな仕組み？」「実はどうなっているの？」は意外と知らなかったりしませんか？<br />それ、一緒に考えて解決していきましょう。世の中の流れについていくのは楽しいですよ。<br />私たちが楽しくサポートします！"
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