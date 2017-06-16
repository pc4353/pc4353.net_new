<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"甲斐 先生",
		"MOS・サーティファイ",
		"インターネット・エクセル",
		"腕時計・野球観戦",
		"パソコンは今となっては「生活必需品」でございます。<br />冷蔵庫、洗濯機やテレビなどと同じように、一家に一台無くてはならないレベルで人々の生活に結びついております。<br />そのように必需品とも言われているパソコンですが、これから使いたい！学びたい！という事でしたらせっかくなので楽しく学べたら良いと思いませんか？<br />当教室では簡単、且つ楽しいパソコンの魅力を皆さんにお伝えしていけたらなと思いますので、是非とも一緒に明るいパソコンライフに飛び込んでみましょう！"
	),
	array(
		"山岡 先生",
		"MOS2013マスター・P検・サーティファイ",
		"エクセル・タイピング",
		"お菓子作り",
		"パソコンはとっても便利なものです！！<br />私もエクセルで資料を作るのですが、色んな機能を知っていると、時間の短縮にもなりますし作れる資料の幅がぐっと広がります。<br />今まで出来なかったことが出来るようになった時の達成感が心地よいです！<br />まずは目標として資格を目指してみませんか？就職活動にも役立ちますし、できるという自信にもつながります。みなさんの頑張りたい気持ちをしっかりサポート致します！"
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
		"",
		"ワード",
		"スポーツ・音楽",
		"パソコンを使い始めたきっかけは、仕事です。会社では、手作業でやってた計算が瞬時になされ、かなり効率があがりました。しかし、家では、ただの箱。これではもったいないと思い、パソコンで映画を見る、音楽を聞く、ネットショッピングをする、自作CDを作る・・・趣味がどんどん広がりました。<br />この楽しさをぜひ、お伝えしたく、また、日々進化するネットワークサービス、うまくSNSを利用して快適で楽しい生活を送れるよう、お手伝いしていければと思っています。"
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