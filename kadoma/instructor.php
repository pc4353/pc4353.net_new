<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"上林 先生",
		"チラシ・POP作成・ホームページ",
		"料理・スキー",
		"何かを”学びたい”と思う受講生の皆さんの意欲に毎日力をいただいています。教室で学んだ事で｢仕事に活かせた！｣｢こんなの作ったよ！｣と作品を見せていただけると本当に嬉しくなります。また、私は皆さんのお気持ちになることで実際に生活や仕事を通し実用的にパソコンが使いこなせるようになる様、細かいご対応ができるように努力して参ります。"
	),
	array(
		"稲井 先生",
		"パソコン全般が大好きです",
		"犬の訓練・ネットショッピング",
		"パソコンに出会って、はや20年が経ちます。その間に日々進化するパソコンの機能に毎日驚かされており、また新しい機能を使うことが楽しくて仕方がありません。ネットショッピング・ブログ・動画などなど、今ではパソコンがない生活は考えられなくなりました。今後もパソコンの世界はどんどんと広がっていくと思います。<br />是非私たちと一緒にパソコンライフを楽しんでみませんか？<br />新しい生活・新しい出会いがきっと待っていますよ。<br />どうぞ、パソコン市民講座のドアを開けてみてください。お待ちしております♪"
	),
	array(
		"川鍋 先生",
		"インターネット",
		"英語・料理",
		"色々な受講生さんとお話ができるのを毎日楽しみにしています。<br />「先生、出来るようになりました！ありがとうございます。」と言ってもらえるのがとても嬉しいです。"
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