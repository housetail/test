<?php
function assertMemoryRaise() {
	static $lastMemoryUsage = 0;
	$offset = 1024 * 1024;
	$memoryUsage = memory_get_usage(true);
	//if (abs($memoryUsage - $lastMemoryUsage) > $offset) {
		echo "memory usage raise than 1M ({$memoryUsage}, {$lastMemoryUsage})\n";
		debug_print_backtrace();
	//}
	$lastMemoryUsage = $memoryUsage;
}

function alloc() {
	$arr = array();
	for ($i = 0; $i < 1024 * 10; $i++) {
		$arr[] = '0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000';
	}
}

assertMemoryRaise();
alloc();
assertMemoryRaise();
//unset($arr);
$arr = NULL;
assertMemoryRaise();
