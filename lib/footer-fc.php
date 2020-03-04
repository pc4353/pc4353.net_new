<?php
if( !$form ) {
?>
				<div id="contact" class="block mB20">
					<h2 class="mB15"><img src="/images/title_50.png" width="650" height="71" alt="興味を持ったらまずはお問い合わせ" /></h2>
					<div class="section-lv2 clearfix moz2">
						<div class="box-a">
							<p><img src="/images/contact_53.png" width="350" height="24" alt="お問い合わせフォームはこちら" /></p>
							<div class="section-lv3 moz2">
								<img src="/images/contact_60.png" width="94" height="68" alt="お気軽にお問い合わせください。" /><span class="contact-bt"><a href="/<?=$room[$id][dir]?>/contact.php"><img class="alpha" src="/images/contact_61.png" width="250" height="71" alt="お問い合わせ" /></a></span>
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
			</div><!-- #main-->

			<div id="sub">
				<div><a href="/<?=$room[$id][dir]?>/course.php"><img class="alpha" src="/images/side_07.png" width="180" height="52" alt="あなたの目的は？" /></a></div>
				<div id="sub-menu" class="mB10">
					<ul>
						<li id="sub-menu4"><a href="/<?=$room[$id][dir]?>/course.php#subject4">仕事に役立てたい</a></li>
						<li id="sub-menu5"><a href="/<?=$room[$id][dir]?>/course.php#subject5">資格を取得したい</a></li>
						<li id="sub-menu1"><a href="/<?=$room[$id][dir]?>/course.php#subject1">はじめてのパソコン</a></li>
						<li id="sub-menu2"><a href="/<?=$room[$id][dir]?>/course.php#subject2">インターネットをしたい</a></li>
						<li id="sub-menu3"><a href="/<?=$room[$id][dir]?>/course.php#subject3">趣味で楽しみたい</a></li>
					</ul>
				</div>
				<div class="mB10">
					<h3><a href="/<?=$room[$id][dir]?>/instructor.php"><img class="alpha" src="/images/inst.png" width="180" height="57" alt="インストラクターのご紹介" /></a></h3>
				</div><!-- .section-->
				<div class="mB10">
					<h3><a href="/<?=$room[$id][dir]?>/contact.php"><img class="alpha" src="/images/contact.png" width="180" height="67" alt="無料体験のお申し込み" /></a></h3>
				</div><!-- .section-->
				<!-- <div class="mB10">
					<h3><a href="/<?=$room[$id][dir]?>/recruit.php"><img class="alpha" src="/images/inst2.png" width="180" height="62" alt="インストラクター募集中" /></a></h3>
				</div> -->

			</div><!-- #sub-->
		</div><!-- #contents -->
		
		<!-- ▼▼#footer -->
		<div id="footer" class="clearfix">
			<div id="footer-inner">
				<div class="clearfix">
                <div id="ft_logo">
                	<a href="/<?=$room[$id][dir]?>/"><img src="/images/img-ft_logo.jpg" width="137" height="67" alt="<?=$room[$id][area]?>の資格が取れるパソコン教室｜パソコン市民講座 <?=$room[$id][name]?>教室" class="alpha" /></a>
                </div>
                <dl id="ft_tel">
                	<dt>無料体験のご予約、ご質問やご相談など、お気軽にお電話ください</dt>
					<dd><?=$room[$id][phone]?></dd>
                </dl>
                <div id="ft_inq">
                	<a href="/<?=$room[$id][dir]?>/contact.php"><img src="/images/btn-ft_inq.jpg" width="252" height="54" alt="無料体験予約はこちら" class="alpha" /></a>
                </div>
                <dl id="ft_link" class="clearfix">
                	<dd class="ft_list01">
					<ul>
						<li><a href="/<?=$room[$id][dir]?>/about.php">教室紹介</a></li>
						<li><a href="/<?=$room[$id][dir]?>/course.php">コース紹介</a></li>
						<li><a href="/<?=$room[$id][dir]?>/contact.php">お問い合わせ</a></li>
					</ul>
                    </dd>
                	<dd class="ft_list02">
					<ul>
						<li><a href="/<?=$room[$id][dir]?>/instructor.php">インストラクターのご紹介</a></li>
						<li><a href="/<?=$room[$id][dir]?>/voice.php">受講生の声</a></li>
					</ul>
                    </dd>
                	<dd class="ft_list03">
					<ul>
						<li><a href="/<?=$room[$id][dir]?>/qa.php">よくあるご質問</a></li>
						<li><a href="/<?=$room[$id][dir]?>/apply.php">お申込み方法</a></li>
					</ul>
                    </dd>
                </dl>
				</div><!-- ft-link-list -->
			</div><!-- /#footer-inner -->
				<div class="publication">
					<address>COPYRIGHT&copy;<?=date("Y")?> Cheery, All Rights Reserved.</address> 
				</div><!-- /.publication -->
		</div><!-- /#footer -->
	</div><!-- /#doc -->
</body>
</html>
