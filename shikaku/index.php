<?php

$title = "ビジネス向け資格取得講座";
$description = "パソコン市民講座のビジネス向け資格取得講座は、就職・転職・スキルアップ・キャリアアップを目指すあなたをサポートします！あなたのスキルをしっかりカウンセリングし、最適なコースをインストラクターがご提案いたします。";
$keywords = "資格,ビジネス,スキル,キャリア,アップ,取得,就職,";
$pageId = 'shikaku';
include_once('../lib/home/config.php');
include_once('../lib/home/header.php');

?>
<link rel="stylesheet" type="text/css" href="/shikaku/css/shikaku.css" media="screen and (min-width: 768px), print" />
<link rel="stylesheet" type="text/css" href="/shikaku/css/shikaku-sp.css" media="only screen and (max-width: 767px)" />

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

<div id="lead" class="clearfix">
<div class="cnt_lft">
<p>パソコン市民講座の資格取得講座では、初心者からでも資格取得を目指していただけます。<br />どの資格取得を目指すのか、教室インストラクターとご相談いただき、あなたのスキルや目的に合わせて、資格取得までのプランをご提案いたします。</p>
<p>わかりやすい映像教材による個別学習スタイルで、自分のペースで学習することが可能です。<br />わからないところは教室のインストラクターに直接質問することができます。<br />模擬試験にも対応し、試験対策もしっかりサポート！</p>
</div>
<div class="cnt_rgt"><img src="img/img_01.jpg" width="315" height="200" alt="パソコン市民講座の資格取得講座" /></div>
</div><!--/#lead-->

<div id="course_list">
<h2 class="c-title2">パソコン市民講座のビジネス向け資格取得講座</h2>

<div class="course_list_main">
<h3 class="c-title1">サーティファイ ビジネス実践講座</h3>
<div class="logo_ctf"><img src="img/logo_ctf.jpg" width="175" height="36" alt="ビジネス能力認定サーティファイ" /></div>

<div class="clearfix course_list_inner">
<div class="cnt_lft"><img src="img/img_02.jpg" width="310" height="210" alt="「実務性」の高さサーティファイ" /></div>
<div class="cnt_rgt">
<p>サーティファイの資格検定試験は「実務性」の高さを大切にしています。<br />ビジネスの現場が求めるスキルを習得でき、現場で本当に役立つ力であることを証明してくれます。<br />「何が」「どれ位」出来るのか、ビジネスシーンでの実践力が身につきます。</p>
</div>
</div>

<div class="clearfix course_list_inner">
<dl class="example clearfix">
<dt>こんな方には、サーティファイ ビジネス実践講座の受講が最適！</dt>
<dd><img src="img/ctf_ex_01.jpg" width="208" height="77" alt="実践力を身につけたい" /></dd>
<dd class="center"><img src="img/ctf_ex_02.jpg" width="208" height="77" alt="仕事で実際に用いられる資料や図表を作成したい" /></dd>
<dd><img src="img/ctf_ex_03.jpg" width="208" height="77" alt="使える機能を組み合わせて一連の成果物を完成させたい" /></dd>
</dl>
<div class="btn_detail"><a href="/certify/">詳細を見る</a></div>
</div>
</div>


<div class="course_list_main">
<h3 class="ttl_mos c-title1">MOS（マイクロソフトオフィススペシャリスト）資格取得講座</h3>
<div class="logo_mos"><img src="img/logo_mos.jpg" width="111" height="65" alt="マイクロソフトオフィススペシャリスト" /></div>

<div class="clearfix course_list_inner">
<div class="cnt_lft"><img src="img/img_03.jpg" width="310" height="210" alt="世界に通用するスキル証明MOS" /></div>
<div class="cnt_rgt">
<p>世界的に行われている国際資格で、認定されたスキルは世界で通用します。<br />ワードやエクセルなどのマイクロソフト オフィス製品の利用スキルを証明できる資格で、さまざまな機能を効率的に使いこなすスキルが身につきます。</p>
</div>
</div>

<div class="clearfix course_list_inner">
<dl class="example clearfix">
<dt>こんな方には、MOS資格取得講座の受講が最適！</dt>
<dd><img src="img/mos_ex_01.jpg" width="208" height="77" alt="WordやExcelの基本的な操作や編集機能を理解したい" /></dd>
<dd class="center"><img src="img/mos_ex_02.jpg" width="208" height="77" alt="自分のパソコンスキルを目に見える形で証明したい" /></dd>
<dd><img src="img/mos_ex_03.jpg" width="208" height="77" alt="作業効率を向上させて業務の処理能力を上げたい" /></dd>
</dl>
<div class="btn_detail"><a href="/mos/">詳細を見る</a></div>
</div>
</div>

</div>

</div>

<?php

include_once('../lib/home/footer.php');

?>