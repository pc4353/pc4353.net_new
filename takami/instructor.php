<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"齋藤 先生",
		"ワード",
		"ライブ遠征、お酒のおつまみ作り",
		"初めて教室にいらっしゃった方から「これまでパソコンとは無縁だったし、どちらかと言えば苦手だからずっと避けてきていた」や、「我流で触ってきたけど、いまひとつ理解できていないから効率が悪く何か作成するにもすごく時間がかかる！」といったお話しをよく伺います。そのようなお悩みやお困りごとを解消し、ご自宅やお仕事先で一人で作成ができるようになっていただけるよう、私たちインストラクターがしっかりとサポートいたします！<br />教室で私たちと楽しく一緒に学びましょう！きっとパソコンが好きになりますよ！",
	),
	array(
		"竹綱 先生",
		"エクセル",
		"DIY、映画鑑賞",
		"教室では幅広い年代の方が通われておられますが、目標はみなさん様々です。<br />小学生はパソコンで正確に入力できるようにタイピングの勉強や、お仕事をされている方はスキルアップの資格取得コース（MOS・サーティファイ）など、シニアで初めてパソコンを買った方は、まずは基礎から勉強し、インターネット検索や写真でアルバム作成など、iPadやiPhoneの勉強もできます。<br />たくさんの講座の中からインストラクターが最適なコースをご提案させていただきますのでお気軽に無料体験にお越しください。",
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