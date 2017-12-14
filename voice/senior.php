<?php

$title = "受講生の声(シニアこそパソコンを)";
$description = "シニアの方こそ楽しめる！パソコン市民講座を受講中の皆様の声。今日も生徒さんの「できた！」喜びの声が続々と！";
$keywords = "受講生,声,生徒,";
$pageId = 'voice';
include_once('../lib/home/config.php');
include_once('../lib/home/header.php');

?>

<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン教室なら「パソコン市民講座」</a></li>
		<li><?=$title?></li>
	</ul>
</div><!-- /.l-breadcrumb -->

<div class="l-pagetitle">
<div class="c-wrap">
	<h1><?=$title?></h1>
</div>
</div><!-- /.l-pagetitle -->

<div id="contents">

<div class="u-center"><img src="/img/kv_voice.jpg" alt="今日も生徒さんの「できた！」喜びの声が続々と！次はあなたが「パソコンを楽しむ」番ですよ！" width="858" height="195" /></div>

<div class="lnavi">
<p>各コースの「受講生の声」：<a href="/voice/" class="arrow">初めてのパソコン</a>　<a href="/voice/works.php" class="arrow">仕事に活かす</a>　<a href="/voice/senior.php" class="arrow current">シニアこそパソコンを</a></p>
</div>

<h2 class="c-title2">全国の教室にお寄せ頂いた受講生の方々の喜びの声の一部をご紹介</h2>
<h3 class="c-title1">シニアこそパソコンを（<a href="/course/senior.php">コース紹介はこちらから</a>）</h3>

<?php
	require('../cms/wordpress/wp-load.php');
	$args = array(
		'post_type' => 'voice',
		'showposts' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'voice-category',
				'field' => 'slug',
				'terms' => 'senior'
			)
		)
	);
	query_posts($args);
	if (have_posts()) : while (have_posts()) : the_post();
	$terms = get_the_terms($post_id, 'voice-category');
	if($terms) {
		foreach ( $terms as $term ) {
			$cat_slug = $term -> slug;
			$cat_name = $term -> name;
		}
	}
?>

<div class="section3 clearfix mgnT20" id="<?php echo 'voice-'.get_the_ID(); ?>">
<h4><?php the_title(); if(get_field('name')){echo '['.get_field('name').']';} ?></h4>
<span class="fl mgnR10"><?php if(has_post_thumbnail()) {the_post_thumbnail('224-221');} ?></span>
<table class="about">
<?php if(get_field('trigger')){ ?>
<tr>
	<th width="40%">受講のきっかけは？</th>
	<td><?php the_field('trigger'); ?></td>
</tr>
<?php } ?>
<?php if(get_field('goal')){ ?>
<tr>
	<th>現在の目標は何ですか？</th>
	<td><?php the_field('goal'); ?></td>
</tr>
<?php } ?>
<tr>
	<td colspan="2"><?php the_field('voice'); ?>
	<?php
		if(get_field('school')){
		$school = get_field_object('school');
		//print_r($school);
		$school_value = $school['value'];
		$school_label = $school['choices'][$school_value]; ?><br />
	<a href="/<?php echo $school_value; ?>/" class="arrow" target="_blank">パソコン市民講座 <?php echo $school_label; ?></a><?php } ?></td>
</tr>
</table>
</div>

<?php endwhile; else : endif; ?>
<?php wp_reset_query(); ?>

<?php /*<div class="section3 clearfix">
<h4>学べることが健康の秘訣！［近藤 早苗さん（82）］</h4>
<img src="/img/voice_26.jpg" class="fl" alt="近藤 早苗さん（82）" width="214" height="221" />
<table class="about">
<tr>
	<th width="40%">受講のきっかけは？</th>
	<td>パソコンを習ってみたかった</td>
</tr>
<tr>
	<th>現在の目標は何ですか？</th>
	<td>何でも習って覚えてみたいです！</td>
</tr>
<tr>
	<td colspan="2">教室に通って、いろんなことを教えてもらえることの喜び。自分で出来た時のうれしさ。教室で学べることがとてもうれしいです。<br />先生方も親切で何度聞いても教えてもらえることが出来てすごく良いと思いました。パソコンは習えば習うほど、奥が深いお宝もの。今では税金の申告や病気の検索。旅行に行けば写真も編集でき、パソコンはなんと楽しい機械。今ではiPadも利用して、毎日ゲームも楽しめます。なかなか覚えられませんが、この先も元気に教室を続けていきたいです。<br />
	<a href="/toyohashi/" class="arrow" target="_blank">パソコン市民講座 バロー豊橋教室（愛知県）</a></td>
</tr>
</table>
</div>

<div class="section3 clearfix">
<h4>色々な世代の方と交流が出来て嬉しいです。［前川 美子さん（68）］</h4>
<img src="/img/voice_27.jpg" class="fl" alt="前川 美子さん（68）" width="214" height="221" />
<table class="about">
<tr>
	<th width="40%">受講のきっかけは？</th>
	<td>年賀状やお知らせを作りたい</td>
</tr>
<tr>
	<th>現在の目標は何ですか？</th>
	<td>エクセルで会計報告を作成したい</td>
</tr>
<tr>
	<td colspan="2">今までパソコンは難しいと思っていました。しかし入力練習として毎日一行日記を付けることにより、自分の予定を管理しながら、操作に慣れていきました。何か一つ出来る様になると楽しくなってきて他にも色々覚えたいと思う様になりました。教室イベントに参加すれば、色々な世代の方とも出会いがあり、会話も楽しみながらパソコンの新しい知識を得る事が出来るので、あっという間に時間が過ぎていきます！<br />
	<a href="/nishikobe/" class="arrow" target="_blank">パソコン市民講座 イズミヤ西神戸教室（兵庫県）</a></td>
</tr>
</table>
</div>

<div class="section3 clearfix">
<h4>皆さん親切です［猪子 弘さん（90）］</h4>
<img src="/img/voice_28.jpg" class="fl" alt="猪子 弘さん（90）" width="214" height="221" />
<table class="about">
<tr>
	<th width="40%">受講のきっかけは？</th>
	<td>ボケ防止</td>
</tr>
<tr>
	<th>現在の目標は何ですか？</th>
	<td>最終目標はエクセルで家賃管理</td>
</tr>
<tr>
	<td colspan="2">iPadで入会しましたが、今はパソコンも新しく購入し、Win10をしています。最終目標はエクセルでの家賃管理。インストラクターの皆さんが優しく親切に教えて下さるので本当に良かったです。<br />
	<a href="/nishikobe/" class="arrow" target="_blank">パソコン市民講座 はやし山本教室（大阪府）</a></td>
</tr>
</table>
</div>*/?>

<?php

include_once('../lib/home/ss.php');

?>
</div>
<?php

include_once('../lib/home/footer.php');

?>