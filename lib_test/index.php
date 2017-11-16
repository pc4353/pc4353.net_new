<main>
<div id="main_contents" class="clearfix">
<?php
if( $id == "1001000" ) {
	//おおたかの森
?>
                    <dl class="notice tk-kozuka-gothic-pr6n">
                    <dt>【店舗改修のご案内】</dt>
                    <dd><p>2017年2月17日（金）をもちまして「パソコン市民講座 おおたかの森S.C教室」は店舗改修に伴い、リニューアルオープンまでの間、一時休講させていただきます。<br />2017年5月中旬より改めて受講を再開する予定となっておりますため、休講期間中は下記の近隣教室にて受講の受付を行っております。受講をご希望の方は、下記のいずれかの教室へお問い合わせくださいますよう、お願いいたします。今後とも変わらぬご愛顧のほどよろしくお願い申し上げます。</p>
                    <p><span class="red">【パソコン市民講座 イトーヨーカドー流山教室】</span> 〒270-0164 千葉県流山市流山9-800-2　イトーヨーカドー流山店 2階　<a href="https://www.google.co.jp/maps/place/%E3%83%91%E3%82%BD%E3%82%B3%E3%83%B3%E5%B8%82%E6%B0%91%E8%AC%9B%E5%BA%A7+%E3%82%A4%E3%83%88%E3%83%BC%E3%83%A8%E3%83%BC%E3%82%AB%E3%83%89%E3%83%BC%E6%B5%81%E5%B1%B1%E6%95%99%E5%AE%A4/@35.8502233,139.8971833,17z/data=!3m1!4b1!4m5!3m4!1s0x60189baa6c559fd7:0x34aeaf5e1a3ad7ca!8m2!3d35.850219!4d139.899372?hl=ja" target="_blank">地図を見る</a>　<a href="/nagareyama/" target="_blank">ホームページ</a><br />
                    <span class="red">【パソコン市民講座 イトーヨーカドー柏教室】</span> 〒277-0005 千葉県柏市柏2-15 イトーヨーカドー柏店 2階　<a href="https://www.google.co.jp/maps/place/%E3%83%91%E3%82%BD%E3%82%B3%E3%83%B3%E5%B8%82%E6%B0%91%E8%AC%9B%E5%BA%A7+%E3%82%A4%E3%83%88%E3%83%BC%E3%83%A8%E3%83%BC%E3%82%AB%E3%83%89%E3%83%BC%E6%9F%8F%E6%95%99%E5%AE%A4/@35.8611393,139.9707173,17z/data=!3m2!4b1!5s0x60189ce0b694081b:0x486cece45d9fa895!4m5!3m4!1s0x60189ce0b96afe63:0x37ac4161309d6801!8m2!3d35.861135!4d139.972906?hl=ja" target="_blank">地図を見る</a>　<a href="/kashiwa/" target="_blank">ホームページ</a><br />
                    <span class="red">【パソコン市民講座 イトーヨーカドーアリオ柏教室】</span> 〒277-0922 千葉県柏市大島田950-1 イトーヨーカドーアリオ柏店 2階　<a href="https://www.google.co.jp/maps/place/%E3%83%91%E3%82%BD%E3%82%B3%E3%83%B3%E5%B8%82%E6%B0%91%E8%AC%9B%E5%BA%A7+%E3%82%A4%E3%83%88%E3%83%BC%E3%83%A8%E3%83%BC%E3%82%AB%E3%83%89%E3%83%BC%E3%82%A2%E3%83%AA%E3%82%AA%E6%9F%8F%E6%95%99%E5%AE%A4/@35.8342647,140.0099939,17z/data=!3m1!4b1!4m5!3m4!1s0x6018829b09be76a1:0x6ba2be0c1ccbcbcf!8m2!3d35.8342604!4d140.0121826?hl=ja" target="_blank">地図を見る</a>　<a href="/ariokashiwa/" target="_blank">ホームページ</a></p></dd>
                    </dl>
<?php
}
?>
<div class="main_vi">
<ul class="slider">
<?php
if ($id == "1001111") {
?>
	<li><img src="/images/img-new_otaka.jpg" width="985" height="300" alt="2017年5月18日 おおたかの森教室リニューアルオープン！" class="alpha" /></li>
<?php
}
?>
	<li><a href="/<?=$room[$id][dir]?>/certify.php"><img src="/images/img-main01.png" width="985" height="300" alt="エクセル・ワード・パワーポイントを仕事で活かす！ビジネス実践講座" class="alpha" /></a></li>
	<li><a href="/course/brain_training.php" target="_blank"><img src="/images/img-main03.png" width="985" height="300" alt="脳トレ おとなプログラミング講座 話題の講座が2017年6月スタート！詳しくはこちらから" class="alpha" /></a></li>
	<li><a href="/<?=$room[$id][dir]?>/mos.php"><img src="/images/img-main02.png" width="985" height="300" alt="就職・転職を有利に！資格は実力の証！MOS資格取得コース" class="alpha" /></a></li>
	<?php
	if( $room[$id][biz_on] == "1" ) {
    //ビジネスオンライン実施教室
    ?>
	<li><a href="/<?=$room[$id][dir]?>/shikaku.php"><img src="/images/img-main04.png" width="985" height="300" alt="ビジネス向け資格対策講座・ビジネスオンライン あなたはどっち？" class="alpha" /></a></li>
	<?php
	}
    ?>
</ul>
</div>

<div class="main_lft">
<section>
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
	<?php
	if( $room[$id][biz_on] == "1" && $room[$id][sps] == "1" ) {
    //ビジネスオンライン実施教室・SPS実施教室
    ?>
		<li><a href="/shikaku/biz-online.html" target="_blank">
		<dl>
			<dt>お金も時間もないけど<br>資格を取得したい</dt>
			<dd><img src="../images/bnr-course_bo.png" width="200" height="114" alt="ビジネスオンライン"></dd>
			</dl>
			</a></li>
		<li><a href="http://www.star-programming-school.com/" target="_blank">
		<dl>
			<dt>すべての小中高生に<br>プログラミング教育を</dt>
			<dd><img src="../images/bnr-course_sps.png" width="200" height="114" alt="スタープログラミングスクール"></dd>
			</dl>
			</a></li>
	<?php
	} elseif( $room[$id][biz_on] == "1" && $room[$id][sps] == "0" ) {
    //ビジネスオンライン実施教室
    ?>
		<li class="bnr_l"><a href="/shikaku/biz-online.html" target="_blank"><img src="../images/bnr-course_bo_l.png" width="462" height="195" alt="ビジネスオンライン"></a></li>
	<?php
	} elseif( $room[$id][biz_on] == "0" && $room[$id][sps] == "1" ) {
    //SPS実施教室
    ?>
		<li class="bnr_l"><a href="http://www.star-programming-school.com/" target="_blank"><img src="../images/bnr-course_sps_l.png" width="462" height="195" alt="スタープログラミングスクール"></a></li>
	<?php
	} else {
    ?>
		<li class="bnr_l"><a href="http://www.star-programming-school.com/" target="_blank"><img src="../images/bnr-course_sps_l.png" width="462" height="195" alt="スタープログラミングスクール"></a></li>
	<?php
	}
    ?>
		</ul>
		</div>
	</div>
	<div class="bnr_740"><a href="http://www.star-programming-school.com/" target="_blank"><img src="../images/bnr-sps_740.png" width="740" height="90" alt="2020年 プログラミング教育必修化！STAR Programming SCHOOL"></a></div>
						 <div class="i-pr clearfix mB20">
						<div class="section-lv2 moz2 clearfix">
<?php
foreach( $ary_inst as $key => $value  ) {
?>
							<h3 class="blue"><?=$value[00]?></h3>
							<div class="section-lv3 clearfix mB30">
								<dl class="clearfix mB10">
									<dt class="box-a">好きな分野</dt>
									<dd class="box-b"><?=$value[01]?></dd>
								</dl>
								<dl class="clearfix mB20">
									<dt class="box-a">趣味</dt>
									<dd class="box-b"><?=$value[02]?></dd>
								</dl>
								<p><?=$value[03]?></p>
							</div><!-- /.section-lv3 -->
<?php
}
?>
						</div><!-- /.section-lv2 -->
					</div><!-- /.i-pr -->

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
			<dd><p>全国150教室 15年間で<br>54万人の指導実績！</p>
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

<?php
if ($id == "1001111") {
?>
<section>
	<div class="room_info">
		<h2 class="tk-kozuka-gothic-pr6n"><span><?=$room[$id][name]?>教室からのお知らせ</span></h2>
		<div class="inner">
		<div class="box_a clearfix">
		<div class="room_info_lft">
		<dl>
			<dt><!--<img src="../images/naratomigaoka_ent.jpg" width="180" alt="教室外観">--></dt>
			<dd><div class="inst_info"><a href="/<?=$room[$id][dir]?>/instructor.php">インストラクター情報</a></div></dd>
		</dl>
		</div>
		<div class="room_info_rgt">
		<dl>
			<dt class="tk-kozuka-gothic-pr6n">【2017年5月18日（木）　リニューアルオープンのご案内】</dt>
			<dd><p>「パソコン市民講座 おおたかの森S.C教室」リニューアルオープン！！</p>
			<p>おおたかの森ショッピングセンターの3階に「パソコン市民講座　おおたかの森S.C教室」がリニューアルオープンいたします。</p>
			<p>リニューアルオープンキャンペーンといたしまして、先着30名様に限り「通常受講料1時間あたり1,500円（税別）のところ、受講スタート初月最大12時間分まで<strong>1時間あたり1,000円（税別）</strong>」のスタート応援価格で受講を始めていただけます！<br />お得な「リニューアルオープンキャンペーン」は6月24日（土）まで！</p>
			<p>パソコンで仕事に役立つスキルを身に付けたい方、社会人としてスキルアップをしたい方、学生の方もレポート作成の効率化のためにパソコンスキルが必要な方、この機会にワードやエクセルをしっかりマスターしてみませんか？</p>
			<p>自宅にパソコンはあるけども何に使えば良いかわからない方、趣味の写真をパソコンで加工してみたい方、インターネットの便利さをもっと知りたい方、パソコンの活用方法は仕事だけではありません！あなたの趣味がさらに広がる使い方を知ってみませんか？</p>
			<p>パソコンだけじゃなくiPadやiPhoneといったタブレットやスマートフォンも使いこなせるようになる講座もご用意しています！</p>
			<p>まずは、お気軽にお問い合わせください。インストラクター一同、皆様からのお電話、ご来校を心よりお待ち申し上げております。</p></dd>
			<!--<dt class="tk-kozuka-gothic-pr6n"><?=$room_info[00]?></dt>
			<dd><?=$room_info[01]?></dd>-->
		</dl>
		</div>
		</div>
		</div>
	</div>
	</section>
<?php
}else{
?>
<section>
	<div class="room_info">
		<h2 class="tk-kozuka-gothic-pr6n"><span><?=$room[$id][name]?>教室からのお知らせ</span></h2>
		<div class="inner">
		<div class="box_a clearfix">
		<div class="room_info_lft">
		<dl>
			<dt><a href="../images/201706cp1.jpg" target="_blank"><img src="../images/201706cp1.jpg" width="180" alt="脳トレ講座新登場！パソコンで楽しく学べる800講座！"></a><a href="../images/201706cp2.jpg" target="_blank"><img src="../images/201706cp2.jpg" width="180" alt="履歴書に書けるパソコン資格を取ろう！資格合格率96.1％"></a></dt>
			<dd><div class="inst_info"><a href="/<?=$room[$id][dir]?>/instructor.php">インストラクター情報</a></div></dd>
		</dl>
		</div>
		<div class="room_info_rgt">
		<dl>
			<dt class="tk-kozuka-gothic-pr6n">脳トレ講座新登場！「入会キャンペーン」実施中！</dt>
			<dd><p>「やってみたい」が「できた！」に変わる！幅広い年齢層の方々が楽しく学ばれています。</p>
			<p>パソコン市民講座で学ばれる皆さんは、人それぞれに様々な目標を持って学んでいらっしゃいます。<br>きっかけは「やってみたい！」という気持ちから、まずは無料体験にお申し込みすることです！あなたの「やってみたい」を「できた！」に変えましょう！教室インストラクターがあなたに合わせたカリキュラムをご提案させていただきます。<br>パソコン市民講座では、6月17日（土）まで「入会キャンペーン」を実施中です！</p>
			<p>今なら受講スタート初月を<strong>最大で6,000円（税別）もお得</strong>に始めていただける、スタート応援価格にて受講していただけます。<br>さらに！<strong>入会金も半額！！</strong></p>
			<p>話題のプログラミングを使った「脳トレ講座」も新登場！子供たちに習わせたい習い事で近年人気急上昇中の「プログラミング」ですが、おとなも楽しめる新たな講座としてパソコン市民講座ではご紹介いたします！<br>是非この機会に新しい学びを始めましょう！</p>
			<p>また、これから迎える7月～8月は求人数が増える時期です。今のうちからワード・エクセル・パワーポイントなど、オフィスで活躍するパソコンスキルを身に付けておけば、転職・就職活動で有利に！<br>ビジネス実践講座や資格対策講座も、インストラクターが安心のサポート体制であなたをバックアップいたします！</p>
			<p>「学割制度」もご用意していますので、学校でパソコンを使う必要がある学生の皆さんも、お得な学割料金で受講していただけます。</p>
			<p>パソコンだけじゃなくiPadやiPhoneといったタブレットやスマートフォンも使いこなせるようになる講座もご用意しています！</p>
			<p>まずは、お気軽にお問い合わせください。インストラクター一同、皆様からのお電話、ご来校を心よりお待ち申し上げております。</p></dd>
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

<section>
	<div class="voice_list">
		<h2 class="tk-kozuka-gothic-pr6n"><span>受講生の声</span></h2>
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
		<dt class="tk-kozuka-gothic-pr6n"><span>合格者の声</span></dt>
		<dd>
			<div class="pass_hd">
				<img class="pc-only" src="../images/ttl-pass.png" width="215" alt="市民講座に通って「できた！」の声が続々！" />
				<img class="sp-only" src="../images/ttl-pass_sp.jpg" width="300" height="107" alt="市民講座に通って「できた！」の声が続々！" />
			</div>
<?php
if ($id == "1001126") {
?>
			<div class="pass_img pc-only"><img  src="../<?=$room[$id][dir]?>/images/492958.jpg" width="215" alt="市民講座に通って「できた！」の声が続々！" /></div>
			<p class="pc-only">パソコンを一から学んで、今まで知っていると思い込んでいたところも正しく知ることができました。先生たちも皆さんとっても優しく教えて下さるので、最近何かと長続きできなかった習い事の中で今までで一番長くお世話になっています。これからもパソコンでできることが増えればいいなと思っています。又仕事でつかえるようになれたら嬉しいです。</p>
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
if ($id !== "6117001" && $id !== "1076001" && $id !== "6114001") {
?>
	<ul class="blog">
	<li>
	<dl>
		<dt class="tk-kozuka-gothic-pr6n"><span>教室ブログ</span></dt>
		<dd>
			<div><img class="pc-only" src="../images/img-blog.png" width="215" alt="<?=$room[$id][name]?>教室の教室ブログ紹介" />
			<img class="sp-only" src="/common/img/top/sp/top4_bnr1.png" width="300" height="107" alt="" /></div>
					<p><a href="http://www.4353p-club.com/blog/?member_id=<?=$room[$id][blog]?>" target="_blank"><?=$room[$id][name]?>教室の<br>教室ブログ紹介</a></p>
		</dd>
	</dl>
	</li>
	</ul>
<?php
}
?>
	</div>

</div>
</main>
