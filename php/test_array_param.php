<?php
/**
 * php函数参数，数组是值传递
 */ 
function proc($arr) {
   $arr[0] = 'aa';
   var_dump($arr);
}

$arr = array('ss', 'bb');
var_dump($arr);

proc($arr);
var_dump($arr);
