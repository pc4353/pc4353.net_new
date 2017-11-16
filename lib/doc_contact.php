                <div id="toiawase_form">
					<div class="i-pt clearfix mB20 mR10">
<?php
if ($id ==  "6117001" || $id == "6114001" || $id == "1076001") {
?>
<?php
} else {
?>
						<!--<div class="contact_bnr"><img src="/images/contact_banner.jpg" width="631" height="176" alt="スタートキャンペーン実施中！" /></div>-->
<?php
}
?>
<? telHTML(); ?>
						<h2 class="mB20 bg-check blue"><img src="/images/mos2010/ico-mail.gif" width="42" height="30" alt="メール" /> お問い合わせ・資料請求のお申し込みフォーム</h2>
                        <div class="mB20"><img src="/images/img-form_step1.jpg" width="810" height="55" alt="お客様情報入力" /></div>
						<p><span class="red">必須</span>項目は、必ずご入力お願いいたします。</p>
						<div class="section-lv2 contact">
						<form action="/<?=$room[$id][dir]?>/doc_contact_confirm.php" method="post">
<? inputHTML(); ?>
						<p class="sp3 center mT10"><input class="file over1" type="image" src="/images/btn-inq_confirm.jpg" width="500" height="70"/></p>
						<input type="hidden" value="1" name="step" />
						</form>
<table width="135" border="0" cellpadding="2" cellspacing="0" title="このマークは、ウェブサイトを安心してご利用いただける安全の証です。">
<tr>
<td width="135" align="center" valign="top"><script type="text/javascript" src="https://seal.websecurity.norton.com/getseal?host_name=www.pc4353.net&amp;size=M&amp;use_flash=NO&amp;use_transparent=YES&amp;lang=ja"></script><br /> <a href="http://www.symantec.com/ja/jp/ssl-certificates/" target="_blank"  style="color:#000000; text-decoration:none; font:bold 12px 'ＭＳ ゴシック',sans-serif; letter-spacing:.5px; text-align:center; margin:0px; padding:0px;">SSL/TLSとは？</a></td>
</tr>
</table>
						</div><!-- /.section-lv2 -->
						<p class="mT25">当社の<a href="/privacy.php" target="_blank">プライバシーポリシー</a>を十分にご確認いただいた上で、お問い合わせください。</p>
					</div><!-- /.i-pt -->
                </div><!-- /#toiawase_form -->
					
				</div><!-- /.block -->
				</div><!-- /#kasou -->
