<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_bonus_type`;");
E_C("CREATE TABLE `hhs_bonus_type` (
  `type_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(60) NOT NULL DEFAULT '',
  `type_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `send_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `min_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `max_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `send_start_date` int(11) NOT NULL DEFAULT '0',
  `send_end_date` int(11) NOT NULL DEFAULT '0',
  `use_start_date` int(11) NOT NULL DEFAULT '0',
  `use_end_date` int(11) NOT NULL DEFAULT '0',
  `min_goods_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `is_share` int(11) DEFAULT '0' COMMENT '是否是好友券',
  `number` int(11) DEFAULT '0' COMMENT '分享优惠券的数量',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_bonus_type` values('13','100元','100.00','0','0.00','0.00','1438848000','1441526400','1438848000','1441526400','0.01','0','0');");
E_D("replace into `hhs_bonus_type` values('14','0.05','0.05','0','0.00','0.00','1438934400','1441612800','1438934400','1441612800','0.01','0','0');");
E_D("replace into `hhs_bonus_type` values('15','商品优惠','10.00','1','0.00','0.00','1438934400','1441612800','1438934400','1441612800','0.01','0','0');");
E_D("replace into `hhs_bonus_type` values('17','好友劵','20.00','1','0.00','0.00','1438934400','1441612800','1438934400','1441612800','0.01','1','2');");
E_D("replace into `hhs_bonus_type` values('18','10','10.00','0','0.00','0.00','1438934400','1441612800','1438934400','1441612800','0.10','0','0');");
E_D("replace into `hhs_bonus_type` values('19','订单金额发放','50.00','2','0.00','0.00','1439107200','1441785600','1439107200','1441785600','0.01','0','0');");
E_D("replace into `hhs_bonus_type` values('20','金额发放好友劵','45.00','2','0.00','0.00','1439107200','1441785600','1439107200','1441785600','0.01','0','10');");
E_D("replace into `hhs_bonus_type` values('21','线发','0.10','3','0.00','0.00','1439107200','1441785600','1439107200','1441785600','0.01','0','0');");

require("../../inc/footer.php");
?>