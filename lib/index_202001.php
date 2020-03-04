<main>
<div id="main_contents" class="clearfix">
       <?php if (date("Ymd") <= 20200131) : ?> <!-- 表示するまでの期間をyyyymmddで記載　-->
<?php
if( $id == "6015000" ) {
	//test
?>
                    <dl class="notice tk-kozuka-gothic-pr6n">
                    <dt>【店舗移転のご案内】</dt>
                    <dd><p>「パソコン市民講座 ショッパーズプラザ海老名教室」は2017年11月25日（土）をもちまして閉校し、「パソコン市民講座 マルイファミリー海老名教室」として12月1日（金）より移転リニューアルオープンいたしました。今後とも変わらぬご愛顧のほどよろしくお願い申し上げます。</p></dd>
                    </dl>
<?php
}
?>
      <?php endif; ?>
<div class="main_vi">
<ul class="slider">
       <?php if (date("Ymd") >= 20200126) : ?> <!-- 表示するまでの期間をyyyymmddで記載　-->
	<?php
	if ($id == "1076000" ) {
		//けやき
	?>
	<li><a href="/<?=$room[$id][dir]?>/certify.php"><img src="../images/img-main01.jpg" width="985" height="300" alt="エクセル・ワード・パワーポイントを仕事で活かす！ビジネス実践講座" class="alpha" /></a></li>
	<li><a href="/course/d_photo_master.php" target="_blank"><img src="../images/img-main05.jpg" width="985" height="300" alt="デジタル写真マスター講座 写真のすべてが学べる！詳しくはこちらから" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/mos.php"><img src="../images/img-main02.jpg" width="985" height="300" alt="就職・転職を有利に！資格は実力の証！MOS資格取得コース" class="alpha" /></a></li>
	<?php
	} elseif ( $room[$id][sokudoku] == "1" && $room[$id][senior] == "0" ) {
		//速読
	?>
	<li><a href="/<?=$room[$id][dir]?>/junior.php"><img src="../images/img-main04.jpg" width="985" height="300" alt="子どもパソコン講座開講！詳しくはこちらから" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/gakuwari.php"><img src="../images/img-main07.jpg" width="985" height="300" alt="小学生から大学生までお得に学べる学割制度" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/mos.php"><img src="../images/img-main02.jpg" width="985" height="300" alt="就職・転職を有利に！資格は実力の証！MOS資格取得コース" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/sokudoku.php"><img src="../images/img-main06.jpg" width="985" height="300" alt="みんなの速読 無料体験募集中！" class="alpha" /></a></li>
	<?php
	} elseif ( $room[$id][senior] == "1" && $room[$id][sokudoku] == "0" ) {
	//シニア割
	?>
	<li><a href="/<?=$room[$id][dir]?>/junior.php"><img src="../images/img-main04.jpg" width="985" height="300" alt="子どもパソコン講座開講！詳しくはこちらから" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/gakuwari.php"><img src="../images/img-main07.jpg" width="985" height="300" alt="小学生から大学生までお得に学べる学割制度" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/senior.php"><img src="../images/img-main08.jpg" width="985" height="300" alt="70歳からはシニア割制度" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/mos.php"><img src="../images/img-main02.jpg" width="985" height="300" alt="就職・転職を有利に！資格は実力の証！MOS資格取得コース" class="alpha" /></a></li>
	<?php
	} elseif ( $room[$id][sokudoku] == "1" && $room[$id][senior] == "1" ) {
	//速読＆シニア割
	?>
	<li><a href="/<?=$room[$id][dir]?>/junior.php"><img src="../images/img-main04.jpg" width="985" height="300" alt="子どもパソコン講座開講！詳しくはこちらから" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/gakuwari.php"><img src="../images/img-main07.jpg" width="985" height="300" alt="小学生から大学生までお得に学べる学割制度" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/senior.php"><img src="../images/img-main08.jpg" width="985" height="300" alt="70歳からはシニア割制度" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/sokudoku.php"><img src="../images/img-main06.jpg" width="985" height="300" alt="みんなの速読 無料体験募集中！" class="alpha" /></a></li>
	<?php
	}else{
		//通常
	?>
	<li><a href="/<?=$room[$id][dir]?>/junior.php"><img src="../images/img-main04.jpg" width="985" height="300" alt="子どもパソコン講座開講！詳しくはこちらから" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/gakuwari.php"><img src="../images/img-main07.jpg" width="985" height="300" alt="小学生から大学生までお得に学べる学割制度" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/certify.php"><img src="../images/img-main01.jpg" width="985" height="300" alt="エクセル・ワード・パワーポイントを仕事で活かす！ビジネス実践講座" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/mos.php"><img src="../images/img-main02.jpg" width="985" height="300" alt="就職・転職を有利に！資格は実力の証！MOS資格取得コース" class="alpha" /></a></li>
	<?php
	}
	?>
      <?php endif; ?>

     <?php if (date("Ymd") <= 20200125) : ?> <!-- 表示するまでの期間をyyyymmddで記載　-->
	<?php
	if ($id == "1076000" ) {
		//けやき
	?>
	<li><a href="/<?=$room[$id][dir]?>/certify.php"><img src="../images/img-main01.jpg" width="985" height="300" alt="エクセル・ワード・パワーポイントを仕事で活かす！ビジネス実践講座" class="alpha" /></a></li>
	<li><a href="/course/d_photo_master.php" target="_blank"><img src="../images/img-main05.jpg" width="985" height="300" alt="デジタル写真マスター講座 写真のすべてが学べる！詳しくはこちらから" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/mos.php"><img src="../images/img-main02.jpg" width="985" height="300" alt="就職・転職を有利に！資格は実力の証！MOS資格取得コース" class="alpha" /></a></li>
	<?php
	} elseif ($id == "6015000" ) {
	//test
	?>
	<li><a href="/<?=$room[$id][dir]?>/sokudoku.php"><img src="../images/img-main06.jpg" width="985" height="300" alt="速読" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/junior.php"><img src="../images/img-main04.jpg" width="985" height="300" alt="子どもパソコン講座開講！詳しくはこちらから" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/mos.php"><img src="../images/img-main02.jpg" width="985" height="300" alt="就職・転職を有利に！資格は実力の証！MOS資格取得コース" class="alpha" /></a></li>
	<li><a href="/course/d_photo_master.php" target="_blank"><img src="../images/img-main05.jpg" width="985" height="300" alt="デジタル写真マスター講座 写真のすべてが学べる！詳しくはこちらから" class="alpha" /></a></li>
	<?php
	} elseif ($id == "60150155" ) {
	//大曽根
	?>
	<li><a href="/<?=$room[$id][dir]?>/contact.php"><img src="../images/img-main_cp2001-1.jpg" width="985" height="300" alt="新春特別企画！！「最大6,000円OFF」入会キャンペーン実施中！！" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/junior.php"><img src="../images/img-main04.jpg" width="985" height="300" alt="子どもパソコン講座開講！詳しくはこちらから" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/gakuwari.php"><img src="../images/img-main07.jpg" width="985" height="300" alt="小学生から大学生までお得に学べる学割制度" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/certify.php"><img src="../images/img-main01.jpg" width="985" height="300" alt="エクセル・ワード・パワーポイントを仕事で活かす！ビジネス実践講座" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/mos.php"><img src="../images/img-main02.jpg" width="985" height="300" alt="就職・転職を有利に！資格は実力の証！MOS資格取得コース" class="alpha" /></a></li>
	<?php
	} elseif ( $room[$id][sokudoku] == "1" && $room[$id][senior] == "0" ) {
		//速読
	?>
	<li><a href="/<?=$room[$id][dir]?>/contact.php"><img src="../images/img-main_cp2001-1.jpg" width="985" height="300" alt="新春特別企画！！「最大6,000円OFF」入会キャンペーン実施中！！" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/junior.php"><img src="../images/img-main04.jpg" width="985" height="300" alt="子どもパソコン講座開講！詳しくはこちらから" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/gakuwari.php"><img src="../images/img-main07.jpg" width="985" height="300" alt="小学生から大学生までお得に学べる学割制度" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/mos.php"><img src="../images/img-main02.jpg" width="985" height="300" alt="就職・転職を有利に！資格は実力の証！MOS資格取得コース" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/sokudoku.php"><img src="../images/img-main06.jpg" width="985" height="300" alt="みんなの速読 無料体験募集中！" class="alpha" /></a></li>
	<?php
	} elseif ( $room[$id][senior] == "1" && $room[$id][sokudoku] == "0" ) {
	//シニア割
	?>
	<li><a href="/<?=$room[$id][dir]?>/contact.php"><img src="../images/img-main_cp2001-1.jpg" width="985" height="300" alt="新春特別企画！！「最大6,000円OFF」入会キャンペーン実施中！！" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/junior.php"><img src="../images/img-main04.jpg" width="985" height="300" alt="子どもパソコン講座開講！詳しくはこちらから" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/gakuwari.php"><img src="../images/img-main07.jpg" width="985" height="300" alt="小学生から大学生までお得に学べる学割制度" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/senior.php"><img src="../images/img-main08.jpg" width="985" height="300" alt="70歳からはシニア割制度" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/mos.php"><img src="../images/img-main02.jpg" width="985" height="300" alt="就職・転職を有利に！資格は実力の証！MOS資格取得コース" class="alpha" /></a></li>
	<?php
	} elseif ( $room[$id][sokudoku] == "1" && $room[$id][senior] == "1" ) {
	//速読＆シニア割
	?>
	<li><a href="/<?=$room[$id][dir]?>/contact.php"><img src="../images/img-main_cp2001-1.jpg" width="985" height="300" alt="新春特別企画！！「最大6,000円OFF」入会キャンペーン実施中！！" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/junior.php"><img src="../images/img-main04.jpg" width="985" height="300" alt="子どもパソコン講座開講！詳しくはこちらから" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/gakuwari.php"><img src="../images/img-main07.jpg" width="985" height="300" alt="小学生から大学生までお得に学べる学割制度" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/senior.php"><img src="../images/img-main08.jpg" width="985" height="300" alt="70歳からはシニア割制度" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/sokudoku.php"><img src="../images/img-main06.jpg" width="985" height="300" alt="みんなの速読 無料体験募集中！" class="alpha" /></a></li>
	<?php
	}else{
		//通常
	?>
	<li><a href="/<?=$room[$id][dir]?>/contact.php"><img src="../images/img-main_cp2001-1.jpg" width="985" height="300" alt="新春特別企画！！「最大6,000円OFF」入会キャンペーン実施中！！" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/junior.php"><img src="../images/img-main04.jpg" width="985" height="300" alt="子どもパソコン講座開講！詳しくはこちらから" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/gakuwari.php"><img src="../images/img-main07.jpg" width="985" height="300" alt="小学生から大学生までお得に学べる学割制度" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/certify.php"><img src="../images/img-main01.jpg" width="985" height="300" alt="エクセル・ワード・パワーポイントを仕事で活かす！ビジネス実践講座" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/mos.php"><img src="../images/img-main02.jpg" width="985" height="300" alt="就職・転職を有利に！資格は実力の証！MOS資格取得コース" class="alpha" /></a></li>
	<?php
	}
	?>
      <?php endif; ?>
</ul>
</div>

<div class="main_lft">
<section>
				<div id="locus-area" class="clearfix">
				  <dl class="locus">
					<dt>現在のページ</dt>
					<dd>
					  <ul>
						<li><a href="/">パソコン教室なら「パソコン市民講座」</a> ＞</li>
						<li><a href="/school/<?=$room[$id][pref]?>.php"><?=$room[$id][pref_name]?>のパソコン教室を探す</a> ＞</li>
						<li><?=$room[$id][area]?>のパソコン教室・講座</li>
					  </ul>
					</dd>
				  </dl><!-- /.locus -->
				</div><!-- /#locus-area -->

	<div class="top_lead">
		<p><?=$room[$id][name]?>教室は<?=$room[$id][area]?>に位置するパソコン教室で、<?=$room[$id][area]?>の皆様に支えられながら運営を行っています。<br>初めてパソコンを使う初心者の方から、「仕事に役立てたい」「MOSなどの資格を取得したい」という方までご利用いただけるパソコン教室になります。ぜひ、お気軽に無料体験をご利用下さい！</p>
	</div>
	<div class="course_list">
		<h2 class="tk-kozuka-gothic-pr6n"><span>自分に合った資格・講座を探す</span></h2>
		<div class="inner clearfix">
		<ul>
		<li><a href="/<?=$room[$id][dir]?>/mos.php">
		<dl>
			<dt>Microsoft公認試験で<br class="pc-only">就職＆転職を有利に♪</dt>
			<dd><img src="/course/images/bnr-corse01.jpg" alt="MOS資格対策講座"></dd>
			<dd class="a"><p>MOS資格対策講座</p></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/certify.php">
		<dl>
			<dt>ビジネスシーンに特化した<br class="pc-only">実践的な資格！</dt>
			<dd><img src="/course/images/bnr-corse02.jpg" alt="サーティファイ講座"></dd>
			<dd class="b"><p>サーティファイ講座</p></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/course.php#works">
		<dl>
			<dt>独学で習得<br class="pc-only">されてきた方に最適！</dt>
			<dd><img src="/course/images/bnr-corse03.jpg" alt="今すぐ仕事で役立てたい"></dd>
			<dd class="c"><p>今すぐ仕事で役立てたい</p></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/course.php#lisence">
		<dl>
			<dt>仕事に活かせる！<br class="pc-only">さらにスキルアップ</dt>
			<dd><img src="/course/images/bnr-corse04.jpg" alt="資格を取得したい"></dd>
			<dd class="d"><p>資格を取得したい</p></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/course.php#first">
		<dl>
			<dt>パソコンを使ったことがない<br class="pc-only">超初心者も大歓迎！</dt>
			<dd><img src="/course/images/bnr-corse05.jpg" alt="基本操作を覚えたい"></dd>
			<dd class="e"><p>基本操作を覚えたい</p></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/course.php#tb-smp">
			<dl>
			<dt>家でも外でもシーンに<br class="pc-only">合わせて便利に使おう！</dt>
			<dd><img src="/course/images/bnr-corse06.jpg" width="200" height="114" alt="タブレット・スマホ"></dd>
			<dd class="f"><p>タブレット・スマホ</p></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/course.php#net">
			<dl>
			<dt>インターネットを使って<br class="pc-only">便利に生活しよう</dt>
			<dd><img src="/course/images/bnr-corse07.jpg" alt="インターネットをしたい"></dd>
			<dd class="g"><p>インターネットをしたい</p></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/course.php#hobby">
			<dl>
			<dt>パソコンで、趣味の世界が<br class="pc-only">どんどん広がる♪</dt>
			<dd><img src="/course/images/bnr-corse08.jpg" alt="趣味で楽しみたい"></dd>
			<dd class="h"><p>趣味で楽しみたい</p></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/junior.php">
		<dl>
			<dt>タッチタイピングを取得して<br class="pc-only">差をつけよう！</dt>
			<dd><img src="/course/images/bnr-corse09.jpg" alt="小中学生のPC学習"></dd>
			<dd class="i"><p>小中学生のPC学習</p></dd>
			</dl>
			</a></li>
<?php
if( $room[$id][spp] == "1" ) {
//SPP実施校
?>
<li class="bnr_l pc-only"><a href="https://www.star-programming-school.com/personal/" target="_blank"><img src="../images/bnr-course_spp.png" width="703" height="194" alt="スタープログラミングパーソナル"></a></li>
		</ul>
		</div>
	</div>
	<div class="bnr_740 sp-only"><a href="https://www.star-programming-school.com/personal/" target="_blank"><img src="../images/bnr-course_spp_sp.png" width="100%" alt="スタープログラミングパーソナル"></a></div>
<?php
}elseif( $room[$id][spp] == "0" ) {
//SPP未実施校
?>
<li class="bnr_l pc-only"><a href="http://www.star-programming-school.com/" target="_blank">
			<img src="../images/bnr-course_sps_pc.png" width="703" uheight="194" alt="スタープログラミングスクール"></a></li>
		</ul>
		</div>
	</div>
	<div class="bnr_740 sp-only"><a href="http://www.star-programming-school.com/" target="_blank"><img src="../images/bnr-course_sps_sp.png" alt="2020年 プログラミング教育必修化！STAR Programming SCHOOL"></a></div>
<?php
}
?>	
	</section>

<section>
	<div class="osusume_list">
		<h2 class="tk-kozuka-gothic-pr6n"><span>パソコン市民講座のココがおすすめ！</span></h2>
		<div class="inner">
		<div class="box_a clearfix">
		<ul>
		<li><a href="/<?=$room[$id][dir]?>/about.php#point1">
		<dl>
			<dt class="u-center"><img src="../images/img-osusume01.png" width="125" height="90" alt="個別学習"></dt>
			<dd><p><b>自分のペースで学べる</b><br>
				パソコン市民講座の「個別学習」は初心者の方も、資格取得を目指す方も自分のペースで学習いただけます。分かりやすい映像授業に加え、教室インストラクターが皆さんの質問に丁寧にお答えします。おひとりお一人の学習進度や理解度を確認し、自立してパソコンを使いこなしていただくための各種サポートを行います。</p></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/about.php#point4">
		<dl>
			<dt class="u-center"><img src="../images/img-osusume02.png" width="125" height="90" alt="自宅学習"></dt>
			<dd><p><b>無料映像配信で自宅でも復習！</b><br>
				パソコンスクール業界初！教室でご覧いただく映像教材が、ご自宅でも視聴できる「映像配信サービス」を導入！教室で受講いただいた講座を専用の学習サイトから、この「映像配信サービス」を利用して、自宅や外出先で繰り返し復習いただけます。「映像配信サービス」を利用すれば、学習内容をしっかりと身に付けることができます！</p></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/about.php#point2">
		<dl>
			<dt class="u-center"><img src="../images/img-osusume03.png" width="125" height="90" alt="時間を選べる"></dt>
			<dd><p><b>受講するタイミングはあなたに合わせて</b><br>
				予定は毎月変わるもの。受講する曜日・時間帯は、教室の開講時間内で自由に設定いただけます。また教室はショッピングセンター内にあるので、買い物ついでや仕事帰りなど、慣れ親しんだ通いやすい環境です。ご自分のライフスタイルに合わせて無理なく学べる受システムにご好評をいただいております。</p></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/about.php#point5">
		<dl>
			<dt class="u-center"><img src="../images/img-osusume04.png" width="125" height="90" alt="指導実績"></dt>
			<dd><p><b>全国120教室 16年間で54万人！</b><br>
				54万人以上の方々への「豊富な指導実績」を誇ります！あらゆる世代の方々にITスキルを身に付けていただき、便利で豊かな生活を送っていただくことを目指しております。これまで蓄積してきたノウハウをもとに、パソコン機器等を自立して操作できる方をお一人でも多く輩出し、これからも「できた！」「楽しい！」という喜びの声を増やしてまいります。</p></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/about.php#point3">
		<dl>
			<dt class="u-center"><img src="../images/img-osusume05.png" width="125" height="90" alt="月謝制"></dt>
			<dd><p><b>月謝制だから続けやすい（1時間1500円）</b><br>
				受講料は、1時間あたり1,500円（税別）の毎月定額支払制となっていますので、計画的に学習を進めることができます。また800時間以上の豊富な講座の中から、インストラクターが個々に合わせたオリジナルカリキュラムをご提案いたします。パソコン市民講座はお一人でパソコン等の操作ができるようになる「自立」にこだわるパソコン教室です。 （入会金、月会費、テキスト教材費が別途必要です）</p></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/about.php#point6">
		<dl>
			<dt class="u-center"><img src="../images/img-osusume06.png" width="125" height="90" alt="電話サポート"></dt>
			<dd><p><b>ご自宅でのトラブルも無料で安心</b><br>
				パソコン市民講座の受講生の皆様には、ご自宅でのトラブルにも無料で電話対応を行う「パソコンサポートサービス」をご利用いただくことができます。パソコンやiPad・iPhoneに関するトラブル、周辺機器のトラブルにも対応いたします。機器関連でわからないことがあった場合でもご自宅から専用の電話番号へお電話いただければ、専門のスタッフが安心のサポートを行います。</p></dd>
			</dl>
			</a></li>
		</ul>
		</div>
		</div>
		
		
		<div class="p-top5__block2">
			<div class="c-btn1 u-center u-mt20 u-mb40">
				<a href="/<?=$room[$id][dir]?>/about.php#point1"><span>パソコン市民講座が選ばれる理由は<br class="sp-only" />まだまだあります！</span></a>
			</div>
		</div><!-- /.p-top5__block2 -->



<div id="ft_tel_box" class="sp-only">
<div id="ft_tel"><?=$room[$id][phone]?></div>
	<div id="ft_reception">受付時間 / 
	<a href="/<?=$room[$id][dir]?>/about.php">営業時間はこちら</a>
	</div>
</div>

	<ul class="inq_btn sp-only">
		<li class="inq_taiken"><a href="/<?=$room[$id][dir]?>/contact.php"><img src="../images/btn-inq_taiken_l.png" width="249" height="92" alt="無料体験予約"></a></li>
		<li class="inq_shiryo"><a href="/<?=$room[$id][dir]?>/doc_contact.php"><img src="../images/btn-inq_shiryo_l.png" width="240" height="48" alt="資料請求"></a></li>
	</ul>

	</div>

	</section>

      <?php if (date("Ymd") >= 20200126) : ?> <!-- 表示するまでの期間をyyyymmddで記載　-->
<?php
if ($id == "1076000" ) {
	//けやき
?>
<?php
}else{
	//通常
?>
<section>
	<div class="room_info">
		<h2 class="tk-kozuka-gothic-pr6n"><span><?=$room[$id][name]?>教室からのお知らせ</span></h2>
		<div class="inner">
<div class="cp_box">
<input id="cp01" type="checkbox">
<label for="cp01"></label>
<div class="cp_container">
<?php
if ($id == "6015122" ) {
	//ならファミリー
?>
		<div class="box_a clearfix">
		<div class="room_info_lft">
		<dl>
			<dt><img src="../images/narafa.jpg" width="180" alt="ならファミリー教室へようこそ！"></dt>
			<dd><div class="inst_info"><a href="/<?=$room[$id][dir]?>/instructor.php">インストラクター情報</a></div></dd>
		</dl>
		</div>
		<div class="room_info_rgt">
		<dl>
			<dt class="tk-kozuka-gothic-pr6n">★ならファミリー教室は地域の皆様のお役に立てるPC教室を目指しています。★</dt>
			<dd><p>当教室は、奈良の皆さんの集まるならファミリー専門店街の５階、郵便局のお隣にあります。<br>一度は前を通りかかった事がある方も多いのではないでしょうか？</p>
				<p>教室に問い合わせて下さる方の多くが、<strong>「前を通りかかって、ずっと気になっていたが、なかなか踏み込む勇気が出なかった」</strong>とお話し下さいます。<br>パソコン教室って、パソコンを使ったことがない方や苦手意識がある方にとっては、敷居が高く感じられるのかもしれませんね。でも、安心してください。<br>今通われている多くの生徒さんが、そう言いながらも勇気を持って一歩を踏み出された方々です。</p>
				<p>☆受講生の皆さんは　奈良市、生駒市、大和郡山市、天理市、また京都側では木津川市、精華町等から通われています。ターミナル駅ですので、京都市内や大阪市内にお勤め、または通学している方も多数おられます。</p>
				<p>☆年齢層は、小学校１年生から御年90歳の方まで幅広く、各年代の方々がまんべんなく在籍されています。</p>
				<p><strong>小中学生</strong><br>Jrタイピング、プログラミング、ワード、エクセル</p>
				<p><strong>10代、20代</strong><br>ＭＯＳ、サーティファイ等資格講座</p>
				<p><strong>20代、30代、40代、50代</strong><br>転職/復職の為の資格講座、仕事活用、ＰＴＡ役員対策</p>
				<p><strong>50代、60代、70代、80代</strong><br>自治会対策、趣味の為のワード、エクセル、インターネット、写真の取り込み、編集など。iPad/iPhone</p>
				<p>☆最近の傾向として、若い世代の転職に向けての資格対策、お仕事の第一線で活躍されている40，50代は女性男性問わず、自立してPCで作業ができるように基本から学ばれて資格対策に進まれる方、シニアで、もうすぐ回ってくる自治会の役員のため、iPhoneを買ったから使い方を教えてほしい、と目的は様々ですが、通ってよかった！という声をたくさんいただいています。<br>＊【受講生さんたちの声】は、この記事の下にあります。</p>
				<p>アクセスも大変よく、大和西大寺駅から、徒歩1分のならファミリー専門店内。通勤、通学、お買い物の途中でも、無料体験にご参加ください。<br>ご予約、お待ちしております！！</p></dd>
		</dl>
		</div>
		</div>
<?php
}
?>
		<div class="box_a clearfix">
		<div class="room_info_lft">
		<dl>
			<dt><a href="../images/img-taiken.jpg" target="_blank"><img src="../images/img-taiken.jpg" width="180" alt="「無料体験」随時実施中！"></a></dt>
			<dd><div class="inst_info"><a href="/<?=$room[$id][dir]?>/instructor.php">インストラクター情報</a></div></dd>
		</dl>
		</div>
		<div class="room_info_rgt">
		<dl>
			<dt class="tk-kozuka-gothic-pr6n">まずはお試し！「無料体験」随時実施中！</dt>
			<dd><p>「やってみたい」が「できた！」に変わる！幅広い年齢層の方々が楽しく学ばれています。</p>
			<p>パソコン市民講座 <?=$room[$id][name]?>教室で学ばれる皆さんは、人それぞれに様々な目標を持って学んでいらっしゃいます。<br>きっかけは「やってみたい！」という気持ちから、まずは無料体験にお申し込みすることです！あなたの「やってみたい」を「できた！」に変えましょう！<?=$room[$id][name]?>教室のインストラクターがあなたに合わせたカリキュラムをご提案させていただきます。</p>
			<p>初めてパソコンを学ばれる方はもちろん、普段使っているけれどもう一歩使いこなせるようになりたい方にも、あなたに合った様々なご提案をさせていただきます。</p>
			<p>オフィスで活躍するパソコンスキルを身に付けておけば、仕事で有利に！<br>あなたの仕事が10倍早くなる！あなた自身の働き方改革を実現してみませんか？<br>ビジネススキルが向上できる、ビジネス実践講座や資格対策講座も、<?=$room[$id][name]?>教室のインストラクターが安心のサポート体制であなたをバックアップいたします！</p>
			<p><strong>「学割制度」</strong>もご用意していますので、学校でパソコンを使う必要がある学生の皆さんも、お得な学割料金で受講していただけます。</p>
			<p>新たな趣味を始めたい方には、写真をピックアップした新講座「デジタル写真マスター講座」が大人気です！<br>プロの写真家によるワンランク上の写真撮影術が学べる内容や、撮った写真を活用してパソコンで編集する方法など、写真をとことん楽しめる講座となっています！<br><?=$room[$id][name]?>教室のインストラクターがオススメするのは、この写真講座で学習した内容を活用してフォトブックを作成！撮りためた写真を様々な形でお友達にプレゼントもできますよ！</p>
			<p>趣味で楽しめるパソコン講座・iPad/iPhone講座も充実！デジカメで撮影した写真と、ワードやパワーポイントを組み合わせれば、あなたのオリジナルのフォトブックや作品集も作れます！<br>また、「脳トレ」を目的にした新講座も好評開講中！楽しく学びながら「頭の体操」になる「脳トレおとなプログラミング講座」がオススメ！<br>是非この機会に新しい学びを始めましょう！</p>
			<p>パソコンだけじゃなくiPadやiPhoneといったタブレットやスマートフォンも使いこなせるようになる講座もご用意しています！</p>
			<p>まずは、お気軽にお問い合わせください。<?=$room[$id][name]?>教室インストラクター一同、皆様からのお電話、ご来校を心よりお待ち申し上げております。</p></dd>
		</dl>
		</div>
		</div>
</div></div>
		</div>
	</div>
	</section>
<?php
}
?>
      <?php endif; ?>

	<?php if (date("Ymd") <= 20200125) : ?> <!-- 表示するまでの期間をyyyymmddで記載　-->
<?php
if ($id == "1076000" ) {
	//けやき
?>
<?php
} elseif ($id == "60150155" ) {
//大曽根
?>
<section>
	<div class="room_info">
		<h2 class="tk-kozuka-gothic-pr6n"><span><?=$room[$id][name]?>教室からのお知らせ</span></h2>
		<div class="inner">
<div class="cp_box">
<input id="cp01" type="checkbox">
<label for="cp01"></label>
<div class="cp_container">
		<div class="box_a clearfix">
		<div class="room_info_lft">
		<dl>
			<dt><a href="../images/202001cp_ozone.jpg" target="_blank"><img src="../images/202001cp_ozone.jpg" width="180" alt="メッツ大曽根教室 1月6日（月）新規開校！"></a></dt>
			<dd><div class="inst_info"><a href="/<?=$room[$id][dir]?>/instructor.php">インストラクター情報</a></div></dd>
		</dl>
		</div>
		<div class="room_info_rgt">
		<dl>
			<dt class="tk-kozuka-gothic-pr6n">まずはお試し！「無料体験」随時実施中！</dt>
			<dd><p>「やってみたい」が「できた！」に変わる！幅広い年齢層の方々が楽しく学ばれています。</p>
			<p>パソコン市民講座 <?=$room[$id][name]?>教室で学ばれる皆さんは、人それぞれに様々な目標を持って学んでいらっしゃいます。<br>きっかけは「やってみたい！」という気持ちから、まずは無料体験にお申し込みすることです！あなたの「やってみたい」を「できた！」に変えましょう！<?=$room[$id][name]?>教室のインストラクターがあなたに合わせたカリキュラムをご提案させていただきます。</p>
			<p>初めてパソコンを学ばれる方はもちろん、普段使っているけれどもう一歩使いこなせるようになりたい方にも、あなたに合った様々なご提案をさせていただきます。</p>
			<p>オフィスで活躍するパソコンスキルを身に付けておけば、仕事で有利に！<br>あなたの仕事が10倍早くなる！あなた自身の働き方改革を実現してみませんか？<br>ビジネススキルが向上できる、ビジネス実践講座や資格対策講座も、<?=$room[$id][name]?>教室のインストラクターが安心のサポート体制であなたをバックアップいたします！</p>
			<p><strong>「学割制度」</strong>もご用意していますので、学校でパソコンを使う必要がある学生の皆さんも、お得な学割料金で受講していただけます。</p>
			<p>新たな趣味を始めたい方には、写真をピックアップした新講座「デジタル写真マスター講座」が大人気です！<br>プロの写真家によるワンランク上の写真撮影術が学べる内容や、撮った写真を活用してパソコンで編集する方法など、写真をとことん楽しめる講座となっています！<br><?=$room[$id][name]?>教室のインストラクターがオススメするのは、この写真講座で学習した内容を活用してフォトブックを作成！撮りためた写真を様々な形でお友達にプレゼントもできますよ！</p>
			<p>趣味で楽しめるパソコン講座・iPad/iPhone講座も充実！デジカメで撮影した写真と、ワードやパワーポイントを組み合わせれば、あなたのオリジナルのフォトブックや作品集も作れます！<br>また、「脳トレ」を目的にした新講座も好評開講中！楽しく学びながら「頭の体操」になる「脳トレおとなプログラミング講座」がオススメ！<br>是非この機会に新しい学びを始めましょう！</p>
			<p>パソコンだけじゃなくiPadやiPhoneといったタブレットやスマートフォンも使いこなせるようになる講座もご用意しています！</p>
			<p>まずは、お気軽にお問い合わせください。<?=$room[$id][name]?>教室インストラクター一同、皆様からのお電話、ご来校を心よりお待ち申し上げております。</p></dd>
		</dl>
		</div>
		</div>
</div></div>
		</div>
	</div>
	</section>
<?php
}else{
	//通常
?>
<section>
	<div class="room_info">
		<h2 class="tk-kozuka-gothic-pr6n"><span><?=$room[$id][name]?>教室からのお知らせ</span></h2>
		<div class="inner">
<div class="cp_box">
<input id="cp01" type="checkbox">
<label for="cp01"></label>
<div class="cp_container">
<?php
if ($id == "6015122" ) {
	//ならファミリー
?>
		<div class="box_a clearfix">
		<div class="room_info_lft">
		<dl>
			<dt><img src="../images/narafa.jpg" width="180" alt="ならファミリー教室へようこそ！"></dt>
			<dd><div class="inst_info"><a href="/<?=$room[$id][dir]?>/instructor.php">インストラクター情報</a></div></dd>
		</dl>
		</div>
		<div class="room_info_rgt">
		<dl>
			<dt class="tk-kozuka-gothic-pr6n">★ならファミリー教室は地域の皆様のお役に立てるPC教室を目指しています。★</dt>
			<dd><p>当教室は、奈良の皆さんの集まるならファミリー専門店街の５階、郵便局のお隣にあります。<br>一度は前を通りかかった事がある方も多いのではないでしょうか？</p>
				<p>教室に問い合わせて下さる方の多くが、<strong>「前を通りかかって、ずっと気になっていたが、なかなか踏み込む勇気が出なかった」</strong>とお話し下さいます。<br>パソコン教室って、パソコンを使ったことがない方や苦手意識がある方にとっては、敷居が高く感じられるのかもしれませんね。でも、安心してください。<br>今通われている多くの生徒さんが、そう言いながらも勇気を持って一歩を踏み出された方々です。</p>
				<p>☆受講生の皆さんは　奈良市、生駒市、大和郡山市、天理市、また京都側では木津川市、精華町等から通われています。ターミナル駅ですので、京都市内や大阪市内にお勤め、または通学している方も多数おられます。</p>
				<p>☆年齢層は、小学校１年生から御年90歳の方まで幅広く、各年代の方々がまんべんなく在籍されています。</p>
				<p><strong>小中学生</strong><br>Jrタイピング、プログラミング、ワード、エクセル</p>
				<p><strong>10代、20代</strong><br>ＭＯＳ、サーティファイ等資格講座</p>
				<p><strong>20代、30代、40代、50代</strong><br>転職/復職の為の資格講座、仕事活用、ＰＴＡ役員対策</p>
				<p><strong>50代、60代、70代、80代</strong><br>自治会対策、趣味の為のワード、エクセル、インターネット、写真の取り込み、編集など。iPad/iPhone</p>
				<p>☆最近の傾向として、若い世代の転職に向けての資格対策、お仕事の第一線で活躍されている40，50代は女性男性問わず、自立してPCで作業ができるように基本から学ばれて資格対策に進まれる方、シニアで、もうすぐ回ってくる自治会の役員のため、iPhoneを買ったから使い方を教えてほしい、と目的は様々ですが、通ってよかった！という声をたくさんいただいています。<br>＊【受講生さんたちの声】は、この記事の下にあります。</p>
				<p>アクセスも大変よく、大和西大寺駅から、徒歩1分のならファミリー専門店内。通勤、通学、お買い物の途中でも、無料体験にご参加ください。<br>ご予約、お待ちしております！！</p></dd>
		</dl>
		</div>
		</div>
<?php
}
?>
		<div class="box_a clearfix">
		<div class="room_info_lft">
		<dl>
			<dt><a href="../images/202001cp1.jpg" target="_blank"><img src="../images/202001cp1.jpg" width="180" alt="仕事や学校ですぐに役立つパソコンスキルを身に付けよう！"></a>
<?php
if( $room[$id][sps] == "1" ) {
//SPS実施校
?>
				<!--<a href="../images/201910cp1_ura_sps.pdf" target="_blank"><img src="../images/201910cp1_ura_sps.jpg" width="180" alt="全ての世代に役立つパソコンスキル"></a>-->
<?php
}elseif( $room[$id][sps] == "0" ) {
//SPS未実施校
?>
				<!--<a href="../images/201910cp1_ura.pdf" target="_blank"><img src="../images/201910cp1_ura.jpg" width="180" alt="全ての世代に役立つパソコンスキル"></a>-->
<?php
}
?>
				</dt>
			<dd><div class="inst_info"><a href="/<?=$room[$id][dir]?>/instructor.php">インストラクター情報</a></div></dd>
		</dl>
		</div>
		<div class="room_info_rgt">
		<dl>
			<dt class="tk-kozuka-gothic-pr6n">最大6,000円お得！入会キャンペーン！！</dt>
			<dd><p>「やってみたい」が「できた！」に変わる！幅広い年齢層の方々が楽しく学ばれています。</p>
			<p>パソコン市民講座 <?=$room[$id][name]?>教室（<?=$room[$id][area]?>）では、<strong>新春特別企画「最大6,000円OFF」入会キャンペーン！！</strong>を<strong>1月25日（土）まで実施中</strong>です！この機会にぜひお申込みください！</p>
			<p>パソコン市民講座 <?=$room[$id][name]?>教室（<?=$room[$id][area]?>）で学ばれる皆さんは、人それぞれに様々な目標を持って学んでいらっしゃいます。<br>きっかけは「やってみたい！」という気持ちから、まずは無料体験にお申し込みすることです！あなたの「やってみたい」を「できた！」に変えましょう！<?=$room[$id][name]?>教室（<?=$room[$id][area]?>）のインストラクターがあなたに合わせたカリキュラムをご提案させていただきます。</p>
			<p>初めてパソコンを学ばれる方はもちろん、普段使っているけれどもう一歩使いこなせるようになりたい方にも、あなたに合った様々なご提案をさせていただきます。</p>
			<p>転職・就職準備に「履歴書に書ける資格を取ろう！」<br><strong>「Officeを使いこなせる高度なPCスキルを持った人材が欲しい！」と答えた企業の採用担当者は54％</strong>にも上るといったアンケート結果が出ています。つまり、オフィスで活躍するパソコンスキルを身に付けておけば、仕事で有利に！<br>あなたの仕事が10倍早くなる！あなた自身の働き方改革を実現してみませんか？<br>ビジネススキルが向上できる、ビジネス実践講座や資格対策講座も、<?=$room[$id][name]?>教室のインストラクターが安心のサポート体制であなたをバックアップいたします！</p>
			<p><strong>「学割制度」</strong>もご用意していますので、学校でパソコンを使う必要がある学生の皆さんも、お得な学割料金で受講していただけます。</p>
			<p>新たな趣味を始めたい方には、写真をピックアップした新講座「デジタル写真マスター講座」が大人気です！<br>プロの写真家によるワンランク上の写真撮影術が学べる内容や、撮った写真を活用してパソコンで編集する方法など、写真をとことん楽しめる講座となっています！<br><?=$room[$id][name]?>教室のインストラクターがオススメするのは、この写真講座で学習した内容を活用してフォトブックを作成！撮りためた写真を様々な形でお友達にプレゼントもできますよ！</p>
			<p>趣味で楽しめるパソコン講座・iPad/iPhone講座も充実！デジカメで撮影した写真と、ワードやパワーポイントを組み合わせれば、あなたのオリジナルのフォトブックや作品集も作れます！<br>また、「脳トレ」を目的にした新講座も好評開講中！楽しく学びながら「頭の体操」になる「脳トレおとなプログラミング講座」がオススメ！<br>是非この機会に新しい学びを始めましょう！</p>
			<p>パソコンだけじゃなくiPadやiPhoneといったタブレットやスマートフォンも使いこなせるようになる講座もご用意しています！</p>
			<p>まずは、お気軽にお問い合わせください。<?=$room[$id][name]?>教室インストラクター一同、皆様からのお電話、ご来校を心よりお待ち申し上げております。</p></dd>
		</dl>
		</div>
		</div>
		<div class="box_a clearfix">
		<div class="room_info_lft">
		<dl>
			<dt><a href="../images/2019winter.jpg" target="_blank"><img src="../images/2019winter.jpg" width="180" alt="小学生から始めて、将来に備えよう！『小中学生対象 冬期講習』受付中！"></a></dt>
		</dl>
		</div>
		<div class="room_info_rgt">
		<dl>
			<dt class="tk-kozuka-gothic-pr6n">タイピングスキルを習得しよう！！</dt>
			<dd><p>小学生から始めて、将来に備えよう！<strong>『小中学生対象 冬期講習』受付中！</strong></p>
			<p>パソコン市民講座 <?=$room[$id][name]?>教室ではこの冬も、<a href="junior.php">『小中学生のパソコン学習』</a>をサポート！2020年からのプログラミング必修化や、学生のパソコンスキルが必須になってくるであろうこれからの教育に必要となる<strong>「タイピング」スキルの習得をサポート</strong>していきます！！</p>
			<p>教室では、基礎的なタイピングスキルの習得をサポートする教材とタイピング練習システムを活用し、皆さんの学習をバックアップしていきます。</p>
			<p>また、高校生・大学生の方には<a href="gakuwari.php">「学割制度」</a>でお得に教室へ通っていただける料金プランをご用意しています。</p>
			<p>まずは、お気軽にお問い合わせください。<?=$room[$id][name]?>教室インストラクター一同、皆様からのお電話、ご来校を心よりお待ち申し上げております。</p></dd>
		</dl>
		</div>
		</div>
</div></div>
		</div>
	</div>
	</section>
<?php
}
?>
      <?php endif; ?>

<section>
	<div class="voice_list">
<?php
if ($id == "1076000") {
?>
		<h2 class="tk-kozuka-gothic-pr6n"><span>全国の受講生の声</span></h2>
<?php
}else{
?>
		<h2 class="tk-kozuka-gothic-pr6n"><span><?=$room[$id][name]?>教室の受講生の声</span></h2>
<?php
}
?>
		<div class="inner">
		<ul class="clearfix">
<?php
$voice_id = 0;
foreach( $ary as $key => $value  ) {
//繰り返し回数による判定
if ( $voice_id >= 4){
  break;  //4に達したら終了
} else {
	if( $value[00]  ) {
		$img = "/" . $room[$id][dir] . "/images/" . $value[00] . ".jpg";
	} else {
		$img = "/images/nopic.png";
	}
}
$voice_id++ ;
?>
			<li class="li-top">
			<h3 class="bubble"><span><?=$value[02]?></span></h3>
			<dl>
				<dt><img class="alpha" src="<?=$img?>" width="148" alt="<?=$value[01]?>" /></dt>
				<dd><p><?=$value[05]?></p>
				<div class="more"><a href="/<?=$room[$id][dir]?>/voice.php#voice<?=$voice_id?>">続きを見る</a></div></dd>
			</dl>
			</li>
<?php
}
?>
		</ul>
		<p class="voice_all"><a href="/<?=$room[$id][dir]?>/voice.php">受講生の声をもっと見る</a></p>
	</div>
	</div>
	</section>
	</div>

<div class="main_rgt">
	<ul class="inq_btn">
		<li class="inq_taiken"><a href="/<?=$room[$id][dir]?>/contact.php"><img src="../images/btn-inq_taiken_l.png" width="249" height="92" alt="無料体験予約"></a></li>
		<li class="inq_shiryo"><a href="/<?=$room[$id][dir]?>/doc_contact.php"><img src="../images/btn-inq_shiryo_l.png" width="240" height="48" alt="資料請求"></a></li>
	</ul>

	<ul class="map">
	<li>
	<dl>
		<dt class="tk-kozuka-gothic-pr6n"><span>教室情報</span></dt>
		<dd>
			<div class="googlemap pc-only"><iframe src="https://www.google.com/maps/embed?<?=$room[$id][g_map]?>" width="232" height="190" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			<div class="googlemap sp-only"><iframe src="https://www.google.com/maps/embed?<?=$room[$id][g_map]?>" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			<!--<div id="gmap" style="margin-bottom: 5px;width:232px; height:150px;"></div>-->
			<p>【住　所】<br><?=$room[$id][ad1]?><br><?=$room[$id][ad2]?><br><?=$room[$id][ad3]?></p>
			<p>【アクセス】<br><?=$room[$id][access]?></p>
			<p>【開講時間】<br><?=$room[$id][open]?></p>
			<p class="link_gmap"><a href="/<?=$room[$id][dir]?>/about.php">開講時間・アクセス</a></p> 
		</dd>
	</dl>
	</li>
	</ul>

	<ul class="pass">
	<li>
	<dl>
		<dt class="tk-kozuka-gothic-pr6n"><span>対策講座実施資格</span></dt>
<?php
if( $room[$id][mos] == "1" ) {
//MOS認定校
?>
		<dd>
			当教室は、MOS試験実施校です。<br>
		<a href="/<?=$room[$id][dir]?>/mos.php"><img src="../images/bnr-mos_atc.png" width="215" height="100" alt="MOS試験実施校"></a>
		</dd>
<?php
}elseif( $room[$id][mos] == "0" ) {
//MOS対応校
?>
		<dd>
		<a href="/<?=$room[$id][dir]?>/mos.php"><img src="../images/bnr-mos_logo.png" width="215" height="100" alt="MOS対策講座実施校"></a>
		</dd>
<?php
}
?>
		<dd>
		<a href="/<?=$room[$id][dir]?>/certify.php"><img src="../images/bnr-certify_logo.png" width="215" height="100" alt="サーティファイ試験校"></a>
		</dd>
	</dl>
	</li>
	</ul>

	<ul class="pass">
	<li>
	<dl>
		<dt class="tk-kozuka-gothic-pr6n"><span>合格者の声</span></dt>
		<dd>
			<div class="pass_hd">
				<img class="pc-only" src="../images/ttl-pass.png" width="215" alt="市民講座に通って「できた！」の声が続々！" />
				<img class="sp-only" src="../images/ttl-pass_sp.jpg" width="300" height="107" alt="市民講座に通って「できた！」の声が続々！" />
			</div>
<?php
if ($id == "1001126") {
?>
			<div class="pass_img pc-only"><img  src="../<?=$room[$id][dir]?>/images/501738.jpg" width="215" alt="市民講座に通って「できた！」の声が続々！" /></div>
			<p class="pc-only">事務の仕事に役立てるよう、毎週末に通い続けています。パソコン操作は着実に身に付け、今では楽しく扱えています。お陰様で、サーティファイExcel表計算処理技能認定試験２級・タイピングコンテストでは資格初段まで取得することができました。次は MOS Word2013の試験に挑戦します。知識を蓄えて、より幅広くパソコンを使いこなせるように今後も努力し続けていきます。</p>
<?php
}elseif($id == "6015043") {
?>
			<div class="pass_img pc-only"><img  src="../<?=$room[$id][dir]?>/images/482833.jpg" width="215" alt="市民講座に通って「できた！」の声が続々！" /></div>
			<p class="pc-only">サーティファイExcel3級を受ける際、先生からとても丁寧で親切なご指導があったおかげで安心して受験でき、合格することもできました。この経験から、再入会し、さらにブラッシュアップするため、サーティファイPowerPointとWordに挑戦したいと思います。資格を取る目的もありますが、先生方とのおしゃべりや生き生きとした笑顔を見るために教室へ来る楽しみもあります！</p>
<?php
}else{
?>
			<div class="pass_img pc-only"><img src="../images/img-pass01.png" width="215" alt="市民講座に通って「できた！」の声が続々！" /></div>
			<p class="pc-only">昔からパソコンやデジタルデバイスに対して苦手意識を持っていました。とにかくパソコンの画面を見続けることが苦痛でした。そんな私が2015年8月から市民講座に通いはじめて12月にExcel試験に合格して、3月にWord試験にチャレンジしようとしています。操作を覚えていくうちにパソコンへの苦手意識がなくなりいつの間にか楽しくなっていました。将来は身につけたパソコンスキルを活かして起業しようと思っています。</p>
<?php
}
?>
			<div class="more"><a href="/voice/works.php" target="_blank">続きを見る</a></div>
		</dd>
	</dl>
	</li>
	</ul>


<!--<ul class="one_point">
	<li>
	<dl>
		<dt class="tk-kozuka-gothic-pr6n"><span>タメになる！おすすめ<br />ワンポイントレッスン動画</span></dt>
		<dd>
			<div class="mov"><iframe width="218" height="122" src="https://www.youtube.com/embed/UQX0MpVgc7k" frameborder="0" allowfullscreen></iframe></div>
			<p class="mov_ttl">「セルの書式を置換しよう」</p>
			<p class="date">2016/11/11 更新</p>
			<div class="more"><a href="">過去のワンポイントレッスン</a></div>
		</dd>
	</dl>
	</li>
	</ul>-->

	<ul class="premiere">
	<li>
	<dl>
		<dt class="tk-kozuka-gothic-pr6n"><span>プレミア倶楽部</span></dt>
		<dd>
			<div class="pc-only"><img src="../images/img-premiere.png" width="215" alt="プレミア倶楽部のご案内" /></div>
			<p class="pc-only">市民講座だけのお得いっぱいな会員システム</p>
			<div class="sp-only"><img src="/common/img/top/top7_bnr2.jpg" width="322" height="147" alt="プレミア倶楽部のご案内" /></div>
			<div class="more"><a href="/premiere.php" target="_blank">詳しくはコチラ</a></div>
		</dd>
	</dl>
	</li>
	</ul>

<?php
if ($id !== "1076000") {
?>
	<ul class="blog">
	<li>
	<dl>
		<dt class="tk-kozuka-gothic-pr6n"><span>教室ブログ</span></dt>
		<dd>
			<div><img class="pc-only" src="../images/img-blog.png" width="215" alt="<?=$room[$id][name]?>教室の教室ブログ紹介" />
			<img class="sp-only" src="/common/img/top/sp/top4_bnr1.png" width="300" height="107" alt="" /></div>
					<p><a href="http://www.4353p-club.com/blog/?member_id=<?=$room[$id][blog]?>" target="_blank" rel="nofollow"><?=$room[$id][name]?>教室の<br>教室ブログ紹介</a></p>
		</dd>
	</dl>
	</li>
	</ul>
	<a href="https://www.cheery.co.jp/saiyou/" target="_blank"><img class="pc-only" src="../images/bnr-inst_saiyou.png" width="240" alt="インストラクター募集中" />
		<img class="sp-only" src="../images/bnr-inst_saiyou_sp.png" width="100%" alt="インストラクター募集中" /></a>
	<a href="https://www.pc4353.net/corporate_customer/" target="_blank"><img class="pc-only" src="../images/bnr-houjin.png" width="240" alt="法人様向けパソコン研修" /><img class="sp-only" src="../images/bnr-houjin_sp.png" width="100%" alt="法人様向けパソコン研修" /></a>
<?php
}
?>
	</div>

</div>
</main>
