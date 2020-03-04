<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"武内 先生",
		"エクセル・パワーポイント",
		"ネイルアート・編み物",
		"二十数年前、私が就職したのはちょうどWindowsが広まった頃でした。営業所で一人で実績表や会議資料を作成する毎日。私の苦手な計算をどんどんこなしてくれるエクセルが楽しくて、すぐに大好きになりました！その後、資格取得のために教室に通い、知らなかった機能を身につけられると、仕事の効率がアップし、周りの人にも認められるようになりました。<br />パソコンは日々進化しているので、今でも勉強の毎日ですが、それも楽しんでいます♪<br />教室では、みなさんが楽しみながらパソコンを活用していただけるようお手伝いいたします！"
	),
	array(
		"森浦 先生",
		"ワード・エクセル",
		"食べ歩き",
		"私は前職では我流でOfficeソフトを操作し、仕事をしていました。解らない事があったら先輩や詳しい人に聞いて、という日々を送り、気が付けば職場でも中堅になり誰にも聞けず、、、という状況になり、残業を繰り返し疲弊していました。「これではいけない！」「自分の時間を取り戻したい！」と思ったのが勉強を始めたきっかけです。<br />一から勉強する事でいかに少ないスキルと知識で操作をしていたか、またスキルとして身につけていた事があった事も確認も出来ました。勉強する事で自信が湧き、更には効率的に仕事を行う事が出来ます。<br />皆さんの目標達成の為、精一杯お手伝いさせていただきますので一緒に頑張りましょう！"
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