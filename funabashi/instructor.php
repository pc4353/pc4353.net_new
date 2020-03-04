<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"吉田 先生",
		"Excel・タイピング",
		"ヨガ",
		"昔事務職をしている時にエクセルを開いて、電卓で計算をして入力していました。<br />それ位パソコンが苦手だった私です（笑）<br />計算が苦手な方ほど、エクセルを覚えて欲しいです。<br />分かりづらい所はしっかりサポートします！<br />是非エクセル得意と言えるように一緒に頑張りましょう。"
	),
	array(
		"河俣 先生",
		"タイピング・ワード",
		"旅行",
		"私も、仕事をしながらPC教室に通い様々な資格を取得しました。<br />お仕事や家庭の事をしながらの資格取得はとても大変ですが、新しいことを学ぶ事、今まで出来なかった事が出来るようになることはとても楽しい事です。<br />一人で頑張る必要はありません。私達インストラクターがサポートします。一緒に頑張りましょう！"
	),
	array(
		"服部 先生",
		"ワード・iPad",
		"パソコンやiPadを使ったもの作り",
		"物心ついたころからパソコンに触れていた為、「パソコンは面白いもの！」と思っています。<br />「変なことして壊しちゃったらどうしよう…」「パソコンはなんとなく怖い…」とパソコンに苦手意識をお持ちの方が安心してパソコンを操作できるようにお手伝いさせていただきます！<br />目標に応じたカウンセリングからあなたにとっての「パソコンの面白さ」を見つけていきたいと思っています。一緒に成長していきましょう！"
	),
	array(
		"富田 先生",
		"iPad・iPhone",
		"食べ歩き",
		"Win95から仕事ではなくほとんど遊び感覚でPC操作を楽しんでいます。<br />新しい機種が出るとすぐ購入してしまうタイプ。。<br />iPadやiPhone、Android端末の不安もお任せください！<br />喘息もちなのでマスクをよくしています。"
	)
);
?>
					<h1><?=$room[$id][name]?>教室インストラクターのご紹介</h1>
					<p><img src="/images/inst_05.png" width="632" height="93" alt="「できない」悩みが「楽しくできる！」喜びの笑顔に変わる。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！" /></p>
					<p class="mB30"><img src="/<?=$room[$id][dir]?>/images/inst_06.jpg" alt="インストラクターの写真" /></p>
					<h2 class="mB20">インストラクターからのメッセージ</h2>
					<div class="i-pr clearfix mB50"> 
						<div class="section-lv2 moz2 clearfix"> 
							<p style="border:1px solid #cccccc; padding:20px;" class="mB30">皆さん、こんにちは！！今、パソコンは生活に欠かせない存在となっています。そんなパソコンに触ったことがない、触ってみたいけれど勇気が出ない・・・。という方でも安心して学べる環境です。私たちインストラクターが、みなさんのきっかけ作りをサポートします。ぜひ一度、教室へお越し下さい。お待ちしております(^-^)</p>
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