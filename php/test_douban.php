<?php
//$content = file_get_contents('http://api.douban.com/v2/movie/subject/10574622/schedule?apikey=050a73c75de682d00f1f5b5619b38870&date=2012-12-25&city=%E5%8C%97%E4%BA%AC');
$content = file_get_contents('douban.json');
$content = json_decode($content, true);
print_r($content);
