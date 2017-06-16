<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
?>
					<h1><img src="/images/voice_title_03.png" width="632" height="52" alt="受講生の声" /></h1>
					<p><img src="/images/title_05.png" width="632" height="93" alt="今日も生徒さんの「できた！」喜びの声が続々と！次はあなたが「パソコンを楽しむ」番ですよ！" /></p>


<?php
$voice_id = 0;
foreach( $ary as $key => $value  ) {
if( $value[00]  ) {
	$img = "/" . $room[$id][dir] . "/images/" . $value[00] . ".jpg";
} else {
	$img = "/images/nopic.png";
}
$voice_id++;
?>
                    <div class="i-voice clearfix mB20">
                        <div id="voice<?=$voice_id?>" class="section-lv2 moz2 clearfix">
                            <div class="box-a">
                                <img class="mB10" src="<?=$img?>" width="214" height="221" alt="受講生" />
                                <div><?=$value[01]?></div>
                            </div><!-- /.box-a -->
                            <div class="box-b">
                                <h2><?=$value[02]?></h2>
                                <dl>
                                    <dt>受講のきっかけ</dt>
                                    <dd><?=$value[03]?></dd>
                                </dl>
                                <dl>
                                    <dt>現在の目標</dt>
                                    <dd><?=$value[04]?></dd>
                                </dl>
                                <p><?=$value[05]?></p>
                            </div><!-- /.box-b -->
                        </div><!-- /.section-lv2 -->
                        <div class="back-top mR15"><a class="moz2" href="#header">ページトップへ</a></div>
                    </div><!-- /.i-voice -->
<?php
}
?>
					
					<!-- pagenation
					<div id="pager" class="clearfix mB30">
						<div class="box-a"><a href="#">前のページ</a></div>
						<div class="box-b"><a href="#">次のページ</a></div>
					</div>
					-->
				</div><!-- /.block -->
				</div>
<?php
include_once("../lib/footer.php");
?>