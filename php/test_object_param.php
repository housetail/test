<?php
/**
 * php�������ݣ����������ô���
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

