<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"佐藤 先生",
		"イベント・iPad",
		"読書・神社参拝",
		"インストラクター歴18年の経験を生かして、あなたのサポートをいたします。<br />目まぐるしく変わる世の中。変化の多いこの時代の波に乗り遅れないよう、ぜひ新しい一歩を踏み出しましょう。パソコンもタブレットも、あなたの生活をより豊かにします。私も初めは初心者でした。そして今でも学ぶことがたくさんあります。<br />パソコン・タブレットを始めようと考えている皆様。私たちが応援いたします。"
	),
	array(
		"榊原 先生",
		"エクセル・ワード",
		"音楽鑑賞・読書",
		"パソコンもタブレットもは今では生活に欠かせないものとなりましたが、誰でも最初は初心者です。<br />初めてメールをした時、インターネットで買い物をした時、とても緊張しながらだったのを覚えています。と同時に、うまく出来た時の達成感も忘れられません！みなさんにも、新しい世界を一つずつ知っていただき、楽しくて便利な道具として毎日の生活に役立てていただきたいと思っています。<br />しっかりサポートさせていただきます。一緒にがんばりましょう！"
	),
	array(
		"今井 先生",
		"インターネット",
		"アウトドア・音楽",
		"インターネットの世界は様々な情報であふれていて、誰でも目にすることができます。ほしい情報も便利なアプリも無料で簡単に手に入れることができるのに、どうすればいいかわからないなんてもったいないです！ネットの世界でできることは今後も広がり続けるでしょう。<br />私もまだまだ勉強中ですが、ぼんやりと理解していたことをしっかり学びなおすことで、もやもやしていた思考がクリアになり、毎日が楽しいです。<br />学ぶことの楽しさを感じながら、一緒に前進していきましょう！"
	),
	array(
		"高橋 先生",
		"ワード",
		"御朱印巡り・海外ドラマ鑑賞",
		"パソコンを職場では使っているけど、求人欄にあるパソコン操作ができるってどこまでのレベルなんだろう。<br />私に足りないものって何だろう。<br />私がパソコン教室に通うきっかけはこんな疑問からでした。<br />基礎から学んだ事で苦手だったパソコンが楽しいものへとかわりました。ちょっとしたきっかけで楽しい世界が広がるものです。<br />パソコン教室が何となく気になる貴方、是非お気軽に声をかけてください。お待ちしています。"
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