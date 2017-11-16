<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"深田 先生",
		"ワード＆インターネット",
		"スキー・野球観戦・ライブに行く",
		"就職したときにはすでにパソコンが存在していました。二十数年の間に、すごい進化をとげたパソコンです。そして、日々の暮らしの中でかかせないものになってきました。インターネットで地図を調べたり、宿泊の手配をしたり、誕生日にお花を贈ったり。インターネットを活用することで、世界はどんどん広がっていきます♪<br />「パソコンってなんて便利！」「楽しい！」「できた！！」と皆さんに感じて頂けるようにサポートしていきたいと思っています。よろしくお願いいたします♪"
	),
	array(
		"太田 先生",
		"ワード・インターネット",
		"スポーツ観戦",
		"私の大好きな読書は、いつも心の自由を感じさせる、果てしない宇宙のようです。<br />インターネットの世界も、果てしない宇宙を想像します。<br />パソコンの前に腰掛けて、夕食の料理レシピを探すうちに、調味料メーカーの懸賞に応募して、勢いづいて北海道の漁協に魚介類を注文。キャットフードの宅配を捜せば、<br />可愛い猫の動画をみつけてコメントし、我が家の猫写真をアップするため写真撮影から始め出し・・・ついに夕食は宅配ピザをネット注文するしまつ・・・？！<br />みなさんはネットのブラックホールにはまらないように気をつけてくださいね・・・<br />何か分からないことがあれば、すぐにインターネットで検索。地図や時刻表を調べたり、ついでにショッピングも。パソコンやインターネットの世界は日々進化をしているのでいつまでたっても勉強中ですが、皆さんにももっともっとパソコンを使いこなせるようになってほしいと思っていますので、ぜひ楽しんで一緒に勉強していきましょう。"
	),
	array(
		"前田 先生",
		"デジカメ活用・インターネット",
		"英会話・ゴスペル・水泳",
		"ニュースを読むのも調べものをするのもパソコン。<br />SNSで世界中の友人とコミュニケーションをとったり、世界は広がります！ もうパソコンはなくてはならないツールになっていますね！！ <br />新しいもの好きなので、これからもいろいろな事にチャレンジしていきたいと思います。<br />まだまだ奥深いです。。。<br />パソコンを通してのいろいろな楽しみかたを、皆さんにもお伝えしたいと思っています。<br />いっしょに頑張りましょう！"
	),
	array(
		"林 先生",
		"ワード・エクセル",
		"音楽鑑賞・写真編集",
		"私がパソコンと出会ったのは２０年近く前のことです。<br />仕事で使い始めましたが、それまで時間をかけていたことがさらっと出来てしまうことに感動しました。それ以来、パソコンの魅力に取り付かれ、今では無くてはならない道具になっています。<br />この２０年の間にパソコンの世界はどんどん進化しています。特別な人が使う機械ではなくなっています。なんとなく出来ているという方も一から学んで道具として使いこなしましょう。皆さんが思っている以上に生活が広がります。是非、新しい世界を体験してください。"
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