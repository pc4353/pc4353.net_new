<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"菊地 先生",
		"ワード・エクセル",
		"旅行（特に京都）・カメラ",
		"毎日インターネットでニュースを見たり、ショッピングをしたり…分からないことがあれば、すぐにインターネットで調べます。今となってはパソコンは日常に欠かせないものになりました！<br />他にも、年賀状を作ったり、写真を加工したり、表を作ったり…<br />パソコンがあれば、趣味も仕事も、幅が広がります！<br />パソコンが初めての方も怖がらないでくださいね！私たちと一緒に楽しくパソコンを学びましょう！"
	),
	array(
		"村上 先生",
		"ワード・インターネット",
		"料理・旅行・DIY",
		"はじめまして、東京の葛西教室より来ました村上です。受講生の皆さんにパソコンを楽しんで教室に来るのが楽しみになっていただけるよう笑顔を大切にしています。<br />仕事をする上で資格やタイピングは欠かせないものとなってきました。<br />不安で踏み出せなかったり、自信が無かったり、様々な思いをお持ちだと思います。<br />そんな皆さんと一緒に目標を達成し、仕事や趣味に生かせるよう、お手伝いをさせていただきますので、不安な事ややりたい事、何でもご相談下さい。"
	),
	array(
		"松原 先生",
		"インターネット・エクセル",
		"旅行・海外ドラマ観賞",
		"全てが電子化されつつある現代では、友人との連絡や情報の取得、お店の予約まで日々の生活にパソコンやスマホ、インターネットが欠かせなくなってきています。また、仕事をする上でも必要になってくる事も多いですよね。パソコンを自在に活用出来たり、こんな事も出来るんだ！という新しい発見があったりとみなさんにもぜひ楽しんで頂きたいです。使えるようになった！仕事に役立った！と聞くと凄く嬉しいです。"
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