<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"新 先生",
		"",
		"SNS・タイピング",
		"和太鼓",
		"前職で、チラシを作ったり、在宅ライターとしてPCを利用していました。<br />自己流でやってきたのですが、この教室でインストラクターの仕事に就くことになり、基礎からしっかりと学び直すことの大切さをひしひしと感じました。<br />いまや、スマホやPCがなければとても不便な世の中になりました。逆に言えば、使いこなせれば年齢も住む場所も関係なく、世界中とつながることができ、仕事を創り出すこともできます。人生100年と言われるこれからの私たち。ぜひ、パソコンを使って、豊かな人生を送りましょう！"
	),
	array(
		"廣嶋 先生",
		"MOS・サーティファイ",
		"iPhone・SNS",
		"旅行・ご当地巡り",
		"今、生活にも社会的にもIT機器が普及していますね！<br />就職活動では、パソコンが使える！が、必須条件にもあるように、今ではパソコンやタブレットが使えるのが当たり前という世界です。<br />ただ使うだけではなく、どの程度できるか、資格として持っていることがとても重要ですね。資格を取ったら終わり、ではなく、はじまり。取得までに勉強して苦労して得たものを使い、関わっていく事が大事と日々感じています！<br />私たちと一緒にパソコン・タブレットなどIT機器を活用していきましょう！"
	),
	array(
		"源田 先生",
		"MOS・サーティファイ",
		"ワード",
		"スポーツ・音楽",
		"パソコンを使い始めたきっかけは、仕事です。会社では、手作業でやってた計算が瞬時になされ、かなり効率があがりました。しかし、家では、ただの箱。これではもったいないと思い、パソコンで映画を見る、音楽を聞く、ネットショッピングをする、自作CDを作る・・・趣味がどんどん広がりました。<br />この楽しさをぜひ、お伝えしたく、また、日々進化するネットワークサービス、うまくSNSを利用して快適で楽しい生活を送れるよう、お手伝いしていければと思っています。"
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
									<dt class="box-a">保有資格</dt>
									<dd class="box-b"><?=$value[01]?></dd>
								</dl>
								<dl class="clearfix mB10">
									<dt class="box-a">好きな分野</dt>
									<dd class="box-b"><?=$value[02]?></dd>
								</dl>
								<dl class="clearfix mB20">
									<dt class="box-a">趣味</dt>
									<dd class="box-b"><?=$value[03]?></dd>
								</dl>
								<p><?=$value[04]?></p>
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