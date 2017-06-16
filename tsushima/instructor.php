<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"伊藤（久） 先生",
		"タブレット・ワード",
		"ネット検索",
		"パソコン・タブレット・スマートフォン、この内１つはどのご家庭でも普通にあるようになってきました。用途も様々でなかなか使いこなせなかったり楽しみ方がわからないといった事もあるのではないでしょうか？教室では、そんな悩みが解消されるヒントや知らない世界をのぞけるチャンスがたくさんあります。私達が精一杯お手伝い致しますので一緒に楽しましょう(^^♪"
	),
	array(
		"伊藤（愛） 先生",
		"ワード・タイピング",
		"ショッピング・ハーブティー",
		"就職活動を機に学び始めましたが、ワードやエクセル、学んでいくことで「パソコンすごい‼」と感激したのを覚えています！<br />今ではデジタル化が進み、パソコンだけじゃなくタブレットやスマートフォンを使って本当にいろいろな事が出来るようになりました。みなさんはどんなことがしてみたいですか？<br />私たちがサポートいたしますので一緒にがんばりましょう＼(^^)／"
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