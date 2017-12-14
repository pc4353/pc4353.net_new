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

	<div class="p-top9 c-wrap u-mt40">

		<div class="p-top9__block1">
			<ul>
				<?php
					if(is_date()){
					}else{
						$category = $_GET['category'];
						echo $category;
						if($category){
							$metaquerysp[] = array(
								'post_type'=> 'blog',
								'key'=>'category',
								'value'=> $category,
								'compare' => 'IN'
							);
						}
						$pag = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'post_type' => 'blog',
							'meta_query' => $metaquerysp,
							'posts_per_page' => '6',
							'paged' => $pag
						);
						query_posts($args);
					}
					if (have_posts()) : while (have_posts()) : the_post();

					$terms = get_the_terms($post_id, 'blog-category');
					if($terms) {
						foreach ( $terms as $term ) {
							$cat_slug = $term -> slug;
							$cat_name = $term -> name;
						}
					}else{
						$cat_slug = '';
						$cat_name = '';
					}
					$type = get_field('category');
					if($type=='event'){$type_name='イベント情報';}
					elseif($type=='campaign'){$type_name='キャンペーン情報';}
					elseif($type=='school'){$type_name='教室情報';}
				?>
				<li><a href="<?php the_permalink(); ?>">
					<div class="img1"><?php
						if(has_post_thumbnail()) {the_post_thumbnail('235-180');}
						else {echo '<img src="/common/img/common/noimage_235-180.png" width="235" height="180" alt="" />';}
					?></div>
					<div class="txt1">
						<p class="date"><?php the_time('Y.m.d'); ?></p>
						<h3><?php the_title(); ?></h3>
						<p class="content"><?php echo mb_substr(strip_tags(get_the_content()), 0, 30).'...'; ?></p>
					</div>
					<p class="category"><?php echo $type_name; ?></p>
				</a></li>
				<?php endwhile; else : endif; ?>
			</ul>
		</div><!-- /.p-top9__block1 -->



		<?php get_sidebar(); ?>



		<?php //ページネーション
		if (function_exists("pagination")) {
			pagination($additional_loop->max_num_pages);
		} ?>

	</div><!-- /.p-top9 -->

</div><!-- /.p-top -->



</div><!-- /#contents -->


<?php get_footer(); ?>