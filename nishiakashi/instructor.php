<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"山際 先生",
		"iPad・インターネット",
		"映画・舞台鑑賞、駅伝観戦、旅行",
		"今の時代、ネットにあふれる情報を自分の目で取捨選択し、賢く活用することは必須となってきました。初めてパソコンやiPadに触れる方は不安を感じられるかもしれませんが、少しでも和らげられるようご指導いたします。<br />私がパソコン初心者だった頃に、見捨てることなく根気強く教えてくれた師匠の姿を思い出しながら、「丁寧に対応する!!」というのがポリシーです。<br />プライベートではパソコンやiPadを使って、舞台のチケットを取ったり、旅の宿や交通機関の予約をしたりなど、主に “楽しいこと” に活用しています。"
	),
	array(
		"神田 先生",
		"ワード・iPad",
		"ネットショッピング、お出かけ♪、ピアノ",
		"タブレットに質問したら答えが返ってきたり、自分の行きたい場所へ道案内しくれたり、”こんな事もできるの！？”と昔アメリカ映画で見た夢のようなハイテクなワンシーンが現実になっていることに驚き、またそれを当たり前に使っている自分に驚きます。”私には無理”と躊躇されている皆さんに少しでもパソコンやタブレットの便利さと楽しさを知って頂いて、もっと身近なものにして頂けるようサポートさせて頂きます!!"
	),
	array(
		"髙松 先生",
		"インターネット",
		"スティールドラム、サルサ、洋裁",
		"私の日常生活はパソコンにとても助けられています。テレビを見ていてふと疑問に思ったことを検索機能を使って即座に調べたり、ちょっとした空き時間に大好きな猫の動画を見たりしています。パソコンは学べば学ぶほどその先にまた新しい世界が広がっていきます。そんな宝探しのような体験を皆さんと一緒に楽しく共有したいと思っています。インストラクターとしてしっかり成長していきたいと思い日々努力していきますのでどうぞ宜しくお願い致します。"
	),
	array(
		"井藤 先生",
		"ワード・インターネット全般",
		"音楽を聴く・歌う、プチ旅行",
		"これまではインターネット＝パソコンというイメージでしたが、今ではタブレットにスマートフォンにと外出先でも気軽にインターネットを楽しめる世の中になりました。私自身もネットショッピングを楽しんだり、iPadを片手に旅行に出かけたりと日常の中でなくてはならない存在となっています。皆さんはどのように楽しんでいらっしゃいますか？皆さんのパソコンライフをより楽しくするためのお手伝いをさせていただければと思っています。私たちと一緒に楽しく学びましょう。"
	)
);
?>
					<h1><?=$room[$id][name]?>教室インストラクターのご紹介</h1>
					<p><img src="/images/inst_05.png" width="632" height="93" alt="「できない」悩みが「楽しくできる！」喜びの笑顔に変わる。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！" /></p>
					<p class="mB30"><img src="/<?=$room[$id][dir]?>/images/inst_06.jpg" alt="インストラクターの写真" /></p>
					<h2 class="mB20">インストラクターからのメッセージ</h2>
					

					<div class="i-pr clearfix mB50"> 
						<div class="section-lv2 moz2 clearfix"> 
							<p style="border:1px solid #cccccc; padding:20px;" class="mB30">
                            みなさんこんにちは！コープ西明石教室のホームページをご覧いただきありがとうございます。<br />パソコンを始めるきっかけは「仕事で必要になった」「趣味で楽しみたい」などさまざま。<br />教室で習おうと思う理由も、全く初めてだから教室でという方もいらっしゃれば、なんとなく使ってはいるけれど、思うようにならないモヤモヤを解決するためのスキルアップを考えていらっしゃる方など、これもまたさまざま。<br />コープ西明石教室では、そんなお一人お一人の目標をお聞きし、達成に向けて全力でサポートして参ります。きっと、この教室で学んでよかったと思っていただけることと確信しております。私たちインストラクターが責任を持って皆さんを指導していきますので、まずは第一歩を踏み出してみませんか？<br />パソコンやiPadを使って、生活をより便利に、より豊かにするためにも、是非パソコン市民講座まで、お気軽に足をお運びください。<br />インストラクター一同、皆様からのお電話、ご来校を心よりお待ち申し上げております。
							</p> 
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