<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"本田 先生",
		"ワード・インターネット・iPad",
		"演劇鑑賞・散歩・ネットショッピング",
		"家の中ではパソコン、外出先ではスマホやタブレットとシーンに合わせて使い分けられる時代になりましたね♪<br />数年前までは未来の世界ってこんな感じだろうなと思っていたことも日常の中に溶け込んできて次はどんな新しいことに出会えるのかと日々ワクワクしています。そんなワクワクを教室に通っていただいている生徒さんにもお伝えできるように毎日自分をアップデート中です！<br />新しい世界にぜひ飛び込んできてくださいね♪全力でみなさんをサポートさせていただきます！"
	),
	array(
		"岩本 先生",
		"エクセル・PCハード",
		"読書・ご朱印集め",
		"昔はパソコンと言えば、専門的な職業についている方が使うといったイメージの物でした。実際、私もその職業に憧れ、その当時高かったパソコンを買い勉強しました。<br />現在、パソコンは誰でもが気軽に扱う事の出来るものへと変わりました。しかし、難しいというイメージはなかなか消えるものではなく、始められるかな？と悩まれる方もまだまだ多い…。<br />そんな悩める皆様の一歩踏み出す勇気を後押しをさせていただきます！！パソコンを使いこなせるよう、一緒に頑張っていきましょう♪"
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