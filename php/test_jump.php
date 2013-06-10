<?php
$main_id = $argv[1];//88935
$sub_id = $argv[2];//168095
$user_id = $argv[3];//1315590394

$result = 'succ';
$md5 = md5($user_id . $main_id . $sub_id);
$hex = hexdec(substr($md5, -6));
$tradenum = '000000' . $hex;
$tradenum_mask = substr($tradenum, -6);
$point =10;
$xftorder = 'aaaaaaa';//fake
$sign = md5("succ|0|{$tradenum}|{$xftorder}|{$point}|{$user_id}|" . 'DSB24T22-BSFD-MTNR-24GT-MELGNBISRUBGQ394394');

$query = array();
$query['book'] = $main_id;
$query['chapter'] = $sub_id;
$query['result'] = $result;
$query['tradenum'] = $tradenum;
$query['point'] = $point;
$query['xftorder'] = $xftorder;
$query['sign'] = $sign;

echo http_build_query($query) . "\n";
//referer http://sinapay.sina.com.cn
