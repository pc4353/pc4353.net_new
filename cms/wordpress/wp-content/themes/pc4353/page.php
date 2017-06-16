<?php get_header(); ?>

<?php

//テンプレート埋め込み
if(
	is_page(array('news'))
){
if(is_parent_slug()){
	$parent_slug=is_parent_slug().'-';
}else{
	$parent_slug='';
}

include(get_template_directory().'/page/'.$parent_slug.''.get_page($page_id)->post_name.'.php');


//管理画面で編集するページ
}else{
while (have_posts()){ the_post();the_content();}

}?>

<?php get_footer(); ?>