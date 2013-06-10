<?php
$url = 'http://api.vip.book.sina.com.cn/vb/recharge?format=json';
$query = array('uid' => '1132455575', 'amount' => 1, 'returl' => 'http://vip.book.sina.com.cn/userinfo/myhome.php?v=2');
$query['sign'] = md5(implode('|', array($query['uid'], date('Y-m-d'), '115b635b31ae7d801251b44d020b0827')));
$query = http_build_query($query);
$cmd = "curl -d '{$query}' -e 'http://vip.book.sina.com.cn' '{$url}'";
echo $cmd . PHP_EOL;
