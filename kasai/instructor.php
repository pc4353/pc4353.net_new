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
							<p style="border:1px solid #cccccc; padding:20px;" class="mB30">「効率良く仕事ができるようになりたい。」「資格を取って就職・転職に役立てたい。」「写真の取り込みを覚えて、趣味に活かしたい。」等、なりたい自分は人それぞれです。<br><br>
								私たちは様々なご要望にお応えできるように、多くのカリキュラムの中から、最適なコース提案をしております。<br><br>
								「複数の資格が取れた！」「苦手だったパソコンが使えるようになった。」等、たくさんの喜びのお声をいただいております。<br><br><br>
								まずは、お気軽に無料体験のお申込みをなさってください。<br><br>
								インストラクター一同心よりお待ちしております。</p>
						</div><!-- /.section-lv2 -->
					</div><!-- /.i-pr -->

				</div><!-- /.block -->
				</div><!-- /#kasou -->
<?php
include_once("../lib/footer.php");
?>