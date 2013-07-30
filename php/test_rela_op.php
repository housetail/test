<?php
$cate_id = $argv[1];
$result = ($cate_id > 170 && $cate_id < 188 || $cate_id > 190 && $cate_id < 195);
readfile(__FILE__);
var_dump($result);


