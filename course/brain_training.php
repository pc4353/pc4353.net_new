<?php

$title = "脳トレおとなプログラミング講座";
$description = "パソコン市民講座の脳トレおとなプログラミング講座。";
$keywords = "脳トレ,プログラミング,パソコン,スクラッチ,scratch,";
$pageId = 'course';
include_once('../lib/home/config.php');
include_once('../lib/home/header.php');

?>

<link rel="stylesheet" type="text/css" href="/common/css/brain_tr.css?<?php echo filemtime($root.'/common/css/brain_tr.css'); ?>" media="screen and (min-width: 768px), print" />
<link rel="stylesheet" type="text/css" href="/common/css/brain_tr-sp.css?<?php echo filemtime($root.'/common/css/brain_tr-sp.css'); ?>" media="only screen and (max-width: 767px)" />


<div class="l-breadcrumb">
	<ul class="c-wrap">
		<li><a href="/">パソコン教室なら「市民講座」</a></li>
		<li><a href="/course/">受講コース</a></li>
		<li><?=$title?></li>
	</ul>
</div><!-- /.l-breadcrumb -->

<div class="l-pagetitle">
<div class="c-wrap">
	<h1><?=$title?></h1>
</div>
</div><!-- /.l-pagetitle -->

<div id="contents">

<div class="u-center"><img src="images/brain_tr/img-main.jpg" width="950" height="230" alt="脳トレおとなプログラミング講座！鎌田先生とスクラッチキャットが解説！" /></div>

	  <div id="brain_tr">

	  	<div class="cnt">
			<div class="lead_area">
				<p class="ttl">2017年6月<br class="sp-only"> 「脳トレおとなプログラミング講座」 <br class="sp-only">新登場！</p>
				<p class="lead">パソコンでプログラミングしながら「脳をトレーニング」する、これまでにない講座が新登場。<br />パソコン市民講座の「鎌田先生」とプログラミングアプリのキャラクター「スクラッチキャット」が、<br />リリースに先駆けてちょっとだけ内容をご紹介しちゃいます！</p>
			</div>
		  
	  	<div id="block_1" class="block">
		  <h3>最近プログラミングってよく聞くよね？</h3>

			    <div class="talk">
                    <dl class="voice_list kamata01">
                        <dd class="parent1"><p class="child1">プログラミングって最近話題だけど、実際にどういったものか知っているかな？</p></dd>
                    </dl>
                    <dl class="voice_list cat01">
                        <dd class="parent2"><p class="child2">最近ニュースでよく見るけど、専門の知識を持った人しかできないむずかしいものだよね？</p></dd>
                    </dl>
                    <dl class="voice_list kamata02">
                        <dd class="parent1"><p class="child1">専門的な知識がなくても大丈夫！子供の教育に必須化されるほど注目されていて、今プログラミングを始める人が増えてるんだ！市民講座でも新しく講座をスタートするんだよ。</p></dd>
                    </dl>
                    <dl class="voice_list cat02">
                        <dd class="parent2"><p class="child2">う～ん… やっぱりむずかしそうに感じるなぁ…</p></dd>
                    </dl>
                    <dl class="voice_list kamata03">
                        <dd class="parent1"><p class="child1">大丈夫！パズル感覚で組むことができるから、全然むずかしくないよ。どんな講座なのかビデオで説明するね。</p></dd>
                    </dl>
                </div>
		</div><!-- /.block -->
		  
	  	<div id="block_2" class="block">
		  <h3>市民講座のプログラミングって？</h3>
			<div class="inc_area">
			<iframe width="100%" height="315" src="https://www.youtube.com/embed/i_pfqbZmjtY?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>

			    <div class="talk">
                    <dl class="voice_list cat03">
                        <dd class="parent2"><p class="child2">へえ～。自分でいろいろ作れたりするのがなんだかおもしろそうだね！</p></dd>
                    </dl>
                    <dl class="voice_list kamata04">
                        <dd class="parent1"><p class="child1">自分で試行錯誤を繰り返しながらつくるから、頭の体操になるんだよ。いわゆる「脳トレ」にぴったりな講座なんだ！</p></dd>
                    </dl>
                </div>
		</div><!-- /.block -->
		  
	  	<div id="block_3" class="block">
		  <h3>なんでおとなに「脳トレ」が必要なの？</h3>
			<p class="lead">脳の機能は加齢とともに低下します。これは体力と筋力が年々低下していくのと同じです。運動で体力や筋力の低下を防ぐように、プログラミングで「脳のトレーニング」をしましょう！</p>

			    <div class="talk">
                    <dl class="voice_list cat04">
                        <dd class="parent2"><p class="child2">だから「脳トレ」なんだね～。</p></dd>
                    </dl>
                    <dl class="voice_list kamata05">
                        <dd class="parent1"><p class="child1">そう！そしてその「脳トレ」にもプログラミングは効果的なんだよ。下に実際に受講生の方が作ったゲームもおいているからネコさんも挑戦してみてね。</p></dd>
                    </dl>
                </div>
		</div><!-- /.block -->
		  
	  	<div id="block_4" class="block pc-only">
		  <h3>実際に作ったゲームをやってみよう！</h3>
			<dl class="lead">
				<dt>遊び方（※パソコンでしか遊べません）</dt>
				<dd>「緑色の旗」ボタンを押してゲームスタート！「親ネズミ」をキーボードの矢印キー（↑ ↓ ← →）を使って操作し、ネコにあたらないように「子ネズミ」の所まで行きましょう。</dd>
			</dl>
			<div class="inc_area">
		  	<iframe allowtransparency="true" width="560" height="464" src="//scratch.mit.edu/projects/embed/156969870/?autostart=false" frameborder="0" allowfullscreen></iframe>
			</div>

			    <div class="talk">
                    <dl class="voice_list cat05">
                        <dd class="parent2"><p class="child2">ぼ、ぼくがゲームになって動いてる…！！</p></dd>
                    </dl>
                    <dl class="voice_list kamata06">
                        <dd class="parent1"><p class="child1">Scratchというアプリを使って作ったんだよ。プログラミングでできることは無限にあるから上のゲームはその一例だけど、こんなのが作れたら楽しいよね！</p></dd>
                    </dl>
                </div>
		</div><!-- /.block -->
		  
	  	<div id="block_5" class="block">
		  <h3>さあ、プログラミングを始めましょう！</h3>
			<ul>
				<li class="no1">むずかしいコードや構文はいりません！</li>
				<li class="no2">パズル感覚でかんたんに楽しめる！</li>
				<li class="no3">自由な発想で脳のトレーニング！</li>
			</ul>

			    <div class="talk">
                    <dl class="voice_list kamata07">
                        <dd class="parent1"><p class="child1">市民講座のプログラミングは、楽しみながら受けることができるから、まずは始めてみよう！</p></dd>
                    </dl>
                    <dl class="voice_list cat06">
                        <dd class="parent2"><p class="child2">ボクにもできそう！ 先生、よろしくお願いします！！</p></dd>
                    </dl>
                </div>
			<p class="start">脳トレおとなプログラミング講座は<br class="sp-only">2017年6月スタート！</p>

	<div class="brain_tr_btn1 u-center">
		<a href="/school/"><img src="/mos/images/btn1.png" width="693" height="75" alt="教室へのお問合わせはコチラ" /></a>
	</div>
			<p class="sps">小学生には姉妹教室スタープログラミングスクールもオススメ！</p>
			<div class="bnr_sps"><a href="http://www.star-programming-school.com/" target="_blank"><img src="images/brain_tr/bnr-sps_740.png" width="740" height="90" alt="2020年 プログラミング教育必修化！STAR Programming SCHOOL" /></a></div>
		</div><!-- /.block -->
		  
	  	<div id="block_6" class="block">
		  <h3>登場人物</h3>
			<dl class="prof_kamata">
				<dt>鎌田（かまた）先生</dt>
				<dd>パソコン市民講座の名物講師。小学生のころからパソコンを触り始め、おとなになってからは新しい機器が出るたびに買い集めるほどの大のデジタルガジェット好き。週一で映画館へ行くほど映画鑑賞も好き。</dd>
			</dl>
			<dl class="prof_cat">
				<dt>スクラッチキャット</dt>
				<dd>プログラミングアプリ「Scratch（スクラッチ）」に登場するネコのキャラクター。ロゴマークやアプリのアイコンにも使われている。Scratchではこのキャラクターを使ってプログラミングすることもできる。</dd>
			</dl>
		  <p class="lead_s">Scratchは MITメディア・ラボのLifelong Kindergartenグループによって開発されました。くわしくは <a href="http://scratch.mit.edu" target="_blank">http://scratch.mit.edu</a> をご参照ください。</p>
		</div><!-- /.block -->
		
		</div><!-- /.cnt -->

		</div>

</div>
<?php

include_once('../lib/home/footer.php');

?>