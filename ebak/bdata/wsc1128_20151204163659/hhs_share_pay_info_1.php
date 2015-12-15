<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_share_pay_info`;");
E_C("CREATE TABLE `hhs_share_pay_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT '',
  `message` varchar(1000) DEFAULT '',
  `money` decimal(10,2) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  `order_id` int(11) DEFAULT NULL,
  `is_paid` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_share_pay_info` values('1','','刷我滴卡，包你满足','9.90','409','0','1446072776','632','0');");
E_D("replace into `hhs_share_pay_info` values('2','','刷我滴卡，包你满足','9.90','409','0','1446073123','633','0');");
E_D("replace into `hhs_share_pay_info` values('3','','刷我滴卡，包你满足','9.90','409','0','1446073338','634','0');");
E_D("replace into `hhs_share_pay_info` values('4','','刷我滴卡，包你满足','9.90','409','0','1446073588','635','0');");
E_D("replace into `hhs_share_pay_info` values('5','','刷我滴卡，包你满足','9.90','409','0','1446073654','636','0');");
E_D("replace into `hhs_share_pay_info` values('6','','刷我滴卡，包你满足','9.90','409','0','1446076327','637','0');");
E_D("replace into `hhs_share_pay_info` values('7','','刷我滴卡，包你满足','9.90','409','0','1446077274','638','0');");
E_D("replace into `hhs_share_pay_info` values('8','','刷我滴卡，包你满足','9.90','409','0','1446078025','639','0');");
E_D("replace into `hhs_share_pay_info` values('9','','刷我滴卡，包你满足','0.02','486','0','1446621337','651','0');");
E_D("replace into `hhs_share_pay_info` values('10','','刷我滴卡，包你满足','9.90','505','0','1448139687','693','0');");

require("../../inc/footer.php");
?>