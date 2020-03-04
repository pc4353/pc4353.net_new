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
								パソコン市民講座　<?=$room[$id][name]?>教室のホームページへようこそ！<br /><br />
								当教室は初心者の方からお仕事で活用を考えている方まで、たくさんの受講生様がご通学されています。<br />
								基本操作はもちろん、お仕事での効率アップや資格取得など様々なご希望に合わせて一人一人に合った学習プランをご提供しております。<br />
								パソコンやタブレット、スマホのことでお困りのことがあったらぜひ一度ご相談にいらしてください。<br /><br />
								目的に応じたカリキュラムと安心のサポートで、皆様を全力で応援いたします！ 
							</p> 
						</div><!-- /.section-lv2 --> 
					</div><!-- /.i-pr --> 

				</div><!-- /.block -->
				</div><!-- /#kasou -->
<?php
include_once("../lib/footer.php");
?>