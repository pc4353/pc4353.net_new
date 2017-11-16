<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"新保 先生",
		"タイピング・iPad",
		"絵を描く事",
		"こんにちは！パソコンの事を覚えたいけど、私にもできるかしら。タブレットに興味があるけれど、よくわからない。と、不安なお気持ちを抱えた方や、中々踏み出せないという方の声をよくお聞きします。<br />私も初めはパソコンを操作する時に、恐怖感がありました。<br />何か違う操作をして壊れたらどうしようとドキドキしていましたが、パソコンに触れていく内にそんな気持ちが嘘のようになくなっていきました。パソコンはとても便利な魔法の箱です。使いこなせたら、きっと日常生活において役立つものになります！パソコン教室でこんな事をしてみたいなという目標やその第一歩を、サポートさせていただけたらと思っています☆"
	),
	array(
		"橋本 先生",
		"インターネット",
		"愛猫をかわいがること、旅行",
		"こんにちは(*^_^*)<br />パソコンやタブレット端末などの情報技術（IT）はとても便利で今や生活にかかせないものになっていますよね。仕事や就職活動などにも必須のスキルになっています。<br />PCは魔法の箱です。ITを使いこなして生活を便利にしてみませんか？<br />思い立ったが吉日です！迷っていたらぜひ一緒にIT生活始めてみませんか？お待ちしてます♪"
	)
);
?>
					<h1 class=""><img src="/images/inst_03.png" width="632" height="45" alt="インストラクターのご紹介" /></h1>
					<p><img src="/images/inst_05.png" width="632" height="93" alt="「できない」悩みが「楽しくできる！」喜びの笑顔に変わる。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！" /></p>
					<p class=" mB30"><img src="/isehara/images/inst_06.jpg" width="628" height="241" alt="インストラクターの写真" /></p>
					<h2 class="mB20">インストラクターからのメッセージ</h2>
					
					<div class="i-pr clearfix mB50">
						<div class="section-lv2 moz2 clearfix">
							<p style="border:1px solid #cccccc; padding:20px;" class="mB30">
							皆さん、こんにちは。<br />
							私たちは、皆さんのできたら良いなという思いを、出来る力に確実に導き、満足をしていただける教室作りのために、日々精進しております。<br />
							皆様に、この教室で学んで良かったと思っていただけるよう、私たちインストラクターが責任を持って、皆さんを指導していきますので、どうぞ安心して最初の一歩を踏み出してみて下さい。<br />
							パソコンを使って生活をより便利に、そしてより豊かにするためにも、ぜひパソコン市民講座まで、お気軽に足をお運びください。<br />
							インストラクタ一同、皆さまからのお電話＆ご来校を、心よりお待ち申し上げております。<br />
							皆さんにお会いできること、とても楽しみにしております(^O^)
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