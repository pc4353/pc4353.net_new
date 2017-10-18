<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header.php");
?>
					<div id="about4" class="block mB10">
						<h2 class="mB20"><img src="/images/about_36.png" width="632" height="51" alt="教室情報"/></h2>
						<div class="section-lv2">
							<div class="shop-area clearfix">
								<div class="shop-box1-l">
                                    <dl> 
                                      <dt>教室名</dt> 
                                      <dd><?=$room[$id][name]?>教室</dd> 
                                    </dl> 
                                    <dl> 
                                      <dt>住所</dt> 
                                      <dd><?=$room[$id][ad1]?><br/><?=$room[$id][ad2]?><br /><?=$room[$id][ad3]?></dd> 
                                    </dl>
                                    <dl> 
                                      <dt>電話</dt> 
                                      <dd><?=$room[$id][phone]?></dd>
                                    </dl> 
                                    <dl> 
                                      <dt>開講時間</dt> 
                                      <dd><?=$room[$id][open]?></dd> 
                                    </dl>
                                    <dl> 
                                      <dt>アクセス</dt> 
                                      <dd><?=$room[$id][access]?></dd> 
                                    </dl>
									</div><!-- .shop-box1-l -->
									<div class="shop-box1-r"> 
									<div id="gmap" style="margin-bottom: 5px;width:270px; height:240px;"></div> 
									<p class="ali_right"><a href="http://maps.google.co.jp/maps?q=%E3%83%91%E3%82%BD%E3%82%B3%E3%83%B3%E5%B8%82%E6%B0%91%E8%AC%9B%E5%BA%A7<?=urlencode($room[$id][name])?>%E6%95%99%E5%AE%A4&ie=UTF-8&oe=utf-8" target="_blank">大きな地図でみる</a></p> 
									</div><!-- .shop-box1-r -->
								</div><!-- .shop-area -->
						</div><!-- /.section-lv2 -->
					</div><!-- /.block -->
				</div><!-- /.block -->
<?php
include_once("../lib/about.php");
include_once("../lib/footer.php");
?>