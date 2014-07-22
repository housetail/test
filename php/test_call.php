<?php
class Foo {
    public function __construct() {}

    public function __call($method, $args) {
        var_dump($method);
        var_dump($args);
        return true;
    }
}

$foo = new Foo();
$foo->sdhudidsdfhui(1,2,3,4,array('a'));
