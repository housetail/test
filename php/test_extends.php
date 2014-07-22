<?php
abstract class ParentFoo {
    abstract public function func1();

    abstract public function func2();
}

class Foo {
    public function func1() {
        echo __METHOD__;
    }

    public function func2() {
        echo __METHOD__;
    }
}

class ChildFoo extends ParentFoo {
    public function __construct() {
        $this->foo = new Foo();
    }

    public function __call($name, $arguments) {
        call_user_func_array(array($this->foo, $name), $arguments);
    }
}

$testFoo = new ChildFoo();
$testFoo->func1();
