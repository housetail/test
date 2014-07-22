<?php
if (0) {
$str = 'cababcabcab';
$arr = explode('ab', $str);
var_dump($arr);
}

class Foo {
    public function bar() {
        echo __FUNCTION__;
        var_dump(__METHOD__);
    }
}

$foo = new Foo();
$foo->bar();


