<?php
$start = microtime(true);
$repeat = 100;
$arr = range(1, $times);
while($repeat--) {
	$times = 100 * 1000;
	while ($times--) {
		is_numeric($arr[$times]);
		//preg_match("/\d+/i", $arr[$times]);
	}
}
die(microtime(true) - $start);

