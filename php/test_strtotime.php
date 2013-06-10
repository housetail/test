<?php
/*$year = '99';
$month = '1';
$day = '1';
$time = "{$year}-{$month}-{$day} 1:1:1";
$stamp = strtotime($time);
var_dump($stamp);
$day = date('Y-m-d H:i:s', $stamp);
var_dump($day);*/
print_r(explode('-', date('Y-m-d', strtotime("-1 day"))));
