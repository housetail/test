<?php
$replay = 10;
while($replay--) {
	$startTime = microtime(true);
	$data = require('test_file');
	$costTime = microtime(true) - $startTime;
	echo $costTime . PHP_EOL;
}
