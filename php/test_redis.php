<?php
$redis = new Redis();
$redis->connect('127.0.0.1', '16379');
var_dump(get_class_methods($redis));
