<?php
class Foo {
}

$foo = new Foo();
try {
    $foo->do();
} 
catch (BadFunctionCallException $e) {
    var_dump($e);
}
catch (Exception $e) {
    var_dump($e);
}
