<?php
if( !$index ) {
?>
				<div id="contact" class="block mB20">
					<h2 class="mB15">興味を持ったらまずはお問い合わせ</h2>
					<div class="section-lv2 clearfix moz2">
						<div class="box-a">
							<p><img src="/images/contact_53.png" width="350" height="24" alt="お問い合わせフォームはこちら" /></p>
							<div class="section-lv3 moz2">
								<img src="/images/contact_60.png" width="94" height="68" alt="お気軽にお問い合わせください。" /><span class="contact-bt"><a href="/<?=$room[$id][dir]?>/contact.php" onclick="javascript:_gaq.push(['_trackPageview', '/click/contact/1/']);"><img class="alpha" src="/images/contact_61.png" width="250" height="71" alt="お問い合わせ" /></a></span>
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
			</div><!-- #main-->
			<div id="sub">
				<div><a href="/<?=$room[$id][dir]?>/course.php"><img class="alpha" src="/images/side_07.png" width="180" height="52" alt="あなたの目的は？" /></a></div>
				<div id="sub-menu" class="mB10">
					<ul>
						<li id="sub-menu4"><a href="/<?=$room[$id][dir]?>/course.php#subject4" onclick="javascript:_gaq.push(['_trackPageview', '/click/course/4/']);">仕事に役立てたい</a></li>
						<li id="sub-menu5"><a href="/<?=$room[$id][dir]?>/course.php#subject5" onclick="javascript:_gaq.push(['_trackPageview', '/click/course/5/']);">資格を取得したい</a></li>
						<li id="sub-menu1"><a href="/<?=$room[$id][dir]?>/course.php#subject1" onclick="javascript:_gaq.push(['_trackPageview', '/click/course/1/']);">はじめてのパソコン</a></li>
						<li id="sub-menu2"><a href="/<?=$room[$id][dir]?>/course.php#subject2" onclick="javascript:_gaq.push(['_trackPageview', '/click/course/2/']);">インターネットをしたい</a></li>
						<li id="sub-menu3"><a href="/<?=$room[$id][dir]?>/course.php#subject3" onclick="javascript:_gaq.push(['_trackPageview', '/click/course/3/']);">趣味で楽しみたい</a></li>
					</ul>
				</div>

				<div class="mB10">
					<h3><a href="/<?=$room[$id][dir]?>/mos.php"><img class="alpha" src="/images/mos_bnr.jpg" width="180" height="180" alt="MOS資格対策講座" /></a></h3>
				</div><!-- .section-->
				<div class="mB10">
					<h3><a href="/<?=$room[$id][dir]?>/certify.php"><img class="alpha" src="/images/bnr-certify.jpg" width="180" height="180" alt="ビジネス実践講座" /></a></h3>
				</div><!-- .section-->
				<div class="mB10">
					<h3><a href="/<?=$room[$id][dir]?>/win10.php"><img class="alpha" src="/images/bnr-win10.jpg" width="180" height="180" alt="Windows10講座" /></a></h3>
				</div><!-- .section-->
				<!--<div class="mB10">
					<h3><a href="/<?=$room[$id][dir]?>/contact.php"><img class="alpha" src="/images/contact.png" width="180" height="67" alt="無料体験のお申し込み" /></a></h3>
				</div>--><!-- .section-->
				<div class="mB10">
					<h3><a href="/<?=$room[$id][dir]?>/tablet.php"><img class="alpha" src="/images/tablet_bnr.jpg" width="180" height="150" alt="タブレット講座（iPad対応）" /></a></h3>
				</div><!-- .section-->
				<div class="mB10">
					<h3><a href="/<?=$room[$id][dir]?>/iphone.php"><img class="alpha" src="/images/bnr-iphone.jpg" width="180" height="150" alt="iPhone講座" /></a></h3>
				</div><!-- .section-->
				<!--<div class="mB10">
					<h3><a href="/<?=$room[$id][dir]?>/business.php"><img class="alpha" src="/images/business.jpg" width="180" height="200" alt="仕事に活かす！" /></a></h3>
				</div>--><!-- .section-->
				<div class="mB10">
					<h3><a href="/<?=$room[$id][dir]?>/junior.php"><img class="alpha" src="/images/junior.jpg" width="180" height="135" alt="小・中学生のパソコン学習" /></a></h3>
				</div><!-- .section-->
				<div class="mB10">
					<h3><a href="/<?=$room[$id][dir]?>/instructor.php"><img class="alpha" src="/images/inst.png" width="180" height="57" alt="インストラクターのご紹介" /></a></h3>
				</div><!-- .section-->
<?php
if ($id !== "6117001" && $id !== "1076001" && $id !== "6114001") {
?>
				<div class="mB10">
					<h3><a href="http://www.4353p-club.com/blog/?member_id=<?=$room[$id][blog]?>" target="_blank" rel="nofollow"><img class="alpha" src="/images/blog.jpg" alt="教室のブログ紹介" /></a></h3>
				</div><!-- .section-->
<?php
}
?>
<?php
if ($id !== "6117001" && $id !== "1076001") {
?>
				<div class="mB10">
					<h3><a href="http://www.4353p-club.com" target="_blank" rel="nofollow"><img class="alpha" src="/images/menu_premire.jpg" width="180" height="378" alt="パソコン市民講座だけの会員専用学べるサイト「プレミア倶楽部」" /></a></h3>
				</div><!-- .section-->
<?php
}
?>
				<div class="mB10">
					<h3><a href="/school/" target="_blank"><img class="alpha" src="/images/school.png" width="180" height="62" alt="お近くの教室を探す 全国の教室一覧" /></a></h3>
				</div><!-- .section-->
				<div class="mB10">
					<h3><a href="http://eonet.jp/eohikari-ch/choitatsu/" target="_blank"><img class="alpha" src="/images/eo_bnr.jpg" width="180" height="122" alt="パソコン市民講座監修 「目指せ！“ちょい達” IT講座」 eo光チャンネルで放送！" /></a></h3>
				</div><!-- .section-->
				<div class="mB10">
					<h3><a href="/<?=$room[$id][dir]?>/recruit.php"><img class="alpha" src="/images/inst2.png" width="180" height="62" alt="インストラクター募集中" /></a></h3>
				</div><!-- .section-->
<?php
if ($id == "6015014" || $id == "6015016" || $id == "6015022" || $id == "6015029" || $id == "6015030" || $id == "6015037" || $id == "6015043" || $id == "6015083" || $id == "6015085" || $id == "6015107" || $id == "6015114" || $id == "6015116" || $id == "6015118") {
?>
				<div class="mB10">
					<h3><a href="http://www.juku-osaka.com/" target="_blank"><img class="alpha" src="/images/bnr-osaka_city_josei.gif" width="120" height="60" alt="大阪市塾代助成事業" /></a></h3>
                    <p><a href="http://www.juku-osaka.com/" target="_blank">大阪市塾代助成事業の参画事業者として登録しています。</a></p>
				</div><!-- .section-->
<?php
}
?>

			</div><!-- #sub-->
		</div><!-- #contents -->
<?php
}
?>
<div class="ft_lead">
<p>パソコン市民講座はどなたでもお気軽に受講していただける、あなたに合ったコースをご用意しております。初心者からスキルアップ・資格取得まで安心のパソコン教室 パソコン市民講座(東京/大阪ほか全国)。</p>
</div>
<footer>
<div id="ft_wrap" class="clearfix">
<div id="ft_lft">
<dl class="ft_course clearfix">
<dt>コース一覧</dt>
<dd><a href="/<?=$room[$id][dir]?>/course.php">講座案内</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/certify.php">ビジネス実践講座</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/mos.php">MOS資格対策講座</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/win10.php">Windows10講座</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/course.php#subject3">パソコン趣味講座</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/tablet.php">iPad講座</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/iphone.php">iPhone講座</a></dd>
</dl>
<dl class="ft_about clearfix">
<dt>教室概要</dt>
<dd><a href="/<?=$room[$id][dir]?>/about.php">教室紹介</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/instructor.php">インストラクター紹介</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/voice.php">受講生の声</a></dd>
<!--<dd><a href="/<?=$room[$id][dir]?>/contact.php">ワンポイント動画</a></dd>-->
<dd><a href="/premiere.php">プレミア倶楽部</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/qa.php">よくあるご質問</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/apply.php">お申込み方法</a></dd>
<!--<dd><a href="/<?=$room[$id][dir]?>/contact.php">キャンペーン</a></dd>-->
</dl>
<dl class="ft_room_search clearfix">
<dt>教室検索</dt>
<dd><a href="/school/tohoku.php">東北</a></dd>
<dd><a href="/school/kanto.php">関東</a></dd>
<dd><a href="/school/chubu.php">中部</a></dd>
<dd><a href="/school/kansai.php">関西</a></dd>
<dd><a href="/school/seibu.php">中国・四国・九州</a></dd>
</dl>
<dl class="ft_relation">
<dt>関連サイト</dt>
<dd><a href="http://www.star-programming-school.com/" target="_blank"><img src="../images/bnr-sps_ft.jpg" width="185" alt="2020年 プログラミング教育必修化！STAR Programming SCHOOL"></a></dd>
<dd><a href="https://www.cheery.co.jp/" target="_blank"><img src="../images/bnr-cheery_ft.jpg" width="185" alt="株式会社チアリー"></a></dd>
<dd><a href="http://www.nsg.gr.jp/" target="_blank"><img src="../images/bnr-nsg_ft.jpg" width="185" alt="NSGグループ"></a></dd>
</dl>
<dl class="ft_pref_list clearfix">
<dt>都道府県から探す</dt>
<dd><a href="/school/fukushima.php">福島</a></dd>
<dd><a href="/school/tokyo.php">東京</a></dd>
<dd><a href="/school/kanagawa.php">神奈川</a></dd>
<dd><a href="/school/chiba.php">千葉</a></dd>
<dd><a href="/school/saitama.php">埼玉</a></dd>
<dd><a href="/school/ibaraki.php">茨城</a></dd>
<dd><a href="/school/aichi.php">愛知</a></dd>
<dd><a href="/school/gifu.php">岐阜</a></dd>
<dd><a href="/school/shizuoka.php">静岡</a></dd>
<dd><a href="/school/osaka.php">大阪</a></dd>
<dd><a href="/school/hyogo.php">兵庫</a></dd>
<dd><a href="/school/kyoto.php">京都</a></dd>
<dd><a href="/school/nara.php">奈良</a></dd>
<dd><a href="/school/shiga.php">滋賀</a></dd>
<dd><a href="/school/okayama.php">岡山</a></dd>
<dd><a href="/school/tokushima.php">徳島</a></dd>
<dd><a href="/school/fukuoka.php">福岡</a></dd>
</dl>
<?php
	if ($room[$id][other_area] == "1") {
		echo "<dl class=\"ft_near_list clearfix\"><dt>近くの教室を探す</dt>";
		echo $room[$id][other_area2];
		echo "</dl>";
	}
?>
</div>
<div id="ft_rgt" class="tk-kozuka-gothic-pr6n">
	<div id="ft_logo"><a href="/<?=$room[$id][dir]?>/"><img src="../images/img-ft_logo.png" width="168" height="85" alt="<?=$room[$id][area]?>の資格が取れるパソコン教室｜パソコン市民講座 <?=$room[$id][name]?>教室"></a></div>
<div id="ft_room"><?=$room[$id][name]?>教室</div>
<ul class="inq_btn clearfix">
<li class="fl_left"><a href="/<?=$room[$id][dir]?>/contact.php">
	<img class="pc-only" src="../images/btn-inq_taiken.png" width="127" height="33" alt="無料体験予約">
	<img class="sp-only" src="../images/btn-inq_taiken_l.png" width="249" height="92" alt="無料体験予約">
</a></li>
<li class="fl_right"><a href="/<?=$room[$id][dir]?>/doc_contact.php">
	<img class="pc-only" src="../images/btn-inq_shiryo.png" width="102" height="33" alt="資料請求">
	<img class="sp-only" src="../images/btn-inq_shiryo_l.png" width="240" height="48" alt="資料請求">
</a></li>
</ul>
<div id="ft_tel_box">
<div id="ft_tel"><?=$room[$id][phone]?></div>
	<div id="ft_reception">受付時間 / 
	<a href="/<?=$room[$id][dir]?>/about.php">営業時間はこちら</a>
	</div>
</div>
</div>
</div>
<div id="ft_top_link">
<div id="ft_top_link_wrap">
<p><a href="https://www.pc4353.net/" target="_blank">初心者からスキルアップ・資格取得まで安心のパソコン教室 [パソコン市民講座]</a></p>
</div>
</div>
<div id="ft_btm">
<div id="ft_btm_wrap" class="clearfix">
<ul id="ft_link">
<li><a href="/about.php" target="_blank">会社概要</a></li>
<li><a href="/<?=$room[$id][dir]?>/recruit.php">採用情報</a></li>
<li><a href="/privacy.php" target="_blank">プライバシーポリシー</a></li>
<!--<li><a href="/<?=$room[$id][dir]?>/sitemap.php">サイトマップ</a></li>-->
</ul>
<address>COPYRIGHT <?=date("Y")?> Cheery, All Rights Reserved.</address>
</div>
</div>
</footer>

<!-- YahooListing -->
<script type="text/javascript">
  (function () {
    var tagjs = document.createElement("script");
    var s = document.getElementsByTagName("script")[0];
    tagjs.async = true;
    tagjs.src = "//s.yjtag.jp/tag.js#site=iBKwITQ";
    s.parentNode.insertBefore(tagjs, s);
  }());
</script>
<noscript>
  <iframe src="//b.yjtag.jp/iframe?c=iBKwITQ" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</noscript>

</body>
</html>