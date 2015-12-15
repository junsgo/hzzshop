<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_weixin_config`;");
E_C("CREATE TABLE `hhs_weixin_config` (
  `id` int(1) NOT NULL,
  `token` varchar(100) NOT NULL,
  `appid` char(18) NOT NULL,
  `appsecret` char(32) NOT NULL,
  `access_token` char(150) NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `hhs_weixin_config` values('1','haohaios','111','111','ntGMAVoQ3CLtHC7yGpsBnuoEhmpBvo17hYebkc0CB_ihzRhqtniSbl20zj1kF5WzJZms1U98LPLyDXOYJuRGUCfUYUig2-SztbfmdIIrzEs','1439956898');");

require("../../inc/footer.php");
?>