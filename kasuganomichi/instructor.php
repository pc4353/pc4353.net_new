<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"丸山 先生",
		"エクセル・iPad",
		"フットサル・ショッピング",
		"楽しく学ぶことが習得の秘訣です♪<br />「苦手な入力がみるみる上達！」「見にくかった文章が見やすく♪」「グラフや表も作れるように！」など「できる」を増やします！<br />ただ操作を覚えるのではなく、どういう時に必要かなども一緒に指導していきますので実生活でも役に立つようにサポートします！"
	),
	array(
		"新免 先生",
		"ワード・タイピング",
		"娘たちとお出かけ！",
		"大好きなパソコンを通して、受講生の皆さまと一緒に勉強したり、笑ったり、悩んだり・・・の毎日。気がつけばいつの間にか私も成長させていただけていることを実感しています。誰でもが失敗を恐れずに新しいチャレンジができる！パソコン市民講座はそんな教室だと思います。<br />私たちインストラクターと一緒にパソコンやタブレット、スマートホンにチャレンジしませんか？春日野道教室で皆さまの笑顔に出会えることを楽しみにしています！",
	),
	array(
		"福井 先生",
		"ワード・iPhone",
		"オンラインゲーム",
		"仕事・勉強・買い物・趣味・遊びなどなどパソコンやスマホ・タブレットを使いこなせるようになると生活がぐーんと豊かになります。目標をもって一緒に頑張りましょう♪",
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