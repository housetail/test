<?php
$seedarray = microtime();
echo $seedarray;
$seedstr = explode(" ", $seedarray, 5);
var_dump($seedstr);
$seed = $seedstr[0] * 1000000;
var_dump($seed);
