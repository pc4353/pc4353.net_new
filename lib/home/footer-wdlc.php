<?php /*?><?php

if (!$home) {
	echo '<div id="mouse"><div class="wrap">';
	echo '<img src="/img/mouse.gif" alt="近くの教室を探す" width="120" height="241" />';
	echo '<select onChange="location.href = value;">';
	echo '<option value="">都道府県を選択</option>';
	foreach ($pref as $value) {
		echo "\t<option value=\"/school/#" . $value[0] . "\">" . $value[1] . "</option>\n";
	}
	echo '</select>';
	echo '</div></div>';
}
?><?php */?>

<div class="l-footer">


	<div class="l-footer1 pc-only">

		<!--<div class="l-footer1__block1 c-wrap">
			<p><img src="/common/img/common/footer1_txt1.png" width="758" height="81" alt="パソコン市民講座では、全国の教室で「無料体験レッスン」を実践しています。" /></p>
		</div>--><!-- /.l-footer1__block1 -->

		<!--<div class="l-footer1__block2">
		<div class="c-wrap">
			<ul>
				<li class="free"><a href="/contact/"><img src="/common/img/common/footer1_btn1.png" width="480" height="110" alt="無料体験レッスンお申し込み　お気軽にお越しください！" /></a></li>
				<li><a href="/contact/"><img src="/common/img/common/footer1_btn2.png" width="146" height="64" alt="資料請求" /></a></li>
				<li><a href="/contact/"><img src="/common/img/common/footer1_btn3.png" width="168" height="64" alt="お問い合わせ" /></a></li>
			</ul>
			<div class="img1"><img src="/common/img/common/footer1_bg1.png" width="307" height="305" alt="" /></div>
		</div>
		</div>--><!-- /.l-footer1__block2 -->

	</div><!-- /.l-footer1 -->


	<div class="l-footer2">
	<div class="footer_txt">
		<p>パソコン市民講座はどなたでもお気軽に受講していただける、あなたに合ったコースをご用意しております。初心者からスキルアップ・資格取得まで安心のパソコン教室 パソコン市民講座(東京/大阪ほか全国)。</p>
	</div>
	<div class="c-wrap">

		<div class="l-footer2__block1 pc-only">
			<ul class="home">
				<li class="c-link1"><a href="/">パソコン教室なら「パソコン市民講座」</a></li>
			</ul>
			<ul class="first">
				<li class="c-link1">
					<a href="/overview.php">パソコン市民講座について</a>
					<ul>
						<li class="c-link2"><a href="/premiere.php">プレミア倶楽部のご紹介</a></li>
						<li class="c-link2"><a href="/gakuwari/">学生割引制度について</a></li>
					</ul>
				</li>
			</ul>
			<ul>
				<li class="c-link1">
					<a href="/course/">講座一覧</a>
					<ul>
						<li class="c-link2"><a href="/course/works.php">今すぐ仕事で役立てたい</a></li>
						<li class="c-link2"><a href="/course/qualification.php">資格を取得したい</a></li>
						<?php /*<li class="c-link2"><a href="">学生の方へ</a></li>*/?>
						<li class="c-link2"><a href="/course/first.php">パソコンの基本操作を覚えたい</a></li>
						<li class="c-link2"><a href="/course/hobby.php">パソコンを趣味で楽しみたい</a></li>
						<li class="c-link2"><a href="/course/smartphone.php">スマートフォン</a></li>
						<li class="c-link2"><a href="/course/tablet.php">タブレット</a></li>
					</ul>
				</li>
				<li class="c-link1"><a href="/shikaku/">資格対策講座</a></li>
			</ul>
			<ul>
				<li class="c-link1"><a href="/school/">全国のパソコン教室</a></li>
				<li class="c-link1"><a href="/contact/">無料体験のお申込み</a></li>
				<li class="c-link1"><a href="/contact/">資料請求</a></li>
			</ul>
			<ul>
				<li class="c-link1"><a href="/voice/works.php">受講生の声</a></li>
				<li class="c-link1"><a href="/blog/">教室ブログ</a></li>
				<?php /*<li class="c-link1"><a href="/">受講生作品</a></li>
				<li class="c-link1"><a href="/">授業風景</a></li>*/?>
				<li class="c-link1"><a href="/instructor/">インストラクターインタビュー</a></li>
				<li class="c-link1"><a href="/qa.php">よくあるご質問</a></li>
				<li class="c-link1"><a href="https://www.facebook.com/pc4353/" target="_blank">公式Facebookページ</a></li>
				<li class="c-link1"><a href="/contact/">お問い合わせ</a></li>
			</ul>
		</div><!-- /.l-footer2__block1 -->

		<div class="l-footer2__block1 sp-only">
			<h3>メニュー</h3>
			<ul>
				<li class="c-link1"><a href="/">パソコン教室なら「パソコン市民講座」</a></li>
				<li class="c-link1">
					<a href="/overview.php">パソコン市民講座について</a>
					<ul>
						<li class="c-link2"><a href="/premiere.php">プレミア倶楽部のご紹介</a></li>
						<li class="c-link2"><a href="/gakuwari/">学生割引制度について</a></li>
					</ul>
				</li>
				<li class="c-link1"><a href="/school/">全国のパソコン教室</a></li>
				<li class="c-link1">
					<a href="/course/">講座一覧</a>
					<ul>
						<li class="c-link2"><a href="/course/works.php">今すぐ仕事で役立てたい</a></li>
						<li class="c-link2"><a href="/course/qualification.php">資格を取得したい</a></li>
						<?php /*<li class="c-link2"><a href="">学生の方へ</a></li>*/?>
						<li class="c-link2"><a href="/course/first.php">パソコンの基本操作を覚えたい</a></li>
						<li class="c-link2"><a href="/course/hobby.php">パソコンを趣味で楽しみたい</a></li>
						<li class="c-link2"><a href="/course/smartphone.php">スマートフォン</a></li>
						<li class="c-link2"><a href="/course/tablet.php">タブレット</a></li>
					</ul>
				</li>
                <li class="c-link1"><a href="/shikaku/">資格対策講座</a></li>
				<li class="c-link1"><a href="/voice/works.php">受講生の声</a></li>
				<li class="c-link1"><a href="/blog/">教室ブログ</a></li>
				<?php /*<li class="c-link1"><a href="/">受講生作品</a></li>
				<li class="c-link1"><a href="/">授業風景</a></li>*/?>
				<li class="c-link1"><a href="/instructor/">インストラクターインタビュー</a></li>
				<li class="c-link1"><a href="/qa.php">よくあるご質問</a></li>
				<li class="c-link1"><a href="https://www.facebook.com/pc4353/" target="_blank">公式Facebookページ</a></li>
			</ul>
		</div><!-- /.l-footer2__block1 -->

	<div class="l-nav2__block2 sp-only">
		<div class="txt1">
			<p><img src="/common/img/common/sp/footer1_txt1.png" width="405" height="198" alt="パソコン市民講座では全国の教室で「無料体験レッスン」を実施しています。" /></p>
		</div>
		<div class="img1"><img src="/common/img/common/footer1_bg1.png" width="307" height="305" alt="" /></div>
		<ul>
			<li class="free"><a href="/contact/"><img src="/common/img/common/footer1_btn1.png" width="480" height="110" alt="無料体験レッスンお申し込み　お気軽にお越しください！" /></a></li><!--
			--><li><a href="/contact/"><img src="/common/img/common/sp/footer1_btn2.png" width="340" height="130" alt="資料請求" /></a></li><!--
			--><li><a href="/contact/"><img src="/common/img/common/sp/footer1_btn3.png" width="340" height="130" alt="お問い合わせ" /></a></li>
		</ul>
	</div><!-- /.l-nav2__block2 -->

		<div class="l-footer2__block2">
			<ul>
				<li class="pc-only"><a href="/news/">お知らせ</a></li>
				<li><a href="/privacy.php">プライバシーポリシー</a></li>
				<li class="IFB2 c-link_blank"><a href="https://www.cheery.co.jp/saiyou/"  target="_blank">採用情報</a></li>
				<li class="IFB2"><a href="/about.php">運営元</a></li>
			</ul>
		</div><!-- /.l-footer2__block2 -->

	</div>
	</div><!-- /.l-footer2 -->


	<?php /*<div class="l-footer1 sp-only">

		<div class="l-footer1__block1 c-wrap">
			<p><img src="/common/img/common/footer1_txt1.png" width="758" height="81" alt="パソコン市民講座では、全国の教室で「無料体験レッスン」を実践しています。" /></p>
		</div><!-- /.l-footer1__block1 -->

		<div class="l-footer1__block2">
		<div class="c-wrap">
			<ul>
				<li class="free"><a href="/contact/"><img src="/common/img/common/footer1_btn1.png" width="480" height="110" alt="無料体験レッスンお申し込み　お気軽にお越しください！" /></a></li><!--
				--><li><a href="/contact/"><img src="/common/img/common/footer1_btn2.png" width="146" height="64" alt="資料請求" /></a></li><!--
				--><li><a href="/contact/"><img src="/common/img/common/footer1_btn3.png" width="168" height="64" alt="お問い合わせ" /></a></li>
			</ul>
			<div class="img1"><img src="/common/img/common/footer1_bg1.png" width="307" height="305" alt="" /></div>
		</div>
		</div><!-- /.l-footer1__block2 -->

	</div><!-- /.l-footer1 -->*/?>


	<div class="l-footer3">
	<div class="c-wrap">

		<div class="l-footer3__block1">
			<ul>
				<li><a href="http://www.star-programming-school.com/" target="_blank"><img src="/common/img/common/footer3_bnr1.png" width="280" height="70" alt="STAR Programming SCHOOL" /></a></li>
				<li><a href="https://www.cheery.co.jp/" target="_blank"><img src="/common/img/common/footer3_bnr2.png" width="280" height="70" alt="株式会社チアリー" /></a></li>
				<li><a href="http://www.nsg.gr.jp/" target="_blank"><img src="/common/img/common/footer3_bnr3.png" width="280" height="70" alt="NSGグループ" /></a></li>
			</ul>
		</div><!-- /.l-footer3__block1 -->

		<div class="l-footer3__block2">
			<h4>NSGグループ</h4>
			<ul>
				<li><a href="http://www.jigyo.ac.jp/" target="_blank">事業創造大学院大学</a></li>
				<li><a href="http://www.nuhw.ac.jp/" target="_blank">新潟医療福祉大学</a></li>
				<li><a href="http://www.kaishi.ed.jp/" target="_blank">開志学園高等学校</a></li>
				<li><a href="http://kaishi-kokusai.ed.jp/" target="_blank">開志国際高等学校</a></li>
				<li><a href="http://mydreams.jp/index.html" target="_blank">NSGカレッジリーグ</a></li>
				<li><a href="http://www.fsg-college.jp/" target="_blank">FSGカレッジリーグ</a></li>
			</ul>
			<ul>
				<li><a href="http://www.nsgac.co.jp/" target="_blank">株式会社NSGアカデミー</a></li>
				<li><a href="https://www.crear-ac.co.jp/" target="_blank">株式会社クレアール</a></li>
				<li><a href="http://dreamadvance.co.jp/" target="_blank">株式会社ドリームアドバンス</a></li>
				<li><a href="http://www.illinois-academy.com/"  target="_blank">英会話スクール イリノイアカデミー</a></li>
				<li><a href="http://www.star-programming-school.com/" target="_blank">STAR Programming SCHOOL</a></li>
			</ul>
		</div><!-- /.l-footer3__block2 -->

		<div class="l-footer3__block3">
			<p><small class="small">COPYRIGHT <?=date("Y")?> Cheery, All Rights Reserved.</small></p>
		</div><!-- /.l-footer3__block3 -->

	</div>
	</div><!-- /.l-footer3 -->


</div><!-- /.l-footer -->


<div class="l-pagetop">
	<a href="#container" title="このページのトップへ"><img src="/common/img/common/pagetop.png" width="72" height="72" alt="このページのトップへ" /></a>
</div><!-- /.l-pagetop -->


</div><!-- /#container -->


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