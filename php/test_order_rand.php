<?php
$c = 500;
$n = 1000000;
$result = 1.0;
$result1 = 1.0;
bcscale(7);
for ($i = 1; $i < $c; $i++) {
    $result = $result * (1 - $i/$n);
    $result1 = bcmul($result1, bcsub(1, bcdiv($i, $n)));
}

var_dump($result);
var_dump($result1);
