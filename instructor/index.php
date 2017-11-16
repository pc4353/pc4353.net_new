<?php

$title = "インストラクター紹介";
$description = "パソコン市民講座のインストラクターをご紹介。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！";
$keywords = "インストラクター,先生,";
$pageId = 'instructor';
include_once('../lib/home/config.php');
include_once('../lib/home/header.php');

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


<div class="u-center"><img src="/img/kv_instructor.jpg" alt="「できない」悩みが「楽しくできる！」喜びの笑顔に変わる。私たちが熱い想いといっぱいの笑顔で、必ずできるようにフォローします！" width="858" height="195" /></div>

<?php
	require('../cms/wordpress/wp-load.php');
	$args = array(
		'post_type' => 'instructor',
		'showposts' => -1
	);
	query_posts($args);
	if (have_posts()) : while (have_posts()) : the_post();
?>
<h2 class="c-title2"><?php the_title(); ?></h2>
<div class="section clearfix">
<div class="fl" style="margin-right:15px;"><?php if(has_post_thumbnail()) {the_post_thumbnail('180-235');} ?></div>
<table class="about">
<?php if(get_field('field')){ ?>
<tr>
	<th width="25%">好きな分野</th>
	<td><?php the_field('field'); ?></td>
</tr>
<?php } ?>
<?php if(get_field('hobby')){ ?>
<tr>
	<th>趣味</th>
	<td><?php the_field('hobby') ?></td>
</tr>
<?php } ?>
<tr>
	<td colspan="2"><?php the_content(); ?></td>
</tr>
</table>
</div>

<?php endwhile; else : endif; ?>
<?php wp_reset_query(); ?>

<?php /*<h2 class="c-title2">みやぶ 先生</h2>
<div class="section clearfix">
<img src="/img/inst_miyabu.jpg" class="fl" alt="インストラクター写真" width="180" height="235" />
<table class="about">
<tr>
	<th width="25%">好きな分野</th>
	<td>インターネット</td>
</tr>
<tr>
	<th>趣味</th>
	<td>犬、写真、旅行、食べ歩き</td>
</tr>
<tr>
	<td colspan="2">パソコンが普及していない時代って、どんな生活だったかな？って思い出せないほど、パソコンが生活に欠かせなくなりましたね。パソコン市民講座で、皆さまの「あんなことができたらいいな」という気持ちを全力でサポートさせてください。皆さまの「あっ！こんなことができた♪」という喜びを一緒に味あわせてください。<br />新しいことができるようになるって、ドキドキ☆ワクワクしますよね。皆さまとの出会いを楽しみにしています。一緒に頑張りましょう！

</td>
</tr>
</table>
</div>

<h2 class="c-title2">もり 先生</h2>
<div class="section clearfix">
<img src="/img/inst_mori.jpg" class="fl" alt="インストラクター写真" width="180" height="235" />
<table class="about">
<tr>
	<th width="25%">好きな分野</th>
	<td>ワード・グラフィック</td>
</tr>
<tr>
	<th>趣味</th>
	<td>読書・オークション</td>
</tr>
<tr>
	<td colspan="2">私がパソコンを始めたきっかけは、再就職のためでした。ですが、今では仕事以上に生活に欠かせないものになっています。年賀状を作ったり、CDやDVDのラベルを作ったりと、[オリジナル]のものを作ることが、とても楽しくてたまりません♪オークションで欲しい物を安く手にいれるのも快感です♪みなさんが、パソコンを使いこなせるようになるまで　しっかり・じっくり・丁寧に、お手伝いさせていただきます。いっしょに楽しみながら、頑張りましょう！</td>
</tr>
</table>
</div>

<h2 class="c-title2">すどう 先生</h2>
<div class="section clearfix">
<img src="/img/inst_sudo.jpg" class="fl"  alt="インストラクター写真" width="180" height="235" />
<table class="about">
<tr>
	<th width="25%">好きな分野</th>
	<td>パワーポイント・DVD編集</td>
</tr>
<tr>
	<th>趣味</th>
	<td>息子のサッカー観戦</td>
</tr>
<tr>
	<td colspan="2">今や一家に一台から、一人一台にとなってきたパソコン！！「パソコンを使ってみたいけれど、できるかしら？」「自己流で使ってきたけど、もっと便利に使いこなしたい･･･」と思われている方も多いのでは・・・・。そうお思いの皆様、まずは教室までお越しください。教室で学習したことが、自宅でも、仕事でも、自分ひとりで作成できるように、私たちインストラクターと一緒に、楽しく学習しましょう。</td>
</tr>
</table>
</div>

<!-- <h2 class="c-title2">おおはし 先生</h2>
<div class="section clearfix">
<img src="/img/inst_ohashi.jpg" class="fl" alt="インストラクター写真" width="214" height="221" />
<table class="about">
<tr>
	<th width="25%">好きな分野</th>
	<td>タイピング</td>
</tr>
<tr>
	<th>趣味</th>
	<td>旅行（温泉中心）</td>
</tr>
<tr>
	<td colspan="2">私の趣味は旅行ですが、その計画を練る時にパソコンはとても役に立ちますね☆<br />● 路線検索　● 渋滞情報　● 当地名物検索　● おすすめ温泉情報 …<br />みなさんも市民講座でインターネット活用法をしっかりと学んでくださいね！旅行に限らず多方面で役に立つことがたくさんあります！<br />教室に来ていただければ、私は他の誰にも負けない笑顔で教えます(^_^)/~</td>
</tr>
</table>
</div> -->*/?>

<?php

include_once('../lib/home/ss.php');

?>
</div>
<?php

include_once('../lib/home/footer.php');

?>