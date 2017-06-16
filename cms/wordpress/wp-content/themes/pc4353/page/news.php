<div class="p-news">


	<div class="p-news1 c-wrap">
	
		<div class="c-title3">
			<h2>お知らせ</h2>
			<p>NEWS</p>
		</div>

		<div class="p-top2__block2">

			<?php
				$pag = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'posts_per_page' => '10',
					'post_type' => 'post',
					'paged' => $pag
				);
				query_posts($args);
				if(have_posts()):
			?>
			<ul>
				<?php
					while(have_posts()):the_post();
					$category = get_the_category();
					$cat_slug = $category[0]->category_nicename; //スラッグ
					$cat_name = $category[0]->cat_name; //カテゴリ名
				?>
				<li><a href="<?php the_permalink(); ?>">
					<p class="place"><?php echo $facility_label; ?></p>
					<p class="category"><?php echo $cat_name; ?></p>
					<div class="date"><?php the_time('Y.m.d'); ?></div>
					<h3><?php echo mb_substr(strip_tags(get_the_title()), 0, 45).'...'; ?></h3>
				</a></li>
				<?php endwhile; ?>
			</ul>
			<?php else: ?>

			<p>お知らせが見つかりませんでした。</p>

			<?php endif; ?>
			<?php wp_reset_query(); ?>


			<?php //ページネーション
			if (function_exists("pagination")) {
				pagination($additional_loop->max_num_pages);
			} ?>

		</div><!-- /.p-top2__block2 -->

	</div><!-- /.p-news1 -->


</div><!-- /.p-news -->