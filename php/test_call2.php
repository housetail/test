<?php
class Foo {

    public function __call($name, $arguments) {
        var_dump($name);
        var_dump($arguments);
    }
}

$foo = new Foo();
$methodVariable = array($foo, 'someMethod');
var_dump(is_callable($methodVariable, true, $callable_name)); // bool(true)
echo $callable_name, "\n";

class someClass {
    function someMethod() {}
}

$anObject = new someClass();
$methodVariable = array($anObject, 'someMethod');
var_dump(is_callable($methodVariable, true, $callable_name)); // bool(true)
echo $callable_name, "\n";  //  someClass::someMethod