<?php
$arr = array(
	0 => array('a' => 1),
	2 => array('b' => 2),
	3 => array('c' => 3),
);
$arr[key($arr)]['1st'] = true;
var_dump($arr);
