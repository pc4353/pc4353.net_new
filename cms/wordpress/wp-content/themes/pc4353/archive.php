<?php get_header(); ?>


<div class="p-news p-recruit">


	<div class="p-news1 c-wrap">
	
		<div class="c-title3">
			<h2>お知らせ</h2>
			<p>NEWS</p>
		</div>

		<div class="p-top2__block2">

			<?php if(have_posts()): ?>
			<ul>
				<?php
					while(have_posts()):the_post();
					$category = get_the_category();
					$cat_slug = $category[0]->category_nicename;
					$cat_name = $category[0]->cat_name;
				?>
				<li><a href="<?php the_permalink(); ?>">
					<p class="place"><?php echo $cat_name; ?></p>
					<div class="date"><?php the_time('Y.m.d'); ?></div>
					<h3><?php echo mb_substr(strip_tags(get_the_title()), 0, 40).'...'; ?></h3>
				</a></li>
				<?php endwhile; ?>
			</ul>
			<?php else: ?>

			<p class="u-center">お知らせが見つかりませんでした。</p>

			<?php endif; ?>


			<?php //ページネーション
			if (function_exists("pagination")) {
				pagination($additional_loop->max_num_pages);
			} ?>

		</div><!-- /.p-top2__block2 -->

	</div><!-- /.p-news1 -->


</div><!-- /.p-news -->


<?php get_footer(); ?>