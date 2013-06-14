<?php
function proc($arr) {
   array_unshift($arr, 'aaa');
   
   global $memory;
   $memory['proc_array'] =  memory_get_peak_usage();
   
   return $arr;
}

$size = !empty($argv[1]) && intval($argv[1]) ? intval($argv[1]) : 100000;

$memory = array();
$memory['init'] = memory_get_peak_usage();

$arr = range(0, $size);
$memory['init_array'] = memory_get_peak_usage();

$arr = proc($arr);
$memory['assign_array'] = memory_get_peak_usage();

var_dump($memory);

