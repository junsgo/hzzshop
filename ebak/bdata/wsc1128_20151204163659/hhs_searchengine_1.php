<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_searchengine`;");
E_C("CREATE TABLE `hhs_searchengine` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `hhs_searchengine` values('2015-08-28','GOOGLE','1');");
E_D("replace into `hhs_searchengine` values('2015-08-30','GOOGLE','1');");
E_D("replace into `hhs_searchengine` values('2015-08-31','GOOGLE','2');");
E_D("replace into `hhs_searchengine` values('2015-09-02','GOOGLE','1');");

require("../../inc/footer.php");
?>