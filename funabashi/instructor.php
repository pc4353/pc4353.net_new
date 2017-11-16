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
							<div class="section-lv3 clearfix mB30">
							<p style="border:1px solid #cccccc; padding:20px;" class="mB30">皆さん、こんにちは！！今、パソコンは生活に欠かせない存在となっています。そんなパソコンに触ったことがない、触ってみたいけれど勇気が出ない・・・。という方でも安心して学べる環境です。私たちインストラクターが、みなさんのきっかけ作りをサポートします。ぜひ一度、教室へお越し下さい。お待ちしております(^-^)</p>
							<div class="back-top"><a class="moz2" href="#header">ページトップへ</a></div>
							</div><!-- /.section-lv3 -->
						</div><!-- /.section-lv2 -->
					</div><!-- /.i-pr -->

				</div><!-- /.block -->
				</div><!-- /#kasou -->
<?php
include_once("../lib/footer.php");
?>