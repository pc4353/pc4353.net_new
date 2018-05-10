<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"町田 先生",
		"ワード・エクセル",
		"読書",
		"パソコン操作の習得には、繰り返しの練習が必要です。分からない事は何でも何度でもご相談くださいね。<br />パソコンを楽しく自信を持って使えるようになるまで全力でサポートさせてください。<br />みなさんの「できた!!」を楽しみにしています。"
	),
	array(
		"白澤 先生",
		"エクセル・グラフィック",
		"音楽鑑賞・ドラム",
		"『やってみようかな？』と、思えた時こそがチャンスです！<br />皆さんに素晴らしいチャンスがやってくるように精一杯手助けをしていきたいと思います。不安を自信に変えていくことが、私たちの使命です。どんどんチャレンジして、パソコンをあなたの相棒にしてください！世界がグーンと広がりますよ！"
	)
);
?>
					<h1><?=$room[$id][name]?>教室インストラクターのご紹介</h1>
					<p><img src="/images/inst_05.png" width="632" height="93" alt="「できない」悩みが「楽しくできる！」喜びの笑顔に変わる。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！" /></p>
					<p class="mB30"><img src="/<?=$room[$id][dir]?>/images/inst_06.jpg" alt="インストラクターの写真" /></p>
					<h2 class="mB20">インストラクターからのメッセージ</h2>
					

					<div class="i-pr clearfix mB50"> 
						<div class="section-lv2 moz2 clearfix"> 
							<p style="border:1px solid #cccccc; padding:20px;" class="mB30">『パソコン市民講座ってどんなところ？』『どんな先生が教えてくれるの？』『講座の内容は？』などなど・・・たくさんの疑問にお答えします。ご興味のある方は、是非一度、西友福生教室にいらっしゃいませんか。<br /><br />豊富なカリキュラムの中からみなさんのご経験や目的に合わせ、最適なコースを一緒に選んでいきますので、安心して何でもご相談ください！<br /><br />お一人お一人の『頑張る気持ち』を私たちインストラクターがしっかりとサポートしていきますので、まずはじっくりとお話を聞かせてください。<br /><br />インストラクター一同、心よりお待ちいたしております。</p> 

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