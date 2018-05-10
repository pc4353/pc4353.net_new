<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
?>
					<h1><?=$room[$id][name]?>教室インストラクターのご紹介</h1>
					<p><img src="/images/inst_05.png" width="632" height="93" alt="「できない」悩みが「楽しくできる！」喜びの笑顔に変わる。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！" /></p>
					<p class="mB30"><img src="/<?=$room[$id][dir]?>/images/inst_06.jpg" alt="インストラクターの写真" /></p>
					<h2 class="mB20">インストラクターからのメッセージ</h2>
					
					<div class="i-pr clearfix mB50">
						<div class="section-lv2 moz2 clearfix">
							<p style="border:1px solid #cccccc; padding:20px;" class="mB30">
							みなさん、こんにちは！<br />
							イトーヨーカドー川崎店教室で私たちと一緒にパソコンを勉強しませんか？！<br />
							調べ物やショッピング、お知らせの文章作り、家計簿や請求書など、<br />
							パソコン操作を楽しみながら覚えて使いこなしましょう！<br />
							<br />
							豊富なカリキュラムの中から皆さんの目的に合わせて<br />
							最適なコースを選択いたしますので、安心してご相談ください！<br />
							初めてパソコンに触れる方にも資格取得を目指している方にも<br />
							教室インストラクターが責任を持って勉強のお手伝いをします！<br />
							<br />
							イトーヨーカドー川崎店教室はとても明るい教室です(*^^)！<br />
							みなさんの「できた！」の感動をご一緒させてください。
							</p>
						</div><!-- /.section-lv2 -->
					</div><!-- /.i-pr -->

				</div><!-- /.block -->
				</div><!-- /#kasou -->
<?php
include_once("../lib/footer.php");
?>