<?php
function map_callback($a) {
   return strtoupper($a);
}

function walk_callback(&$value, &$key) {
   $key = strtoupper($key);
   $value = $value . $value;
}

$arr = array('a' => 'red', 'b' => 'gree');
$arr_map = array_map('map_callback', $arr);
var_dump($arr);
var_dump($arr_map);
array_walk($arr, 'walk_callback');
var_dump($arr);

