<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"佐藤 先生",
		"イベント・iPad",
		"読書・神社参拝",
		"インストラクター歴16年の経験を生かして、あなたのサポートをいたします。<br />目まぐるしく変わる世の中。変化の多いこの時代の波に乗り遅れないよう、ぜひ新しい一歩を踏み出しましょう。パソコンもタブレットも、あなたの生活をより豊かにします。私も初めは初心者でした。そして今でも学ぶことがたくさんあります。<br />パソコン・タブレットを始めようと考えている皆様。私たちが応援いたします。"
	),
	array(
		"今泉 先生",
		"インターネット・ワード",
		"料理・アロマ",
		"パソコンが使えるようになると、新しい世界が広がり、たくさんの楽しみが増えます。<br />私の日々の生活にはインターネットが欠かせないものとなっています。調べものをしたりショッピングをしたり、自宅でも外出先でもインターネットを活用して便利さを実感しています。そんな便利さや楽しさをみなさんにも実感していただきたいと思っています。<br />一緒に、新しい世界を広げていきましょう。"
	),
	array(
		"榊原 先生",
		"エクセル・ワード",
		"音楽鑑賞・読書",
		"パソコンもタブレットもは今では生活に欠かせないものとなりましたが、誰でも最初は初心者です。<br />初めてメールをした時、インターネットで買い物をした時、とても緊張しながらだったのを覚えています。と同時に、うまく出来た時の達成感も忘れられません！みなさんにも、新しい世界を一つずつ知っていただき、楽しくて便利な道具として毎日の生活に役立てていただきたいと思っています。<br />しっかりサポートさせていただきます。一緒にがんばりましょう！"
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