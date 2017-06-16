<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
$ary = array(
	array(
		"林 先生",
		"エクセル・モバイル",
		"小物作り",
		"慣れてしまえば便利で楽しいものですが、パソコンって、タブレットって、なんだか難しそう！慣れない時に感じる不安は皆さん同じです。<br />一度お気軽に市民講座の無料体験にお越しください。ワクワクする気持ちをサポートしていきます。"
	),
	array(
		"蓮田 先生",
		"ワード・写真編集",
		"写真加工・編集",
		"パソコン・iPad・iPhone、多種多様の授業から、皆さんに新しい世界を紹介していきます！目からウロコの新体験が待っていますよ。一緒に楽しんで学びましょう！"
	)
);
?>
					<h1><img src="/images/inst_03.png" width="632" height="45" alt="インストラクターのご紹介" /></h1>
					<p><img src="/images/inst_05.png" width="632" height="93" alt="「できない」悩みが「楽しくできる！」喜びの笑顔に変わる。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！" /></p>
					<p class="mB30"><img src="/<?=$room[$id][dir]?>/images/inst_06.jpg" alt="インストラクターの写真" /></p>
					<h2 class="mB20"><img src="/images/inst_08.png" width="632" height="45" alt="インストラクターからのメッセージ" /></h2>
					

					<div class="i-pr clearfix mB50"> 
						<div class="section-lv2 moz2 clearfix"> 
							<p style="border:1px solid #cccccc; padding:20px;" class="mB30"> 
							「エクセルでグラフを作れるようにならなきゃ！」<br />「回覧や収支報告を作る必要があるんだよね」<br />「仕事で使う訳じゃなく、すぐに何かを作る必要もないんだけど・・」<br />「触ってみたいけど、パソコンで何ができるのかわからない・・・」<br /><br />パソコンで出来る事、日々進化し、どんどん便利に！楽しい機能も沢山あります。<br />【宝箱】のようなパソコンで<br />「面白い！」「出来た！」を積み重ね　一緒に宝探しをしてみませんか？？、<br /><br />【楽しく】　そして　【しっかり】と<br />　【パソコンを使える】ようになっていただくための　サポートをしていきたいと思っています。<br /> <br />是非　お気軽に　教室にお越しください！！
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