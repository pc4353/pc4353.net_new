<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"滝口 先生",
		"パワーポイント・iPad",
		"アジアンドラマ鑑賞、バレーボール",
		"お家のパソコン、タブレット眠っていませんか？<br />私の場合、朝、目覚めたら･･･帰宅したら･･･、まずタブレットの電源をオン！<br />TVや新聞の代わりに情報収集、ショッピングや銀行振込、オークションに出品など・・・<br />生活の一部になっています。<br />パソコンを通じて、みなさんの視野を広げるお手伝いをしたいと願っています。<br />マジメに楽しく、がんばりましょう！"
	),
	array(
		"袴田 先生",
		"エクセル・インターネット",
		"物をつくること（ペーパークラフト、ペーパークイリング等）",
		"小学生の時には、授業中にしか触ることのできなかったパソコンが、今では身近になり、生活の一部になりました。<br />パソコンは写真を加工したり、絵を描いたり、動画を作ったり、家の間取りを描いたり・・・何でもできる魔法の箱みたいです♪まだまだ知らない機能を見つけるのが本当に面白く何時間触っていても飽きません。<br />そんなパソコンの面白さをうまく皆様に伝えることができるように頑張りますので、皆様も是非たくさんパソコンに触ってみてください！"
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