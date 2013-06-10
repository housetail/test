<?php
class C1 {
	public static function m1() {
	}
}

class C2 extends C1{
	public static function m2() {
		echo __CLASS__;
	}
}

var_dump(method_exists('C2', 'm1'));
C2::m2();
