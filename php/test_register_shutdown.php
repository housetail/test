<?php
function shutdown_function (&$test) {
     echo __FUNCTION__.'(): $test = '.$test."\n";
     debug_print_backtrace();
 }

$test = 1;
register_shutdown_function('shutdown_function', &$test);
 echo '$test = '.$test."\n";

// do some stuff and change the variable values
$test = 2;

// now the shutdown function gets called
exit(0);
?>