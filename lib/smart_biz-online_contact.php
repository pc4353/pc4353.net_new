
<!-- section .contactNote -->
<section class="contactNote">
<?php
if ($id == "1001049" || $id == "1001078" || $id == "1001012" || $id == "1001130" || $id == "6015027" || $id == "6015120" || $id == "6015124") {
//ビジネスオンライン実施教室
?>
<div class="sliderPhoto"><img src="/sp/images/slider006.jpg" alt="ビジネスオンラインスクール誕生！"></div>
<?php
}
?>
<div class="container">
<p><span class="colorRed">必須</span>項目は、必ずご入力お願いいたします。</p>
</div>
</section>
<!-- // section .contactNote -->


<form action="/<?=$room[$id][dir]?>/smart_biz-online_contact_confirm.php" method="post">

<!-- section .contactForm -->
<section class="contactForm">
<div class="container">


<? inputHTML(); ?>
<div class="submit">
<input type="submit" class="submitButton" value="入力内容を確認する">
</div>

<div class="notice">
<p>当社のプライバシーポリシーを十分にご確認いただいた上で、お問い合わせください。</p>
</div>

</div>
</section>
<!-- // section .contactForm -->


<input type="hidden" value="1" name="step" />
</form>
