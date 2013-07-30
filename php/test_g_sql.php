<?php
for ($i = 1; $i < 100; $i++) {
    $id = date('Ym', strtotime("+{$i} months"));
    $sql = <<<TXT
DROP TABLE IF EXISTS `alarm_detail_{$id}`;
CREATE TABLE `alarm_detail_{$id}` (
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
  KEY `time_pid_code` (`time`, `pid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

TXT;
    echo $sql;
}
