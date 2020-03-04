<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"本田 先生",
		"Word・インターネット・iPhone",
		"ネットショッピング",
		"「自分にはどんなスキルがあるんだろう？」私の再就職の出発はここからでした。新しい仕事に就くときに自信を付けてくれるのは自分のスキルです！でもどうやってそれを証明すればいいのかが悩みどころです。教室では自分のレベルも確認できますし、資格を取れば更に自信にもつながります。<br />ぜひ当教室で実力と自信を自分のものにしてください。そのために全力でサポートさせていただきます！"
	),
	array(
		"岩本 先生",
		"Excel・パワーポイント",
		"カメラ",
		"中学生の頃からパソコンを始め、ある程度のことが出来るという自信がありました。しかし、再就職をする際に自分のパソコンのスキルが足りていないことに気付きました。基礎を疎かにしてしまうと、その先の応用が身につかない。しっかりと一から学ぶことでパソコンのスキルも上がり、仕事の効率も上がっていきます。<br />今や就職・再就職をする時に求められるものの一つにパソコンが使えるというのが当たり前の時代になりました。どんな環境化でも胸を張って「パソコンが使えます」と言えるようしっかりとサポートさせていただきますので、ぜひ一緒に頑張りましょう！！"
	),
	array(
		"森 先生",
		"ワード・写真編集",
		"ネットショッピング",
		"「笑顔で教室から帰っていただく」ことを意識して、楽しく居心地の良い勉強空間を大切にしています。<br />日々の仕事での効率を上げる活用方法はもちろん、日常の中の便利な使い方など、授業プラスαもインストラクターから持って帰ってください♪<br />当教室で資格試験を実施しているので、安心して受験して頂けます。<br />みなさまのスキルアップを全力でバックアップさせていただきます！！",
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