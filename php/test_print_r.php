<?php
$b = array ('m' => "mo \r\bnkey", 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
print_r($b);
$results = print_r ($b, true); //$results 包含了 print_r 的输出结果
$results = str_replace(array("\r\n", "\r", "\n", " "), ',', $results);
echo $results . "\n";
