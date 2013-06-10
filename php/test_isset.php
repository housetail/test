<?php
$arr = array('a' => 0, 'b' => 0);
if ($arr['a']) {
	echo "1: arr[a] is set\n";
}
if (isset($arr['a'])) {
	echo "2: arr[a] is set\n";
}
if (!empty($arr['b'])) {
	echo "3: arr[b] is set\n";
}
if (isset($arr['b'])) {
	echo "4: arr[b] is set\n";
}
var_dump($arr);
