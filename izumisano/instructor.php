<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"きもと 先生",
		"ワード・エクセル",
		"金魚の飼育、旅行",
		"学生の頃、就活の為にと思い学校帰りに習い始めたワープロから始まって、いつの間にか生活に欠かせないものとなったパソコン！そして、社会人になってから何事にも自信を持てなかった私に、少しずつ「自分にもできる！」という自信と可能性を与え、さらに人との繋がりを広げてくれたのもパソコンでした。<br />こんな自分の経験から、一人でも多くの方に新しい世界の扉を開くお手伝いをさせて頂けたら・・・と思っています。生徒さんは全員が家族です。一緒に頑張りましょう！"
	),
	array(
		"ひがしたに 先生",
		"インターネット",
		"犬と散歩、ピラティス",
		"私も市民講座の卒業生です。正直パソコンが苦手だった私が、個別学習というスタイルで自分のペースで進めることができ、わからない事はインストラクターの先生方にいつでも聞ける環境の中で克服できるようになりました。<br />これからも皆さんと一緒に勉強し、パソコンの便利さ、楽しさをお伝えできるように頑張ります。よろしくお願いいたします。"
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