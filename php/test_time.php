<?php
$stamp = strtotime('19999-11-18 12:00:00');
var_dump($stamp);
echo "$stamp\n";
$day = date('Y-m-d H:i:s', $stamp);
echo "$day\n";
