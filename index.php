<?php
$home = 1;
$description = "パソコン市民講座はどなたでもお気軽に受講していただける、あなたに合ったコースをご用意しております。";
include_once('lib/home/config.php');
include_once('lib/home/header.php');
?>


<div class="p-top">


	<div class="p-top1">
	<div class="c-wrap">

		<div class="p-top1__block1">
			<ul>
				<!--<li><a href="/news/?p=100"><img src="/common/img/top/top1_slide4.jpg" width="690" height="370" alt="今なら最大6,000円OFF！入会キャンペーン実施中！" /></a></li>-->
				<li><a href="/shikaku/"><img src="/common/img/top/top1_slide1.jpg" width="690" height="370" alt="資格対策講座 即戦力の証明とスキルの自信につながる主要資格（MOS/サーティファイ）に対応！！ビジネスコースを見る" /></a></li>
				<li><a href="/course/brain_training.php"><img src="/common/img/top/top1_slide3.png" width="690" height="370" alt="脳トレ おとなプログラミング講座 話題の講座が2017年6月スタート！詳しくはこちらから" /></a></li>
				<li><a href="/gakuwari/"><img src="/common/img/top/top1_slide2.png" width="690" height="370" alt="学割 小学生から大学生まで対象拡大しました！" /></a></li>
			</ul>
		</div><!-- /.p-top1__block1 -->

		<div class="p-top1__block2 pc-only">
			<h2 class="img1">
				<img src="/common/img/top/top1_img1.png" width="302" height="412" alt="教室を探す" usemap="#schoolSearch" />
				<map name="schoolSearch" id="schoolSearch">
					<area shape="rect" coords="10,20,292,69" href="/school/" alt="教室を探す" />
					<area shape="rect" coords="19,95,195,139" href="/school/seibu.php" alt="中国・四国・九州エリア" />
					<area shape="rect" coords="63,146,181,190" href="/school/kansai.php" alt="関西エリア" />
					<area shape="rect" coords="163,293,281,337" href="/school/tohoku.php" alt="東北エリア" />
					<area shape="rect" coords="147,344,265,388" href="/school/kanto.php" alt="関東エリア" />
					<area shape="rect" coords="21,319,139,363" href="/school/chubu.php" alt="中部エリア" />
				</map>
			</h2>
		</div><!-- /.p-top1__block2 -->

	</div>
	</div><!-- /.p-top1 -->



	<div class="p-top2 c-wrap">

		<h2 class="u-center">
			<img class="pc-only" src="/common/img/top/top2_tit1.png" width="931" height="74" alt="幅広い層の対応した800種類もの豊富な講座！" />
			<img class="sp-only" src="/common/img/top/sp/top2_tit1.png" width="681" height="83" alt="" />
		</h2>

		<div class="p-top2__block1">

			<div class="box1">
				<div class="tit1">
					<h3><img src="/common/img/top/top2_txt1.png" width="151" height="134" alt="おすすめ講座" /></h3>
				</div>
				<div class="tit2">
					<p>サーティファイ資格対策講座</p>
					<h4>Word2016 3級</h4>
				</div>
				<div class="txt1">
					<p>この講座は、サーティファイ ソフトウェア活用能力認定委員会が主催する「Word文書処理技能認定試験3級」の合格を目指すための講座です。<br>練習問題を使用して、Word3級で出題される機能や操作を学習した後、模擬問題を使用して、試験の内容を体験します。自然に本試験への対応力が身に付きますよ！</p>
				</div>
				<!--<div class="txt2 pc-only">
					<div class="u-left c-link1"><a href="##">ビジネスワード実践講座の詳細を見る</a></div>
				</div>-->
			</div><!-- /.box1 -->

			<div class="box2 u-center">
				<!--<img src="/common/img/top/top2_img1.jpg" width="395" height="222" alt="" />-->
				<iframe width="100%" height="222" src="https://www.youtube.com/embed/TkcRyT9GE5c?autoplay=0&rel=0" frameborder="0"></iframe>
				<!--<div class="txt2 sp-only">
					<div class="u-left c-link1"><a href="##">ビジネスワード実践講座の詳細を見る</a></div>
				</div>-->
			</div><!-- /.box2 -->

		</div><!-- /.p-top2__block1 -->

	</div><!-- /.p-top2 -->



	<div class="p-top3">

		<div class="p-top3__tit1">
			<h2 class="c-wrap"><img src="/common/img/top/top3_tit1.png" width="363" height="43" alt="目的から講座を探す" /></h2>
		</div>

		<div class="p-top3__block1">

			<div class="c-wrap">
				<ul>
					<li><a href="/course/works.php">
						<span class="txt1">今すぐ仕事で<br class="pc-only" />役立てたい</span>
						<span class="img1"><img src="/common/img/top/top3_img1.jpg" width="100" height="100" alt="" /></span>
					</a></li>
					<li><a href="/course/qualification.php">
						<span class="txt1">資格を取得したい</span>
						<span class="img1"><img src="/common/img/top/top3_img2.jpg" width="100" height="100" alt="" /></span>
					</a></li>
					<?php /*<li class="gakusei">
						<span class="txt1">学生コース</span>
						<span class="img1"><img src="/common/img/top/top3_img3.jpg" width="100" height="100" alt="" /></span>
					</a></li>*/?>
					<li><a href="/course/first.php">
						<span class="txt1">パソコンの<br class="pc-only" />基本操作を<br />覚えたい</span>
						<span class="img1"><img src="/common/img/top/top3_img4.jpg" width="100" height="100" alt="" /></span>
					</a></li>
					<li><a href="/course/hobby.php">
						<span class="txt1">パソコンを<br />趣味で楽しみたい</span>
						<span class="img1"><img src="/common/img/top/top3_img5.jpg" width="100" height="100" alt="" /></span>
					</a></li>
					<li><a href="/tablet/">
						<span class="txt1">タブレットや<br class="pc-only" />スマートフォンを<br />使いこなしたい</span>
						<span class="img1"><img src="/common/img/top/top3_img6.jpg" width="100" height="100" alt="" /></span>
					</a></li>
				</ul>
			</div>

		</div><!-- /.p-top3__block1 -->


		<div class="p-top3__tit1 tit2">
			<h2 class="c-wrap"><img src="/common/img/top/top3_tit2.png" width="294" height="44" alt="講座名から探す" /></h2>
		</div>

		<div class="p-top3__block2">

			<div class="c-wrap">

				<div class="box box1">
					<h3 class="tit1"><div>Office講座</div></h3>
					<ul class="slidable">
						<li><span>Word（ワード）講座</span></li>
						<li><span>Excel（エクセル）講座</span></li>
						<li><span>PowerPoint（パワーポイント）講座</span></li>
					</ul>
				</div><!-- /.box -->

				<div class="box box2">
					<h3 class="tit1"><div>資格取得講座</div></h3>
					<ul class="slidable">
						<li><span>ビジネスワード実践講座</span></li>
						<li><span>ビジネスエクセル実践講座</span></li>
						<li><span>ビジネスパワーポイント実践講座</span></li>
						<li><span>MOSワード資格取得講座</span></li>
						<li><span>MOSエクセル資格取得講座</span></li>
					</ul>
				</div><!-- /.box -->

				<div class="box box3 pc-only">
					<h3><img src="/common/img/top/top3_tit3.png" width="309" height="73" alt="講座人気ランキング BEST5" /></h3>
					<div class="txt1"><p>2017.04.15更新</p></div>
					<ol class="rank">
						<li class="rank1">ワード2013講座</li>
						<li class="rank2">ビジネスワード実践講座</li>
						<li class="rank3">エクセル2013講座</li>
						<li class="rank4">Windows10基礎講座</li>
						<li class="rank5">ビジネスエクセル実践講座</li>
					</ol>
				</div><!-- /.box -->

				<?php /*<div class="box box4">
					<h3 class="tit1"><div>資格取得講座</div></h3>
					<ul class="slidable">
						<li><a href="##">入力マスター（タイピング）</a></li>
						<li><a href="##">プログラミングスクール</a></li>
					</ul>
					<div class="bnr1 slidable">
						<a href="##"><img src="/common/img/top/top3_bnr1.jpg" width="348" height="88" alt="パソコン市民講座の学割制度" /></a>
					</div>
				</div><!-- /.box -->*/?>

				<div class="box box5">
					<h3 class="tit1"><div>パソコン基本操作</div></h3>
					<ul class="slidable">
						<li><span>Windows10基礎</span></li>
						<li><span>Windows8.1基礎</span></li>
						<li><span>Windows7基礎</span></li>
						<li><span>パソコンマスターⅠ・Ⅱ</span></li>
						<li><span>入力マスター（タイピング）</span></li>
						<li><span>デジタル基礎知識講座</span></li>
					</ul>
				</div><!-- /.box -->

				<div class="box box6">
					<h3 class="tit1"><div>趣味で楽しむ<br class="pc-only" />パソコン</div></h3>
					<ul class="slidable">
						<li><span>インターネット講座</span></li>
						<li><span>入力マスター（タイピング）</span></li>
						<li><span>デジカメ講座</span></li>
						<li><span>電子メール講座</span></li>
						<li><span>クラフト講座</span></li>
						<li><span>年賀状講座（筆まめ）</span></li>
					</ul>
				</div><!-- /.box -->

				<div class="box box7">
					<h3 class="tit1"><div>タブレット・<br class="pc-only" />スマートフォン</div></h3>
					<ul class="slidable">
						<li><span>iPad講座</span></li>
						<li><span>iPhone講座</span></li>
					</ul>
				</div><!-- /.box -->

				<div class="box box3 sp-only">
					<h3><img src="/common/img/top/top3_tit3.png" width="309" height="73" alt="講座人気ランキング BEST5" /></h3>
					<div class="txt1"><p>2017.04.15更新</p></div>
					<ol>
						<li class="rank1">ワード2013講座</li>
						<li class="rank2">ビジネスワード実践講座</li>
						<li class="rank3">エクセル2013講座</li>
						<li class="rank4">Windows10基礎講座</li>
						<li class="rank5">ビジネスエクセル実践講座</li>
					</ol>
				</div><!-- /.box -->

			</div>

		</div><!-- /.p-top3__block2 -->


		<div class="p-top3__block3">
			<div class="c-btn1">
				<a href="/course/"><span>パソコン市民講座の<br class="sp-only" />講座一覧へ！</span></a>
			</div>
		</div><!-- /.p-top3__block3 -->

	</div><!-- /.p-top3 -->



	<div class="p-top4">

		<h2 class="u-center">
			<img class="pc-only" src="/common/img/top/top4_tit1.png" width="998" height="157" alt="全国に150教室 駅近やショッピング施設内だから通いやすい！" />
			<img class="sp-only" src="/common/img/top/sp/top4_tit1.png" width="750" height="206" alt="近くの教室を探す" />
		</h2>

		<div class="p-top4__block1 c-wrap pc-only">
			<img src="/common/img/top/top4_img1.png" width="981" height="658" alt="パソコン市民講座の教室を探す" usemap="#schoolSearch2" />
			<map name="schoolSearch2" id="schoolSearch2">
				<area shape="rect" coords="17,42,285,173" href="/school/" alt="パソコン市民講座の教室を探す" />
				<?php /*?><area shape="rect" coords="701,558,981,658" href="##" alt="今日の教室ブログ" /><?php */?>

				<?php /* 中国・四国・九州エリア */ ?>
				<area shape="rect" coords="80,239,284,289" href="/school/seibu.php" alt="中国・四国・九州エリア" />
				<area shape="rect" coords="80,293,180,333" href="/school/fukuoka.php" alt="福岡" />
				<area shape="rect" coords="184,293,284,333" href="/school/okayama.php" alt="岡山" />
				<area shape="rect" coords="80,337,180,377" href="/school/tokushima.php" alt="徳島" />

				<?php /* 関西エリア */ ?>
				<area shape="rect" coords="343,118,537,168" href="/school/kansai.php" alt="関西エリア" />
				<area shape="rect" coords="343,172,438,212" href="/school/osaka.php" alt="大阪" />
				<area shape="rect" coords="442,172,537,212" href="/school/nara.php" alt="奈良" />
				<area shape="rect" coords="343,216,438,257" href="/school/hyogo.php" alt="兵庫" />
				<area shape="rect" coords="442,216,537,256" href="/school/shiga.php" alt="滋賀" />
				<area shape="rect" coords="343,260,438,300" href="/school/kyoto.php" alt="京都" />

				<?php /* 東北エリア */ ?>
				<area shape="rect" coords="769,216,963,266" href="/school/tohoku.php" alt="東北エリア" />
				<area shape="rect" coords="769,270,864,310" href="/school/fukushima.php" alt="福島" />

				<?php /* 関東エリア */ ?>
				<area shape="rect" coords="769,346,963,396" href="/school/kanto.php" alt="関東エリア" />
				<area shape="rect" coords="769,400,864,440" href="/school/tokyo.php" alt="東京" />
				<area shape="rect" coords="868,400,963,440" href="/school/saitama.php" alt="埼玉" />
				<area shape="rect" coords="769,444,864,484" href="/school/kanagawa.php" alt="神奈川" />
				<area shape="rect" coords="868,444,963,484" href="/school/ibaraki.php" alt="茨城" />
				<area shape="rect" coords="769,488,864,528" href="/school/chiba.php" alt="千葉" />

				<?php /* 中部エリア */ ?>
				<area shape="rect" coords="172,597,366,647" href="/school/chubu.php" alt="中部エリア" />
				<area shape="rect" coords="370,602,465,642" href="/school/aichi.php" alt="愛知" />
				<area shape="rect" coords="469,602,564,642" href="/school/gifu.php" alt="岐阜" />
				<area shape="rect" coords="568,602,663,642" href="/school/shizuoka.php" alt="静岡" />
			</map>
		</div><!-- /.p-top4__block1 -->


		<div class="p-top4__block2 sp-only">

			<div class="box box1">
				<h3><div>東北エリア</div></h3>
				<ul>
					<li><a href="/school/tohoku.php"><span>福島県</span></a></li>
				</ul>
			</div><!-- /.box -->

			<div class="box box2">
				<h3><div>関東エリア</div></h3>
				<ul>
					<li><a href="/school/tokyo.php"><span>東京都</span></a></li>
                    <li><a href="/school/kanagawa.php"><span>神奈川県</span></a></li>
                    <li><a href="/school/chiba.php"><span>千葉県</span></a></li>
					<li><a href="/school/saitama.php"><span>埼玉県</span></a></li>
					<li><a href="/school/ibaraki.php"><span>茨城県</span></a></li>
				</ul>
			</div><!-- /.box -->

			<div class="box box3">
				<h3><div>中部エリア</div></h3>
				<ul>
					<li><a href="/school/aichi.php"><span>愛知県</span></a></li>
					<li><a href="/school/gifu.php"><span>岐阜県</span></a></li>
					<li><a href="/school/shizuoka.php"><span>静岡県</span></a></li>
				</ul>
			</div><!-- /.box -->

			<div class="box box4">
				<h3><div>関西エリア</div></h3>
				<ul>
					<li><a href="/school/osaka.php"><span>大阪府</span></a></li>
                    <li><a href="/school/hyogo.php"><span>兵庫県</span></a></li>
                    <li><a href="/school/kyoto.php"><span>京都府</span></a></li>
					<li><a href="/school/nara.php"><span>奈良県</span></a></li>
                    <li><a href="/school/shiga.php"><span>滋賀県</span></a></li>
				</ul>
			</div><!-- /.box -->

			<div class="box box5">
				<h3><div>中国・四国・九州エリア</div></h3>
				<ul>
                	<li><a href="/school/okayama.php"><span>岡山県</span></a></li>
                    <li><a href="/school/tokushima.php"><span>徳島県</span></a></li>
					<li><a href="/school/fukuoka.php"><span>福岡県</span></a></li>
				
				</ul>
			</div><!-- /.box -->

			<?php /*?><div class="bnr1">
				<a href=""><img src="/common/img/top/sp/top4_bnr1.png" width="600" height="214" alt="教室の雰囲気を知りたい方へ 今日の教室ブログ" /></a>
			</div><?php */?>

		</div><!-- /.p-top4__block2 -->

	</div><!-- /.p-top4 -->



	<div class="p-top5">

		<h2 class="u-center">
			<img class="pc-only" src="/common/img/top/top5_tit1.png" width="1000" height="115" alt="パソコン市民講座が選ばれる理由" />
			<img class="sp-only" src="/common/img/top/sp/top5_tit1.png" width="711" height="76" alt="" />
		</h2>

		<div class="p-top5__block1">
			<div class="c-wrap">
				<ul>
					<li><a href="/overview.php#choice1"><img src="/common/img/top/top5_img1.jpg" width="490" height="210" alt="自分のペースで学べる個別学習！" /></a></li>
					<li><a href="/overview.php#choice2"><img src="/common/img/top/top5_img2.jpg" width="490" height="210" alt="無料映像配信で、自宅でも学習できる！" /></a></li>
					<li><a href="/overview.php#choice3"><img src="/common/img/top/top5_img3.jpg" width="490" height="210" alt="受講曜日と時間を自由に選べる！" /></a></a></li>
					<li><a href="/overview.php#choice4"><img src="/common/img/top/top5_img4.jpg" width="490" height="210" alt="全国150教室、15年間で54万人の指導実績！" /></a></li>
					<li><a href="/overview.php#choice5"><img src="/common/img/top/top5_img5.jpg" width="490" height="210" alt="続けやすい月謝制" /></a></li>
					<li><a href="/overview.php#choice6"><img src="/common/img/top/top5_img6.jpg" width="490" height="210" alt="ご自宅でのトラブルも安心 電話サポート" /></a></li>
					<li class="premium"><a href="/premiere.php">
						<img class="pc-only" src="/common/img/top/top5_img7.jpg" width="1000" height="510" alt="【会員専用サービス】パソコン市民講座 プレミア倶楽部" />
						<img class="sp-only" src="/common/img/top/sp/top5_img7.jpg" width="700" height="1151" alt="" />
						<span><img src="/common/img/top/top5_img7_btn1.png" width="490" height="64" alt="プレミア倶楽部の詳細をみる" /></span>
					</a></li>
				</ul>
			</div>
		</div><!-- /.p-top5__block1 -->


		<div class="p-top5__block2">
			<div class="c-btn1">
				<a href="/overview.php"><span>パソコン市民講座が選ばれる理由は<br class="sp-only" />まだまだあります！</span></a>
			</div>
		</div><!-- /.p-top5__block2 -->

	</div><!-- /.p-top5 -->



	<div class="p-top6">

		<h2 class="u-center">
			<img class="pc-only" src="/common/img/top/top6_tit1.png" width="997" height="139" alt="54万人以上の指導実績！受講生の声" />
			<img class="sp-only" src="/common/img/top/sp/top6_tit1.png" width="721" height="78" alt="" />
		</h2>

		<div class="p-top6__block1">
			<div class="c-wrap">

				<?php
					require('cms/wordpress/wp-load.php');
					$args = array(
						'post_type' => 'voice',
						'showposts' => '4',
						'orderby' => 'rand'
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
					$link = '';
					if($cat_slug == 'first'){
						$link = '';
					}else{
						$link = $cat_slug.'.php';
					}
				?>
				<div class="box1">
					<div class="box1-txt1">
						<div class="img1"><?php if(has_post_thumbnail()) {the_post_thumbnail('112-112');} ?></div>
						<div class="txt1">
							<h3><span><?php the_title(); ?></span></h3>
						</div>
					</div>
					<div class="box1-txt2">
						<p class="txt1"><?php $school = get_field_object('school');
						//print_r($school);
						$school_value = $school['value'];
						$school_label = $school['choices'][$school_value];
						echo $school_label; ?></p>
						<div class="txt2">
							<p><?php echo mb_substr(strip_tags(get_field('voice')), 0, 65).'...'; ?></p>
							<div class="c-link1 u-right">
								<a href="/voice/<?php echo $link.'#voice-'.get_the_ID(); ?>"><span>続きを読む</span></a>
							</div>
						</div>
					</div>
				</div><!-- /.box1 -->
				<?php endwhile; else : endif; ?>
				<?php wp_reset_query(); ?>

				<?php /*?><div class="box1">
					<div class="box1-txt1">
						<div class="img1"><img src="/common/img/top/top6_img1.jpg" width="122" height="122" alt="" /></div>
						<div class="txt1">
							<h3><span>パソコンでできることを<br />増やしていきたい</span></h3>
						</div>
					</div>
					<div class="box1-txt2">
						<p class="txt1">イオン鎌取教室（千葉県）</p>
						<div class="txt2">
							<p>パソコンを一から学んで、今まで知っていると思い込んでいたところも正しく知ることができました。先生たちも皆さんとっても優しく教えて下…</p>
							<div class="c-link1 u-right">
								<a href="/voice/"><span>続きを読む</span></a>
							</div>
						</div>
					</div>
				</div><!-- /.box1 -->

				<div class="box1">
					<div class="box1-txt1">
						<div class="img1"><img src="/common/img/top/top6_img2.jpg" width="122" height="122" alt="" /></div>
						<div class="txt1">
							<h3><span>履歴書に記載できる<br />資格を取得したくて</span></h3>
						</div>
					</div>
					<div class="box1-txt2">
						<p class="txt1">イトーヨーカドー津田沼教室（千葉県）</p>
						<div class="txt2">
							<p>8年前にもこちらの教室に通ってパソコン検定3級を取得した経験があります。今回2回目の入会となりますが、履歴書に記載できる資格を取得したくて…</p>
							<div class="c-link1 u-right">
								<a href="/voice/"><span>続きを読む</span></a>
							</div>
						</div>
					</div>
				</div><!-- /.box1 -->

				<div class="box1">
					<div class="box1-txt1">
						<div class="img1"><img src="/common/img/top/top6_img3.jpg" width="122" height="122" alt="" /></div>
						<div class="txt1">
							<h3><span>基本的なスキルを<br />身に付けたい</span></h3>
						</div>
					</div>
					<div class="box1-txt2">
						<p class="txt1">イトーヨーカドー津田沼教室（千葉県）</p>
						<div class="txt2">
							<p>事務の仕事をはじめるにあたって基本的なスキルを身に付けたいと思い、インターネットでパソコン教室を検索しました。他のパソコン教室と比較して、料…</p>
							<div class="c-link1 u-right">
								<a href="/voice/"><span>続きを読む</span></a>
							</div>
						</div>
					</div>
				</div><!-- /.box1 -->

				<div class="box1">
					<div class="box1-txt1">
						<div class="img1"><img src="/common/img/top/top6_img4.jpg" width="122" height="122" alt="" /></div>
						<div class="txt1">
							<h3><span>身につけたパソコンスキル<br />を活かして起業したい！</span></h3>
						</div>
					</div>
					<div class="box1-txt2">
						<p class="txt1">イオン所沢教室（埼玉県）</p>
						<div class="txt2">
							<p>昔からパソコンやデジタルデバイスに対して苦手意識を持っていました。とにかくパソコンの画面を見続けることが苦痛でした。そんな私が2015年8月か…</p>
							<div class="c-link1 u-right">
								<a href="/voice/"><span>続きを読む</span></a>
							</div>
						</div>
					</div>
				</div><!-- /.box1 --><?php */?>

			</div>
		</div><!-- /.p-top6__block1 -->


		<div class="p-top6__block2">
			<div class="c-btn1">
				<a href="/voice/works.php"><span>受講生の声をもっと読む</span></a>
			</div>
		</div><!-- /.p-top6__block2 -->

	</div><!-- /.p-top6 -->



	<div class="p-top7 c-wrap">

		<div class="p-top7__block1">

			<div class="box">
				<a href="/overview.php"><img src="/common/img/top/top7_bnr1.jpg" width="322" height="138" alt="料金や学習の流れを知りたい方 パソコン市民講座について" /></a>
				<div class="c-link1">
					<a href="/overview.php"><span>パソコン市民講座について</span></a>
				</div>
			</div><!-- /.box -->

			<div class="box box1">
				<a href="/premiere.php"><img src="/common/img/top/top7_bnr2.jpg" width="322" height="147" alt="安心の会員特別サービス プレミア倶楽部" /></a>
				<div class="c-link1">
					<a href="/premiere.php"><span>プレミア倶楽部の紹介</span></a>
				</div>
			</div><!-- /.box -->

			<div class="box">
				<a href="/gakuwari/"><img src="/common/img/top/top7_bnr3.jpg" width="322" height="138" alt="今から将来に備えてスキルUP! 学割制度" /></a>
				<div class="c-link1">
					<a href="/gakuwari/"><span>学生割引制度について</span></a>
				</div>
			</div><!-- /.box -->

			<?php /*?><div class="box">
				<a href="##"><img src="/common/img/top/top7_bnr4.jpg" width="322" height="138" alt="受講生作品" /></a>
				<div class="c-link1">
					<a href="##"><span>受講生作品</span></a>
				</div>
			</div><!-- /.box --><?php */?>

			<div class="box">
				<a href="/qa.php"><img src="/common/img/top/top7_bnr5.jpg" width="322" height="138" alt="よくあるご質問" /></a>
				<div class="c-link1">
					<a href="/qa.php"><span>よくあるご質問</span></a>
				</div>
			</div><!-- /.box -->

			<div class="box">
				<a href="/instructor/"><img src="/common/img/top/top7_bnr6.jpg" width="322" height="138" alt="インストラクターインタビュー" /></a>
				<div class="c-link1">
					<a href="/instructor/"><span>インストラクターインタビュー</span></a>
				</div>
			</div><!-- /.box -->

		</div><!-- /.p-top7__block1 -->


		<div class="p-top7__block2">

			<div class="box1">
				<a href="http://www.star-programming-school.com/" target="_blank"><img src="/common/img/top/top7_bnr7.jpg" width="490" height="160" alt="STAR Programming SCHOOL" /></a>
			</div>

			<div class="box1">
				<a href="https://www.cheery.co.jp/saiyou/" target="_blank"><img src="/common/img/top/top7_bnr8.jpg" width="490" height="160" alt="採用情報" /></a>
			</div>

		</div><!-- /.p-top7__block2 -->

	</div><!-- /.p-top7 -->



	<div class="p-top8 c-wrap">

		<div class="c-title1">
			<h2>お知らせ</h2>
			<p class="c-title1__txt1 c-link1 pc-only">
				<a href="/news/"><span>お知らせ一覧へ</span></a>
			</p>
		</div>

		<ul>
			<?php /*?><li><a href="">
				<p class="date">2016/12/27</p>
				<h3>教室運営本部は12/29-1/4、年末年始休業日となります</h3>
			</a></li>
			<li><a href="">
				<p class="date">2016/11/1</p>
				<h3>「バロー豊橋教室」（愛知県豊橋市）が11/1に新規開校！</h3>
			</a></li>
			<li><a href="">
				<p class="date">2016/8/29</p>
				<h3>「まるひろ東松山教室」（埼玉県東松山市）が8/31に新規開校！</h3>
			</a></li>
			<li><a href="">
				<p class="date">2016/8/9</p>
				<h3>教室運営本部は8/11-16日を、夏期休業日とさせていただきます</h3>
			</a></li>
			<li><a href="">
				<p class="date">2016/6/27</p>
				<h3>「いせはらcoma教室」（神奈川県伊勢原市）が6/29に新規開校！</h3>
			</a></li><?php */?>
			<?php
				$args = array(
					'post_type' => 'post',
					'showposts' => '5'
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

		<p class="c-link1 u-right sp-only">
			<a href="/news/"><span>お知らせ一覧へ</span></a>
		</p>

	</div><!-- /.p-top8 -->


</div><!-- /.p-top -->


<?php include_once('lib/home/footer.php'); ?>