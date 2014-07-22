<?php
function randomStr($len) {
    $pattern='1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0; $i < $len; $i++) {
        $str .= $pattern[mt_rand(0,strlen($pattern) - 1)];
    }

    return $str;
}

function generateRandomList($count, $len) {
    $data = array();
    while($count--) {
        $data[] = randomStr($len);
    }
    $data = array_unique($data);
    
    return $data;
}

//$data = generateRandomList($argv[1], $argv[2]);
//echo count($data);exit();

$file = '/www/data/rand.txt';
$content = file($file);
$total = 1000;
$len = 10;
foreach ($content as $line) {
    $tmp = explode("\t", $line);
    $name = $tmp[0];
    $count = intval($total * $tmp[2]) / 100;
    $data = generateRandomList($count, $len);
    
    for ($i = 0; $i < $count; $i++) {
        echo $name . ':' . $data[$i] . PHP_EOL;
    }
}
exit();

