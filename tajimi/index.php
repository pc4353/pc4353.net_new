<?php
require_once("config.php");
require_once("../lib/config.php");
include_once("../lib/header-fc.php");
?>
					<a class="banner" href="/<?=$room[$id][dir]?>/contact.php">
					<div id="banner" class="over1">
					<p class="text"><?=$room[$id][name]?>教室<br /><span class="font16">TEL：<?=$room[$id][phone]?></span></p>
					</div></a>
<?php
include_once("../lib/index-fc.php");
include_once("../lib/footer-fc.php");
?>
