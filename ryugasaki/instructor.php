<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"佐藤 先生",
		"パソコンの機能・WORD",
		"ビーズステッチ・カラオケ・EXILE",
		"私が初めてパソコンに触れた時は、「難しくて、扱い辛いなぁ・・・」と思いました。最近はソフトもだいぶ使い易くなって、便利になりにましたがこれからパソコンの勉強を始めようとされる方のパソコンに対する不安は今も昔もあまり変わらないと思います。私の仕事に対するモットーは「優しく親切丁寧に」です。一見難しそうに見える事でも、一つ一つ理解を積み上げていけば、誰でも必ずパソコンの持つ無限の拡がりを持つ世界を肌で感じる事が出来ると信じています。生徒さんがパソコンの世界の扉を一つずつ開けたときに見せてくれる笑顔が、私のかけがえのない財産です。"
	),
	array(
		"文藏 先生",
		"EXCEL・ポスター作成",
		"笑点・ドライブ（ホームセンターめぐり）",
		"私は「パソコン市民講座」の卒業生です。<br />現在はインストラクターの仕事をしていますが、受講生だった経験とパソコンを使いこなせるようになり世界が広がった経験を持っています。だからこそ、受講されている皆さんの気持ちを誰よりも理解できる立場でいたいと思っています。このホームページをご覧になっている皆さん、ぜひ教室を見にいらしてください、そして私たちと一緒に楽しく充実した時間を過ごしましょう！"
	),
	array(
		"坂巻 先生",
		"ワード",
		"ビーズ集め",
		"私がはじめてエクセルを使ったのは企画の仕事をしている時にPOSデータの集計を頼まれた時でした。何もわからなくて使うのが最初大変でしたがエクセルってすごい！！と感動した記憶があります。基礎がきちんとわかっていたらもっと使いやすかっただろうし、応用がきいていたと思います。パソコンは、いろんな機能やアプリもあって何か必要なのかとか使い方に困ったりしますよね。まずさわって使ってみましょう！お料理をつくる時に道具や材料が必要です。パソコンを道具や材料だと思って一緒に一歩踏み出してみませんか♪"
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