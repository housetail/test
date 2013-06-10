<?php
$str = "SELECTED:['1','3','5']";
$ret = explode("','", substr($str, 10, -2));;
var_dump($ret);
