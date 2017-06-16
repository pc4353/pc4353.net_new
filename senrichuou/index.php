<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header-fc.php");
?>
					<a class="banner" href="/<?=$room[$id][dir]?>/contact.php">
					<div id="banner" class="over1">
					<p class="text"><?=$room[$id][name]?>教室<br /><span class="font16">TEL：<?=$room[$id][phone]?></span></p>
					</div></a>

				<p class="mB10 mL5">【12月20日（月）まで】HP限定のキャンペーンですので、必ず「ホームページを見た」とお伝えください。</p>
				-->
				
				<?php
				if ($id !== "6117001" && $id !== "1076001" && $id !== "6114001" && $id !== "1001102" && $id !== "1001098") {
				?>

				<?php
				}
				?>
								
				<div id="search-course" class="block">
					<h2 class="mB15 clearfix"><img src="/images/title_31.png" width="650" height="52" alt="あなたの目的に合わせた学習スタイルのご紹介" /><span><a href="/<?=$room[$id][dir]?>/course.php">詳しい内容を見る</a></span></h2>
					<div class="section-lv2 clearfix mB30">
						<div class="box-a">
							<h3><img src="/images/purpose_52.png" width="207" height="30" alt="仕事で役立てたい" /></h3>
							<p><img src="/images/illust_73.png" width="207" height="72" alt="イラスト（仕事で役立てたい）" /></p>
							<ul class="course2">
								<li class="clearfix"><span class="green">●</span><span class="box-b">エクセルで素早く計算</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">ワードで書類をつくりたい</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">パワーポイントでワンランク上のプレゼンテーション</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">タッチタイピングを身につけたい</span></li>
							</ul>
							<div class="pa10 pa102">
								<div class="bt bt2">
									<a href="/<?=$room[$id][dir]?>/course.php#subject4">詳しくはこちら</a>
								</div>
							</div>
							
							<h3><img src="/images/purpose_39.png" width="207" height="30" alt="はじめてのパソコン" /></h3>
							<p><img src="/images/illust_51.png" width="207" height="72" alt="イラスト（はじめてパソコン）" /></p>
							<ul class="course1">
								<li class="clearfix"><span class="green">●</span><span class="box-b">初めてパソコンを買った</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">家のパソコンを有効活用したい</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">マウス操作やキーボード入力などの基礎を身につけたい</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">パソコンでどんなことができるのか知りたい</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">電子メールでやりとりしたい</span></li>
							</ul>
							<div class="pa10 pa101 mB10">
							<div class="bt bt1">
								<a href="/<?=$room[$id][dir]?>/course.php#subject1">詳しくはこちら</a>
							</div>
							</div>
						</div><!-- /.box-a -->
						
						<div class="box-b">
							<h3><img src="/images/purpose_53.png" width="207" height="30" alt="資格を取得したい" /></h3>
							<p><img src="/images/illust_74.png" width="207" height="72" alt="イラスト（資格を習得したい）" /></p>
							<ul class="course4">
								<li class="clearfix"><span class="green">●</span><span class="box-b">サーティファイ ビジネス実践講座</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">MOS（マイクロソフトオフィススペシャリスト）資格取得講座</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">パソコン検定4級3級の対策コース</span></li>
							</ul>
							<div class="pa10 pa104">
							<div class="bt bt4">
								<a href="/<?=$room[$id][dir]?>/course.php#subject5">詳しくはこちら</a>
							</div>
							</div>
							
							<h3><img src="/images/purpose_41.png" width="207" height="30" alt="インターネットをしたい" /></h3>
							<p><img src="/images/illust_52.png" width="207" height="72" alt="イラスト（インターネットをしたい）" /></p>
							<ul class="course3">
								<li class="clearfix"><span class="green">●</span><span class="box-b">ネットショッピングをしたい</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">ネットで宿泊先の予約をしたい</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">ブログをやってみたい</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">インターネットのルールなどを知りたい</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">便利な使い方やいろんなサイトを知りたい</span></li>
							</ul>
							<div class="pa10 pa103 mB10">
							<div class="bt bt3">
								<a href="/<?=$room[$id][dir]?>/course.php#subject2">詳しくはこちら</a>
							</div>
							</div>
									  
						</div><!-- /.box-b -->
						<div class="box-c clearfix">
							<h3><img src="/images/purpose_43.png" width="207" height="30" alt="趣味で楽しみたい" /></h3>
							<p><img src="/images/illust_53.png" width="207" height="72" alt="イラスト（趣味で楽しみたい）" /></p>
							<ul class="course5">
								<li class="clearfix"><span class="green">●</span><span class="box-b">デジカメ写真をパソコンで管理したい</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">切り取り、補正、文字入れ…写真をパソコンで編集したい</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">下調べ、しおり、予約…パソコンを旅行に活かしたい</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">パソコンで年賀状をつくりたい</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">パソコンで水彩画！？</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">自分好みのCD作り</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">パソコンで世界にひとつだけのオリジナル作品をつくりたい</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">パソコンでゲームをしたい</span></li>
								<li class="clearfix"><span class="green">●</span><span class="box-b">私もブログをはじめたい</span></li>
							</ul>
							<div class="pa10 pa105 mB20">
								<div class="bt bt5" >
									<a href="/<?=$room[$id][dir]?>/course.php#subject3">詳しくはこちら</a>
								</div>
							</div>
						</div><!-- /.box-c -->

					</div><!-- /.section-lv2 -->
				</div><!-- /#search-course .block -->
				
				<div id="point" class="block">
					<h2 class="mB15"><img src="/images/title_38.png" width="650" height="48" alt="パソコン市民講座が選ばれる理由" /></h2>
					<div class="section-lv2 mB20">
						<div class="moz4">
							<dl class="clearfix moz4">
								<dt class="box-a"><img src="/images/point_97.png" width="100" height="42" alt="point1" /></dt>
								<dd class="box-b"><a href="/<?=$room[$id][dir]?>/about.php#point1">お一人お一人のペースで学べる「個別学習」</a></dd>
							</dl>
							<dl class="clearfix moz4">
								<dt class="box-a"><img src="/images/point_101.png" width="100" height="43" alt="point2" /></dt>
								<dd class="box-b"><a href="/<?=$room[$id][dir]?>/about.php#point2">曜日と時間が自由に選べる「受講予約システム」</a></dd>
							</dl>
							<dl class="clearfix moz4">
								<dt class="box-a"><img src="/images/point_103.png" width="100" height="42" alt="point3" /></dt>
								<dd class="box-b"><a href="/<?=$room[$id][dir]?>/about.php#point3">学びやすく続けやすい安心の「月謝制」（1時間1500円）</a></dd>
							</dl>
							<dl class="clearfix moz4">
								<dt class="box-a"><img src="/images/point_106.png" width="100" height="43" alt="point4" /></dt>
								<dd class="box-b"><a href="/<?=$room[$id][dir]?>/about.php#point4">自宅でも復習ができる「映像配信システム」</a></dd>
							</dl>
							<dl class="clearfix moz4">
								<dt class="box-a"><img src="/images/point_109.png" width="100" height="43" alt="point5" /></dt>
								<dd class="box-b"><a href="/<?=$room[$id][dir]?>/about.php#point5">全国150教室、15年間で54万人の「指導実績」</a></dd>
							</dl>
						</div>
                        <p class="align-r mR10"><a href="/<?=$room[$id][dir]?>/about.php#about1">詳しい内容を見る</a></p>
					</div><!-- /.section-lv2 -->
				</div><!-- /#.block -->

<?php
include_once("../lib/footer-fc.php");
?>
