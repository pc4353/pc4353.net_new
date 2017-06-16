<footer>
<div id="ft_wrap" class="clearfix">
<div id="ft_lft">
<dl class="ft_course">
<dt>コース一覧</dt>
<dd><a href="/<?=$room[$id][dir]?>/course.php">講座案内</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/certify.php">ビジネス実践講座</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/mos.php">MOS資格対策講座</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/win10.php">Windows10講座</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/course.php#subject3">パソコン趣味講座</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/tablet.php">iPad講座</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/iphone.php">iPhone講座</a></dd>
</dl>
<dl class="ft_about">
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
<dl class="ft_room_search">
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
<?php
if ($id == "1001111") {
?>
	<div id="ft_reception">店舗改修中につきイトーヨーカドー柏教室に繋がります 
	</div>
<?php
} else {
?>
	<div id="ft_reception">受付時間 / 
	<a href="/<?=$room[$id][dir]?>/about.php">営業時間はこちら</a>
	</div>
<?php
}
?>
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
</body>
</html>