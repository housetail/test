<?php
$monthStart = date('Y-m-01');
//$monthEnd = date('Y-m-d', strtotime('-1 day', date('Y-m-01', strtotime('+1 month'))));
$monthEnd = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-01', strtotime('+1 month')))));
var_dump($monthStart);
var_dump($monthEnd);
