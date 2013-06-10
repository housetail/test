<?php

class Sort {
	public static function foo1($a, $b) {
		if ($a == $b) {
			return 0;
		}
		return ($a > $b) ? 1 : -1;
	}

	public static function foo2($a, $b) {
		if ($a == $b) {
			return 0;
		}
		return ($a > $b) ? -1 : 1;
	}

}

$arr = array('a', 'z', 'x');
var_dump($arr);
$arr1 = $arr;
usort($arr1, 'Sort::foo1');
var_dump($arr1);
$arr2 = $arr;
usort($arr2, 'Sort::foo2');
var_dump($arr2);
