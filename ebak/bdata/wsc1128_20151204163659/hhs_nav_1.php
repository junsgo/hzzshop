<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_nav`;");
E_C("CREATE TABLE `hhs_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `item_icon` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_nav` values('30','','0','用户中心','1','4','0','user.php','bottom','fa-user');");
E_D("replace into `hhs_nav` values('31','','0','首页','1','1','0','index.php','bottom','fa-home');");
E_D("replace into `hhs_nav` values('32','','0','我的订单','1','3','0','user.php?act=order_list','bottom','fa-list');");
E_D("replace into `hhs_nav` values('33','','0','拼好货','1','2','0','group.php','bottom','fa-group');");
E_D("replace into `hhs_nav` values('39','c','46','分类','1','1','0','category.php?id=46','middle','fa-reorder');");
E_D("replace into `hhs_nav` values('38',NULL,NULL,'拼团','1','2','0','group.php','middle','fa-group');");
E_D("replace into `hhs_nav` values('36','','0','会员','1','3','0','user.php','middle','fa-user');");
E_D("replace into `hhs_nav` values('37','','0','购物车','1','4','0','flows.php?step=cart','middle','fa-shopping-cart');");

require("../../inc/footer.php");
?>