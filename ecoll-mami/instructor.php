<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"原田 先生",
		"資格対策",
		"美術品鑑賞・カメラ",
		"パソコンが日常生活で不可欠なものになりました。旅行の検索、予約、もちろんお仕事にも必要です。<br />最近では資格対策にも教室では力を入れています。学生さんはパソコン検定もお勧めですし、就職やお仕事に生かすなら実用的なサーティファイやMOSなど、当教室でも対策講座を行っています。<br />勉強したことを形にしていくチャンスです。是非力をつけて、パソコンを味方にしてほしいと思います。"
	),
	array(
		"東 先生",
		"ワード・エクセル",
		"ハンドクラフト",
		"パソコンってよく分からないし、触るのが怖い…と思っている頃がありました。<br />そんな私がパソコン教室で学び、関わっていく中で苦手意識は消え、やれば出来る！わかれば楽しい！何より自分の世界が広がる！という喜びを味わいました。<br />皆さんもこんな喜びを味わっていただきたいです。私たちがそのサポートをさせていただきます☆"
	),
	array(
		"土山 先生",
		"インターネット",
		"映画鑑賞",
		"私が初めてパソコンを触ったのが小学校高学年の時で、今と比べるとパソコンはとても大きな箱のようなものでした。<br />年々パソコンも綺麗になり、操作方法が変わっていき、新しいスキルが求められる今日。趣味でパソコンを触りたい方、資格を取りたい方、仕事で必要に迫られた方、XPを使われていて今のパソコンを知りたい方！その他諸々★一緒に楽しく勉強していきませんか♪"
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