<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"播本 先生",
		"ワード",
		"クラシックバレエ",
		"パソコンが使えると、こんなに世界が変わるんだ！と思える瞬間が必ずあります！<br />最初は不安も多いと思いますが、どんどん楽しくなっていきますよ。<br />少しでも「やってみようかな…」と思ったその気持ちを大きな一歩にしてみませんか？<br />ぜひ一緒に頑張っていきましょう！<br />いつでも私たちがお待ちしております。"
	),
	array(
		"中山 先生",
		"ワード、エクセル、ネットショッピング",
		"ピラティス、ボクササイズ",
		"パソコンは、“魔法の玉手箱”です。<br />文字を打つ、ポスター、はがきを作る、数字の管理、グラフの作成、メールのやり取りなどは当たり前。映画をDVDで見たり、音楽をCDで聴いたり、パソコンに保存した映画や音楽をDVDやCDに書き込みができます。インターネットで世界中の人とSkypeというアプリで無料電話ができます。撮った写真を自分の思い通りに加工し、思い通りの写真が作れ、その写真を無料で公開し、その写真を見た人と交流を生むこともできます。自宅居ながら、ショッピングだってできます。<br />まさに、自分のやりたいことが必要なアプリを追加することで、自分のオリジナルのパソコンになり、“世界に一つしかない自分だけのパソコン”＝“魔法の玉手箱”にすることができます。皆様の“世界に一つしかない自分だけのパソコン”を使いこなすため、ぜひぜひ一緒に頑張りましょう(^_-)-☆"
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