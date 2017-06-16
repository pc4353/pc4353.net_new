<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"片尾 先生",
		"ワード・エクセル",
		"音楽･映画鑑賞・スポーツ観戦",
		"インストラクターになり10年以上経ちますが、その頃には考えられないほど、現在パソコンは普及しています。<br />これから、ますますパソコンは生活に必要不可欠なものになっていくでしょう。<br/ >受講生の皆さんにパソコンの楽しさ面白さをお伝えできればと思っています。<br />どんどん新しい世界へ!!!!…そんなお手伝いができたらいいなと毎日頑張ってます。<br />なんでもご相談くださいね(*^_^*)"
	),
	array(
		"恩田 先生",
		"画像・インターネット",
		"音楽・ネットサーフィン",
		"今ではパソコンは日常生活において欠かせないものとなっています。インターネットで買い物をしたり、年賀状を作ったり、写真を加工したり…今までできなかったことができると「自分にもできた！」と喜びにつながります。<br />パソコンを「学ぶ」だけでなく、「楽しむ」気持ちをもって通ってもらえるように…分からないことや不安なことがあったら気軽に声をかけてください。<br />いつでも教室でお待ちしています♪"
	),
	array(
		"藤井 先生",
		"ワード・エクセル・パワーポイント",
		"友人とおいしいものを食べる",
		"私がパソコンに初めて触れた頃は、こんなにも色々なことができるようになるとは夢にも思っていませんでした。でも、今では指で画面をタッチして操作できるようにもなっています。<br />「パソコンなんて…」と思っているうちに、どんどん進化していきます。<br />私達と一緒にパソコンライフを体感してみませんか？きっと新しい世界が広がりますよ(^^)v"
	),
	array(
		"澤本 先生",
		"インターネット・ワード・画像編集",
		"映画鑑賞・旅行",
		"今はパソコンなしで世界・社会が稼働しなくなる時代に突入しています。<br />そんな時代に対応できる市民講座の受講生さんはすごい！！といつも感心しています。<br />皆さんの一生懸命な姿を拝見していると勇気づけられます。"
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