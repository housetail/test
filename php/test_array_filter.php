<?php
/*$movieList = array('a', '1a', '22', '');
var_dump($movieList);
$movieList = array_filter($movieList, 'is_numeric');
var_dump($movieList);*/

$arr = array(
	'1' => '2',
	'2' => '1b',
	'3' => 0,
	'4' => null,
	'5' => false,
	'6' => '',
);
var_dump($arr);
$newArr = array_filter($arr, 'is_numeric');
var_dump($newArr);
