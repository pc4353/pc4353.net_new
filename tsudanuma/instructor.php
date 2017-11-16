<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"菅野 先生",
		"iPad・インターネット・写真加工",
		"ショッピング・スイーツ食べ歩き",
		"津田沼教室は、初心者はもちろん、趣味でお使いの方から資格取得される方までたくさんの方が受講されています。<br />パソコン、iPad、iPhoneの便利さ、楽しさを皆さんにお伝えしたいと思っています。上達のコツは、パソコンやタブレットと仲良くなること♡<br />そのお手伝いをさせていただきます。"
	),
	array(
		"土川 先生",
		"ワード・インターネット",
		"バレーボール",
		"私も10年前は受講生でした。<br />今では、パソコン、iPad、iPhoneの楽しさの虜です。<br />認定インストラクターの資格も取得し、皆さんの『できる！』を全力でサポートしていきたいと思います。"
	),
	array(
		"福山 先生",
		"エクセル・iPhone",
		"ゴルフ・猫の写真撮影",
		"初心者の方、ステップアップしたい方、皆さんのご希望に応えられる津田沼教室にぜひいらしてください。<br />私たちと一緒に楽しくパソコンを学びましょう。"
	),
	array(
		"村山 先生",
		"パワーポイント",
		"美術館や庭園巡り",
		"初めての方から資格取得希望の方まで、安心して受講できるように支えさせて頂きます。<br />教室では、楽しいイベントもたくさんあります！<br />是非、一度、教室に足を運んでみて下さい。お待ちしております♪"
	)
);
?>
					<h1 class=""><img src="/images/inst_03.png" width="632" height="45" alt="インストラクターのご紹介" /></h1>
					<p><img src="/images/inst_05.png" width="632" height="93" alt="「できない」悩みが「楽しくできる！」喜びの笑顔に変わる。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！" /></p>
					<p class=" mB30"><img src="/<?=$room[$id][dir]?>/images/inst_06.jpg" alt="インストラクターの写真" /></p>
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