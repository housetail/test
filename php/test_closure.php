<?php
function array_build($key, $value)
{
    return array($key => $value);
}

$func1 = 'array_build';
$result = call_user_func_array($func1, array('a', 'b'));
var_dump($result);

$result = call_user_func($func1, 'a', 'b');
var_dump($result);
