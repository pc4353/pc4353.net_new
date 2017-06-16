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
		"鈴木 先生",
		"インターネット・タイピング",
		"ネットサーフィン・写真",
		"インターネットが大好きで、ブログを書いたり、フェイスブックを楽しんだり…一番の楽しみは何といってもネットショッピング！時間を忘れて、ついつい…気が付くと一日中パソコンの前に座っていたり。<br />パソコンって夢中になれる魔法の箱です。皆さんにもパソコンの楽しさをお伝えしたいと思っています。<br />是非、一緒に楽しみながら学びましょう。"
	),
	array(
		"松田 先生",
		"エクセル・パワーポイント",
		"ネットショッピング・ガーデニング",
		"コンサートのチケット購入から、日常までネット頼りの松田です。お仕事で必要な方、趣味をもっと広げたい方、パソコンの活用方法や目的は皆さん違います。<br />日々進化するパソコンの世界。焦らず、楽しくそして長くパソコンと接して、「パソコン」という道具を使い、どんどん皆さんの世界を広げていきましょう！<br />『パソコンって、楽しいね』という言葉をいただけるよう、一生懸命サポートさせていただきます。<br />「パソコン市民講座」で、私たちと楽しくパソコンを学びましょう！"
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