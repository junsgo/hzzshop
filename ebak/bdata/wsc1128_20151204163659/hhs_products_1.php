<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_products`;");
E_C("CREATE TABLE `hhs_products` (
  `product_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_attr` varchar(50) DEFAULT NULL,
  `product_sn` varchar(60) DEFAULT NULL,
  `product_number` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_products` values('14','1','237','','1');");
E_D("replace into `hhs_products` values('16','1','273','HHS000000g_p16','10000');");
E_D("replace into `hhs_products` values('17','1','275','HHS000000g_p17','2');");
E_D("replace into `hhs_products` values('18','1','274','HHS000000g_p18','0');");

require("../../inc/footer.php");
?>