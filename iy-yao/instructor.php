<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"大江 先生",
		"エクセル・ホームページ",
		"絵画鑑賞・テニス観戦・散歩",
		"こんにちは！八尾教室にご訪問ありがとうございます！<br />私は長い間、パソコンインストラクターをさせていただいています。<br />受講生さんの笑顔が見たいという想いでここまで続けて来ました。<br />ITを知っていただくと、世界が広がり、必ず生活が充実します。<br />そのお手伝いをさせ頂きたいと思っています！<br />少しでも興味のある方は、ぜひ教室までお問い合わせください。<br />一緒に世界を広げていきましょう！"
	),
	array(
		"村田 先生",
		"ワード・iPad/iPhone",
		"音楽鑑賞・ヨガ",
		"今ではパソコンやスマートフォンは一家に一台、一人に一台といってもいいくらいに、生活、仕事に欠かせないものになってきていますね。これからパソコンを始める方、ぜひタイピング（文字入力）を習得するのがまずはおすすめですよ。すでに活用されている方はさらにスキルアップのために資格を目指されてはいかがでしょうか！<br />パソコンとタブレット両方の楽しみ方、活用の仕方を皆様にぜひお伝えして、世界を広げていただくお手伝いができればと思っています！"
	),
	array(
		"松岡 先生",
		"インターネット・水彩画",
		"読書・旅行・スポーツ観戦",
		"パソコンはとても奥深くいろんな発見がたくさんあります。そう気がついたのは資格を取得しよう！と本格的にパソコン教室に通い勉強を始めた時でした。キチンとしたスキルを身につけることは作成を時間短縮するだけでなく目からウロコの便利な機能の発見の連続でした。ますますパソコンを好きにさせてくれるきっかけになりました。今から始められる方、今それなりに使ってらっしゃる方もパソコンライフを便利で楽しくできるお手伝いができれば嬉しく思います。"
	),
	array(
		"力石 先生",
		"Ecxel・タイピング",
		"手芸、ぼ～っとすること",
		"学生の頃、授業の為に仕方なくパソコンを使い始めました。最初はタイピングも指一本で、キーの場所も分からず大苦戦。ExcelやWordなんてもっての外！<br />でも、勉強するにつれて出来る事が増え、パソコンが使いたくなり、どんどん楽しくなり、日常のあらゆる場面で使用するようになりました。<br />パソコンが使えると、多方面に世界が広がり、日々に沢山の彩りを与えてくれます。パソコン上達の一番の近道は楽しむ事です！！<br />一緒に楽しく面白いパソコンの世界、極めてみませんか？"
	),
	array(
		"野崎 先生",
		"ワード・エクセル",
		"韓流ドラマ鑑賞",
		"もう20年弱前に派遣で仕事をしていました。１つの会社に１年居たのですが、その１年の間に世の中は進んでいて、次のお仕事紹介してもらう時には、パソコンが出来ないとないと言われ、しかたなく勉強することになりましたが、おかげさまで今は、インストラクターをさせていただいております(*^_^*)<br />分からない事は、聞いてください。しかし以前に習っている所だと少しヒントを差し上げ思い出していただけたらと思っています。もちろんもう一度お教えすることも、きちんと致しますので、どんどん私に聞いてください。よろしくお願い致します。"
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