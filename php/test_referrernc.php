<?php
class Foo
{
	public static function bar(&$a, &$b, &$c)
	{
		$a = $a * $a;
		$b = $b * $b;
		$c = $c * $c;
	}
}

$foo = new Foo();

$a = 1;
$b = 2;
$c = 3;

call_user_func_array(array($foo, 'bar'), array(&$a, &$b, &$c));

var_dump($c);

$foo->bar($a, $b, $c);

var_dump($c);
