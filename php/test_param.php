<?php
function foo($a, $b)
{
    var_dump(func_get_args());
}

foo(1, 2, 3);

