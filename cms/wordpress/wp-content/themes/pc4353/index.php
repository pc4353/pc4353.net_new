<?php get_header(); ?>


<?php

$title = "お知らせ";
$description = "パソコン市民講座からのお知らせ";
$keywords = "お知らせ,最新情報,ニュース,news,";
$pageId = 'course';

?>

<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン教室なら「市民講座」</a></li>
		<li><?=$title?></li>
	</ul>
</div><!-- /.l-breadcrumb -->

<div class="l-pagetitle">
<div class="c-wrap">
	<h1><?=$title?></h1>
</div>
</div><!-- /.l-pagetitle -->


<div id="contents">


<div class="p-top">

	<div class="p-top8 c-wrap u-mt40">

		<ul>
			<?php
				$pag = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'post_type' => 'post',
					'showposts' => '5',
					'paged' => $pag
				);
				query_posts($args);
				if (have_posts()) : while (have_posts()) : the_post();
			?>
			<li><a href="<?php the_permalink(); ?>">
				<p class="date"><?php the_time('Y.m.d'); ?></p>
				<h3><?php the_title(); ?></h3>
			</a></li>
			<?php endwhile; else : endif; ?>
		</ul>


		<?php //ページネーション
		if (function_exists("pagination")) {
			pagination($additional_loop->max_num_pages);
		} ?>

	</div><!-- /.p-top8 -->

</div><!-- /.p-top -->



</div><!-- /#contents -->



<?php get_footer(); ?>