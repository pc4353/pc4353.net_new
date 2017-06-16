<?php

$title = "受講生の声(仕事に活かす)";
$description = "仕事に活かすために、パソコン市民講座を受講中の皆様の声。今日も生徒さんの「できた！」喜びの声が続々と！";
$keywords = "受講生,声,生徒,";
$pageId = 'voice';
include_once('../lib/home/config.php');
include_once('../lib/home/header.php');

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

<div class="u-center"><img src="/img/kv_voice.jpg" alt="今日も生徒さんの「できた！」喜びの声が続々と！次はあなたが「パソコンを楽しむ」番ですよ！" width="858" height="195" /></div>

<div class="lnavi">
<p>各コースの「受講生の声」：<a href="/voice/" class="arrow">初めてのパソコン</a>　<a href="/voice/works.php" class="arrow current">仕事に活かす</a>　<a href="/voice/senior.php" class="arrow">シニアこそパソコンを</a></p>
</div>

<h2 class="c-title2">全国の教室にお寄せ頂いた受講生の方々の喜びの声の一部をご紹介</h2>
<h3 class="c-title1">仕事に活かす（<a href="/course/works.php">コース紹介はこちらから</a>）</h3>

<?php
	require('../cms/wordpress/wp-load.php');
	$args = array(
		'post_type' => 'voice',
		'showposts' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'voice-category',
				'field' => 'slug',
				'terms' => 'works'
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
<h4>パソコンでできることを増やしていきたい［野村 千穂さん］</h4>
<img src="/img/voice_29.jpg" class="fl" alt="野村 千穂さん" width="224" height="221" />
<table class="about">
<tr>
	<th width="40%">受講のきっかけは？</th>
	<td>パソコンが全くできなかった為</td>
</tr>
<tr>
	<th>現在の目標は何ですか？</th>
	<td>MOS Word 合格して、パソコンを使えるようになる</td>
</tr>
<tr>
	<td colspan="2">パソコンを一から学んで、今まで知っていると思い込んでいたところも正しく知ることができました。先生たちも皆さんとっても優しく教えて下さるので、最近何かと長続きできなかった習い事の中で今までで一番長くお世話になっています。これからもパソコンでできることが増えればいいなと思っています。又仕事でつかえるようになれたら嬉しいです。<br />
	<a href="/kamatori/" class="arrow" target="_blank">パソコン市民講座 イオン鎌取教室（千葉県）</a></td>
</tr>
</table>
</div>

<div class="section3 clearfix mgnT20">
<h4>履歴書に記載できる資格を取得したくて［齋藤 学さん（船橋市 在住）］</h4>
<img src="/img/voice_14.jpg" class="fl" alt="齋藤 学さん" width="224" height="221" />
<table class="about">
<tr>
	<th width="40%">受講のきっかけは？</th>
	<td>転職を機に、資格取得で自分の強みを持つために</td>
</tr>
<tr>
	<th>現在の目標は何ですか？</th>
	<td>MOSの取得を目指して</td>
</tr>
<tr>
	<td colspan="2">8年前にもこちらの教室に通ってパソコン検定3級を取得した経験があります。今回2回目の入会となりますが、履歴書に記載できる資格を取得したくて、再入会しました。転職を考えていたときにハローワークの方に「履歴書にかける資格」の重要性をアドバイスいただき、パソコンを使った仕事に就きたくて、MOSの取得を目指しています。先日Wordには合格したので、次はExcelです。<br />社会には、パソコンを使わない仕事の方が少ないので、パソコン資格の取得はお勧めですよ。<br />
	<a href="/tsudanuma/" class="arrow" target="_blank">パソコン市民講座 イトーヨーカドー津田沼教室（千葉県）</a></td>
</tr>
</table>
</div>

<div class="section3 clearfix mgnT20">
<h4>基本的なスキルを身に付けたい［三瓶さん］</h4>
<img src="/img/voice_23.jpg" class="fl" alt="三瓶さん" width="224" height="221" />
<table class="about">
<tr>
	<th width="40%">受講のきっかけは？</th>
	<td>事務仕事に必要な基本スキルを身に付けたかった</td>
</tr>
<tr>
	<th>現在の目標は何ですか？</th>
	<td>ビジネス講座で身に付けたスキルでWord2級、Excel2級、PowerPoint上級とすべての資格取得</td>
</tr>
<tr>
	<td colspan="2">事務の仕事をはじめるにあたって基本的なスキルを身に付けたいと思い、インターネットでパソコン教室を検索しました。他のパソコン教室と比較して、料金体系が明確だったことと、映像での授業もしっかり機能説明がされていて、聞き逃したところの巻き戻しや、自宅での復習もできるところが自分の求める授業スタイルにあっていると思い、体験後入会を決めました。今はビジネス講座で身に付けたスキルでWord2級、Excel2級、PowerPoint上級とすべての資格取得を目標に頑張っています。<br />
	<a href="/tsudanuma/" class="arrow" target="_blank">パソコン市民講座 イトーヨーカドー津田沼教室（千葉県）</a></td>
</tr>
</table>
</div>

<div class="section3 clearfix mgnT20">
<h4>身につけたパソコンスキルを活かして起業したい！［中嶋さん］</h4>
<img src="/img/voice_24.jpg" class="fl" alt="中嶋さん" width="224" height="221" />
<table class="about">
<tr>
	<th width="40%">受講のきっかけは？</th>
	<td>パソコンへの苦手意識を無くしたかった</td>
</tr>
<tr>
	<th>現在の目標は何ですか？</th>
	<td>Excel・Wordを使いこなして仕事に活かしたい</td>
</tr>
<tr>
	<td colspan="2">昔からパソコンやデジタルデバイスに対して苦手意識を持っていました。とにかくパソコンの画面を見続けることが苦痛でした。そんな私が2015年8月から市民講座に通いはじめて12月にExcel試験に合格して、3月にWord試験にチャレンジしようとしています。操作を覚えていくうちにパソコンへの苦手意識がなくなりいつの間にか楽しくなっていました。将来は身につけたパソコンスキルを活かして起業しようと思っています。<br />
	<a href="/tokorozawa/" class="arrow" target="_blank">パソコン市民講座 イオン所沢教室（埼玉県）</a></td>
</tr>
</table>
</div>

<div class="section3 clearfix mgnT20">
<h4>目標達成できました！［鈴木さん］</h4>
<img src="/img/voice_25.jpg" class="fl" alt="鈴木さん" width="224" height="221" />
<table class="about">
<tr>
	<th width="40%">受講のきっかけは？</th>
	<td>WordとExcelを使いこなしたい</td>
</tr>
<tr>
	<th>現在の目標は何ですか？</th>
	<td>MOS資格取得</td>
</tr>
<tr>
	<td colspan="2">再就職のために、WordとExcelのスキルアップとMOS資格取得を目指しました。今までは我流でもなんとか使いこなしていたWordとExcelでしたが、分からない事も多いので基礎からしっかり学ばせていただきました。分からない事はその場で先生に質問でき、毎回、楽しく落ちこぼれる事なく学ぶ事ができました。<br />MOS試験に向けてのアドバイスもしてくださり、自信を持って試験に臨む事ができました。そのお陰でWordもExcelも高得点で合格しました。<br />先生方には本当に感謝しています。これからも資格に恥じぬよう勉強していきたいと思っています。</td>
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