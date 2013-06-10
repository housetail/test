<?php
$arr = array(
	'a' => '12 ',
	'b' => '34  ',
);
var_dump($arr);
$arr = array_map('trim', $arr);
var_dump($arr);
