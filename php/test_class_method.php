<?php
class Foo {
	public function bar($arg1, $arg2) {
		echo __METHOD__;
	}
}

$class = 'Foo';
$obj = new $class();
$obj->bar('a', 'b');

call_user_func_array(array($obj, 'bar'), array('a', 'b'));
