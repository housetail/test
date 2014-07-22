<?php
function customErrorHandler($code, $msg, $file, $line, $context)
{
    $args = func_get_args();
    file_put_contents(__FUNCTION__, json_encode($args));
}
set_error_handler("customErrorHandler");

function shutdownFunc()
{
    $error = error_get_last();
    if (!empty($error)) {
        echo __FUNCTION__ . PHP_EOL;
        var_dump($error);
    }
}
register_shutdown_function("shutdownFunc");


//$a = 1;
echo $a[1];
//aa();
