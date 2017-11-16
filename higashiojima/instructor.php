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
							<p style="border:1px solid #cccccc; padding:20px;" class="mB30">合言葉は「受講生ひとりひとりのために」<br />受講生全員の夢をかなえるために、受講生に寄り添い、学習を、丁寧にサポートしています。<br />次の授業が待ち遠しくなるような新しいことを学ぶときの緊張感あり、作品ができあがったときの笑顔あり、<br />そして、ときにはわいわいがやがや賑やかなイベントあり<br />インストラクター全員、そのような教室めざして日々精進しております。<br />気さくで下町気質たっぷりの温かい受講生の集まっている元気な教室です。<br />どうか、気軽にパソコン学習の「はじめの一歩」を踏み出していただければと願っております。<br /><br />インストラクター一同</p>
							<div class="back-top"><a class="moz2" href="#header">ページトップへ</a></div>
							</div><!-- /.section-lv3 -->
						</div><!-- /.section-lv2 -->
					</div><!-- /.i-pr -->

				</div><!-- /.block -->
				</div><!-- /#kasou -->
<?php
include_once("../lib/footer.php");
?>