<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_goods_attr`;");
E_C("CREATE TABLE `hhs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=346 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_goods_attr` values('254','50','212','230g/袋','');");
E_D("replace into `hhs_goods_attr` values('255','50','212','250g/袋','2');");
E_D("replace into `hhs_goods_attr` values('256','50','212','500g/袋','6');");
E_D("replace into `hhs_goods_attr` values('257','51','212','230g/袋','');");
E_D("replace into `hhs_goods_attr` values('258','51','212','250g/袋','4');");
E_D("replace into `hhs_goods_attr` values('259','51','212','500g/袋','8');");
E_D("replace into `hhs_goods_attr` values('260','52','212','500g/罐','');");
E_D("replace into `hhs_goods_attr` values('264','61','212','230g/袋','');");
E_D("replace into `hhs_goods_attr` values('265','61','212','250g/袋','2');");
E_D("replace into `hhs_goods_attr` values('266','61','212','500g/袋','6');");
E_D("replace into `hhs_goods_attr` values('270','62','212','230g/袋','');");
E_D("replace into `hhs_goods_attr` values('271','62','212','250g/袋','4');");
E_D("replace into `hhs_goods_attr` values('272','62','212','500g/袋','8');");
E_D("replace into `hhs_goods_attr` values('273','1','212','6个','0.01');");
E_D("replace into `hhs_goods_attr` values('274','1','212','8个','30');");
E_D("replace into `hhs_goods_attr` values('275','1','212','10个','40');");
E_D("replace into `hhs_goods_attr` values('282','63','212','230g/袋','');");
E_D("replace into `hhs_goods_attr` values('283','63','212','250g/袋','4');");
E_D("replace into `hhs_goods_attr` values('284','63','212','500g/袋','8');");
E_D("replace into `hhs_goods_attr` values('288','64','212','230g/袋','2');");
E_D("replace into `hhs_goods_attr` values('289','64','212','250g/袋','4');");
E_D("replace into `hhs_goods_attr` values('290','64','212','500g/袋','8');");
E_D("replace into `hhs_goods_attr` values('291','37','212','小箱','20');");
E_D("replace into `hhs_goods_attr` values('292','37','212','大箱','40');");
E_D("replace into `hhs_goods_attr` values('293','64','213','泰国','0');");
E_D("replace into `hhs_goods_attr` values('316','64','214','有','0');");
E_D("replace into `hhs_goods_attr` values('295','64','215','北仑海关','0');");
E_D("replace into `hhs_goods_attr` values('296','64','217','果干','0');");
E_D("replace into `hhs_goods_attr` values('298','64','216','袋装','0');");
E_D("replace into `hhs_goods_attr` values('299','41','212','小颗粒','100');");
E_D("replace into `hhs_goods_attr` values('300','41','212','大颗粒','120');");
E_D("replace into `hhs_goods_attr` values('309','1','213','泰国','0');");
E_D("replace into `hhs_goods_attr` values('310','1','215','海伦海关','0');");
E_D("replace into `hhs_goods_attr` values('311','1','217','干果','0');");
E_D("replace into `hhs_goods_attr` values('312','51','213',' 菲律宾','0');");
E_D("replace into `hhs_goods_attr` values('313','51','214','有','0');");
E_D("replace into `hhs_goods_attr` values('314','51','215','广州海关','0');");
E_D("replace into `hhs_goods_attr` values('315','51','217','果脯','0');");
E_D("replace into `hhs_goods_attr` values('341','73','218','黑色','128');");
E_D("replace into `hhs_goods_attr` values('342','73','218','啡色','128');");
E_D("replace into `hhs_goods_attr` values('343','67','212','规格1','');");
E_D("replace into `hhs_goods_attr` values('344','67','212','规格2','');");
E_D("replace into `hhs_goods_attr` values('345','67','212','规格3','');");

require("../../inc/footer.php");
?>