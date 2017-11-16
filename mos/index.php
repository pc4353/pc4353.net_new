<?php

$title = "MOS（マイクロソフトオフィススペシャリスト）取得講座";
$description = "パソコン市民講座のMOS取得講座";
$keywords = "MOS,Microsoft,マイクロソフトオフィススペシャリスト,パソコンスクール,求人,就職,";
$pageId = 'shikaku';
include_once('../lib/home/config.php');
include_once('../lib/home/header.php');

?>

<link rel="stylesheet" type="text/css" href="/common/css/mos.css?<?php echo filemtime($root.'/common/css/mos.css'); ?>" media="screen and (min-width: 767px), print" />
<link rel="stylesheet" type="text/css" href="/common/css/mos-sp.css?<?php echo filemtime($root.'/common/css/mos-sp.css'); ?>" media="only screen and (max-width: 768px)" />


<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン教室なら「市民講座」</a></li>
		<li><a href="/shikaku/">ビジネス向け資格取得講座</a></li>
		<li><?=$title?></li>
	</ul>
</div><!-- /.l-breadcrumb -->

<div class="l-pagetitle">
<div class="c-wrap">
	<h1><?=$title?></h1>
</div>
</div><!-- /.l-pagetitle -->


<div class="p-mos">


	<div class="p-mos1 c-wrap">

		<h2><img src="/mos/images/mos1_img1.jpg" width="1000" height="498" alt="MOS資格コースなら最短10日で取得可能！" /></h2>

		<div class="p-mos1__block1">
			<h3><span>MOSで周りと差をつけよう！</span></h3>

			<ul>
				<li><img src="/mos/images/mos1_img2.png" width="203" height="256" alt="差がつく！ 学生の就職活動に" /></li>
				<li><img src="/mos/images/mos1_img3.png" width="203" height="256" alt="差がつく！ キャリアアップの転職に" /></li>
				<li><img src="/mos/images/mos1_img4.png" width="203" height="256" alt="差がつく！ 育休明けの再就職に" /></li>
			</ul>
		</div><!-- /.p-mos1__block1 -->

	</div><!-- /.p-mos1 -->


	<div class="p-mos2">

		<div class="p-mos2__block1">
		<div class="c-wrap2">

			<div class="txt1">
				<h2><img src="/mos/images/mos2_tit1.png" width="269" height="92" alt="Microsoft Office Specialist" /></h2>
				<p>国際的に認められた資格だから<br />様々な職種で活用できる！</p>
			</div>

			<div class="img1">
				<img src="/mos/images/mos2_img1.png" width="553" height="233" alt="" />
			</div>

		</div>
		</div><!-- /.p-mos2__block1 -->


		<div class="p-mos2__block2">
		<div class="c-wrap2">

			<h3><span>あなたにオススメの講座はコレ！</span></h3>

			<div class="p-mos2__block2--box1">

				<div class="box1">
					<h4>効率の良いビジネス書類で同僚に差をつけよう！</h4>
					<div class="img1"><img src="/mos/images/mos2_txt1.png" width="51" height="78" alt="Word" /></div>
					<div class="txt1">
						<h4>MOSワード対策講座</h4>
						<p>Microsoft Word スペシャリスト 資格試験対応</p>
						<ul>
							<li>2010</li>
							<li>2013</li>
						</ul>
					</div>
					<?php /*?><div class="btn1"><a class="mos_btn2" href="##">詳しくはコチラ</a></div><?php */?>
				</div><!-- /.box1 -->

				<div class="box2">
					<h4>関数やマクロを使って作業効率大幅アップ！</h4>
					<div class="img1"><img src="/mos/images/mos2_txt2.png" width="51" height="78" alt="Excel" /></div>
					<div class="txt1">
						<h4>MOSエクセル対策講座</h4>
						<p>Microsoft Excel スペシャリスト 資格試験対応</p>
						<ul>
							<li>2010</li>
							<li>2013</li>
						</ul>
					</div>
					<?php /*?><div class="btn1"><a class="mos_btn2" href="##">詳しくはコチラ</a></div><?php */?>
				</div><!-- /.box1 -->

			</div>

		</div>
		</div><!-- /.p-mos2__block2 -->

	</div><!-- /.p-mos2 -->



	<div class="mos_btn1 u-center">
		<a href="/school/"><img src="/mos/images/btn1.png" width="693" height="75" alt="教室へのお問合わせはコチラ" /></a>
	</div>



	<div class="p-mos3">

		<h3 class="mos_tit1">パソコン市民講座でどんな風に学べるの？</h3>

		<div class="c-wrap2">

			<div class="mos_txt1">
				<p>MOS資格対策コースでは忙しいあなたにピッタリ。<br />
				最短コースでのご提案をします。</p>
			</div>

			<div class="p-mos3__block1">

				<ul>
					<li>
						<div class="img1"><img src="/mos/images/mos3_img1.png" width="107" height="93" alt="個別学習" /></div>
						<div class="txt1">
							<p>自分のペースで<br />学べる</p>
							<?php /*?><a class="mos_btn2" href="##">詳しくはコチラ</a><?php */?>
						</div>
					</li>
					<li>
						<div class="img1"><img src="/mos/images/mos3_img2.png" width="107" height="93" alt="自宅学習" /></div>
						<div class="txt1">
							<p>無料映像配信で<br />自宅でも復習！</p>
							<?php /*?><a class="mos_btn2" href="##">詳しくはコチラ</a><?php */?>
						</div>
					</li>
					<li>
						<div class="img1"><img src="/mos/images/mos3_img3.png" width="107" height="93" alt="月謝制" /></div>
						<div class="txt1">
							<p>月謝制だから<br />続けやすい</p>
							<?php /*?><a class="mos_btn2" href="##">詳しくはコチラ</a><?php */?>
						</div>
					</li>
					<li>
						<div class="img1"><img src="/mos/images/mos3_img4.png" width="107" height="93" alt="完全予約制" /></div>
						<div class="txt1">
							<p>受講する曜日と<br />時間を自由に選べる</p>
							<?php /*?><a class="mos_btn2" href="##">詳しくはコチラ</a><?php */?>
						</div>
					</li>
					<li>
						<div class="img1"><img src="/mos/images/mos3_img5.png" width="107" height="66" alt="30時間～" /></div>
						<div class="txt1">
							<p>最短10日程度で<br />合格できる！</p>
						</div>
						<div class="txt2">
							<p><img src="/mos/images/mos3_txt1.png" width="195" height="22" alt="驚きのスピード合格" /></p>
						</div>
					</li>
					<li class="li2">
						<div class="img2"><img src="/mos/images/mos3_img6.png" width="155" height="111" alt="100% 納得の合格率" /></div>
					</li>
				</ul>

			<p class="u-right">※合格率は2016年8月現在の数字です。</p>

			</div><!-- /.p-mos3__block1 -->


			<div class="p-mos3__block2">

                <table class="pc-only">
                    <thead>
                        <tr>
                            <th>時間数</th>
                            <th>1時間あたり(税別)</th>
                            <th>料金(税別)</th>
                            <th>受講期間の目安</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>30時間～</td>
                            <td>1,500円</td>
                            <td>45,000円～</td>
                            <td>1ヶ月～</td>
                        </tr>
                    </tbody>
                </table>

                <table class="sp-only">
                    <tbody>
                        <tr>
                            <th>時間数</th>
                            <td>30時間～</td>
                        </tr>
                        <tr>
                            <th>1時間あたり(税別)</th>
                            <td>1,500円</td>
                        </tr>
                        <tr>
                            <th>料金(税別)</th>
                            <td>45,000円～</td>
                        </tr>
                        <tr>
                            <th>受講期間の目安</th>
                            <td>1ヶ月～</td>
                        </tr>
                    </tbody>
                </table>

			<p>※時間数および受講期間の目安は個人差がございます。<br />
			※テキスト代、月会費2,000円（税別）、資格試験料が別途かかります。</p>

			</div><!-- /.p-mos3__block1 -->

		</div>

	</div><!-- /.p-mos3 -->



	<div class="mos_btn1 u-center">
		<a href="/school/"><img src="/mos/images/btn1.png" width="693" height="75" alt="教室へのお問合わせはコチラ" /></a>
	</div>



	<div class="p-mos4">

		<h3 class="mos_tit1">MOSについて詳しく知りたい！</h3>

		<div class="mos_txt1">
			<p>MOSってよく聞くけど<br />
			具体的にどんな資格なの？</p>
		</div>

		<div class="p-mos4__block1">
		<div class="c-wrap2">
			<h4>MOSとは？</h4>
			<p>WordやExcelなどの<em>スキルを客観的に証明できる資格</em>です。<br />
			MOS資格試験は実際にアプリケーションを操作する実技であるため、<br />
			対策学習によって、パソコンを扱う事務能力が向上します。</p>
		</div>
		</div><!-- /.p-mos4__block1 -->

		<div class="p-mos4__block2">
		<div class="c-wrap2">
			<h4>MOSを取得すると･･･</h4>
			<p>仕事をお持ちの方はパソコンを使った業務の効率化が図れます！<br />
			転職・就職活動中の方はパソコンスキルをアピール出来ます！<br />
			<em>MOS所有者を優遇する企業や、社員教育として導入している企業</em>もたくさんあります。<br />
			パソコン市民講座で資格取得に向かって勉強をスタートしましょう！</p>
		</div>
		</div><!-- /.p-mos4__block2 -->

	</div><!-- /.p-mos4 -->


	<div class="p-mos5">

		<h3 class="mos_tit1">MOS資格取得コースの内容は？</h3>

		<div class="mos_txt1">
			<p>MOS資格対策コースでは忙しいあなたにピッタリ。<br />
			最短コースでのご提案をします。</p>
		</div>

		<div class="p-mos5__block1">
		<div class="c-wrap2">
			<div class="box1">
				<h4>コースのご紹介</h4>
				<p>実際の出題範囲の操作をしっかりマスターできるように、<br />
				テキスト教材を使いながら効率的に学習を進めていきます。<br />
				<em>分からないことがあれば、その場で先生に質問して解決しましょう。</em><br />
				試験合格までをしっかりサポートします！</p>
			</div>
		</div>
		</div><!-- /.p-mos5__block1 -->

		<div class="p-mos5__block2 word">
		<div class="c-wrap2">
			<div class="box1">
				<div class="img1"><img src="/mos/images/mos5_txt1.png" width="91" height="91" alt="Word" /></div>
				<div class="txt1">
					<h4>Word2010 スペシャリスト コース<br />
					Word2013 スペシャリスト コース</h4>
				</div>
			</div><!-- /.box1 -->
			<div class="box2">
				<ul>
					<li>文書の共有と管理</li>
					<li>コンテンツの書式設定</li>
					<li>ページのレイアウトと再利用可能なコンテンツの適用</li>
					<li>図や画像の挿入</li>
					<li>文書の校正</li>
					<li>参考資料とハイパーリンクの適用</li>
					<li>差し込み印刷の実行</li>
				</ul>
			</div><!-- /.box2 -->
		</div>
		</div><!-- /.p-mos5__block2.word -->

		<div class="p-mos5__block2 excel">
		<div class="c-wrap2">
			<div class="box1">
				<div class="img1"><img src="/mos/images/mos5_txt2.png" width="91" height="91" alt="Excel" /></div>
				<div class="txt1">
					<h4>Excel2010 スペシャリスト コース<br />
					Excel2013 スペシャリスト コース</h4>
				</div>
			</div><!-- /.box1 -->
			<div class="box2">
				<ul>
					<li>Excel 環境の管理</li>
					<li>セルデータの作成</li>
					<li>セルやワークシートの書式設定</li>
					<li>ワークシートやブックの管理</li>
					<li>数式や関数の適用</li>
					<li>資格的なデータの表示</li>
					<li>ワークシートのデータ共有</li>
					<li>データの分析と整理</li>
				</ul>
			</div><!-- /.box2 -->
		</div>
		</div><!-- /.p-mos5__block2.excel -->

		<div class="p-mos5__block3">
		<div class="c-wrap2">
			<h4>模擬試験</h4>
			<p>本試験に臨む前に模擬試験プログラムを行っていただきます。<br />
			制限時間内に問題を解く緊張感や、実際の試験の流れをイメージするために<br />
			<em>しっかりと模擬試験を体験しておくことで、合格率がぐっと高まります。</em><br />
			また、本試験での心構えなど、これまで市民講座が培ってきたノウハウも伝授します！！</p>
		</div>
		</div><!-- /.p-mos5__block3 -->

	</div><!-- /.p-mos5 -->



	<div class="mos_btn1 u-center">
		<a href="/school/"><img src="/mos/images/btn1.png" width="693" height="75" alt="教室へのお問合わせはコチラ" /></a>
	</div>



</div><!-- /.p-mos -->


<?php

include_once('../lib/home/footer.php');

?>