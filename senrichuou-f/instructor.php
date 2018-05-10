<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header-fc.php");
$ary = array(
	array(
		"黒川裕見子",
		"ホームページ・デジカメ",
		"編み物、デジカメ",
		"パソコンを始めてからもう１５年以上になりますが、毎年毎月毎日勉強することがでてきます。だから、いつもワクワク！新しい世界が広がるのが楽しくてたまりません。この楽しさを皆さんにも味わってもらうために、せいいっぱいお手伝いしたいと思っています。一緒に頑張りましょう！",
		"inst03"
	),
	array(
		"中野ひさ",
		"ワード・パワーポイント",
		"読書、ヨガ",
		"パソコンは、「仕事で使う」「便利だから」という面だけでなく、何かを作成するたびに達成感を感じられる楽しい趣味にもなります！世界も広がります！いろいろなことにチャレンジしてくださいね。初めのうちＤＶＤを見ても「ちっとも身につかない」「もう年だから覚えるのは無理」などと言っていらした方も、ある時期を過ぎると、突然いろんなことがわかってきて「おもしろい！」「楽しい！」段階に突入します。どんな小さな不安や疑問も、私たちに相談してくださいね！",
		"inst04"
	)
);
?>
					<h1><?=$room[$id][name]?>教室インストラクターのご紹介</h1>
					<p><img src="/images/inst_05.png" width="632" height="93" alt="「できない」悩みが「楽しくできる！」喜びの笑顔に変わる。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！" /></p>
					<p class="mB30"><img src="/<?=$room[$id][dir]?>/images/inst_06.jpg" alt="インストラクターの写真" /></p>
					<h2 class="mB20">インストラクターからのメッセージ</h2>
					

					 <div class="inst_detail">
<?php
foreach( $ary as $key => $value  ) {
?>
						<div class="i-voice clearfix mB20"> 
						<div class="section-lv2 moz2 clearfix">
						<div class="box-a">
						<img class="mB10" src="images/<?=$value[04]?>.jpg" width="214" height="221" alt="<?=$value[00]?>" /> 
							<h3><?=$value[00]?></h3>
						</div><!-- /.box-a --> 

							<div class="box-b">
								<dl>
									<dt>好きな分野</dt>
									<dd><?=$value[01]?></dd>
								</dl>
								<dl>
									<dt>趣味</dt>
									<dd><?=$value[02]?></dd>
								</dl>
								<p><?=$value[03]?></p>
								</div><!-- /.box-b --> 
                        </div><!-- /.section-lv2 -->
						<div class="back-top mR15"><a class="moz2" href="#header">ページトップへ</a></div> 
						</div><!-- /.i-voice --> 

<?php
}
?>
                    </div><!-- /.inst_detail --> 

				</div><!-- /.block -->
				</div><!-- /#kasou -->
<?php
include_once("../lib/footer-fc.php");
?>