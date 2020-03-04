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
								パソコン市民講座　<?=$room[$id][name]?>教室のホームページへようこそ♪<br /><br />
								■当教室は初心者の方からお仕事での活用を目的とした方まで、さまざまな目的の方が通って頂くことができる教室です。基本操作や趣味活用、資格取得、業務効率が上がる効率の良い操作を学ぶことができる講座もございます。<br />
								目的に応じたカリキュラムと安心のサポートで、皆様を全力で応援いたします！<br /><br />
								パソコン市民講座　<?=$room[$id][name]?>教室の学習スタイル<br />
								●何度も繰り返し聞くことができる映像授業<br />
								●目的に応じたコース、カリキュラムをご提案<br />
								●個人の習熟度に応じた受講サポート<br />
								●ご自宅のパソコンで困ったときには電話サポートも利用可能<br />
								●映像、教室インストラクター、電話サポートシステムのトリプルteacher制度<br /><br />
								まずは無料体験から。お気軽にお問合せください。
 
							</p> 
						</div><!-- /.section-lv2 --> 
					</div><!-- /.i-pr --> 

				</div><!-- /.block -->
				</div><!-- /#kasou -->
<?php
include_once("../lib/footer.php");
?>