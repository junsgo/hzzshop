<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_user_address`;");
E_C("CREATE TABLE `hhs_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `address_name` varchar(50) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) NOT NULL DEFAULT '0',
  `province` smallint(5) NOT NULL DEFAULT '0',
  `city` smallint(5) NOT NULL DEFAULT '0',
  `district` smallint(5) NOT NULL DEFAULT '0',
  `address` varchar(120) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  `address_type` int(11) NOT NULL DEFAULT '0' COMMENT '1 家庭 2公司',
  PRIMARY KEY (`address_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=125 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_user_address` values('4','','0','擦擦','','1','4','57','560','擦擦','','','15688888888','','','2');");
E_D("replace into `hhs_user_address` values('121','','505','11','','1','8','115','998','啊啊啊','','','18650004789','','','1');");
E_D("replace into `hhs_user_address` values('120','','621','束搏','','1','16','220','1835','古平岗4号c座410','','','18651687765','','','2');");
E_D("replace into `hhs_user_address` values('119','','620','骨','','1','4','56','550','母亲节礼物','','','13699998888','','','1');");
E_D("replace into `hhs_user_address` values('118','','616','测试','','1','3','36','398','1111','','','11111111111','','','1');");
E_D("replace into `hhs_user_address` values('117','','613','石头','','1','6','76','702','雨山','','','18928783286','','','1');");
E_D("replace into `hhs_user_address` values('116','','611','敏姐','','1','26','322','2725','XXXX','','','13408455583','','','2');");
E_D("replace into `hhs_user_address` values('115','','472','小王','','1','24','311','2598','南二环','','','13888888888','','','1');");
E_D("replace into `hhs_user_address` values('114','','599','二哥','','1','6','77','707','西丽','','','18129971760','','','1');");
E_D("replace into `hhs_user_address` values('113','','598','咯哦','','1','7','98','866','试图','','','17783021213','','','1');");
E_D("replace into `hhs_user_address` values('112','','597','Ces','','1','3','36','399','Dhdjg','','','13278735581','','','1');");
E_D("replace into `hhs_user_address` values('111','','496','方法','','1','4','54','532','呵呵','','','13344433343','','','1');");
E_D("replace into `hhs_user_address` values('110','','594','岱宗','','1','14','197','1648','万家丽广场','','','18774940289','','','2');");
E_D("replace into `hhs_user_address` values('109','','589','于震','','1','2','52','515','荣京丽都','','','13120265544','','','0');");
E_D("replace into `hhs_user_address` values('108','','543','俞炜','','1','6','80','749','大大的反反复复发','','','13761510007','','','1');");
E_D("replace into `hhs_user_address` values('107','','543','俞炜','','1','2','52','503','大大方方反反复复','','','13761510007','','','1');");
E_D("replace into `hhs_user_address` values('106','','566','0.0','','1','2','52','500','看见莱克荆','','','18791753117','','','1');");
E_D("replace into `hhs_user_address` values('104','','559','加了','','1','6','77','706','回来了','','','15067115793','','','2');");
E_D("replace into `hhs_user_address` values('105','','466','？','','1','2','52','504','11','','','18888888888','','','1');");
E_D("replace into `hhs_user_address` values('103','','558','啊啊','','1','6','76','694','sdff','','','18819884881','','','1');");
E_D("replace into `hhs_user_address` values('102','','527','王苏蕴','','1','6','77','707','好好考虑考虑考','','','15818547788','','','1');");
E_D("replace into `hhs_user_address` values('101','','522','王立军','','1','7','102','905','雹子了不起子弹','','','15053558765','','','2');");
E_D("replace into `hhs_user_address` values('100','','508','于方正','','1','24','311','2601','凤城二路','','','18682967875','','','1');");
E_D("replace into `hhs_user_address` values('99','','504','Rdgjj','','1','3','38','417','豆腐不吃饭p','','','45688566699','','','1');");
E_D("replace into `hhs_user_address` values('98','','445','这么点儿','','1','14','197','1647','这是要不要拿货','','','16753567546','','','1');");
E_D("replace into `hhs_user_address` values('97','','488','测试','','1','2','52','503','国贸','','','18653440567','','','1');");
E_D("replace into `hhs_user_address` values('96','','485','成都的','','1','4','53','518','点点滴滴','','','11111111111','','','1');");
E_D("replace into `hhs_user_address` values('95','','484','甘闯','','1','14','197','1647','高鑫麓城','','','13787204325','','','0');");
E_D("replace into `hhs_user_address` values('94','','484','甘闯','','1','14','197','1647','高鑫麓城','','','13787204325','','','2');");
E_D("replace into `hhs_user_address` values('93','','480','唐','','1','5','66','633','bnnnn','','','13632225251','','','2');");
E_D("replace into `hhs_user_address` values('92','','481','Gg','','1','2','52','500','Gg','','','16366688767','','','1');");
E_D("replace into `hhs_user_address` values('91','','477','加一网','','1','24','311','0','空军建军节','','','18681830623','','','1');");
E_D("replace into `hhs_user_address` values('90','','461','郭楠','','1','2','52','500','啊啊啊','','','18801031125','','','1');");
E_D("replace into `hhs_user_address` values('89','','460','测试','','1','4','56','551','哦嫩模','','','13575933613','','','2');");
E_D("replace into `hhs_user_address` values('88','','444','来咯','','1','7','103','912','记录','','','18508428178','','','1');");
E_D("replace into `hhs_user_address` values('87','','442','罗哈威','','1','2','52','506','方庄南路','','','13243348763','','','0');");
E_D("replace into `hhs_user_address` values('86','','441','测试','','1','3','36','398','不知道','','','13800138000','','','1');");
E_D("replace into `hhs_user_address` values('85','','417','qq','','1','6','76','694','hehrh','','','18819884881','','','0');");
E_D("replace into `hhs_user_address` values('84','','431','李可','','1','5','66','633','李可','','','18509652589','','','1');");
E_D("replace into `hhs_user_address` values('83','','409','庞斌','','1','24','311','2596','文艺北路金色城市','','','18092837512','','','2');");
E_D("replace into `hhs_user_address` values('82','','415','的的','','1','3','38','417','的的','','','15666666666','','','1');");
E_D("replace into `hhs_user_address` values('81','','411','罗','','1','4','56','551','七','','','13333333333','','','1');");
E_D("replace into `hhs_user_address` values('80','','410','齐永东','','1','2','52','502','不会好纠结','','','13891864749','','','1');");
E_D("replace into `hhs_user_address` values('79','','405','齐永东','','1','4','53','518','叫姐姐哈哈哈','','','13891864749','','','1');");
E_D("replace into `hhs_user_address` values('122','','462','哪怕','','1','2','52','501','丅啊啊哈','','','13231231234','','','1');");
E_D("replace into `hhs_user_address` values('123','','605','张强','','1','16','221','1855','衡山路','','','15995935156','','','1');");
E_D("replace into `hhs_user_address` values('124','','430','崔浩','','1','24','311','2601','1111','','','15529367277','','','1');");

require("../../inc/footer.php");
?>