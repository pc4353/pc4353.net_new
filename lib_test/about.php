					<div id="about4" class="block mB10">
					<h1 class="mB20"><?=$room[$id][name]?>教室のご紹介</h1>
						<h2><?=$room[$id][name]?>教室の教室情報</h2>
						<div class="section-lv2">
							<div class="shop-area clearfix">
								<div class="shop-box1-l">
                                    <dl> 
                                      <dt>教室名</dt> 
                                      <dd><?=$room[$id][name]?>教室</dd> 
                                    </dl> 
                                    <dl> 
                                      <dt>住所</dt> 
                                      <dd><?=$room[$id][ad1]?><br/><?=$room[$id][ad2]?><br /><?=$room[$id][ad3]?></dd> 
                                    </dl>
                                    <dl> 
                                      <dt>電話</dt> 
                                      <dd><?=$room[$id][phone]?></dd>
                                    </dl> 
                                    <dl> 
                                      <dt>開講時間</dt> 
                                      <dd><?=$room[$id][open]?></dd> 
                                    </dl>
                                    <dl> 
                                      <dt>アクセス</dt> 
                                      <dd><?=$room[$id][access]?></dd> 
                                    </dl>
									</div><!-- .shop-box1-l -->
									<div class="shop-box1-r"> 
									<div id="gmap" style="margin-bottom: 5px;width:270px; height:240px;"></div> 
									<p class="ali_right"><a href="http://maps.google.co.jp/maps?q=%E3%83%91%E3%82%BD%E3%82%B3%E3%83%B3%E5%B8%82%E6%B0%91%E8%AC%9B%E5%BA%A7<?=urlencode($room[$id][name])?>%E6%95%99%E5%AE%A4&ie=UTF-8&oe=utf-8" target="_blank">大きな地図でみる</a></p> 
									</div><!-- .shop-box1-r -->
								</div><!-- .shop-area -->
						</div><!-- /.section-lv2 -->
					</div><!-- /.block -->
				</div><!-- /.block -->
					<div>
						<div><img src="/<?=$room[$id][dir]?>/images/about_38.jpg" alt="教室の様子など" /></div>
<?php
if ($id == "6015000") {
?>
					<h2 class="mT25">教室からのメッセージ</h2>
						<p class="align-r mB20 mR10"><a href="/<?=$room[$id][dir]?>/instructor.php">＞＞インストラクターの紹介はこちら</a></p>
							<p style="border:1px solid #cccccc; padding:20px;"> 
								パソコン市民講座　イトーヨーカドー明石教室のホームページへようこそ☆<br /><br />
								◆明石教室は、百円ショップの奥にひっそりと存在する「隠れ家」の様な教室です。<br />
								　ただ、一歩足を踏み入れると…そこは開放感あふれる笑顔の絶えない明るい教室です☆<br />
								　インストラクターが見守る安心感の中、ご自身のスキルに合わせて勉強して頂けますよ。<br />
								　パソコン設備や環境もしっかり完備・綺麗な教室で学んで頂けます。<br />
								　初めての方・操作でお困りの方はもちろん、ビジネスに活かしたい・スキルアップしたい！<br />
								　という方にも、明石教室のインストラクターが、全力であなたの「出来る」を応援します！<br /><br /><br />
								◆パソコンは初めて！触るのが怖い…という方◆<br /><br />
								　インストラクターが親身にサポート、安心して「怖い」を「楽しい！」に変えていきましょう！<br />
								　わからない事を聞くだけでなく、「自分の力で出来るんだ！」という「自信」に繋げて頂けます。<br /><br />
								　メールやネット、文字入力もわからない…<br />
								　それでも大丈夫！入力方法から「出来る」をサポート致します♪<br /><br />
								　ご家族に聞いても教えてもらえない…<br />
								　そうお困りの方、出来る様になってご家族を驚かせてみませんか？<br /><br /><br />
								◆就職や転職、職場でのパソコンスキルにお悩みの方◆<br /><br />
								　教室に通えば、独学で「何となく…」が自信を持って「出来る」に変わり、<br />
								　すぐに仕事で活かせますよ♪<br />
								　文字入力でお悩みの方、ビジネスシーンにはタイピングが必須！<br />
								　タッチタイピングで「効率化」を実現しましょう！<br />
								　今更「聞けないし…」そういった悩みも解消出来る、<br />
								　明石教室はそんな方のスキルアップ道場です。<br />
								　転職や就職を目指す、これから「変わりたい」という方は、<br />
								　資格取得で自分の「武器」を手に入れましょう。<br />
								　職場や周りの人に内緒で、こっそりスキルアップしてみませんか？<br /><br />
								　明石教室でなら、どんなスキルの方でも、わからない事・モヤっとしている疑問を<br />
								　スッキリ解決致します。<br />
								　「自分で出来るのが楽しい☆自分に自信がついた！」そういう気持ちで通って頂ける教室です。<br />
								　パック受講ではなく、安定の定期受講。自分のペースでスキルアップが可能なので安心です。<br />
								　今、このページを開いて悩んでいるあなた、勇気を持って一度ご相談下さい☆<br /><br />
								　明石教室のインストラクター一同、心よりお待ちしています。
							</p> 
<?php
} else {
?>
<?php
}
?>
						<div class="about_tel">
							<p><?=$room[$id][name]?>教室</p>
							<p class="phone">TEL:<?=$room[$id][phone]?></p>
						</div>
						<p class="align-r mB30 mR10"><a href="/<?=$room[$id][dir]?>/instructor.php">＞＞インストラクターの紹介はこちら</a></p>
						<p class="font18 mL20 mB10">パソコン市民講座が15年間の運営で延べ54万人以上の方に<br />「選ばれている理由」があります。<br />
					</div>
					<div id="about1" class="block mB30">
						<h2 class="mB20">パソコン市民講座の特長</h2>
						<div class="section-lv2 clearfix">
							<p class="font16 mL20 mB10">「全ての方にパソコンの楽しさを実感していただく」ための「安心」が、<br />あなたの学びをしっかりサポートします！</p>
							<h3 id="point1"><img src="/images/point_12.png" width="632" height="67" alt="①おひとりお一人のペースで学べる「個別学習」" /></h3>
							<div class="section-lv3 pt1">
								<p class="mB10">
								パソコン市民講座の「個別学習」は初心者の方も、資格取得を目指す方も自分のペースで学習いただけます。分かりやすい映像授業に加え、教室インストラクターが皆さんの質問に丁寧にお答えします。おひとりお一人の学習進度や理解度を確認し、自立してパソコンを使いこなしていただくための各種サポートを行います。
								</p>
							</div>

							<h3 id="point2"><img src="/images/point_15.png" width="632" height="67" alt="②曜日と時間が自由に選べる「受講予約システム」" /></h3>
							<div class="section-lv3 pt3">
								<p class="mB10">
								予定は毎月変わるもの。受講する曜日・時間帯は、教室の開講時間内で自由に設定いただけます。また教室はショッピングセンター内にあるので、買い物ついでや仕事帰りなど、慣れ親しんだ通いやすい環境です。ご自分のライフスタイルに合わせて無理なく学べる受システムにご好評をいただいております。
								</p>
							</div>

							<h3 id="point3"><img src="/images/point_18.png" width="632" height="67" alt="③学びやすく続けやすい安心の「月謝制」（1時間1500円）" /></h3>
							<div class="section-lv3 pt2">
								<p class="mB10">
								受講料は、1時間あたり1,500円（税別）の毎月定額支払制となっていますので、計画的に学習を進めることができます。また800時間以上の豊富な講座の中から、インストラクターが個々に合わせたオリジナルカリキュラムをご提案いたします。パソコン市民講座はお一人でパソコン等の操作ができるようになる「自立」にこだわるパソコン教室です。<br /> （入会金、月会費、テキスト教材費が別途必要です）
							</p>
							</div>
							
							<h3 id="point4"><img src="/images/point_21.png" width="632" height="67" alt="④自宅でも復習ができる「映像配信システム」" /></h3>
							<div class="section-lv3 pt5">
								<p class="mB10">
								パソコンスクール業界初！教室でご覧いただく映像教材が、ご自宅でも視聴できる「映像配信サービス」を2015年4月から導入！<br />
                                教室で受講いただいた講座を専用の学習サイトから、この「映像配信サービス」を利用して、自宅や外出先で繰り返し復習いただけます。<br />
                                「映像配信サービス」を利用すれば、学習内容をしっかりと身に付けることができます！

								</p>
								<div class="mB10 mL5"><a href="http://www.4353p-club.com" target="_blank"><img class="alpha" src="/images/premiere04.jpg" alt="プレミア倶楽部ウェブサイトはこちら" /></a></div>
							</div>

							<h3 id="point5"><img src="/images/point_24.png" width="632" height="67" alt="⑤全国150教室、15年間で54万人の「指導実績」" /></h3>
							<div class="section-lv3 pt4">
								<p class="mB10">
								54万人以上の方々への「豊富な指導実績」を誇ります！あらゆる世代の方々にITスキルを身に付けていただき、便利で豊かな生活を送っていただくことを目指しております。<br />
                                これまで蓄積してきたノウハウをもとに、パソコン機器等を自立して操作できる方をお一人でも多く輩出し、これからも「できた！」「楽しい！」という喜びの声を増やしてまいります。
								</p>
							</div>

							<h3 id="point6"><img src="/images/point_25.png" width="632" height="67" alt="⑥ご自宅でのトラブルも無料で対応「電話サポート」" /></h3>
							<div class="section-lv3 pt6">
								<p class="mB10">
								パソコン市民講座の受講生の皆様には、ご自宅でのトラブルにも無料で電話対応を行う「パソコンサポートサービス」をご利用いただくことができます。<br />パソコンやiPad・iPhoneに関するトラブル、周辺機器のトラブルにも対応いたします。機器関連でわからないことがあった場合でもご自宅から専用の電話番号へお電話いただければ、専門のスタッフが安心のサポートを行います。
								</p>
							</div>
							
						</div><!-- /.section-lv2 -->
						<div class="back-top mR15 mB20"><a class="moz2" href="#header">ページトップへ</a></div>
					</div><!-- /.block -->
<?php
if ($id == "6117001") {
?>
<?php
} else {
?>
					<div id="contact2" class="block mB30">
						<h2 class="mB10">興味を持ったらまずはお問い合わせ</h2>
						<div class="section-lv2 clearfix moz2">
							<div class="box-a">
								<p><img src="/images/contact_53.png" width="350" height="24" alt="お問い合わせフォームはこちら" /></p>
								<div class="section-lv3 moz2">
									<img src="/images/contact_60.png" width="94" height="68" alt="お気軽にお問い合わせください。" /><span class="contact-bt"><a href="/<?=$room[$id][dir]?>/contact.php" onclick="javascript:_gaq.push(['_trackPageview', '/click/contact/2/']);"><img class="alpha" src="/images/contact_61.png" width="250" height="71" alt="お問い合わせ" /></a></span>
								</div>
							</div>
							<div class="box-b">
								<p><img src="/images/contact_55.png" height="24" width="260" alt="お電話での問い合わせはこちら"  /></p>
								<div class="section-lv3 moz2">
									<dl class="b mB10">
										<dt class="font10">ホームページを見たとお伝えください！</dt>
										<dd><span class="font22 blue"><?=$room[$id][phone]?></span></dd>
									</dl>
									<p><span class="font12">営業時間は<a href="/<?=$room[$id][dir]?>/about.php#about4">こちらをご覧ください</a></span></p>
								</div>
							</div>
						</div><!-- /.section-lv2 -->
					</div><!-- /#.block -->
<?php
}
?>
					
					<div id="about2" class="block mB30 mT25">
						<h2 class="mB20">イベントカレンダー 2017年版</h2>
						<div class="section-lv2 clearfix">
							<h3 class="mB10"><img src="/images/about_25.png" width="632" height="30" alt="さらに…「大人気！」教室イベントを毎月開催！" /></h3>
							<p class="mL20 mR20 mB10">パソコン市民講座では毎月「教室での楽しいイベント」を開催しています。
							<br />日頃は個別で学ぶシステムですが、イベントでは会員の方が集まりワイワイと交流しながら、パソコンでのモノ作りやコンテストに皆さんで一緒にチャレンジしていきます。<br />他の会員の方との楽しい交流の輪が広がり、「自分にもこんなモノが作れた！」という達成感を実感できる！そんな大人気の教室イベントにあなたも参加してみませんか？
							</p>
							<div class="mL20">
								<img class="mL20" src="/images/about_27.jpg" width="543" alt="イベントカレンダー" />
							</div>
							<div class="back-top mR15"><a class="moz2" href="#header">ページトップへ</a></div>
						</div><!-- /.section-lv2 -->
					</div><!-- /.block -->

					<div id="about3" class="block mB30">
					<h2 class="mB20">受講システム</h2>
					<div class="section-lv2 clearfix">
					<table class="table1 mB20">
					<tr>
					<td class="item">受講料</td>
					<td>１時間あたり 1,500円（税別）<br />
						※毎月定額支払制となっていますので、計画的に学習を進めることができます。<br />
						※パソコン等、機器使用料は不要です。</td>
					</tr>
					<tr>
					<td class="item">その他費用</td>
					<td>入会金（初回のみ）、月会費（毎月）、テキスト教材費が必要です。</td>
					</tr>
					<tr>
					<td class="item">受講ペース</td>
					<td>「1回2時間、週2～3日」が標準ペースです。<br />
					※短期間でマスターできる集中受講も可能です。</td>
					</tr>
					</table>
					</div><!-- /.section-lv2 -->
					</div><!-- /.block -->
				</div><!-- /.block -->
				<div class="back-top mR15"><a class="moz2" href="#header">ページトップへ</a></div>
