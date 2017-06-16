<?php


/*===================================
WP更新通知を消す
===================================*/
add_filter('pre_site_transient_update_core', create_function('$a', "return null;"));

// プラグイン更新通知非表示
remove_action('load-update-core.php', 'wp_update_plugins');
add_filter('pre_site_transient_update_plugins', create_function('$a', "return null;"));

// テーマ更新通知非表示
remove_action('load-update-core.php', 'wp_update_themes');
add_filter('pre_site_transient_update_themes', create_function('$a', "return null;"));





// generatorを非表示にする
remove_action('wp_head', 'wp_generator');




// アイキャッチ画像
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(200, 200, true );
add_image_size( '224-221', 224, 221, true ); // 受講生の声
add_image_size( '112-112', 112, 112, true ); // 受講生の声（TOP）





/*===================================
自動整形をはずす
===================================*/
/*remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');*/




// ページネーション
function pagination($pages = '', $range = 2) {
	$showitems = ($range * 2)+1;

	global $paged;
	if(empty($paged)) $paged = 1;

	if($pages == '')
	{
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages) {
			$pages = 1;
		}
	}

	if(1 != $pages) {
		echo "<div class='pagination'>";
		//echo "<div class='pagination'><span>Page ".$paged." of ".$pages."</span>";
		//if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
		if($paged > 1) echo "<a class='prev' href='".get_pagenum_link($paged - 1)."'>&laquo;</a>";

		for ($i=1; $i <= $pages; $i++) {
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
				echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive'>".$i."</a>";
			}
		}
		if ($paged < $pages) echo "<a class='next' href='".get_pagenum_link($paged + 1)."'>&raquo;</a>";
		//if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
		echo "</div>";
	}
}



// 親ページのスラッグを取得
function is_parent_slug() {
	global $post;
	if ($post->post_parent) {
		$post_data = get_post($post->post_parent);
		return $post_data->post_name;
	}
}


// トップページでページネーションを機能させる
add_action( 'pre_get_posts', 'home_posts_type' );
function home_posts_type( $wp_query ) {
	if ( ! is_admin() && $wp_query->is_main_query() && $wp_query->is_home() ) {
		$wp_query->set( 'post_type', 'post' );
		$wp_query->set( 'posts_per_page', 5 );
	}
}




/* カテゴリとアーカイブの投稿数をaタグに含める
-----------------------------------*/
/*add_filter( 'wp_list_categories', 'my_list_categories', 10, 2 );
function my_list_categories( $output, $args ) {
	$output = preg_replace('/<\/a>\s*\((\d+)\)/',' ($1)</a>',$output);
	return $output;
}

add_filter( 'get_archives_link', 'my_archives_link' );
function my_archives_link( $output ) {
	$output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/',' ($2)</a>',$output);
	return $output;
}*/





// カテゴリ選択をラジオボタンに
function my_print_footer_scripts() {
	echo '<script type="text/javascript">
	//<![CDATA[
	jQuery(document).ready(function($){
		$(".categorychecklist input[type=checkbox]").each(function(){
			$check = $(this);
			var checked = $check.attr("checked") ? \' checked="checked"\' : \'\';
			$(\'<input type="radio" id="\' + $check.attr("id")
			+ \'" name="\' + $check.attr("name") + \'"\'
			+ checked
			+ \' value="\' + $check.val()
			+ \'"/>\'
			).insertBefore($check);
			$check.remove();
		});
	});
	//]]>
	</script>';
}
add_action('admin_print_footer_scripts', 'my_print_footer_scripts', 21);






/*===================================
カスタム投稿
===================================*/
add_action( 'init', 'create_post_type' );
function create_post_type() {

	// 受講生の声
	register_post_type( 'voice',
		array(
			'labels' => array(
				'name' => __( '受講生の声' ),
				'singular_name' => __( '受講生の声' )
			),
			'public' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'menu_position' =>5,
			'has_archive' => true
		)
	);

	// 受講生の声 カテゴリ
	register_taxonomy(
		'voice-category',
		'voice',
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'カテゴリ',
			'singular_label' => 'カテゴリ',
			'public' => true,
			'show_ui' => true
		)
	);


}





/*===================================
管理バー 項目非表示
===================================*/

//全員
//function remove_bar_menus( $wp_admin_bar ) {
	//$wp_admin_bar->remove_menu( 'wp-logo' );      // ロゴ
	//$wp_admin_bar->remove_menu( 'site-name' );    // サイト名
	//$wp_admin_bar->remove_menu( 'view-site' );    // サイト名 -> サイトを表示
	//$wp_admin_bar->remove_menu( 'dashboard' );    // サイト名 -> ダッシュボード (公開側)
	//$wp_admin_bar->remove_menu( 'themes' );       // サイト名 -> テーマ (公開側)
	//$wp_admin_bar->remove_menu( 'customize' );    // サイト名 -> カスタマイズ (公開側)
	//$wp_admin_bar->remove_menu( 'comments' );     // コメント
	//$wp_admin_bar->remove_menu( 'updates' );      // 更新
	//$wp_admin_bar->remove_menu( 'view' );         // 投稿を表示
	//$wp_admin_bar->remove_menu( 'new-content' );  // 新規
	//$wp_admin_bar->remove_menu( 'new-post' );     // 新規 -> 投稿
	//$wp_admin_bar->remove_menu( 'new-media' );    // 新規 -> メディア
	//$wp_admin_bar->remove_menu( 'new-link' );     // 新規 -> リンク
	//$wp_admin_bar->remove_menu( 'new-page' );     // 新規 -> 固定ページ
	//$wp_admin_bar->remove_menu( 'new-user' );     // 新規 -> ユーザー
	//$wp_admin_bar->remove_menu( 'my-account' );   // マイアカウント
	//$wp_admin_bar->remove_menu( 'user-info' );    // マイアカウント -> プロフィール
	//$wp_admin_bar->remove_menu( 'edit-profile' ); // マイアカウント -> プロフィール編集
	//$wp_admin_bar->remove_menu( 'logout' );       // マイアカウント -> ログアウト
	//$wp_admin_bar->remove_menu( 'search' );       // 検索 (公開側)
//}
//add_action('admin_bar_menu', 'remove_bar_menus', 201);

function remove_bar_menus_user( $wp_admin_bar ) {
	$wp_admin_bar->remove_menu( 'comments' );     // コメント
	$wp_admin_bar->remove_menu( 'search' );       // 検索 (公開側)
}

//管理者以外
if(!current_user_can('administrator')){
	add_action('admin_bar_menu', 'remove_bar_menus_user', 201);
}



?>