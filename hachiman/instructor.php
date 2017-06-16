<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"大西 先生",
		"インターネット＆ワード",
		"トールペイント",
		"実は私　十数年前、皆さんと同じパソコン市民講座の受講生だったんです。<br />その後、ご縁があってインストラクターとなりましたのでパソコン市民講座とはとても長いお付き合いになります。<br />私がパソコンを始めた時からでも　パソコンやタブレットはすごく速いスピードで進化しています。これからもどんどん進化・変化していくでしょうね(+o+)　そのスピードに遅れないよう、私自身も皆さんと一緒に勉強し、元受講生として皆さんの側に立ったアドバイスができるように努力していきたいと思っています。"
	),
	array(
		"磯村 先生",
		"エクセル",
		"ショッピング",
		"私はこの教室に受講生として通い、転職のための資格取得に励んでいました。あれから十数年・・・。インストラクターとしてこのパソコン市民講座でたくさんの方の学習のお手伝いをさせていただいております。<br />今やパソコンやタブレットは日々の生活に欠かせないものですよね！とはいえ何ができるのか？チョットのぞいてみませんか？<br />私たちインストラクターがしっかりサポートさせていただきます。"
	),
	array(
		"大澤 先生",
		"iPad",
		"ヨガ",
		"パソコン市民講座のインストラクターになり、たくさんの受講生さんとの出逢いがありました。<br />パソコンを始められるきっかけも、パソコンを始める方の年齢層も様々です。趣味で始めてみようかな…。と思う背景には、インターネットで旅行の予約を取りたい！電車の時刻が知りたい！遠く離れた孫や子供にメールをしてみたい！<br />資格を取得したいという方は、スキルアップを目指している！就職に役立てたい！など・・・<br />そんな様々な背景をお持ちの方がパソコン市民講座に通われはじめ、新しいことを学ばれた時の満足げな表情、作品を作り上げた時の嬉しそうな笑顔、困難を克服出来たときの喜び、そんな皆様の気持ちにふれることが私たちインストラクターの喜びです。"
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