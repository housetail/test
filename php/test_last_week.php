<?php
for ($i = 0; $i < 30; $i++) {
	$day = strtotime("-{$i} days");
	echo date('W', $day) . "\t" . date('Y-m-d H:i:s', $day) . "\n";
}
