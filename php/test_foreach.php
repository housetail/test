<?php
$arr = array(1, 2, 3, 4, 5);
foreach ($arr as $i1) {
	foreach ($arr as $i2) {
		echo "{$i1}_{$i2}\n";
	}
}
