<?php
require_once("config.php");
require_once("../lib/config.php");
?>

<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="description" content="<?=$title.$sep?>スキルアップ・資格取得まで初心者からでも安心のパソコン教室 <?=$room[$id][area]?>のパソコン市民講座 <?=$room[$id][name]?>教室。MOS資格・サーティファイ技能検定などエクセル・ワード・パワーポイントの資格取得やビジネススキルアップを教室インストラクターがしっかりとサポート！" />
<meta name="keywords" content="<?=$room[$id][keywords]?><?=$room[$id][name]?>教室,パソコン,資格,検定,教室,スクール,MOS,サーティファイ,ビジネスオンライン,PC教室,初心者" />
<title><?=$title.$sep?><?=$room[$id][area]?>の資格が取れるパソコン教室｜パソコン市民講座 <?=$room[$id][name]?>教室</title>
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=2">
<link rel="canonical" href="https://www.pc4353.net/<?=$room[$id][dir]?>/">
<link rel="stylesheet" href="/sp/css/smart.css">



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script> 
<script src="js/map.js" type="text/javascript" charset="utf-8"></script>

<!-- slider 'slick' -->
<script src="/sp/lib/js/modernizr.min.js" type="text/javascript"></script>
<script src="/sp/lib/js/jquery-1.11.0.min.js"></script>
<script src="/sp/lib/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/sp/lib/js/highlight.min.js"></script>
<script type="text/javascript" src="/sp/lib/slick/slick.js"></script>
<script type="text/javascript" src="/sp/lib/js/scripts.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script type="text/javascript">
        var disqus_shortname = 'slickcarousel';
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
<link rel="stylesheet" type="text/css" href="/sp/lib/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="/sp/lib/css/style.css">
<!-- // slider 'slick' -->
<!-- accordion -->
<link rel="stylesheet" href="/sp/css/acordion.css">
<script type="text/javascript" src="/sp/js/acordion.js"></script>
<!-- // accordion -->
<script>
$(function(){
  $('#tab-menu li').on('click', function(){
    if($(this).not('active')){
      // タブメニュー
      $(this).addClass('active').siblings('li').removeClass('active');
      // タブの中身
      var index = $('#tab-menu li').index(this);
      $('#tab-box div').eq(index).addClass('active').siblings('div').removeClass('active');
    }
  });
});
</script>


</head>
<body onload="dispgmap();">
<header>
<div class="container">
<div class="header cf">
<h1><a href="/sp/"><img src="/sp/images/header_logo.png" width="190" height="76" alt="<?=$room[$id][area]?>の資格が取れるパソコン教室｜パソコン市民講座 <?=$room[$id][name]?>教室 スキルアップ・資格取得まで初心者からでもしっかり学べる！"></a></h1>
<p class="catch">スキルアップ・資格取得まで<br>
初心者からでもしっかり学べる</p>
</div>
</div>
</header>

<section class="inq_btn">
<div class="btGoCountact"><a href="/<?=$room[$id][dir]?>/smart_contact.php">お問い合わせ・無料体験のお申込み</a></div>
</section>

<!-- selectSchool -->
<section class="selectSchool">
<h2><?=$room[$id][name]?>教室</h2>

</section>
<!-- // selectSchool -->

<section class="sliderVisual">
<div class="slider single-item">
<?php
if ($id == "6117001" || $id == "6114001" || $id == "1076001") {
//FC教室
?>
<?php
} if ( $room[$id][biz_on] == "1" ) {
//ビジネスオンライン実施教室
?>
<div class="sliderPhoto"><a href="/shikaku/biz-online.html" target="_blank"><img src="/sp/images/slider006.jpg" alt="ビジネスオンラインスクール誕生！"></a></div>
<?php
} else {
//通常
?>
<!--<div class="sliderPhoto"><img src="/sp/images/slider004.jpg" alt="スタートキャンペーン実施中！"></div>-->
<?php
}
?>
<div class="sliderPhoto"><a href="/<?=$room[$id][dir]?>/certify.php"><img src="/sp/images/slider005.jpg" alt="ビジネス実践講座"></a></div>
<div class="sliderPhoto"><img src="/sp/images/slider001.jpg" alt="スキルアップに！キャリアアップに！MOS資格取得講座"></div>
<div class="sliderPhoto"><img src="/sp/images/slider002.jpg" alt="これまでの毎日がより便利で豊かに！タブレット講座"></div>
<div class="sliderPhoto"><img src="/sp/images/slider003.jpg" alt="ゼロから始める初心者の方に！初めてのパソコン講座"></div>
</div>
<div class="top_img"><img src="/sp/images/bg_shikaku001.jpg" alt="スキルアップも資格取得も対応。エクセル・ワード合格率96.1％　仕事に使えるパソコンスキルを！！"></div>
</section>

<!-- selectCourse -->
<section class="selectCourse">
<h2>受講コースのご紹介</h2>

<!-- mosCourse -->
<dl class="acordion mosCourse">
<dt class="trigger cf">
<div class="iLeft">
MOS資格対策講座<br>
<span class="catch">マイクロソフトオフィスのスペシャリストを目指す！</span>
</div>
<span class="open-close"></span></dt>
<dd class="acordion_tree">

<div class="mosCourse">

<div class="container">
<h4>就職・キャリアアップ・<br>スキルアップをめざして<br>しっかり資格の取得を！</h4>
<h5>パソコン市民講座のMOS講座!</h5>
<ul class="coursePoint">
<li>マイペースで受講できる！</li>
<li>e-learningを業界初完備！</li>
<li>定額料金設定</li>
<?php
if( $room[$id][mos] == "1" ) {
?>
<li>いつもの教室で受験可能！</li>
<?php
}elseif( $room[$id][mos] == "0" ){
?>
<li>最寄りの認定会場で受験可能！</li>
<?php
}
?>
<li>Word/Excel合格実績96.1%！</li>
<li>最短30時間で合格できる！</li>
<li>完全予約制</li>
</ul>

<div class="btGoCountact"><a href="/<?=$room[$id][dir]?>/smart_contact.php">お問い合わせ・無料体験のお申込み</a></div>

<!--<h6>短期集中コース</h6>
<p class="bodyMosCourse">不得意分野のみをポイント学習</p>
<table class="mosCouresTab">
<tr>
<th>時間数</th><th>料金</th>
</tr>
<tr>
<td>30時間<br>
（目安：１ヵ月間）</td>
<td>42,500円<br>
（1時間当り1,417円）</td>
</tr>
</table>

<h6>標準コース</h6>
<p class="bodyMosCourse">MOS資格取得を目標とした標準コース</p>
<table class="mosCouresTab">
<tr>
<th>時間数</th><th>料金</th>
</tr>
<tr>
<td>60時間<br>
（目安：２ヵ月間）</td>
<td>85,000円<br>
（1時間当り1,417円）</td>
</tr>
</table>

<h6>実力養成コース</h6>
<p class="bodyMosCourse">パソコンが苦手という方でも合格できる</p>
<table class="mosCouresTab">
<tr>
<th>時間数</th><th>料金</th>
</tr>
<tr>
<td>90時間以上<br>
（目安：8ヵ月間）</td>
<td>月額18,000円（12回）<br>
（1時間当り1,500円）</td>
</tr>
</table>

<ul class="listMosCourseNote">
<li>※テキスト代、月会費2,000円(税別)、資格試験料が別途かかります。</li>
<li>※Excel、Wordいずれか1つの受講料金です。</li>
<li>※個々の目的とレベルにあったコースをご提案いたします。</li>
</ul>

<div class="btGoCountact"><a href="/<?=$room[$id][dir]?>/smart_contact.php">お問い合わせ・無料体験のお申込み</a></div>-->

<h5 class="perfection">「MOS資格対策講座」コース内容</h5>

<h6 class="mosWord">Word2010/Word2013<br>スペシャリストコース</h6>
<ul class="mosWord">
<li>●文書の共有と管理</li>
<li>●コンテンツの書式設定</li>
<li>●ページのレイアウトと再利用可能なコンテンツの適用</li>
<li>●図や画像の挿入</li>
<li>●文書の校正</li>
<li>●参考資料とハイパーリンクの適用</li>
<li>●差し込み印刷の実行</li>
</ul>


<h6 class="mosExcel">Excel2010/Excel2013<br>スペシャリストコース</h6>
<ul class="mosExcel">
<li>●Excel 環境の管理</li>
<li>●セルデータの作成</li>
<li>●セルやワークシートの書式設定</li>
<li>●ワークシートやブックの管理</li>
<li>●数式や関数の適用</li>
<li>●視覚的なデータの表示</li>
<li>●ワークシートのデータの共有</li>
<li>●データの分析と整理</li>
</ul>

<div class="btGoCountact"><a href="/<?=$room[$id][dir]?>/smart_contact.php">お問い合わせ・無料体験のお申込み</a></div>

</div>
</div>

</dd>
</dl>
<!-- // mosCourse -->


<!-- certifyCourse -->
<dl class="acordion certifyCourse">
<dt class="trigger cf">
<div class="iLeft">
ビジネス実践講座<br>
<span class="catch">サーティファイ技能認定試験に対応。実践力を養成！</span>
</div>
<span class="open-close"></span></dt>
<dd class="acordion_tree">

<div class="certifyCourse">

<div class="container">
<h4>ビジネスで役立つ知識と技術の習得を目的とした資格検定試験に対応。<br>実務で作成する文書や図表などを効率的に作成する技能が身に付く！</h4>

<h6>コース</h6>
<p class="bodyMosCourse">「ビジネス実践講座」は映像とテキスト・問題集を使った講座で各コースおよそ20時間で構成。</p>
<table class="mosCouresTab">
<tr>
<th>時間数</th><th>料金</th>
</tr>
<tr>
<td>20時間～<br>
（目安：２ヵ月間～）</td>
<td>30,000円～<br>
（1時間当り1,500円）</td>
</tr>
</table>

<ul class="listMosCourseNote">
<li>※テキスト代、月会費2,000円(税別)、資格試験料が別途かかります。</li>
<li>※Excel、Word、PowerPointいずれか1つの受講料金です。</li>
<li>※時間数および受講期間の目安は個人差がございます。</li>
</ul>

<div class="btGoCountact"><a href="/<?=$room[$id][dir]?>/smart_contact.php">お問い合わせ・無料体験のお申込み</a></div>

<h5 class="perfection">「ビジネス実践講座」コース内容</h5>

<h6 class="mosWord">Word2013　基本編/応用編<br>文書処理技能認定対応</h6>
<ul class="mosWord">
<li>●書式設定</li>
<li>●タブとリーダー</li>
<li>●インデント</li>
<li>●表・図形・ワードアート</li>
<li>●段組み</li>
<li>●文書の構成</li>
<li>●SmartArt</li>
<li>●差し込み印刷など</li>
</ul>


<h6 class="mosExcel">Excel2013　基本編/応用編<br>表計算処理技能認定対応</h6>
<ul class="mosExcel">
<li>●データ入力</li>
<li>●数式・関数</li>
<li>●表・グラフ</li>
<li>●データベース</li>
<li>●入力規則</li>
<li>●条件付き書式</li>
<li>●検索・置換</li>
<li>●ピボットテーブル・マクロなど</li>
</ul>

<h6 class="mosPower">PowerPoint2013　初級/上級<br>プレゼンテーション技能認定対応</h6>
<ul class="mosPower">
<li>●プレゼンテーションの作成</li>
<li>●文字の編集</li>
<li>●オブジェクトの作成</li>
<li>●表示効果</li>
<li>●スライドショー</li>
<li>●SmartArtの活用など</li>
</ul>

<div class="btGoCountact"><a href="/<?=$room[$id][dir]?>/smart_contact.php">お問い合わせ・無料体験のお申込み</a></div>

</div>
</div>

</dd>
</dl>
<!-- // certifyCourse -->


<!-- officeCourse -->
<dl class="acordion officeCourse">
<dt class="trigger cf">
<div class="iLeft">
もっと仕事で役立てたい<br>
<span class="catch">ワードやエクセルをスキルアップ！</span>
</div>
<span class="open-close"></span></dt>
<dd class="acordion_tree">

<div class="officeCourse addWall">
<div class="container">
<p class="catchName">仕事をもっと効率よく、より快適に！<br>
実践力がぐんとアップします。</p>
<h4>「もっと仕事で役立てたい」コース内容</h4>

<ul class="courseList">
<li>ワードコース</li>
<li>エクセルコース</li>
<!--<li>パワーポイントコース</li>-->
<li>タイピングマスター</li>
<li>演習講座・ドリル講座各種</li>
</ul>

<div class="recommenCourse wall">
<h4 class="recommenCourse">こんな方におすすめ！</h4>
<ul class="recommenCourseList">
<li>●エクセルで素早く計算</li>
<li>●ワードで書類をつくりたい</li>
<!--<li>●パワーポイントでワンランク<br>上のプレゼンテーション</li>-->
<li>●タッチタイピング習得で仕事<br>の効率をＵＰしたい</li>
<li>●様々な書類作成に対応できるスキルを付けたい！</li>
</ul>
</div>

<div class="applicationList">
<h5>主な対象アプリケーション</h5>
<ul class="cf">
<li class="word">Word 2013/2010</li>
<li class="excel">Excel 2013/2010</li>
<!--<li class="ppt">Power Point 2010</li>-->
</ul>
</div>

</div>
</div>

</dd>
</dl>
<!-- // officeCourse -->


<!-- ipadCourse -->
<dl class="acordion ipadCourse">
<dt class="trigger cf">
<div class="iLeft">
タブレット講座（iPad対応）<br>
<span class="catch">タブレットでこれまでの毎日をより便利に！</span>
</div>
<span class="open-close"></span></dt>
<dd class="acordion_tree">
<div class="ipadCourse addWall">
<div class="container">
<p class="catchName">タブレット端末の使いこなし方が、<br>初心者の方でもわかりやすく学べる。</p>
<h4>講座の特長</h4>

<ul class="courseList">
<li>最新機種の iPad で学べます。</li>
<li>基礎・応用・活用のステップ学習。</li>
<li>パソコンとの連携が学べます。</li>
</ul>

<div class="recommenCourse wall">
<h4 class="recommenCourse">こんな方におすすめ！</h4>
<ul class="recommenCourseList">
<li>●タブレット端末に興味があり、まず<br>は体験してみたい方</li>
<li>●タブレット端末やスマートフォンの<br>購入をご検討されている方</li>
<li>●タブレット端末をイマイチ使い<br>こなせていない方</li>
</ul>
</div>

</div>
</div>
</dl>
<!-- // ipadCourse -->


<!-- beginnerCourse -->
<dl class="acordion beginnerCourse">
<dt class="trigger cf">
<div class="iLeft">
初めてのパソコン<br>
<span class="catch">ゼロから始めたい初心者の方へ</span>
</div>
<span class="open-close"></span></dt>
<dd class="acordion_tree">

<div class="beginnerCourse addWall">
<div class="container">
<h4>「はじめてのパソコン」コース内容</h4>
<ul class="courseList">
<li>初心者／初級者コース</li>
<li>パソコン使いこなし術</li>
</ul>

<div class="recommenCourse wall">
<h4 class="recommenCourse">こんな方におすすめ！</h4>
<ul class="recommenCourseList">
<li>●初めてパソコンを買った</li>
<li>●マウス操作やキーボード入力<br>などの基礎を身につけたい</li>
<li>●パソコンでどんなことができ<br>るのか知りたい</li>
<li>●タッチタイピングを身につけたい</li>
<li>●電子メールでやりとりしたい</li>
</ul>
</div>

</div>
</div>

</dd>
</dl>
<!-- beginnerCourse -->


<!-- internetCourse -->
<dl class="acordion internetCourse">
<dt class="trigger cf">
<div class="iLeft">
インターネットがしたい<br>
<span class="catch">メールやインターネットを使いたい</span>
</div>
<span class="open-close"></span></dt>
<dd class="acordion_tree">

<div class="internetCourse addWall">
<div class="container">
<h4>「インターネットがしたい」コース内容</h4>
<ul class="courseList">
<li>インターネット活用講座</li>
<li>わくわくパソコン活用（旅行編)</li>
</ul>

<div class="recommenCourse wall">
<h4 class="recommenCourse">こんな方におすすめ！</h4>
<ul class="recommenCourseList">
<li>●インターネットって何？</li>
<li>●ネットショッピングをしたい</li>
<li>●ネットで宿泊先の予約をしたい</li>
<li>●ブログをやってみたい</li>
<li>●インターネットのルールなどを知りたい</li>
<li>●便利な使い方やいろんなサイトを知りたい</li>
</ul>
</div>

</div>
</div>

</dd>
</dl>
<!-- // internetCourse -->




<!-- hobbyCourse -->
<dl class="acordion hobbyCourse">
<dt class="trigger cf">
<div class="iLeft">
趣味で楽しみたい<br>
<span class="catch">デジカメ写真で絵はがき作成！</span>
</div>
<span class="open-close"></span></dt>
<dd class="acordion_tree">
<div class="hobbyCourse addWall">
<div class="container">
<h4>「趣味で楽しみたい」コース内容</h4>
<ul class="courseList">
<li>デジカメ活用講座</li>
<li>年賀状作成講座</li>
<li>パソコンわくわく活用講座</li>
</ul>
<div class="recommenCourse wall">
<h4 class="recommenCourse">こんな方におすすめ！</h4>
<ul class="recommenCourseList">
<li>●デジカメ写真をパソコンで管理<br>したい</li>
<li>●下調べ、しおり、予約…</li>
<li>●パソコンを旅行に活かしたい。</li>
<li>●パソコンで年賀状をつくりたい</li>
<li>●自分好みのCD作り</li>
<li>●パソコンで世界にひとつだけの<br>オリジナル作品をつくりたい。</li>
<li>●パソコンでゲームをしたい</li>
</ul>
</div>
</div>
</div>
</dd>
</dl>
<!-- hobbyCourse -->



</section>
<!-- // selectCourse -->

<section class="schoolRoom">
<div class="container">
<div class="btGoCountact"><a href="/<?=$room[$id][dir]?>/smart_contact.php">お問い合わせ・無料体験のお申込み</a></div>

<div class="contactUs">
<a href="tel:<?=$room[$id][phone]?>"><?=$room[$id][phone]?></a>
</div>
</div>
</section>

<!-- section. studentVoice -->
<section class="studentVoice">
<h2>受講生の声</h2>

<!-- タブの中身 -->
<div id="tab-box">
  <div class="active">
    <dl>
    <dt>転職のためにパソコンスキルを向上させたい！</dt>
    <dd>
    <p class="img_voice"><img src="/sp/images/voice_001.png" alt="柴崎様"><br>受講生　柴崎 様</p>
    <p>仕事で必要になったタイピングをマスターするために入会しましたが、現在は転職のために教室に通っています。実は受講を続けているうちに、「証」として資格を取ろうと考えWordは合格しました。今はExcel合格に向けて頑張っています。市民講座は家でも映像教材を見ることが出来るので復習に重宝しています。</p>
    </dd>
    </dl>
  </div>
  <div>
    <dl>
    <dt>会社でExcelやWordを効率的に使いたい！</dt>
    <dd>
    <p class="img_voice"><img src="/sp/images/voice_002.png" alt="尾形様"><br>受講生　尾形 様</p>
    <p>会社でExcelやWordを使うようになり、効率的に作業ができないことから受講を決めました。本など自宅学習よりも、教室できっちりと勉強したいと思いました。市民講座は受講曜日を自由に選べて、私の教室は土日も開校していたことが決めてとなりました。今では、会社で後輩に教えることが出来る程になりました。</p>
    </dd>
    </dl>
  </div>
  <div>
    <dl>
    <dt>個別指導で初心者からでも安心して学べる！</dt>
    <dd>
    <p class="img_voice"><img src="/sp/images/voice_003.png" alt="穗苅様"><br>受講生　穗苅 様</p>
    <p>職場の方に「パソコンを勉強してください」と言われたことがきっかけで教室に通い始めました。市民講座は個別指導で私のようにパソコン初心者でも、電源の入れ方から教えてくれると聞いたのでここに決めました。映像教材もテキストを見ながらゆっくり教えてくれるのでとっても分かりやすいです。これからタイピングもマスターします！</p>
    </dd>
    </dl>
  </div>
</div>

<!-- タブメニュー -->
<ul id="tab-menu" class="cf">
  <li class="active"><img src="/sp/images/voice_001.png" alt="柴崎様"><br>柴崎様の場合</li>
  <li><img src="/sp/images/voice_002.png" alt="尾形様"><br>尾形様の場合</li>
  <li><img src="/sp/images/voice_003.png" alt="穗苅様"><br>穗苅様の場合</li>
</ul>


<div id="schoolRoom" class="sliderPhoto"><img src="/sp/images/bg_skill_check.jpg" alt="無料スキル診断は各教室で実施しています。お申し込みはメールまたはお電話で。所要時間は30分程度です。"></div>

</section>
<!-- // section. studentVoice -->

<section class="schoolRoom">
<?php
if ($id == "1001049" || $id == "1001078" || $id == "1001012" || $id == "1001130" || $id == "6015017" || $id == "6015027" || $id == "6015120" || $id == "6015124") {
//ビジネスオンライン実施教室
?>
<div class="sliderPhoto"><a href="/shikaku/biz-online.html" target="_blank"><img src="/sp/images/slider006.jpg" alt="ビジネスオンラインスクール誕生！"></a></div>
<?php
}
?>
<div class="container">

<div class="schoolAddress">
<p><?=$room[$id][ad1]?><br /><?=$room[$id][ad2]?><br /><?=$room[$id][ad3]?></p>
<p><?=$room[$id][access]?></p>
</div>

<div id="gmap" style="margin-bottom: 0px;width:310px; height:240px;"></div> 

<div class="gMapApp">
<a href="http://maps.google.com/maps?q=パソコン市民講座<?=$room[$id][name]?>" class="openmap">地図アプリで見る</a>
</div>
<?php
if ($id == "6117001" || $id == "6114001" || $id == "1076001") {
//FC教室
?>
<?php
} else {
//通常
?>
<!--<div class="sliderPhoto"><img src="/sp/images/slider004.jpg" alt="スタートキャンペーン実施中！"></div>-->
<?php
}
?>

<div class="btGoCountact"><a href="/<?=$room[$id][dir]?>/smart_contact.php">お問い合わせ・無料体験のお申込み</a></div>

<div class="contactUs">
<a href="tel:<?=$room[$id][phone]?>"><?=$room[$id][phone]?></a>
</div>



<div class="calender">
<?php
	if (!empty($room[$id][open2])) {
		echo "<table><tr><th colspan=\"2\">開講時間</th></tr>";
		echo $room[$id][open2];
		echo "</table>";
	} else { 

		echo "<p class=\"th\">開講時間</p>";
		echo "<p class=\"body\">";
		echo $room[$id][open] ;
		echo "</p>";
	}
?>
<?php
	if (!empty($room[$id][open3])) {
		echo "<p class=\"note\">";
		echo $room[$id][open3];
		echo "</p>";
	}
?>
</div>


<div class="photoSchoolRoom">
<img src="/<?=$room[$id][dir]?>/images/about_38.jpg" alt="教室の様子など" />
</div>


<div class="linkPcSite">
<a href="/<?=$room[$id][dir]?>/about.php">当パソコン教室の詳細</a>
</div>



</div>
<?php
if ($id == "6117001" || $id == "6114001" || $id == "1076001") {
//FC教室
?>
<?php
} else {
//通常
?>
<div class="sliderPhoto"><a href="https://www.pc4353.net/15th/" target="_blank"><img src="/img/bnr-main05.png" alt="おかげさまで、パソコン市民講座15周年"></a></div>
<?php
}
?>
</section>


<footer>

<div class="name">
<p>運営元　株式会社チアリー</p>
</div>

<div class="menu">
<ul class="cf">
<li><a href="/sp/profile.html">会社案内</a></li>
<li><a href="/sp/privacy.html">プライバシーポリシー</a></li>

</ul>
</div>

<div class="copyright">
<p>COPYRIGHT&copy;<?=date("Y")?> Cheery, All Rights Reserved.</p>
</div>

</footer>


<!-- GoogleAnalytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60689014-1', 'auto');
  ga('require', 'displayfeatures');
  ga('require', 'linkid', 'linkid.js');
  ga('send', 'pageview');

  ga('create', 'UA-19029672-1', 'auto', {'name': 'secondTracker'});
  ga('secondTracker.require', 'displayfeatures');
  ga('secondTracker.require', 'linkid', 'linkid.js');
  ga('secondTracker.send','pageview');

</script>


<!-- YahooListing -->
<script type="text/javascript">
  (function () {
    var tagjs = document.createElement("script");
    var s = document.getElementsByTagName("script")[0];
    tagjs.async = true;
    tagjs.src = "//s.yjtag.jp/tag.js#site=iBKwITQ";
    s.parentNode.insertBefore(tagjs, s);
  }());
</script>
<noscript>
  <iframe src="//b.yjtag.jp/iframe?c=iBKwITQ" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</noscript>

</body>
</html>