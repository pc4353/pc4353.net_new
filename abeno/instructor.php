<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"山原 先生",
		"ワード・エクセル・インターネット",
		"ショッピング・おいしいものを食べること♪",
		"パソコンは、まるで「宝箱」です。インターネットを使っていろいろな新しい発見があったり、ワードやエクセルで楽しい作品を作ることもできます。ドキドキとワクワクがいっぱい詰まっている、今では生活にかかせないすばらしい電化製品の一つになりましたね。<br />たとえば旅行に行く時…料理を作る時…写真を使って…音楽を楽しんで…♥<br />いろいろなシーンでパソコンは大活躍しています。<br />教室にいらっしゃるみなさんにも私が日々感じているパソコンの便利さや楽しさをお伝えするお手伝いをさせていただければと思っています。"
	),
	array(
		"甲斐 先生",
		"インターネット・エクセル",
		"腕時計・野球観戦・ゲーム",
		"パソコンは今となっては「生活必需品」です。<br />冷蔵庫、洗濯機やテレビなどと同じように、一家に一台無くてはならないレベルで人々の生活に結びついております。<br />そのように必需品とも言われているパソコンですが、これから使いたい！学びたい！という事でしたらせっかくなので楽しく学べたら良いと思いませんか？<br />当教室では簡単、且つ楽しいパソコンの魅力を皆さんにお伝えしていけたらなと思いますので、是非とも一緒に明るいパソコンライフに飛び込んでみましょう！"
	),
	array(
		"中牟田 先生",
		"ワード・エクセル",
		"カラオケ・映画鑑賞・読書",
		"はじめてコンピューターに触れた頃は、「決まったことしかできない大きな箱」でした。それからたった数十年で、箱の中に必要な「ソフト」を入れるだけで「出来ることが無限大に膨らむ箱」に変貌しました。コンピューターは私たちの生活に密着しすでに大きく関わっています。コンピューターでどんなことができるのか、一緒に体験してみませんか？",
	),
	array(
		"鈴木 先生",
		"ワード・パワーポイント",
		"バレーボール・テニス",
		"パソコン市民講座の卒業生です♪まだ、カセットテープで市民講座の授業をしていた頃に、ワードとエクセルを学びました。かなり昔の話です(笑)<br />その時に基礎をしっかり学んだおかげで世界が広がり、仕事に遊びにパソコンを便利に活用できるようになりました。普段はiPhoneをフルに活用し、検索をしたり動画を見たり、友人とのコミュニケーションに使ったりと、どこに行く時も手放せません。<br />皆さんが「市民講座で学んで、しっかり身に付け、生活の中で便利に活用できる」ようになりますようサポートさせて頂きます。",
	),
	array(
		"山口 先生",
		"エクセル・インターネット",
		"動画鑑賞・カラオケ・お絵描き",
		"パソコンは小学生の頃、母が使っている姿に興味をもったことと「これから必要になる」という母の思いから教えてもらってからの長いお付き合いです。<br />自分の趣味を広げ、追及したり、勉強や仕事ではワードやエクセルで案内状や資料を作ったりと公私ともに欠かせない「相棒」です。<br />写真に、ブログに、動画に、買い物にと様々な可能性をもたらしてくれるITはより人生を豊かにしてくれます。パソコンを学ばれる皆様の人生の広がりをもたらすお手伝いができればと思っています。一緒に頑張りましょう♪",
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