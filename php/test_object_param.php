<?php
/**
 * php函数传递，变量是引用传递
 */

class Foo {
   public $value;
   public function __construct() {
      echo __METHOD__ . ' called' . PHP_EOL;
      $this->value = time();
   }
}

function proc($foo) {
   echo __METHOD__ . ' called' . PHP_EOL;
   sleep(2);
   $foo->value = time();
   echo $foo->value . PHP_EOL;
}

$foo = new Foo();
echo $foo->value . PHP_EOL;
proc($foo);
echo $foo->value . PHP_EOL;

