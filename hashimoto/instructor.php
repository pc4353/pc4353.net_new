<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"神戸久美子",
		"インターネット活用",
		"２匹の犬とゴロゴロする事",
		"私がパソコンを使えるようになったのは、９年前２台のノートパソコンが同時に不調になったことから始まりました。色々とパソコンをいじって、やっとインターネットを使えるようになった矢先の出来事。夫もパソコンは良く分からないし、自分で何とかするしかありませんでした。その時は泣きそうな程苦労しましたが、お蔭でパソコンを使いこなせるようになり、パソコン市民講座で受講生さんたちの勉強のお手伝いができるまでになりました。受講生さんたちと接する時は、自分も苦労した時の事を常に忘れずに！を心がけています。<br />橋本サティ教室は楽しい教室です。パソコンを習ってみたいなと思っている方、是非立ち寄ってみてくださいね♪"
	),
	array(
		"中里　照美",
		"エクセル",
		"散歩／スポーツ観戦",
		"実は私、そんなにパソコンがだーい好きって訳ではありません。（こんなこと言ったら怒られちゃうかもしれませんが・・・）<br />では何故この仕事をしているかというと、人が大好きだからです！たくさんの自分とは年代も住んでるセカイも違う受講生のみなさんと出会えるのが楽しいのです♪　私は毎日パソコンについてアドバイスさせていただいておりますが、同時にみなさんからは生き方を教えていただいています。　年齢を重ねれば重ねるほど新しいことを勉強するのは大変。。。それでも頑張っている姿はホントにかっこいいです。みなさんの「できるようになりたい」を全力で応援させていただきますっ！！"
	),
	array(
		"竹内　紀美子",
		"インターネットショッピング、ブログ、エクセル",
		"ペット（犬）、カフェ巡り、ショッピング（通販、ネット）",
		"2010年9月よりパソコン市民講座橋本サティ店教室でインストラクターをさせていただいております。<br />私自身はパソコンは独学で学んできました。ワードやエクセルでどんなことが出来るのか、どんな機能があるのか、広く知らなかったために、その都度参考書で調べたりなど大変苦労しました。<br />私も早くこういう講座を知っていれば仕事に直ぐに生かせ、楽しく学べたな・・・と痛感します。パソコン環境も日々進化しています。私自身も学ぶ気持ちを忘れず、受講生の皆様に楽しく、そしてパソコンに自身を持っていただけるよう受講のサポートをしていきたいと思います。"
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