<?php
/**
 * redis demo
 * @see https://github.com/nicolasff/phpredis
 */
$testcase = intval($argv[1]);

$redis = new Redis();
$redis->connect('127.0.0.1', '6379');

// connect
if (1 == $testcase) {
    $response = $redis->select(1);
    var_dump($response);
    exit();
}

// server
if (2 == $testcase) {
    $response = $redis->info();
    var_dump($response);
    exit();
}
