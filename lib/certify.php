<?php
// index判定
if( ereg( "index", $_SERVER["SCRIPT_NAME"])){
    $index = 1;
    $body_class = " class=\"top\"";
    $logo_tag = "h1";
} else {
    $sep = "｜";
    $logo_tag = "p";
}

// form判定
if( ereg( "contact", $_SERVER["SCRIPT_NAME"]) || ereg( "recruit", $_SERVER["SCRIPT_NAME"]) || ereg( "mos", $_SERVER["SCRIPT_NAME"])){
	$form = 1;
}

// 各ページ判定
if( ereg( "mos", $_SERVER["SCRIPT_NAME"])){
	$title = "MOS（マイクロソフトオフィススペシャリスト）資格取得講座";
}
if( ereg( "certify", $_SERVER["SCRIPT_NAME"])){
	$title = "ビジネス実践講座【サーティファイ】ワード・エクセル技能認定試験対応";
}


?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" />
<title><?=$title.$sep?><?=$room[$id][area]?>のパソコン教室｜パソコン市民講座 <?=$room[$id][name]?>教室</title>
<meta name="keywords" content="パソコン教室,<?=$room[$id][keywords]?><?=$room[$id][name]?>教室,パソコンスクール,資格,検定,MOS,サーティファイ,ビジネスオンライン,PC教室,初心者">
<meta name="description" content="<?=$title.$sep?>初心者からスキルアップ・資格取得まで安心のパソコン教室。<?=$room[$id][area]?>のパソコン市民講座 <?=$room[$id][name]?>教室。MOS資格・サーティファイ技能検定などエクセル・ワード・パワーポイントの資格取得やビジネススキルアップを教室インストラクターがしっかりとサポート！">

<link rel="stylesheet" type="text/css" href="/css/style.css?<?php echo filemtime($root.'/css/style.css'); ?>" media="screen and (min-width: 768px), print" />
<link rel="stylesheet" type="text/css" href="/css/style-sp.css?<?php echo filemtime($root.'/css/style-sp.css'); ?>" media="only screen and (max-width: 767px)" />
<link rel="stylesheet" type="text/css" href="/css/index_new.css?<?php echo filemtime($root.'/css/index_new.css'); ?>" media="screen and (min-width: 768px), print" />
<link rel="stylesheet" type="text/css" href="/css/index_new-sp.css?<?php echo filemtime($root.'/css/index_new-sp.css'); ?>" media="only screen and (max-width: 767px)" />

<link rel="stylesheet" type="text/css" href="/common/css/style.css?<?php echo filemtime($root.'/common/css/style.css'); ?>" media="screen and (min-width: 768px), print" />
<link rel="stylesheet" type="text/css" href="/common/css/style-sp.css?<?php echo filemtime($root.'/common/css/style-sp.css'); ?>" media="only screen and (max-width: 767px)" />


<link rel="stylesheet" type="text/css" href="/common/css/certify.css?<?php echo filemtime($root.'/common/css/certify.css'); ?>" media="screen and (min-width: 768px), print" />
<link rel="stylesheet" type="text/css" href="/common/css/certify-sp.css?<?php echo filemtime($root.'/common/css/certify-sp.css'); ?>" media="only screen and (max-width: 767px)" />



<link rel="shortcut icon" href="/favicon.ico">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/js/jquery-page-scroller.js"></script>
<script type="text/javascript" src="/common/js/jquery.maphilight.js" charset="utf-8"></script>
<script src="/common/js/function.js"></script>

<script src="//use.typekit.net/zec0ewo.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<script>
 $(function() {
  $(window).on('scroll', function() {
    if ($(this).scrollTop() > 0) {
      $('.header').addClass('fixed');
    } else {
      $('.header').removeClass('fixed');
    }
  });
});
</script>

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
</head>

<body<?=$body_class?>>
<header id="header" class="certify">
<div id="hd_wrap" class="clearfix tk-kozuka-gothic-pr6n">
<div id="hd_lft">
<<?=$logo_tag?> class="hd_txt"><?=$room[$id][area]?>で資格が取れるパソコン教室　パソコン市民講座 <?=$room[$id][name]?>教室</<?=$logo_tag?>>
    <div id="hd_logo"><a href="/<?=$room[$id][dir]?>/">
        <img class="pc-only" src="/images/img-hd_logo.png" width="211" height="34" alt="<?=$room[$id][area]?>の資格が取れるパソコン教室｜パソコン市民講座 <?=$room[$id][name]?>教室">
        <img class="sp-only" src="/common/img/common/logo1.png" width="156" height="68" alt="<?=$room[$id][area]?>の資格が取れるパソコン教室｜パソコン市民講座 <?=$room[$id][name]?>教室">
    </a></div>
<div id="hd_room"><?=$room[$id][name]?>教室</div>
</div>
<div id="hd_rgt">
<ul class="link">
<li><a href="/<?=$room[$id][dir]?>/qa.php">よくある質問</a></li>
</ul>
<div id="hd_tel"><?=$room[$id][phone]?></div>
    <div id="hd_reception">受付時間/<br>
    <a href="/<?=$room[$id][dir]?>/about.php">営業時間はこちら</a>
    </div>
    <div class="header-btn1 sp-only"><a href="/<?=$room[$id][dir]?>/contact.php"><img src="../images/btn-inq_taiken.png" width="127" height="33" alt="無料体験予約"></a></div>
    <div class="header-btn2 sp-only"><img src="/common/img/common/sp/header1_btn3.png" width="90" height="90" alt="メニュー"></div>
</div>
</div>

<nav>
<div id="nav_wrap" class="clearfix tk-kozuka-gothic-pr6n">
<ul class="main_nav clearfix">
<li><a href="/<?=$room[$id][dir]?>/about.php">教室情報</a></li>
<li><a href="/<?=$room[$id][dir]?>/course.php">講座紹介</a></li>
<li><a href="/<?=$room[$id][dir]?>/voice.php">受講生の声</a></li>
<li class="last"><a href="/<?=$room[$id][dir]?>/apply.php">お申込み方法</a></li>
</ul>
<ul class="inq_btn clearfix">
<li class="fl_left"><a href="/<?=$room[$id][dir]?>/contact.php"><img src="../images/btn-inq_taiken.png" width="127" height="33" alt="無料体験予約"></a></li>
<li class="fl_right"><a href="/<?=$room[$id][dir]?>/doc_contact.php"><img src="../images/btn-inq_shiryo.png" width="102" height="33" alt="資料請求"></a></li>
</ul>
</div>
</nav>
</header>

        <div id="contents" class="clearfix certify">

                <div id="kasou" class="clearfix">

                <div id="locus-area" class="clearfix c-wrap">
                  <dl class="locus">
                    <dt>現在のページ</dt>
                    <dd>
                      <ul>
                        <li><a href="/<?=$room[$id][dir]?>/"><?=$room[$id][area]?>のパソコン教室・講座TOP</a> ＞</li>
                        <li>サーティファイ ビジネス実践講座</li>
                      </ul>
                    </dd>
                  </dl><!-- /.locus -->
                </div><!-- /#locus-area -->

                <div class="block">
<div class="p-cert">


    <div class="p-cert1 c-wrap">

        <h2><img src="/certify/images/cert1_img1.jpg" width="1000" height="550" alt="【ビジネス実践講座】パソコンを「使える人」ではなく「使いこなせる人」へ" /></h2>

        <div class="p-cert1__block1">

            <p><img src="/certify/images/cert1_img2.png" width="771" height="269" alt="ビジネスの現場で書類作成の時間を半分に！　→　同じ時間でも書類の内容を吟味できる！　→　同僚に差がすく！就職先でも大活躍！" /></p>

        </div><!-- /.p-cert1__block1 -->

    </div><!-- /.p-cert1 -->



    <div class="p-cert2">

        <h3 class="cert_tit1">あなたに必要なパソコンスキルはどれ？</h3>

        <div class="c-wrap2">
        <div class="p-cert2__block1">

            <div class="p-cert2__block1--box1 word">
                <div class="box1">
                    <img src="/certify/images/cert2_img1.png" width="124" height="117" alt="Word" />
                    <h3>Word講座<small>（ワード）</small></h3>
                    <p>チラシ／ビジネス文書／はがき<br />連絡網／回覧板／年賀状</p>
                    <?php /*?><a href="##">Wordの講座を見る</a><?php */?>
                </div><!-- /.box1 -->
                <div class="box2">
                    <h4>こんなあなたに</h4>
                    <ul>
                        <li>いつもは手書きでチラシを作っている</li>
                        <li>タッチタイピングを習得し仕事効率をUPしたい</li>
                        <li>自治会の役員を任された</li>
                        <li>ビジネス書類を作ることが多い</li>
                        <li>自己流の書類から一歩先に進みたい</li>
                    </ul>
                </div><!-- /.box2 -->
            </div>

            <div class="p-cert2__block1--box1 excel">
                <div class="box1">
                    <img src="/certify/images/cert2_img2.png" width="124" height="117" alt="Excel" />
                    <h3>Excel講座<small>（エクセル）</small></h3>
                    <p>集計表／住所録／自動計算<br />マクロ／データ分析／グラフ作成</p>
                    <?php /*?><a href="##">Excelの講座を見る</a><?php */?>
                </div><!-- /.box1 -->
                <div class="box2">
                    <h4>こんなあなたに</h4>
                    <ul>
                        <li>手書きで帳簿をつけている</li>
                        <li>計算をミスして失敗したことがある</li>
                        <li>関数やマクロを使って作業効率をUPしたい</li>
                        <li>自己流で作業しているため作成に時間がかかる</li>
                        <li>同僚が作ったファイルを使って作業している</li>
                    </ul>
                </div><!-- /.box2 -->
            </div>

            <div class="p-cert2__block1--box1 pp">
                <div class="box1">
                    <img src="/certify/images/cert2_img3.png" width="124" height="117" alt="Word" />
                    <h3>PowerPoint講座<small>（パワーポイント）</small></h3>
                    <p>企画書／提案書<br />プレゼン資料／スライドショー</p>
                    <?php /*?><a href="##">PowerPointの講座を見る</a><?php */?>
                </div><!-- /.box1 -->
                <div class="box2">
                    <h4>こんなあなたに</h4>
                    <ul>
                        <li>社内プレゼンを任された</li>
                        <li>資料を作成するために毎回残業で大変</li>
                        <li>見栄えのよい企画書を作成したい</li>
                        <li>他社とは差をつけたプレゼンを行いたい</li>
                        <li>知人にフォトムービー作成を頼まれた</li>
                    </ul>
                </div><!-- /.box2 -->
            </div>

        </div><!-- /.p-cert2__block1 -->
        </div>


        <div class="p-cert2__block2">
        <div class="c-wrap2">

            <h3><span>あなたにオススメの講座はコレ！</span></h3>

            <div class="p-cert2__block2--box1">

                <div class="box1">
                    <h4>効率の良いビジネス書類で<br />同僚に差をつけよう！</h4>
                    <div class="img1"><img src="/certify/images/cert2_img4.png" width="51" height="78" alt="Word" /></div>
                    <div class="txt1">
                        <h4>ビジネスワード<br />実践講座</h4>
                        <p>Word文書処理技能認定試験対応</p>
                        <ul>
                            <li>基本編 3級</li>
                            <li>応用編 2級</li>
                        </ul>
                    </div>
                </div><!-- /.box1 -->

                <div class="box1">
                    <h4>関数やマクロを使って<br />作業効率大幅アップ！</h4>
                    <div class="img1"><img src="/certify/images/cert2_img5.png" width="51" height="78" alt="Excel" /></div>
                    <div class="txt1">
                        <h4>ビジネスエクセル<br />実践講座</h4>
                        <p>Excel表計算処理技能認定試験対応</p>
                        <ul>
                            <li>基本編 3級</li>
                            <li>応用編 2級</li>
                        </ul>
                    </div>
                </div><!-- /.box1 -->

                <div class="box1">
                    <h4>分かりやすいプレゼン資料で<br />受注率アップ！</h4>
                    <div class="img1"><img src="/certify/images/cert2_img6.png" width="51" height="78" alt="Excel" /></div>
                    <div class="txt1">
                        <h4>ビジネスパワーポイント<br />実践講座</h4>
                        <p>PowerPointプレゼンテーション技能認定試験</p>
                        <ul>
                            <li>初級</li>
                            <li>上級</li>
                        </ul>
                    </div>
                </div><!-- /.box1 -->

            </div>

        </div>
        </div><!-- /.p-cert2__block2 -->

    </div><!-- /.p-cert2 -->



    <div class="cert_btn1 u-center">
        <a href="/<?=$room[$id][dir]?>/contact.php"><img src="/certify/images/btn1.png" width="689" height="70" alt="教室へのお問合わせはコチラ" /></a>
    </div>



    <div class="p-mos3">

        <h3 class="cert_tit1">パソコン市民講座と他校の違いは？</h3>

        <div class="cert_txt1">
            <p>ビジネス実践講座では忙しいあなたにピッタリ。<br />
            最短コースでのご提案をします。</p>
        </div>

        <div class="p-mos3__block1 c-wrap2">

            <table>
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th class="pc4353">パソコン市民講座</th>
                        <th>A社</th>
                        <th>B社</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>入会金(税別)</th>
                        <td class="pc4353">6,000円</td>
                        <td>10,000円</td>
                        <td>9,450～18,900円<span>(受講する講座によって変動)</span></td>
                    </tr>
                    <tr>
                        <th>一時間あたり(税別)</th>
                        <td class="pc4353">1,500円</td>
                        <td>1,500円</td>
                        <td>4,000円</td>
                    </tr>
                    <tr>
                        <th>受講期間目安</th>
                        <td class="pc4353">2～3ヶ月</td>
                        <td>2～3ヶ月</td>
                        <td>2ヶ月</td>
                    </tr>
                    <tr>
                        <th>電話トラブルサポート</th>
                        <td class="pc4353">
                            <p>10:00～20:00<br />
                            年中無休</p>
                        </td>
                        <td><img src="/certify/images/cert3_icon2.png" width="34" height="35" alt="×" /></td>
                        <td><img src="/certify/images/cert3_icon2.png" width="34" height="35" alt="×" /></td>
                    </tr>
                    <tr>
                        <th>Webサービス</th>
                        <td class="pc4353">
                            <p>自宅でも映像学習できる</p>
                        </td>
                        <td><img src="/certify/images/cert3_icon2.png" width="34" height="35" alt="×" /></td>
                        <td><img src="/certify/images/cert3_icon2.png" width="34" height="35" alt="×" /></td>
                    </tr>
                </tbody>
            </table>

            <p>※時間数および受講期間の目安は個人差がございます。<br />
			※Excel、Word、PowerPointいずれか1つの受講料金です。<br />
            ※テキスト代、月会費2,000円（税別）、資格試験料が別途かかります。</p>

        </div><!-- /.p-mos3__block1 -->


        <div class="cert_btn1 u-center">
            <a href="/<?=$room[$id][dir]?>/contact.php"><img src="/certify/images/btn1.png" width="689" height="70" alt="教室へのお問合わせはコチラ" /></a>
        </div>

    </div><!-- /.p-mos3 -->



    <div class="p-cert4">

        <h3 class="cert_tit1">講座を実際に体験してみてどうでしたか？</h3>

        <div class="p-cert4__block1">
        <div class="c-wrap2">

            <div class="p-cert4__block1--box1">

                <div class="box1">
                    <h4>後輩に教えれる程に！</h4>
                    <div class="img1"><img src="/certify/images/cert4_img1.jpg" width="270" height="162" alt="" /></div>
                    <div class="txt1">
                        <p>会社でofficeを使うようになったけど効率的に作業ができず、自宅学習よりも教室できっちりと勉強したい。さらに受講曜日を自由に選べることが決め手となりました。今では、会社で後輩に教えることが出来る程です。（尾形 様）</p>
                    </div>
                </div><!-- /.box1 -->

                <div class="box1">
                    <h4>基本スキルを習得したい！</h4>
                    <div class="img1"><img src="/certify/images/cert4_img2.jpg" width="270" height="162" alt="" /></div>
                    <div class="txt1">
                        <p>事務の仕事をはじめるにあたって、受講しました。他と比べて料金体系が明確で、自宅での復習もできます。今はビジネス講座で身に付けたスキルでWord・Excel・PowerPointと全ての資格取得を目標に頑張っています。（三瓶 様）</p>
                    </div>
                </div><!-- /.box1 -->

                <div class="box1">
                    <h4>パソコンは苦手だったけど</h4>
                    <div class="img1"><img src="/certify/images/cert4_img3.jpg" width="270" height="162" alt="" /></div>
                    <div class="txt1">
                        <p>昔からデジタルに対して苦手意識を持っていました。とにかくパソコンの画面が苦痛でした。そんな私が12月にExcel試験に合格して、今ではWord試験にチャレンジしようとしています。将来はスキルを活かして起業します。（中嶋 様）</p>
                    </div>
                </div><!-- /.box1 -->

            </div>


            <div class="cert_btn1 u-center">
                <a href="/<?=$room[$id][dir]?>/contact.php"><img src="/certify/images/btn1.png" width="689" height="70" alt="教室へのお問合わせはコチラ" /></a>
            </div>

        </div>
        </div><!-- /.p-mos4__block1 -->

    </div><!-- /.p-mos4 -->



    <div class="p-cert5">

        <h3 class="cert_tit1">人事担当者のホンネ。</h3>

        <div class="cert_txt1">
            <p>大手中小企業人事部の研修担当者50人に直撃！<br />
            PCスキルはどれほど重視されているのか徹底調査しました。</p>
        </div>

        <div class="p-cert5__block1">
        <div class="c-wrap2">

            <div class="box1">
                <h4><img src="/certify/images/cert5_tit1.png" width="693" height="116" alt="Q1 高度なOfficeスキルを持った人材が欲しいですか？ （例）Excelスキル" /></h4>
                <p><img src="/certify/images/cert5_img1.png" width="865" height="234" alt="5割以上の企業が「はい」と回答。" /></p>
            </div><!-- /.box1 -->

            <div class="box1">
                <h4><img src="/certify/images/cert5_tit2.png" width="686" height="116" alt="Q2 社内でExcelなどのOfficeスキルを標準化したいですか？" /></h4>
                <p><img src="/certify/images/cert5_img2.png" width="865" height="234" alt="5割以上の企業が「はい」と回答。" /></p>
            </div>

            <div class="box2">
                <p>アンケートの結果、5割以上の企業が「<em>早期育成</em>」や<br />
                「<em>人材の質の向上</em>」のために<strong>必須なスキルの明確化（標準化）</strong>を求めている。</p>
            </div><!-- /.box2 -->

        </div>
        </div><!-- /.p-cert5__block1 -->


        <div class="p-cert5__block2 c-wrap2">

            <h3><span>だから多くのビジネスパーソンは<br />
            パソコンスキルを身に着けたい！</span></h3>

            <div class="img1"><img src="/certify/images/cert5_img3.jpg" width="434" height="330" alt="アンケート「今後身に着けたいビジネススキル」" /></div>
            <div class="txt1">
                <h4>20～49歳の男女<br />
                ビジネスパーソン1,000名に質問</h4>
                <p>アンケート<br />
                「今後身に着けたいビジネススキル」</p>
                <h5>第3位<small>（43.1%）</small></h5>
            </div>

        </div><!-- /.p-cert5__block2 -->


        <div class="p-cert2__block2">
        <div class="c-wrap2">

            <h3><span>あなたにオススメの講座はコレ！</span></h3>

            <div class="p-cert2__block2--box1">

                <div class="box1">
                    <h4>効率の良いビジネス書類で<br />同僚に差をつけよう！</h4>
                    <div class="img1"><img src="/certify/images/cert2_img4.png" width="51" height="78" alt="Word" /></div>
                    <div class="txt1">
                        <h4>ビジネスワード<br />実践講座</h4>
                        <p>Word文書処理技能認定試験対応</p>
                        <ul>
                            <li>基本編 3級</li>
                            <li>応用編 2級</li>
                        </ul>
                    </div>
                </div><!-- /.box1 -->

                <div class="box1">
                    <h4>関数やマクロを使って<br />作業効率大幅アップ！</h4>
                    <div class="img1"><img src="/certify/images/cert2_img5.png" width="51" height="78" alt="Excel" /></div>
                    <div class="txt1">
                        <h4>ビジネスエクセル<br />実践講座</h4>
                        <p>Excel表計算処理技能認定試験対応</p>
                        <ul>
                            <li>基本編 3級</li>
                            <li>応用編 2級</li>
                        </ul>
                    </div>
                </div><!-- /.box1 -->

                <div class="box1">
                    <h4>分かりやすいプレゼン資料で<br />受注率アップ！</h4>
                    <div class="img1"><img src="/certify/images/cert2_img6.png" width="51" height="78" alt="Excel" /></div>
                    <div class="txt1">
                        <h4>ビジネスパワーポイント<br />実践講座</h4>
                        <p>PowerPointプレゼンテーション技能認定試験</p>
                        <ul>
                            <li>初級</li>
                            <li>上級</li>
                        </ul>
                    </div>
                </div><!-- /.box1 -->

            </div>

        </div>
        </div><!-- /.p-cert2__block2 -->

    </div><!-- /.p-cert5 -->



    <div class="cert_btn1 u-center">
        <a href="/<?=$room[$id][dir]?>/contact.php"><img src="/certify/images/btn1.png" width="689" height="70" alt="教室へのお問合わせはコチラ" /></a>
    </div>



</div><!-- /.p-cert -->
				</div><!-- /#.block -->
				</div><!-- /#kasou -->
		</div><!-- #contents -->

<footer>
<div id="ft_wrap" class="clearfix">
<div id="ft_lft">
<dl class="ft_course">
<dt>コース一覧</dt>
<dd><a href="/<?=$room[$id][dir]?>/course.php">講座案内</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/certify.php">ビジネス実践講座</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/mos.php">MOS資格対策講座</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/win10.php">Windows10講座</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/course.php#subject3">パソコン趣味講座</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/tablet.php">iPad講座</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/iphone.php">iPhone講座</a></dd>
</dl>
<dl class="ft_about">
<dt>教室概要</dt>
<dd><a href="/<?=$room[$id][dir]?>/about.php">教室紹介</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/instructor.php">インストラクター紹介</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/voice.php">受講生の声</a></dd>
<!--<dd><a href="/<?=$room[$id][dir]?>/contact.php">ワンポイント動画</a></dd>-->
<dd><a href="/premiere.php">プレミア倶楽部</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/qa.php">よくあるご質問</a></dd>
<dd><a href="/<?=$room[$id][dir]?>/apply.php">お申込み方法</a></dd>
<!--<dd><a href="/<?=$room[$id][dir]?>/contact.php">キャンペーン</a></dd>-->
</dl>
<dl class="ft_room_search">
<dt>教室検索</dt>
<dd><a href="/school/tohoku.php">東北</a></dd>
<dd><a href="/school/kanto.php">関東</a></dd>
<dd><a href="/school/chubu.php">中部</a></dd>
<dd><a href="/school/kansai.php">関西</a></dd>
<dd><a href="/school/seibu.php">中国・四国・九州</a></dd>
</dl>
<dl class="ft_relation">
<dt>関連サイト</dt>
<dd><a href="http://www.star-programming-school.com/" target="_blank"><img src="../images/bnr-sps_ft.jpg" width="185" alt="2020年 プログラミング教育必修化！STAR Programming SCHOOL"></a></dd>
<dd><a href="https://www.cheery.co.jp/" target="_blank"><img src="../images/bnr-cheery_ft.jpg" width="185" alt="株式会社チアリー"></a></dd>
<dd><a href="http://www.nsg.gr.jp/" target="_blank"><img src="../images/bnr-nsg_ft.jpg" width="185" alt="NSGグループ"></a></dd>
</dl>
</div>
<div id="ft_rgt" class="tk-kozuka-gothic-pr6n">
    <div id="ft_logo"><a href="/<?=$room[$id][dir]?>/"><img src="../images/img-ft_logo.png" width="168" height="85" alt="<?=$room[$id][area]?>の資格が取れるパソコン教室｜パソコン市民講座 <?=$room[$id][name]?>教室"></a></div>
<div id="ft_room"><?=$room[$id][name]?>教室</div>
<ul class="inq_btn clearfix">
<li class="fl_left"><a href="/<?=$room[$id][dir]?>/contact.php">
    <img class="pc-only" src="../images/btn-inq_taiken.png" width="127" height="33" alt="無料体験予約">
    <img class="sp-only" src="../images/btn-inq_taiken_l.png" width="249" height="92" alt="無料体験予約">
</a></li>
<li class="fl_right"><a href="/<?=$room[$id][dir]?>/doc_contact.php">
    <img class="pc-only" src="../images/btn-inq_shiryo.png" width="102" height="33" alt="資料請求">
    <img class="sp-only" src="../images/btn-inq_shiryo_l.png" width="240" height="48" alt="資料請求">
</a></li>
</ul>
<div id="ft_tel_box">
<div id="ft_tel"><?=$room[$id][phone]?></div>
    <div id="ft_reception">受付時間 / 
    <a href="/<?=$room[$id][dir]?>/about.php">営業時間はこちら</a>
    </div>
</div>
</div>
</div>
<div id="ft_top_link">
<div id="ft_top_link_wrap">
<p><a href="https://www.pc4353.net/" target="_blank">初心者からスキルアップ・資格取得まで安心のパソコン教室 [パソコン市民講座]</a></p>
</div>
</div>
<div id="ft_btm">
<div id="ft_btm_wrap" class="clearfix">
<ul id="ft_link">
<li><a href="/about.php" target="_blank">会社概要</a></li>
<li><a href="/<?=$room[$id][dir]?>/recruit.php">採用情報</a></li>
<li><a href="/privacy.php" target="_blank">プライバシーポリシー</a></li>
<!--<li><a href="/<?=$room[$id][dir]?>/sitemap.php">サイトマップ</a></li>-->
</ul>
<address>COPYRIGHT <?=date("Y")?> Cheery, All Rights Reserved.</address>
</div>
</div>
</footer>

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