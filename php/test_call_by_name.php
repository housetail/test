<?php
class Foo {
    public function func1() {
        echo __METHOD__;
    }
}

class Bar {
    public function func2() {
        $this->foo = new Foo();
        $this->foo->func1();
    }
}

$bar = new Bar();
$bar->func2();
