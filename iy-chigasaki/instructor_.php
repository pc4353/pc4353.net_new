<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"折田 先生",
		"iPadの楽しさにハマり気味です！",
		"美味しいお店探し・笑える川柳（周りには不評）",
		"「できるかしら？」から、「できた！」に変わります。<br />このページをご覧の皆様、とにかく教室を覗いて下さい♪多くの受講生さんが仰るように誰しも不安や緊張は最初だけです。通われるうちにいつしか楽しい交流の場に・・。<br />あと、お向かいには人気のマッサージ屋さんがありますよ♪　勉強に疲れた後は是非！"
	),
	array(
		"久保 先生",
		"インターネット・ワード",
		"音楽を聴きながらのドライブ・読書",
		"パソコンは初めての方でも繰り返し操作することで必ず出来るようになります。出来るようになると楽しみが広がっていきます。皆さんの「出来ました」という笑顔が見られるようサポートさせていただきます。楽しく学んでいきましょう。"
	),
	array(
		"浜田 先生",
		"ワード",
		"読書・映画鑑賞",
		"誰でも最初は初心者です。できない、わからないは当たり前。<br />パソコンはテンポ良く継続して学べば、誰でもできるようになります。<br />人差し指でキーを捜しながら入力をしていた方が、両手でモニターを見ながら入力が出来るようになった姿にはいつも感動します。<br />皆さんが出来た喜びを感じ、パソコンを楽しんでいただけるようにお手伝いをさせていただきます。<br />まずは教室を見に来てください！！"
	),
	array(
		"江見 先生",
		"ワード",
		"絵画・旅行",
		"私自身機械音痴でしたので、パソコンなんて無理、と20年前は思っていました。<br />でも、使えるようになるととても楽しい機械だと知りました。<br />パソコンが使えると世界がぐんと広がりますよ。<br />よく分かった！できた！という生徒さんの声が励みになっています。一緒にがんばりましょう。"
	)
);
?>
					<h1><?=$room[$id][name]?>教室インストラクターのご紹介</h1>
					<p><img src="/images/inst_05.png" width="632" height="93" alt="「できない」悩みが「楽しくできる！」喜びの笑顔に変わる。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！" /></p>
					<p class="mB30"><img src="/<?=$room[$id][dir]?>/images/inst_pic.jpg" alt="インストラクターの写真" /></p>
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