<?php
/*$data = file_get_contents('http://api.douban.com/v2/movie/cinemas/cities?apikey=050a73c75de682d00f1f5b5619b38870');
$data = json_decode($data, true);
var_dump($data);*/

$data = file_get_contents('http://media.wapcms.pub.sina.com.cn/cgi-bin/get264UrlByVid.php?vid=98619958');
$data = json_decode($data);
var_dump($data);
