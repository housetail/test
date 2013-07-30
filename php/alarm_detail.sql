DROP TABLE IF EXISTS `alarm_detail_201307`;
CREATE TABLE `alarm_detail_201307` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201308`;
CREATE TABLE `alarm_detail_201308` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201309`;
CREATE TABLE `alarm_detail_201309` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201310`;
CREATE TABLE `alarm_detail_201310` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201311`;
CREATE TABLE `alarm_detail_201311` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201312`;
CREATE TABLE `alarm_detail_201312` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201401`;
CREATE TABLE `alarm_detail_201401` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201402`;
CREATE TABLE `alarm_detail_201402` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201403`;
CREATE TABLE `alarm_detail_201403` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201404`;
CREATE TABLE `alarm_detail_201404` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201405`;
CREATE TABLE `alarm_detail_201405` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201406`;
CREATE TABLE `alarm_detail_201406` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201407`;
CREATE TABLE `alarm_detail_201407` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201408`;
CREATE TABLE `alarm_detail_201408` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201409`;
CREATE TABLE `alarm_detail_201409` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201410`;
CREATE TABLE `alarm_detail_201410` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201411`;
CREATE TABLE `alarm_detail_201411` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201412`;
CREATE TABLE `alarm_detail_201412` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201501`;
CREATE TABLE `alarm_detail_201501` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201502`;
CREATE TABLE `alarm_detail_201502` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201503`;
CREATE TABLE `alarm_detail_201503` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201504`;
CREATE TABLE `alarm_detail_201504` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201505`;
CREATE TABLE `alarm_detail_201505` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201506`;
CREATE TABLE `alarm_detail_201506` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201507`;
CREATE TABLE `alarm_detail_201507` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201508`;
CREATE TABLE `alarm_detail_201508` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201509`;
CREATE TABLE `alarm_detail_201509` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201510`;
CREATE TABLE `alarm_detail_201510` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201511`;
CREATE TABLE `alarm_detail_201511` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201512`;
CREATE TABLE `alarm_detail_201512` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201601`;
CREATE TABLE `alarm_detail_201601` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201602`;
CREATE TABLE `alarm_detail_201602` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201603`;
CREATE TABLE `alarm_detail_201603` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201604`;
CREATE TABLE `alarm_detail_201604` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201605`;
CREATE TABLE `alarm_detail_201605` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `alarm_detail_201606`;
CREATE TABLE `alarm_detail_201606` (
  `detail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) NOT NULL DEFAULT '0',
  `time` bigint(20) DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `code` mediumint(9) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `email` int(11) NOT NULL DEFAULT '0',
  `sms` int(11) NOT NULL DEFAULT '0',
  `serverIp` char(16) NOT NULL DEFAULT '',
  `clientIp` char(16) NOT NULL DEFAULT '',
  `script` varchar(255) NOT NULL DEFAULT '',
  `xhprofId` char(16) NOT NULL DEFAULT '',
  `referer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`detail_id`),
  KEY `pid_code` (`pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
