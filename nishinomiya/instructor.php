<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"的場 先生",
		"インターネット",
		"お菓子作り・ネットショッピング",
		"皆さんは、普段パソコンをどの様にしてお使いですか？<br />パソコンは使えば使う程『便利だな～』と実感出来る優れものです！！<br />皆さんがパソコンをお使いになられる時に『便利だな！』『楽しいな！！』と実感して頂ける様にお手伝いさせて頂きます。<br />一緒に楽しくパソコンの勉強をしていきましょう♪"
	),
	array(
		"中濱 先生",
		"画像編集・インターネット",
		"バイオリン・雑貨屋めぐり・自転車",
		"仕事であったり、趣味であったり、パソコンの活用方法は人それぞれだと思います。<br />もはや、パソコンはどんな場面においても必需品です。そして、多くの方が「パソコンを便利に活用したい！」と思っていらっしゃるはず！<br />大事な資料作成から、写真の編集、今晩のおかずの献立まで、パソコンの活用法を基礎から知ることで、仕事が、趣味が、家事がもっともっと充実したものになるはずです！<br />これから始める方はもちろん、すでに始めている方も、一緒に楽しくパソコンのことを学びましょう！<br />きっと、パソコンが好きになりますよ♪"
	),
	array(
		"浮田 先生",
		"ワード・ネット通販",
		"囲碁・将棋・料理・映画鑑賞",
		"もともとパソコンが苦手でした。<br />外に出たり、歩いたりすることが好きではない私…。でも買い物が好き。便利に買う事は出来ないものだろうか…。そこで、ネット通販に出会いました。それからは、パソコンが手放せなくなりました。パソコンは使い方次第でいろんなことが出来ます。こんな楽しいもの、使わないなんて損です。<br />一緒にパソコンで楽しみましょう(*^_^*)"
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