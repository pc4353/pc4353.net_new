<?php get_header(); ?>


<?php

$title = "ブログ";
$description = "パソコン市民講座からのブログ";
$keywords = "ブログ,最新情報,blog,";
$pageId = 'blog';

?>

<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン市民講座トップ</a></li>
		<li><a href="/blog/">ブログ</a></li>
		<li><?php the_title(); ?></li>
	</ul>
</div><!-- /.l-breadcrumb -->

<div class="l-pagetitle">
<div class="c-wrap">
	<h1><?=$title?></h1>
</div>
</div><!-- /.l-pagetitle -->


<div id="contents">


<div class="p-news">


	<div class="p-top9 p-news2 c-wrap u-mt40">

		<div class="p-top9__block1">

			<div class="p-news2__block1">

				<?php
					if (have_posts()) : while (have_posts()) : the_post();

					$terms = get_the_terms($post_id, 'blog-category');
					if($terms) {
						foreach ( $terms as $term ) {
							$cat_slug = $term -> slug;
							$cat_name = $term -> name;
						}
					}
					$type = get_field('category');
					if($type=='event'){$type_name='イベント情報';}
					elseif($type=='campaign'){$type_name='キャンペーン情報';}
					elseif($type=='school'){$type_name='教室情報';}
				?>

				<div class="box1">
					<h3 class="c-title3"><?php the_title(); ?></h3>
					<p class="date"><?php the_time('Y.m.d'); ?>　<?php echo '<a href="/'.$cat_slug.'/">'.$cat_name.'</a>'; ?></p>
				</div>

				<div class="content" id="entrybody"><?php the_content(); ?></div>

				<?php endwhile; else: endif; ?>

			</div><!-- /.p-news2__block1 -->


			<div class="p-news2__block2">
				<ul>
					<li class="next">&nbsp;<?php next_post_link('%link', '<< 次へ'); ?></li>
					<li class="archive"><a href="/blog/">一覧へ戻る</a></li>
					<li class="prev"><?php previous_post_link('%link', '前へ >>'); ?>&nbsp;</li>
				</ul>
			</div><!-- /.p-news2__block2 -->

		</div><!-- /.p-top9__block1 -->


		<?php get_sidebar(); ?>


	</div><!-- /.p-news1 -->




</div><!-- /.p-news -->



</div><!-- /#contents -->


<?php get_footer(); ?>