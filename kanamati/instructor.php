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
								パソコン市民講座金町店教室では小学生から80代の方、初心者の方から資格取得を目指す方まで幅広い年齢層・目標の方が通われています。皆さんご自身の目標に向けて頑張っていらっしゃいます。私達インストラクターも頑張る皆さんに負けずに全力でサポートさせていただいています。<br />
上のインストラクターのイラストはiPadのアプリでイラストを作成してワードに貼り付けて仕上げました！教室では使い方を学ぶだけでなく楽しむ方法もイベントを通してご紹介しています。生活を豊かに便利にしてくれるパソコン・タブレットを学んでみませんか？一緒に頑張りましょう！ 
							</p> 
						</div><!-- /.section-lv2 --> 
					</div><!-- /.i-pr --> 

				</div><!-- /.block -->
				</div><!-- /#kasou -->
<?php
include_once("../lib/footer.php");
?>