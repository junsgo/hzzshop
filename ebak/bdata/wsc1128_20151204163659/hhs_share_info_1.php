<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_share_info`;");
E_C("CREATE TABLE `hhs_share_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `link_url` varchar(200) DEFAULT NULL COMMENT '链接字符串',
  `share_type` tinyint(4) DEFAULT '1' COMMENT '1 给好友 2 朋友圈 3 微博 4 qq',
  `share_status` tinyint(4) DEFAULT '1' COMMENT '1 成功 2 取消分享',
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_share_info` values('1','2','http://pintuan.xakc.net/share.php?team_sign=346','1','1','1438908136');");
E_D("replace into `hhs_share_info` values('2','5','http://pintuan.xakc.net/index.php','1','1','1438993202');");
E_D("replace into `hhs_share_info` values('3','2','http://pintuan.xakc.net/share.php?team_sign=362','1','1','1438997955');");
E_D("replace into `hhs_share_info` values('4','2','http://pintuan.xakc.net/share.php?team_sign=362','1','1','1438997993');");
E_D("replace into `hhs_share_info` values('5','1','http://pintuan.xakc.net/share.php?team_sign=369','1','1','1439147833');");
E_D("replace into `hhs_share_info` values('6','1','http://pintuan.xakc.net/share.php?team_sign=369','1','1','1439148432');");
E_D("replace into `hhs_share_info` values('7','7','http://pintuan.xakc.net/index.php','1','1','1439235030');");
E_D("replace into `hhs_share_info` values('8','4','http://pintuan.xakc.net/index.php','1','2','1439345975');");
E_D("replace into `hhs_share_info` values('9','4','http://pintuan.xakc.net/index.php','1','2','1439346051');");
E_D("replace into `hhs_share_info` values('10','4','http://pintuan.xakc.net/index.php','1','2','1439346165');");
E_D("replace into `hhs_share_info` values('11','4','http://pintuan.xakc.net/index.php','1','2','1439346217');");
E_D("replace into `hhs_share_info` values('12','4','http://pintuan.xakc.net/index.php','1','2','1439346300');");
E_D("replace into `hhs_share_info` values('13','1','http://pintuan.xakc.net/share.php?team_sign=403','1','1','1439405658');");
E_D("replace into `hhs_share_info` values('14','30','http://pintuan.xakc.net/index.php','1','1','1439414367');");
E_D("replace into `hhs_share_info` values('15','34','http://pintuan.xakc.net/share.php?team_sign=407','1','1','1439438015');");
E_D("replace into `hhs_share_info` values('16','37','http://pintuan.xakc.net/index.php','1','1','1439440200');");
E_D("replace into `hhs_share_info` values('17','4','http://pintuan.xakc.net/index.php','1','2','1439789538');");
E_D("replace into `hhs_share_info` values('18','1','http://pintuan.xakc.net/share_pay.php?showwxpaytitle=1&id=447','1','1','1439838893');");
E_D("replace into `hhs_share_info` values('19','1','http://pintuan.xakc.net/share_pay.php?showwxpaytitle=1&id=447','1','1','1439839139');");
E_D("replace into `hhs_share_info` values('20','1','http://pintuan.xakc.net/share_pay.php?showwxpaytitle=1&id=448','1','1','1439840149');");
E_D("replace into `hhs_share_info` values('21','1','http://pintuan.xakc.net/share_pay.php?showwxpaytitle=1&id=448','2','1','1439840160');");
E_D("replace into `hhs_share_info` values('22','1','http://pintuan.xakc.net/share_pay.php?showwxpaytitle=1&id=448','1','1','1439840545');");
E_D("replace into `hhs_share_info` values('23','1','http://pintuan.xakc.net/share_pay.php?showwxpaytitle=1&id=449','1','2','1439841501');");
E_D("replace into `hhs_share_info` values('24','1','http://pintuan.xakc.net/share_pay.php?showwxpaytitle=1&id=449','1','1','1439841532');");
E_D("replace into `hhs_share_info` values('25','1','http://pintuan.xakc.net/share_pay.php?showwxpaytitle=1&id=449','4','1','1439841541');");
E_D("replace into `hhs_share_info` values('26','4','http://pintuan.xakc.net/index.php','1','2','1440098769');");
E_D("replace into `hhs_share_info` values('27','78','http://pintuan.xakc.net/index.php','1','2','1440354626');");
E_D("replace into `hhs_share_info` values('28','7','http://pintuan.xakc.net/index.php','1','1','1440544334');");
E_D("replace into `hhs_share_info` values('29','7','http://pintuan.xakc.net/index.php?from=singlemessage&isappinstalled=0','1','1','1440546105');");
E_D("replace into `hhs_share_info` values('30','4','http://pintuan.xakc.net/share.php?team_sign=476','1','2','1440555480');");
E_D("replace into `hhs_share_info` values('31','4','http://pintuan.xakc.net/share.php?team_sign=476','1','2','1440556505');");
E_D("replace into `hhs_share_info` values('32','4','http://pintuan.xakc.net/share.php?team_sign=476','1','1','1440556617');");
E_D("replace into `hhs_share_info` values('33','7','http://pintuan.xakc.net/index.php','1','2','1440656107');");
E_D("replace into `hhs_share_info` values('34','4','http://wsc.hostadmin.com.cn/index.php','1','2','1441412199');");
E_D("replace into `hhs_share_info` values('35','4','http://wsc.hostadmin.com.cn/index.php','1','2','1441412210');");
E_D("replace into `hhs_share_info` values('36','4','http://wsc.hostadmin.com.cn/index.php','1','2','1441415676');");
E_D("replace into `hhs_share_info` values('37','4','http://wsc.hostadmin.com.cn/index.php','1','2','1441415787');");
E_D("replace into `hhs_share_info` values('38','2','http://wsc.hostadmin.com.cn/share.php?team_sign=520','1','1','1441850103');");
E_D("replace into `hhs_share_info` values('39','2','http://wsc.hostadmin.com.cn/share.php?team_sign=520','1','1','1441850117');");
E_D("replace into `hhs_share_info` values('40','2','http://wsc.hostadmin.com.cn/share.php?team_sign=520','1','1','1441850129');");
E_D("replace into `hhs_share_info` values('41','4','http://wsc.hostadmin.com.cn/index.php','1','2','1441864283');");
E_D("replace into `hhs_share_info` values('42','168','http://wsc.hostadmin.com.cn/share.php?team_sign=523','1','1','1442085169');");
E_D("replace into `hhs_share_info` values('43','172','http://wsc.hostadmin.com.cn/share.php?team_sign=526','2','1','1442086744');");
E_D("replace into `hhs_share_info` values('44','7','http://wsc.hostadmin.com.cn/index.php','1','1','1442276142');");
E_D("replace into `hhs_share_info` values('45','14','http://wsc.hostadmin.com.cn/share_pay.php?showwxpaytitle=1&id=541','1','1','1442291167');");
E_D("replace into `hhs_share_info` values('46','14','http://wsc.hostadmin.com.cn/index.php?from=singlemessage&isappinstalled=0','1','1','1442292551');");
E_D("replace into `hhs_share_info` values('47','210','http://wsc.hostadmin.com.cn/share.php?team_sign=551','1','1','1442721131');");
E_D("replace into `hhs_share_info` values('48','252','http://wsc.hostadmin.com.cn/index.php','1','1','1443050449');");
E_D("replace into `hhs_share_info` values('49','260','http://wsc.hostadmin.com.cn/tgoods.php?id=67','1','2','1443343951');");
E_D("replace into `hhs_share_info` values('50','304','http://wsc.hostadmin.com.cn/index.php','1','1','1444188940');");
E_D("replace into `hhs_share_info` values('51','91','http://wsc.hostadmin.com.cn/tgoods.php?id=67','2','1','1444359155');");
E_D("replace into `hhs_share_info` values('52','332','http://wsc.hostadmin.com.cn/index.php','1','1','1444596849');");
E_D("replace into `hhs_share_info` values('53','318','http://wsc.hostadmin.com.cn/tgoods.php?id=68','1','2','1444598329');");
E_D("replace into `hhs_share_info` values('54','318','http://wsc.hostadmin.com.cn/tgoods.php?id=68','4','1','1444598333');");
E_D("replace into `hhs_share_info` values('55','318','http://wsc.hostadmin.com.cn/tgoods.php?id=68','1','1','1444598387');");
E_D("replace into `hhs_share_info` values('56','332','http://wsc.hostadmin.com.cn/tgoods.php?id=70','1','1','1444600215');");
E_D("replace into `hhs_share_info` values('57','177','http://wsc.hostadmin.com.cn/share.php?team_sign=581','1','1','1444801547');");
E_D("replace into `hhs_share_info` values('58','372','http://wsc.hostadmin.com.cn/index.php','1','2','1444944738');");
E_D("replace into `hhs_share_info` values('59','326','http://wsc.hostadmin.com.cn/tgoods.php?id=67','1','2','1445515078');");
E_D("replace into `hhs_share_info` values('60','431','http://wsc.hostadmin.com.cn/index.php','1','1','1445767833');");
E_D("replace into `hhs_share_info` values('61','441','http://wsc.hostadmin.com.cn/share_pay.php?showwxpaytitle=1&id=621','2','2','1445989017');");
E_D("replace into `hhs_share_info` values('62','441','http://wsc.hostadmin.com.cn/share.php?team_sign=622','1','1','1445989984');");
E_D("replace into `hhs_share_info` values('63','431','http://wsc.hostadmin.com.cn/share.php?team_sign=627','1','1','1446004553');");
E_D("replace into `hhs_share_info` values('64','410','http://wsc.hostadmin.com.cn/share_pay.php?showwxpaytitle=1&id=632','1','1','1446072729');");
E_D("replace into `hhs_share_info` values('65','410','http://wsc.hostadmin.com.cn/share_pay.php?showwxpaytitle=1&id=633','1','1','1446073111');");
E_D("replace into `hhs_share_info` values('66','410','http://wsc.hostadmin.com.cn/share_pay.php?showwxpaytitle=1&id=634','1','1','1446073313');");
E_D("replace into `hhs_share_info` values('67','410','http://wsc.hostadmin.com.cn/share_pay.php?showwxpaytitle=1&id=635','1','1','1446073568');");
E_D("replace into `hhs_share_info` values('68','410','http://wsc.hostadmin.com.cn/share_pay.php?showwxpaytitle=1&id=636','1','1','1446073640');");
E_D("replace into `hhs_share_info` values('69','410','http://wsc.hostadmin.com.cn/share_pay.php?showwxpaytitle=1&id=637','1','2','1446076245');");
E_D("replace into `hhs_share_info` values('70','410','http://wsc.hostadmin.com.cn/share_pay.php?showwxpaytitle=1&id=637','1','1','1446076250');");
E_D("replace into `hhs_share_info` values('71','410','http://wsc.hostadmin.com.cn/share_pay.php?showwxpaytitle=1&id=638','1','1','1446077246');");
E_D("replace into `hhs_share_info` values('72','410','http://wsc.hostadmin.com.cn/share_pay.php?showwxpaytitle=1&id=639','1','2','1446077687');");
E_D("replace into `hhs_share_info` values('73','410','http://wsc.hostadmin.com.cn/share_pay.php?showwxpaytitle=1&id=639','1','1','1446077972');");
E_D("replace into `hhs_share_info` values('74','448','http://wsc.hostadmin.com.cn/index.php','1','1','1446087633');");
E_D("replace into `hhs_share_info` values('75','431','http://wsc.hostadmin.com.cn/share.php?team_sign=649','1','1','1446616798');");
E_D("replace into `hhs_share_info` values('76','485','http://wsc.hostadmin.com.cn/tgoods.php?id=67','2','2','1446621136');");
E_D("replace into `hhs_share_info` values('77','485','http://wsc.hostadmin.com.cn/share_pay.php?showwxpaytitle=1&id=651','1','1','1446621297');");
E_D("replace into `hhs_share_info` values('78','505','http://wsc.hostadmin.com.cn/tgoods.php?id=72','1','1','1446710680');");
E_D("replace into `hhs_share_info` values('79','505','http://wsc.hostadmin.com.cn/tgoods.php?id=71','1','1','1446710716');");
E_D("replace into `hhs_share_info` values('80','505','http://wsc.hostadmin.com.cn/tgoods.php?id=73','1','1','1446710742');");
E_D("replace into `hhs_share_info` values('81','479','http://wsc.hostadmin.com.cn/index.php','1','1','1446751167');");
E_D("replace into `hhs_share_info` values('82','410','http://wsc.hostadmin.com.cn/index.php','1','1','1446770531');");
E_D("replace into `hhs_share_info` values('83','410','http://wsc.hostadmin.com.cn/index.php','1','2','1447106930');");
E_D("replace into `hhs_share_info` values('84','410','http://wsc.hostadmin.com.cn/goods.php?id=69','1','2','1447118657');");
E_D("replace into `hhs_share_info` values('85','410','http://wsc.hostadmin.com.cn/goods.php?id=69','1','2','1447118676');");
E_D("replace into `hhs_share_info` values('86','410','http://wsc.hostadmin.com.cn/goods.php?id=69','1','2','1447118748');");
E_D("replace into `hhs_share_info` values('87','550','http://wsc.hostadmin.com.cn/index.php','1','1','1447180855');");
E_D("replace into `hhs_share_info` values('88','409','http://wsc.hostadmin.com.cn/share.php?team_sign=674','1','1','1447271966');");
E_D("replace into `hhs_share_info` values('89','588','http://wsc.hostadmin.com.cn/index.php','1','1','1447809550');");
E_D("replace into `hhs_share_info` values('90','588','http://wsc.hostadmin.com.cn/index.php?from=singlemessage&isappinstalled=0','1','1','1447809639');");
E_D("replace into `hhs_share_info` values('91','588','http://wsc.hostadmin.com.cn/index.php?from=singlemessage&isappinstalled=0','1','1','1447810647');");
E_D("replace into `hhs_share_info` values('92','466','http://wsc.hostadmin.com.cn/goods.php?id=69','1','2','1447993427');");
E_D("replace into `hhs_share_info` values('93','466','http://wsc.hostadmin.com.cn/goods.php?id=71','1','2','1447993467');");
E_D("replace into `hhs_share_info` values('94','505','http://wsc.hostadmin.com.cn/share_pay.php?showwxpaytitle=1&id=693','1','1','1448139637');");
E_D("replace into `hhs_share_info` values('95','410','http://wsc.hostadmin.com.cn/tginfo.php?id=67','1','2','1448253432');");
E_D("replace into `hhs_share_info` values('96','631','http://wsc.hostadmin.com.cn/index.php','1','1','1448341034');");
E_D("replace into `hhs_share_info` values('97','435','http://wsc.hostadmin.com.cn/index.php','1','1','1448393672');");

require("../../inc/footer.php");
?>