<main>
<div id="main_contents" class="clearfix">
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
<div class="main_vi">
<ul class="slider">
       <?php if (date("Ymd") <= 20180519) : ?> <!-- 表示するまでの期間をyyyymmddで記載　-->
	<?php
	if ($id == "1001058" ) {
		//川口
	?>
		<li><a href="/<?=$room[$id][dir]?>/contact.php" target="_blank"><img src="../images/img-new_kawaguchi.jpg" width="985" height="300" alt="" class="alpha" /></a></li>
		<li><a href="/<?=$room[$id][dir]?>/contact.php" target="_blank"><img src="../images/img-main_cp1804-kawaguchi2.jpg" width="985" height="300" alt="" class="alpha" /></a></li>
	<?php
	}elseif ($id == "6015130" ) {
		//千里中央
	?>
		<li><a href="/<?=$room[$id][dir]?>/contact.php" target="_blank"><img src="../images/img-new_senrichuou.jpg" width="985" height="300" alt="" class="alpha" /></a></li>
	<?php
	}elseif ($id == "1001006" || $id == "1001116" || $id == "6015116" || $id == "6015128" || $id == "1076000" ) {
		//8H流山・柏・北千里・新茨木・けやき
	?>
		<li><a href="/<?=$room[$id][dir]?>/contact.php" target="_blank"><img src="../images/img-main_cp1805-2.jpg" width="985" height="300" alt="" class="alpha" /></a></li>
	<?php
	}else{
		//通常
	?>
		<li><a href="/<?=$room[$id][dir]?>/contact.php" target="_blank"><img src="../images/img-main_cp1805-1.jpg" width="985" height="300" alt="" class="alpha" /></a></li>
	<?php
	}
	?>
	<li><a href="/<?=$room[$id][dir]?>/certify.php"><img src="../images/img-main01.png" width="985" height="300" alt="エクセル・ワード・パワーポイントを仕事で活かす！ビジネス実践講座" class="alpha" /></a></li>
	<li><a href="/course/d_photo_master.php" target="_blank"><img src="../images/img-main05.jpg" width="985" height="300" alt="デジタル写真マスター講座 写真のすべてが学べる講座が2017年9月スタート！詳しくはこちらから" class="alpha" /></a></li>
	<?php
	if ($id == "1001058" ) {
		//川口
	?>
	<?php
	}else{
		//通常
	?>
	<li><a href="/<?=$room[$id][dir]?>/mos.php"><img src="../images/img-main02.png" width="985" height="300" alt="就職・転職を有利に！資格は実力の証！MOS資格取得コース" class="alpha" /></a></li>
	<?php
	}
	?>
      <?php endif; ?>

     <?php if (date("Ymd") >= 20180520) : ?> <!-- 表示するまでの期間をyyyymmddで記載　-->
	<li><a href="/<?=$room[$id][dir]?>/certify.php"><img src="../images/img-main01.png" width="985" height="300" alt="エクセル・ワード・パワーポイントを仕事で活かす！ビジネス実践講座" class="alpha" /></a></li>
	<li><a href="/course/d_photo_master.php" target="_blank"><img src="../images/img-main05.jpg" width="985" height="300" alt="デジタル写真マスター講座 写真のすべてが学べる講座が2017年9月スタート！詳しくはこちらから" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/mos.php"><img src="../images/img-main02.png" width="985" height="300" alt="就職・転職を有利に！資格は実力の証！MOS資格取得コース" class="alpha" /></a></li>
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
			<dt>資格を取って<br>就職＆転職を有利に♪</dt>
			<dd><img src="../images/bnr-course_mos.png" width="200" height="114" alt="MOS資格対策講座"></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/certify.php">
		<dl>
			<dt>仕事に活かせる！<br>実践力を身につける</dt>
			<dd><img src="../images/bnr-course_certify.png" width="200" height="114" alt="ビジネス実践講座"></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/win10.php">
		<dl>
			<dt>お問合せ急増中！！<br>かんたんWindows10講座</dt>
			<dd><img src="../images/bnr-course_win10.png" width="200" height="114" alt="Windows10講座"></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/course.php#subject3">
		<dl>
			<dt>パソコンで、趣味の世界が<br>どんどん広がる♪</dt>
			<dd><img src="../images/bnr-course_pc.png" width="200" height="114" alt="パソコン趣味講座"></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/tablet.php">
		<dl>
			<dt>初心者でも安心<br>楽しめるタブレット</dt>
			<dd><img src="../images/bnr-course_ipad.png" width="200" height="114" alt="iPad講座"></dd>
			</dl>
			</a></li>
		<li><a href="/course/brain_training.php" target="_blank">
		<dl>
			<dt>脳の機能を活性化！<br>自由な発想で脳トレ！</dt>
			<dd><img src="../images/bnr-course_brain_tr.png" width="200" height="114" alt="脳トレおとなプログラミング講座"></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/junior.php">
		<dl>
			<dt>プログラミングに必須！<br>タイピングをマスターしよう</dt>
			<dd><img src="../images/bnr-course_junior.png" width="200" height="114" alt="小中学生コース"></dd>
			</dl>
			</a></li>
		<li class="bnr_l"><a href="http://www.star-programming-school.com/" target="_blank"><img src="../images/bnr-course_sps_l.jpg" width="462" height="194" alt="スタープログラミングスクール"></a></li>
		</ul>
		</div>
	</div>
	<div class="bnr_740"><a href="http://www.star-programming-school.com/" target="_blank"><img src="../images/bnr-sps_740.jpg" width="740" height="90" alt="2020年 プログラミング教育必修化！STAR Programming SCHOOL"></a></div>
	</section>

<section>
	<div class="osusume_list">
		<h2 class="tk-kozuka-gothic-pr6n"><span>パソコン市民講座のココがおすすめ！</span></h2>
		<div class="inner">
		<div class="box_a clearfix">
		<ul>
		<li><a href="/<?=$room[$id][dir]?>/about.php#point1">
		<dl>
			<dt><img src="../images/img-osusume01.png" width="125" height="90" alt="個別学習"></dt>
			<dd><p>自分のペースで<br>学べる</p>
				<div class="detail">詳しくはコチラ</div></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/about.php#point4">
		<dl>
			<dt><img src="../images/img-osusume02.png" width="125" height="90" alt="自宅学習"></dt>
			<dd><p>無料映像配信で<br>自宅でも復習！</p>
				<div class="detail">詳しくはコチラ</div></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/about.php#point2">
		<dl>
			<dt><img src="../images/img-osusume03.png" width="125" height="90" alt="時間を選べる"></dt>
			<dd><p>受講する曜日と時間を<br>自由に選べる</p>
				<div class="detail">詳しくはコチラ</div></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/about.php#point5">
		<dl>
			<dt><img src="../images/img-osusume04.png" width="125" height="90" alt="指導実績"></dt>
			<dd><p>全国120教室 15年間で<br>54万人の指導実績！</p>
				<div class="detail">詳しくはコチラ</div></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/about.php#point3">
		<dl>
			<dt><img src="../images/img-osusume05.png" width="125" height="90" alt="月謝制"></dt>
			<dd><p>月謝制だから続けやすい<br>（1時間1500円）</p>
				<div class="detail">詳しくはコチラ</div></dd>
			</dl>
			</a></li>
		<li><a href="/<?=$room[$id][dir]?>/about.php#point6">
		<dl>
			<dt><img src="../images/img-osusume06.png" width="125" height="90" alt="電話サポート"></dt>
			<dd><p>ご自宅でのトラブルも<br>無料で安心</p>
				<div class="detail">詳しくはコチラ</div></dd>
			</dl>
			</a></li>
		</ul>
		</div>
		</div>


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

      <?php if (date("Ymd") <= 20180519) : ?> <!-- 表示するまでの期間をyyyymmddで記載　-->
<?php
if ($id == "1076000" || $id == "6015130" ) {
	//けやき・千里中央
?>
<?php
}elseif ( $id == "1001058" ) {
	//川口
?>
<section>
	<div class="room_info">
		<h2 class="tk-kozuka-gothic-pr6n"><span><?=$room[$id][name]?>教室からのお知らせ</span></h2>
		<div class="inner">
		<div class="box_a clearfix">
		<div class="room_info_lft">
		<dl>
			<dt><a href="../images/201804cp_kawaguchi2.pdf" target="_blank"><img src="../images/201804cp_kawaguchi2.jpg" width="180" alt="「新規開校キャンペーン」実施中！"></a><a href="../images/201804cp1_ura_sps.pdf" target="_blank"><img src="../images/201804cp1_ura_sps.jpg" width="180" alt="全ての世代に役立つパソコンスキル"></a></dt>
			<dd><div class="inst_info"><a href="/<?=$room[$id][dir]?>/instructor.php">インストラクター情報</a></div></dd>
		</dl>
		</div>
		<div class="room_info_rgt">
		<dl>
			<dt class="tk-kozuka-gothic-pr6n">「新規開校キャンペーン」第2弾実施中！</dt>
			<dd><p>「やってみたい」が「できた！」に変わる！幅広い年齢層の方々が楽しく学ばれています。</p>
			<p>4月5日（木）に新規開校のパソコン市民講座 <?=$room[$id][name]?>教室では、<strong>「新規開校キャンペーン」第2弾</strong>を<strong>5月19日（土）まで実施中</strong>です！<br>通常受講料1時間あたり1,500円（税別）のところ、受講スタート初月に限り最大12時間までスタート応援価格1,000円（税別）で受講ができる！<strong>さらに無料体験当日にご入会いただくと入会金が半額</strong>となるお得なキャンペーンです！この機会にぜひお申込みください！</p>
			<p>パソコン市民講座 <?=$room[$id][name]?>教室で学ばれる皆さんは、人それぞれに様々な目標を持って学んでいらっしゃいます。<br>きっかけは「やってみたい！」という気持ちから、まずは無料体験にお申し込みすることです！あなたの「やってみたい」を「できた！」に変えましょう！<?=$room[$id][name]?>教室のインストラクターがあなたに合わせたカリキュラムをご提案させていただきます。</p>
			<p>初めてパソコンを学ばれる方はもちろん、普段使っているけれどもう一歩使いこなせるようになりたい方にも、あなたに合った様々なご提案をさせていただきます。</p>
			<p>オフィスで活躍するパソコンスキルを身に付けておけば、仕事で有利に！<br>あなたの仕事が10倍早くなる！あなた自身の働き方改革を実現してみませんか？<br>ビジネススキルが向上できる、ビジネス実践講座や資格対策講座も、<?=$room[$id][name]?>教室のインストラクターが安心のサポート体制であなたをバックアップいたします！</p>
			<p><strong>「学割制度」</strong>もご用意していますので、学校でパソコンを使う必要がある学生の皆さんも、お得な学割料金で受講していただけます。</p>
			<p>新たな趣味を始めたい方には、写真をピックアップした新講座「デジタル写真マスター講座」が大人気です！<br>プロの写真家によるワンランク上の写真撮影術が学べる内容や、撮った写真を活用してパソコンで編集する方法など、写真をとことん楽しめる講座となっています！<br><?=$room[$id][name]?>教室のインストラクターがオススメするのは、この写真講座で学習した内容を活用してフォトブックを作成！撮りためた写真を様々な形でお友達にプレゼントもできますよ！</p>
			<p>趣味で楽しめるパソコン講座・iPad/iPhone講座も充実！デジカメで撮影した写真と、ワードやパワーポイントを組み合わせれば、あなたのオリジナルのフォトブックや作品集も作れます！<br>また、「脳トレ」を目的にした新講座も好評開講中！楽しく学びながら「頭の体操」になる「脳トレおとなプログラミング講座」がオススメ！<br>是非この機会に新しい学びを始めましょう！</p>
			<p>パソコンだけじゃなくiPadやiPhoneといったタブレットやスマートフォンも使いこなせるようになる講座もご用意しています！</p>
			<p>まずは、お気軽にお問い合わせください。<?=$room[$id][name]?>教室インストラクター一同、皆様からのお電話、ご来校を心よりお待ち申し上げております。</p></dd>
			<dt class="tk-kozuka-gothic-pr6n"><?=$room_info[00]?></dt>
			<dd><?=$room_info[01]?></dd>
		</dl>
		</div>
		</div>
		</div>
	</div>
	</section>
<?php
}elseif ($id == "1001006" || $id == "1001116" || $id == "6015116" || $id == "6015128" ) {
	//8H流山・柏・北千里・新茨木・けやき
?>
<section>
	<div class="room_info">
		<h2 class="tk-kozuka-gothic-pr6n"><span><?=$room[$id][name]?>教室からのお知らせ</span></h2>
		<div class="inner">
	<?php
	if ($id == "6015128" ) {
			//新茨木（SPS告知）
	?>
		<div class="box_a clearfix">
		<div class="room_info_lft">
		<dl>
			<dt><a href="../images/2018ss_sps_<?=$room[$id][dir]?>.pdf" target="_blank"><img src="../images/2018ss_sps_<?=$room[$id][dir]?>.jpg" width="180" alt="「スタープログラミングスクール」無料体験イベント開催！"></a><a href="../images/201801sps_suita_b.jpg" target="_blank"><img src="../images/201801sps_suita_b.jpg" width="180" alt="「スタープログラミングスクール」概要"></a></dt>
		</dl>
		</div>
		<div class="room_info_rgt">
		<dl>
			<dt class="tk-kozuka-gothic-pr6n">「スタープログラミングスクール」<br>授業見学・個別体験　ご予約を随時受付中です！</dt>
			<dd><p>パソコン市民講座 <?=$room[$id][name]?>教室内で開講中の<strong>「スタープログラミングスクール <?=$room[$id][name]?>教室」</strong>では、この春スタート生の募集に伴い、授業見学・個別体験を随時受付いたしております。</p>
			<p>2020年に小学校での「プログラミング教育」必修化が決まり、注目の高まっている「プログラミング」を今から体験していただけるチャンスです！<br>「スタープログラミングスクール」では、少人数制で段階的にステップアップしていけるカリキュラムをご提案しています。</p>
			<p>プログラミング未経験の方でもご参加いただける内容となっておりますので、この機会にぜひご参加いただき、プログラミング教室での学習についてご検討ください。</p>
			<p>授業見学・個別体験は予約制となっておりますので、お早めにお問い合わせの上、参加希望をお伝えください。</p>
			<p>お問い合わせ電話番号：<strong>06-6263-4123</strong>（受付時間：平日9:30～18:00）<br>スタープログラミングスクール運営本部まで</p>
			<p>「スタープログラミングスクール」ホームページからもメールでご予約いただけます。<br><a href="https://www.star-programming-school.com/event/" target="_blank">お申し込みはこちらから</a></p></dd>
			<dt class="tk-kozuka-gothic-pr6n"><?=$room_info[00]?></dt>
			<dd><?=$room_info[01]?></dd>
		</dl>
		</div>
		</div>

	<?php
	}
	?>
		<div class="box_a clearfix">
		<div class="room_info_lft">
		<dl>
			<dt><a href="../images/201805cp1.jpg" target="_blank"><img src="../images/201805cp1.jpg" width="180" alt="「サーティファイ合格保証＋初回月謝半額キャンペーン」開催！"></a>
<?php
if( $room[$id][sps] == "1" ) {
//SPS実施校
?>
				<a href="../images/201804cp2_ura_sps.pdf" target="_blank"><img src="../images/201804cp2_ura_sps.jpg" width="180" alt="全ての世代に役立つパソコンスキル"></a>
<?php
}elseif( $room[$id][sps] == "0" ) {
//SPS未実施校
?>
				<a href="../images/201804cp2_ura.pdf" target="_blank"><img src="../images/201804cp2_ura.jpg" width="180" alt="全ての世代に役立つパソコンスキル"></a>
<?php
}
?>
				</dt>
			<dd><div class="inst_info"><a href="/<?=$room[$id][dir]?>/instructor.php">インストラクター情報</a></div></dd>
		</dl>
		</div>
		<div class="room_info_rgt">
		<dl>
			<dt class="tk-kozuka-gothic-pr6n">「サーティファイ合格保証＋初回月謝半額キャンペーン」開催！</dt>
			<dd><p>「やってみたい」が「できた！」に変わる！幅広い年齢層の方々が楽しく学ばれています。</p>
			<p>パソコン市民講座 <?=$room[$id][name]?>教室では、<strong>「サーティファイ合格保証＋初回月謝半額キャンペーン」</strong>を<strong>5月19日（土）まで実施中</strong>です！<br>受講初月に限り月謝半額（6,000円お得）でスタートいただけます。この機会にぜひお申込みください！</p>
			<p>パソコン市民講座 <?=$room[$id][name]?>教室で学ばれる皆さんは、人それぞれに様々な目標を持って学んでいらっしゃいます。<br>きっかけは「やってみたい！」という気持ちから、まずは無料体験にお申し込みすることです！あなたの「やってみたい」を「できた！」に変えましょう！<?=$room[$id][name]?>教室のインストラクターがあなたに合わせたカリキュラムをご提案させていただきます。</p>
			<p>初めてパソコンを学ばれる方はもちろん、普段使っているけれどもう一歩使いこなせるようになりたい方にも、あなたに合った様々なご提案をさせていただきます。</p>
			<p>オフィスで活躍するパソコンスキルを身に付けておけば、仕事で有利に！<br>あなたの仕事が10倍早くなる！あなた自身の働き方改革を実現してみませんか？<br>ビジネススキルが向上できる、ビジネス実践講座や資格対策講座も、<?=$room[$id][name]?>教室のインストラクターが安心のサポート体制であなたをバックアップいたします！</p>
			<p><strong>「学割制度」</strong>もご用意していますので、学校でパソコンを使う必要がある学生の皆さんも、お得な学割料金で受講していただけます。</p>
			<p>新たな趣味を始めたい方には、写真をピックアップした新講座「デジタル写真マスター講座」が大人気です！<br>プロの写真家によるワンランク上の写真撮影術が学べる内容や、撮った写真を活用してパソコンで編集する方法など、写真をとことん楽しめる講座となっています！<br><?=$room[$id][name]?>教室のインストラクターがオススメするのは、この写真講座で学習した内容を活用してフォトブックを作成！撮りためた写真を様々な形でお友達にプレゼントもできますよ！</p>
			<p>趣味で楽しめるパソコン講座・iPad/iPhone講座も充実！デジカメで撮影した写真と、ワードやパワーポイントを組み合わせれば、あなたのオリジナルのフォトブックや作品集も作れます！<br>また、「脳トレ」を目的にした新講座も好評開講中！楽しく学びながら「頭の体操」になる「脳トレおとなプログラミング講座」がオススメ！<br>是非この機会に新しい学びを始めましょう！</p>
			<p>パソコンだけじゃなくiPadやiPhoneといったタブレットやスマートフォンも使いこなせるようになる講座もご用意しています！</p>
			<p>まずは、お気軽にお問い合わせください。<?=$room[$id][name]?>教室インストラクター一同、皆様からのお電話、ご来校を心よりお待ち申し上げております。</p></dd>
			<dt class="tk-kozuka-gothic-pr6n"><?=$room_info[00]?></dt>
			<dd><?=$room_info[01]?></dd>
		</dl>
		</div>
		</div>
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
	<?php
	if ($id == "6015029" || $id == "6015061" || $id == "6015104" || $id == "6015118" || $id == "6015123" || $id == "6015129" ) {
			//吹田・山科・甲子園・あべの・遠鉄・赤池（SPS告知）
	?>
		<div class="box_a clearfix">
		<div class="room_info_lft">
		<dl>
			<dt><a href="../images/2018ss_sps_<?=$room[$id][dir]?>.pdf" target="_blank"><img src="../images/2018ss_sps_<?=$room[$id][dir]?>.jpg" width="180" alt="「スタープログラミングスクール」無料体験イベント開催！"></a><a href="../images/201801sps_suita_b.jpg" target="_blank"><img src="../images/201801sps_suita_b.jpg" width="180" alt="「スタープログラミングスクール」概要"></a></dt>
		</dl>
		</div>
		<div class="room_info_rgt">
		<dl>
			<dt class="tk-kozuka-gothic-pr6n">「スタープログラミングスクール」<br>授業見学・個別体験　ご予約を随時受付中です！</dt>
			<dd><p>パソコン市民講座 <?=$room[$id][name]?>教室内で開講中の<strong>「スタープログラミングスクール <?=$room[$id][name]?>教室」</strong>では、この春スタート生の募集に伴い、授業見学・個別体験を随時受付いたしております。</p>
			<p>2020年に小学校での「プログラミング教育」必修化が決まり、注目の高まっている「プログラミング」を今から体験していただけるチャンスです！<br>「スタープログラミングスクール」では、少人数制で段階的にステップアップしていけるカリキュラムをご提案しています。</p>
			<p>プログラミング未経験の方でもご参加いただける内容となっておりますので、この機会にぜひご参加いただき、プログラミング教室での学習についてご検討ください。</p>
			<p>授業見学・個別体験は予約制となっておりますので、お早めにお問い合わせの上、参加希望をお伝えください。</p>
			<p>お問い合わせ電話番号：<strong>06-6263-4123</strong>（受付時間：平日9:30～18:00）<br>スタープログラミングスクール運営本部まで</p>
			<p>「スタープログラミングスクール」ホームページからもメールでご予約いただけます。<br><a href="https://www.star-programming-school.com/event/" target="_blank">お申し込みはこちらから</a></p></dd>
			<dt class="tk-kozuka-gothic-pr6n"><?=$room_info[00]?></dt>
			<dd><?=$room_info[01]?></dd>
		</dl>
		</div>
		</div>

	<?php
	}elseif ($id == "1001013" || $id == "1001016" || $id == "1001028" || $id == "1001048" || $id == "1001049" || $id == "1001059" || $id == "1001062" || $id == "1001095" || $id == "1001104" || $id == "1001111" || $id == "1001122" || $id == "1001125" || $id == "1001127" || $id == "1001130" || $id == "1001133" ) {
			//葛西・東神奈川・松戸・橋本・大泉・春日部・海老名・船橋・アリオ亀有・おおたか・妙典・あいたい・与野・アリオ柏・中野（SPS告知）
	?>
		<div class="box_a clearfix">
		<div class="room_info_lft">
		<dl>
			<dt><a href="../images/2018ss_sps_<?=$room[$id][dir]?>.pdf" target="_blank"><img src="../images/2018ss_sps_<?=$room[$id][dir]?>.jpg" width="180" alt="「スタープログラミングスクール」無料体験イベント開催！"></a><a href="../images/201801sps_suita_b.jpg" target="_blank"><img src="../images/201801sps_suita_b.jpg" width="180" alt="「スタープログラミングスクール」概要"></a></dt>
		</dl>
		</div>
		<div class="room_info_rgt">
		<dl>
			<dt class="tk-kozuka-gothic-pr6n">「スタープログラミングスクール」<br>授業見学・個別体験　ご予約を随時受付中です！</dt>
			<dd><p>パソコン市民講座 <?=$room[$id][name]?>教室内で開講中の<strong>「スタープログラミングスクール <?=$room[$id][name]?>教室」</strong>では、この春スタート生の募集に伴い、授業見学・個別体験を随時受付いたしております。</p>
			<p>2020年に小学校での「プログラミング教育」必修化が決まり、注目の高まっている「プログラミング」を今から体験していただけるチャンスです！<br>「スタープログラミングスクール」では、少人数制で段階的にステップアップしていけるカリキュラムをご提案しています。</p>
			<p>プログラミング未経験の方でもご参加いただける内容となっておりますので、この機会にぜひご参加いただき、プログラミング教室での学習についてご検討ください。</p>
			<p>授業見学・個別体験は予約制となっておりますので、お早めにお問い合わせの上、参加希望をお伝えください。</p>
			<p>お問い合わせ電話番号：<strong>03-6380-4123</strong>（受付時間：平日9:30～18:00）<br>スタープログラミングスクール運営本部まで</p>
			<p>「スタープログラミングスクール」ホームページからもメールでご予約いただけます。<br><a href="https://www.star-programming-school.com/event/" target="_blank">お申し込みはこちらから</a></p></dd>
			<dt class="tk-kozuka-gothic-pr6n"><?=$room_info[00]?></dt>
			<dd><?=$room_info[01]?></dd>
		</dl>
		</div>
		</div>

	<?php
	}
	?>
		<div class="box_a clearfix">
		<div class="room_info_lft">
		<dl>
			<dt><a href="../images/201805cp1.jpg" target="_blank"><img src="../images/201805cp1.jpg" width="180" alt="「サーティファイ合格保証＋6,000円OFFキャンペーン」実施中！"></a>
<?php
if( $room[$id][sps] == "1" ) {
//SPS実施校
?>
				<a href="../images/201804cp1_ura_sps.pdf" target="_blank"><img src="../images/201804cp1_ura_sps.jpg" width="180" alt="全ての世代に役立つパソコンスキル"></a>
<?php
}elseif( $room[$id][sps] == "0" ) {
//SPS未実施校
?>
				<a href="../images/201804cp1_ura.pdf" target="_blank"><img src="../images/201804cp1_ura.jpg" width="180" alt="全ての世代に役立つパソコンスキル"></a>
<?php
}
?>
				</dt>
			<dd><div class="inst_info"><a href="/<?=$room[$id][dir]?>/instructor.php">インストラクター情報</a></div></dd>
		</dl>
		</div>
		<div class="room_info_rgt">
		<dl>
			<dt class="tk-kozuka-gothic-pr6n">「サーティファイ合格保証＋6,000円OFFキャンペーン」実施中！</dt>
			<dd><p>「やってみたい」が「できた！」に変わる！幅広い年齢層の方々が楽しく学ばれています。</p>
			<p>パソコン市民講座 <?=$room[$id][name]?>教室では、<strong>「サーティファイ合格保証＋6,000円OFFキャンペーン」</strong>を<strong>5月19日（土）まで実施中</strong>です！<br>通常受講料1時間あたり1,500円（税別）のところ、受講スタート初月に限り最大12時間までスタート応援価格1,000円（税別）で受講ができるお得なキャンペーンですので、この機会にぜひお申込みください！</p>
			<p>パソコン市民講座 <?=$room[$id][name]?>教室で学ばれる皆さんは、人それぞれに様々な目標を持って学んでいらっしゃいます。<br>きっかけは「やってみたい！」という気持ちから、まずは無料体験にお申し込みすることです！あなたの「やってみたい」を「できた！」に変えましょう！<?=$room[$id][name]?>教室のインストラクターがあなたに合わせたカリキュラムをご提案させていただきます。</p>
			<p>初めてパソコンを学ばれる方はもちろん、普段使っているけれどもう一歩使いこなせるようになりたい方にも、あなたに合った様々なご提案をさせていただきます。</p>
			<p>オフィスで活躍するパソコンスキルを身に付けておけば、仕事で有利に！<br>あなたの仕事が10倍早くなる！あなた自身の働き方改革を実現してみませんか？<br>ビジネススキルが向上できる、ビジネス実践講座や資格対策講座も、<?=$room[$id][name]?>教室のインストラクターが安心のサポート体制であなたをバックアップいたします！</p>
			<p><strong>「学割制度」</strong>もご用意していますので、学校でパソコンを使う必要がある学生の皆さんも、お得な学割料金で受講していただけます。</p>
			<p>新たな趣味を始めたい方には、写真をピックアップした新講座「デジタル写真マスター講座」が大人気です！<br>プロの写真家によるワンランク上の写真撮影術が学べる内容や、撮った写真を活用してパソコンで編集する方法など、写真をとことん楽しめる講座となっています！<br><?=$room[$id][name]?>教室のインストラクターがオススメするのは、この写真講座で学習した内容を活用してフォトブックを作成！撮りためた写真を様々な形でお友達にプレゼントもできますよ！</p>
			<p>趣味で楽しめるパソコン講座・iPad/iPhone講座も充実！デジカメで撮影した写真と、ワードやパワーポイントを組み合わせれば、あなたのオリジナルのフォトブックや作品集も作れます！<br>また、「脳トレ」を目的にした新講座も好評開講中！楽しく学びながら「頭の体操」になる「脳トレおとなプログラミング講座」がオススメ！<br>是非この機会に新しい学びを始めましょう！</p>
			<p>パソコンだけじゃなくiPadやiPhoneといったタブレットやスマートフォンも使いこなせるようになる講座もご用意しています！</p>
			<p>まずは、お気軽にお問い合わせください。<?=$room[$id][name]?>教室インストラクター一同、皆様からのお電話、ご来校を心よりお待ち申し上げております。</p></dd>
			<dt class="tk-kozuka-gothic-pr6n"><?=$room_info[00]?></dt>
			<dd><?=$room_info[01]?></dd>
		</dl>
		</div>
		</div>
		</div>
	</div>
	</section>
<?php
}
?>
      <?php endif; ?>

      <?php if (date("Ymd") >= 20180520) : ?> <!-- 表示するまでの期間をyyyymmddで記載　-->
<section>
	<div class="room_info">
		<h2 class="tk-kozuka-gothic-pr6n"><span><?=$room[$id][name]?>教室からのお知らせ</span></h2>
		<div class="inner">
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
			<p>新社会人になる方は春の入社に向けて今から始めればまだまだ間に合う！オフィスで活躍するパソコンスキルを身に付けておけば、仕事で有利に！<br>ビジネススキルが向上できる、ビジネス実践講座や資格対策講座も、<?=$room[$id][name]?>教室のインストラクターが安心のサポート体制であなたをバックアップいたします！</p>
			<p><strong>「学割制度」</strong>もご用意していますので、学校でパソコンを使う必要がある学生の皆さんも、お得な学割料金で受講していただけます。</p>
			<p>新たな趣味を始めたい方には、写真をピックアップした新講座「デジタル写真マスター講座」が大人気です！<br>プロの写真家によるワンランク上の写真撮影術が学べる内容や、撮った写真を活用してパソコンで編集する方法など、写真をとことん楽しめる講座となっています！<br><?=$room[$id][name]?>教室のインストラクターがオススメするのは、この写真講座で学習した内容を活用してフォトブックを作成！撮りためた写真を様々な形でお友達にプレゼントもできますよ！</p>
			<p>趣味で楽しめるパソコン講座・iPad/iPhone講座も充実！デジカメで撮影した写真と、ワードやパワーポイントを組み合わせれば、あなたのオリジナルのフォトブックや作品集も作れます！<br>また、「脳トレ」を目的にした新講座も好評開講中！楽しく学びながら「頭の体操」になる「脳トレおとなプログラミング講座」がオススメ！<br>是非この機会に新しい学びを始めましょう！</p>
			<p>パソコンだけじゃなくiPadやiPhoneといったタブレットやスマートフォンも使いこなせるようになる講座もご用意しています！</p>
			<p>まずは、お気軽にお問い合わせください。<?=$room[$id][name]?>教室インストラクター一同、皆様からのお電話、ご来校を心よりお待ち申し上げております。</p></dd>
			<dt class="tk-kozuka-gothic-pr6n"><?=$room_info[00]?></dt>
			<dd><?=$room_info[01]?></dd>
		</dl>
		</div>
		</div>
		</div>
	</div>
	</section>
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
			<div id="gmap" style="margin-bottom: 5px;width:232px; height:150px;"></div>
			<p>【住　所】<br><?=$room[$id][ad1]?><br><?=$room[$id][ad2]?><br><?=$room[$id][ad3]?></p>
			<p>【アクセス】<br><?=$room[$id][access]?></p>
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
		<a href="/<?=$room[$id][dir]?>/mos.php"><img src="../images/bnr-mos_atc.png" width="215" height="100" alt="MOS認定校"></a>
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
if ($id !== "6117001" && $id !== "1076001" && $id !== "6114001" && $id !== "1076000") {
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
<?php
}
?>
<?php
if ($id !== "1076000") {
?>
	<a href="/<?=$room[$id][dir]?>/recruit.php"><img class="pc-only" src="../images/bnr-inst_saiyou.png" width="240" alt="インストラクター募集中" />
		<img class="sp-only" src="../images/bnr-inst_saiyou_sp.png" width="100%" alt="インストラクター募集中" /></a>
<?php
}
?>
	</div>

</div>
</main>
