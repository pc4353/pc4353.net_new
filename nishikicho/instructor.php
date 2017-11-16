<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"岩澤 先生",
		"ワード、パワポ",
		"ドライブ",
		"１０年前までは全くパソコンができなかった私。でもパソコン教室に通ったたお蔭で、資格取得もでき、こうしてインストラクターの仕事に就く事ができました。<br />最初から出来る人はいません！一歩踏み出さないと何も変わりませんよ。思いたった時がやり時です！まずは一歩踏み出してみましょう！<br />私達が全力でサポートしますので、ご安心を！！"
	),
	array(
		"森脇 先生",
		"デジカメ・iPad",
		"写真撮影（主にサッカー部の息子）",
		"営業管理でエクセルを、出版データの作成でワードをがっちり使っていました。実務に役立つテクニックをお伝えします。<br />iPadも常に持ち歩き、楽しい使い方を模索中～！"
	),
	array(
		"大木 先生",
		"エクセル、タイピング",
		"プリザーブドフラワー・ネットショッピング・読書",
		"学生の頃にはじめて自分用のパソコンを購入してから早何十年。今ではパソコンが故障しようものなら当日に買いなおさないといけないくらい私の生活の必需品となりました。<br />みなさんにパソコンの便利さ楽しさを、楽しくお伝えできるようがんばります♪もちろん、仕事に必要なスキル習得、資格取得もおまかせあれです♪<br />よろしくお願いいたします。"
	),
	array(
		"山崎 先生",
		"iPhone・iPad",
		"ゲーム、漫画、イラスト等沢山あります",
		"学生の頃からPCでゲームをしたり、インターネットをしたり、絵を描いたりとPCは日常に欠かせない大切なものになっています。<br />以前に仕事でiPhone･iPadを使っていたので、特にiPhone･iPadのことはお任せください！PCとiPhone･iPadはとても魅力のあるものなので、皆さんが楽しく使いこなせるように精一杯サポートを頑張ります！！",
	),
	array(
		"篠崎 先生",
		"ワード",
		"手芸、ピアノ",
		"タイピングが苦手だったので、PCが嫌いでした！でも少しずつ手元を見ないで打てるようになると、とても楽しくて♪手元を見ないで打てるようになったら世界が広がりますよ！<br />インストラクター全員で精一杯サポートさせて頂きます。よろしくお願いします。",
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
								パソコン市民講座　イトーヨーカドー錦町店教室のホームページへようこそ！<br /><br />■当教室は、初心者のためのパソコン教室です。<br />・パソコンをお持ちでない、購入されたばかりなど、これからパソコンをはじめたい初心者の方<br />・ワード、エクセル、パワーポイントの使いこなし、パソコン検定の資格取得など、<br />　仕事にパソコンを活かしたい方<br />・インターネット、メール、ブログなど、趣味の世界や交流の輪を広げたい方<br />もし、この中のどれか1つでも当てはまるものがあれば、まずは無料体験をおすすめします。<br />無料体験は随時行なっています。ご連絡なしの来校も大歓迎ですよ！！<br /><br />■「シニア特別クラス」開講で、ご年配の方も安心のパソコン教室です。<br />パソコン市民講座は、初心者の方だけでなく60歳以上のシニアの方も多く通われているアットホームなパソコン教室です。<br />特に、ご年配の方でもしっかり着実にパソコンスキルを身に付けていただける「シニア特別クラス」の開講など、授業についていけるかな？と不安のある方でも、安心して受講していただけます。同じような目的の方々がたくさんいらっしゃいます。<br />当教室で、仲間作りもかねてパソコンを通じた新しい世界を拡げてみませんか？<br /><br />■インストラクターの先生も大募集！<br />当教室では、パソコンインストラクターの先生も大募集しています。<br />「教える」という喜びとやりがいあふれる仕事をしてみませんか？<br /><br />まずは、お気軽にお問い合わせください。<br />インストラクター一同、皆様からのお電話、ご来校を心よりお待ち申し上げております。 
							</p> 
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