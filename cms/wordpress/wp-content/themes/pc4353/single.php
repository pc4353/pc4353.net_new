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
		<li><a href="/news/">お知らせ</a></li>
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


	<div class="p-news2 c-wrap u-mt40">

		<div class="p-news2__block1">

			<?php
				if(have_posts()):while(have_posts()):the_post();
				$category = get_the_category();
				$cat_slug = $category[0]->category_nicename;
				$cat_name = $category[0]->cat_name;
			?>

			<div class="box1">
				<h3 class="c-title3"><?php the_title(); ?></h3>
				<p class="date"><?php the_time('Y.m.d'); ?></p>
			</div>

			<div class="content" id="entrybody"><?php the_content(); ?></div>

			<?php endwhile; else: endif; ?>

		</div><!-- /.p-news2__block1 -->


		<div class="p-news2__block2">
			<ul>
				<li class="next">&nbsp;<?php next_post_link('%link', '<< 次へ'); ?></li>
				<li class="archive"><a href="/news/">一覧へ戻る</a></li>
				<li class="prev"><?php previous_post_link('%link', '前へ >>'); ?>&nbsp;</li>
			</ul>
		</div><!-- /.p-news2__block2 -->

	</div><!-- /.p-news1 -->


</div><!-- /.p-news -->



</div><!-- /#contents -->


<?php get_footer(); ?>