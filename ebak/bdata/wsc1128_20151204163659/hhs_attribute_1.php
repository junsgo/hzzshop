<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_attribute`;");
E_C("CREATE TABLE `hhs_attribute` (
  `attr_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_name` varchar(60) NOT NULL DEFAULT '',
  `attr_input_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_values` text NOT NULL,
  `attr_index` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_linked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `attr_group` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`attr_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=219 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_attribute` values('211','10','one','0','0','','0','0','0','0');");
E_D("replace into `hhs_attribute` values('212','11','规格','0','1','','0','0','0','0');");
E_D("replace into `hhs_attribute` values('213','11','原产国（地）','0','0','','0','0','0','0');");
E_D("replace into `hhs_attribute` values('214','11','有无原产地证 ','1','0','有\r\n无','0','0','0','0');");
E_D("replace into `hhs_attribute` values('215','11','进口口岸 ','0','0','','0','0','0','0');");
E_D("replace into `hhs_attribute` values('216','11','售卖方式','1','0','包装\r\n袋装\r\n罐装\r\n瓶装','0','0','0','0');");
E_D("replace into `hhs_attribute` values('217','11','产品类别','0','0','','0','0','0','0');");
E_D("replace into `hhs_attribute` values('218','12','颜色','0','2','','0','0','0','0');");

require("../../inc/footer.php");
?>