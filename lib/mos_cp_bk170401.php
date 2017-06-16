                <div id="mos">
                <div id="main_img" class="clearfix">
                    <h1><img src="/images/mos2010/mos_cp_01.jpg" width="422" height="371" alt="MOS資格取得コース" /></h1>
<?php
if( $room[$id][mos] == "1" ) {
?>
                    <div class="main_img_rgt"><img src="/images/mos2010/mos_cp_02.jpg" width="428" height="371" alt="microsoft office specialist Authorized Testing Center" /></div>
<?php
}elseif( $room[$id][mos] == "0" ){
?>
                    <div class="main_img_rgt"><img src="/images/mos2010/mos_cp_02_2.jpg" width="428" height="371" alt="microsoft office specialist" /></div>
<?php
}
?>
                </div>
                <div id="und_img"><img src="/images/mos2010/mos_cp_03.jpg" width="850" height="62" alt="就職・キャリアアップ・再就職・スキルアップ・転職" /></div>
                <ul id="mos_menu" class="clearfix">
                	<li><img src="/images/mos2010/mos_cp_04.jpg" width="186" height="158" alt="話題の個別学習だからマイペースで受講できる" /></li>
                	<li><img src="/images/mos2010/mos_cp_05.jpg" width="186" height="158" alt="自宅でも復習できるe-ラーニングを業界初完備" /></li>
                	<li><img src="/images/mos2010/mos_cp_06.jpg" width="186" height="158" alt="分かりやすい料金設定「定額料金設定」" /></li>
<?php
if( $room[$id][mos] == "1" ) {
?>
                	<li class="last"><img src="/images/mos2010/mos_cp_07.jpg" width="186" height="158" alt="認定試験会場だからいつもの教室で受験が可能" /></li>
<?php
}elseif( $room[$id][mos] == "0" ){
?>
                	<li class="last"><img src="/images/mos2010/mos_cp_07_2.jpg" width="186" height="158" alt="いつもと同じ環境 最寄りの認定会場で受験ができる" /></li>
<?php
}
?>
                	<li><img src="/images/mos2010/mos_cp_08.jpg" width="186" height="158" alt="MOSの合格実績100％（2014年10月31日現在）" /></li>
                	<li><img src="/images/mos2010/mos_cp_09.jpg" width="186" height="158" alt="驚きのスピード対策最短30時間で合格できる（目安10日程度）" /></li>
                	<li><img src="/images/mos2010/mos_cp_10.jpg" width="186" height="158" alt="完全予約制だから都合に合わせて予約できる" /></li>
                	<li class="last"><img src="/images/mos2010/mos_cp_11.jpg" width="186" height="158" alt="まずは教室で無料体験" /></li>
                </ul>

<?php
include("../lib/mos_cp_pricelist.php");
//include("mos_cp_date.php");
?>

                <div class="toiawase_btn"><a href="#toiawase_form"><img src="/images/btn-inq_contact.jpg" width="500" height="70" alt="無料説明会のお申込みはこちら" class="alpha" /></a></div>

                <div id="mos_01" class="mos_section fc_white">
                <h2><img src="/images/mos2010/mos_03.gif" width="207" height="33" alt="MOSとは" /></h2>
                <p>WordやExcelなどの<span class="font16 b">スキルを客観的に証明できる資格</span>です。<br />MOS資格試験は実際にアプリケーションを操作する実技であるため、<br />対策学習によって、パソコンを扱う実務能力が向上します。</p>
                </div><!-- /#mos_01 -->
                <div id="mos_02" class="mos_section fc_white">
                <h3><img src="/images/mos2010/mos_04.gif" width="387" height="37" alt="MOSを取得すると" /></h3>
                <p>仕事をお持ちの方はパソコンを使った業務の効率化が図れます！<br />就職・転職活動中の方はパソコンスキルをアピール出来ます！<br /><span class="font16 b">MOS所有者を優遇する企業や、社員教育として導入している企業</span><br />もたくさんあります。<br />パソコン市民講座で資格取得に向かって勉強をスタートしましょう！</p>
                </div><!-- /#mos_02 -->

                <div id="mos_04" class="mos_section fc_gray">
                <h2><img src="/images/mos2010/mos_06.gif" width="285" height="38" alt="コースのご紹介" /></h2>
                <p>実際の出題範囲の操作をしっかりマスターできるように、<br />テキスト教材を使いながら効率的に学習を進めていきます。<br /><span class="font16 b">分からないところがあれば、その場で先生に質問して<br />解決しましょう。</span><br />試験合格までをしっかりサポートします！</p>
                </div><!-- /#mos_04 -->
                <div id="mos_05" class="mos_section fc_white">
                <h3>Word2010 スペシャリストコース<br />Word2013 スペシャリストコース</h3>
                <ul class="clearfix">
                    <li>文書の共有と管理</li>
                    <li>コンテンツの書式設定</li>
                    <li>図や画像の挿入</li>
                    <li>文書の校正</li>
                    <li>参考資料とハイパーリンクの適用</li>
                    <li>差し込み印刷の実行</li>
                    <li>ページのレイアウトと再利用可能なコンテンツの適用</li>
                </ul>
                </div><!-- /#mos_05 -->
                <div id="mos_06" class="mos_section fc_white">
                <h3>Excel2010 スペシャリストコース<br />Excel2013 スペシャリストコース</h3>
                <ul class="clearfix">
                    <li>Excel 環境の管理</li>
                    <li>セルデータの作成</li>
                    <li>セルやワークシートの書式設定</li>
                    <li>ワークシートやブックの管理</li>
                    <li>数式や関数の適用</li>
                    <li>視覚的なデータの表示</li>
                    <li>ワークシートのデータの共有</li>
                    <li>データの分析と整理</li>
                </ul>
                </div><!-- /#mos_06 -->
                <div id="mos_07" class="mos_section fc_white">
                <h4><img src="/images/mos2010/mos_09.gif" width="112" height="27" alt="模擬試験" /></h4>
                <p>本試験に臨む前に模擬試験プログラムを行っていただきます。<br />制限時間内に問題を解く緊張感や、実際の試験の流れをイメージするために<br /><span class="font16 b">しっかりと模擬試験を体験しておくことで、合格率がぐっと高まります。</span><br />また、本試験での心構えなど、これまで市民講座が培ってきたノウハウも伝授します！！</p>
                </div><!-- /#mos_07 -->
                
<?php
include("../lib/mos_cp_pricelist.php");
//include("mos_cp_date.php");
?>

                <div class="toiawase_btn"><a href="#toiawase_form"><img src="/images/btn-inq_contact.jpg" width="500" height="70" alt="無料説明会のお申込みはこちら" class="alpha" /></a></div>

                <div id="mos_08" class="mos_section fc_gray">
                <h3><img src="/images/mos2010/mos_10.gif" width="560" height="80" alt="パソコン市民講座とは？" /></h3>
                <div class="pdgLR15">
                <p>全国150教室以上を展開するパソコン市民講座は、<br />これまでに<span class="font16 b">54万人以上</span>の皆さんのパソコン学習をサポートしてきました。<br />当教室の主な生徒さんはパソコン初心者です。<br />初心者の方にわかりやすいということは、誰にとってもわかりやすいということです。<br />パソコンに自信がない方も、MOS資格取得に向けて、一緒に頑張ってみませんか？<br /><span class="font16 b">経験豊富なインストラクターの先生と同じ目標を持つ仲間たちが待っています！</span></p>
                </div><!-- /mos_section -->
                <div class="image_center"><img src="/images/mos2010/mos_11.jpg" width="635" height="100" alt="パソコン市民講座のイメージ" /></div>
                </div><!-- /#mos_08 -->
                </div><!-- /#mos -->

                <div id="toiawase_form">
					<div class="i-pt clearfix mB20 mR10">
						<h2 class="bg-check blue font20 mB20"><img src="/images/mos2010/ico-tel.gif" width="30" height="30" alt="電話" /> お電話でのお問い合わせ・無料説明会のお申し込み</h2>
						<div class="clearfix">
						<img src="/images/contact_62.jpg" class="imgleft" />
						<div class="section-lv2 moz2 mB30 clearfix">
							<p>お気軽にお電話下さい！</p>
							<p><span class="font30 red">tel.<a href="tel:<?=$room[$id][phone]?>" class="tel"><?=$room[$id][phone]?></a></span><br />
							・お電話の際は、必ず<strong>「ホームページを見た」とお伝えください。</strong><br />
							・開講時間は<a href="#timetable">こちらをご覧ください</a></p>
						</div><!-- /.section-lv2 -->
						</div>
						<h2 class="mB20 bg-check blue font20"><img src="/images/mos2010/ico-mail.gif" width="42" height="30" alt="メール" /> お問い合わせ・無料説明会のお申し込みフォーム</h2>
                        <div class="mB20"><img src="/images/img-form_step1.jpg" width="810" height="55" alt="お客様情報入力" /></div>
						<p><span class="red">必須</span>項目は必ずご入力お願いいたします。</p>
						<div class="section-lv2 contact">
						<form action="/<?=$room[$id][dir]?>/mos_cp_contact_confirm.php" method="post">
<table class="inq_form">
<tr>
	<th>お申込教室</th>
	<td><?=$room[$id][name]?>教室</td>
</tr>
<tr>
	<th>お名前　<span class="red">必須</span></th>
	<td>例）市民花子<br /><input type="text" value="" name="name" maxlength="20" size="40" class="form_input01"></td>
</tr>
<tr>
	<th>フリガナ　<span class="red">必須</span></th>
	<td>例）シミンハナコ<br /><input type="text" value="" name="kana" maxlength="20" size="40" class="form_input01"></td>
</tr>
<tr>
	<th>電話番号（携帯可）　<span class="red">必須</span></th>
	<td>例）09000000000<br /><input type="text" value="" name="phone" maxlength="15" size="30" class="form_input02"></td>
</tr>
<tr>
	<th>メールアドレス</th>
	<td>例）example@pc4353.com<br /><input type="text" value="" name="mail" maxlength="100" size="40"></td>
</tr>
<tr>
	<th>年代</th>
	<td><ul class="old clearfix">
    <li><label><input type="radio" class="nBn" value="10代" name="old"> 10代</label></li>
	<li><label><input type="radio" class="nBn" value="20代" name="old"> 20代</label></li>
	<li><label><input type="radio" class="nBn" value="30代" name="old"> 30代</label></li>
    <li><label><input type="radio" class="nBn" value="40代" name="old"> 40代</label></li>
	<li><label><input type="radio" class="nBn" value="50代" name="old"> 50代</label></li>
	<li><label><input type="radio" class="nBn" value="60代" name="old"> 60代</label></li>
    <li><label><input type="radio" class="nBn" value="70代" name="old"> 70代</label></li>
	<li><label><input type="radio" class="nBn" value="80代" name="old"> 80代</label></li>
	</ul></td>
</tr>
<tr>
	<th>無料説明会希望日　<span class="red">必須</span></th>
    <td><select name="nichiji_1">
    	<option value="">&nbsp;</option>
    	<option value="1">1</option>
    	<option value="2">2</option>
    	<option value="3">3</option>
    	<option value="4">4</option>
    	<option value="5">5</option>
    	<option value="6">6</option>
    	<option value="7">7</option>
    	<option value="8">8</option>
    	<option value="9">9</option>
    	<option value="10">10</option>
    	<option value="11">11</option>
    	<option value="12">12</option>
        </select>月&nbsp;
        <select name="nichiji_2">
    	<option value="">&nbsp;</option>
    	<option value="1">1</option>
    	<option value="2">2</option>
    	<option value="3">3</option>
    	<option value="4">4</option>
    	<option value="5">5</option>
    	<option value="6">6</option>
    	<option value="7">7</option>
    	<option value="8">8</option>
    	<option value="9">9</option>
    	<option value="10">10</option>
    	<option value="11">11</option>
    	<option value="12">12</option>
    	<option value="13">13</option>
    	<option value="14">14</option>
    	<option value="15">15</option>
    	<option value="16">16</option>
    	<option value="17">17</option>
    	<option value="18">18</option>
    	<option value="19">19</option>
    	<option value="20">20</option>
    	<option value="21">21</option>
    	<option value="22">22</option>
    	<option value="23">23</option>
    	<option value="24">24</option>
    	<option value="25">25</option>
    	<option value="26">26</option>
    	<option value="27">27</option>
    	<option value="28">28</option>
    	<option value="29">29</option>
    	<option value="30">30</option>
    	<option value="31">31</option>
        </select>日&nbsp;
        <select name="nichiji_3">
    	<option value="">&nbsp;</option>
    	<option value="午前">午前</option>
    	<option value="午後">午後</option>
        </select>
        <p class="red">※後程、お電話にてお時間の確認をさせていただきます。</p>
        </td>
</tr>
<tr>
	<th id="timetable">開講時間</th>
	<td><?=$room[$id][open]?></td>
</tr>
<tr>
	<th>ご質問など</th>
	<td><textarea name="question" rows="8" cols="44" class="form_input01"></textarea></td>
</tr>
</table>
						<p class="sp3 center mT10"><input class="file over1" type="image" src="/images/btn-inq_confirm.jpg" width="500" height="70"/></p>
						<input type="hidden" value="1" name="step" />
						</form>
						</div><!-- /.section-lv2 -->
						<p class="mT25">当社の<a href="http://www.cheery.co.jp/privacy.html" target="_blank">プライバシーポリシー</a>を十分にご確認いただいた上で、お問い合わせください。</p>
					</div><!-- /.i-pt -->
                </div><!-- /#toiawase_form -->
					

					<div class="back-top mR20"><a class="moz2" href="#header">ページトップへ</a></div>

				</div><!-- /.block -->
				</div><!-- /#kasou -->