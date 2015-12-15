<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_user_bonus`;");
E_C("CREATE TABLE `hhs_user_bonus` (
  `bonus_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `bonus_type_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bonus_sn` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `send_user_id` int(11) DEFAULT '0' COMMENT '发放人的user_id',
  `used_time` int(10) unsigned NOT NULL DEFAULT '0',
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `emailed` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_act` int(11) NOT NULL DEFAULT '0' COMMENT '是否激活，好友券需要激活使用',
  `send_order_id` int(11) DEFAULT '0' COMMENT '下那个订单时发的优惠券',
  `send_id` int(11) DEFAULT '0' COMMENT '分享的链接id',
  `is_attention_send` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bonus_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=228 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_user_bonus` values('211','17','0','0','1','0','0','0','0','401','29','0');");
E_D("replace into `hhs_user_bonus` values('210','17','0','0','1','0','0','0','0','401','29','0');");
E_D("replace into `hhs_user_bonus` values('208','21','1000193722','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('207','21','1000181282','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('206','21','1000179205','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('205','21','1000165628','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('204','21','1000154073','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('203','21','1000149520','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('202','21','1000130093','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('201','21','1000126739','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('200','21','1000110157','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('199','21','1000107244','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('198','21','1000095927','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('197','21','1000082103','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('196','21','1000074030','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('195','21','1000060522','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('194','21','1000050343','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('193','21','1000047626','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('192','21','1000036249','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('191','21','1000022341','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('190','21','1000018543','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('189','21','1000003963','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('217','21','1000199060','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('218','21','1000200857','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('219','21','1000215505','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('220','21','1000224252','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('221','21','1000231312','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('222','21','1000243136','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('223','21','1000256049','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('224','21','1000268750','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('225','21','1000272914','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('226','21','1000281002','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('227','21','1000298788','0','0','0','0','0','0','0','0','1');");

require("../../inc/footer.php");
?>