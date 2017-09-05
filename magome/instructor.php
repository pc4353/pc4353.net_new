<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"高木 先生",
		"エクセル",
		"映画鑑賞・神社巡り",
		"PC歴25年の経験を生かして、あなたを全力でサポートします。<br />25年前の若者に今の現実を話したら、きっと何も信じないでしょう。<br />いつの時代でも、不可能が新しい現実を作っていきます。<br />「もう遅い」「自分には無理かも」と、思っている方こそチャンスです！<br />私たちと一緒に、新しい自分の現実を作っていきましょう。"
	),
	array(
		"國武 先生",
		"ワード",
		"かめグッズ集め",
		"20数年前にはじめてパソコンを使った時は「計算が一瞬でできた！」と、とても感動したのを覚えています。<br />みなさんにも是非この感動を味わっていただきたいと思います。<br />パソコンがあれば、趣味も仕事も新しい世界が広がっていきます！<br />私たちが全力でサポートいたします。一緒に新しい世界を広げていきましょう。"
	),
	array(
		"坂口 先生",
		"パワーポイント・クラフト",
		"ネットショッピング・合気道",
		"パソコンやタブレットは仕事ではもちろん、趣味としても、生活を便利で豊かにしてくれる素晴らしい道具です。私自身の生活においても、家族で始められる合気道のクラスを見つけられたのはインターネットのおかげですし、子どもの教育にはタブレットが大活躍。<br />趣味からビジネス実践力まで、自信をもって皆さんを全力でサポートしていきます！<br />まずは、お気軽に教室へお立ち寄りください。"
	)
);
?>
					<h1 class=""><img src="/images/inst_03.png" width="632" height="45" alt="インストラクターのご紹介" /></h1>
					<p><img src="/images/inst_05.png" width="632" height="93" alt="「できない」悩みが「楽しくできる！」喜びの笑顔に変わる。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！" /></p>
					<p class=" mB30"><img src="/<?=$room[$id][dir]?>/images/inst_06.jpg" alt="インストラクターの写真" /></p>
					<h2 class="mB20"><img src="/images/inst_08.png" width="632" height="45" alt="インストラクターからのメッセージ" /></h2>
					
					<div class="i-pr clearfix mB50"> 
						<div class="section-lv2 moz2 clearfix"> 
							<h3 class="blue">まず、一歩を踏み出してみましょう！</h3>
							<div class="section-lv3 clearfix mB30">
								<p>皆さん、こんにちは(^O^)／<br />私たち、インストラクターは<br />受講生の皆さんが楽しそうにパソコンに取り組んでいるのを見たり、<br />また資格を取得したり、自分の目標を達成して喜んでおられるのを見ると、<br />本当に私たちも自分のことのようにうれしくなります。<br />「パソコンは楽しいな～!!」と言ってくださる皆様の笑顔を楽しみに<br />私たちも頑張っております。<br />どんどん、お気軽にお声をかけてくださいね！<br />迷った時には、勇気をだして、まず一歩を踏み出してみましょう。<br />～～ここから、きっと新しい未来が始まりますよ！～～</p>
							</div><!-- /.section-lv3 -->
						</div><!-- /.section-lv2 --> 
					</div><!-- /.i-pr --> 

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