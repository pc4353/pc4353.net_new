<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"原 先生",
		"エクセル・資格試験",
		"ハイキング・漫画",
		"パソコンを趣味で始めようとされている方、就転職の為に資格を取られたい方、お仕事の業務効率を上げたい方、パソコンを習われる目的は様々だと思います。<br />その目標を叶えるためのお手伝いが一緒にできればと思います。<br />ぜひ任せて下さい（*^ ^*)/",
	),
	array(
		"井上 先生",
		"ワード",
		"夏はキャンプ、冬はスキー！",
		"パソコンやタブレット、知れば知るほど面白いです！使えるようになると、なくてはならない物になります。<br />ご自身のペースで学んで頂いて、沢山知っていきましょう！！",
	),
	array(
		"三山 先生",
		"ワード・エクセル",
		"ボディボード",
		"PCやiPadが使えるようになれば趣味の世界も広がり生活がより良いものになります。自信をもって「使える」と言えるように、私たちがサポートします！",
	)
);
?>
					<h1><?=$room[$id][name]?>教室インストラクターのご紹介</h1>
					<p><img src="/images/inst_05.png" width="632" height="93" alt="「できない」悩みが「楽しくできる！」喜びの笑顔に変わる。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！" /></p>
					<p class="mB30"><img src="/<?=$room[$id][dir]?>/images/inst_06.jpg" alt="インストラクターの写真" /></p>
					<h2 class="mB20">インストラクターからのメッセージ</h2>
					
					<div class="i-pr clearfix mB50"> 
						<div class="section-lv2 moz2 clearfix"> 
							<p style="border:1px solid #cccccc; padding:20px;" class="mB30"> 
								パソコン市民講座　アステ川西教室のホームページへようこそ！<br /><br />■当教室は、初心者のためのパソコン教室です。<br />・パソコンをお持ちでない、購入されたばかりなど、これからパソコンをはじめたい初心者の方<br />・ワード、エクセル、パワーポイントの使いこなし、パソコン検定の資格取得等、仕事にパソコンを活かしたい方<br />・インターネット、メール、ブログなど、趣味の世界や交流の輪を広げたい方<br />もし、この中のどれか1つでも当てはまるものがあれば、まずは無料体験をおすすめします。<br />無料体験は随時行なっています。ご連絡なしの来校も大歓迎ですよ！！<br /><br />■「シニア特別クラス」開講で、ご年配の方も安心のパソコン教室です。<br />パソコン市民講座は、初心者の方だけでなく60歳以上のシニアの方も多く通われているアットホームなパソコン教室です。<br />特に、ご年配の方でもしっかり着実にパソコンスキルを身に付けていただける「シニア特別クラス」の開講など、授業についていけるかな？と不安のある方でも、安心して受講していただけます。<br />この秋に新規開講のため、みんなが新入生です。同じような目的の方々がたくさんいらっしゃいます。<br />当教室で、仲間作りもかねてパソコンを通じた新しい世界を拡げてみませんか？<br /><br />■インストラクターの先生も大募集！<br />当教室では、パソコンインストラクターの先生も大募集しています。<br />「教える」という喜びとやりがいあふれる仕事をしてみませんか？<br /><br />まずは、お気軽にお問い合わせください。<br />インストラクター一同、皆様からのお電話、ご来校を心よりお待ち申し上げております。 
							</p> 
						</div><!-- /.section-lv2 --> 
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