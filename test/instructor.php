<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib_test/header.php");
$ary = array(
	array(
		"小山　恵美",
		"インターネット＆ワード",
		"道の駅での買い物、週末イベント参加",
		"「イライラ！！」日々の生活の中、ついつい人にあたってしまう事が多い私です。そんな時にはパソコンに向かいます。パソコンは私のストレス発散の友です。Ｙｏｕ　Ｔｕｂｅで昔のアイドルの映像を見たり、お笑いの映像を見たり、あっという間に時間が過ぎてしまします。何時間もパソコンの前にいてもあきません。パソコンが大好きです。みなさんも一緒にパソコンを楽しみませんか？"
	),
	array(
		"本城　久美子",
		"インターネット＆エクセル",
		"映画＆音楽鑑賞",
		"私とコンピュータとの出会いは遡ることウン十年前、私が高校生の時に文化祭でコンピュータ占いをした時です。まだまだパソコンが普及する前の話ですから、私とコンピュータとは長～いおつき合いで切っても切れない深い仲(?!)なんですよ。時は流れて今はパソコンの時代になりましたが、パソコンは一瞬にして色々な事を体験出来る無限大の宝箱です。わくわくドキドキしながら発見と挑戦の旅に一緒に出かけませんか？　楽しいことが一杯待っていますよ！"
	),
	array(
		"岡崎　敦子",
		"インターネット＆エクセル",
		"ネットショッピング大好き",
		"多忙な日々を送るようになり、年々便利になっていく「パソコンの世界」を見て感動しました。。 今はインターネットでホテルの予約を取って旅行に行ったり、おいしいお菓子・特産物をネット購入したりして、パソコンは毎日の生活にかかせない家庭の主流になっています。 肩凝りがした時は、良いお医者さん・薬なども調べることができます。受講生の皆さんに「パソコン、毎日使える便利な道具！」と言っていただけるように頑張ります。皆さんもネットの世界を楽しんでみませんか？"
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
include_once("../lib_test/footer.php");
?>