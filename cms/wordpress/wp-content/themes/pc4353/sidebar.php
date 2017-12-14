<div class="p-side">

	<div class="p-side1">

		<div class="p-side1__block1">
			<?php get_cpt_calendar('blog'); ?>
		</div><!-- /.p-side1__block1 -->

		<div class="p-side1__block2">
			<?php
				$category = $_GET['category'];
				if(is_single()){$category_field = get_field('category');}
				if($category=='event'||$category_field=='event'){$category_name='イベント情報';}
				elseif($category=='campaign'||$category_field=='campaign'){$category_name='キャンペーン情報';}
				elseif($category=='school'||$category_field=='school'){$category_name='教室紹介';}
			?>
			<ul>
				<li class="li1<?php if($category=='event'||$category_field=='event'){echo ' active';} ?>"><a href="/blog/?category=event"><span>イベント情報</span></a></li>
				<li class="li2<?php if($category=='campaign'||$category_field=='campaign'){echo ' active';} ?>"><a href="/blog/?category=campaign"><span>キャンペーン情報</span></a></li>
				<li class="li3<?php if($category=='school'||$category_field=='school'){echo ' active';} ?>"><a href="/blog/?category=school"><span>教室紹介</span></a></li>
			</ul>
		</div><!-- /.p-side1__block2 -->

		<?php /*<div class="p-side1__block3">
			<p><span>教室ごとに見る</span></p>
			<script type="text/javascript">
			$(function(){
				$('.p-side1__block2 li').find('a').wrapInner('<span></span>');
			});
			</script>
			<ul>
				<?php wp_list_categories('taxonomy=blog-category&order=ASC&title_li=&show_count=1&hide_empty=0'); ?>
			</ul>
		</div><!-- /.p-side1__block3 -->*/?>

	</div><!-- /.p-side1 -->

</div><!-- /.p-side -->