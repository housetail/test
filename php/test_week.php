<?php
$weekStart = strtotime('-' . date('w') . ' day');
		$weekEnd = strtotime('+' . (7 - date('w')) . ' day');
echo 		date('Y-m-d' , $weekStart) . '~' . date('Y-m-d' , $weekEnd);
