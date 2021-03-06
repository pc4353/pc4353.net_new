<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header-fc.php");
$ary = array(
	array(
		"太田　一弘",
		"パソコン全般・映像作成",
		"フットサル",
		"多治見に来て、もう７年目となります。最近、説明を聞きに来られる新規の方に「ここの教室に来れば、パソコン関係なら全て任せられるって人に聞いて来たんだけど」「太田先生って人いる？」と言われる事が多くなりました。<br />とても嬉しいです。卒業された生徒さんが色々な方にお話ししてくださってるそうです♪<br />今やパソコンは一家に一台の時代から、一人一台の時代になりました。パソコンを学習する事で大事な事は、目標をしっかりもってとにかく楽しむ事です！<br />今日も生徒さんの喜んで頂けるお顔を拝見する為に、一生懸命頑張ります！"
	),
	array(
		"伊藤　奈緒美",
		"ワード・エクセル",
		"映画鑑賞",
		"イントラクターになって７年目になります。その間に多くの生徒さんと接する事ができ、毎日がとても楽しく教室に来てます。<br />生徒さんが「先生、こんなのができたよ」と自宅で復習された課題を見せて<br />下さったり、退会された後も教室に顔を出して下さったり、「また教えて」と<br />言われ復会されたり・・・いろいろな人との関わりが、とても嬉しく、また<br />少しでも皆さんのお役にたてる事が何よりも嬉しいです。<br />限りなく広いパソコンの世界を、楽しみながら皆さんと勉強していけたらと<br />思ってます。"
	),
	array(
		"小林　生美",
		"ワード",
		"音楽鑑賞・ドライブ",
		"２年前程前に　生徒として通っていた私を　インストラクターになられませんかと、オーナー（太田さん）にお声を掛けて頂きました。（感謝です）インストラクターとして1年程になります。まだまだ、毎日が一生懸命ですが　この教室のお仲間に助けて戴きながらご指導させて頂いています。以前　ピアノの教師をしていたことも有り　教える事の難しさはある程度判ってはいる積りでしたが<br />日々、勉強の毎日です。生徒さんが、楽しく、判りやすい受講をして頂ける様、頑張って行こうと思います。なんと言っても　生徒さんの喜んで頂けるお顔が<br />何よりの励みです。"
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
include_once("../lib/footer-fc.php");
?>