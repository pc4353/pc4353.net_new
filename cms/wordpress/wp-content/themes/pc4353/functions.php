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
add_image_size( '180-235', 180, 235, true ); // インストラクター紹介
add_image_size( '235-180', 235, 180, true ); // ブログ



/*===================================
titleタグの自動生成
===================================*/
//titleタグの追加
function setup_theme() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'setup_theme' );

//タイトルからキャッチフレーズを削除する
function remove_tagline($title) {
	if ( isset($title['tagline']) ) {
		unset( $title['tagline'] );
	}
	return $title;
}
add_filter( 'document_title_parts', 'remove_tagline' );

//セパレータを任意のものに変更する
function custom_title_separator($sep) {
	$sep = '|';
	return $sep;
}
add_filter( 'document_title_separator', 'custom_title_separator' );

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
add_filter( 'wp_list_categories', 'my_list_categories', 10, 2 );
function my_list_categories( $output, $args ) {
	$output = preg_replace('/<\/a>\s*\((\d+)\)/',' ($1)</a>',$output);
	return $output;
}

add_filter( 'get_archives_link', 'my_archives_link' );
function my_archives_link( $output ) {
	$output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/',' ($2)</a>',$output);
	return $output;
}


// カスタム投稿タイプ用カレンダー
function get_cpt_calendar($cpt, $initial = true, $echo = true) {
    global $wpdb, $m, $monthnum, $year, $wp_locale, $posts;
 
    $cache = array();
    $key = md5( $m . $monthnum . $year );
    if ( $cache = wp_cache_get( 'get_calendar', 'calendar' ) ) {
        if ( is_array($cache) && isset( $cache[ $key ] ) ) {
            if ( $echo ) {
                echo apply_filters( 'get_calendar',  $cache[$key] );
                return;
            } else {
                return apply_filters( 'get_calendar',  $cache[$key] );
            }
        }
    }
 
    if ( !is_array($cache) )
        $cache = array();
 
    // Quick check. If we have no posts at all, abort!
    if ( !$posts ) {
        $gotsome = $wpdb->get_var("SELECT 1 as test FROM $wpdb->posts WHERE post_type = '$cpt' AND post_status = 'publish' LIMIT 1");
        if ( !$gotsome ) {
            $cache[ $key ] = '';
            wp_cache_set( 'get_calendar', $cache, 'calendar' );
            return;
        }
    }
 
    if ( isset($_GET['w']) )
        $w = ''.intval($_GET['w']);
 
    // week_begins = 0 stands for Sunday
    $week_begins = intval(get_option('start_of_week'));
 
    // Let's figure out when we are
    if ( !empty($monthnum) && !empty($year) ) {
        $thismonth = ''.zeroise(intval($monthnum), 2);
        $thisyear = ''.intval($year);
    } elseif ( !empty($w) ) {
        // We need to get the month from MySQL
        $thisyear = ''.intval(substr($m, 0, 4));
        $d = (($w - 1) * 7) + 6; //it seems MySQL's weeks disagree with PHP's
        $thismonth = $wpdb->get_var("SELECT DATE_FORMAT((DATE_ADD('{$thisyear}0101', INTERVAL $d DAY) ), '%m')");
    } elseif ( !empty($m) ) {
        $thisyear = ''.intval(substr($m, 0, 4));
        if ( strlen($m) < 6 )
                $thismonth = '01';
        else
                $thismonth = ''.zeroise(intval(substr($m, 4, 2)), 2);
    } else {
        $thisyear = gmdate('Y', current_time('timestamp'));
        $thismonth = gmdate('m', current_time('timestamp'));
    }
 
    $unixmonth = mktime(0, 0 , 0, $thismonth, 1, $thisyear);
    $last_day = date('t', $unixmonth);
 
    // Get the next and previous month and year with at least one post
    $previous = $wpdb->get_row("SELECT MONTH(post_date) AS month, YEAR(post_date) AS year
        FROM $wpdb->posts
        WHERE post_date < '$thisyear-$thismonth-01'
        AND post_type = '$cpt' AND post_status = 'publish'
            ORDER BY post_date DESC
            LIMIT 1");
    $next = $wpdb->get_row("SELECT MONTH(post_date) AS month, YEAR(post_date) AS year
        FROM $wpdb->posts
        WHERE post_date > '$thisyear-$thismonth-{$last_day} 23:59:59'
        AND post_type = '$cpt' AND post_status = 'publish'
            ORDER BY post_date ASC
            LIMIT 1");
 
    /* translators: Calendar caption: 1: month name, 2: 4-digit year */
    $calendar_caption = _x('%1$s %2$s', 'calendar caption');
    $calendar_output = '<table id="wp-calendar">
    <thead>
    <tr>';
 
    if ( $previous ) {
        //$calendar_output .= "\n\t\t".'<td colspan="2" id="prev"><a href="' . get_month_link($previous->year, $previous->month) . '?post_type='.$cpt.'" title="' . esc_attr( sprintf(__('View posts for %1$s %2$s'), $wp_locale->get_month($previous->month), date('Y', mktime(0, 0 , 0, $previous->month, 1, $previous->year)))) . '">&laquo; ' . $wp_locale->get_month_abbrev($wp_locale->get_month($previous->month)) . '</a></td>';
        $calendar_output .= "\n\t\t".'<td colspan="2" id="prev"><a href="' . get_month_link($previous->year, $previous->month) . '?post_type='.$cpt.'" title="' . esc_attr( sprintf(__('View posts for %1$s %2$s'), $wp_locale->get_month($previous->month), date('Y', mktime(0, 0 , 0, $previous->month, 1, $previous->year)))) . '">&lt; 前月へ</a></td>';
    } else {
        $calendar_output .= "\n\t\t".'<td colspan="2" id="prev" class="pad">&nbsp;</td>';
    }
 
    $calendar_output .= "\n\t\t".'<td colspan="3" class="current_month">' . sprintf($calendar_caption, $wp_locale->get_month($thismonth), date('Y', $unixmonth)) . '</td>';
 
    if ( $next ) {
        $calendar_output .= "\n\t\t".'<td colspan="2" id="next"><a href="' . get_month_link($next->year, $next->month) . '?post_type='.$cpt.'" title="' . esc_attr( sprintf(__('View posts for %1$s %2$s'), $wp_locale->get_month($next->month), date('Y', mktime(0, 0 , 0, $next->month, 1, $next->year))) ) . '">次月へ &gt;</a></td>';
    } else {
        $calendar_output .= "\n\t\t".'<td colspan="2" id="next" class="pad">&nbsp;</td>';
    }
 
    $calendar_output .= '
    </tr>
    <tr>';
 
    $myweek = array();
 
    for ( $wdcount=0; $wdcount<=6; $wdcount++ ) {
        $myweek[] = $wp_locale->get_weekday(($wdcount+$week_begins)%7);
    }
 
    foreach ( $myweek as $wd ) {
        $day_name = (true == $initial) ? $wp_locale->get_weekday_initial($wd) : $wp_locale->get_weekday_abbrev($wd);
        $wd = esc_attr($wd);
        $calendar_output .= "\n\t\t<th scope=\"col\" title=\"$wd\">$day_name</th>";
    }
 
    $calendar_output .= '
    </tr>
    </thead>
 
    <tfoot>
    <tr>';
 
    $calendar_output .= '
    </tr>
    </tfoot>
 
    <tbody>
    <tr>';
 
    // Get days with posts
    $dayswithposts = $wpdb->get_results("SELECT DISTINCT DAYOFMONTH(post_date)
        FROM $wpdb->posts WHERE post_date >= '{$thisyear}-{$thismonth}-01 00:00:00'
        AND post_type = '$cpt' AND post_status = 'publish'
        AND post_date <= '{$thisyear}-{$thismonth}-{$last_day} 23:59:59'", ARRAY_N);
    if ( $dayswithposts ) {
        foreach ( (array) $dayswithposts as $daywith ) {
            $daywithpost[] = $daywith[0];
        }
    } else {
        $daywithpost = array();
    }
 
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false || stripos($_SERVER['HTTP_USER_AGENT'], 'camino') !== false || stripos($_SERVER['HTTP_USER_AGENT'], 'safari') !== false)
        $ak_title_separator = "\n";
    else
        $ak_title_separator = ', ';
 
    $ak_titles_for_day = array();
    $ak_post_titles = $wpdb->get_results("SELECT ID, post_title, DAYOFMONTH(post_date) as dom "
        ."FROM $wpdb->posts "
        ."WHERE post_date >= '{$thisyear}-{$thismonth}-01 00:00:00' "
        ."AND post_date <= '{$thisyear}-{$thismonth}-{$last_day} 23:59:59' "
        ."AND post_type = '$cpt' AND post_status = 'publish'"
    );
    if ( $ak_post_titles ) {
        foreach ( (array) $ak_post_titles as $ak_post_title ) {
 
                /** This filter is documented in wp-includes/post-template.php */
                $post_title = esc_attr( apply_filters( 'the_title', $ak_post_title->post_title, $ak_post_title->ID ) );
 
                if ( empty($ak_titles_for_day['day_'.$ak_post_title->dom]) )
                    $ak_titles_for_day['day_'.$ak_post_title->dom] = '';
                if ( empty($ak_titles_for_day["$ak_post_title->dom"]) ) // first one
                    $ak_titles_for_day["$ak_post_title->dom"] = $post_title;
                else
                    $ak_titles_for_day["$ak_post_title->dom"] .= $ak_title_separator . $post_title;
        }
    }
 
    // See how much we should pad in the beginning
    $pad = calendar_week_mod(date('w', $unixmonth)-$week_begins);
    if ( 0 != $pad )
        $calendar_output .= "\n\t\t".'<td colspan="'. esc_attr($pad) .'" class="pad">&nbsp;</td>';
 
    $daysinmonth = intval(date('t', $unixmonth));
    for ( $day = 1; $day <= $daysinmonth; ++$day ) {
        if ( isset($newrow) && $newrow )
            $calendar_output .= "\n\t</tr>\n\t<tr>\n\t\t";
        $newrow = false;
 
        if ( $day == gmdate('j', current_time('timestamp')) && $thismonth == gmdate('m', current_time('timestamp')) && $thisyear == gmdate('Y', current_time('timestamp')) )
            $calendar_output .= '<td id="today">';
        else
            $calendar_output .= '<td>';
 
        if ( in_array($day, $daywithpost) ) // any posts today?
                $calendar_output .= '<a href="' . get_day_link( $thisyear, $thismonth, $day ) . '?post_type='.$cpt.'" title="' . esc_attr( $ak_titles_for_day[ $day ] ) . "\">$day</a>";
        else
            $calendar_output .= '<span>'.$day.'</span>';
        $calendar_output .= '</td>';
 
        if ( 6 == calendar_week_mod(date('w', mktime(0, 0 , 0, $thismonth, $day, $thisyear))-$week_begins) )
            $newrow = true;
    }
 
    $pad = 7 - calendar_week_mod(date('w', mktime(0, 0 , 0, $thismonth, $day, $thisyear))-$week_begins);
    if ( $pad != 0 && $pad != 7 )
        $calendar_output .= "\n\t\t".'<td class="pad" colspan="'. esc_attr($pad) .'">&nbsp;</td>';
 
    $calendar_output .= "\n\t</tr>\n\t</tbody>\n\t</table>";
 
    $cache[ $key ] = $calendar_output;
    wp_cache_set( 'get_calendar', $cache, 'calendar' );
 
    if ( $echo )
        echo apply_filters( 'get_calendar',  $calendar_output );
    else
        return apply_filters( 'get_calendar',  $calendar_output );
 
}





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


	// お知らせ
	register_post_type( 'news',
		array(
			'labels' => array(
			'name' => __( 'お知らせ' ),
			'singular_name' => __( 'お知らせ' )
			),
			'public' => true,
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
			'menu_position' =>5,
			'has_archive' => true
		)
	);

	// お知らせ カテゴリ
	register_taxonomy(
		'news-category',
		'news',
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'カテゴリ',
			'singular_label' => 'カテゴリ',
			'public' => true,
			'show_ui' => true
		)
	);


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

	// インストラクター紹介
	register_post_type( 'instructor',
		array(
			'labels' => array(
				'name' => __( 'インストラクター紹介' ),
				'singular_name' => __( 'インストラクター紹介' )
			),
			'public' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'menu_position' =>5,
			'has_archive' => true
		)
	);

	// インストラクター紹介 カテゴリ
	/*register_taxonomy(
		'instructor-category',
		'instructor',
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'カテゴリ',
			'singular_label' => 'カテゴリ',
			'public' => true,
			'show_ui' => true
		)
	);*/


	// 教室紹介ブログ
	register_post_type( 'blog',
		array(
			'labels' => array(
			'name' => __( '教室紹介ブログ' ),
			'singular_name' => __( '教室紹介ブログ' )
			),
			'public' => true,
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
			'menu_position' =>5,
			'has_archive' => true
		)
	);

	// 教室紹介ブログ カテゴリ
	register_taxonomy(
		'blog-category',
		'blog',
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