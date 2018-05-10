<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"文藏 先生",
		"EXCEL・ポスター作成",
		"笑点・ドライブ（ホームセンターめぐり）",
		"私は「パソコン市民講座」の卒業生です。<br />現在はインストラクターの仕事をしていますが、受講生だった経験とパソコンを使いこなせるようになり世界が広がった経験を持っています。だからこそ、受講されている皆さんの気持ちを誰よりも理解できる立場でいたいと思っています。このホームページをご覧になっている皆さん、ぜひ教室を見にいらしてください、そして私たちと一緒に楽しく充実した時間を過ごしましょう！"
	),
	array(
		"杵塚 先生",
		"プログラミング",
		"かぎ針編み、舞台観劇",
		"私がパソコンを使い始めてから約20年。今回縁あってこちらの教室でインストラクターをすることになりました。触ったことがない時には難しそうに感じるパソコンも、一つ一つ覚えていけば皆さん必ず使えるようになります。そして使えるようになればどんどん楽しくなってきます。<br />ひとつずつできることを増やしていきませんか？<br />私たちがサポートします。気軽に声をかけてくださいね。"
	),
	array(
		"三木 先生",
		"デジタルイラスト",
		"絵、アニメ、Sound Horizon",
		"私は趣味のイラストを中心に、好きな事を十分に楽しむためにパソコンを活用してきました。パソコンという道具を使うことで自分の考えた様々なものが形になっていくのはとても楽しく、どんどん新しい事を学んでいけました。そんな自分の経験から、「楽しい」という事が学習の一番の糧になると感じています。<br />皆さんにもやりたい事が形になる喜びを感じて頂けるように、楽しんで学んで頂けるように、色んな角度からサポートをして一緒に歩んでいきたいと思っています。"
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