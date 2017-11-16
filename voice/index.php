<?php

$title = "受講生の声(初めてのパソコン)";
$description = "パソコンを使い始めるために、パソコン市民講座を受講中の皆様の声。今日も生徒さんの「できた！」喜びの声が続々と！";
$keywords = "受講生,声,生徒,";
$pageId = 'voice';
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

<div class="u-center"><img src="/img/kv_voice.jpg" alt="今日も生徒さんの「できた！」喜びの声が続々と！次はあなたが「パソコンを楽しむ」番ですよ！" width="858" height="195" /></div>

<div class="lnavi">
<p>各コースの「受講生の声」：<a href="/voice/" class="arrow current">初めてのパソコン</a>　<a href="/voice/works.php" class="arrow">仕事に活かす</a>　<a href="/voice/senior.php" class="arrow">シニアこそパソコンを</a></p>
</div>

<h2 class="c-title2">全国の教室にお寄せ頂いた受講生の方々の喜びの声の一部をご紹介</h2>
<h3 class="c-title1">初めてのパソコン（<a href="/course/first.php">コース紹介はこちらから</a>）</h3>

<?php
	require('../cms/wordpress/wp-load.php');
	$args = array(
		'post_type' => 'voice',
		'showposts' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'voice-category',
				'field' => 'slug',
				'terms' => 'first'
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
<h4>楽しいイベントを沢山期待しています！［江端さん］</h4>
<img src="/img/voice_17.jpg" class="fl" alt="江端さん" width="224" height="221" />
<table class="about">
<tr>
	<td colspan="2">通常講座のほかに毎月行われる教室イベントが私は一番好きです。イベントを通じて他の受講生さんと交流が持てたり、分からないところをお互い助け合っています。特にクラフトなどパソコンを使った創作イベントは苦戦することもありますが、出来上がりを見るととても嬉しくなります。先生方、これからも楽しいイベントをお願いします！<br />
	<a href="/yukari/" class="arrow" target="_blank">パソコン市民講座 イオンタウンユーカリが丘教室（千葉県）</a></td>
</tr>
</table>
</div>

<div class="section3 clearfix mgnT20">
<h4>先生のおかげで気が付けば8年5か月［小野髙さん］</h4>
<img src="/img/voice_18.jpg" class="fl" alt="小野髙さん" width="224" height="221" />
<table class="about">
<tr>
	<td colspan="2">「インターネットを活用できるようになりたい！」、「イメージ通りの文章を作成したい！」そんな理由で習い始めて、気が付けば8年5か月。とっても親切にそして分かりやすく教えてくれる先生のおかげで、今ではインターネットで知りたいことがすぐに調べられるようになったり、満足のいく文章が書けるようになったり確実にスキルアップしています。<br />
	<a href="/mobara/" class="arrow" target="_blank">パソコン市民講座 イオン茂原教室（千葉県）</a></td>
</tr>
</table>
</div>

<div class="section3 clearfix mgnT20">
<h4>全国の受講生さんとブログで交流！［臼井さん］</h4>
<img src="/img/voice_19.jpg" class="fl" alt="臼井さん" width="224" height="221" />
<table class="about">
<tr>
	<td colspan="2">仕事でパソコンは使っていましたが、今は趣味として、介護予防の一環として教室に通っています（笑）受講生専用のブログを通して、全国の受講生さんと交流しています。もちろん同じ教室の受講生さんともブログ仲間なので、初めて顔を合わせた時からすぐに話が弾みます。ブログをやることで「つながり」を感じますし、本当にブログは生きがいです！<br />
	<a href="/funabashi/" class="arrow" target="_blank">パソコン市民講座 イトーヨーカドー船橋教室（千葉県）</a></td>
</tr>
</table>
</div>

<div class="section3 clearfix mgnT20">
<h4>先生の笑顔と気遣いに敬服です［中尾さん］</h4>
<img src="/img/voice_20.jpg" class="fl" alt="臼井さん" width="224" height="221" />
<table class="about">
<tr>
	<td colspan="2">デジカメで撮った写真をパソコンに取り込んで、加工や編集が出来るようになりたくて市民講座に入会しました。今では写真加工のほかにも仲間内の旅行案内書の作成なども出来るようになりました。いつも笑顔で対応していただける先生、気遣いを絶やさない先生に感謝です。今の目標は孫の成長を記録した写真集を作ることです。<br />
	<a href="/narafa/" class="arrow" target="_blank">パソコン市民講座 ならファミリー教室（奈良県）</a></td>
</tr>
</table>
</div>

<div class="section3 clearfix mgnT20">
<h4>男女、年代問わず輪が広がっていくのが嬉しい！［廣梅さん］</h4>
<img src="/img/voice_21.jpg" class="fl" alt="臼井さん" width="224" height="221" />
<table class="about">
<tr>
	<td colspan="2">市民講座には受講生だけが投稿できる専用のブログがあります。このブログのおかげで男女、年代問わず楽しく輪が広がって、交流できることがとっても嬉しいです。ブログで知り合った他の受講生さんと楽しくみんなでオフ会などにも出かけることで、自分の知らない世界の方とつながり、大きな輪になっていることを感じます。<br />
	<a href="/kokubu/" class="arrow" target="_blank">パソコン市民講座 ライフ国分教室（大阪府）</a></td>
</tr>
</table>
</div>

<div class="section3 clearfix mgnT20">
<h4>私にとって人生の宝物［村木さん］</h4>
<img src="/img/voice_22.jpg" class="fl" alt="臼井さん" width="224" height="221" />
<table class="about">
<tr>
	<td colspan="2">教室イベントでこれまで撮り貯めた写真をオリジナルアルバムやカレンダーにしたことで、自分の人生を振り返ることが出来きました！これらは私にとって人生の宝物です。夫と一緒に教室に通っていますが、二人でできるだけ長く続けて、オリジナル作品をドンドン増やして私たちの宝物をたくさん増やしていきたいです。<br />
	<a href="/toyohashi/" class="arrow" target="_blank">パソコン市民講座 バロー豊橋教室（愛知県）</a></td>
</tr>
</table>
</div>

<div class="section3 clearfix mgnT20">
<h4>学校の役員就任をきっかけにパソコンを始めました［鈴木 美由紀さん（船橋市 在住）］</h4>
<img src="/img/voice_11.jpg" class="fl" alt="鈴木 美由紀さん" width="224" height="221" />
<table class="about">
<tr>
	<th width="40%">受講のきっかけは？</th>
	<td>子供の通う中学校の役員に就任し、文書を作成する機会が増えたので</td>
</tr>
<tr>
	<th>現在の目標は何ですか？</th>
	<td>スラスラと文書が作成できるようになりたい</td>
</tr>
<tr>
	<td colspan="2">子供の通う中学校の役員に就任したことをきっかけに、パソコンを習い始めました。<br />役員は学年行事の企画書や懇親会の案内文の作成など、とにかく文書を作成する機会が多い仕事です。これまでは、子供に頼んで文書を作成してもらっていましたが、就任を期にパソコン市民講座に通い始めました。<br />入校は4月。5月には自分のパソコンを購入し、4ヶ月後には普通に文書作成が出来るまでになりました。タイピングもだいぶ上達してきたので、今後はもっとスラスラと文書が作成できるようにトレーニングしたいと思います。<br />
	<a href="/funabashi/" class="arrow" target="_blank">パソコン市民講座 イトーヨーカドー船橋教室（千葉県）</a></td>
</tr>
</table>
</div>

<div class="section3 clearfix mgnT20">
<h4>全国の受講生さんと繋がっています［本多 登さん（佐倉市 在住）］</h4>
<img src="/img/voice_12.jpg" class="fl" alt="本多 登さん" width="224" height="221" />
<table class="about">
<tr>
	<th width="40%">受講のきっかけは？</th>
	<td>ブログを使って楽しみを発信したい</td>
</tr>
<tr>
	<th>現在の目標は何ですか？</th>
	<td>趣味でどんどんiPadを使いこなしたい</td>
</tr>
<tr>
	<td colspan="2">私は、ハイキングや山登りが趣味なので、出かけるときはいつもiPadを持っていき、写真を撮ってブログにアップしています。このブログは受講生同士の交流サイト内にあるので、大阪の教室に通われている方など、全国の受講生さんからコメントをいただけるところが楽しいです。また、毎月教室で開催される「教室イベント」でブログ仲間とも一緒になり、パソコン教室がいつの間にか交流の場になっています。いつも先生方が明るく、教室に通いたくなる雰囲気を出してくれるので、教室自体とっても気に入っています。<br />
	<a href="/yukari/" class="arrow" target="_blank">パソコン市民講座 イオンタウンユーカリが丘教室（千葉県）</a></td>
</tr>
</table>
</div>

<div class="section3 clearfix mgnT20">
<h4>画面が小さかったので迷わずiPadに！［佐藤 福子さん（伊勢原市 在住）］</h4>
<img src="/img/voice_15.jpg" class="fl" alt="佐藤 福子さん" width="224" height="221" />
<table class="about">
<tr>
	<th width="40%">受講のきっかけは？</th>
	<td>便利そうなiPadを使いこなしたくて</td>
</tr>
<tr>
	<th>現在の目標は何ですか？</th>
	<td>iPadの様々な機能をマスターしていきたい</td>
</tr>
<tr>
	<td colspan="2">受講のきっかっけはお友達がiPhoneを使っているのを見て、便利そうだと思いましたが、画面が小さかったので迷わずiPadに！iPadは小さくて場所をとらないところが気に入っています。それに、薄い1枚の板なのに様々な機能が使えるところですね。<br />
	<a href="/isehara/" class="arrow" target="_blank">パソコン市民講座 いせはらcoma教室（神奈川県）</a></td>
</tr>
</table>
</div>

<div class="section3 clearfix mgnT20">
<h4>通いはじめて、気がつけば10年に！［伊勢 民子さん（千葉市 在住）］</h4>
<img src="/img/voice_16.jpg" class="fl" alt="伊勢 民子さん" width="224" height="221" />
<table class="about">
<tr>
	<th width="40%">受講のきっかけは？</th>
	<td>パソコンが生活に欠かせなくなると感じたため</td>
</tr>
<tr>
	<th>現在の目標は何ですか？</th>
	<td>パソコンを使い続けて、便利で豊かな生活を送りたい</td>
</tr>
<tr>
	<td colspan="2">65歳からパソコンを習い始めました。病院の予約はホームページ、お友達との連絡は電子メールを使っています。電子メールは何通送っても無料ですからね。今ではすっかりパソコンが生活の一部になっていますよ。長く続けられた秘訣は先生が優しかったことと、教室がスーパーの中にあるので、帰りに買い物ができて便利だったところです。<br />
	<a href="/tsudanuma/" class="arrow" target="_blank">パソコン市民講座 イトーヨーカドー津田沼教室（千葉県）</a></td>
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