<?php
set_error_handler($error_handler);
set_exception_handler($exception_handler);
register_shutdown_function($callback);