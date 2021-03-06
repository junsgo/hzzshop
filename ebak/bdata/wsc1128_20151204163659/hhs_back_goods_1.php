<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_back_goods`;");
E_C("CREATE TABLE `hhs_back_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `back_id` mediumint(8) unsigned DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `back_id` (`back_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_back_goods` values('1','5','46','0','','鸭脖',NULL,'HHS000046','1','1','');");
E_D("replace into `hhs_back_goods` values('2','6','1','16','HHS000000g_p16','越南进口澳芒2个59元',NULL,'HHS000000','1','1','包装规格:6个[20] \n');");
E_D("replace into `hhs_back_goods` values('3','6','37','0','','板牙妹妹坚果零食炒货夏威夷果澳洲特产零食奶油味送开口器',NULL,'HHS000002','1','1','');");

require("../../inc/footer.php");
?>