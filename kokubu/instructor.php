<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"山原 先生",
		"Word・Excel・インターネット",
		"ショッピング・写真撮影♪",
		"パソコンは、まるで「宝箱」です。インターネットを使っていろいろな新しい発見があったり、ワードやエクセルで楽しい作品を作ることもできます。ドキドキとワクワクがいっぱい詰まっている、今では生活にかかせないすばらしい電化製品の一つになりましたね。また、お仕事のシーンでも必須の時代になりました。<br />就職や転職やスキルアップで資格を目指す方は、ぜひ当教室にお越しください。目標に向かって、一緒に頑張りましょう！"
	),
	array(
		"植野 先生",
		"Word・PowerPoint",
		"お料理・食べること",
		"いまやお仕事でパソコンを使えるのは当たり前とされる時代になっています。基礎を知って初めて応用ができる。基礎しっかりと学んでお仕事や趣味でもパソコンを使いこなせる人になりませんか？職場の同僚やお友達から頼れる存在になれるはずです。１歩を踏み出さなければ何も起こりません。だからといって不安なことはいっぱい。<br />でも大丈夫です。私たちインストラクターが全力でサポートさせて頂きます。パソコンを使いこなせて仕事をかんたんに仕上げる自分になってみませんか？"
	),
	array(
		"澤 先生",
		"iPad・インターネット",
		"読書・コーヒー",
		"趣味は読書ですが、iPadでの読書を楽しんでいます。インターネットを使って情報収集やネットショッピングなど生活に密着した使い方もご案内させていただきます。また、お仕事でも生活でもパソコンやスマートフォンと連動することが多くなってきました。基礎を学んで、効率的に使いこなしていきましょう。"
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