<?php
$a = new A();
var_dump($a);
$a->dump();


class A {
    public function dump() {
        echo 'A';
    }
}
