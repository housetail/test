<?php
/*for ($year = 1912; $year <= 2031; $year++) {
	for ($month = 1; $month <= 12; $month++) {
		for ($day = 1; $day <= 31; $day++) {
			if (checkdate($month, $day, $year)) {
				$date = sprintf("%04d-%02d-%02d", $year, $month, $day);
				echo $date . "\n";
			}
		}
	}
}*/

$ymd = date('Y-m-d', strtotime('-3 month'));
echo $ymd;
