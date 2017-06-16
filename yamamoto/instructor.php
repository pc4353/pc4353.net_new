<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"山原 先生",
		"ワード・エクセル",
		"ショッピング・映画鑑賞",
		"「パソコンは宝箱みたい！」教室の受講生さんの感想です。世界中をネットで旅したり、お買い物をしたり・・・パソコンを使いこなせるようになると、毎日の生活がもっともっと楽しく便利なものになります。<br />教室のみなさんの「わからない」を私たちインストラクターも最初はみんな経験しました。少しでもわからないことは、なんでも質問してください。できるようになるまで、私たちがしっかりサポートいたします。<br />受講生の皆さんに「パソコンは楽しい！」そう言っていただける教室を目指しています。"
	),
	array(
		"野﨑 先生",
		"ワード・エクセル",
		"韓ドラ鑑賞",
		"パソコンを使いこなしている人に尋ねると、「え～こんなの簡単よ！」と言ってスラスラと操作をされます。でも全くわからない人間には、その人が魔法使いのように見えてしまう事がありませんか？実は私もありました。これは知らないと損をすると思い勉強しました。これから始めようと思っていらっしゃる方、私達インストラクターが魔法が使えるようにお手伝い致します。さあ一緒に魔法使いになりましょう。"
	),
	array(
		"本澤 先生",
		"インターネット・ワード",
		"お菓子作り・旅行・アレンジメントフラワー",
		"ワードでイラスト入りの案内書が作成できた時、エクセルで面倒な家計簿の計算がアッと言う間に出来た時、インターネットでホテルの予約が出来た時・・・目からウロコの感動でした。その同じ感動を、ぜひ受講生の皆さんにも味わって頂きたいという気持ちでいっぱいです。最初は、難しいと思われることもあるかと思いますが、テンポ良く続けてパソコンを触り続ける事が、上達の秘訣です。皆さんの「出来た！」の笑顔の一声が聞きたくて・・・教室インストラクター全員、日々頑張っています。"
	),
	array(
		"植野 先生",
		"ワード・インターネット",
		"食べること・お料理♪ ",
		"実は私はパソコン市民講座の受講生でした。この教室で学ぶことでパソコンの便利さ、使いこなし方などマスターすることができました。初めはパソコンに対して苦手意識をもっておられても、パソコンがなくてはならない生活の一部となること請け合いです。明るく楽しく一緒に学びましょう！教室に通ってくださるみなさんのお力になれるように頑張ります。"
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