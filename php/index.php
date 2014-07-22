<?php
/*
//hanlder如果返回true，不再往下执行默认的php错误处理函数。
function plusErrorHandler($errno, $errstr, $errfile, $errline, $errcontext)
{
    error_log($errstr);
    return true;
}
set_error_handler('plusErrorHandler');
trigger_error('huaihus', E_USER_NOTICE);
*/

/*
//hanlder如果返回false，继续往下执行默认的php错误处理函数。
function plusErrorHandler($errno, $errstr, $errfile, $errline, $errcontext)
{
    error_log($errstr);
    return false;
}
set_error_handler('plusErrorHandler');
trigger_error('huaihus', E_USER_NOTICE);
*/

//致命的错误只能通过register_shutdown_function获取
function plusShutdownFunction() {
    var_dump(error_get_last());
}
register_shutdown_function('plusShutdownFunction');
hh();
