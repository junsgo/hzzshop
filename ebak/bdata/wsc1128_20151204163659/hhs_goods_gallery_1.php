<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_goods_gallery`;");
E_C("CREATE TABLE `hhs_goods_gallery` (
  `img_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_desc` varchar(255) NOT NULL DEFAULT '',
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`img_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=108 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_goods_gallery` values('46','1','images/201507/goods_img/1_P_1436320263055.jpg','','images/201507/thumb_img/1_thumb_P_1436320263096.jpg','images/201507/source_img/1_P_1436320263792.jpg');");
E_D("replace into `hhs_goods_gallery` values('48','39','images/201507/goods_img/39_P_1437605266200.jpg','','images/201507/thumb_img/39_thumb_P_1437605266386.jpg','images/201507/source_img/39_P_1437605266432.jpg');");
E_D("replace into `hhs_goods_gallery` values('60','1','images/201507/goods_img/1_P_1438049105695.jpg','','images/201507/thumb_img/1_thumb_P_1438049105764.jpg','images/201507/source_img/1_P_1438049105088.jpg');");
E_D("replace into `hhs_goods_gallery` values('52','40','images/201507/goods_img/40_P_1437605529286.jpg','','images/201507/thumb_img/40_thumb_P_1437605529877.jpg','images/201507/source_img/40_P_1437605529050.jpg');");
E_D("replace into `hhs_goods_gallery` values('53','41','images/201507/goods_img/41_P_1437623437345.jpg','','images/201507/thumb_img/41_thumb_P_1437623437025.jpg','images/201507/source_img/41_P_1437623437180.jpg');");
E_D("replace into `hhs_goods_gallery` values('54','42','images/201507/goods_img/42_P_1437623748747.jpg','','images/201507/thumb_img/42_thumb_P_1437623748674.jpg','images/201507/source_img/42_P_1437623748611.jpg');");
E_D("replace into `hhs_goods_gallery` values('55','43','images/201507/goods_img/43_P_1437623807747.jpg','','images/201507/thumb_img/43_thumb_P_1437623807178.jpg','images/201507/source_img/43_P_1437623807544.jpg');");
E_D("replace into `hhs_goods_gallery` values('56','44','images/201507/goods_img/44_P_1437623942737.jpg','','images/201507/thumb_img/44_thumb_P_1437623942727.jpg','images/201507/source_img/44_P_1437623942379.jpg');");
E_D("replace into `hhs_goods_gallery` values('57','45','images/201507/goods_img/45_P_1437624172368.jpg','','images/201507/thumb_img/45_thumb_P_1437624172288.jpg','images/201507/source_img/45_P_1437624172271.jpg');");
E_D("replace into `hhs_goods_gallery` values('58','46','images/201507/goods_img/46_P_1437624260421.jpg','','images/201507/thumb_img/46_thumb_P_1437624260471.jpg','images/201507/source_img/46_P_1437624260602.jpg');");
E_D("replace into `hhs_goods_gallery` values('59','47','images/201507/goods_img/47_P_1437624459580.jpg','','images/201507/thumb_img/47_thumb_P_1437624459538.jpg','images/201507/source_img/47_P_1437624459361.jpg');");
E_D("replace into `hhs_goods_gallery` values('61','50','images/201508/goods_img/50_P_1438908785412.png','','images/201508/thumb_img/50_thumb_P_1438908785194.jpg','images/201508/source_img/50_P_1438908785254.png');");
E_D("replace into `hhs_goods_gallery` values('62','51','images/201508/goods_img/51_P_1438910197328.jpg','','images/201508/thumb_img/51_thumb_P_1438910197974.jpg','images/201508/source_img/51_P_1438910197734.jpg');");
E_D("replace into `hhs_goods_gallery` values('63','51','images/201508/goods_img/51_P_1438910198252.png','','images/201508/thumb_img/51_thumb_P_1438910198340.jpg','images/201508/source_img/51_P_1438910198655.png');");
E_D("replace into `hhs_goods_gallery` values('64','51','images/201508/goods_img/51_P_1438910198415.jpg','','images/201508/thumb_img/51_thumb_P_1438910198702.jpg','images/201508/source_img/51_P_1438910198499.jpg');");
E_D("replace into `hhs_goods_gallery` values('65','52','images/201508/goods_img/52_P_1438910485529.png','','images/201508/thumb_img/52_thumb_P_1438910485766.jpg','images/201508/source_img/52_P_1438910485333.png');");
E_D("replace into `hhs_goods_gallery` values('66','52','images/201508/goods_img/52_P_1438910485088.png','','images/201508/thumb_img/52_thumb_P_1438910485550.jpg','images/201508/source_img/52_P_1438910485755.png');");
E_D("replace into `hhs_goods_gallery` values('67','53','images/201508/goods_img/53_P_1438910785605.png','','images/201508/thumb_img/53_thumb_P_1438910785374.jpg','images/201508/source_img/53_P_1438910785435.png');");
E_D("replace into `hhs_goods_gallery` values('68','53','images/201508/goods_img/53_P_1438910785552.png','','images/201508/thumb_img/53_thumb_P_1438910785358.jpg','images/201508/source_img/53_P_1438910785167.png');");
E_D("replace into `hhs_goods_gallery` values('69','54','images/201508/goods_img/54_P_1438911016961.png','','images/201508/thumb_img/54_thumb_P_1438911016944.jpg','images/201508/source_img/54_P_1438911016832.png');");
E_D("replace into `hhs_goods_gallery` values('70','54','images/201508/goods_img/54_P_1438911016650.jpg','','images/201508/thumb_img/54_thumb_P_1438911016204.jpg','images/201508/source_img/54_P_1438911016356.jpg');");
E_D("replace into `hhs_goods_gallery` values('71','55','images/201508/goods_img/55_P_1438911259407.png','','images/201508/thumb_img/55_thumb_P_1438911259514.jpg','images/201508/source_img/55_P_1438911259370.png');");
E_D("replace into `hhs_goods_gallery` values('72','56','images/201508/goods_img/56_P_1438911432835.jpg','','images/201508/thumb_img/56_thumb_P_1438911432639.jpg','images/201508/source_img/56_P_1438911432996.jpg');");
E_D("replace into `hhs_goods_gallery` values('73','56','images/201508/goods_img/56_P_1438911432331.jpg','','images/201508/thumb_img/56_thumb_P_1438911432756.jpg','images/201508/source_img/56_P_1438911432266.jpg');");
E_D("replace into `hhs_goods_gallery` values('74','56','images/201508/goods_img/56_P_1438911432959.jpg','','images/201508/thumb_img/56_thumb_P_1438911432163.jpg','images/201508/source_img/56_P_1438911432824.jpg');");
E_D("replace into `hhs_goods_gallery` values('75','56','images/201508/goods_img/56_P_1438911432614.jpg','','images/201508/thumb_img/56_thumb_P_1438911432251.jpg','images/201508/source_img/56_P_1438911432620.jpg');");
E_D("replace into `hhs_goods_gallery` values('76','56','images/201508/goods_img/56_P_1438911432319.jpg','','images/201508/thumb_img/56_thumb_P_1438911432273.jpg','images/201508/source_img/56_P_1438911432483.jpg');");
E_D("replace into `hhs_goods_gallery` values('77','57','images/201508/goods_img/57_P_1438911937512.png','','images/201508/thumb_img/57_thumb_P_1438911937693.jpg','images/201508/source_img/57_P_1438911937941.png');");
E_D("replace into `hhs_goods_gallery` values('78','57','images/201508/goods_img/57_P_1438911937974.png','','images/201508/thumb_img/57_thumb_P_1438911937768.jpg','images/201508/source_img/57_P_1438911937458.png');");
E_D("replace into `hhs_goods_gallery` values('79','57','images/201508/goods_img/57_P_1438911937905.png','','images/201508/thumb_img/57_thumb_P_1438911937468.jpg','images/201508/source_img/57_P_1438911937192.png');");
E_D("replace into `hhs_goods_gallery` values('80','58','images/201508/goods_img/58_P_1438912033679.jpg','','images/201508/thumb_img/58_thumb_P_1438912033986.jpg','images/201508/source_img/58_P_1438912033693.jpg');");
E_D("replace into `hhs_goods_gallery` values('81','58','images/201508/goods_img/58_P_1438912033123.jpg','','images/201508/thumb_img/58_thumb_P_1438912033545.jpg','images/201508/source_img/58_P_1438912033379.jpg');");
E_D("replace into `hhs_goods_gallery` values('82','62','images/201508/goods_img/62_P_1438915066740.png','','images/201508/thumb_img/62_thumb_P_1438915066242.jpg','images/201508/source_img/62_P_1438915066848.png');");
E_D("replace into `hhs_goods_gallery` values('83','62','images/201508/goods_img/62_P_1438915066509.jpg','','images/201508/thumb_img/62_thumb_P_1438915066601.jpg','images/201508/source_img/62_P_1438915066892.jpg');");
E_D("replace into `hhs_goods_gallery` values('84','63','images/201508/goods_img/63_P_1438917706446.png','','images/201508/thumb_img/63_thumb_P_1438917706471.jpg','images/201508/source_img/63_P_1438917706711.png');");
E_D("replace into `hhs_goods_gallery` values('85','63','images/201508/goods_img/63_P_1438917706221.png','','images/201508/thumb_img/63_thumb_P_1438917706791.jpg','images/201508/source_img/63_P_1438917706507.png');");
E_D("replace into `hhs_goods_gallery` values('86','63','images/201508/goods_img/63_P_1438917706196.png','','images/201508/thumb_img/63_thumb_P_1438917706823.jpg','images/201508/source_img/63_P_1438917706175.png');");
E_D("replace into `hhs_goods_gallery` values('87','64','images/201508/goods_img/64_P_1438918191262.png','','images/201508/thumb_img/64_thumb_P_1438918191566.jpg','images/201508/source_img/64_P_1438918191274.png');");
E_D("replace into `hhs_goods_gallery` values('90','64','images/201508/goods_img/64_P_1440913527606.jpg','','images/201508/thumb_img/64_thumb_P_1440913527731.jpg','images/201508/source_img/64_P_1440913526082.jpg');");
E_D("replace into `hhs_goods_gallery` values('91','72','images/201509/goods_img/72_P_1441826500125.jpg','','images/201509/thumb_img/72_thumb_P_1441826500162.jpg','images/201509/source_img/72_P_1441826500612.jpg');");
E_D("replace into `hhs_goods_gallery` values('92','72','images/201509/goods_img/72_P_1441826500609.jpg','','images/201509/thumb_img/72_thumb_P_1441826500040.jpg','images/201509/source_img/72_P_1441826500124.jpg');");
E_D("replace into `hhs_goods_gallery` values('93','71','images/201509/goods_img/71_P_1441826586729.jpg','','images/201509/thumb_img/71_thumb_P_1441826586130.jpg','images/201509/source_img/71_P_1441826586855.jpg');");
E_D("replace into `hhs_goods_gallery` values('94','71','images/201509/goods_img/71_P_1441826586708.jpg','','images/201509/thumb_img/71_thumb_P_1441826586665.jpg','images/201509/source_img/71_P_1441826586797.jpg');");
E_D("replace into `hhs_goods_gallery` values('95','71','images/201509/goods_img/71_P_1441826586205.jpg','','images/201509/thumb_img/71_thumb_P_1441826586872.jpg','images/201509/source_img/71_P_1441826586363.jpg');");
E_D("replace into `hhs_goods_gallery` values('96','70','images/201509/goods_img/70_P_1441826618753.jpg','','images/201509/thumb_img/70_thumb_P_1441826618793.jpg','images/201509/source_img/70_P_1441826618362.jpg');");
E_D("replace into `hhs_goods_gallery` values('97','70','images/201509/goods_img/70_P_1441826618823.jpg','','images/201509/thumb_img/70_thumb_P_1441826618318.jpg','images/201509/source_img/70_P_1441826618767.jpg');");
E_D("replace into `hhs_goods_gallery` values('98','70','images/201509/goods_img/70_P_1441826618280.jpg','','images/201509/thumb_img/70_thumb_P_1441826618242.jpg','images/201509/source_img/70_P_1441826618693.jpg');");
E_D("replace into `hhs_goods_gallery` values('99','69','images/201509/goods_img/69_P_1441826644685.jpg','','images/201509/thumb_img/69_thumb_P_1441826644194.jpg','images/201509/source_img/69_P_1441826644019.jpg');");
E_D("replace into `hhs_goods_gallery` values('100','69','images/201509/goods_img/69_P_1441826644766.jpg','','images/201509/thumb_img/69_thumb_P_1441826644777.jpg','images/201509/source_img/69_P_1441826644092.jpg');");
E_D("replace into `hhs_goods_gallery` values('101','68','images/201509/goods_img/68_P_1441826670639.jpg','','images/201509/thumb_img/68_thumb_P_1441826670514.jpg','images/201509/source_img/68_P_1441826670353.jpg');");
E_D("replace into `hhs_goods_gallery` values('102','68','images/201509/goods_img/68_P_1441826670391.jpg','','images/201509/thumb_img/68_thumb_P_1441826670681.jpg','images/201509/source_img/68_P_1441826670528.jpg');");
E_D("replace into `hhs_goods_gallery` values('103','67','images/201509/goods_img/67_P_1441826698748.jpg','','images/201509/thumb_img/67_thumb_P_1441826698487.jpg','images/201509/source_img/67_P_1441826698758.jpg');");
E_D("replace into `hhs_goods_gallery` values('104','67','images/201509/goods_img/67_P_1441826698487.jpg','','images/201509/thumb_img/67_thumb_P_1441826698705.jpg','images/201509/source_img/67_P_1441826698543.jpg');");
E_D("replace into `hhs_goods_gallery` values('105','67','images/201509/goods_img/67_P_1441826698625.jpg','','images/201509/thumb_img/67_thumb_P_1441826698306.jpg','images/201509/source_img/67_P_1441826698379.jpg');");
E_D("replace into `hhs_goods_gallery` values('106','73','images/201510/goods_img/73_P_1444184516301.jpg','','images/201510/thumb_img/73_thumb_P_1444184516512.jpg','images/201510/source_img/73_P_1444184516436.jpg');");
E_D("replace into `hhs_goods_gallery` values('107','73','images/201510/goods_img/73_P_1444184516007.jpg','','images/201510/thumb_img/73_thumb_P_1444184516211.jpg','images/201510/source_img/73_P_1444184516347.jpg');");

require("../../inc/footer.php");
?>