<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"藤井 先生",
		"ワード　アルバム作成",
		"フラダンス・ウォーキング",
		"パソコンの魅力に取り憑かれ、この仕事に就けたのはラッキーでした。好奇心旺盛でパソコンで楽しめることを知れば知るほど、なくてはならない必需品になりました。帰宅してまず一番に電源を入れるほどです。一番の感動は留学中だった息子と映像つき交信ができたことです。しかも、無料！大満足でした。ワードに写真やイラストを挿入して1枚のアルバム風にしてさしあげると、とても喜ばれます。パソコンには楽しみ方が色々あります。使いこなすほどに驚きと発見があると思います。是非ご自分なりの楽しみ方を見つけて下さい。そのサポートができれば幸せです♪"
	),
	array(
		"西面 先生",
		"ワード・水彩画",
		"読書・ペットのインコと遊ぶ",
		"私はここの教室で学び、卒業した後インストラクターになりました。<br />インストラクターになってもパソコンについて学ぶことはたくさんあり、パソコンが進化するように自分も進化しなければと思っています。パソコンを使って楽しめる事はたくさんあります。皆さんもパソコンを通して自分の世界をどんどん広めて行きましょう！<br />そのお手伝いができればと思っています。よろしくお願いいたします。"
	),
	array(
		"能島 先生",
		"タイピング・Java",
		"パン屋巡り・旅行",
		"人と話すことが大好きで機械は超苦手・・・そんな私が大学でパソコンに出会った時、正直かなり戸惑いました。しかし気が付けばパソコンのインストラクターに。人生は何が起こるかわかりません(笑)。今では大好きなパン屋や友達とのランチのお店も全てパソコンで検索し、旅行の下調べやスケジュール、宿の予約まで、全てパソコンで行っています。パソコンが苦手、パソコンなんて私の人生には関係ない、そう思っている方が、パソコンの魅力に気づき、パソコンを使って人生を楽しむ・・・そういう人が一人でも増えることが私の喜びです。<br />お子様からシニアの方まで。趣味として使う方から仕事に使う方まで。使いかたも様々で幅広いです。一緒に新しい人生の一歩を踏み出しましょう！"
	),
	array(
		"神農 先生",
		"インターネット・タイピング",
		"動画作成・編集",
		"天気を調べたり、ニュースを見たり、路線を調べたり、病院の予約をしたり・・・何でも出来ちゃうパソコン。年賀状やカレンダー、お年玉袋など世界でたった一つのオリジナルの作品だって作れちゃいます！<br />そんな何でもできちゃうパソコンは毎日新しい発見の連続！触れば触るほど新しいことを学んでいきます！<br />あなたも一緒に毎日新しい発見をしてみませんか？私もそのお手伝いができれば幸いです。"
	),
	array(
		"古賀 先生",
		"写真コラージュ・ワード",
		"小物づくり",
		"パソコンを使うと簡単に早くいろんなことができてしまいます。<br />インターネットでの情報収集やショッピングはもちろんのこと、わが家では息子の夏休みの自由研究にもパソコンが活躍します。実験方法はインターネットで調べ、結果はエクセルに入力してグラフを作成します。もちろん私が手伝いながらの作業ですが、息子は「エクセルってすごいな。」とつぶやいていました。ほんとにすごいですよね！<br />皆様がパソコンやタブレット、スマートフォンを使って便利で楽しい生活を送れるよう、一生懸命お手伝いさせていただきます。はじめは不安もあると思いますが、正しい使い方を知ってより充実した生活を送ってみませんか？"
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